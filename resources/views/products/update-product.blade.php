@extends('layouts.app')

@section('content')
    <div class="container">
        @include('layouts.alerts')
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Editar Productos</h1>
                <a href="{{ route('show.product.table') }}" class="btn btn-primary">Atras</a>
            </div>
            <div class="card-body">
                <form action="{{ route('update.product', ['product' => $product->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('layouts.product.form-product')
                </form>
            </div>
        </div>
    </div>
@endsection
