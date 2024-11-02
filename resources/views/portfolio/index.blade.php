?>
@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="heading">
        <h2>Portfolio</h2>
        <a href="{{ route('portfolio.create') }}" class="btn btn-primary">Add New Portfolio Item</a>
    </div>
    <div class="row">
        @foreach ($portfolios as $portfolio)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('storage/' . $portfolio->image) }}" class="card-img-top" alt="{{ $portfolio->title }}">
                <div class="card-body">
                    <h4>{{ $portfolio->title }}</h4>
                    <p>{{ $portfolio->subtitle }}</p>
                    <p>Category: {{ $portfolio->category }}</p>
                    <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('portfolio.destroy', $portfolio->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
