import "./bootstrap";
import { createApp } from "vue";
import TableUser from './components/Users/TableUser.vue'

const app = createApp({
    components:{
        TableUser
    }
});


app.mount("#app");


