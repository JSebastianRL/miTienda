<template>
    <section class="d-flex justify-content-between flex-wrap">
        <div
            id="productCard"
            class="card mx-2 my-4"
            style="width: 17rem; height: 17rem"
            v-for="(product, index) in products"
            :key="index"
        >
            <img
                src="/storage/app/public/images/audifonos.jpg"
                class="card-img-top"
                alt="default"
            />
            <div class="card-body">
                <h5 class="card-title">{{ product.nombre }}</h5>
                <p class="card-text">{{ product.precio }}</p>
                <p class="card-text">{{ product.descripcion }}</p>
                <a href="" class="btn btn-primary">Agregar al carrito</a>
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
    },
};
</script>
