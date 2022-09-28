@extends('layouts.app')

@section('content')
    <div class="container">
        @include('layouts.alerts')

        {{-- <div class="card">
            <div class="card-header">
                <h1 class="text-center">Prodcutos</h1>
                <a href="{{ route('show.create.product') }}" class="btn btn-success">Crear nuevo producto</a>
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
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->category_id }}</td>
                                    <td>{{ $product->nombre }}</td>
                                    <td>{{ $product->precio }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>{{ $product->descripcion }}</td>
                                    <td>
                                        <div class="d-flex justify-content-start">
                                            <a href="{{route('show.update.product', ['product'=> $product->id])}}" class="btn btn-warning me-2">Editar</a>
                                            <form action="{{ route('delete.product', ['product' => $product->id]) }}"method="POST">
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
        </div> --}}
    </div>
@endsection
