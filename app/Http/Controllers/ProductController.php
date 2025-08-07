<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['category', 'umkm', 'photos'])
            ->where('umkm_id', auth()->user()->umkm->id) // Only show products for this UMKM
            ->latest()
            ->paginate(10);

        $totalProducts = Product::where('umkm_id', auth()->user()->umkm->id)->count();
        $lowStockCount = Product::where('umkm_id', auth()->user()->umkm->id)
            ->where('stock', '<', 10)
            ->count();
        $categoryCount = ProductCategory::count();

        // Calculate growth percentage
        $lastMonthCount = Product::where('umkm_id', auth()->user()->umkm->id)
            ->where('created_at', '>=', now()->subMonth())
            ->count();
        $growthPercentage = $totalProducts > 0 ? round(($lastMonthCount / $totalProducts) * 100, 2) : 0;

        return view('umkm.products.index', compact(
            'products',
            'totalProducts',
            'lowStockCount',
            'categoryCount',
            'growthPercentage'
        ));
    }

    public function create()
    {
        $categories = ProductCategory::all();
        return view('umkm.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:product_categories,id',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $productData = $request->all();
        $productData['umkm_id'] = auth()->user()->umkm->id;

        $product = Product::create($productData);

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $path = $photo->store('products', 'public');
                $product->photos()->create(['path' => $path]);
            }
        }

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        return view('umkm.products.edit');
    }

    public function update(Request $request, Product $product)
    {
        // Check if user has UMKM
        if (!auth()->user()->umkm) {
            abort(403, 'You don\'t have a registered UMKM');
        }

        // Check product ownership
        if ($product->umkm_id !== auth()->user()->umkm->id) {
            abort(403, 'You can only edit your own products');
        }
        if ($product->verification_status !== 'pending') {
            abort(403, 'You cannot edit a product that has been verified or rejected.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:product_categories,id',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product->update($request->all());

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $path = $photo->store('products', 'public');
                $product->photos()->create(['path' => $path]);
            }
        }

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        // Ensure the product belongs to this UMKM
        if ($product->umkm_id !== auth()->user()->umkm->id) {
            abort(403);
        }

        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

    public function show(Product $product)
    {
        // Ensure the product belongs to this UMKM
        if ($product->umkm_id !== auth()->user()->umkm->id) {
            abort(403);
        }

        return view('umkm.products.show', compact('product'));
    }
}
