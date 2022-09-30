@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.alerts')
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Home</h1>
        </div>
        <div class="card-body">
            <section class="table-responsive">
                {{-- <table class="table table-striped table-dark">
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
                        {{-- @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->category_id }}</td>
                                <td>{{ $product->nombre }}</td>
                                <td>{{ $product->precio }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>{{ $product->descripcion }}</td>
                                <td>

                                </td>
                            </tr>
                        @endforeach --}}
                    {{-- </tbody>
                </table>  --}}
            </section>
        </div>
    </div>
</div>
@endsection
