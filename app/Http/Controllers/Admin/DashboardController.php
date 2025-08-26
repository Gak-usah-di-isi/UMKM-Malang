<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Umkm;
use App\Models\Event;
use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        $totalUmkm       = Umkm::count();

        $verifiedUmkm    = Umkm::where('verification_status', 'verified')->count();
        $unverifiedUmkm  = Umkm::where('verification_status', '!=', 'verified')
            ->orWhereNull('verification_status')->count();

        $totalEvent      = Event::count();
        $totalAgenda     = Article::count();

        $recentUmkm = Umkm::with(['user', 'category'])
            ->latest('created_at')
            ->take(5)
            ->get();

        $year = Carbon::now()->year;

        $umkmByMonth = Umkm::selectRaw('MONTH(created_at) as m, COUNT(*) as total')
            ->whereYear('created_at', $year)
            ->groupBy('m')
            ->orderBy('m')
            ->pluck('total', 'm');

        $labels = [];
        $data   = [];
        for ($i = 1; $i <= 12; $i++) {
            $labels[] = Carbon::create()->month($i)->translatedFormat('F');
            $data[]   = (int) ($umkmByMonth[$i] ?? 0);
        }

        return view('admin.dashboard.index', [
            'totalUmkm'      => $totalUmkm,
            'verifiedUmkm'   => $verifiedUmkm,
            'unverifiedUmkm' => $unverifiedUmkm,
            'totalEvent'     => $totalEvent,
            'totalAgenda'    => $totalAgenda,
            'recentUmkm'     => $recentUmkm,
            'chart'          => [
                'labels' => $labels,
                'data'   => $data,
                'year'   => $year,
            ],
        ]);
    }
}
