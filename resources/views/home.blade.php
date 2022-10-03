@extends('layouts.app')

@section('content')
<div class="container">
    <card-product :products_data="{{$products}}"></card-product>

</div>
@endsection
