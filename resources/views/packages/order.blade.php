@extends('layouts.app')

@section('content')
<div class="container my-5 section-f9">
</br>
</br>
</br>
</br>
    <h1 class="text-center mb-4">Your Orders</h1>

    <!-- Display Success Message -->
    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach($orders as $order)
        <div class="col">
            <div class="card h-100 shadow">
                <div class="card-body">
                    <h5 class="card-title">{{ $order->package->name }}</h5>
                    <p class="mb-2">
                        <strong>Status:</strong> 
                        <span class="badge {{ $order->status == 'accepted' ? 'bg-success' : ($order->status == 'rejected' ? 'bg-danger' : 'bg-warning') }}">
                            {{ ucfirst($order->status) }}
                        </span>
                    </p>
                    <p><strong>Deadline:</strong> {{ $order->deadline }}</p>
                    <p class="mb-1"><strong>Location:</strong> {{ $order->location }}</p>
                    <p><strong>Description:</strong> {{ $order->description }}</p>

                    <!-- Show Upload Form for Accepted Orders Only -->
                    @if($order->status == 'accepted')
                        <form action="{{ route('order.uploadProof', $order->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
                            @csrf
                            <div class="mb-3">
                                <label for="proof" class="form-label">Upload Proof of Payment:</label>
                                <input type="file" name="proof" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Upload Proof</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection