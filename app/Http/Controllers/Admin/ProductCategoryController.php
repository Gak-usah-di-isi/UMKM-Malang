<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductCategoryController extends Controller
{
    // Display all categories
    public function index()
    {
        $categories = ProductCategory::withCount('products')->paginate(10);
        return view('admin.product-category.index', compact('categories'));
    }

    // Show create form
    public function create()
    {
        return view('admin.product-category.create');
    }

    // Store new category
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:product_categories,slug',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'required|boolean',
        ]);

        $category = ProductCategory::create($validated);

        if ($request->hasFile('image')) {
            $category->image_url = $request->file('image')->store('product-categories', 'public');
            $category->save();
        }

        return redirect()->route('admin.product-category.index')
            ->with('success', 'Category created successfully');
    }

    // Show edit form
    public function edit($id = 1)
    {
        $category = ProductCategory::findOrFail($id);
        return view('admin.product-category.edit', compact('category'));
    }

    // Update category
    public function update(Request $request, $id)
    {
        $category = ProductCategory::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:product_categories,slug,' . $id,
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'required|boolean',
        ]);

        $category->update($validated);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($category->image_url) {
                Storage::disk('public')->delete($category->image_url);
            }
            $category->image_url = $request->file('image')->store('product-categories', 'public');
            $category->save();
        }

        return redirect()->route('admin.product-category.index')
            ->with('success', 'Category updated successfully');
    }

    // Soft delete category
    public function destroy($id)
    {
        $category = ProductCategory::findOrFail($id);

        // Move products to uncategorized
        $category->products()->update(['category_id' => null]);

        // Don't delete image here (keep for possible restore)
        $category->delete();

        return redirect()->route('admin.product-category.index')
            ->with('success', 'Category moved to trash');
    }

    // Show trashed categories
    public function trashed()
    {
        $categories = ProductCategory::onlyTrashed()->paginate(10);
        return view('admin.product-category.trashed', compact('categories'));
    }

    // Restore trashed category
    public function restore($id)
    {
        $category = ProductCategory::onlyTrashed()->findOrFail($id);
        $category->restore();

        return redirect()->route('admin.product-category.trashed')
            ->with('success', 'Category restored successfully');
    }

    // Permanently delete category
    public function forceDelete($id)
    {
        $category = ProductCategory::onlyTrashed()->findOrFail($id);

        // Delete associated image
        if ($category->image_url) {
            Storage::disk('public')->delete($category->image_url);
        }

        $category->forceDelete();

        return redirect()->route('admin.product-category.trashed')
            ->with('success', 'Category permanently deleted');
    }
}
