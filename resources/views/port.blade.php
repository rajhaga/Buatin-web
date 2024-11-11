@extends('layouts.app')

@section('content')
<section class="hero-section" style="background-image: url({{asset('img/12.png')}})">
    <div class="container">
        <h2>Portofolio Kami</h2>
        <p>Solusi Kreatif untuk Pertumbuhan Brand yang Berkelanjutan</p>
        <ul>
            <li><i class="fa-solid fa-house"></i><a href="index.html">Beranda</a></li>
            <li><a href="#">Portfolio</a></li>     
        </ul>
    </div>
</section>

<section class="gap">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="300" data-aos-duration="400">
            {{-- Left Column --}}
            <div class="col-lg-6">
                @foreach($leftColumn as $portfolio)
                    <div class="portfolio-data-style {{ !$loop->first ? 'mt-4' : '' }}">
                        <figure class="effect-duke">
                            <img class="w-100" src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}">
                            <figcaption>
                                <div class="style-design">
                                    {{-- <a href="{{ route('portfolio.show', $portfolio->id) }}">{{ $portfolio->title }}</a>
                                    <span><a href="{{ route('portfolio.category', $portfolio->category) }}">{{ $portfolio->subtitle }}</a></span> --}}
                                    <a href="{{ route('portfolio.show', $portfolio->id) }}">{{ $portfolio->title }}</a>
                                    <span><a href="">{{ $portfolio->subtitle }}</a></span>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
            </div>

            {{-- Right Column --}}
            <div class="col-lg-6">
                @foreach($rightColumn as $portfolio)
                    <div class="portfolio-data-style {{ !$loop->first ? 'mt-4' : '' }}">
                        <figure class="effect-duke">
                            <img class="w-100" src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}">
                            <figcaption>
                                <div class="style-design">
                                    {{-- <a href="{{ route('portfolio.show', $portfolio->id) }}">{{ $portfolio->title }}</a>
                                    <span><a href="{{ route('portfolio.category', $portfolio->category) }}">{{ $portfolio->subtitle }}</a></span> --}}
                                    <a href="{{ route('portfolio.show', $portfolio->id) }}">{{ $portfolio->title }}</a>
                                    <span><a href="">{{ $portfolio->subtitle }}</a></span>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="world-leading gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="heading">
                    <p>BUATINKAMU.ID</p>
                    <h2>Kreativitas Kami, Kesuksesan Bisnis Anda!</h2>
                </div>
                <div class="laptop">
                    <img alt="laptop" src="{{asset('img/white.png')}}" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-6">
                        <div class="count-time one">
                            <h2 class="timer count-title count-number" data-to="1" data-speed="2000">1</h2><span>+</span>
                            <p>Tahun Lebih Pengalaman</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="count-time two">
                            <h2 class="timer count-title count-number" data-to="50" data-speed="2000">50</h2><span>+</span>
                            <p>Projek Selesai</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection