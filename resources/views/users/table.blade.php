@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Usuarios</h1>
                <a href="{{route('show.create.user')}}" class="btn btn-success">Crear nuevo producto</a>
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
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>
                                        <div class="d-flex justify-content-start">
                                            <button class="btn btn-warning me-2">Editar</button>
                                            <button class="btn btn-danger">Elminar</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>
@endsection