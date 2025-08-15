<?php

namespace App\Http\Controllers\Umkm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Auth;


class UmkmProductController extends Controller
{
    public function index()
    {
        $products = Product::with('photos')
            ->where('umkm_id', Auth::user()->umkm->id)
            ->latest()
            ->paginate(12);
        return view('umkm.product.index', compact('products'));
    }

    public function create()
    {
        $categories = ProductCategory::all();
        return view('umkm.product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'product_category_id' => 'required|exists:product_categories,id',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'buy_link' => 'nullable|url',
            'is_favorite' => 'nullable|boolean',
            'is_featured' => 'nullable|boolean',
            'photos.*' => 'nullable|image|max:2048',
        ]);

        $product = Product::create([
            'umkm_id' => Auth::user()->umkm->id,
            'name' => $request->input('name'),
            'product_category_id' => $request->input('product_category_id'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'buy_link' => $request->input('buy_link'),
            'is_favorite' => $request->boolean('is_favorite'),
        ]);

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $path = $photo->store('product_photos', 'public');
                $product->photos()->create(['file_path' => $path]);
            }
        }

        return redirect()->route('umkm.products.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function show($slug)
    {
        $product = Product::with(['photos', 'category', 'umkm'])
            ->where('slug', $slug)
            ->where('umkm_id', Auth::user()->umkm->id)
            ->firstOrFail();

        return view('umkm.product.show', compact('product'));
    }

    public function edit($slug)
    {
        $product = Product::with('photos')
            ->where('slug', $slug)
            ->where('umkm_id', Auth::user()->umkm->id)
            ->firstOrFail();

        $categories = ProductCategory::all();

        return view('umkm.product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)
            ->where('umkm_id', Auth::user()->umkm->id)
            ->firstOrFail();

        $request->validate([
            'name' => 'required|string|max:255',
            'product_category_id' => 'required|exists:product_categories,id',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'buy_link' => 'nullable|url',
            'is_favorite' => 'nullable|boolean',
            'is_featured' => 'nullable|boolean',
            'photos.*' => 'nullable|image|max:5120',
            'remove_photos' => 'nullable|array',
            'remove_photos.*' => 'exists:product_photos,id',
        ]);

        $product->update([
            'name' => $request->input('name'),
            'product_category_id' => $request->input('product_category_id'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'buy_link' => $request->input('buy_link'),
            'is_favorite' => $request->boolean('is_favorite'),
            'is_featured' => $request->boolean('is_featured'),
        ]);

        if ($request->has('remove_photos')) {
            foreach ($request->remove_photos as $photoId) {
                $photo = $product->photos()->find($photoId);
                if ($photo) {
                    Storage::disk('public')->delete($photo->file_path);
                    $photo->delete();
                }
            }
        }

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $path = $photo->store('product_photos', 'public');
                $product->photos()->create(['file_path' => $path]);
            }
        }

        return redirect()->route('umkm.products.index')->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy($slug)
    {
        $product = Product::where('slug', $slug)
            ->where('umkm_id', Auth::user()->umkm->id)
            ->firstOrFail();

        foreach ($product->photos as $photo) {
            Storage::disk('public')->delete($photo->file_path);
        }

        $product->delete();

        return redirect()->route('umkm.products.index')->with('success', 'Produk berhasil dihapus.');
    }
}
