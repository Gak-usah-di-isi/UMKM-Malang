<?php

namespace App\Http\Controllers\Umkm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UmkmPhoto;
use App\Models\Umkm;
use Illuminate\Support\Facades\Storage;

class UmkmGalleryController extends Controller
{
    public function index()
    {
        $umkm = Umkm::where('user_id', auth()->id())->with('photos')->firstOrFail();

        return view('umkm.gallery.index', compact('umkm'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|max:4096',
        ]);

        $umkm = Umkm::where('user_id', auth()->id())->firstOrFail();

        $path = $request->file('photo')->store('umkm/photos', 'public');

        UmkmPhoto::create([
            'umkm_id' => $umkm->id,
            'file_path' => $path,
        ]);

        return redirect()->route('umkm.gallery.index')->with('success', 'Foto berhasil diupload.');
    }

    public function destroy(UmkmPhoto $photo)
    {
        $umkm = Umkm::where('user_id', auth()->id())->firstOrFail();

        if ($photo->umkm_id !== $umkm->id) {
            abort(403);
        }

        Storage::disk('public')->delete($photo->file_path);

        $photo->delete();

        return redirect()->route('umkm.gallery.index')->with('success', 'Foto berhasil dihapus.');
    }
}
