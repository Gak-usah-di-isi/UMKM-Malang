<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleCategory;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $categories = ArticleCategory::all();

        $articles = Article::with('category', 'user')->paginate(6);

        return view('landingPage.articles', compact('categories', 'articles'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        return view('landingPage.detail-article', compact('article'));
    }
}
