@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Portfolio Item</h2>

    <form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $portfolio->title) }}" required>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="klien">Klien</label>
            <input type="text" name="klien" class="form-control" value="{{ old('klien', $portfolio->klien) }}" required>
            @error('klien')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="category">Category</label>
            <input type="text" name="category" class="form-control" value="{{ old('category', $portfolio->category) }}" required>
            @error('category')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="4">{{ old('description', $portfolio->description) }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>        

        <div class="form-group mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" accept="image/*">
            <small class="form-text text-muted">Leave empty to keep the current image.</small>
        </div>

        <div class="form-group mb-3">
            <label for="video_url">URL</label>
            <input type="url" name="video_url" class="form-control" value="{{ old('video_url', $portfolio->video_url) }}">
            @error('video_url')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="pdf">PDF File</label>
            <input type="file" name="pdf" class="form-control" accept=".pdf">
            <small class="form-text text-muted">Leave empty to keep the current PDF file.</small>
        </div>

        <div class="form-group mb-3">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control" value="{{ old('date', $portfolio->date) }}">
            @error('date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update Portfolio Item</button>
        <a href="{{ route('portfolio.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
