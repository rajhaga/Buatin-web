@extends('layouts.layoutauth')

@section('content')
    <div class="form-body form-left">
        <div class="iofrm-layout">
            <div class="img-holder text-start">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{ asset('img/graphic15.svg') }}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content justify-content-end">
                    <div class="form-items">
                        <div class="logo">
                            <img src="{{ asset('img/Logo Buatinkamu.png') }}" alt="" width="60" height="60">
                        </div>
                        <h3 class="font-md">Login untuk Melanjutkan</h3>
                        <p>Dapatkan akses ke fitur terbaik untuk mendukung kreativitas dan produktivitas Anda.</p>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <input class="form-control" type="email" name="email" placeholder="Alamat Email" required>
                            <input class="form-control" type="password" name="password" placeholder="Kata Sandi" required>
                            <div class="form-button d-flex">
                                <button id="submit" type="submit" class="btn btn-primary">Masuk</button>
                                <a href="{{ route('register') }}" class="btn btn-outline-primary">Buat Akun</a>
                            </div>
                        </form>
                        <div class="other-links">
                            <span>Atau</span><a href="#"><i class="fab fa-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
