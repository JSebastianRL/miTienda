@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Prodcutos</h1>
                <a href="{{route('show.create.product')}}" class="btn btn-success">Crear nuevo producto</a>
            </div>
            <div class="card-body">
                <section class="table-responsive">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Id Categoria</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th>Descripcion</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->category_id}}</td>
                                    <td>{{$product->nombre}}</td>
                                    <td>{{$product->precio}}</td>
                                    <td>{{$product->stock}}</td>
                                    <td>{{$product->descripcion}}</td>
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
