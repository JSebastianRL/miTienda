import "./bootstrap";
import { createApp } from "vue";
import TableUser from './components/Users/TableUser.vue'
import ExampleComponent from './components/ExampleComponent.vue'
import TableProduct from './components/Products/TableProduct.vue'
const app = createApp({
    components:{
        TableUser,
        ExampleComponent,
        TableProduct
    }
});


app.mount("#app");


