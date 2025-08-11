<?php

namespace App\Http\Controllers\Umkm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Umkm;

class UmkmProfileController extends Controller
{
    public function edit()
    {
        $umkm = Umkm::where('user_id', auth()->id())
            ->with('category')
            ->firstOrFail();

        return view('umkm.profile.edit', compact('umkm'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'established_year' => 'nullable|date',
            'tagline' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'address' => 'nullable|string|max:255',
            'district' => 'nullable|string|max:255',
            'google_maps' => 'nullable|string',
            'logo' => 'nullable|image|max:2048',
        ]);

        $umkm = Umkm::where('user_id', auth()->id())->firstOrFail();

        $umkm->update([
            'established_year' => $request->established_year,
            'tagline' => $request->tagline,
            'description' => $request->description,
            'address' => $request->address,
            'district' => $request->district,
            'google_maps' => $request->google_maps,
        ]);

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('umkm/logo', 'public');
            $umkm->update(['logo' => $path]);
        }

        return redirect()->route('umkm.profile.edit')->with('success', 'Profil UMKM berhasil diperbarui.');
    }
}
