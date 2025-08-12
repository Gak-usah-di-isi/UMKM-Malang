<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AdminArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Article::with(['user', 'category'])
            ->withCount(['likes', 'comments']);

        // Search functionality
        if ($request->has('q') && !empty($request->q)) {
            $search = $request->q;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('content', 'like', "%{$search}%");
            });
        }

        // Category filter
        if ($request->has('category') && !empty($request->category)) {
            $query->where('article_category_id', $request->category);
        }

        // Status filter
        if ($request->has('status') && $request->status !== '') {
            $query->where('is_publish', $request->status);
        }

        // Order by latest
        $query->orderBy('created_at', 'desc');

        $articles = $query->paginate(10);
        $categories = ArticleCategory::orderBy('name')->get();

        return view('admin.article.index', compact('articles', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ArticleCategory::orderBy('name')->get();
        return view('admin.article.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'article_category_id' => 'required|exists:article_categories,id',
            'content' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'is_publish' => 'required|boolean',
        ]);

        // Generate slug
        $validated['slug'] = $this->generateUniqueSlug($validated['title']);

        // Handle thumbnail upload
        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('articles/thumbnails', 'public');
        }

        // Add user_id
        $validated['user_id'] = auth()->id();

        $article = Article::create($validated);

        return redirect()
            ->route('admin.articles.index')
            ->with('success', 'Artikel berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $article->load(['user', 'category', 'comments.user'])
            ->loadCount(['likes', 'comments']);

        return view('admin.article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $categories = ArticleCategory::orderBy('name')->get();
        return view('admin.article.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'article_category_id' => 'required|exists:article_categories,id',
            'is_publish' => 'required|boolean',
        ]);

        // Jika judul berubah, update slug
        if ($validated['title'] !== $article->title) {
            $validated['slug'] = $this->generateUniqueSlug($validated['title'], $article->id);
        }

        // Update thumbnail jika ada file baru
        if ($request->hasFile('thumbnail')) {
            // Hapus thumbnail lama kalau ada
            if ($article->thumbnail) {
                Storage::disk('public')->delete($article->thumbnail);
            }
            $validated['thumbnail'] = $request->file('thumbnail')->store('articles/thumbnails', 'public');
        }

        $article->update($validated);

        return redirect()
            ->route('admin.articles.index')
            ->with('success', 'Artikel berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        try {
            // Soft delete the article
            $article->delete();

            return redirect()
                ->route('admin.articles.index')
                ->with('success', 'Artikel berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()
                ->route('admin.articles.index')
                ->with('error', 'Gagal menghapus artikel: ' . $e->getMessage());
        }
    }

    /**
     * Restore the specified soft deleted article.
     */
    public function restore($id)
    {
        $article = Article::withTrashed()->findOrFail($id);
        $article->restore();

        return redirect()
            ->route('admin.articles.index')
            ->with('success', 'Artikel berhasil dipulihkan!');
    }

    /**
     * Permanently delete the specified article.
     */
    public function forceDelete($id)
    {
        $article = Article::withTrashed()->findOrFail($id);

        // Delete thumbnail if exists
        if ($article->thumbnail && Storage::disk('public')->exists($article->thumbnail)) {
            Storage::disk('public')->delete($article->thumbnail);
        }

        $article->forceDelete();

        return redirect()
            ->route('admin.articles.index')
            ->with('success', 'Artikel berhasil dihapus permanen!');
    }

    /**
     * Generate unique slug from title
     */
    private function generateUniqueSlug($title, $ignoreId = null)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $counter = 1;

        while (Article::where('slug', $slug)
            ->when($ignoreId, function ($query) use ($ignoreId) {
                $query->where('id', '!=', $ignoreId);
            })
            ->exists()
        ) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }
}
