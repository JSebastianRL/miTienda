@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Usuarios</h1>
                <a href="{{ route('show.product.table') }}" class="btn btn-primary">Atras</a>
            </div>
            <div class="card-body">
                <form action="{{ route('create.product') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">Categoria</label>
                        <select name="category_id" class="form-control">
                            @foreach ($categories as $category )
                                <option value="{{ $category->id }} ">{{ $category->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="precio" name="precio">
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="text" class="form-control" id="stock" name="stock">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descipción</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Crear Usuario" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
