<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rahmah Travel - PT Rahmah Group Internasional')</title>

    <!-- Tailwind CSS via Vite / NPM (Bukan CDN) -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    @endif
</head>
<body class="bg-gray-100 text-gray-800 font-sans min-h-screen flex flex-col">

    <!-- Navbar Sederhana (4 Menu Wajib) -->
    <nav class="bg-blue-700 text-white shadow">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo & Nama Travel -->
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <span class="font-bold text-xl tracking-wide">Rahmah Travel</span>
                    <span class="text-xs bg-blue-800 text-blue-200 px-2 py-0.5 rounded hidden sm:inline">
                        PT Rahmah Group Internasional
                    </span>
                </a>

                <!-- 4 Menu Navigasi (Desktop) -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="{{ route('home') }}"
                       class="px-3 py-2 rounded text-sm font-medium {{ request()->routeIs('home') ? 'bg-blue-900 text-white' : 'hover:bg-blue-800 text-blue-100' }}">
                        Beranda
                    </a>
                    <a href="{{ route('about') }}"
                       class="px-3 py-2 rounded text-sm font-medium {{ request()->routeIs('about') ? 'bg-blue-900 text-white' : 'hover:bg-blue-800 text-blue-100' }}">
                        Tentang Kami
                    </a>
                    <a href="{{ route('packages.index') }}"
                       class="px-3 py-2 rounded text-sm font-medium {{ request()->routeIs('packages.*') ? 'bg-blue-900 text-white' : 'hover:bg-blue-800 text-blue-100' }}">
                        Paket Umroh
                    </a>
                    <a href="{{ route('contact') }}"
                       class="px-3 py-2 rounded text-sm font-medium {{ request()->routeIs('contact') ? 'bg-blue-900 text-white' : 'hover:bg-blue-800 text-blue-100' }}">
                        Kontak
                    </a>
                </div>

                <!-- Tombol Menu Mobile -->
                <div class="md:hidden">
                    <button id="nav-toggle" type="button" class="text-white hover:text-gray-200 p-2">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menu Mobile Dropdown -->
        <div id="nav-menu" class="hidden md:hidden bg-blue-800 px-4 pt-2 pb-3 space-y-1">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded text-sm font-medium {{ request()->routeIs('home') ? 'bg-blue-900 text-white' : 'text-blue-100 hover:bg-blue-700' }}">
                Beranda
            </a>
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded text-sm font-medium {{ request()->routeIs('about') ? 'bg-blue-900 text-white' : 'text-blue-100 hover:bg-blue-700' }}">
                Tentang Kami
            </a>
            <a href="{{ route('packages.index') }}" class="block px-3 py-2 rounded text-sm font-medium {{ request()->routeIs('packages.*') ? 'bg-blue-900 text-white' : 'text-blue-100 hover:bg-blue-700' }}">
                Paket Umroh
            </a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded text-sm font-medium {{ request()->routeIs('contact') ? 'bg-blue-900 text-white' : 'text-blue-100 hover:bg-blue-700' }}">
                Kontak
            </a>
        </div>
    </nav>

    <!-- Konten Halaman -->
    <main class="flex-grow max-w-6xl w-full mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer Sederhana -->
    <footer class="bg-gray-800 text-gray-300 text-sm mt-12">
        <div class="max-w-6xl mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div>
                    <h3 class="font-bold text-white text-base mb-2">Rahmah Travel</h3>
                    <p class="text-xs text-gray-400 leading-relaxed mb-2">
                        Biro perjalanan umroh resmi di bawah naungan <strong>PT Rahmah Group Internasional</strong>.
                    </p>
                    <p class="text-xs text-blue-300">
                        Izin SK PPIU No: 16112300553370003 Kemenag RI
                    </p>
                </div>

                <div>
                    <h3 class="font-bold text-white text-base mb-2">Navigasi Menu</h3>
                    <ul class="text-xs space-y-1 text-gray-300">
                        <li><a href="{{ route('home') }}" class="hover:underline">Beranda</a></li>
                        <li><a href="{{ route('about') }}" class="hover:underline">Tentang Kami</a></li>
                        <li><a href="{{ route('packages.index') }}" class="hover:underline">Paket Umroh</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:underline">Kontak</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-bold text-white text-base mb-2">Kontak Kami</h3>
                    <p class="text-xs text-gray-300 mb-1">Jl. TB Simatupang No. 88, Jakarta Selatan</p>
                    <p class="text-xs text-gray-300 mb-1">Telepon: (021) 7890-1234</p>
                    <p class="text-xs text-gray-300">WhatsApp: 0812-3456-7890</p>
                </div>
            </div>

            <div class="border-t border-gray-700 pt-4 text-center text-xs text-gray-400">
                <p>&copy; {{ date('Y') }} Rahmah Travel - PT Rahmah Group Internasional. Tugas Praktikum Rekayasa Web.</p>
            </div>
        </div>
    </footer>

    <!-- Script toggle menu sederhana -->
    <script>
        document.getElementById('nav-toggle')?.addEventListener('click', function() {
            var menu = document.getElementById('nav-menu');
            if (menu) {
                menu.classList.toggle('hidden');
            }
        });
    </script>
</body>
</html>
