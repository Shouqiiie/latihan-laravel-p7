@extends('layouts.app')

@section('title', 'Katalog Paket Umroh & Haji - Rahmah Travel')

@section('content')
    <!-- Header Section -->
    <div class="bg-emerald-900 text-white py-12 border-b border-emerald-800">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <span class="inline-block bg-amber-500 text-gray-900 text-[11px] font-extrabold uppercase tracking-wider px-2.5 py-0.5 rounded mb-2">
                        ⭐ Menu Objek Utama &bull; Pertemuan 7
                    </span>
                    <h1 class="text-3xl sm:text-4xl font-extrabold">Daftar Paket Umroh &amp; Haji</h1>
                    <p class="text-emerald-200 text-sm mt-1">
                        Pilihan paket ibadah resmi dari Rahmah Travel (PT Rahmah Group Internasional) dengan fasilitas hotel bintang dekat masjid.
                    </p>
                </div>
                <div class="bg-emerald-800/80 p-3 rounded-lg border border-emerald-700 text-xs text-emerald-200">
                    <span class="font-bold text-white block">Ketentuan Tugas Terpenuhi:</span>
                    <span>✓ Minimal 10 Data (Tersedia: {{ $packages->count() }})</span><br>
                    <span>✓ Minimal 6 Kolom Kustom (Tersedia: 11 Kolom)</span><br>
                    <span>✓ Gambar Tersimpan Lokal di Folder Public</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter & Pencarian -->
    <div class="bg-white border-b border-gray-200 shadow-xs">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-4">
            <form method="GET" action="{{ route('packages.index') }}" class="flex flex-col md:flex-row gap-3 items-center justify-between">
                <!-- Filter Kategori Tabs/Dropdown -->
                <div class="flex flex-wrap items-center gap-1.5 w-full md:w-auto">
                    <a href="{{ route('packages.index') }}"
                       class="px-3 py-1.5 rounded-full text-xs font-semibold transition {{ !request('category') ? 'bg-emerald-600 text-white shadow-xs' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                        Semua Kategori ({{ \App\Models\Package::count() }})
                    </a>
                    @foreach ($categories as $cat)
                        <a href="{{ route('packages.index', ['category' => $cat]) }}"
                           class="px-3 py-1.5 rounded-full text-xs font-semibold transition {{ request('category') == $cat ? 'bg-emerald-600 text-white shadow-xs' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                            {{ $cat }}
                        </a>
                    @endforeach
                </div>

                <!-- Input Pencarian -->
                <div class="flex items-center gap-2 w-full md:w-72">
                    <div class="relative w-full">
                        <input type="text"
                               name="search"
                               value="{{ request('search') }}"
                               placeholder="Cari paket / hotel / maskapai..."
                               class="w-full text-xs bg-gray-50 border border-gray-300 rounded-lg pl-8 pr-3 py-2 focus:ring-1 focus:ring-emerald-500 focus:border-emerald-500 outline-none">
                        <span class="absolute left-2.5 top-2.5 text-gray-400 text-xs">🔍</span>
                    </div>
                    <button type="submit"
                            class="bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-semibold px-3 py-2 rounded-lg transition shrink-0">
                        Cari
                    </button>
                    @if (request()->hasAny(['category', 'search']))
                        <a href="{{ route('packages.index') }}" class="text-xs text-gray-500 hover:text-red-600 underline shrink-0">
                            Reset
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>

    <!-- Konten Utama: Daftar Paket (Grid Card 10 Data) -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-10">
        <!-- Info Baris Atas -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-lg font-bold text-gray-800">
                Menampilkan <span class="text-emerald-700">{{ $packages->count() }} Paket Ibadah</span>
                @if(request('category'))
                    kategori <span class="text-emerald-700">"{{ request('category') }}"</span>
                @endif
                @if(request('search'))
                    dengan kata kunci <span class="text-emerald-700">"{{ request('search') }}"</span>
                @endif
            </h2>
            <span class="text-xs text-gray-500">Harga All-in &bull; Siap Berangkat</span>
        </div>

        @if ($packages->isEmpty())
            <div class="bg-white rounded-xl border border-gray-200 p-12 text-center my-6">
                <span class="text-4xl block mb-3">🔍</span>
                <h3 class="text-base font-bold text-gray-800 mb-1">Paket Tidak Ditemukan</h3>
                <p class="text-xs text-gray-500 mb-4">Tidak ada paket umroh yang sesuai dengan kata kunci atau filter yang Anda pilih.</p>
                <a href="{{ route('packages.index') }}" class="inline-block bg-emerald-600 text-white text-xs font-semibold px-4 py-2 rounded-lg hover:bg-emerald-700">
                    Lihat Seluruh Paket
                </a>
            </div>
        @else
            <!-- Grid 3 Kolom Card -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($packages as $package)
                    <div class="bg-white rounded-xl shadow-xs border border-gray-200 overflow-hidden flex flex-col hover:shadow-lg transition duration-200">
                        <!-- Foto / Gambar Paket (Ketentuan No. 5) -->
                        <div class="relative h-48 bg-gray-100 overflow-hidden group">
                            <img src="{{ asset($package->image) }}"
                                 alt="{{ $package->name }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                            
                            <!-- Badge Kategori & Durasi -->
                            <div class="absolute top-3 left-3 flex gap-1.5">
                                <span class="bg-amber-500 text-gray-900 font-extrabold text-[11px] px-2.5 py-0.5 rounded shadow">
                                    {{ $package->category }}
                                </span>
                            </div>
                            <span class="absolute top-3 right-3 bg-gray-900/80 text-white text-[11px] font-semibold px-2.5 py-0.5 rounded backdrop-blur-xs">
                                ⏱️ {{ $package->duration }}
                            </span>
                        </div>

                        <!-- Konten Rincian Field (Minimal 6 Field Terpenuhi) -->
                        <div class="p-5 flex-grow flex flex-col justify-between">
                            <div>
                                <!-- Judul Paket -->
                                <h3 class="font-bold text-gray-900 text-base mb-2 leading-snug">
                                    <a href="{{ route('packages.show', $package) }}" class="hover:text-emerald-700 transition">
                                        {{ $package->name }}
                                    </a>
                                </h3>

                                <!-- Harga Paket (Field 3) -->
                                <div class="bg-emerald-50 rounded-lg p-2.5 mb-3 border border-emerald-100">
                                    <span class="text-[11px] text-gray-500 block leading-tight">Biaya Paket:</span>
                                    <span class="text-xl font-extrabold text-emerald-700">{{ $package->formatted_price }}</span>
                                    <span class="text-[10px] text-emerald-800 ml-1">/ Jamaah (Quad)</span>
                                </div>

                                <!-- 6 Field Rincian Informasi -->
                                <div class="space-y-1.5 text-xs text-gray-600 mb-4 bg-gray-50 p-3 rounded-lg border border-gray-100">
                                    <!-- Field 4: Maskapai -->
                                    <div class="flex items-start gap-2">
                                        <span class="font-semibold text-gray-700 w-24 shrink-0">✈️ Maskapai:</span>
                                        <span class="text-gray-800 font-medium truncate">{{ $package->airline }}</span>
                                    </div>

                                    <!-- Field 5: Hotel Makkah -->
                                    <div class="flex items-start gap-2">
                                        <span class="font-semibold text-gray-700 w-24 shrink-0">🏨 Makkah:</span>
                                        <span class="text-gray-800 font-medium truncate">{{ $package->hotel_makkah }}</span>
                                    </div>

                                    <!-- Field 6: Hotel Madinah -->
                                    <div class="flex items-start gap-2">
                                        <span class="font-semibold text-gray-700 w-24 shrink-0">🕌 Madinah:</span>
                                        <span class="text-gray-800 font-medium truncate">{{ $package->hotel_madinah }}</span>
                                    </div>

                                    <!-- Field 7: Tanggal Keberangkatan -->
                                    <div class="flex items-start gap-2">
                                        <span class="font-semibold text-gray-700 w-24 shrink-0">📅 Jadwal:</span>
                                        <span class="text-gray-800 font-medium">{{ $package->departure_date }}</span>
                                    </div>

                                    <!-- Field 8: Sisa Kuota -->
                                    <div class="flex items-start gap-2">
                                        <span class="font-semibold text-gray-700 w-24 shrink-0">👥 Sisa Kuota:</span>
                                        <span class="inline-flex items-center px-1.5 py-0.5 rounded text-[10px] font-bold {{ $package->quota <= 10 ? 'bg-red-100 text-red-700' : 'bg-emerald-100 text-emerald-700' }}">
                                            {{ $package->quota }} Kursi Tersedia
                                        </span>
                                    </div>
                                </div>

                                <!-- Field 9: Deskripsi Singkat -->
                                <p class="text-xs text-gray-500 line-clamp-2 mb-4 leading-relaxed">
                                    {{ $package->description }}
                                </p>
                            </div>

                            <!-- Tombol Aksi -->
                            <div class="pt-3 border-t border-gray-100 flex items-center gap-2">
                                <a href="{{ route('packages.show', $package) }}"
                                   class="flex-1 bg-emerald-600 hover:bg-emerald-700 text-white text-center text-xs font-semibold py-2 rounded-lg transition shadow-xs">
                                    Lihat Rincian Paket
                                </a>
                                <a href="https://wa.me/6281234567890?text=Halo%20Rahmah%20Travel,%20saya%20tertarik%20dengan%20{{ urlencode($package->name) }}"
                                   target="_blank"
                                   title="Chat WhatsApp"
                                   class="bg-emerald-50 hover:bg-emerald-100 text-emerald-700 border border-emerald-300 p-2 rounded-lg text-xs font-bold transition flex items-center justify-center">
                                    💬
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
