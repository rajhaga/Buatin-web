@extends('layouts.app')

@section('content')
	<section class="hero-section " style="background-image: url('{{ asset('img/12.png') }}')">
		<div class="container">
			<h2>Team Details</h2>
			<p>creative design agency and marketing specialist working 
				with ambitious companies</p>
			<ul>
				<li><i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
				<li><a href="#"> Pages</a></li>
				<li><a href="#">Team Details</a></li>      
			</ul>
		</div>
	</section>
	<section class="gap no-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
					<div class="colin-clickson">
						<h4>Colin Clickson</h4>
						<p>Co-founder and Art Director,  oversees 
								all branding,</p>
							<a href="mailto:username@domain.com">username@domain.com</a>
							<h6 class="pt-3"><i class="fa-solid fa-phone"></i><a href="callto:+12354561228">+1 235 456 1228</a></h6>
							<img class="pt-4" alt="signature" src="assets/img/signature.png">
							<ul class="social-media">
				  			<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
				  			<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
				  			<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
		  				</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 pe-5" data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="our-skills">
						<h6 class="mb-0">Our skills</h6>
						<div class="progress-bar" data-effect="1" data-value="50" data-skill="UI / UX DESIGN"></div>
			        <!--progress bar-->
			        <div class="progress-bar" data-effect="1" data-value="80" data-skill="Graphic Designing"></div>
			        <!--progress bar-->
			        <div class="progress-bar" data-effect="1" data-value="66" data-skill="Web Develpment"></div>
			        <div class="progress-bar" data-effect="1" data-value="30" data-skill="Business Ideas"></div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6" data-aos="fade-up"  data-aos-delay="400" data-aos-duration="500">
					<div class="team-man shape-style-hover">
						<img alt="man" src="https://via.placeholder.com/430x500">
					</div>
				</div>
				<div class="col-lg-12">
					<div class="detailmobil pt-5">
						<h4>Short Bio</h4>
								<p>
									Phasellus enim libero, blandit vel sapienvitae, condimen tum ultricies magna Lorem ipsum dolor sit amet, co ocio Etiam erat it co ns ectetur  
								fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricie s egec tellus a odio tincidunt ilmtetur  adipisci auctor Class aptent ta
								sed do eiusmod temincididunt ut labore et dolore magna aliqua vulputate cursus a sit amet mveli Natetur  adipisci m nec tellus a odio tinci
								uctor Class aptent taciti socio Etiam erat it consequat aucto odio nonnetus et malesuada. fames ac  tetur  adipisci turpis egestas. Vestibul
								quam, feugiat vitae, ultricie s egec tellus a odio tincidunt ilmauctor Class aptent taciti socio sed do eitetur  adipisciusmod temincididunt ut 
								dolore magna aliqua vulputate cursus a sit amet mveli Nam nec tellus a odio tincidunt ilmauctor Cltetur  adipisci ass aptent taciti socio Etia
								consequat aucto odio nonnetus et malesuada.<br><br>


								uctor Class aptent taciti socio Etiam erat it consequat aucto odio nonnetus et malesuada. fames ac  tetur  adipisci turpis egestas. Vestibul
								quam, feugiat vitae, ultricie s egec tellus a odio tincidunt ilmauctor Class aptent taciti socio sed do eitetur  adipisciusmod temincididunt ut 
								dolore magna aliqua vulputate cursus a sit amet mveli Nam nec tellus a odio tincidunt ilmauctor Cltetur  adipisci ass aptent taciti socio Etia
								consequat aucto odio nonnetus et malesuada.
					</p>
					</div>
					<ul class="features pt-5">
							<li>Far curiosity incommode now led smallness allowance.</li>
							<li>Favour bed assure son things yet.</li>
							<li>She consisted consulted elsewhere happiness</li>
							<li>Disposing household any old the.</li>
							<li>Widow downs you new shade drift hopes small.</li>
							<li class="end">Interested discretion estimating on stimulated.</li>
						</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="our-expertise-time gap no-top">
		<div class="container">
			<div class="heading two">
				<h2>Our Expertise</h2>
			</div>
			<ul class="our-expertise">
				<li><a href="#"><i class="fa-solid fa-arrow-right-long"></i>Brand & Identity</a></li>
				<li><a href="#"><i class="fa-solid fa-arrow-right-long"></i>Website Design & Development</a></li>
				<li><a href="#"><i class="fa-solid fa-arrow-right-long"></i>Copywriting</a></li>
				<li><a href="#"><i class="fa-solid fa-arrow-right-long"></i>Business Consulting</a></li>
				<li><a href="#"><i class="fa-solid fa-arrow-right-long"></i>Reputation Management</a></li>
				<li><a href="#"><i class="fa-solid fa-arrow-right-long"></i>Social Media Marketing</a></li>
			</ul>
		</div>
	</section>
	@endsection