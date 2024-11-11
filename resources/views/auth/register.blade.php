@extends('layouts.layoutauth')

@section('content')
<div class="form-body form-left">
    <div class="iofrm-layout">
        <!-- Bagian Ilustrasi -->
        <div class="img-holder text-start">
            <div class="bg"></div>
            <div class="info-holder">
                <img src="{{ asset('img/graphic15.svg') }}" alt="Illustration">
            </div>
        </div>

        <!-- Bagian Form Pendaftaran -->
        <div class="form-holder">
            <div class="form-content justify-content-end">
                <div class="form-items">
                    <!-- Logo -->
                    <div class="logo">
                        <img src="{{ asset('img/Logo Buatinkamu.png') }}" alt="Logo Buatinkamu" width="60" height="60">
                    </div>
                    <h3 class="font-md">Daftar Sekarang</h3>
                    <p>Akses semua fitur unggulan untuk mendukung karya Anda.</p>
                    
                    <!-- Form Pendaftaran -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- Username -->
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nama Lengkap" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Alamat Email" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" name="password" placeholder="Kata Sandi" required>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group">
                            <label for="password-confirm">Confirm Password</label>
                            <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required>
                        </div>

                        <!-- Tombol Daftar dan Masuk -->
                        <div class="form-button d-flex">
                            <button type="submit" class="btn btn-primary">Buat Akun</button>
                            <a href="{{ route('login') }}" class="btn btn-outline-primary">Masuk</a>
                        </div>
                    </form>
                    
                    <!-- Login dengan Google -->
                    <div class="other-links">
                        <span>Atau</span>
                        <a href="#"><i class="fab fa-google"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
