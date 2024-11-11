@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Edit Package</h2>

    <form action="{{ route('admin.packages.update', $package->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $package->name }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" class="form-control" value="{{ $package->price }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ $package->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="category">category</label>
            <input type="category" name="category" class="form-control" value="{{ $package->category }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>
</div>
@endsection
