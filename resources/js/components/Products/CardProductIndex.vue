<template>
    <section class="d-flex justify-content-between flex-wrap">
        <div id="productCard" class="card mx-2 my-4" style="width: 20rem; height: 20rem" v-for="(product, index) in products" :key="index" >
            <div class="card-body">
                <h5 class="card-title">{{ product.nombre }}</h5>
                <img :src="`/storage/images/${product.imagenProduct}`" alt=" " class="img-fluid w-25"/>
                <p class="card-text">Categoria: {{ product.category_id}}</p>
                <p class="card-text">Valor: ${{ product.precio }}</p>
                <p class="card-text">{{ product.descripcion }}</p>
                <p class="card-text">Hay stock: {{ product.stock }}</p>
                <a class="btn btn-primary" v-on:click="shotAlert"
                    >Agregar al carrito</a
                >
            </div>
        </div>
    </section>
</template>
<script>
export default {
    props: ["products_data"],
    data() {
        return {
            products: [],
            product: null,
        };
    },
    created() {
        this.index();
    },
    mounted() {
        $("#productCard");
    },

    methods: {
        async index() {
            this.products = [...this.products_data];
        },
        shotAlert: function (event) {
            event.preventDefault();
            alert("Inicie sesión por favor...");
        },
    },
};
</script>
