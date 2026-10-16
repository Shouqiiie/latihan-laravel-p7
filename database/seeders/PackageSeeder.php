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
                'name' => 'Paket Umroh Reguler Barokah 9 Hari',
                'category' => 'Reguler',
                'price' => 28500000,
                'duration' => '9 Hari',
                'airline' => 'Saudia Airlines Direct Jeddah',
                'hotel_makkah' => 'Movenpick Hotel Hajar Tower (*5)',
                'hotel_madinah' => 'Rove Al Madinah Hotel (*4)',
                'departure_date' => '12 November 2026',
                'quota' => 18,
                'image' => 'images/packages/package-1.svg',
                'description' => 'Program ibadah umroh reguler 9 hari dengan penerbangan langsung tanpa transit. Hotel dekat dengan pelataran Masjidil Haram dan Masjid Nabawi, dibimbing langsung oleh Muthawwif berpengalaman sesuai Al-Qur\'an dan Sunnah.',
            ],
            [
                'name' => 'Paket Umroh VIP Eksekutif Zamzam 10 Hari',
                'category' => 'VIP Eksekutif',
                'price' => 39500000,
                'duration' => '10 Hari',
                'airline' => 'Garuda Indonesia Direct Madinah',
                'hotel_makkah' => 'Fairmont Makkah Clock Royal Tower (*5)',
                'hotel_madinah' => 'Dar Al Taqwa Hotel (*5)',
                'departure_date' => '25 November 2026',
                'quota' => 12,
                'image' => 'images/packages/package-2.svg',
                'description' => 'Pengalaman ibadah istimewa dengan akomodasi hotel bintang lima persis di pelataran Masjidil Haram dan Nabawi. Termasuk fasilitas Kereta Cepat Haramain Express Makkah - Madinah.',
            ],
            [
                'name' => 'Paket Umroh Plus Wisata Turki Istanbul & Bursa',
                'category' => 'Umroh Plus',
                'price' => 38900000,
                'duration' => '12 Hari',
                'airline' => 'Turkish Airlines',
                'hotel_makkah' => 'Swissotel Al Maqam Makkah (*5)',
                'hotel_madinah' => 'Grand Plaza Madinah (*4)',
                'departure_date' => '05 Desember 2026',
                'quota' => 15,
                'image' => 'images/packages/package-3.svg',
                'description' => 'Ibadah khusyuk di Tanah Suci sekaligus napak tilas sejarah peradaban Islam di Istanbul & Bursa, Turki. Mengunjungi Blue Mosque, Hagia Sophia, Grand Bazaar, dan Gunung Salju Uludag.',
            ],
            [
                'name' => 'Paket Umroh Awal Ramadhan Berkah 12 Hari',
                'category' => 'Ramadhan',
                'price' => 42000000,
                'duration' => '12 Hari',
                'airline' => 'Saudia Airlines Direct',
                'hotel_makkah' => 'Pullman Zamzam Makkah (*5)',
                'hotel_madinah' => 'Al Aqeeq Madinah (*5)',
                'departure_date' => '10 Februari 2027',
                'quota' => 10,
                'image' => 'images/packages/package-4.svg',
                'description' => 'Merasakan kenikmatan berpuasa dan shalat tarawih berjamaah di dua kota suci Makkah dan Madinah pada sepuluh hari pertama Ramadhan dengan bimbingan rohani intensif.',
            ],
            [
                'name' => 'Paket Umroh Lailatul Qadr & Hari Raya Idul Fitri',
                'category' => 'Ramadhan & Syawal',
                'price' => 55000000,
                'duration' => '16 Hari',
                'airline' => 'Garuda Indonesia',
                'hotel_makkah' => 'Raffles Makkah Palace (*5)',
                'hotel_madinah' => 'The Oberoi Madinah (*5)',
                'departure_date' => '15 Maret 2027',
                'quota' => 8,
                'image' => 'images/packages/package-5.svg',
                'description' => 'Puncak ibadah umroh di sepuluh malam terakhir Ramadhan untuk berburu kemuliaan malam Lailatul Qadr dan merayakan shalat Idul Fitri yang penuh haru di Masjidil Haram Makkah.',
            ],
            [
                'name' => 'Paket Umroh Plus Wisata Modern Dubai & Abu Dhabi',
                'category' => 'Umroh Plus',
                'price' => 36500000,
                'duration' => '12 Hari',
                'airline' => 'Emirates Airlines',
                'hotel_makkah' => 'Anjum Hotel Makkah (*5)',
                'hotel_madinah' => 'Millennium Al Aqeeq (*5)',
                'departure_date' => '18 Januari 2027',
                'quota' => 20,
                'image' => 'images/packages/package-6.svg',
                'description' => 'Kombinasi ibadah umroh khidmat dengan wisata edukasi arsitektur di Dubai & Abu Dhabi. Mengunjungi Burj Khalifa, Desert Safari, dan kemegahan Sheikh Zayed Grand Mosque.',
            ],
            [
                'name' => 'Paket Umroh Sahabat Ummat Ekonomis Barokah',
                'category' => 'Hemat Promo',
                'price' => 25900000,
                'duration' => '9 Hari',
                'airline' => 'Lion Air Premium Direct Jeddah',
                'hotel_makkah' => 'Rayyana Grand Plaza (*4)',
                'hotel_madinah' => 'Durrat Al Eiman Hotel (*4)',
                'departure_date' => '20 Desember 2026',
                'quota' => 35,
                'image' => 'images/packages/package-7.svg',
                'description' => 'Paket ekonomis bersahabat dengan pelayanan prima dan akomodasi nyaman berjarak dekat dilengkapi shuttle bus gratis 24 jam ke Masjidil Haram. Sangat tepat bagi rombongan keluarga.',
            ],
            [
                'name' => 'Paket Umroh Arbain Madinah Khusyuk 14 Hari',
                'category' => 'Arbain',
                'price' => 33500000,
                'duration' => '14 Hari',
                'airline' => 'Saudia Airlines',
                'hotel_makkah' => 'Retaj Al Rayyan Makkah (*4)',
                'hotel_madinah' => 'Al Saha Hotel Madinah (*4)',
                'departure_date' => '10 Januari 2027',
                'quota' => 16,
                'image' => 'images/packages/package-8.svg',
                'description' => 'Program ibadah yang mengutamakan shalat berjamaah 40 waktu (Arbain) tanpa terputus di Masjid Nabawi Madinah Al-Munawwarah serta ziarah sejarah tempat-tempat mustajab.',
            ],
            [
                'name' => 'Paket Umroh Plus Napak Tilas Masjidil Aqsha & Jordan',
                'category' => 'Umroh Plus',
                'price' => 49800000,
                'duration' => '14 Hari',
                'airline' => 'Royal Jordanian & Saudia',
                'hotel_makkah' => 'Makkah Towers (*5)',
                'hotel_madinah' => 'Leader Al Muna Kareem (*5)',
                'departure_date' => '08 Februari 2027',
                'quota' => 14,
                'image' => 'images/packages/package-9.svg',
                'description' => 'Ziarah suci ke 3 masjid termulia umat Islam: Masjidil Haram, Masjid Nabawi, dan Masjid Al-Aqsha di Palestina, serta menjelajahi peninggalan keajaiban dunia Kota Petra di Yordania.',
            ],
            [
                'name' => 'Paket Haji Plus & Furoda Rahmah VVIP Langsung Berangkat',
                'category' => 'Haji Khusus',
                'price' => 195000000,
                'duration' => '25 Hari',
                'airline' => 'Saudia Airlines First Class',
                'hotel_makkah' => 'Dar Al Tawhid Intercontinental (*5)',
                'hotel_madinah' => 'The Oberoi Madinah (*5)',
                'departure_date' => '15 Mei 2027',
                'quota' => 6,
                'image' => 'images/packages/package-10.svg',
                'description' => 'Ibadah Haji Khusus resmi visa Mujamalah/Furoda Kemenag RI tanpa masa tunggu bertahun-tahun. Fasilitas tenda ber-AC berkelas di Mina & Arafah VVIP serta pendampingan ulama terpercaya.',
            ],
        ];

        foreach ($packages as $package) {
            Package::create($package);
        }
    }
}
