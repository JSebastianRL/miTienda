@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Usuarios</h1>
                <a href="{{ route('show.user.table') }}" class="btn btn-primary">Atras</a>
            </div>
            <div class="card-body">
                <form action="{{ route('create.user') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">contraseña</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Crear Usuario" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
