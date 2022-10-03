<template>
    <section class="card">
        <div class="card-header">
            <h2>Usuarios</h2>
        </div>
        <div class="card-body">
            <section class="table-responsive">
                <table id="UserTable" class="table table-striped table-dark">
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
                                        @click="editUser()"
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
            <div v-if="load_model">
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
            load_model: false,
            modal: null,
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
        editUser(user_id) {
            this.openModal();
        },
        openModal() {
            this.load_model = true;
            this.modal = new bootstrap.Modal(
                document.getElementById("userModal"),
                { Keyboard: false }
            );
            this.modal.show();
            const modal = document.getElementById("userModal");
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
