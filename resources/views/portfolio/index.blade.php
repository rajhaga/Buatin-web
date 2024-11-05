@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="heading mb-4 text-center">
        <h2>Portfolio</h2>
        <a href="{{ route('portfolio.create') }}" class="btn btn-primary">Add New Portfolio Item</a>
    </div>
    <div class="row">
        @foreach ($portfolios as $portfolio)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-light">
                <img src="{{ asset('storage/' . $portfolio->image) }}" class="card-img-top" alt="{{ $portfolio->title }}">
                <div class="card-body">
                    <h4 class="card-title">{{ $portfolio->title }}</h4>
                    <p class="card-text">{{ $portfolio->subtitle }}</p>
                    <p class="text-muted">Category: {{ $portfolio->category }}</p>
                    @if ($portfolio->date)
                        <p class="text-muted">Date: {{ \Carbon\Carbon::parse($portfolio->date)->format('d M Y') }}</p>
                    @endif

                    <div class="d-flex justify-content-between mt-3">
                        @if ($portfolio->video_url)
                            <a href="{{ $portfolio->video_url }}" class="btn btn-info me-2" target="_blank">Watch Video</a>
                        @endif
                        @if ($portfolio->pdf)
                            <a href="{{ asset('storage/' . $portfolio->pdf) }}" class="btn btn-secondary me-2" target="_blank">Download PDF</a>
                        @endif
                        <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-warning me-2">Edit</a>
                        <form action="{{ route('portfolio.destroy', $portfolio->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
