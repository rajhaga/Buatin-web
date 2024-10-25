<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfio - About Us</title>
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

</head>
<body class="menu-layer">
	<header>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-2">
					<div class="header-style">
						<a href="index.html">
                            <img src="{{ asset('img/white.png') }}" width="148.143" height="53" alt="">

						</a>
						<div class="bar-menu">
							<svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m128 102.4c0-14.138 11.462-25.6 25.6-25.6h332.8c14.138 0 25.6 11.462 25.6 25.6s-11.462 25.6-25.6 25.6h-332.8c-14.138 0-25.6-11.463-25.6-25.6zm358.4 128h-460.8c-14.138 0-25.6 11.463-25.6 25.6 0 14.138 11.462 25.6 25.6 25.6h460.8c14.138 0 25.6-11.462 25.6-25.6 0-14.137-11.462-25.6-25.6-25.6zm0 153.6h-230.4c-14.137 0-25.6 11.462-25.6 25.6 0 14.137 11.463 25.6 25.6 25.6h230.4c14.138 0 25.6-11.463 25.6-25.6 0-14.138-11.462-25.6-25.6-25.6z"/></svg>
						</div>
					</div>
				</div>
				<div class="col-xl-7">
					<nav class="navbar">
				      <ul class="navbar-links">
				        <li class="navbar-dropdown">
				          <a href="#">Beranda</a>
				        </li>
				        <li class="navbar-dropdown">
				          <a href="about.html">Tentang</a>
				        </li>
				        <li class="navbar-dropdown">
				          <a href="#">Portfolio</a>
				        </li>
				        <li class="navbar-dropdown">
				          <a href="#">testimoni</a>
				        </li>
                <li class="navbar-dropdown">
				          <a href="contact.html">Kontak</a>
				        </li>
				      </ul>
				    </nav>
				</div>
				<div class="col-lg-3">
					<div class="hamburger-icon">
						<div class="extras">
           		<a href="javascript:void(0)" id="show">
							<svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m128 102.4c0-14.138 11.462-25.6 25.6-25.6h332.8c14.138 0 25.6 11.462 25.6 25.6s-11.462 25.6-25.6 25.6h-332.8c-14.138 0-25.6-11.463-25.6-25.6zm358.4 128h-460.8c-14.138 0-25.6 11.463-25.6 25.6 0 14.138 11.462 25.6 25.6 25.6h460.8c14.138 0 25.6-11.462 25.6-25.6 0-14.137-11.462-25.6-25.6-25.6zm0 153.6h-230.4c-14.137 0-25.6 11.462-25.6 25.6 0 14.137 11.463 25.6 25.6 25.6h230.4c14.138 0 25.6-11.463 25.6-25.6 0-14.138-11.462-25.6-25.6-25.6z"/></svg>
							</a>
						</div>
            <a href="{{ route('packages.orderForm') }}" class="sec-btn">Booking</a>
					</div>
                    
				</div>
			</div>
		</div>
		<div class="mobile-nav" id="mobile-nav" style="display: block;">

            <div class="res-log">
                <a href="index.html">
							<svg xmlns="http://www.w3.org/2000/svg" width="148.143" height="53" viewBox="0 0 148.143 53">
							  <path data-name="Path 2" d="M-39.917-20.3H-47.2V0h2.544V-7.3h4.734a6.465,6.465,0,0,0,6.738-6.5A6.466,6.466,0,0,0-39.917-20.3Zm-.132,10.539h-4.6v-8.074h4.6A4.027,4.027,0,0,1-35.776-13.8,4.027,4.027,0,0,1-40.049-9.761ZM-22.032.343a8.031,8.031,0,0,0,8.3-8.173A8.031,8.031,0,0,0-22.032-16a8.015,8.015,0,0,0-8.3,8.173A8.032,8.032,0,0,0-22.032.343Zm0-2.386A5.6,5.6,0,0,1-27.817-7.83a5.6,5.6,0,0,1,5.785-5.787A5.6,5.6,0,0,1-16.247-7.83a5.6,5.6,0,0,1-5.785,5.787Zm20.073-13.7a5.7,5.7,0,0,0-5,2.466l-.4-2.384h-1.75V0h2.465V-8.509c0-3.043,1.613-4.9,4.479-4.9h1.6v-2.333Zm23.288.188H16.45v-1.508c0-2.215.869-3.057,3.086-3.057H21.3v-1.989H19.086c-3.5,0-5.022,1.649-5.022,4.993v1.561H6.014v-3.429H5.681L.812-13.821v.336H3.549v8.012C3.549-2.079,5.626,0,8.989,0h2.055V-2.28H9.307A2.96,2.96,0,0,1,6.014-5.553v-7.932h8.05V0h2.465V-13.486h4.8Zm3.615-2.817h2.669V-21.2H24.944ZM25.046,0h2.465V-15.66H25.046ZM40.4.343a8.031,8.031,0,0,0,8.3-8.173A8.031,8.031,0,0,0,40.4-16,8.015,8.015,0,0,0,32.1-7.83,8.032,8.032,0,0,0,40.4.343Zm0-2.386A5.6,5.6,0,0,1,34.62-7.83,5.6,5.6,0,0,1,40.4-13.617,5.6,5.6,0,0,1,46.19-7.83,5.6,5.6,0,0,1,40.4-2.042Z" transform="translate(99.435 37)" fill="#fff"/>
							  <path data-name="Shape 5" d="M219,117V95l21,11-.954.5.954.5-21,11Zm22-26,8-4,13,8-21,12ZM219,78l22-13V82l-8,5Z" transform="translate(-219 -65)" fill="#01b36d"/>
							  <path data-name="Shape 3" d="M240,106.429V107L219,95V79l1,.571V79l21,12v16ZM241,82V65l21,13-13,9Z" transform="translate(-219 -65)" fill="#1ff3a0"/>
							</svg>

              </a>

            </div>

            <ul>

                  <li class="menu-item-has-children"><a href="JavaScript:void(0)">Home</a>

                    <ul class="sub-menu">

                      <li><a href="index.html">home 1</a></li>

                      <li><a href="index-2.html">home 2</a></li>

                      <li><a href="index-3.html">home 3</a></li>

                      <li><a href="index-4.html">home 4</a></li>

                    </ul>

                  </li>

                  <li><a href="about.html">About</a>

                  </li>

                  <li class="menu-item-has-children"><a href="JavaScript:void(0)">Portfolio</a>

                    <ul class="sub-menu">

                    	<li><a href="our-portfolio.html">our portfolio</a></li>

                      <li><a href="portfolio-details-1.html">portfolio details 1</a></li>

                      <li><a href="portfolio-details-2.html">portfolio details 2</a></li>

                      <li><a href="portfolio-details-3.html">portfolio details 3</a></li>

                    </ul>

                  </li>

                    <li class="menu-item-has-children"><a href="JavaScript:void(0)">Layanan</a>

                  </li>

                </ul>
          <span  class="res-cross"><i class="cls-leftright"></i><i class="cls-rightleft"></i></span>

      </div>
  </header>

    <main>
        @yield('content')
    </main>

    <!-- footer -->
  <footer class="footer-style-one gap" style="background-image: url(https://via.placeholder.com/1920x798)">
    <div class="container">
        <div class="information">
            <div class="row">
                <div class="col-lg-6 col-md-4">
                  <div class="logo">
                      <a href="#">
                          <svg id="white" xmlns="http://www.w3.org/2000/svg" width="148.143" height="53" viewBox="0 0 148.143 53">
                        <path data-name="Path 2" d="M-39.917-20.3H-47.2V0h2.544V-7.3h4.734a6.465,6.465,0,0,0,6.738-6.5A6.466,6.466,0,0,0-39.917-20.3Zm-.132,10.539h-4.6v-8.074h4.6A4.027,4.027,0,0,1-35.776-13.8,4.027,4.027,0,0,1-40.049-9.761ZM-22.032.343a8.031,8.031,0,0,0,8.3-8.173A8.031,8.031,0,0,0-22.032-16a8.015,8.015,0,0,0-8.3,8.173A8.032,8.032,0,0,0-22.032.343Zm0-2.386A5.6,5.6,0,0,1-27.817-7.83a5.6,5.6,0,0,1,5.785-5.787A5.6,5.6,0,0,1-16.247-7.83a5.6,5.6,0,0,1-5.785,5.787Zm20.073-13.7a5.7,5.7,0,0,0-5,2.466l-.4-2.384h-1.75V0h2.465V-8.509c0-3.043,1.613-4.9,4.479-4.9h1.6v-2.333Zm23.288.188H16.45v-1.508c0-2.215.869-3.057,3.086-3.057H21.3v-1.989H19.086c-3.5,0-5.022,1.649-5.022,4.993v1.561H6.014v-3.429H5.681L.812-13.821v.336H3.549v8.012C3.549-2.079,5.626,0,8.989,0h2.055V-2.28H9.307A2.96,2.96,0,0,1,6.014-5.553v-7.932h8.05V0h2.465V-13.486h4.8Zm3.615-2.817h2.669V-21.2H24.944ZM25.046,0h2.465V-15.66H25.046ZM40.4.343a8.031,8.031,0,0,0,8.3-8.173A8.031,8.031,0,0,0,40.4-16,8.015,8.015,0,0,0,32.1-7.83,8.032,8.032,0,0,0,40.4.343Zm0-2.386A5.6,5.6,0,0,1,34.62-7.83,5.6,5.6,0,0,1,40.4-13.617,5.6,5.6,0,0,1,46.19-7.83,5.6,5.6,0,0,1,40.4-2.042Z" transform="translate(99.435 37)" fill="#fff"/>
                        <path id="Shape_5" data-name="Shape 5" d="M219,117V95l21,11-.954.5.954.5-21,11Zm22-26,8-4,13,8-21,12ZM219,78l22-13V82l-8,5Z" transform="translate(-219 -65)" fill="#01b36d"/>
                        <path id="Shape_3" data-name="Shape 3" d="M240,106.429V107L219,95V79l1,.571V79l21,12v16ZM241,82V65l21,13-13,9Z" transform="translate(-219 -65)" fill="#1ff3a0"/>
                      </svg>
                      </a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="information-data">
                        <h3>Town, new Fairground Rd, FL 3290 United States</h3>
                          <h6>Phone:<a class="ps-2" href="callto:636.410.8276">636.410.8276</a></h6>
                          <a href="mailto:helloagency@domain.com">helloagency@domain.com</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gap">
            <div class="col-xl-5 col-lg-6 col-md-12">
                <div class="newsletter">
                    <h4>Keep Connected</h4>
                    <p>Get updates by subscribe my weekly newsletter</p>
                    <form>
                        <input type="text" placeholder="Enter your email address..">
                            <button class="sec-btn">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="offset-xl-1 col-lg-2 col-md-4 col-sm-6">
                <div class="newsletter">
                    <h4>Links</h4>
                    <ul class="links">
                        <li><a href="our-portfolio.html">Our Work</a></li>
                      <li><a href="services.html">Development</a></li>
                      <li><a href="services.html">Builder Ideas</a></li>
                      <li><a href="our-portfolio.html">Marketing Agency</a></li>
                      <li><a href="contact.html">Great Support</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="newsletter">
                    <h4>Services</h4>
                    <ul class="links">
                        <li><a href="services-details.html">Website Services</a></li>
                      <li><a href="services-details.html">Revamp Services</a></li>
                      <li><a href="services-details.html">Social Management</a></li>
                      <li><a href="services-details.html">Domain & Website</a></li>
                      <li><a href="services-details.html">Branding & Logo</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="newsletter">
                    <h4>Sharing</h4>
                    <ul class="links">
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i>Facebook</a></li>
                      <li><a href="#"><i class="fa-brands fa-twitter"></i>Twitter</a></li>
                      <li><a href="#"><i class="fa-brands fa-linkedin-in"></i>Linked In</a></li>
                      <li><a href="#"><i class="fa-brands fa-instagram"></i>Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="footer">© 2022 Portfolio Agency<i class="fa-solid fa-heart"></i> By <a href="https://themeforest.net/user/winsfolio">Winsfolio</a>, All rights reserved</p>
    </div>
