<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Menu 1: Beranda (Home).
     */
    public function index(): View
    {
        $featuredPackages = Package::take(3)->get();

        return view('home', compact('featuredPackages'));
    }

    /**
     * Menu 2: Tentang Kami (About Us).
     */
    public function about(): View
    {
        return view('about');
    }

    /**
     * Menu 4: Kontak Kami (Contact).
     */
    public function contact(): View
    {
        return view('contact');
    }
}
