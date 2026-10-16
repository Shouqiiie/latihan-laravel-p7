@extends('layouts.app')

@section('title', $package->name . ' - Rahmah Travel')

@section('content')
    <!-- Breadcrumb Sederhana -->
    <div class="text-xs text-gray-500 mb-4">
        <a href="{{ route('home') }}" class="text-blue-600 hover:underline">Beranda</a> &rsaquo;
        <a href="{{ route('packages.index') }}" class="text-blue-600 hover:underline">Paket Umroh</a> &rsaquo;
        <span class="text-gray-800 font-semibold">{{ $package->name }}</span>
    </div>

    <!-- Konten Detail -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-white border border-gray-300 p-6 rounded shadow-sm">
        <!-- Kolom Gambar Flyer Penuh -->
        <div class="bg-gray-50 p-3 rounded border border-gray-200 flex items-center justify-center">
            <img src="{{ asset($package->image) }}" alt="{{ $package->name }}" class="max-h-[600px] w-auto object-contain rounded">
        </div>

        <!-- Kolom Informasi Rincian Paket -->
        <div>
            <span class="inline-block bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-0.5 rounded mb-2">
                {{ $package->category }} &bull; {{ $package->duration }}
            </span>

            <h1 class="text-2xl font-bold text-gray-900 mb-2">
                {{ $package->name }}
            </h1>

            <div class="text-red-600 font-bold text-2xl mb-4">
                {{ $package->formatted_price }}
                <span class="text-xs text-gray-500 font-normal">/ Orang (Kamar Quad)</span>
            </div>

            <p class="text-sm text-gray-700 leading-relaxed mb-6">
                {{ $package->description }}
            </p>

            <!-- Tabel Rincian Data Lengkap -->
            <h2 class="text-base font-bold text-gray-800 mb-2 border-b pb-1">
                Rincian Informasi Paket
            </h2>
            <div class="overflow-x-auto mb-6">
                <table class="w-full text-xs text-left border border-gray-200">
                    <tbody class="divide-y divide-gray-200">
                        <tr class="bg-gray-50">
                            <td class="p-2.5 font-semibold w-1/3">Kategori Paket</td>
                            <td class="p-2.5">{{ $package->category }}</td>
                        </tr>
                        <tr>
                            <td class="p-2.5 font-semibold">Durasi</td>
                            <td class="p-2.5">{{ $package->duration }}</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="p-2.5 font-semibold">Maskapai Penerbangan</td>
                            <td class="p-2.5">{{ $package->airline }}</td>
                        </tr>
                        <tr>
                            <td class="p-2.5 font-semibold">Hotel Makkah</td>
                            <td class="p-2.5">{{ $package->hotel_makkah }}</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="p-2.5 font-semibold">Hotel Madinah</td>
                            <td class="p-2.5">{{ $package->hotel_madinah }}</td>
                        </tr>
                        <tr>
                            <td class="p-2.5 font-semibold">Jadwal Keberangkatan</td>
                            <td class="p-2.5">{{ $package->departure_date }}</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="p-2.5 font-semibold">Sisa Kuota Kursi</td>
                            <td class="p-2.5 font-bold text-blue-700">{{ $package->quota }} Jamaah</td>
                        </tr>
                        <tr>
                            <td class="p-2.5 font-semibold">Penyelenggara</td>
                            <td class="p-2.5">PT Rahmah Group Internasional (SK PPIU No: 16112300553370003)</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Tombol Aksi -->
            <div class="flex gap-3">
                <a href="https://wa.me/6281234567890?text=Halo%20Rahmah%20Travel,%20saya%20ingin%20tanya%20paket%20{{ urlencode($package->name) }}"
                   target="_blank"
                   class="bg-green-600 hover:bg-green-700 text-white font-medium text-xs px-4 py-2.5 rounded shadow-sm">
                    Tanya via WhatsApp
                </a>
                <a href="{{ route('packages.index') }}"
                   class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium text-xs px-4 py-2.5 rounded">
                    &larr; Kembali ke Daftar Paket
                </a>
            </div>
        </div>
    </div>
@endsection
