@extends('layouts.app')

@section('content')
    <div class="container">
        @include('layouts.alerts')
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Usuarios</h1>
                <a href="{{ route('show.user.table') }}" class="btn btn-primary">Atras</a>
            </div>
            <div class="card-body">
                <form action="{{ route('create.user') }}" method="POST">
                    @csrf
                    @include('layouts.user.form-user', ['type'=> 'create'])
                </form>
            </div>
        </div>
    </div>
@endsection
