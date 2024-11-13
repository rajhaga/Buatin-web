@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Add New Portfolio Item</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        
    <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="klien">Klien</label>
            <input type="text" name="klien" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" name="category" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" accept="image/*" required>
        </div>
        
        <div class="form-group">
            <label for="video">Upload Video</label>
            <input type="file" name="video" class="form-control" accept="video/*,audio/*">
            <small class="form-text text-muted">Format yang didukung: MP4, AVI, MP3.</small>
        </div>
        <div class="form-group">
            <label for="video">Video (URL)</label>
            <input type="url" name="video_url" class="form-control" placeholder="Masukkan link video (opsional)">
        </div>
        <div class="form-group">
            <label for="pdf">PDF File</label>
            <input type="file" name="pdf" class="form-control" accept=".pdf">
        </div>

        <button type="submit" class="btn btn-success">Add Portfolio Item</button>
        <a href="{{ route('portfolio.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
