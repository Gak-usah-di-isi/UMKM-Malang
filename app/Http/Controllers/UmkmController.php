<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;
use App\Models\UmkmCategory;

class UmkmController extends Controller
{
    public function index(Request $request)
    {
        $categorySlug = $request->get('category');

        $umkmsQuery = Umkm::where('verification_status', 'verified');

        if ($categorySlug) {
            $umkmsQuery->whereHas('category', function ($query) use ($categorySlug) {
                $query->where('slug', $categorySlug);
            });
        }

        $umkms = $umkmsQuery->paginate(8);

        $verifiedUmkmCount = $umkmsQuery->count();

        $categories = UmkmCategory::withCount('umkms')->get();

        return view('landingPage.umkm-list', compact('umkms', 'categories', 'verifiedUmkmCount'));
    }

    public function show($slug)
    {
        $umkm = Umkm::with(['photos', 'socials', 'products.photos'])->where('slug', $slug)->firstOrFail();

        $photos = $umkm->photos;
        $socials = $umkm->socials;
        $products = $umkm->products;

        return view('landingPage.detail-umkm', compact('umkm', 'photos', 'socials', 'products'));
    }
}
