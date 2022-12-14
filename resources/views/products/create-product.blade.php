@extends('layouts.app')

@section('content')
    <div class="container">
        @include('layouts.alerts')
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Productos</h1>
                <a href="{{ route('show.product.table') }}" class="btn btn-primary">Atras</a>
            </div>
            <div class="card-body">
                <form action="{{route('create.product')}}" method="POST">
                    @csrf
                    @include('layouts.product.form-product', ['type'=> 'create'])
                </form>
            </div>
        </div>
    </div>
@endsection
