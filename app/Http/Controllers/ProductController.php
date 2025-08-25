<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categorySlug = $request->get('category');

        $products = Product::query();

        if ($categorySlug) {

            $products = $products->whereHas('category', function ($query) use ($categorySlug) {
                $query->where('slug', $categorySlug);
            });
        }

        $products = $products->paginate(10);

        $categories = ProductCategory::withCount('products')->get();

        return view('landingPage.products', compact('products', 'categories'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)
            ->with('photos', 'umkm', 'category')
            ->firstOrFail();

        $umkmProducts = Product::where('umkm_id', $product->umkm_id)
            ->where('id', '!=', $product->id)
            ->with('photos')
            ->get();

        $category = $product->category;

        $umkm = $product->umkm;

        return view('landingPage.productDetail', compact('product', 'umkmProducts', 'category', 'umkm'));
    }
}
