@extends('layouts.app-master')
@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Add new product</h1>
        <div class="lead">
            Add new product and assign description.
        </div>
        <div class="container mt-4">
            <form method="POST" action="">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="{{ old('name') }}" type="text" class="form-control" name="name" placeholder="Name" required>
                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input value="{{ old('slug') }}" type="text" class="form-control" name="slug" placeholder="Slug" required>
                    @if ($errors->has('slug'))
                        <span class="text-danger text-left">{{ $errors->first('slug') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input value="{{ old('description') }}" type="text" class="form-control" name="description" placeholder="Description" required>
                    @if ($errors->has('description'))
                        <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="fulldescription" class="form-label">Full Description</label>
                    <input value="{{ old('fulldescription') }}" type="text" class="form-control" name="fulldescription" placeholder="Full Description" required>
                    @if ($errors->has('fulldescription'))
                        <span class="text-danger text-left">{{ $errors->first('fulldescription') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input value="{{ old('image') }}" type="text" class="form-control" name="image" placeholder="Image" required>
                    @if ($errors->has('image'))
                        <span class="text-danger text-left">{{ $errors->first('image') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input value="{{ old('price') }}" type="text" class="form-control" name="price" placeholder="Price" required>
                    @if ($errors->has('price'))
                        <span class="text-danger text-left">{{ $errors->first('price') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Save product</button>
                <a href="{{ route('crud.crud') }}" class="btn btn-default">Back</a>
            </form>
        </div>
    </div>
@endsection
