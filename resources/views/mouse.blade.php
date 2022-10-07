@extends('layouts.app')

@section('content')
    <div class="container">
        @include('layouts.alerts')
        <div class="container">
            <div class="d-flex justify-content-center">
                <a href="" class="btn me-3"> <h1>Mouses</h1> </a>
            </div>
        </div>
        <div class="card">
            <card-product-home :products_data="{{ $products }}"></card-product-home>

        </div>

    </div>
@endsection
