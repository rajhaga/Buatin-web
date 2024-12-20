@extends('layouts.app')

@section('content')
<section class="hero-section " style="background-image: url('{{ asset('img/12.png') }}')">
    <div class="container">
        <h2>Form pemesanan</h2>
        <p>Dari Ide hingga Eksekusi, Kami Ahlinya!</p>
        <ul>
            <li><i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Beranda</a></li>
            <li><a href="https://drive.google.com/file/d/12YC-7ZruS-o0TUpqtBoqlQeKudCkMpkj/view">Link Price list</a></li>  
        </ul>
    </div>
</section>
<div class="container my-5">
    <div class="custom-card shadow-lg">
        <div class="card-body">
            <h1 class="heading text-center mb-4">Form Pemesanan</h1>
            <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data" id="orderForm">
                @csrf
                
                <!-- Dropdown untuk memilih nama paket -->
                <div class="form-group">
                    <label for="package_id">Nama Paket</label>
                    <select class="form-control custom-select" id="package_id" name="package_id" required onchange="updatePrice()">
                        <option value="" disabled {{ $packageName == '' ? 'selected' : '' }}>Pilih Paket</option>
                        @foreach($packages as $package)
                            <option value="{{ $package->id }}" data-price="{{ $package->price }}" 
                                    {{ $package->name == $packageName ? 'selected' : '' }}>
                                {{ $package->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Harga otomatis terisi berdasarkan paket yang dipilih -->
                <div class="form-group">
                    <label for="price">Harga</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Harga akan otomatis terisi" readonly>
                </div>

                <!-- Lokasi diisi sendiri oleh pengguna -->
                <div class="form-group">
                    <label for="location">Lokasi</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Masukkan Lokasi" required>
                </div>

                <!-- Tanggal Deadline -->
                <div class="form-group">
                    <label for="deadline">Tanggal Deadline</label>
                    <input type="date" class="form-control" id="deadline" name="deadline" required>
                </div>

                <!-- Deskripsi Konten -->
                <div class="form-group">
                    <label for="description">Deskripsi Konten</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Masukkan Deskripsi Konten dan link referensi" rows="4" required></textarea>
                </div>

                <!-- Button Submit -->
                <button type="submit" class="btn primary-btn">Kirim Pesanan</button>
            </form>
        </div>
    </div>
</div>

<script>
    // Fungsi untuk memperbarui harga berdasarkan paket yang dipilih
    function updatePrice() {
        var selectedPackage = document.getElementById('package_id');
        var selectedOption = selectedPackage.options[selectedPackage.selectedIndex];
        var price = selectedOption.getAttribute('data-price');
        
        document.getElementById('price').value = parseFloat(price).toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
    }

    // Set initial price if package is pre-selected
    window.onload = function() {
        updatePrice();
    };
</script>

<br><br><br>
@endsection
