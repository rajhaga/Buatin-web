
@extends('layouts.app')

@section('content')
<section class="hero-section" style="background-image: url({{ asset('img/12.png') }})">
    <div class="container">
        <h2>Portfolio Details</h2>
        <p>creative design agency and marketing specialist working with ambitious companies</p>
        <ul>
            <li><i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Beranda</a></li>
            <li><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
            <li><a href="#">Portfolio Details</a></li>      
        </ul>
    </div>
</section>

<section class="gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
                <div class="mobile-app">
                    <a href="#">{{ $portfolio->subtitle }}</a>
                    <h2>{{ $portfolio->title }}</h2>
                </div>
                <ul class="client-detail">
                    <li>
                        <span>Klien</span>
                        <h4>{{ $portfolio->klien }}</h4>
                    </li>
                    <li>
                        <span>Kategori</span>
                        <h4>{{ $portfolio->category }}</h4>
                    </li>
                    <li>
                        <span>Tanggal dibuat</span>
                        <h4>{{ \Carbon\Carbon::parse($portfolio->date)->format('d F Y') }}</h4>
                    </li>
                </ul>
                <br>
                @if($portfolio->video_url)
                <ul class="social-media">
                    <li>
                        <a href="{{$portfolio->video_url}}" target="_blank">
                            <i class="fa-brands fa-linkedin-in"></i>Link Produk
                        </a>
                    </li>
                </ul>
                @endif
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300" data-aos-duration="400">
                <div class="mobil-img shape-style-hover">
                    <figure class="effect-duke">
                        <img alt="{{ $portfolio->title }}" 
                             src="{{ asset('storage/' . $portfolio->image) }}" 
                             width="676px" 
                             height="660px">
                    </figure>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="detailmobil">
                    <h4>Deskripsi</h4>
                    <p>{{ $portfolio->description }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection