<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\FlashAlert;
use App\Models\Umkm;
use App\Models\UmkmCategory;
use App\Models\UmkmDocument;

class RegisteredUmkmController extends Controller
{
    use FlashAlert;

    public function index()
    {
        $umkms = Umkm::where('user_id', auth()->id())->get();
        return view('umkmRegistration.verifikasi', compact('umkms'));
    }

    public function create()
    {
        $existingUmkm = Umkm::where('user_id', auth()->id())
            ->where('verification_status', 'pending')
            ->first();
        if ($existingUmkm) {
            return redirect()->route('verifikasi-umkm');
        }

        $categories = UmkmCategory::all();
        return view('umkmRegistration.daftar-umkm', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'umkm_category_id' => 'required|exists:umkm_categories,id',
            'name_umkm' => 'required|string|max:255',
            'established_year' => 'required|date',
            'address' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'nib' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120',
            'iumk' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120',
            'terms' => 'accepted',
        ]);

        $umkm = Umkm::create([
            'user_id' => auth()->id(),
            'umkm_category_id' => $request->umkm_category_id,
            'name' => $request->name_umkm,
            'established_year' => $request->established_year,
            'address' => $request->address,
            'district' => $request->district,
            'verification_status' => 'pending',
        ]);

        if ($request->hasFile('nib')) {
            $nibPath = $request->file('nib')->store('umkm/documents', 'public');
            UmkmDocument::create([
                'umkm_id' => $umkm->id,
                'type' => 'nib',
                'file_path' => $nibPath,
            ]);
        }

        if ($request->hasFile('iumk')) {
            $iumkPath = $request->file('iumk')->store('umkm/documents', 'public');
            UmkmDocument::create([
                'umkm_id' => $umkm->id,
                'type' => 'iumk',
                'file_path' => $iumkPath,
            ]);
        }

        return redirect()->route('verifikasi-umkm')->with($this->alertUmkmRegistrationSuccess());
    }
}
