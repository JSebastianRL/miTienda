<template>
    <section class="card">
        <div class="card-header">
            <h2>Productos</h2>
        </div>
        <div class="card-body">
            <section class="table-responsive">
                <table id="ProductCard" class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Id Categoria</th>
                            <th>Nombre</th>
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
                            <td>{{ product.precio }}</td>
                            <td>{{ product.stock }}</td>
                            <td>{{ product.descripcion }}</td>
                            <td>
                                <div class="d-flex justify-content-start">
                                    <button
                                        class="btn btn-warning me-3"
                                        type="button"
                                        @click="editProduct(product)"
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
        </div>
    </section>
</template>

<script>
export default {
    props: ["products_data"],

    data() {
        return {
            products: [],
        };
    },
    created() {
        this.index();
    },
    mounted() {
        $('#ProductCard').DataTable();
    },

    methods: {
        async index() {
            this.products = [...this.products_data];
        },
        editProduct(product) {},
        deleteProduct(product_id) {},
    },
};
</script>
