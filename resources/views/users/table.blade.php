@extends('layouts.app')

@section('content')
    <section    class="table-responsive">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Juan</td>
                    <td>Juan@email.com</td>
                    <td><div>
                        <button class="btn btn-warning">Editar</button>
                        <button class="btn btn-danger">Elminar</button>
                    </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
@endsection
