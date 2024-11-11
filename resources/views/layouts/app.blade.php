<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>buatinKamu.id- About Us</title>
    <link rel="icon" href="{{ asset('img/fav-icon.png') }}">
    <!-- CSS only -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <!-- nice-select -->
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <!-- aos -->
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- color -->
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMV5lPAP3N5iv9f0qxSHEG7/j57vqD+N9i7Q9zZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
</head>
<body class="menu-layer">
  <header class="header" id="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-2">
                <div class="header-style">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ asset('img/white.png') }}" width="148.143" height="53" alt="Logo">
                    </a>
                    <div class="bar-menu">
                        <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="m128 102.4c0-14.138 11.462-25.6 25.6-25.6h332.8c14.138 0 25.6 11.462 25.6 25.6s-11.462 25.6-25.6 25.6h-332.8c-14.138 0-25.6-11.463-25.6-25.6zm358.4 128h-460.8c-14.138 0-25.6 11.463-25.6 25.6 0 14.138 11.462 25.6 25.6 25.6h460.8c14.138 0 25.6-11.462 25.6-25.6 0-14.137-11.462-25.6-25.6-25.6zm0 153.6h-230.4c-14.137 0-25.6 11.462-25.6 25.6 0 14.137 11.463 25.6 25.6 25.6h230.4c14.138 0 25.6-11.463 25.6-25.6 0-14.138-11.462-25.6-25.6-25.6z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Navbar Links -->
            <div class="col-xl-7">
                <nav class="navbar">
                    <ul class="navbar-links">
                        <li class="navbar-dropdown"><a href="{{ route('home') }}">Beranda</a></li>
                        <li class="navbar-dropdown"><a href="{{ route('about') }}">Tentang</a></li>
                        <li class="navbar-dropdown"><a href="{{ route('port') }}">Portfolio</a></li>
                        <li class="navbar-dropdown"><a href="{{ route('contact.show') }}">Kontak</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Login / Booking Button & Extras Menu -->
            <div class="col-lg-3">
                <div class="hamburger-icon">
                    @if(Auth::check())
                        <!-- Jika sudah login, tampilkan menu tambahan -->
                        <div class="extras">
                            <a href="javascript:void(0)" id="show">
                                <svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m128 102.4c0-14.138 11.462-25.6 25.6-25.6h332.8c14.138 0 25.6 11.462 25.6 25.6s-11.462 25.6-25.6 25.6h-332.8c-14.138 0-25.6-11.463-25.6-25.6zm358.4 128h-460.8c-14.138 0-25.6 11.463-25.6 25.6 0 14.138 11.462 25.6 25.6 25.6h460.8c14.138 0 25.6-11.462 25.6-25.6 0-14.137-11.462-25.6-25.6-25.6zm0 153.6h-230.4c-14.137 0-25.6 11.462-25.6 25.6 0 14.137 11.463 25.6 25.6 25.6h230.4c14.138 0 25.6-11.463 25.6-25.6 0-14.138-11.462-25.6-25.6-25.6z"/>
                                </svg>
                            </a>
                        </div>
                    @else
                        <!-- Jika belum login, tampilkan tombol Login dan Booking -->
                        <a href="{{ route('login') }}" class="sec-btn">Login</a>
                    @endif
                    <a href="{{ route('packages.orderForm') }}" class="sec-btn">Booking</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div class="mobile-nav" id="mobile-nav">
        <div class="res-log">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/white.png') }}" width="148.143" height="53" alt="Logo">
            </a>
        </div>
        <ul>
            <li><a href="{{ route('home') }}">Beranda</a></li>
            <li><a href="{{ route('about') }}">Tentang</a></li>
            <li><a href="{{ route('port') }}">Portfolio</a></li>
            <li><a href="{{ route('booked.list') }}">Layanan</a></li>
        </ul>
        <span class="res-cross"><i class="cls-leftright"></i><i class="cls-rightleft"></i></span>
    </div>
</header>

  <main>
    @yield('content')
  </main>

  <!-- footer -->
  <footer class="footer-style-one gap" style="background-image: url({{ asset('img/11.png') }})">
    <div class="container">
        <div class="information">
            <div class="row">
                <div class="col-lg-6 col-md-4">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('img/white.png') }}" width="148.143" height="53" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="information-data">
                        <h3>Bogor, Sekolah Vokasi IPB University</h3>
                        <h6>Phone: <a class="ps-2" href="tel:082124504314">0821-2450-4314</a></h6>
                        <a href="mailto:buatinkamuid@gmail.com">buatinkamuid@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row gap">
            <div class="col-xl-5 col-lg-6 col-md-12">
                <div class="newsletter">
                    <h4>Tetap Terhubung</h4>
                    <p>Kritik dan Saran</p>
                    <form>
                        <input type="text" placeholder="Masukkan Pesan....">
                        <br>
                        <button class="sec-btn" type="submit">Kirim</button>
                    </form>
                </div>
            </div>
            
            <div class="offset-xl-1 col-lg-2 col-md-4 col-sm-6">
                <div class="newsletter">
                    <h4>Links</h4>
                    <ul class="links">
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li><a href="{{ route('about') }}">Tentang</a></li>
                        <li><a href="{{ route('port') }}">Portfolio</a></li>
                        <li><a href="{{ route('contact.show') }}">Kontak</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="newsletter">
                    <h4>Services</h4>
                    <ul class="links">
                        <li><a href="{{ route('packages.orderForm') }}">Booking</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="newsletter">
                    <h4>Sharing</h4>
                    <ul class="links">
                        <li><a href="https://www.linkedin.com/in/buatinkamu-id-150ba8308/" target="_blank"><i class="fab fa-linkedin-in"></i> LinkedIn</a></li>
                        <li><a href="https://www.instagram.com/buatinkamu.id?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <p class="footer">© 2024 BuatinKamu.Id <i class="fas fa-heart"></i> By <a href="https://themeforest.net/user/winsfolio" target="_blank">WELLLL</a>, All rights reserved</p>
    </div>
</footer>


  <!-- LIGHTBOX CODE BEGIN -->
  @include('auth.whiteboxpro')

  <!-- scroll -->
  <a href="#" id="scroll" style="display: none;"><span></span></a>
  <!-- Bootstrap Js -->
  <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
  <!-- owl.carousel -->
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <!-- aos -->
  <script src="{{ asset('js/aos.js') }}"></script>
  <!-- custom -->
  <script src="{{ asset('js/custom.js') }}"></script>  
</body>
</html>
