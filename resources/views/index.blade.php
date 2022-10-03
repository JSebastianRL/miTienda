@extends('layouts.app')

@section('content')
    <div class="container">
        @include('layouts.alerts')
        <div class="card">
            <card-product :products_data="{{ $products }}"></card-product>
            {{-- <table-product :products_data="{{ $products }}"></table-product> --}}
        </div>

    </div>
@endsection
