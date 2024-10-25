@extends('layouts.app')

@section('content')
    @foreach($orders as $order)
    <div class="order-card">
        <h3>{{ $order->package->name }}</h3>
        <p>Status: {{ $order->status }}</p>
        
        @if($order->status == 'accepted')
            <form action="{{ route('order.uploadProof', $order->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="proof" required>
                <button type="submit">Upload Bukti Pembayaran</button>
            </form>
        @endif
    </div>
    @endforeach

@endsection
