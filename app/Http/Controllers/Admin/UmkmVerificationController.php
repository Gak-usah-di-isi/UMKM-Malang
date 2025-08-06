<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Umkm;
use App\Models\Role;

class UmkmVerificationController extends Controller
{
    public function index()
    {
        $umkms = Umkm::where('verification_status', 'pending')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.verification.index', compact('umkms'));
    }

    public function show($slug)
    {
        $umkm = Umkm::with(['category', 'documents'])
            ->where('slug', $slug)
            ->firstOrFail();

        return view('admin.verification.detail', compact('umkm'));
    }

    public function verified($slug)
    {
        $umkm = Umkm::where('slug', $slug)->firstOrFail();
        $umkm->verification_status = 'verified';
        $umkm->save();

        $user = $umkm->user;

        if ($user) {
            $user->roles()->detach();

            $userRole = Role::find(3);
            $user->roles()->attach($userRole);
        }

        return redirect()->route('admin.umkm-verification.index')->with('success', 'UMKM disetujui.');
    }

    public function rejected($slug)
    {
        $umkm = Umkm::where('slug', $slug)->firstOrFail();
        $umkm->verification_status = 'rejected';
        $umkm->save();

        return redirect()->route('admin.umkm-verification.index')->with('error', 'UMKM ditolak.');
    }
}
