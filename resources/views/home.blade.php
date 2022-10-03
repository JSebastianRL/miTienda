@extends('layouts.app')

@section('content')
<div class="container">
    <card-product :products_data="{{$products}}"></card-product>
    {{-- <table-product :products_data="{{$products}}"></table-product> --}}
</div>
@endsection
