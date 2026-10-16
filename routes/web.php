<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

// Menu 1: Beranda / Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Menu 2: Tentang Kami / Profil Perusahaan
Route::get('/tentang-kami', [HomeController::class, 'about'])->name('about');

// Menu 3: Output Akhir - Daftar Data Sesuai Object (Paket Umroh)
Route::get('/paket-umroh', [PackageController::class, 'index'])->name('packages.index');
Route::get('/paket-umroh/{package}', [PackageController::class, 'show'])->name('packages.show');

// Menu 4: Kontak Kami
Route::get('/kontak', [HomeController::class, 'contact'])->name('contact');
