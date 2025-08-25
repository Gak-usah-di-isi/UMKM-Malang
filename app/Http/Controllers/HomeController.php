<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Event;
use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::with('photos')
            ->orderBy('total_sales', 'desc')
            ->take(3)
            ->get();

        $favoriteProducts = Product::where('is_favorite', true)
            ->orderBy('total_sales', 'desc')
            ->take(3)
            ->get();

        $newestProducts = Product::orderBy('created_at', 'desc')->take(3)->get();

        $events = Event::orderBy('start_time', 'desc')->take(4)->get();

        $articles = Article::orderBy('created_at', 'desc')->take(4)->get();

        return view('landingPage.index', compact('featuredProducts', 'favoriteProducts', 'newestProducts', 'events', 'articles'));
    }
}
