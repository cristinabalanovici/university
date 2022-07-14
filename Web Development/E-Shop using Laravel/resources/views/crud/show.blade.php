@extends('layouts.app-master')
@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Show product</h1>
        <div class="lead">
        </div>
        <div class="container mt-4">
            <div>
                Name: {{ $product->name }}
            </div>
            <div>
                Slug: {{ $product->slug }}
            </div>
            <div>
                Description: {{ $product->description }}
            </div>
            <div>
            Full Description: {{ $product->fullldescription }}
            </div>
            <div>
                Image: {{ $product->image }}
            </div>
            <div>
                Price: {{ $product->price }}
            </div>
        </div>
    </div>
    <div class="mt-4">
        <a href="{{ route('crud.edit', $product->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('crud.crud') }}" class="btn btn-default">Back</a>
    </div>
@endsection