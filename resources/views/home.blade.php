@extends('layouts.app')

@section('title', 'Beranda - Rahmah Travel | PT Rahmah Group Internasional')

@section('content')
    <!-- Banner Sambutan Sederhana (Jumbotron) -->
    <div class="bg-blue-50 border border-blue-200 rounded-lg p-6 sm:p-8 mb-8 text-center">
        <h1 class="text-2xl sm:text-3xl font-bold text-blue-900 mb-2">
            Selamat Datang di Website Resmi Rahmah Travel
        </h1>
        <p class="text-sm text-gray-700 max-w-2xl mx-auto mb-6">
            Biro perjalanan umroh terpercaya di bawah naungan <strong>PT Rahmah Group Internasional</strong>. Kami menyediakan berbagai pilihan paket ibadah umroh resmi dengan fasilitas hotel nyaman dan bimbingan ibadah berpengalaman.
        </p>
        <div class="flex justify-center gap-3">
            <a href="{{ route('packages.index') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm px-5 py-2.5 rounded shadow-sm">
                Lihat Daftar Paket Umroh &rarr;
            </a>
            <a href="{{ route('about') }}"
               class="bg-white hover:bg-gray-50 text-blue-700 border border-blue-400 font-medium text-sm px-5 py-2.5 rounded shadow-sm">
                Tentang Kami
            </a>
        </div>
    </div>

    <!-- Informasi 3 Keunggulan Kami -->
    <div class="mb-10">
        <h2 class="text-xl font-bold text-gray-800 mb-4 border-b pb-2">
            Kenapa Memilih Rahmah Travel?
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white border border-gray-300 p-4 rounded shadow-sm">
                <div class="text-blue-600 font-bold text-lg mb-1">1. Izin Resmi Kemenag</div>
                <p class="text-xs text-gray-600 leading-relaxed">
                    Terdaftar resmi sebagai Penyelenggara Perjalanan Ibadah Umroh (PPIU) No: 16112300553370003 Kemenag RI.
                </p>
            </div>

            <div class="bg-white border border-gray-300 p-4 rounded shadow-sm">
                <div class="text-blue-600 font-bold text-lg mb-1">2. Hotel &amp; Maskapai Jelas</div>
                <p class="text-xs text-gray-600 leading-relaxed">
                    Bekerja sama dengan maskapai terpercaya seperti Qatar Airways, Oman Air, &amp; IndiGo serta hotel berbintang dekat masjid.
                </p>
            </div>

            <div class="bg-white border border-gray-300 p-4 rounded shadow-sm">
                <div class="text-blue-600 font-bold text-lg mb-1">3. Fasilitas &amp; Bonus Lengkap</div>
                <p class="text-xs text-gray-600 leading-relaxed">
                    Termasuk air zamzam 5 liter, oleh-oleh Al Baik, perlengkapan umroh komplit, dan muthawwif pembimbing ibadah.
                </p>
            </div>
        </div>
    </div>

    <!-- Cuplikan Beberapa Paket Pilihan -->
    <div>
        <div class="flex justify-between items-center mb-4 border-b pb-2">
            <h2 class="text-xl font-bold text-gray-800">
                Paket Umroh Pilihan
            </h2>
            <a href="{{ route('packages.index') }}" class="text-blue-600 hover:underline text-sm font-medium">
                Lihat Semua Paket &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($featuredPackages as $pkg)
                <div class="bg-white border border-gray-300 rounded shadow-sm overflow-hidden flex flex-col">
                    <!-- Foto Flyer Asli -->
                    <div class="bg-gray-100 p-2 border-b flex items-center justify-center">
                        <img src="{{ asset($pkg->image) }}" alt="{{ $pkg->name }}" class="h-64 object-contain">
                    </div>

                    <div class="p-4 flex-grow flex flex-col justify-between">
                        <div>
                            <span class="inline-block bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-0.5 rounded mb-2">
                                {{ $pkg->category }} &bull; {{ $pkg->duration }}
                            </span>
                            <h3 class="font-bold text-gray-900 text-base mb-1">
                                {{ $pkg->name }}
                            </h3>
                            <p class="text-red-600 font-bold text-lg mb-2">
                                {{ $pkg->formatted_price }}
                            </p>
                            <p class="text-xs text-gray-600 mb-3 line-clamp-2">
                                {{ $pkg->description }}
                            </p>
                        </div>

                        <div class="pt-3 border-t">
                            <a href="{{ route('packages.show', $pkg) }}"
                               class="block text-center bg-blue-600 hover:bg-blue-700 text-white font-medium text-xs py-2 rounded">
                                Lihat Detail Paket
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
