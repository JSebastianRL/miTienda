    <div class="container">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ isset($user) ? $user->name : '' }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ isset($user) ? $user->email : '' }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">contraseña</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <input type="submit" value="Actualizar Usuario" class="btn btn-success">
        </div>
