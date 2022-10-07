@extends('layouts.app')

@section('content')
    <div class="container">
        @include('layouts.alerts')
        <div class="card">
            <card-product-home :products_data="{{ $products }}"></card-product-home>

        </div>

    </div>
@endsection
