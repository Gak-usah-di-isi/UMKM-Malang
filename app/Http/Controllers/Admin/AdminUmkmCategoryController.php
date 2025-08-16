<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UmkmCategory;


class AdminUmkmCategoryController extends Controller
{
    public function index()
    {
        $categories = UmkmCategory::withCount('umkms')
            ->latest()
            ->paginate(10);

        return view('admin.umkm-category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.umkm-category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:umkm_categories,name',
            'description' => 'nullable|string|max:1000',
        ]);

        UmkmCategory::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.umkm-categories.index')
            ->with('success', 'Kategori UMKM berhasil dibuat!');
    }

    public function edit($slug)
    {
        $category = UmkmCategory::where('slug', $slug)->firstOrFail();
        return view('admin.umkm-category.edit', compact('category'));
    }

    public function update(Request $request, $slug)
    {
        $category = UmkmCategory::where('slug', $slug)->firstOrFail();

        $request->validate([
            'name' => 'required|string|max:255|unique:umkm_categories,name,' . $category->id,
            'description' => 'nullable|string|max:1000',
        ]);

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.umkm-categories.index')
            ->with('success', 'Kategori UMKM berhasil diperbarui!');
    }

    public function destroy($slug)
    {
        $category = UmkmCategory::where('slug', $slug)->firstOrFail();

        if ($category->umkms()->count() > 0) {
            return redirect()->route('admin.umkm-categories.index')
                ->with('error', 'Kategori tidak dapat dihapus karena masih digunakan oleh UMKM!');
        }

        $category->delete();

        return redirect()->route('admin.umkm-categories.index')
            ->with('success', 'Kategori UMKM berhasil dihapus!');
    }
}
