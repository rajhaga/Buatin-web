@extends('layouts.app')

@section('content')

<section class="hero-section" style="background-image: url(assets/img/12.png)">
    <div class="container">
        <h2>Portofolio Kami</h2>
        <p>Solusi Kreatif untuk Pertumbuhan Brand yang Berkelanjutan</p>
        <ul>
            <li><i class="fa-solid fa-house"></i><a href="index.html">Beranda</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Portofolio Kami</a></li>      
        </ul>
    </div>
</section>

<section class="gap">
    <div class="container">
        <div class="portfolio-list row" data-aos="fade-up" data-aos-delay="300" data-aos-duration="400">
            @foreach($portfolios as $portfolio)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="portfolio-item">
                        <figure class="portfolio-image">
							<img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="img-fluid">

                            <figcaption>
                                <h4>{{ $portfolio->title }}</h4>
                                <p>{{ $portfolio->subtitle }}</p>
                                <p><small>{{ $portfolio->category }}</small></p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="button-gap text-center">
            <a href="#" class="sec-btn"><i class="fa-solid fa-spinner"></i> Selengkapnya</a>
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
                    <img alt="laptop" src="https://via.placeholder.com/546x261" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-6">
                        <div class="count-time one">
                            <h2 class="timer count-title count-number" data-to="1" data-speed="2000">1</h2><span>+</span>
                            <p>Tahun Lebih Pengalaman</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <div class="count-time two">
                            <h2 class="timer count-title count-number" data-to="50" data-speed="2000">50</h2><span>+</span>
                            <p>Projek Selesai</p>
                        </div>
                        <div class="count-time two">
                            <h2 class="timer count-title count-number" data-to="28" data-speed="2000">28</h2><span>+</span>
                            <p>Penghargaan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
