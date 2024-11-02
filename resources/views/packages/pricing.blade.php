<section class="gap pricing-Plans" style="background-image: url('{{ asset('img\aboutbgpricing.png') }}')">
    <div class="container">
        <div class="heading">
            <img alt="heading-shape" src="{{ asset('img/heading-shape.png') }}">
            <p>Pricing Plans</p>
            <h2>Find the Right Plan</h2>
        </div>
        <div class="owl-carousel pricing-carousel">
            @foreach ($packages as $package)
                <div class="item">
                    <div class="pricing-Plans-style-one">
                        <svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                            <g><path d="m189.6 24-179.2 320h358.5z"/><path d="m341.6 168c-10.9 0-21.8 1.1-32.5 3.4l87.8 157 26.6 47.6h-234.5c20.4 64.8 81.1 112 152.6 112 88.2 0 160-71.8 160-160s-71.7-160-160-160z"/></g>
                        </svg>
                        <h6>{{ $package->name }}</h6>
                        <h3>${{ number_format($package->price, 2) }} <span>/ month</span></h3>
                        <button class="sec-btn">Purchase Now</button>
                        <p>{{ $package->description ?? '' }}</p>
                        <ul>
                            <li><h4><i class="fa-regular fa-circle-check"></i>Website maintenance</h4></li>
                            <li><h4><i class="fa-regular fa-circle-check"></i>Speed optimisation</h4></li>
                            <li><h4><i class="fa-regular fa-circle-check"></i>SEO optimisation</h4></li>
                            <li><h4><i class="red fa-regular fa-circle-xmark"></i>Account Manager</h4></li>
                            <li><h4><i class="red fa-regular fa-circle-xmark"></i>Delivery Requests</h4></li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>        
    </div>
</section>
