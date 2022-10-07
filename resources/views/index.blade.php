@extends('layouts.app')

@section('content')
    <div class="container">
        @include('layouts.alerts')
        <div class="card">
            <div class="d-flex justify-content-center">
                <a href="teclados" class="btn me-3"> <h1>Teclados</h1> </a>
                <a href="monitores" class="btn me-3"> <h1>Monitores</h1> </a>
                <a href="mouse" class="btn me-3"> <h1>Mouses</h1> </a>
                <a href="audifonos" class="btn me-3"> <h1>Audifonos</h1> </a>
            </div>
            <card-product-index :products_data="{{ $products }}"></card-product-index>
            {{-- <table-product :products_data="{{ $products }}"></table-product> --}}
        </div>

    </div>
@endsection
