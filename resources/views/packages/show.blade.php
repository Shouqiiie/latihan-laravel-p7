@extends('layouts.app')

@section('title', $package->name . ' - Rahmah Travel')

@section('content')
    <!-- Breadcrumb & Header -->
    <div class="bg-gray-100 border-b border-gray-200 py-4">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <nav class="text-xs text-gray-500 flex items-center gap-2">
                <a href="{{ route('home') }}" class="hover:text-emerald-700">Beranda</a>
                <span>&rsaquo;</span>
                <a href="{{ route('packages.index') }}" class="hover:text-emerald-700">Paket Umroh</a>
                <span>&rsaquo;</span>
                <span class="text-gray-800 font-semibold truncate">{{ $package->name }}</span>
            </nav>
        </div>
    </div>

    <!-- Main Detail Content -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Kolom Kiri: Gambar & Detail Fasilitas -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Foto Paket -->
                <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm">
                    <div class="relative h-72 sm:h-96 bg-gray-200">
                        <img src="{{ asset($package->image) }}" alt="{{ $package->name }}" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4 flex gap-2">
                            <span class="bg-amber-500 text-gray-900 font-extrabold text-xs px-3 py-1 rounded shadow">
                                {{ $package->category }}
                            </span>
                            <span class="bg-emerald-900/90 text-white font-semibold text-xs px-3 py-1 rounded backdrop-blur-xs">
                                ⏱️ {{ $package->duration }}
                            </span>
                        </div>
                    </div>

                    <div class="p-6">
                        <h1 class="text-2xl sm:text-3xl font-extrabold text-gray-900 mb-3">
                            {{ $package->name }}
                        </h1>
                        <p class="text-sm text-gray-600 leading-relaxed mb-6">
                            {{ $package->description }}
                        </p>

                        <!-- Tabel Ringkasan Rincian (Semua Field Schema) -->
                        <h3 class="text-sm font-bold uppercase tracking-wider text-emerald-800 mb-3">
                            📋 Rincian Spesifikasi &amp; Fasilitas Paket
                        </h3>
                        <div class="overflow-x-auto">
                            <table class="w-full text-xs text-left text-gray-700 border border-gray-200 rounded-lg">
                                <tbody class="divide-y divide-gray-200">
                                    <tr class="bg-gray-50">
                                        <td class="px-4 py-3 font-semibold text-gray-900 w-1/3">Kategori Program</td>
                                        <td class="px-4 py-3 font-medium text-emerald-700">{{ $package->category }}</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 font-semibold text-gray-900">Durasi Perjalanan</td>
                                        <td class="px-4 py-3">{{ $package->duration }}</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="px-4 py-3 font-semibold text-gray-900">Maskapai Penerbangan</td>
                                        <td class="px-4 py-3 font-medium text-blue-800">{{ $package->airline }}</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 font-semibold text-gray-900">Hotel di Makkah</td>
                                        <td class="px-4 py-3 font-medium">{{ $package->hotel_makkah }}</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="px-4 py-3 font-semibold text-gray-900">Hotel di Madinah</td>
                                        <td class="px-4 py-3 font-medium">{{ $package->hotel_madinah }}</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 font-semibold text-gray-900">Tanggal Keberangkatan</td>
                                        <td class="px-4 py-3 font-medium">{{ $package->departure_date }}</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="px-4 py-3 font-semibold text-gray-900">Sisa Kuota Kursi</td>
                                        <td class="px-4 py-3 font-bold {{ $package->quota <= 10 ? 'text-red-600' : 'text-emerald-700' }}">
                                            {{ $package->quota }} Jamaah
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 font-semibold text-gray-900">Legalitas &amp; Izin</td>
                                        <td class="px-4 py-3">PPIU Kemenag RI No. U.421 (PT Rahmah Group Internasional)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Card Booking & Kontak -->
            <div class="space-y-6">
                <!-- Card Biaya Paket -->
                <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm sticky top-24">
                    <span class="text-xs text-gray-500 uppercase tracking-wider block mb-1">Total Biaya Paket (All-In):</span>
                    <div class="text-3xl font-extrabold text-emerald-700 mb-2">
                        {{ $package->formatted_price }}
                    </div>
                    <span class="text-xs text-emerald-800 bg-emerald-50 px-2 py-1 rounded inline-block font-medium mb-4">
                        ✓ Kamar Quad (4 Orang/Kamar)
                    </span>

                    <div class="border-t border-gray-100 pt-4 space-y-3 mb-6 text-xs text-gray-600">
                        <div class="flex items-center gap-2">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span>Tiket Pesawat PP Internasional</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span>Visa Umroh / Visa Haji Resmi</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span>Akomodasi Hotel Dekat Pelataran</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span>Makan 3x Sehari Menu Indonesia</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span>Muthawwif &amp; Tour Leader Pendamping</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span>Air Zamzam 5 Liter &amp; Perlengkapan</span>
                        </div>
                    </div>

                    <!-- Tombol Booking WhatsApp -->
                    <a href="https://wa.me/6281234567890?text=Assalamualaikum%20Rahmah%20Travel,%20saya%20ingin%20mendaftar%20atau%20tanya%20rincian%20paket%20{{ urlencode($package->name) }}"
                       target="_blank"
                       class="w-full block text-center bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 rounded-xl shadow transition text-sm mb-3">
                        💬 Pesan / Konsultasi via WhatsApp
                    </a>

                    <a href="{{ route('packages.index') }}"
                       class="w-full block text-center bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold py-2.5 rounded-xl transition text-xs">
                        &larr; Kembali ke Daftar Semua Paket
                    </a>
                </div>
            </div>
        </div>

        <!-- Rekomendasi Paket Lainnya -->
        @if ($otherPackages->isNotEmpty())
            <div class="mt-14 pt-8 border-t border-gray-200">
                <h3 class="text-xl font-bold text-gray-900 mb-6">Paket Pilihan Lainnya</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($otherPackages as $other)
                        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden shadow-xs hover:shadow-md transition p-4 flex flex-col justify-between">
                            <div>
                                <img src="{{ asset($other->image) }}" alt="{{ $other->name }}" class="h-32 w-full object-cover rounded-lg mb-3">
                                <span class="text-[10px] bg-amber-100 text-amber-800 font-bold px-2 py-0.5 rounded">
                                    {{ $other->category }} &bull; {{ $other->duration }}
                                </span>
                                <h4 class="font-bold text-sm text-gray-900 mt-2 mb-1 line-clamp-1">{{ $other->name }}</h4>
                                <div class="text-emerald-700 font-extrabold text-sm mb-2">{{ $other->formatted_price }}</div>
                            </div>
                            <a href="{{ route('packages.show', $other) }}" class="text-xs text-center text-emerald-700 font-semibold hover:underline block pt-2 border-t border-gray-100">
                                Rincian Paket &rarr;
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endsection
