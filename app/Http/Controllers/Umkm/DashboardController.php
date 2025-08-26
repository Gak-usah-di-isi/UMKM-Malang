<?php

namespace App\Http\Controllers\Umkm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Umkm;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = auth()->id();
        $umkm = Umkm::where('user_id', $userId)->firstOrFail();


        $totalProduct   = Product::where('umkm_id', $umkm->id)->count();
        $totalFavorite  = Product::where('umkm_id', $umkm->id)->where('is_favorite', 1)->count();
        $totalFeatured  = Product::where('umkm_id', $umkm->id)->where('is_featured', 1)->count();
        $totalStock     = Product::where('umkm_id', $umkm->id)->sum(DB::raw('COALESCE(stock,0)'));


        $year = now()->year;
        $byMonth = Product::where('umkm_id', $umkm->id)
            ->whereYear('created_at', $year)
            ->selectRaw('MONTH(created_at) as m, COUNT(*) as total')
            ->groupBy('m')
            ->pluck('total', 'm');

        $bulanId = [1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $labels = [];
        $series = [];
        for ($i = 1; $i <= 12; $i++) {
            $labels[] = $bulanId[$i];
            $series[] = (int)($byMonth[$i] ?? 0);
        }


        $recentProducts = Product::where('umkm_id', $umkm->id)
            ->latest('created_at')
            ->with('category')
            ->take(5)
            ->get();

        return view('umkm.dashboard.index', [
            'umkm' => $umkm,
            'totalProduct' => $totalProduct,
            'totalFavorite' => $totalFavorite,
            'totalFeatured' => $totalFeatured,
            'totalStock' => $totalStock,
            'chart' => [
                'labels' => $labels,
                'data' => $series,
                'year' => $year,
            ],
            'recentProducts' => $recentProducts,
        ]);
    }
}
