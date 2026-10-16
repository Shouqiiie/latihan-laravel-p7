<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rahmah Travel - Biro Perjalanan Umroh & Haji Khusus Resmi')</title>
    <meta name="description" content="Rahmah Travel unit usaha PT Rahmah Group Internasional. Melayani ibadah umroh dan haji plus dengan fasilitas hotel bintang lima dan bimbingan sesuai sunnah.">

    <!-- Tailwind CSS via NPM / Vite (Bukan CDN) -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    @endif
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased flex flex-col min-h-screen">

    <!-- Topbar Info Kontak -->
    <div class="bg-emerald-800 text-emerald-100 text-xs py-2 px-4 border-b border-emerald-700">
        <div class="max-w-6xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-3">
                <span class="font-semibold text-emerald-300">PT RAHMAH GROUP INTERNASIONAL</span>
                <span class="hidden md:inline">&bull;</span>
                <span class="hidden md:inline">Izin Resmi PPIU No. U.421 Kemenag RI</span>
            </div>
            <div class="flex items-center gap-4">
                <span>📞 (021) 7890-1234</span>
                <span>💬 WhatsApp: 0812-3456-7890</span>
                <span class="hidden sm:inline">✉️ info@rahmahtravel.com</span>
            </div>
        </div>
    </div>

    <!-- Header & Navigasi 4 Menu Utama -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center h-20">
                <!-- Brand / Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-lg bg-emerald-600 flex items-center justify-center text-white font-bold text-xl shadow">
                        RT
                    </div>
                    <div>
                        <span class="text-xl font-bold text-emerald-800 block leading-tight">Rahmah Travel</span>
                        <span class="text-xs text-gray-500 font-medium">PT Rahmah Group Internasional</span>
                    </div>
                </a>

                <!-- Desktop Nav (4 Menu Utama) -->
                <nav class="hidden md:flex items-center space-x-1">
                    <!-- Menu 1: Beranda -->
                    <a href="{{ route('home') }}"
                       class="px-4 py-2 rounded-md text-sm font-semibold transition {{ request()->routeIs('home') ? 'bg-emerald-50 text-emerald-700 border-b-2 border-emerald-600' : 'text-gray-600 hover:text-emerald-600 hover:bg-gray-50' }}">
                        Beranda
                    </a>

                    <!-- Menu 2: Tentang Kami -->
                    <a href="{{ route('about') }}"
                       class="px-4 py-2 rounded-md text-sm font-semibold transition {{ request()->routeIs('about') ? 'bg-emerald-50 text-emerald-700 border-b-2 border-emerald-600' : 'text-gray-600 hover:text-emerald-600 hover:bg-gray-50' }}">
                        Tentang Kami
                    </a>

                    <!-- Menu 3: Paket Umroh (Output Objek Utama) -->
                    <a href="{{ route('packages.index') }}"
                       class="px-4 py-2 rounded-md text-sm font-semibold transition flex items-center gap-1.5 {{ request()->routeIs('packages.*') ? 'bg-emerald-50 text-emerald-700 border-b-2 border-emerald-600' : 'text-gray-600 hover:text-emerald-600 hover:bg-gray-50' }}">
                        <span>Paket Umroh</span>
                        <span class="bg-amber-100 text-amber-800 text-[10px] font-bold px-1.5 py-0.5 rounded-full">10 Pilihan</span>
                    </a>

                    <!-- Menu 4: Kontak -->
                    <a href="{{ route('contact') }}"
                       class="px-4 py-2 rounded-md text-sm font-semibold transition {{ request()->routeIs('contact') ? 'bg-emerald-50 text-emerald-700 border-b-2 border-emerald-600' : 'text-gray-600 hover:text-emerald-600 hover:bg-gray-50' }}">
                        Kontak
                    </a>

                    <!-- Tombol Konsultasi -->
                    <a href="https://wa.me/6281234567890?text=Halo%20Rahmah%20Travel,%20saya%20ingin%20konsultasi%20paket%20umroh"
                       target="_blank"
                       class="ml-4 inline-flex items-center justify-center px-4 py-2 text-sm font-medium rounded-md text-white bg-emerald-600 hover:bg-emerald-700 shadow-sm transition">
                        Daftar / Tanya
                    </a>
                </nav>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" type="button" class="text-gray-600 hover:text-emerald-600 p-2 rounded-md focus:outline-none" aria-label="Menu">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown (4 Menu) -->
        <div id="mobile-menu" class="hidden md:hidden border-t border-gray-100 bg-white px-4 pt-2 pb-4 space-y-1">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'bg-emerald-50 text-emerald-700' : 'text-gray-700 hover:bg-gray-50' }}">
                Beranda
            </a>
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('about') ? 'bg-emerald-50 text-emerald-700' : 'text-gray-700 hover:bg-gray-50' }}">
                Tentang Kami
            </a>
            <a href="{{ route('packages.index') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('packages.*') ? 'bg-emerald-50 text-emerald-700' : 'text-gray-700 hover:bg-gray-50' }}">
                Paket Umroh (10 Pilihan)
            </a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('contact') ? 'bg-emerald-50 text-emerald-700' : 'text-gray-700 hover:bg-gray-50' }}">
                Kontak
            </a>
        </div>
    </header>

    <!-- Konten Utama Halaman -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 text-sm mt-16 border-t border-gray-800">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Kolom 1: Profil Singkat -->
                <div class="md:col-span-1">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-8 h-8 rounded bg-emerald-600 flex items-center justify-center text-white font-bold text-sm">
                            RT
                        </div>
                        <span class="text-lg font-bold text-white">Rahmah Travel</span>
                    </div>
                    <p class="text-xs text-gray-400 leading-relaxed mb-4">
                        Penyelenggara Perjalanan Ibadah Umroh (PPIU) dan Haji Khusus terpercaya di bawah naungan <strong>PT Rahmah Group Internasional</strong>. Melayani dengan amanah, profesional, dan sesuai sunnah.
                    </p>
                    <div class="text-xs text-emerald-400 font-semibold">
                        SK Kemenag RI PPIU No. U.421
                    </div>
                </div>

                <!-- Kolom 2: 4 Menu Navigasi -->
                <div>
                    <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-3">Menu Utama</h3>
                    <ul class="space-y-2 text-xs">
                        <li><a href="{{ route('home') }}" class="hover:text-emerald-400 transition">Beranda</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-emerald-400 transition">Tentang Kami</a></li>
                        <li><a href="{{ route('packages.index') }}" class="hover:text-emerald-400 transition">Paket Umroh & Haji</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-emerald-400 transition">Kontak Kami</a></li>
                    </ul>
                </div>

                <!-- Kolom 3: Layanan Kami -->
                <div>
                    <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-3">Program Unggulan</h3>
                    <ul class="space-y-2 text-xs text-gray-400">
                        <li>Umroh Reguler 9 & 12 Hari</li>
                        <li>Umroh VIP Bintang 5 Dekat Masjid</li>
                        <li>Umroh Plus Turki & Dubai</li>
                        <li>Umroh Ramadhan & Lailatul Qadr</li>
                        <li>Haji Plus & Furoda VVIP Resmi</li>
                    </ul>
                </div>

                <!-- Kolom 4: Alamat & Kontak -->
                <div>
                    <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-3">Kantor Pusat</h3>
                    <p class="text-xs text-gray-400 mb-2 leading-relaxed">
                        Gedung Rahmah Tower Lt. 5, Jl. TB Simatupang No. 88, Cilandak, Jakarta Selatan 12430.
                    </p>
                    <p class="text-xs text-gray-400 mb-1">
                        <strong>Telp:</strong> (021) 7890-1234
                    </p>
                    <p class="text-xs text-gray-400 mb-1">
                        <strong>WhatsApp:</strong> +62 812-3456-7890
                    </p>
                    <p class="text-xs text-gray-400">
                        <strong>Email:</strong> info@rahmahtravel.com
                    </p>
                </div>
            </div>

            <div class="mt-8 pt-6 border-t border-gray-800 flex flex-col sm:flex-row justify-between items-center text-xs text-gray-500 gap-2">
                <p>&copy; {{ date('Y') }} Rahmah Travel - PT Rahmah Group Internasional. All rights reserved.</p>
                <p>Tugas Praktikum Rekayasa Web - Pertemuan 7</p>
            </div>
        </div>
    </footer>

    <!-- Script toggle mobile menu sederhana -->
    <script>
        document.getElementById('mobile-menu-btn')?.addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            if (menu) {
                menu.classList.toggle('hidden');
            }
        });
    </script>
</body>
</html>
