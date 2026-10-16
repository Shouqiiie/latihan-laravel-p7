@extends('layouts.app')

@section('title', 'Tentang Kami - Profil PT Rahmah Group Internasional & Rahmah Travel')

@section('content')
    <!-- Banner Header Halaman -->
    <div class="bg-emerald-900 text-white py-12 border-b border-emerald-800">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <span class="text-xs uppercase tracking-wider text-amber-400 font-bold">Menu 2 &bull; Profil Perusahaan</span>
            <h1 class="text-3xl sm:text-4xl font-extrabold mt-1">Tentang Rahmah Travel</h1>
            <p class="text-emerald-200 text-sm mt-2 max-w-2xl">
                Mengenal lebih dekat Rahmah Travel, divisi perjalanan ibadah umroh dan haji khusus dari PT Rahmah Group Internasional.
            </p>
        </div>
    </div>

    <!-- Isi Konten Tentang Kami -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-12 space-y-12">
        <!-- Section Profil & Sejarah -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div>
                <span class="text-emerald-700 font-bold text-xs uppercase tracking-wider">Sejarah &amp; Dedikasi</span>
                <h2 class="text-2xl font-bold text-gray-900 mt-1 mb-4">Melayani Tamu Allah Sejak 2012</h2>
                <div class="space-y-3 text-sm text-gray-600 leading-relaxed">
                    <p>
                        <strong>PT Rahmah Group Internasional</strong> didirikan sebagai holding company yang bergerak di bidang pelayanan ummat internasional, mencakup biro perjalanan ibadah (Rahmah Travel), perhotelan di Timur Tengah, serta layanan katering haji &amp; umroh.
                    </p>
                    <p>
                        Melalui <strong>Rahmah Travel</strong>, kami berkomitmen menghadirkan perjalanan ibadah yang aman, nyaman, dan berpegang teguh pada tuntunan Al-Qur'an dan As-Sunnah. Hingga kini, kami telah memberangkatkan lebih dari 25.000 jamaah dari seluruh penjuru Indonesia.
                    </p>
                    <p>
                        Dengan izin resmi Penyelenggara Perjalanan Ibadah Umroh (PPIU) No. U.421 dari Kementerian Agama Republik Indonesia dan akreditasi A, setiap jamaah mendapatkan kepastian jadwal, visa resmi, tiket pesawat, serta kamar hotel yang telah terkonfirmasi.
                    </p>
                </div>
            </div>

            <div class="bg-gradient-to-br from-emerald-50 to-teal-50 p-8 rounded-2xl border border-emerald-200">
                <h3 class="text-lg font-bold text-emerald-900 mb-4 flex items-center gap-2">
                    <span>📜</span> Legalitas &amp; Sertifikasi Resmi
                </h3>
                <ul class="space-y-3 text-xs sm:text-sm text-gray-700">
                    <li class="p-3 bg-white rounded-lg shadow-sm border border-emerald-100">
                        <strong class="block text-emerald-800">Izin Umroh (PPIU):</strong>
                        Kementerian Agama RI No. U.421 Tahun 2015
                    </li>
                    <li class="p-3 bg-white rounded-lg shadow-sm border border-emerald-100">
                        <strong class="block text-emerald-800">Izin Haji Khusus (PIHK):</strong>
                        Kementerian Agama RI No. 892 Tahun 2018
                    </li>
                    <li class="p-3 bg-white rounded-lg shadow-sm border border-emerald-100">
                        <strong class="block text-emerald-800">Akreditasi Lembaga:</strong>
                        Predikat "A" Sangat Baik dari Komite Akreditasi Nasional (KAN)
                    </li>
                    <li class="p-3 bg-white rounded-lg shadow-sm border border-emerald-100">
                        <strong class="block text-emerald-800">Keanggotaan Asosiasi:</strong>
                        Anggota Resmi HIMPUH &amp; IATA (International Air Transport Association)
                    </li>
                </ul>
            </div>
        </div>

        <!-- Section Visi & Misi -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-6 border-t border-gray-200">
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                <div class="w-10 h-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-lg mb-3">
                    👁️
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Visi Perusahaan</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Menjadi biro perjalanan ibadah umroh dan haji khusus nomor satu di Indonesia yang terdepan dalam pelayanan syar'i, kenyamanan akomodasi, serta kepastian keberangkatan demi mengantarkan jamaah meraih umroh yang mabrur.
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                <div class="w-10 h-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-lg mb-3">
                    🎯
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Misi Perusahaan</h3>
                <ul class="text-sm text-gray-600 space-y-2 list-disc list-inside leading-relaxed">
                    <li>Memberikan bimbingan manasik intensif sesuai Al-Qur'an dan Sunnah shahihah.</li>
                    <li>Menyediakan fasilitas hotel berbintang yang dekat dan nyaman bagi seluruh jamaah.</li>
                    <li>Menjaga amanah dana jamaah secara transparan, profesional, dan akuntabel.</li>
                    <li>Membangun hubungan kekeluargaan yang erat dengan seluruh alumni jamaah.</li>
                </ul>
            </div>
        </div>

        <!-- 4 Nilai Utama Perusahaan -->
        <div class="pt-6 border-t border-gray-200">
            <div class="text-center max-w-xl mx-auto mb-8">
                <span class="text-emerald-700 font-bold text-xs uppercase tracking-wider">Budaya Kerja Kami</span>
                <h2 class="text-2xl font-bold text-gray-900 mt-1">Nilai-Nilai Utama PT Rahmah Group</h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-white p-5 rounded-lg border border-gray-200 text-center">
                    <div class="text-3xl mb-2">🤝</div>
                    <h4 class="font-bold text-gray-900 text-sm">Amanah</h4>
                    <p class="text-xs text-gray-500 mt-1">Menjaga kepercayaan jamaah dengan integritas penuh.</p>
                </div>
                <div class="bg-white p-5 rounded-lg border border-gray-200 text-center">
                    <div class="text-3xl mb-2">🤲</div>
                    <h4 class="font-bold text-gray-900 text-sm">Khidmah</h4>
                    <p class="text-xs text-gray-500 mt-1">Melayani tamu Allah dengan setulus hati dan ramah.</p>
                </div>
                <div class="bg-white p-5 rounded-lg border border-gray-200 text-center">
                    <div class="text-3xl mb-2">🕌</div>
                    <h4 class="font-bold text-gray-900 text-sm">Sunnah</h4>
                    <p class="text-xs text-gray-500 mt-1">Seluruh tata cara ibadah sesuai tuntunan Rasulullah ﷺ.</p>
                </div>
                <div class="bg-white p-5 rounded-lg border border-gray-200 text-center">
                    <div class="text-3xl mb-2">⭐</div>
                    <h4 class="font-bold text-gray-900 text-sm">Profesional</h4>
                    <p class="text-xs text-gray-500 mt-1">Standar operasional prima dengan manajemen berpengalaman.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
