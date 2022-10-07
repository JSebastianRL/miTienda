<template>
    <section class="card">
        <div class="card-header">
            <h2>Productos</h2>
            <a
                class="btn btn-success"
                type="button"
                @click.prevent="createProduct"
                >Crear Producto</a
            >
        </div>
        <div class="card-body">
            <section class="table-responsive d-flex justify-content-between">
                <table id="productTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Id Categoria</th>
                            <th>Nombre</th>
                            <th>Imagen Producto</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Descripcion</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(product, index) in products" :key="index">
                            <td>{{ product.id }}</td>
                            <td>{{ product.category_id }}</td>
                            <td>{{ product.nombre }}</td>
                            <td>
                                <img
                                    :src="`/storage/images/${product.imagenProduct}`"
                                    alt="imagenProduct"
                                    class="img-fluid w-50"
                                />
                            </td>
                            <td>{{ product.precio }}</td>
                            <td>{{ product.stock }}</td>
                            <td>{{ product.descripcion }}</td>
                            <td>
                                <div class="d-flex justify-content-start">
                                    <button
                                        class="btn btn-warning me-3"
                                        type="button"
                                        @click="getProduct(product.id)"
                                    >
                                        Editar
                                    </button>
                                    <button
                                        class="btn btn-danger"
                                        type="button"
                                        @click="deleteProduct(product.id)"
                                    >
                                        Eliminar
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <div>
                <modal-product :product="product"></modal-product>
            </div>
        </div>
    </section>
</template>

<script>
import ModalProduct from "@/components/Products/ModalProduct.vue";
export default {
    props: ["products_data"],
    components: {
        ModalProduct,
    },
    data() {
        return {
            products: [],
            product: {
                category_id: null,
            },
            load_modal: false,
        };
    },
    created() {
        this.index();
    },
    mounted() {
        $("#productTable").DataTable();
    },
    methods: {
        async index() {
            this.products = [...this.products_data];
        },
        createProduct() {
            this.openModal();
        },
        async getProduct(product_id) {
            let { data } = await axios.get(`/Product/getProduct/${product_id}`);
            this.product = data.product;
            this.openModal();
        },
        openModal() {
            this.load_modal = true;
            setTimeout(() => {
                let modal = new bootstrap.Modal(
                    document.getElementById("productModal"),
                    {
                        Keyboard: false,
                    }
                );
                modal.show();
                console.log(modal);
            }, 50);
        },
        closeModal() {
            this.modal.hide();
        },
    },
};
</script>
