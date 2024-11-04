@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Create Package</h2>

    <form action="{{ route('admin.packages.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Create</button>
    </form>
</div>
@endsection
