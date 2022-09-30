import "./bootstrap";
import { createApp } from "vue";
import TableUser from './components/Users/TableUser.vue'
import ExampleComponent from './components/ExampleComponent.vue'
import TableProduct from './components/Products/TableProduct.vue'
import CardProduct from './components/Products/CardProduct.vue'
const app = createApp({
    components:{
        CardProduct,
        TableUser,
        ExampleComponent,
        TableProduct
    }
});


app.mount("#app");


