@extends('layouts.app-master')
@section('content')
 <div class="bg-light p-4 rounded">
    <h1>Products</h1>
        <div class="lead">
            Manage your products here.
            <a href="{{ route('crud.create') }}" class="btn btn-primary btn-sm float-right">Add new product</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" width="1%">#</th>
                    <th scope="col" width="10%">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col" width="10%">Description</th>
                    <th scope="col" width="45%">Full Description</th>
                    <th scope="col" width="5%">Image</th>
                    <th scope="col" width="10%">Price</th>
                    <th scope="col" width="1%" colspan="3"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->slug }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->fulldescription }}</td>
                    <td>{{ $product->image }}</td>
                    <td>{{ $product->price }}</td>
                    <td><a href="{{ route('crud.show', $product->id) }}" class="btn btn-warning btnsm">Show</a></td>
                    <td><a href="{{ route('crud.edit', $product->id) }}" class="btn btn-info btnsm">Edit</a></td>
                    <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['crud.destroy', $product->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    <div class="d-flex">
        {!! $products->links() !!}
    </div>
</div>
@endsection