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
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        {{ status }}
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        @click="$parent.closeModal"
                    ></button>
                </div>
                <div class="modal-body">
                    <form
                        @submit.prevent="storeProduct"
                        enctype="multipart/form-data"
                    >
                        <div class="mb-3">
                                    <label for="">Categoria</label>
                                    <!-- v-model="products.category_id" -->
                                    <select name="category" id="category" class="form-control" >
                                        <option value="1">Teclado</option>
                                        <option value="2">Monitor</option>
                                        <option value="3">Mause</option>
                                        <option value="4">Audifonos</option>
                                    </select>
                                </div>
                        <div class="mb-3">
                            <label for="imagen_product_file" class="form-label"
                                >Imagen</label
                            >
                            <input
                                type="file"
                                class="form-control"
                                id="imagen_product_file"
                                name="imagen_product_file"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label"
                                >Nombre</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="nombre"
                                name="nombre"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label"
                                >Precio</label
                            >
                            <input
                                type="number"
                                class="form-control"
                                id="precio"
                                name="precio"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input
                                type="text"
                                class="form-control"
                                id="stock"
                                name="stock"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label"
                                >Descipción</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="descripcion"
                                name="descripcion"
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
            status: "Crear ",
        };
    },
    created() {
        this.index();
    },
    methods: {
        async index() {
            this.validateUsage();
        },
        validateUsage() {
            if (this.product) this.status = "Editar ";
            else this.status = "Crear";
        },
    },
};
</script>
