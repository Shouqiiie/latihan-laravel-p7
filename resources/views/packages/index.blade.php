@extends('layouts.app')

@section('title', 'Daftar Paket Umroh - Rahmah Travel | PT Rahmah Group Internasional')

@section('content')
    <!-- Header Halaman -->
    <div class="mb-6 border-b pb-3 flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Daftar Paket Umroh</h1>
            <p class="text-sm text-gray-600">Pilihan paket perjalanan umroh dari Rahmah Travel (PT Rahmah Group Internasional).</p>
        </div>
        <div class="text-xs bg-blue-50 border border-blue-200 text-blue-800 p-2 rounded">
            Total Data: <strong>{{ $packages->count() }} Paket Tersedia</strong>
        </div>
    </div>

    <!-- Filter & Pencarian Sederhana -->
    <div class="bg-white border border-gray-300 p-4 rounded shadow-sm mb-6">
        <form method="GET" action="{{ route('packages.index') }}" class="flex flex-col md:flex-row gap-3">
            <div class="flex-grow">
                <input type="text"
                       name="search"
                       value="{{ request('search') }}"
                       placeholder="Cari nama paket, maskapai, atau hotel..."
                       class="w-full text-sm border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>

            <div>
                <select name="category" class="w-full text-sm border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
                    <option value="">-- Semua Kategori --</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>
                            {{ $cat }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded">
                    Cari
                </button>
                @if (request()->hasAny(['search', 'category']))
                    <a href="{{ route('packages.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 text-sm font-medium px-3 py-2 rounded">
                        Reset
                    </a>
                @endif
            </div>
        </form>
    </div>

    <!-- Grid Card Data Paket (10 Data dengan Gambar Asli) -->
    @if ($packages->isEmpty())
        <div class="bg-white border border-gray-300 p-8 rounded text-center text-gray-500">
            Data paket umroh tidak ditemukan. Silakan gunakan kata kunci pencarian yang lain.
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($packages as $pkg)
                <div class="bg-white border border-gray-300 rounded shadow-sm overflow-hidden flex flex-col">
                    <!-- Aset Gambar Asli Flyer -->
                    <div class="bg-gray-100 p-2 border-b flex items-center justify-center">
                        <img src="{{ asset($pkg->image) }}" alt="{{ $pkg->name }}" class="h-64 object-contain">
                    </div>

                    <!-- Informasi Paket (Memenuhi Minimal 6 Field Kustom) -->
                    <div class="p-4 flex-grow flex flex-col justify-between">
                        <div>
                            <!-- Kategori & Durasi -->
                            <div class="flex justify-between items-center mb-2">
                                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-0.5 rounded">
                                    {{ $pkg->category }}
                                </span>
                                <span class="text-xs text-gray-500 font-medium">
                                    ⏱️ {{ $pkg->duration }}
                                </span>
                            </div>

                            <!-- Nama Paket -->
                            <h2 class="font-bold text-gray-900 text-base mb-2">
                                {{ $pkg->name }}
                            </h2>

                            <!-- Harga Paket (Format Rupiah) -->
                            <div class="text-red-600 font-bold text-xl mb-3">
                                {{ $pkg->formatted_price }}
                                <span class="text-xs text-gray-500 font-normal">/ Quad</span>
                            </div>

                            <!-- Rincian Field Data -->
                            <div class="text-xs text-gray-700 space-y-1.5 mb-3 bg-gray-50 p-3 rounded border border-gray-200">
                                <div><strong>✈️ Maskapai:</strong> {{ $pkg->airline }}</div>
                                <div><strong>🏨 Makkah:</strong> {{ $pkg->hotel_makkah }}</div>
                                <div><strong>🕌 Madinah:</strong> {{ $pkg->hotel_madinah }}</div>
                                <div><strong>📅 Keberangkatan:</strong> {{ $pkg->departure_date }}</div>
                                <div><strong>👥 Sisa Kuota:</strong> {{ $pkg->quota }} Kursi</div>
                            </div>

                            <!-- Deskripsi Singkat -->
                            <p class="text-xs text-gray-600 line-clamp-2 mb-4 leading-relaxed">
                                {{ $pkg->description }}
                            </p>
                        </div>

                        <!-- Tombol Detail -->
                        <div class="pt-3 border-t">
                            <a href="{{ route('packages.show', $pkg) }}"
                               class="block w-full text-center bg-blue-600 hover:bg-blue-700 text-white font-medium text-xs py-2 rounded">
                                Lihat Rincian Detail Paket &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
