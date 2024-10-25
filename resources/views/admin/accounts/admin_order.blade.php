@extends('admin.layoutsadmin.app')

@section('content')
<div class="container">
    @foreach($orders as $order)
    <div class="order-card">
        <h3>{{ $order->package->name }}</h3>
        <p>User: {{ $order->user->name }}</p>
        <p>Status: {{ $order->status }}</p>
        
        @if($order->status == 'pending')
            <form action="{{ route('order.updateStatus', $order->id) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit" name="status" value="accepted">Terima</button>
                <button type="submit" name="status" value="rejected">Tolak</button>
            </form>
        @elseif($order->status == 'accepted')
            <a href="{{ route('order.downloadProof', $order->id) }}">Lihat Bukti Pembayaran</a>
        @endif
    </div>
@endforeach

</div>
@endsection
