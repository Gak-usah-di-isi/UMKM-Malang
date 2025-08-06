<?php

namespace App\Http\Controllers\Umkm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Umkm;

class DashboardController extends Controller
{
    public function index()
    {
        return view('umkm.dashboard.index');
    }
}
