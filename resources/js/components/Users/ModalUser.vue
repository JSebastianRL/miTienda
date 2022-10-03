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
                        Editar
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        @click="$parent.closeModal"
                    ></button>
                </div>
                <div class="modal-body">
                    <form
                        @submit.prevent="storeProduct"
                        enctype="multipart/form-data"
                    >
                        <div class="container">
                            <div class="mb-3">
                                <label for="name" class="form-label"
                                    >Nombre</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
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
                                />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label"
                                    >confirmar contraseña</label
                                >
                                <input
                                    type="password"
                                    class="form-control"
                                    id="password_confirmation"
                                    name="password_confirmation"
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
                                Editar producto
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
    },
    created() {
        this.index();
    },
    methods: {
        async index() {
        }
    },
};
</script>
