<?php

namespace App\Http\Controllers\Umkm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Umkm;
use App\Models\UmkmSocial;

class UmkmSocialController extends Controller
{
    public function index()
    {
        $umkm = Umkm::where('user_id', auth()->id())->firstOrFail();
        $socials = $umkm->socials()->paginate(10);

        return view('umkm.social.index', compact('socials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'platform' => 'required|in:tiktok,facebook,instagram',
            'url' => 'required|url|max:255',
        ]);

        $umkm = Umkm::where('user_id', auth()->id())->firstOrFail();

        $umkm->socials()->create([
            'umkm_id' => $umkm->id,
            'platform' => $request->platform,
            'url' => $request->url,
        ]);

        return redirect()->route('umkm.socials.index')->with('success', 'Sosial media berhasil ditambahkan.');
    }

    public function update(Request $request, UmkmSocial $social)
    {
        $request->validate([
            'platform' => 'required|in:tiktok,facebook,instagram',
            'url' => 'required|url|max:255',
        ]);

        $umkm = Umkm::where('user_id', auth()->id())->firstOrFail();

        if ($social->umkm_id !== $umkm->id) {
            abort(403);
        }

        $social->update([
            'platform' => $request->platform,
            'url' => $request->url,
        ]);

        return redirect()->route('umkm.socials.index')->with('success', 'Sosial media berhasil diperbarui.');
    }

    public function destroy(UmkmSocial $social)
    {
        $umkm = Umkm::where('user_id', auth()->id())->firstOrFail();

        if ($social->umkm_id !== $umkm->id) {
            abort(403);
        }

        $social->delete();

        return redirect()->route('umkm.socials.index')->with('success', 'Sosial media berhasil dihapus.');
    }
}
