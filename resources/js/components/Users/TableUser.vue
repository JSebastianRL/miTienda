<template>
    <section class="card">
        <div class="card-header">
            <h2>Usuarios</h2>
        </div>
        <div class="card-body">
            <section class="table-responsive">
                <table id="UserTable" class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(user, index) in users" :key="index">
                            <td>{{user.name}}</td>
                            <td>{{user.email}}</td>
                            <td>
                                <div>
                                    <button class="btn btn-warning" type="button" @click="editUser(user)">Editar</button>
                                    <button class="btn btn-danger" type="button" @click="deleteUser(user.id)">Eliminar</button>
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
    name: "",

    data() {
        return {};
    },
    created() {
        this.index();
    },
    methods: {
        async index() {},
    },
};
</script>
