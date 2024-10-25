<div id="lightbox" class="lightbox clearfix">
    <div id="overlay" class="overlay"></div>
    <div class="white_content">
        <a href="javascript:;" class="textright close-btn" id="close">
            <i class="fa-regular fa-circle-xmark"></i>
        </a>

        @if(Auth::check())
            <!-- Tampilkan Profil jika Pengguna Sudah Login -->
            <div class="menu-grid">
                <div class="profile-content">
                    <h3 class="pb-3">Your Profile</h3>
                    <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                    <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                    
                    <img class="profile-img pt-4" alt="Profile Image" src="{{ asset('img/profile.png') }}">
                    
                    <div class="contact-info pt-4">
                        <a href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a>
                        <h6 class="pt-3 pb-3"><a href="callto:+12354561228">+1 235 456 1228</a></h6>
                        <h5>Town, new Fairground Rd, FL 3290 United States</h5>
                    </div>
                </div>

                <div class="profile-actions">
                    <ul>
                        <li><a href="#">Booking</a></li>
                    </ul>
                </div>
            </div>
        @else
            <!-- Notifikasi jika Pengguna Belum Login -->
            <div class="text-center">
                <img src="{{ asset('img/loggedin.png') }}" alt="Not Logged In" class="not-loggedin-img">
                <h3 class="pt-3">Anda belum login</h3>
                <p>Silakan <a href="{{ route('login') }}">login</a> terlebih dahulu untuk mengakses profil Anda.</p>
            </div>
        @endif
    </div>
</div>
