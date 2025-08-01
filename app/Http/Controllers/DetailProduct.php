<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailProduct extends Controller
{
    /**
     * Display the product detail page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('landingPage.productDetail');
    }
}
