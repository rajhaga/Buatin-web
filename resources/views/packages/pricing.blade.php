@extends('layouts.app')

@section('content')
<section class="hero-section " style="background-image: url('{{ asset('img/12.png') }}')">
    <div class="container">
        <h2>Price List</h2>
        <p>Dari Ide hingga Eksekusi, Kami Ahlinya!</p>
        <ul>
            <li><i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Beranda</a></li>
            <li><a href="#">Price list</a></li>  
        </ul>
    </div>
</section>
<section id="pricingPlansSection" class="gap pricing-Plans" style="background-color: #ffffff;">
    <div class="container">
        <div class="heading text-center">
            <img alt="heading-shape" src="{{ asset('img/heading-shape.png') }}">
            <p class="purple-text">Pricing Plans</p>
            <h2 class="purple-text">Find the Right Plan</h2>
        </div>
        
        <!-- Group packages by category -->
        @php
            $groupedPackages = $packages->groupBy('category');
        @endphp

        @foreach ($groupedPackages as $category => $categoryPackages)
            <div class="category-section mb-5">
                <h3 class="category-title purple-text">{{ $category }}</h3>

                <div class="row justify-content-center">
                    @foreach ($categoryPackages as $package)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="pricing-card">
                            <div class="icon">
                                <svg enable-background="new 0 0 512 512" height="50" viewBox="0 0 512 512" width="50" xmlns="http://www.w3.org/2000/svg">
                                    <g><path d="m189.6 24-179.2 320h358.5z"/><path d="m341.6 168c-10.9 0-21.8 1.1-32.5 3.4l87.8 157 26.6 47.6h-234.5c20.4 64.8 81.1 112 152.6 112 88.2 0 160-71.8 160-160s-71.7-160-160-160z"/></g>
                                </svg>
                            </div>
                            <h6 class="package-name purple-text">{{ $package->name }}</h6>
                            <h3 class="price purple-text">Rp {{ number_format($package->price, 0, ',', '.') }}</h3>
                            <p class="description">{{ Str::limit($package->description, 50) }}</p>
                            <a href="{{ route('packages.orderForm', ['name' => $package->name]) }}" class="sec-btn">Purchase Now</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
