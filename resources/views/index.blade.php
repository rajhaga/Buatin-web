@extends('layouts.app')

@section('content')
<section class="custom1 owl-carousel owl-theme">
	<div class="branding-products item" style="background-image: url({{asset('img/bg.jpg')}})">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="home-one-featured-area">
							<h1>Ubah Ide Anda 
									  Jadi Visual
									  Menarik.
							  </h1>
							  <div class="play">
								  <div class="play-button"><a data-fancybox="" href="https://drive.google.com/file/d/12YC-7ZruS-o0TUpqtBoqlQeKudCkMpkj/view">
								  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										   viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
									  <g>
											  <path d="M443.86,196.919L141.46,10.514C119.582-2.955,93.131-3.515,70.702,9.016c-22.429,12.529-35.819,35.35-35.819,61.041
												  v371.112c0,38.846,31.3,70.619,69.77,70.829c0.105,0,0.21,0.001,0.313,0.001c12.022-0.001,24.55-3.769,36.251-10.909
												  c9.413-5.743,12.388-18.029,6.645-27.441c-5.743-9.414-18.031-12.388-27.441-6.645c-5.473,3.338-10.818,5.065-15.553,5.064
												  c-14.515-0.079-30.056-12.513-30.056-30.898V70.058c0-11.021,5.744-20.808,15.364-26.183c9.621-5.375,20.966-5.135,30.339,0.636
												  l302.401,186.405c9.089,5.596,14.29,14.927,14.268,25.601c-0.022,10.673-5.261,19.983-14.4,25.56L204.147,415.945
												  c-9.404,5.758-12.36,18.049-6.602,27.452c5.757,9.404,18.048,12.36,27.452,6.602l218.611-133.852
												  c20.931-12.769,33.457-35.029,33.507-59.55C477.165,232.079,464.729,209.767,443.86,196.919z"/>
										  </g>
									  </svg>
									  </a>
									  </div>
								  <p>The awards for design, creativity and innovation on the Internet</p>
							  </div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="extras view-btn">
				 <a href="javascript:void(0)" class="menu-btn">
							<h5>View Showcase<i class="fa-solid fa-plus"></i></h5></a>
						</div>
						</div>
					</div>
				</div>
			</div>
			<div class="branding-products item" style="background-image: url({{asset('/img/bg2.jpg')}})">
				
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="home-one-featured-area">
							<h1>Web and Multimedia Portfolio</h1>
							<div class="play">
								<p class="p-0">Follow the latest digital and marketing trends. Always be a brand that stands out.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
					<div class="col-lg-6">
						<div class="extras view-btn">
				 <a href="javascript:void(0)" class="menu-btn">
							<h5>View Showcase<i class="fa-solid fa-plus"></i></h5></a>
						</div>
						</div>
				  </div>
					</div>
			</div>
	  
	  
  </section>
