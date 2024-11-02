@extends('layouts.app')

@section('content')
<section class="auth-section section-f9">
    <div class="auth-container card-style">
        <h2 class="heading">Login</h2>
        <form method="POST" action="{{ route('login') }}" class="auth-form">
            @csrf
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="auth-button">Login</button>
            
            <!-- Tambahkan teks untuk mengarahkan ke halaman Register -->
            <div class="form-footer">
                <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
            </div>
        </form>
    </div>
</section>
@endsection
