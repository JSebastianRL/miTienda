<template>
    <section class="card">
        <div class="card-header">
            <h2>Usuarios</h2>
            <a
            class="btn btn-success" t
            ype="button"
            @click.prevent="createUser"
                >Crear Usuario</a
            >
        </div>
        <div class="card-body">
            <section class="table-responsive ">
                <table id="UserTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(user, index) in users" :key="index">
                            <td>{{ user.id }}</td>
                            <td>{{ user.name }}</td>
                            <td>{{ user.email }}</td>
                            <td>
                                <div class="d-flex justify-content-start">
                                    <button
                                        class="btn btn-warning me-3"
                                        type="button"
                                        @click.prevent="getUser(user.id)"
                                    >
                                        Editar
                                    </button>
                                    <button
                                        class="btn btn-danger"
                                        type="button"
                                        @click="deleteUser(user.id)"
                                    >
                                        Eliminar
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <div >
                <modal-user :user="user"></modal-user>
            </div>
        </div>
    </section>
</template>

<script>
import ModalUser from "./ModalUser.vue";
export default {
    props: ["users_data"],
    components: {
        ModalUser,
    },
    data() {
        return {
            users: [],
            user: {
                role: null,
            },
            modal: null,
            load_modal: null,
        };
    },
    created() {
        this.index();
    },
    mounted() {
        $("#UserTable").DataTable();
    },
    methods: {
        async index() {
            this.users = [...this.users_data];
        },
        createUser() {
            this.openModal();
        },
        async getUser(user_id) {
            let { data } = await axios.get(`/User/getUser/${user_id}`);
            this.user = data.user;
            this.openModal();
        },
        openModal() {
            this.load_modal = true;
            setTimeout(() => {
                let modal = new bootstrap.Modal(
                    document.getElementById("userModal"),
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
