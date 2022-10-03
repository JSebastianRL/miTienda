import "./bootstrap";
import { createApp } from "vue";
import TableUser from './components/Users/TableUser.vue'
import ExampleComponent from './components/ExampleComponent.vue'
import TableProduct from './components/Products/TableProduct.vue'
import CardProduct from './components/Products/CardProduct.vue'
import TableUser from './components/Users/TableUser.vue'

const app = createApp({
    components:{
        CardProduct,
        TableUser,
        ExampleComponent,
        TableProduct,
        TableUser
    }
});


app.mount("#app");


