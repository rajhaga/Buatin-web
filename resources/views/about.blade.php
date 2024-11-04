@extends('layouts.app')

@section('content')
	<section class="hero-section " style="background-image: url('{{ asset('img/12.png') }}')"> 
		<div class="container">

			<h2>Tentang Kami</h2>
			<p>Creative Agency Desain, 
				Editing dan Konten Kreator</p>
			<ul>
				<li><i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Beranda</a></li>
				<li><a href="#">Tentang Kami</a></li>    
			</ul>
		</div>
	</section>
  <section class="about-unique gap no-bottom">
	  	<div class="container">
	  		<div class="row align-items-center">
	  			<div class="col-lg-5" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="500">
	  				<div class="unique-solutions">
	  					<div class="heading">
				  			<p>#SiapBuatinKamu</p>
				  			<h2>BuatinKamu.Id</h2>
				  		</div>
				  		<p>BuatinKamu.Id merupakan sebuah creative agency yang bergerak di bidang media promosi dengan layanan 
							berupa fotografi, videografi, editing, Vo, design, talent, dan maintenance 
							sosial media. BuatinKamu.id didukung oleh Program Mahasiswa Wirausaha (PMW) 
							yang diselenggarakan oleh @cda.ipb.</p>
							<div class="years-experience">
								<h3>1<sup>+</sup></h3>
								<h6>Tahun Pengalaman <br>Bekerja</h6>
							</div>
							
	  				</div>
	  			</div>
				  <div class="row">
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">
						<div class="services-style-one">
							<div class="services-style-one-img">
								<img src="{{ asset('img/photography.png') }}" width="105rem" height="auto" alt="">
							</div>
							<h4><a href="services.html">Fotografi</a></h4>
							<p>Lorem ipsum indolor st amet, cm etctetur adips locing elit, sedi din m st ilmes.</p>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600">
						<div class="services-style-one">
							<div class="services-style-one-img">
								<img src="{{ asset('img/videography.png') }}" width="105rem" height="auto" alt="">
							</div>
							<h4><a href="services.html">Videografi</a></h4>
							<p>Lorem ipsum indolor st amet, cm etctetur adips locing elit, sedi din m st ilmes.</p>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
						<div class="services-style-one">
							<div class="services-style-one-img">
								<img src="{{ asset('img/pentool.png') }}" width="105rem" height="auto" alt="">
							</div>
							<h4><a href="services.html">Editing</a></h4>
							<p>Lorem ipsum indolor st amet, cm etctetur adips locing elit, sedi din m st ilmes.</p>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
						<div class="services-style-one nogap">
							<div class="services-style-one-img">
								<img src="{{ asset('img/microphone.png') }}" width="105rem" height="auto" alt="">
							</div>
							<h4><a href="services.html">VO</a></h4>
							<p>Lorem ipsum indolor st amet, cm etctetur adips locing elit, sedi din m st ilmes.</p>
						</div>
					</div>
	  		</div>
	  	</div>
  </section>
  
  </section>
  <section class="gap" style="background-color:#fafafa">
	<div class="container">
		<div class="heading">
	  			<img alt="heading-shape" src="{{ asset('img/heading-shape.png') }}">
				<p>Ikuti Langkah Langkah</p>
				<h2>Cara Kerja kami</h2>
			</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 p-0">
				<div class="planning-img-team">
						<img alt="team-img" class="w-100" src="{{ asset('img/perencanaan.png') }}">
					</div>
					<div class="planning-make about-make">
						  <i><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m502.71875 58.410156-59.996094 30-13.417968-26.832031 60-30zm0 0"></path><path d="m489.300781 298.429688-60-30 13.417969-26.832032 59.996094 30zm0 0"></path><path d="m451 150h61v30h-61zm0 0"></path><path d="m22.707031 31.582031 60 30-13.417969 26.832031-59.996093-30zm0 0"></path><path d="m22.699219 298.417969-13.414063-26.832031 59.996094-30 13.417969 26.832031zm0 0"></path><path d="m0 150h61v30h-61zm0 0"></path><path d="m211 482h90v30h-90zm0 0"></path><path d="m421 165c0-90.980469-74.019531-165-165-165s-165 74.019531-165 165c0 62.039062 35.011719 118.609375 90 146.761719v48.238281h-30v30h30v62h150v-62h30v-30h-30v-48.238281c54.988281-28.152344 90-84.722657 90-146.761719zm-120 257h-90v-32h90zm-60-227c0-8.269531 6.730469-15 15-15s15 6.730469 15 15-6.730469 15-15 15-15-6.730469-15-15zm30 165v-122.578125c17.460938-6.195313 30-22.867187 30-42.421875 0-24.8125-20.1875-45-45-45s-45 20.1875-45 45c0 19.554688 12.539062 36.226562 30 42.421875v122.578125h-30v-67.511719l-8.972656-3.9375c-49.222656-21.609375-81.027344-70.105469-81.027344-123.550781 0-74.4375 60.5625-135 135-135s135 60.5625 135 135c0 53.445312-31.804688 101.941406-81.027344 123.550781l-8.972656 3.9375v67.511719zm0 0"></path></svg></i>
						  <div>
							  <a href="#"><h3>Perencanaan</h3></a>
							  <p>Lorem ipsum indolor st amet, cm ilmetct
							  etur adipis locing elit, sedi din usi m indo
							  indolorlor st  ilmes.</p>
						  </div>
					  </div>
			</div>
			<div class="col-lg-4 col-md-6 p-0">
				<div class="planning-img-team">
					<img alt="team-img" class="w-100" src="{{ asset('img/desain_proyek.png') }}">
				</div>
				<div class="planning-make two about-make m-0">
					  <i><svg id="Layer_1" enable-background="new 0 0 512.142 512.142" height="512" viewBox="0 0 512.142 512.142" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m460.426 118.142-80-80h-234.775c-13.137-10.621-29.839-17-48.009-17-13.844 0-26.829 3.715-38.043 10.173l-31.315-31.315-28.284 28.284 31.315 31.315c-6.458 11.215-10.173 24.199-10.173 38.043 0 18.17 6.379 34.872 17 48.009v234.775l80 80v51.716h40v-354h354v-40zm-56.568 0h-232.528c1.819-6.529 2.812-13.399 2.812-20.5 0-6.738-.884-13.271-2.528-19.5h192.243zm-306.216-57c20.126 0 36.5 16.374 36.5 36.5s-16.374 36.5-36.5 36.5-36.5-16.374-36.5-36.5 16.374-36.5 36.5-36.5zm-19.5 302.716v-192.243c6.229 1.643 12.762 2.528 19.5 2.528 7.101 0 13.971-.993 20.5-2.812v232.528zm394-165.716h40c0 83.873-32.662 162.725-91.969 222.031-59.307 59.307-138.159 91.969-222.031 91.969v-40c151.084 0 274-122.916 274-274z"></path></svg></i>
					  <div>
						  <a href="#"><h3>Desain Proyek</h3></a>
						  <p>Lorem ipsum indolor st amet, cm ilmetct
						  etur adipis locing elit, sedi din usi m indo
						  indolorlor st  ilmes.</p>
					  </div>
				  </div>
			</div>
			<div class="col-lg-4 col-md-6 p-0">
				<div class="planning-img-team">
					<img alt="team-img" class="w-100" src="{{ asset('img/Implementasi.png') }}">
				</div>
				<div class="planning-make three about-make m-0">
					  <i><svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m422.491 202.919 89.509-52.569-256-150.35-256 150.35 89.509 52.569-89.509 53.081 89.508 52.569-89.508 53.081 256 150.35 256-150.35-89.508-53.082 89.508-52.568zm-166.491 62.965-46.701-27.223 194.408-117.742 50.489 29.431zm-122.66-71.502 194.407-117.742 46.374 27.032-194.408 117.743zm122.66-159.566 42.161 24.577-194.407 117.742-45.95-26.785zm-136.925 185.468 136.925 80.417 136.925-80.417 61.271 35.716-198.196 115.535-198.196-115.535zm335.121 141.366-198.196 115.534-198.196-115.534 61.271-35.717 136.925 80.418 136.926-80.417z"></path></g></svg></i>
					  <div>
						  <a href="#"><h3>Implementasi</h3></a>
						  <p>Lorem ipsum indolor st amet, cm ilmetct
						  etur adipis locing elit, sedi din usi m indo
						  indolorlor st  ilmes.</p>
					  </div>
				  </div>
			</div>
		</div>
	</div>
