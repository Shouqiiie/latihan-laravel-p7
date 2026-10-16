@extends('layouts.app')

@section('title', 'Kontak Kami - Rahmah Travel | PT Rahmah Group Internasional')

@section('content')
    <!-- Banner Header Halaman -->
    <div class="bg-emerald-900 text-white py-12 border-b border-emerald-800">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <span class="text-xs uppercase tracking-wider text-amber-400 font-bold">Menu 4 &bull; Hubungi Kami</span>
            <h1 class="text-3xl sm:text-4xl font-extrabold mt-1">Kontak Rahmah Travel</h1>
            <p class="text-emerald-200 text-sm mt-2 max-w-2xl">
                Kami siap membantu menjawab seluruh pertanyaan terkait paket umroh, jadwal keberangkatan, dan pendaftaran jamaah.
            </p>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Kolom Kiri: Informasi Kontak & Kantor -->
            <div class="space-y-6">
                <!-- Card Kantor Pusat -->
                <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm">
                    <div class="w-10 h-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-lg mb-4">
                        🏢
                    </div>
                    <h2 class="text-base font-bold text-gray-900 mb-2">Kantor Pusat Jakarta</h2>
                    <p class="text-xs text-gray-600 leading-relaxed mb-4">
                        <strong>Gedung Rahmah Tower Lt. 5</strong><br>
                        Jl. TB Simatupang No. 88, Cilandak Barat, Pasar Minggu, Jakarta Selatan, DKI Jakarta 12430.
                    </p>
                    <div class="space-y-2 text-xs text-gray-700 pt-3 border-t border-gray-100">
                        <div><strong>Telepon:</strong> (021) 7890-1234</div>
                        <div><strong>Hotline 24 Jam:</strong> 0812-3456-7890</div>
                        <div><strong>Email:</strong> info@rahmahtravel.com</div>
                    </div>
                </div>

                <!-- Card Kantor Cabang Madinah -->
                <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm">
                    <div class="w-10 h-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-lg mb-4">
                        🕌
                    </div>
                    <h3 class="text-base font-bold text-gray-900 mb-2">Kantor Operasional Saudi Arabia</h3>
                    <p class="text-xs text-gray-600 leading-relaxed mb-4">
                        <strong>Rahmah International Group Branch</strong><br>
                        King Abdulaziz Road, Central Area, Al Madinah Al Munawwarah 42311, Kingdom of Saudi Arabia.
                    </p>
                    <div class="space-y-2 text-xs text-gray-700 pt-3 border-t border-gray-100">
                        <div><strong>WhatsApp Saudi:</strong> +966 50 123 4567</div>
                        <div><strong>Layanan Muthawwif:</strong> 24 Jam Siaga</div>
                    </div>
                </div>

                <!-- Card Jam Operasional -->
                <div class="bg-emerald-50 p-6 rounded-2xl border border-emerald-100">
                    <h3 class="text-sm font-bold text-emerald-900 mb-2">⏰ Jam Operasional Kantor</h3>
                    <ul class="text-xs text-emerald-800 space-y-1.5">
                        <li><strong>Senin - Jumat:</strong> 08.30 - 17.00 WIB</li>
                        <li><strong>Sabtu:</strong> 09.00 - 14.00 WIB</li>
                        <li><strong>Minggu &amp; Libur Nasional:</strong> Layanan Hotline WhatsApp Siaga</li>
                    </ul>
                </div>
            </div>

            <!-- Kolom Kanan: Form Konsultasi & Kirim Pesan -->
            <div class="lg:col-span-2">
                <div class="bg-white p-8 rounded-2xl border border-gray-200 shadow-sm">
                    <h2 class="text-xl font-bold text-gray-900 mb-2">Kirim Pesan atau Konsultasi Ibadah</h2>
                    <p class="text-xs text-gray-500 mb-6">
                        Silakan isi formulir di bawah ini. Konsultan ibadah kami akan segera merespon pertanyaan Anda melalui WhatsApp atau Email.
                    </p>

                    <!-- Alert Info Sederhana -->
                    <div id="success-alert" class="hidden mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs rounded-lg">
                        Terima kasih! Pesan Anda telah diterima oleh tim Rahmah Travel. Kami akan segera menghubungi Anda.
                    </div>

                    <form onsubmit="event.preventDefault(); document.getElementById('success-alert').classList.remove('hidden'); this.reset();" class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-gray-700 mb-1">Nama Lengkap *</label>
                                <input type="text" required placeholder="Contoh: Muhammad Ihsan"
                                       class="w-full text-xs bg-gray-50 border border-gray-300 rounded-lg px-3 py-2.5 focus:ring-1 focus:ring-emerald-500 focus:border-emerald-500 outline-none">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-700 mb-1">Nomor WhatsApp / HP *</label>
                                <input type="tel" required placeholder="Contoh: 081234567890"
                                       class="w-full text-xs bg-gray-50 border border-gray-300 rounded-lg px-3 py-2.5 focus:ring-1 focus:ring-emerald-500 focus:border-emerald-500 outline-none">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-gray-700 mb-1">Alamat Email</label>
                                <input type="email" placeholder="nama@email.com"
                                       class="w-full text-xs bg-gray-50 border border-gray-300 rounded-lg px-3 py-2.5 focus:ring-1 focus:ring-emerald-500 focus:border-emerald-500 outline-none">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-700 mb-1">Paket yang Diminati</label>
                                <select class="w-full text-xs bg-gray-50 border border-gray-300 rounded-lg px-3 py-2.5 focus:ring-1 focus:ring-emerald-500 focus:border-emerald-500 outline-none">
                                    <option value="">-- Pilih Paket Umroh / Haji --</option>
                                    @foreach (\App\Models\Package::all() as $p)
                                        <option value="{{ $p->id }}">{{ $p->name }} ({{ $p->formatted_price }})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-gray-700 mb-1">Pesan / Pertanyaan Anda *</label>
                            <textarea rows="5" required placeholder="Tuliskan pertanyaan Anda mengenai ketersediaan kursi, jadwal manasik, atau kebutuhan khusus rombongan..."
                                      class="w-full text-xs bg-gray-50 border border-gray-300 rounded-lg px-3 py-2.5 focus:ring-1 focus:ring-emerald-500 focus:border-emerald-500 outline-none"></textarea>
                        </div>

                        <div>
                            <button type="submit"
                                    class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs px-6 py-3 rounded-lg shadow transition">
                                Kirim Pertanyaan Sekarang &rarr;
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
