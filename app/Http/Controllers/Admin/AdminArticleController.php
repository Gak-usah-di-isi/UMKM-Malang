<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Article;
use App\Models\ArticleCategory;

class AdminArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with(['category', 'user'])
            ->latest()
            ->paginate(12);

        return view('admin.article.index', compact('articles'));
    }

    public function create()
    {
        $categories = ArticleCategory::all();
        return view('admin.article.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'article_category_id' => 'required|exists:article_categories,id',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_publish' => 'boolean',
        ]);

        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('articles/thumbnails', 'public');
        }

        Article::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'content' => $request->content,
            'article_category_id' => $request->article_category_id,
            'thumbnail' => $thumbnailPath,
            'is_publish' => $request->has('is_publish'),
        ]);

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article berhasil dibuat!');
    }

    public function show($slug)
    {
        $article = Article::with(['category', 'user'])->where('slug', $slug)->firstOrFail();
        return view('admin.article.show', compact('article'));
    }

    public function edit($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $categories = ArticleCategory::all();
        return view('admin.article.edit', compact('article', 'categories'));
    }

    public function update(Request $request, $slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'article_category_id' => 'required|exists:article_categories,id',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_publish' => 'boolean',
        ]);

        $thumbnailPath = $article->thumbnail;
        if ($request->hasFile('thumbnail')) {
            if ($thumbnailPath) {
                Storage::disk('public')->delete($thumbnailPath);
            }
            $thumbnailPath = $request->file('thumbnail')->store('articles/thumbnails', 'public');
        }

        $article->update([
            'title' => $request->title,
            'content' => $request->content,
            'article_category_id' => $request->article_category_id,
            'thumbnail' => $thumbnailPath,
            'is_publish' => $request->has('is_publish'),
        ]);

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article berhasil diperbarui!');
    }

    public function destroy($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        if ($article->thumbnail) {
            Storage::disk('public')->delete($article->thumbnail);
        }

        $article->delete();

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article berhasil dihapus!');
    }
}
