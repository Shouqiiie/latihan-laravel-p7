<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PackageController extends Controller
{
    /**
     * Display a listing of umrah & hajj packages.
     */
    public function index(Request $request): View
    {
        $query = Package::query();

        // Optional simple category filter
        if ($request->filled('category')) {
            $query->where('category', $request->input('category'));
        }

        // Optional search filter
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('hotel_makkah', 'like', "%{$search}%")
                    ->orWhere('airline', 'like', "%{$search}%");
            });
        }

        $packages = $query->orderBy('price', 'asc')->get();
        $categories = Package::select('category')->distinct()->pluck('category');

        return view('packages.index', compact('packages', 'categories'));
    }

    /**
     * Display the specified umrah package detail.
     */
    public function show(Package $package): View
    {
        $otherPackages = Package::where('id', '!=', $package->id)->take(3)->get();

        return view('packages.show', compact('package', 'otherPackages'));
    }
}
