<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            [
                'name' => 'Paket Umroh High Season Plus Thoif by IndiGo (12 Hari)',
                'category' => 'High Season',
                'price' => 26900000,
                'duration' => '12 Hari',
                'airline' => 'IndiGo Airlines',
                'hotel_makkah' => 'Holiday Inn (*4)',
                'hotel_madinah' => 'Hotel Bintang 4 Madinah',
                'departure_date' => 'Desember 2026 (High Season)',
                'quota' => 25,
                'image' => 'images/packages/package-1.jpg',
                'description' => 'Paket Umroh High Season 12 Hari Plus Thoif by IndiGo Airlines. Harga sudah termasuk kenaikan avtur, akomodasi Holiday Inn Makkah (*4), bonus zam-zam 5 liter, oleh-oleh Al Baik, dan dokumentasi.',
            ],
            [
                'name' => 'Paket Umroh High Season Plus Thoif by IndiGo (16 Hari)',
                'category' => 'High Season',
                'price' => 28900000,
                'duration' => '16 Hari',
                'airline' => 'IndiGo Airlines',
                'hotel_makkah' => 'Holiday Inn (*4)',
                'hotel_madinah' => 'Hotel Bintang 4 Madinah',
                'departure_date' => 'Desember 2026 (High Season)',
                'quota' => 20,
                'image' => 'images/packages/package-2.jpg',
                'description' => 'Paket Umroh High Season durasi 16 Hari Plus Thoif by IndiGo Airlines. Waktu ibadah lebih leluasa di Tanah Suci Makkah dan Madinah dengan fasilitas lengkap dan pembimbing berpengalaman.',
            ],
            [
                'name' => 'Paket Umroh Plus Thaif by Qatar Airways (12 Hari)',
                'category' => 'Umroh Plus',
                'price' => 24400000,
                'duration' => '12 Hari',
                'airline' => 'Qatar Airways',
                'hotel_makkah' => 'Holiday Inn (*4) Shuttle Bus',
                'hotel_madinah' => 'Hotel Bintang 4 Madinah',
                'departure_date' => 'Januari 2027',
                'quota' => 30,
                'image' => 'images/packages/package-3.jpg',
                'description' => 'Paket Umroh 12 Hari plus ziarah ke Kota Sejuk Thaif menggunakan maskapai penerbangan internasional Qatar Airways. Fasilitas hotel berbintang dan shuttle bus 24 jam.',
            ],
            [
                'name' => 'Paket Umroh by Qatar Airways (10 Hari)',
                'category' => 'Reguler',
                'price' => 23900000,
                'duration' => '10 Hari',
                'airline' => 'Qatar Airways',
                'hotel_makkah' => 'Holiday Inn (*4) Shuttle Bus',
                'hotel_madinah' => 'Hotel Bintang 4 Madinah',
                'departure_date' => 'Januari 2027',
                'quota' => 28,
                'image' => 'images/packages/package-4.jpg',
                'description' => 'Paket Umroh 10 Hari bersama Qatar Airways dengan harga hemat mulai Rp 23,9 Juta. Termasuk tiket PP, visa resmi, hotel Makkah & Madinah, city tour, dan bimbingan muthawwif.',
            ],
            [
                'name' => 'Paket Umroh Plus Thaif by Qatar Airways (10 Hari)',
                'category' => 'Umroh Plus',
                'price' => 23900000,
                'duration' => '10 Hari',
                'airline' => 'Qatar Airways',
                'hotel_makkah' => 'Holiday Inn (*4) Shuttle Bus',
                'hotel_madinah' => 'Hotel Bintang 4 Madinah',
                'departure_date' => 'Februari 2027',
                'quota' => 22,
                'image' => 'images/packages/package-5.jpg',
                'description' => 'Paket Umroh 10 Hari plus ziarah Thaif menggunakan Qatar Airways. Hotel Holiday Inn (*4) Makkah, fasilitas city tour, manasik, dan muthawwif pendamping.',
            ],
            [
                'name' => 'Paket Umroh by Qatar Airways (9 Hari)',
                'category' => 'Reguler',
                'price' => 23400000,
                'duration' => '9 Hari',
                'airline' => 'Qatar Airways',
                'hotel_makkah' => 'Holiday Inn (*4) Shuttle Bus',
                'hotel_madinah' => 'Hotel Bintang 4 Madinah',
                'departure_date' => 'Februari 2027',
                'quota' => 35,
                'image' => 'images/packages/package-6.jpg',
                'description' => 'Paket Umroh 9 Hari super hemat bersama maskapai Qatar Airways. Fasilitas lengkap hotel bintang 4 dengan shuttle bus, perlengkapan umroh, air zamzam 5 liter, dan dokumentasi.',
            ],
            [
                'name' => 'Paket Umroh by Oman Air (12 Hari)',
                'category' => 'Reguler',
                'price' => 23900000,
                'duration' => '12 Hari',
                'airline' => 'Oman Air',
                'hotel_makkah' => 'Holiday Inn (*4) Shuttle Bus',
                'hotel_madinah' => 'Hotel Bintang 4 Madinah',
                'departure_date' => 'Maret 2027',
                'quota' => 25,
                'image' => 'images/packages/package-7.jpg',
                'description' => 'Paket Umroh 12 Hari maskapai Oman Air. Fasilitas hotel Holiday Inn (*4) Makkah, tiket pesawat PP, visa umroh resmi, city tour Makkah Madinah, serta tour leader pendamping.',
            ],
            [
                'name' => 'Paket Umroh by Oman Air (9 Hari)',
                'category' => 'Reguler',
                'price' => 23400000,
                'duration' => '9 Hari',
                'airline' => 'Oman Air',
                'hotel_makkah' => 'Holiday Inn (*4) Shuttle Bus',
                'hotel_madinah' => 'Hotel Bintang 4 Madinah',
                'departure_date' => 'Maret 2027',
                'quota' => 30,
                'image' => 'images/packages/package-8.jpg',
                'description' => 'Paket Umroh 9 Hari Oman Air hemat dan barokah. Pilihan tepat bagi jamaah yang ingin ibadah dengan waktu efisien. Termasuk perlengkapan, makan 3x sehari, dan zamzam.',
            ],
            [
                'name' => 'Paket Umroh by Qatar Airways (12 Hari)',
                'category' => 'Reguler',
                'price' => 24400000,
                'duration' => '12 Hari',
                'airline' => 'Qatar Airways',
                'hotel_makkah' => 'Holiday Inn (*4) Shuttle Bus',
                'hotel_madinah' => 'Hotel Bintang 4 Madinah',
                'departure_date' => 'April 2027',
                'quota' => 20,
                'image' => 'images/packages/package-9.jpg',
                'description' => 'Paket Umroh 12 Hari Qatar Airways dengan kenyamanan ekstra. Akomodasi terjamin dekat pelataran dengan shuttle bus, bimbingan manasik, dan perlengkapan ibadah komplit.',
            ],
            [
                'name' => 'Paket Umroh Combo Kereta Cepat by IndiGo (16 Hari)',
                'category' => 'Combo Eksklusif',
                'price' => 44900000,
                'duration' => '16 Hari',
                'airline' => 'IndiGo Airlines',
                'hotel_makkah' => 'Maysan AL Mashaer (*3) 4-5 Menit Jalan Kaki',
                'hotel_madinah' => 'Hotel Bintang 4 Madinah',
                'departure_date' => 'Desember 2026 (High Season)',
                'quota' => 12,
                'image' => 'images/packages/package-10.jpg',
                'description' => 'Paket Umroh Combo 16 Hari dengan hotel sangat dekat pelataran Masjidil Haram (4-5 menit jalan kaki) serta bonus tiket Kereta Cepat Haramain Express Makkah - Madinah.',
            ],
        ];

        foreach ($packages as $package) {
            Package::create($package);
        }
    }
}
