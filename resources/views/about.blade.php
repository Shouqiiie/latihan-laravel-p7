@extends('layouts.app')

@section('title', 'Tentang Kami - Profil PT Rahmah Group Internasional & Rahmah Travel')

@section('content')
    <!-- Judul Halaman -->
    <div class="mb-6 border-b pb-3">
        <h1 class="text-2xl font-bold text-gray-900">Tentang Kami</h1>
        <p class="text-sm text-gray-600">Profil perusahaan Rahmah Travel dan holding PT Rahmah Group Internasional.</p>
    </div>

    <!-- Konten Tentang Kami -->
    <div class="space-y-6">
        <!-- Profil Perusahaan -->
        <div class="bg-white border border-gray-300 p-6 rounded shadow-sm">
            <h2 class="text-lg font-bold text-gray-800 mb-2">Profil Perusahaan</h2>
            <p class="text-sm text-gray-700 leading-relaxed mb-3">
                <strong>Rahmah Travel</strong> merupakan biro perjalanan ibadah umroh dan haji khusus resmi di bawah naungan <strong>PT Rahmah Group Internasional</strong>. Kami berfokus pada penyediaan paket perjalanan ibadah umroh dengan akomodasi hotel bintang nyaman, penerbangan maskapai terpercaya (seperti Qatar Airways, Oman Air, dan IndiGo Airlines), serta pendampingan muthawwif ibadah yang ramah dan amanah.
            </p>
            <p class="text-sm text-gray-700 leading-relaxed">
                PT Rahmah Group Internasional telah memiliki izin resmi Penyelenggara Perjalanan Ibadah Umroh (PPIU) dari Kementerian Agama Republik Indonesia dengan No SK: <strong>16112300553370003</strong> serta tergabung dalam asosiasi resmi perjalanan ibadah di Indonesia.
            </p>
        </div>

        <!-- Visi dan Misi -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white border border-gray-300 p-5 rounded shadow-sm">
                <h3 class="font-bold text-base text-blue-700 mb-2">Visi Perusahaan</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Menjadi biro perjalanan umroh dan haji terpercaya yang memberikan pelayanan terbaik, amanah, dan terjangkau bagi seluruh lapisan masyarakat muslim di Indonesia.
                </p>
            </div>

            <div class="bg-white border border-gray-300 p-5 rounded shadow-sm">
                <h3 class="font-bold text-base text-blue-700 mb-2">Misi Perusahaan</h3>
                <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                    <li>Memberikan bimbingan ibadah umroh sesuai sunnah Rasulullah ﷺ.</li>
                    <li>Menyediakan akomodasi hotel yang nyaman dan dekat dengan masjid.</li>
                    <li>Menjaga transparansi biaya dan kepastian jadwal keberangkatan.</li>
                    <li>Melayani jamaah dengan sepenuh hati dan ramah.</li>
                </ul>
            </div>
        </div>

        <!-- Tabel Legalitas Perusahaan -->
        <div class="bg-white border border-gray-300 p-6 rounded shadow-sm">
            <h2 class="text-lg font-bold text-gray-800 mb-3">Legalitas &amp; Izin Resmi</h2>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left border border-gray-200">
                    <tbody class="divide-y divide-gray-200">
                        <tr class="bg-gray-50">
                            <td class="p-3 font-semibold w-1/3">Nama Perusahaan</td>
                            <td class="p-3">PT Rahmah Group Internasional</td>
                        </tr>
                        <tr>
                            <td class="p-3 font-semibold">Nama Brand / Unit Usaha</td>
                            <td class="p-3">Rahmah Travel</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="p-3 font-semibold">No. SK PPIU Kemenag RI</td>
                            <td class="p-3">16112300553370003</td>
                        </tr>
                        <tr>
                            <td class="p-3 font-semibold">Status Provider</td>
                            <td class="p-3">Provider VISA Umroh Resmi</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="p-3 font-semibold">Sertifikasi &amp; Asosiasi</td>
                            <td class="p-3">IATA, ASPHIRASI, KAN (Komite Akreditasi Nasional)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
