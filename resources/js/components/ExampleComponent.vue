<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
                    <div class="card-body">
            <section class="table-responsive">
                <table id="UserTable" class="table">
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
                                <div class="d-flex justify-content-center">
                                    <button
                                        class="btn btn-warning me-3"
                                        type="button"
                                        @click="editUser(user)"
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
        </div>
                    <div class="card-body">I'm an example component.</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
};
</script>