</footer>
<!-- popup -->

<!-- popup end -->
<div class="menu-wrap">
    <div class="menu-inner ps ps--active-x ps--active-y">
        <span class="menu-cls-btn"><i class="cls-leftright"></i><i class="cls-rightleft"></i></span>
        <div class="marquee_text">
        <div class="portfolio-detail">
                      <div class="portfolio-img">
                              <img alt="profile img" src="{{ asset('img/portfolio-page-1.jpg') }}">
                                  <a href="portfolio-details-1.html">WEB DESIGN</a>
                                  <a href="portfolio-details-1.html">Graphic</a>
                                  <h3><a href="#">Melanin Goddess</a></h3>
                                  <span>01</span>
                      </div>
                  </div>
                  <div class="portfolio-detail">
                      <div class="portfolio-img">
                              <img alt="profile img" src="{{ asset('img/portfolio-12.jpg') }}">
                                  <a href="portfolio-details-1.html">WEB DESIGN</a>
                                  <a href="portfolio-details-1.html">Graphic</a>
                                  <h3><a href="#">The Dance</a></h3>
                                  <span>02</span>
                      </div>
                  </div>
                  <div class="portfolio-detail">
                      <div class="portfolio-img">
                              <img alt="profile img" src="{{ asset('img/portfolio-page-3.jpg') }}">
                                  <a href="portfolio-details-1.html">WEB DESIGN</a>
                                  <a href="portfolio-details-1.html">Graphic</a>
                                  <h3><a href="#">Linden Staub</a></h3>
                                  <span>03</span>
                      </div>
                  </div>
                  <div class="portfolio-detail">
                      <div class="portfolio-img">
                              <img alt="profile img" src="{{ asset('img/portfolio-page-4.jpg') }}">
                                  <a href="portfolio-details-1.html">WEB DESIGN</a>
                                  <a href="portfolio-details-1.html">Graphic</a>
                                  <h3><a href="#">Wood Mockup</a></h3>
                                  <span>04</span>
                      </div>
                  </div>
                  <div class="portfolio-detail">
                      <div class="portfolio-img">
                              <img alt="profile img" src="{{ asset('img/portfolio-page-8.jpg') }}">
                                  <a href="portfolio-details-1.html">WEB DESIGN</a>
                                  <a href="portfolio-details-1.html">Graphic</a>
                                  <h3><a href="#">Mobile App</a></h3>
                                  <span>05</span>
                      </div>
                  </div>
                  <div class="portfolio-detail">
                      <div class="portfolio-img">
                              <img alt="profile img" src="{{ asset('img/portfolio-page-6.jpg') }}">
                                  <a href="portfolio-details-1.html">WEB DESIGN</a>
                                  <a href="our-blog.html">Graphic</a>
                                  <h3><a href="#">Creative Art</a></h3>
                                  <span>06</span>
                      </div>
                  </div>
          </div>
      </div>
</div>
<!-- LIGHTBOX CODE BEGIN -->
@include('auth.login')

<style>
  /* Styling for the lightbox */
  .white_content {
      width: 400px;
      padding: 20px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }
  .text-center {
      text-align: center;
  }
  .text-center img {
      margin: 20px 0;
  }
</style>

<!-- scroll -->
<a href="#" id="scroll" style="display: none;"><span></span></a>
<!-- Bootstrap Js -->
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<!-- owl.carousel -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- aos -->
<script src="{{asset('js/aos.js')}}"></script>
<!-- custom -->
<script src="{{asset('js/custom.js')}}"></script>	
</body>