</br>
<section class="gap section-f9">
	<div class="container">
		<div class="heading" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
			<img alt="heading-shape" src="{{ asset('img/heading-shape.png') }}">
			<p>Experience</p>
			<h2>Creative Agency Desain, Editing dan Konten Kreator</h2>
		</div>
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">
				<div class="services-style-one">
					<div class="services-style-one-img">
						<img src="{{ asset('img/photography.png') }}" width="105rem" height="auto" alt="">
					</div>
					<h4><a href="services.html">Fotografi</a></h4>
					<p>Kami menghadirkan hasil fotografi profesional untuk berbagai kebutuhan, mulai dari promosi produk hingga dokumentasi acara, dengan sentuhan visual yang memukau.</p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600">
				<div class="services-style-one">
					<div class="services-style-one-img">
						<img src="{{ asset('img/videography.png') }}" width="105rem" height="auto" alt="">
					</div>
					<h4><a href="services.html">Videografi</a></h4>
					<p>Dari produksi video komersial hingga dokumenter, kami menciptakan konten video berkualitas tinggi untuk meningkatkan visibilitas brand Anda.</p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
				<div class="services-style-one">
					<div class="services-style-one-img">
						<img src="{{ asset('img/pentool.png') }}" width="105rem" height="auto" alt="">
					</div>
					<h4><a href="services.html">Editing</a></h4>
					<p>Dengan proses editing yang teliti dan kreatif, kami memastikan hasil akhir video dan foto Anda tampil maksimal dan menarik perhatian.</p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
				<div class="services-style-one nogap">
					<div class="services-style-one-img">
						<img src="{{ asset('img/microphone.png') }}" width="105rem" height="auto" alt="">
					</div>
					<h4><a href="services.html">VO</a></h4>
					<p>Jasa Voice Over profesional untuk berbagai proyek, memastikan suara yang tepat untuk menghidupkan pesan Anda dengan cara yang paling efektif.</p>
				</div>
			</div>
		</div>
		<div class="row g-4">
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">
				<div class="services-style-one">
					<div class="services-style-one-img">
						<img src="{{ asset('img/illustration.png') }}" width="105rem" height="auto" alt="">
					</div>
					<h4><a href="services.html">Desain</a></h4>
					<p>Kami menawarkan jasa desain grafis yang kreatif dan fungsional untuk memperkuat brand visual Anda di berbagai media.</p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600">
				<div class="services-style-one">
					<div class="services-style-one-img">
						<img src="{{ asset('img/talent-search.png') }}" width="105rem" height="auto" alt="">
					</div>
					<h4><a href="services.html">Talent</a></h4>
					<p>Kami memiliki tim talent profesional yang siap membantu meningkatkan kualitas produksi Anda, dari model hingga presenter.</p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
				<div class="services-style-one">
					<div class="services-style-one-img">
						<img src="{{ asset('img/social-media.png') }}" width="105rem" height="auto" alt="">
					</div>
					<h4><a href="services.html">Media Sosial Specialist</a></h4>
					<p>Strategi sosial media yang dirancang untuk meningkatkan engagement dan membantu brand Anda terhubung dengan audiens yang lebih luas.</p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
				<div class="services-style-one nogap">
					<div class="services-style-one-img">
						<img src="{{ asset('img/user.png') }}" width="105rem" height="auto" alt="">
					</div>
					<h4><a href="services.html">Media Partner</a></h4>
					<p>Bermitra dengan berbagai media untuk memberikan eksposur yang lebih luas dan mendukung setiap kampanye pemasaran Anda.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="unique-section gap no-top section-f9">
	<div class="container">
		<div class="row align-items-center">
			<div class="offset-xl-3 offset-lg-2 col-xl-2 col-lg-3 col-md-12">
				<img alt="girl" class="w-auto mb-md-0 mb-4" src="{{ asset('img/1.png') }}">
			</div>
			<div class="offset-xl-1 col-lg-6 col-md-12">
				<div class="shape-style">
					<figure class="effect-duke mt-sm-4">
						<img class="w-100" alt="girl" src="{{ asset('img/2.png') }}">
					</figure>
				</div>
			</div>
			<div class="col-lg-5 p-0">
				<div class="img-unique shape-style">
					<figure class="effect-duke">
						<img alt="man" src="{{ asset('img/3.png') }}">
					</figure>
				</div>
			</div>
			<div class="offset-xl-1 col-lg-6">
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
						<h6>Tahun Pengalaman<br>Bekerja</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class=" section-f9 how-we-work-section">
		<div class="container-fluid">
		<div class="row">
			<div class="offset-xl-1 col-xl-5 col-lg-12">
				<div class="how-we-work">
					<h2>Cara Kerja Kami</h2>
					  <div class="planning-make">
						  <i><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m502.71875 58.410156-59.996094 30-13.417968-26.832031 60-30zm0 0"/><path d="m489.300781 298.429688-60-30 13.417969-26.832032 59.996094 30zm0 0"/><path d="m451 150h61v30h-61zm0 0"/><path d="m22.707031 31.582031 60 30-13.417969 26.832031-59.996093-30zm0 0"/><path d="m22.699219 298.417969-13.414063-26.832031 59.996094-30 13.417969 26.832031zm0 0"/><path d="m0 150h61v30h-61zm0 0"/><path d="m211 482h90v30h-90zm0 0"/><path d="m421 165c0-90.980469-74.019531-165-165-165s-165 74.019531-165 165c0 62.039062 35.011719 118.609375 90 146.761719v48.238281h-30v30h30v62h150v-62h30v-30h-30v-48.238281c54.988281-28.152344 90-84.722657 90-146.761719zm-120 257h-90v-32h90zm-60-227c0-8.269531 6.730469-15 15-15s15 6.730469 15 15-6.730469 15-15 15-15-6.730469-15-15zm30 165v-122.578125c17.460938-6.195313 30-22.867187 30-42.421875 0-24.8125-20.1875-45-45-45s-45 20.1875-45 45c0 19.554688 12.539062 36.226562 30 42.421875v122.578125h-30v-67.511719l-8.972656-3.9375c-49.222656-21.609375-81.027344-70.105469-81.027344-123.550781 0-74.4375 60.5625-135 135-135s135 60.5625 135 135c0 53.445312-31.804688 101.941406-81.027344 123.550781l-8.972656 3.9375v67.511719zm0 0"/></svg></i>
						  <div>
							  <a href="#"><h3>Perencanaan</h3></a>
							  <p>Perencanaan yang detail dan strategis, memastikan setiap langkah kami terukur dan sesuai dengan kebutuhan Anda. 
								Visi kami adalah memberikan hasil terbaik dengan pendekatan yang matang dan terstruktur.</p>
						  </div>
					  </div>
				  <div class="planning-make two">
					  <i><svg id="Layer_1" enable-background="new 0 0 512.142 512.142" height="512" viewBox="0 0 512.142 512.142" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m460.426 118.142-80-80h-234.775c-13.137-10.621-29.839-17-48.009-17-13.844 0-26.829 3.715-38.043 10.173l-31.315-31.315-28.284 28.284 31.315 31.315c-6.458 11.215-10.173 24.199-10.173 38.043 0 18.17 6.379 34.872 17 48.009v234.775l80 80v51.716h40v-354h354v-40zm-56.568 0h-232.528c1.819-6.529 2.812-13.399 2.812-20.5 0-6.738-.884-13.271-2.528-19.5h192.243zm-306.216-57c20.126 0 36.5 16.374 36.5 36.5s-16.374 36.5-36.5 36.5-36.5-16.374-36.5-36.5 16.374-36.5 36.5-36.5zm-19.5 302.716v-192.243c6.229 1.643 12.762 2.528 19.5 2.528 7.101 0 13.971-.993 20.5-2.812v232.528zm394-165.716h40c0 83.873-32.662 162.725-91.969 222.031-59.307 59.307-138.159 91.969-222.031 91.969v-40c151.084 0 274-122.916 274-274z"/></svg></i>
					  <div>
						  <a href="#"><h3>Desain Proyek</h3></a>
						  <p>Merancang solusi kreatif yang fungsional dan estetis. Setiap desain yang kami buat 
							memastikan proyek Anda tidak hanya terlihat menarik tetapi juga berjalan lancar dan efisien.</p>
					  </div>
				  </div>
					  <div class="planning-make three">
						  <i><svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m422.491 202.919 89.509-52.569-256-150.35-256 150.35 89.509 52.569-89.509 53.081 89.508 52.569-89.508 53.081 256 150.35 256-150.35-89.508-53.082 89.508-52.568zm-166.491 62.965-46.701-27.223 194.408-117.742 50.489 29.431zm-122.66-71.502 194.407-117.742 46.374 27.032-194.408 117.743zm122.66-159.566 42.161 24.577-194.407 117.742-45.95-26.785zm-136.925 185.468 136.925 80.417 136.925-80.417 61.271 35.716-198.196 115.535-198.196-115.535zm335.121 141.366-198.196 115.534-198.196-115.534 61.271-35.717 136.925 80.418 136.926-80.417z"/></g></svg></i>
						  <div>
							  <a href="#"><h3>Implementasi</h3></a>
							  <p>Implementasi dengan presisi tinggi. Tim kami bekerja keras untuk memastikan setiap detail eksekusi sesuai dengan rencana, 
								sehingga proyek Anda terlaksana dengan sempurna, tepat waktu, dan sesuai harapan.</p>
						  </div>
					  </div>
				  </div>
			</div>
			<div class="col-xl-6 col-lg-12 p-xl-0">
				<div class="shape-style">
					<figure class="effect-duke mt-xl-0 mt-5">
						<img alt="girl" src="{{asset('/img/4.png')}}">
					</figure>
					</div>
			</div>
		</div>
		</div>
