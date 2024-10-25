@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Profile</h1>
    <p>Name: {{ Auth::user()->name }}</p>
    <p>Email: {{ Auth::user()->email }}</p>
    <p>Email: {{ Auth::user()->role }}</p>
    
    @if(Auth::user()->role === 'admin')
        <h2>Admin Actions</h2>
        <a href="{{ route('admin.accounts.index') }}" class="btn btn-primary">Manage Users</a>
        <a href="{{ route('admin.accounts.create') }}" class="btn btn-secondary">Create New User</a>
    @elseif(Auth::user()->role === 'user')
        <h2>User Actions</h2>
        <p>Welcome to your profile! Here you can manage your account settings.</p>
        <!-- Additional user-specific actions can be added here -->
    @endif
</div>

<div class="container">
    <h1 class="heading">Daftar Order Saya</h1>
    @foreach($orders as $order)
        <div class="order-card">
            <h3>{{ $order->package->name }}</h3>
            <p>Status: {{ ucfirst($order->status) }}</p>

            @if($order->status == 'accepted')
                <form action="{{ route('order.uploadProof', $order->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="proof">Upload Bukti Pembayaran</label>
                        <input type="file" name="proof" required>
                    </div>
                    <button type="submit" class="btn btn-success">Upload</button>
                </form>
            @endif
        </div>
    @endforeach
</div>
@endsection
