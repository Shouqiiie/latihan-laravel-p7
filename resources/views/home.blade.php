@extends('layouts.app')

@section('title', 'Beranda - Rahmah Travel | PT Rahmah Group Internasional')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-emerald-900 via-emerald-800 to-teal-900 text-white py-16 sm:py-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div>
                    <span class="inline-block bg-emerald-700/80 text-emerald-200 text-xs font-semibold px-3 py-1 rounded-full mb-4 border border-emerald-500/30">
                        🌟 Travel Umroh &amp; Haji Resmi Berizin Kemenag RI
                    </span>
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-tight tracking-tight mb-5">
                        Wujudkan Niat Suci ke Baitullah dengan Tenang &amp; Berkah
                    </h1>
                    <p class="text-emerald-100 text-base sm:text-lg mb-8 leading-relaxed">
                        <strong>Rahmah Travel</strong> (unit usaha <strong>PT Rahmah Group Internasional</strong>) menghadirkan pelayanan ibadah umroh dan haji plus dengan bimbingan rohani sesuai sunnah dan akomodasi hotel bintang lima dekat masjid.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('packages.index') }}"
                           class="bg-amber-500 hover:bg-amber-600 text-gray-900 font-bold px-6 py-3 rounded-lg shadow-md transition transform hover:-translate-y-0.5 text-sm">
                            Lihat 10 Pilihan Paket Umroh &rarr;
                        </a>
                        <a href="{{ route('about') }}"
                           class="bg-emerald-700/60 hover:bg-emerald-700 text-white font-semibold px-6 py-3 rounded-lg border border-emerald-500/40 transition text-sm">
                            Profil Perusahaan
                        </a>
                    </div>
                </div>

                <!-- Card Highlight Hero -->
                <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/20 shadow-xl">
                    <div class="text-center pb-4 border-b border-white/10 mb-4">
                        <span class="text-xs uppercase tracking-wider text-emerald-300 font-semibold">Komitmen Pelayanan Kami</span>
                        <h2 class="text-xl font-bold text-white mt-1">5 Pasti Umroh Kemenag RI</h2>
                    </div>
                    <ul class="space-y-3 text-sm text-emerald-50">
                        <li class="flex items-start gap-2.5">
                            <span class="text-amber-400 font-bold">✓</span>
                            <div><strong>Pasti Travelnya Berizin:</strong> Izin resmi PPIU Kemenag RI No. U.421</div>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-amber-400 font-bold">✓</span>
                            <div><strong>Pasti Jadwalnya:</strong> Tanggal keberangkatan fixed &amp; terjadwal pasti</div>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-amber-400 font-bold">✓</span>
                            <div><strong>Pasti Terbangnya:</strong> Menggunakan maskapai ternama direct flight</div>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-amber-400 font-bold">✓</span>
                            <div><strong>Pasti Hotelnya:</strong> Akomodasi terkonfirmasi bintang 4 &amp; 5 dekat masjid</div>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-amber-400 font-bold">✓</span>
                            <div><strong>Pasti Visanya:</strong> Proses visa resmi langsung via Kedutaan Arab Saudi</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 3 Keunggulan Utama -->
    <section class="py-12 bg-white border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-emerald-700 font-bold text-xs uppercase tracking-wider">Mengapa Memilih Kami</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-1">Keunggulan Rahmah Travel</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-6 rounded-xl border border-gray-200 bg-gray-50 hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl font-bold mb-4">
                        🕋
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Hotel Dekat Pelataran</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Akomodasi hotel bintang 4 &amp; 5 hanya selangkah dari pelataran Masjidil Haram dan Masjid Nabawi, memudahkan ibadah bagi lansia maupun keluarga.
                    </p>
                </div>

                <div class="p-6 rounded-xl border border-gray-200 bg-gray-50 hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl font-bold mb-4">
                        📖
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Bimbingan Sesuai Sunnah</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Didampingi Asatidz dan Muthawwif alumni universitas terkemuka di Madinah dan Makkah yang sabar, membimbing tata cara ibadah sesuai tuntunan Rasulullah ﷺ.
                    </p>
                </div>

                <div class="p-6 rounded-xl border border-gray-200 bg-gray-50 hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl font-bold mb-4">
                        ✈️
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Penerbangan Langsung (Direct)</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Penerbangan langsung Jakarta - Madinah / Jeddah menggunakan Saudia Airlines atau Garuda Indonesia tanpa lelah transit berjam-jam.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Paket Populer (Cuplikan Dari Database) -->
    <section class="py-14 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">
                <div>
                    <span class="text-emerald-700 font-bold text-xs uppercase tracking-wider">Katalog Unggulan</span>
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-1">Paket Umroh Pilihan Jamaah</h2>
                    <p class="text-sm text-gray-600 mt-1">Berikut beberapa paket yang paling banyak diminati dari total 10 paket kami.</p>
                </div>
                <a href="{{ route('packages.index') }}"
                   class="inline-flex items-center gap-1.5 text-sm font-semibold text-emerald-700 hover:text-emerald-800">
                    <span>Lihat Semua 10 Paket</span>
                    <span>&rarr;</span>
                </a>
            </div>

            <!-- Card Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($featuredPackages as $package)
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden flex flex-col hover:shadow-md transition">
                        <!-- Gambar Paket -->
                        <div class="relative h-48 bg-gray-200 overflow-hidden">
                            <img src="{{ asset($package->image) }}" alt="{{ $package->name }}" class="w-full h-full object-cover">
                            <span class="absolute top-3 left-3 bg-amber-500 text-gray-900 text-xs font-bold px-2.5 py-1 rounded shadow">
                                {{ $package->category }}
                            </span>
                            <span class="absolute top-3 right-3 bg-emerald-900/80 text-white text-xs font-semibold px-2.5 py-1 rounded backdrop-blur-sm">
                                {{ $package->duration }}
                            </span>
                        </div>

                        <!-- Info Paket -->
                        <div class="p-5 flex-grow flex flex-col justify-between">
                            <div>
                                <h3 class="font-bold text-gray-900 text-base mb-2 line-clamp-2">
                                    {{ $package->name }}
                                </h3>
                                <div class="space-y-1.5 text-xs text-gray-600 mb-4">
                                    <div class="flex items-center gap-1.5">
                                        <span>✈️</span>
                                        <span class="truncate">{{ $package->airline }}</span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span>🏨</span>
                                        <span class="truncate">{{ $package->hotel_makkah }}</span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span>📅</span>
                                        <span>Keberangkatan: {{ $package->departure_date }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                                <div>
                                    <span class="text-[11px] text-gray-500 block">Mulai dari</span>
                                    <span class="text-base font-extrabold text-emerald-700">{{ $package->formatted_price }}</span>
                                </div>
                                <a href="{{ route('packages.show', $package) }}"
                                   class="text-xs font-semibold text-emerald-700 hover:text-white hover:bg-emerald-700 border border-emerald-600 px-3 py-1.5 rounded transition">
                                    Detail Paket
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-10">
                <a href="{{ route('packages.index') }}"
                   class="inline-block bg-emerald-700 hover:bg-emerald-800 text-white font-semibold text-sm px-8 py-3 rounded-lg shadow transition">
                    Buka Menu Paket Umroh (Seluruh 10 Data) &rarr;
                </a>
            </div>
        </div>
    </section>

    <!-- Banner Konsultasi Gratis -->
    <section class="py-12 bg-emerald-800 text-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 text-center">
            <h2 class="text-2xl sm:text-3xl font-bold mb-3">Butuh Bantuan Memilih Paket Umroh?</h2>
            <p class="text-emerald-100 text-sm max-w-xl mx-auto mb-6">
                Tim konsultan ibadah Rahmah Travel siap melayani dan menjelaskan rincian fasilitas hotel, maskapai, serta kemudahan pendaftaran untuk Anda dan keluarga.
            </p>
            <div class="flex justify-center gap-4">
                <a href="{{ route('contact') }}" class="bg-white text-emerald-800 hover:bg-gray-100 text-sm font-bold px-6 py-2.5 rounded-lg transition shadow">
                    Hubungi Customer Service
                </a>
                <a href="https://wa.me/6281234567890?text=Assalamualaikum,%20mohon%20info%20paket%20umroh%20Rahmah%20Travel"
                   target="_blank"
                   class="bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold px-6 py-2.5 rounded-lg border border-emerald-400 transition shadow">
                    Chat WhatsApp Resmi
                </a>
            </div>
        </div>
    </section>
@endsection
