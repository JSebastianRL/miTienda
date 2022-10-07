<template>
    <div
        class="modal fade"
        id="productModal"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        {{ status }} producto
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        @click="$parent.closeModal"
                    ></button>
                </div>
                <div class="modal-body">
                    <form
                        @submit.prevent="saveProduct"
                        enctype="multipart/form-data"
                    >
                        <div class="container mb-3">
                            <div class="mb-3">
                                <label for="category_id" class="form-lable"
                                    >Categoria</label
                                >
                                <select
                                    class="form-control"
                                    name="category"
                                    id="category"
                                    v-model="product.category_id"
                                    required=""
                                >
                                    <option value="1">Teclado</option>
                                    <option value="2">Monitor</option>
                                    <option value="3">Mause</option>
                                    <option value="4">Audifonos</option>
                                </select>
                            </div>
                        </div>
                        <div
                            class="mb-3 d-flex flex-column justify-content-center align-items-center"
                        >
                                <label for="imagenProduct" class="form-lable"
                                    >Imagen</label
                                >
                            <img
                                class="img-fluid"
                                :src="`${product.imagenProduct}`"
                                alt=""
                                v-if="product.imagenProduct"
                            />
                            <img
                                class="img-fluid"
                                :src="`/storage/images/${product.imagenProduct}`"
                                alt=""
                                v-else
                            />
                            <div>
                                <input
                                    type="file"
                                    class="form-control"
                                    id="imagenProduct"
                                    name="imagenProduct"
                                    v-on:change="previewFile"
                                    required=""
                                />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-lable"
                                >Nombre</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="nombre"
                                name="nombre"
                                placeholder="Digite el nombre del producto"
                                v-model="product.nombre"
                                required=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-lable"
                                >Precio</label
                            >
                            <input
                                type="number"
                                class="form-control"
                                id="precio"
                                name="precio"
                                placeholder="Digite precio del producto"
                                v-model="product.precio"
                                required=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-lable">Stock</label>
                            <input
                                type="text"
                                class="form-control"
                                id="stock"
                                name="stock"
                                placeholder="Digite si hay o no hay stock del producto"
                                v-model="product.stock"
                                required=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-lable"
                                >Descipción</label
                            >
                            <textarea
                                type="text"
                                class="form-control"
                                id="descripcion"
                                name="descripcion"
                                placeholder="Digite una descripcion del producto"
                                v-model="product.descripcion"
                                required=""
                            />
                        </div>
                        <div>
                            <button
                                type="button"
                                class="btn btn-secondary me-3"
                                @click="$parent.closeModal"
                            >
                                Cancelar
                            </button>
                            <button type="submit" class="btn btn-primary">
                                {{ status }} producto
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["product"],
    data() {
        return {
            file: "",
            status: "Crear",
        };
    },
    created() {
        this.index();
    },
    methods: {
        async index() {
            this.validateUsage();
        },
        formData() {
            const form_data = new FormData();
            form_data.append("category_id", this.product.category_id);
            form_data.append("imagenProduct", this.file, this.file.name);
            form_data.append("nombre", this.product.nombre);
            form_data.append("precio", this.product.precio);
            form_data.append("stock", this.product.stock);
            form_data.append("descripcion", this.product.descripcion);
            return form_data;
        },
        async saveProduct() {
            if (this.status == "Editar") {
                this.editProduct();
                return false;
            }
            let form_data = this.formData();
            let { data } = await axios.post(`/Product/Create/`, form_data);
            this.product = data.newProduct;
            alert("Producto creado correctamente");
        },
        async editProduct() {
            let form_data = this.formData();
            let { data } = await axios.put(
                `/Product/Update/${this.product.id}`,
                form_data
            );
            this.product = data.updateProduct;
            alert("Producto guardado correctamente");
        },
        validateUsage() {
            console.log(this.product);
            if (this.product.nombre) this.status = "Editar";
            else this.status = "Crear";
        },
        previewFile(event) {
            this.file = event.target.files[0];
            this.product.imagenProduct = URL.createObjectURL(this.file);
            this.showPreviw = true;
        },
    },
};
</script>
