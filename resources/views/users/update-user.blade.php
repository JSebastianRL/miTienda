@extends('layouts.app')

@section('content')
    <div class="container">
        @include('layouts.alerts')
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Editar Usuarios</h1>
                <a href="{{ route('show.user.table') }}" class="btn btn-primary">Atras</a>
            </div>
            <div class="card-body">
                <form action="{{ route('update.user', ['user' => $user->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('layouts.user.form-user')
                </form>
            </div>
        </div>
    </div>
@endsection