</section>
@include('packages.pricing')


<section class="amazing-team-members gap">
	<div class="container">
		<div class="heading">
			<p>TIM BUATINKAMU.ID</p>
			<a href="#"><h2>Anggota Tim BuatinKamu.Id</h2></a>
		</div>
		<div class="row team-slider owl-carousel owl-theme">
			<div class="col-lg-12 item">
				<div class="team-flex shape-style-hover">
					<div class="team-one">
						<a class="pb-2" href="#"><h4>fahriza Rifalsyah</h4></a>
					  <p>Chief of Executive Officer</p>
					  <a href="callto:(123)4567890"><i class="fa-solid fa-phone"></i>+1 235 456 1228</a>
				  </div>
				  <div class="img-team">
					  <img alt="team-img" src={{asset("img/fahriza_ceo.png")}}>
					  <ul>
						<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>						  </ul>
				  </div>
			  </div>
			</div>
			<div class="col-lg-12 item">
				<div class="team-flex shape-style-hover">
					<div class="team-one">
						<a class="pb-2" href="team-details.html"><h4>Muhammad Athallah</h4></a>
					  <p>Chief of Finance Officer</p>
					  <a href="callto:(123)4567890"><i class="fa-solid fa-phone"></i>+1 235 456 1228</a>
				  </div>
				  <div class="img-team">
					  <img alt="team-img" src={{asset("img/athallah_CFO.png")}}>
					  <ul>
						<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
					  </ul>
				  </div>
			  </div>
			</div>
			<div class="col-lg-12 item">
				<div class="team-flex shape-style-hover">
					<div class="team-one">
						<a class="pb-2" href="team-details.html"><h4>Nurulisa Fitri</h4></a>
					  <p>Chief of Administrative Officer</p>
					  <a href="callto:(123)4567890"><i class="fa-solid fa-phone"></i>+1 235 456 1228</a>
				  </div>
				  <div class="img-team">
					  <img alt="team-img" src={{asset("img/nurulisa_CAO.png")}}>
					  <ul>
						<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
					  </ul>
				  </div>
			  </div>
			</div>
			<div class="col-lg-12 item">
				<div class="team-flex shape-style-hover">
					<div class="team-one">
						<a class="pb-2" href="team-details.html"><h4>Rachel Triana</h4></a>
					  <p>Chief of Marketing Branding</p>
					  <a href="callto:(123)4567890"><i class="fa-solid fa-phone"></i>+1 235 456 1228</a>
				  </div>
				  <div class="img-team">
					  <img alt="team-img" src={{asset("img/Rachel_CMB.png")}}>
					  <ul>
						<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
					  </ul>
				  </div>
			  </div>
			</div>
			<div class="col-lg-12 item">
				<div class="team-flex shape-style-hover">
					<div class="team-one">
						<a class="pb-2" href="team-details.html"><h4>Anggia leksa</h4></a>
					  <p>Chief of Marketing Selling</p>
					  <a href="callto:(123)4567890"><i class="fa-solid fa-phone"></i>+1 235 456 1228</a>
				  </div>
				  <div class="img-team">
					  <img alt="team-img" src={{asset("img/anggia_CMS.png")}}>
					  <ul>
						<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
					  </ul>
				  </div>
			  </div>
			</div>
			<div class="col-lg-12 item">
				<div class="team-flex shape-style-hover">
					<div class="team-one">
						<a class="pb-2" href="team-details.html"><h4>Abang M Rafie</h4></a>
					  <p>Chief of Marketing Partnership</p>
					  <a href="callto:(123)4567890"><i class="fa-solid fa-phone"></i>+1 235 456 1228</a>
				  </div>
				  <div class="img-team">
					  <img alt="team-img" src={{asset("img/abang_CMP.png")}}>
					  <ul>
						  <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
						  <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
						  <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
					  </ul>
				  </div>
			  </div>
			</div>
		</div>
	</div>
</section> 
  
  
  <section class="client-and-sponsor about-client gap ">
  	<div class="container">
  		<div class="heading">
	  			<img alt="heading-shape" src="{{ asset('img/heading-shape.png') }}">
	  			<p>Client and Sponsor</p>
	  			<h2>We Have Had the Pleasure of Working  
							with Some Fantastic Client</h2>
							<a href="{{ route('packages.orderForm') }}" class="lightbox-toggle sec-btn">Hire Us For Work</a>
	  		</div>
  	</div>
  </section>
  <!-- footer -->
  @endsection