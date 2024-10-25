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
                'name' => 'Paket Strategi Media Sosial',
                'description' => 'Paket ini menyediakan strategi pemasaran di media sosial untuk meningkatkan engagement.',
                'price' => 1500000
            ],
            [
                'name' => 'Paket Fotografi Produk',
                'description' => 'Paket ini mencakup sesi fotografi untuk produk yang dipasarkan secara online.',
                'price' => 2000000
            ],
            [
                'name' => 'Paket Video Iklan',
                'description' => 'Paket ini mencakup pembuatan video iklan profesional untuk promosi produk.',
                'price' => 3000000
            ],
            [
                'name' => 'Paket Desain Grafis',
                'description' => 'Paket ini mencakup pembuatan desain grafis untuk kebutuhan branding dan promosi.',
                'price' => 1000000
            ]
        ];

        foreach ($packages as $package) {
            Package::create($package);
        }
    }
}
