import "./bootstrap";
import { createApp } from "vue";
import TableUser from './components/Users/TableUser.vue'
import TableProduct from './components/Products/TableProduct.vue'
import CardProductHome from './components/Products/CardProductHome.vue'
import CardProductIndex from './components/Products/CardProductIndex.vue'

const app = createApp({
    components:{
        CardProductHome,
        TableUser,
        TableProduct,
        CardProductIndex
    }
});


app.mount("#app");


