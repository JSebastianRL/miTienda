@extends('layouts.app')

@section('content')
    <div class="container">
        @include('layouts.alerts')

        {{-- <div class="container">
        @include('layouts.alerts')
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Usuarios</h1>
                <a href="{{ route('show.create.user') }}" class="btn btn-success">Crear nuevo Usuario</a>
            </div>
            <div class="card-body">
                <section class="table-responsive">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Roll</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                        <div class="d-flex justify-content-start">
                                            <a href="{{ route('show.update.user', ['user' => $user->id]) }}"
                                                class="btn btn-warning me-2">Editar</a>
                                            <form action="{{ route('delete.user', ['user' => $user->id]) }}"method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Elminar</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div> --}}
    <table-user :users="{{$users}}"></table-user>

@endsection
