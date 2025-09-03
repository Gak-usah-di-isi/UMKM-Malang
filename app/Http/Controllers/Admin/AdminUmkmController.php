<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Umkm;
use App\Models\UmkmCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminUmkmController extends Controller
{
    public function index()
    {
        $umkms = Umkm::with(['category', 'user'])
            ->latest()
            ->paginate(12);

        return view('admin.umkm.index', compact('umkms'));
    }

    public function show($slug)
    {
        $umkm = Umkm::with(['category', 'user', 'documents', 'photos', 'socials', 'products'])
            ->where('slug', $slug)
            ->firstOrFail();

        return view('admin.umkm.show', compact('umkm'));
    }

    public function edit($slug)
    {
        $umkm = Umkm::where('slug', $slug)->firstOrFail();
        $categories = UmkmCategory::all();

        return view('admin.umkm.edit', compact('umkm', 'categories'));
    }

    public function update(Request $request, $slug)
    {
        $umkm = Umkm::where('slug', $slug)->firstOrFail();

        $request->validate([
            'name' => 'required|string|max:255',
            'umkm_category_id' => 'required|exists:umkm_categories,id',
            'description' => 'nullable|string',
            'tagline' => 'nullable|string',
            'established_year' => 'required|date',
            'address' => 'required|string',
            'district' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'verification_status' => 'required|in:pending,verified,rejected',
            'google_maps' => 'nullable|string',
        ]);

        $data = $request->except(['logo']);

        if ($request->hasFile('logo')) {
            if ($umkm->logo) {
                Storage::disk('public')->delete($umkm->logo);
            }
            $data['logo'] = $request->file('logo')->store('umkm/logos', 'public');
        }

        $umkm->update($data);

        return redirect()->route('admin.umkm.show', $umkm->slug)
            ->with('success', 'Data UMKM berhasil diperbarui');
    }

    public function destroy($slug)
    {
        $umkm = Umkm::where('slug', $slug)->firstOrFail();

        if ($umkm->logo) {
            Storage::disk('public')->delete($umkm->logo);
        }

        $umkm->delete();

        return redirect()->route('admin.umkm.index')
            ->with('success', 'UMKM berhasil dihapus');
    }
}
