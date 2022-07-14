@extends('layouts.app')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/style-product.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@stop
@section('title')
    <title>KASA-Shop</title>
@stop
@section('content')
    <div class="product-wrapper">
        <div class="product-image">
            <img src="{{ $product->image }}" alt="product"/>
        </div>
        <div class="product-details">
            <div class="product-name">
                <h3>{{ $product->name }}</h3>
            </div>
            <div class="product-description">
                <p>{{ $product->fulldescription }}</p>
            </div>
            <div class="product-price">
                <h4>${{ $product->price }}</h4>
            </div>
            <div class="buy-btn">
                <a href="{{ route('add.to.cart', $product->id) }}"><button>Add to cart</button></a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
@stop
