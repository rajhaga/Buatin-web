<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $packages = [
            [
                'name' => 'Videografer Reels (HP)',
                'description' => 'Jasa videografer untuk pembuatan Reels menggunakan HP.',
                'price' => 50000,
                'category' => 'Videography'
            ],
            [
                'name' => 'Videografer Reels (Kamera)',
                'description' => 'Jasa videografer untuk pembuatan Reels menggunakan kamera profesional.',
                'price' => 80000,
                'category' => 'Videography'
            ],
            [
                'name' => 'Videografer Company Profile (HP)',
                'description' => 'Jasa videografer untuk pembuatan video profil perusahaan menggunakan HP.',
                'price' => 100000,
                'category' => 'Videography'
            ],
            [
                'name' => 'Videografer Company Profile (Kamera)',
                'description' => 'Jasa videografer untuk pembuatan video profil perusahaan menggunakan kamera profesional.',
                'price' => 150000,
                'category' => 'Videography'
            ],
            [
                'name' => 'Editing Reels',
                'description' => 'Jasa editing video untuk Reels dengan durasi per menit.',
                'price' => 70000,
                'category' => 'Editing'
            ],
            [
                'name' => 'Editing Company Profile',
                'description' => 'Jasa editing video untuk profil perusahaan dengan durasi per menit.',
                'price' => 100000,
                'category' => 'Editing'
            ],
            [
                'name' => 'Talent',
                'description' => 'Jasa talent untuk keperluan video atau fotografi, per orang.',
                'price' => 50000,
                'category' => 'Videography'
            ],
            [
                'name' => 'Foto Produk',
                'description' => 'Jasa fotografi produk, termasuk lima foto produk.',
                'price' => 30000,
                'category' => 'Videography'
            ],
            [
                'name' => 'Voice Over',
                'description' => 'Jasa voice-over dengan durasi per menit.',
                'price' => 20000,
                'category' => 'Editing'
            ],
            [
                'name' => 'Desain Feeds',
                'description' => 'Jasa desain feed untuk media sosial.',
                'price' => 15000,
                'category' => 'Design'
            ],
            [
                'name' => 'Desain Poster',
                'description' => 'Jasa desain poster untuk kebutuhan promosi.',
                'price' => 50000,
                'category' => 'Design'
            ],
            [
                'name' => 'Desain Banner',
                'description' => 'Jasa desain banner untuk berbagai keperluan.',
                'price' => 100000,
                'category' => 'Design'
            ],
            [
                'name' => 'Desain Logo',
                'description' => 'Jasa desain logo profesional untuk branding.',
                'price' => 500000,
                'category' => 'Design'
            ],
            [
                'name' => 'Videografer+Editor (Reels+HP)',
                'description' => 'Jasa videografer dan editor untuk Reels menggunakan HP, harga per menit.',
                'price' => 100000,
                'category' => 'Special Packages'
            ],
            [
                'name' => 'Videografer+Editor (Reels+Kamera)',
                'description' => 'Jasa videografer dan editor untuk Reels menggunakan kamera profesional, harga per menit.',
                'price' => 150000,
                'category' => 'Special Packages'
            ],
            [
                'name' => 'Videografer+Editor (Company Profile+HP)',
                'description' => 'Jasa videografer dan editor untuk profil perusahaan menggunakan HP, harga per menit.',
                'price' => 170000,
                'category' => 'Special Packages'
            ],
            [
                'name' => 'Videografer+Editor (Company Profile+Kamera)',
                'description' => 'Jasa videografer dan editor untuk profil perusahaan menggunakan kamera profesional, harga per menit.',
                'price' => 230000,
                'category' => 'Special Packages'
            ]
        ];

        foreach ($packages as $package) {
            Package::create($package);
        }
    }
}
