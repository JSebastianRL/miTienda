<template>
    <div
        class="modal fade"
        id="userModal"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        {{ status }} Usuario
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        @click="$parent.closeModal"
                    ></button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="saveUser">
                        <div class="container mb-3">
                            <div class="mb-3">
                                <label for="name" class="form-label"
                                    >Nombre</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    placeholder="Digite nombre del usuario"
                                    v-model="user.name"
                                    required=""
                                />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"
                                    >Correo</label
                                >
                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="Digite correo del usuario"
                                    v-model="user.email"
                                    required=""
                                />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label"
                                    >contraseña</label
                                >
                                <input
                                    type="password"
                                    class="form-control"
                                    id="password"
                                    name="password"
                                    placeholder="************"
                                    v-model="user.password"
                                    required=""
                                />
                            </div>
                            <div class="mb-3">
                                <label
                                    for="password_confirmation"
                                    class="form-label"
                                    >confirmar contraseña</label
                                >
                                <input
                                    type="password"
                                    class="form-control"
                                    id="password_confirmation"
                                    name="password_confirmation"
                                    placeholder="************"
                                    v-model="user.password_confirmation"
                                    required=""
                                />
                            </div>
                        </div>

                        <div>
                            <button
                                type="button"
                                class="btn btn-secondary me-3"
                                @click="$parent.closeModal"
                            >
                                Cancelar
                            </button>
                            <button type="submit" class="btn btn-primary">
                                {{ status }} usuario
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["user"],
    data() {
        return {
            status: "Crear",
        };
    },
    created() {
        this.index();
    },
    methods: {
        async index() {
            this.validateUsage();
        },
        formData() {
            const form_data = new FormData();
            form_data.append("name", this.user.name);
            form_data.append("email", this.user.email);
            form_data.append("password", this.user.password);
            return form_data;
        },
        async saveUser() {
            if (this.status == "Editar") {
                this.editUser();
                return false;
            }
            let form_data = this.formData();
            let { data } = await axios.post(`/Users/CreateUser/`, form_data);
            this.product = data.newUser;
            alert("Usuario creado correctamente");
        },
        async editUser() {
            let form_data = this.formData();
            let { data } = await axios.put(
                `/Users/UpdateUser/${this.user.id}`,
                form_data
            );
            this.user = data.updateUser;
            alert("Usuario guardado correctamente");
        },
        validateUsage() {
            console.log(this.user);
            if (this.user.name) this.status = "Editar";
            else this.status = "Crear";
        },
    },
};
</script>
