@extends('layouts.app')

@section('title', 'Kontak Kami - Rahmah Travel | PT Rahmah Group Internasional')

@section('content')
    <!-- Header Halaman -->
    <div class="mb-6 border-b pb-3">
        <h1 class="text-2xl font-bold text-gray-900">Kontak Kami</h1>
        <p class="text-sm text-gray-600">Hubungi kami untuk informasi paket umroh dan konsultasi keberangkatan.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Informasi Kantor & Kontak -->
        <div class="space-y-4">
            <div class="bg-white border border-gray-300 p-5 rounded shadow-sm">
                <h2 class="font-bold text-base text-gray-900 mb-2">Kantor Pusat Jakarta</h2>
                <p class="text-xs text-gray-700 leading-relaxed mb-3">
                    <strong>PT Rahmah Group Internasional (Rahmah Travel)</strong><br>
                    Gedung Rahmah Tower Lt. 5, Jl. TB Simatupang No. 88, Cilandak, Jakarta Selatan, DKI Jakarta 12430.
                </p>
                <div class="text-xs text-gray-700 space-y-1">
                    <div><strong>Telepon:</strong> (021) 7890-1234</div>
                    <div><strong>WhatsApp:</strong> 0812-3456-7890</div>
                    <div><strong>Email:</strong> info@rahmahtravel.com</div>
                    <div><strong>SK PPIU Kemenag:</strong> 16112300553370003</div>
                </div>
            </div>

            <div class="bg-white border border-gray-300 p-5 rounded shadow-sm">
                <h3 class="font-bold text-base text-gray-900 mb-2">Jam Pelayanan Kantor</h3>
                <ul class="text-xs text-gray-700 space-y-1">
                    <li>Senin &ndash; Jumat : 08.30 &ndash; 17.00 WIB</li>
                    <li>Sabtu : 09.00 &ndash; 14.00 WIB</li>
                    <li>Minggu &amp; Hari Libur : Tutup (Layanan via WhatsApp tetap aktif)</li>
                </ul>
            </div>
        </div>

        <!-- Form Kirim Pesan Sederhana -->
        <div class="bg-white border border-gray-300 p-6 rounded shadow-sm">
            <h2 class="font-bold text-base text-gray-900 mb-2">Formulir Kirim Pesan</h2>
            <p class="text-xs text-gray-500 mb-4">Tinggalkan pesan Anda, tim kami akan segera menghubungi Anda.</p>

            <form onsubmit="event.preventDefault(); alert('Terima kasih! Pesan Anda telah terkirim.'); this.reset();" class="space-y-3">
                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" required placeholder="Masukkan nama Anda"
                           class="w-full text-xs border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">No. WhatsApp / HP</label>
                    <input type="tel" required placeholder="08xxxxxxxxxx"
                           class="w-full text-xs border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Email</label>
                    <input type="email" placeholder="nama@email.com"
                           class="w-full text-xs border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Pesan / Pertanyaan</label>
                    <textarea rows="4" required placeholder="Tuliskan pertanyaan paket umroh yang ingin Anda tanyakan..."
                              class="w-full text-xs border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500"></textarea>
                </div>

                <div>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium text-xs px-4 py-2 rounded">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
