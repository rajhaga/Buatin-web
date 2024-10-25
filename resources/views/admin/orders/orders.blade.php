@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="heading">Daftar Order</h1>
    @foreach($orders as $order)
        <div class="order-card">
            <h3>{{ $order->package->name }}</h3>
            <p>Deskripsi: {{ $order->description }}</p>
            <p>Lokasi: {{ $order->location }}</p>
            <p>Status: {{ ucfirst($order->status) }}</p>

            @if($order->status == 'pending')
                <form action="{{ route('order.updateStatus', $order->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" name="status" value="accepted" class="btn btn-success">Terima</button>
                    <button type="submit" name="status" value="rejected" class="btn btn-danger">Tolak</button>
                </form>
            @elseif($order->status == 'payment_uploaded')
                <a href="{{ asset('uploads/' . $order->proof) }}" target="_blank" class="btn btn-info">Lihat Bukti Pembayaran</a>
            @endif
        </div>
    @endforeach
</div>
@endsection
