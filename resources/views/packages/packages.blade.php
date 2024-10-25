@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="heading">Daftar Paket</h1>
    <ul class="package-list">
        @foreach($packages as $package)
            <div class="package-card">
                <h3>{{ $package->name }}</h3>
                <p>{{ $package->description }}</p>
                <p>Harga: Rp {{ number_format($package->price, 2) }}</p>
                <a href="{{ route('form', ['id' => $package->id]) }}" class="btn btn-primary">
                    Beli Paket
                </a>
            </div>
        @endforeach
    </ul>
</div>
@endsection