</section>
<div class="clients-logo gap  section-f9">
		<div class="container">
			<div class="logodata owl-carousel owl-theme">
				<div class="partner item">
					<img alt="clients-logo" src="{{asset('/img/medpart.png')}}">
				</div>
				<div class="partner item">
					<img alt="clients-logo" src="{{asset('/img/medpart.png')}}">
				</div>
				<div class="partner item">
					<img alt="clients-logo" src="{{asset('/img/medpart.png')}}">
				</div>
				<div class="partner item">
					<img alt="clients-logo" src="{{asset('/img/medpart.png')}}">
				</div>
				<div class="partner item">
					<img alt="clients-logo" src="{{asset('/img/medpart.png')}}">
				</div>
			</div>
		</div>
</div> 
<section class="section-f9 portfolio gap" style="background-image: url({{ asset('/img/10.png') }})">
    <div class="container">
        <div class="heading">
            <p>Portfolio</p>
            <h2>Our Latest Works</h2>
        </div>
        <div class="zoom-slider owl-carousel">
            @foreach ($portfolios->take(4) as $portfolio)
                <div class="item zoom-slider-img">
                    <figure>
                        <!-- Apply the same size and styling to each image -->
                        <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="slider-image">
                    </figure>
                    <div class="zoom-slider-data">
                        <h4>{{ $portfolio->title }}</h4>
                        <a href="#"><h2>{{ $portfolio->title }}</h2></a>
                        <h3>{{ $portfolio->category }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
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

<style>
    /* Styling for images to maintain consistent size */
    .slider-image {
        width: 100%; /* Takes full width of the slider item */
        height: 580px; /* Set a fixed height to maintain consistency */
        object-fit: cover; /* Ensures images fit without distortion */
        border-radius: 8px; /* Optional: adds rounded corners */
    }

    /* Optional: Set a max-width for carousel items for a uniform look */
    .zoom-slider .item {
        max-width: 600px; /* Adjust as needed */
        margin: auto;
    }
</style>

@endsection
