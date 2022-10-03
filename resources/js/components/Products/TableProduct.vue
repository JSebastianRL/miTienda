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
            <section class="table-responsive">
                <table id="productTable" class="table table-striped table-dark">
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
                                    :src="`/storage/app/public/images/${product.imagen_product}`"
                                    alt="imagen_product"
                                    width="30"/>
                            </td>
                            <td>{{ product.precio }}</td>
                            <td>{{ product.stock }}</td>
                            <td>{{ product.descripcion }}</td>
                            <td>
                                <div class="d-flex justify-content-start">
                                    <button
                                        class="btn btn-warning me-3"
                                        type="button"
                                        @click="createProduct()"
                                    >
                                        Editar
                                    </button>
                                    <button
                                        class="btn btn-danger"
                                        type="button"
                                        @click="editProduct(product.id)"
                                    >
                                        Eliminar
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <div v-if="load_model">
                <modal-product :product="product"></modal-product>
            </div>
        </div>
    </section>
</template>

<script>
// import ModalProduct from '@/components/Products/ModalProduct.vue'
import ModalProduct from "./ModalProduct.vue";
import axios from "axios";
export default {
    props: ["products_data"],
    components: {
        ModalProduct,
    },
    data() {
        return {
            products: [],
            product: null,
            load_model: false,
            modal: null,
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
            this.product = null;
            this.openModal();
        },
        async editProduct(product_id) {
            const { data } = await axios.get(
                "/Product/showProductTable/${product_id}"
            );
            this.product = data;
            this.openModal();
        },
        openModal() {
            this.load_model = true;
            this.modal = new bootstrap.Modal(
                document.getElementById("productModal"),
                { Keyboard: false }
            );
            this.modal.show();
            const modal = document.getElementById("productModal");
            modal.addEventListener(
                "hidden.bs.modal",
                () => (this.load_model = false)
            );
        },
        closeModal() {
            this.modal.hide();
        },
    },
};
</script>
