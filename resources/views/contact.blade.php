@extends('layouts.app')

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

  <section class="hero-section " style="background-image: url('{{ asset('img/12.png') }}')">
		<div class="container">
			<h2>Kontak Kami</h2>
			<p>Dari Ide hingga Eksekusi, Kami Ahlinya!</p>
			<ul>
				<li><i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Beranda</a></li>
				<li><a href="#">Kontak Kami</a></li>  
			</ul>
		</div>
	</section>
	<section class="gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
					<div class="heading two">
						<p>BUATINKAMU.ID</p>
						<h2>Solusi Kreatif Menciptakan Brand Yang Melekat</h2>
					</div>
					<form class="content-form" action="{{ route('contact.submit') }}" method="POST">
						@csrf <!-- Token CSRF untuk keamanan -->
						<h5>Apa Yang Dapat Kami Bantu?</h5>
						<ul class="ks-cboxtags">
							<li><input type="checkbox" id="checkboxOne" value="Desain"><label for="checkboxOne">Desain</label></li>
							<li><input type="checkbox" id="checkboxTwo" value="Marketing"><label for="checkboxTwo">Marketing</label></li>
							<li><input type="checkbox" id="checkboxThree" value="Videografi"><label for="checkboxThree">Videografi</label></li>
						</ul>
						<input type="text" name="Name" placeholder="Full Name" required>
						<input type="email" name="Email" placeholder="Email Address" required>
						<textarea name="message" placeholder="Your Message" required></textarea>
						<button class="sec-btn" type="submit">Kirim Pesan</button>
					</form>
					
				</div>
				<div class="offset-xl-1 col-lg-5" data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="what-we-provide address">
	  					<i><svg height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg"><g id="Layer_34" data-name="Layer 34"><path d="m30 9v14a3 3 0 0 1 -3 3h-22a3 3 0 0 1 -3-3v-14a2.87 2.87 0 0 1 .19-1l12.15 8.1a3 3 0 0 0 3.32 0l12.15-8.1a2.87 2.87 0 0 1 .19 1zm-13.45 5.43 12-8a3 3 0 0 0 -1.55-.43h-22a3 3 0 0 0 -1.54.44l12 8a1 1 0 0 0 1.09-.01z"/></g></svg></i>
	  					<div>
	  						<h4>Email Address.</h4>
	  						<h2><a href="mailto:buatinkamuid@gmail.com">buatinkamuid@gmail.com</a></h2>
						</div>
	  			</div>
	  			<div class="what-we-provide address">
							  					<i><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
							<path d="M437.15,74.817C388.895,26.571,324.561,0,256,0C187.587,0,123.279,26.65,74.92,75.041
									C26.559,123.435-0.048,187.766,0,256.184c0.048,68.507,27.005,132.938,75.905,181.425C124.335,485.629,188.219,512,255.997,512
									c0.677,0,1.357-0.002,2.035-0.008c44.288-0.345,87.858-12.192,126.001-34.262l-15.024-25.967
									c-33.653,19.472-72.109,29.925-111.21,30.23c-60.48,0.456-117.575-22.858-160.77-65.688C53.847,373.49,30.043,316.616,30,256.163
									C29.958,195.762,53.447,138.97,96.141,96.247C138.832,53.527,195.605,30,256,30c124.595,0,225.979,101.365,226,225.959
									c0.008,49.387-15.621,96.298-45.198,135.661c-2.573,3.424-6.37,5.478-10.692,5.784c-4.368,0.308-8.658-1.291-11.756-4.388
									l-20.406-20.406l9.06-9.06l-70.711-70.711l-28.284,28.284c-58.885-7.935-105.202-54.252-113.137-113.137l28.284-28.284
									l-70.711-70.711l-39.054,39.054c-3.826,66.249,19.552,133.776,70.167,184.391s118.142,73.993,184.391,70.167l8.782-8.781
									l20.406,20.406c9.247,9.247,22.033,14.022,35.082,13.1c12.935-0.913,24.803-7.36,32.563-17.688
									C494.3,365.039,512.01,311.895,512,255.954C511.988,187.393,485.406,123.064,437.15,74.817z"/>
						</svg>
						</i>
	  					<div>
	  						<h4>Phone No.</h4>
	  						<h2><a href="callto:+06282124504313">+62 821 2450 4313</a></h2>
	  						<h5>24/7 Support team</h5>
						</div>
	  			</div>
	  			<div class="what-we-provide address">
								<i>
								  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 469.333 469.333" style="enable-background:new 0 0 469.333 469.333;" xml:space="preserve">
									<path d="M234.667,149.333c-47.147,0-85.333,38.187-85.333,85.333S187.52,320,234.667,320S320,281.813,320,234.667
										S281.813,149.333,234.667,149.333z M425.387,213.333C415.573,124.373,344.96,53.76,256,43.947V0h-42.667v43.947
										C124.373,53.76,53.76,124.373,43.947,213.333H0V256h43.947c9.813,88.96,80.427,159.573,169.387,169.387v43.947H256v-43.947
										C344.96,415.573,415.573,344.96,425.387,256h43.947v-42.667H425.387L425.387,213.333z M234.667,384
										c-82.453,0-149.333-66.88-149.333-149.333s66.88-149.333,149.333-149.333S384,152.213,384,234.667S317.12,384,234.667,384z"/>
									</svg>
								</i>
	  					<div>
	  						<h4>Location.</h4>
	  						<h2>Bogor</h2>
	  						<h5>Sekolah Vokasi IPB University
							</h5>
						</div>
	  			</div>
	  			<div class="what-we-provide end address">
	  				<i><svg xmlns="http://www.w3.org/2000/svg" fill="#00ce7d" height="512" viewBox="0 0 24 24" width="512"><g clip-rule="evenodd" fill="#00ce7d" fill-rule="evenodd"><path d="m12 4c-4.41828 0-8 3.58172-8 8 0 4.4183 3.58172 8 8 8 4.4183 0 8-3.5817 8-8 0-4.41828-3.5817-8-8-8zm-10 8c0-5.52285 4.47715-10 10-10 5.5228 0 10 4.47715 10 10 0 5.5228-4.4772 10-10 10-5.52285 0-10-4.4772-10-10z"/><path d="m7.5 12c0-.5523.44772-1 1-1h3.5c.5523 0 1 .4477 1 1s-.4477 1-1 1h-3.5c-.55228 0-1-.4477-1-1z"/><path d="m12 6c.5523 0 1 .44772 1 1v5c0 .5523-.4477 1-1 1s-1-.4477-1-1v-5c0-.55228.4477-1 1-1z"/></g></svg></i>
	  					<div>
	  						<h4>Working Hours.</h4>
	  						<h2><a href="#">8:00 AM - 5:00 PM </a></h2>
	  						<h5>Monday - Friday</h5>
						</div>
	  			</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- footer -->
	
@endsection

