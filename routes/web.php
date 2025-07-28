<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Admin Dashboard
    Route::get('/', function () {
        // Sample data for dashboard
        $data = [
            'totalUmkm' => 150,
            'activeProducts' => 1250,
            'pendingVerifications' => 25,
            'monthlyRevenue' => 125000000,
            'recentUmkm' => [
                [
                    'id' => 1,
                    'name' => 'Warung Makan Bu Sari',
                    'category' => 'Makanan',
                    'location' => 'Malang',
                    'status' => 'pending',
                    'created_at' => Carbon::now()->subHours(2)
                ],
                [
                    'id' => 2,
                    'name' => 'Kerajinan Anyaman',
                    'category' => 'Kerajinan',
                    'location' => 'Batu',
                    'status' => 'approved',
                    'created_at' => Carbon::now()->subHours(5)
                ],
                [
                    'id' => 3,
                    'name' => 'Fashion Hijab Modern',
                    'category' => 'Fashion',
                    'location' => 'Malang',
                    'status' => 'pending',
                    'created_at' => Carbon::now()->subHours(8)
                ]
            ],
            'pendingProducts' => [
                [
                    'id' => 1,
                    'name' => 'Nasi Gudeg Spesial',
                    'umkm_name' => 'Warung Makan Bu Sari',
                    'price' => 25000,
                    'image' => '/images/placeholder-product.jpg'
                ],
                [
                    'id' => 2,
                    'name' => 'Tas Anyaman Pandan',
                    'umkm_name' => 'Kerajinan Anyaman',
                    'price' => 150000,
                    'image' => '/images/placeholder-product.jpg'
                ]
            ]
        ];
        return view('admin.dashboard', $data);
    })->name('dashboard');

    // UMKM Management (Consolidated)
    Route::get('/umkm', function () {
        return view('admin.umkm-simple', [
            'stats' => [
                'total' => 156,
                'approved' => 89,
                'pending' => 45,
                'rejected' => 22
            ],
            'umkmList' => [
                [
                    'id' => 1,
                    'name' => 'Warung Makan Bu Sari',
                    'owner_name' => 'Sari Wulandari',
                    'category' => 'makanan',
                    'city' => 'Malang',
                    'province' => 'Jawa Timur',
                    'status' => 'approved',
                    'products_count' => 15,
                    'created_at' => Carbon::now()->subDays(30),
                    'logo' => null
                ],
                [
                    'id' => 2,
                    'name' => 'Kerajinan Bambu Indah',
                    'owner_name' => 'Ahmad Fauzi',
                    'category' => 'kerajinan',
                    'city' => 'Batu',
                    'province' => 'Jawa Timur',
                    'status' => 'pending',
                    'products_count' => 8,
                    'created_at' => Carbon::now()->subDays(15),
                    'logo' => null
                ],
                [
                    'id' => 3,
                    'name' => 'Fashion Store Anisa',
                    'owner_name' => 'Anisa Rahma',
                    'category' => 'fashion',
                    'city' => 'Malang',
                    'province' => 'Jawa Timur',
                    'status' => 'approved',
                    'products_count' => 32,
                    'created_at' => Carbon::now()->subDays(45),
                    'logo' => null
                ],
                [
                    'id' => 4,
                    'name' => 'Elektronik Jaya',
                    'owner_name' => 'Budi Santoso',
                    'category' => 'elektronik',
                    'city' => 'Kepanjen',
                    'province' => 'Jawa Timur',
                    'status' => 'rejected',
                    'products_count' => 0,
                    'created_at' => Carbon::now()->subDays(10),
                    'logo' => null
                ]
            ],
            'currentPage' => 1,
            'perPage' => 10,
            'total' => 156,
            'totalPages' => 16
        ]);
    })->name('umkm.index');

    // Product Management (Consolidated)
    Route::get('/products', function () {
        return view('admin.products-consolidated', [
            'stats' => [
                'total' => 1245,
                'approved' => 1089,
                'pending' => 134,
                'rejected' => 22
            ],
            'umkmList' => [
                ['id' => 1, 'name' => 'Warung Bu Sari'],
                ['id' => 2, 'name' => 'Fashion Store Anisa'],
                ['id' => 3, 'name' => 'Kerajinan Bambu'],
                ['id' => 4, 'name' => 'Elektronik Jaya']
            ],
            'productList' => [
                [
                    'id' => 1,
                    'name' => 'Gudeg Bu Sari',
                    'sku' => 'GDS001',
                    'umkm_name' => 'Warung Bu Sari',
                    'umkm_location' => 'Malang',
                    'category' => 'makanan',
                    'price' => 15000,
                    'status' => 'approved',
                    'created_at' => Carbon::now()->subDays(5),
                    'image' => null
                ],
                [
                    'id' => 2,
                    'name' => 'Tas Rajut Handmade',
                    'sku' => 'TRH002',
                    'umkm_name' => 'Kerajinan Bambu',
                    'umkm_location' => 'Batu',
                    'category' => 'kerajinan',
                    'price' => 85000,
                    'status' => 'pending',
                    'created_at' => Carbon::now()->subDays(2),
                    'image' => null
                ],
                [
                    'id' => 3,
                    'name' => 'Kemeja Batik Modern',
                    'sku' => 'KBM003',
                    'umkm_name' => 'Fashion Store Anisa',
                    'umkm_location' => 'Malang',
                    'category' => 'fashion',
                    'price' => 125000,
                    'status' => 'approved',
                    'created_at' => Carbon::now()->subDays(8),
                    'image' => null
                ],
                [
                    'id' => 4,
                    'name' => 'Speaker Portable',
                    'sku' => 'SPK004',
                    'umkm_name' => 'Elektronik Jaya',
                    'umkm_location' => 'Kepanjen',
                    'category' => 'elektronik',
                    'price' => 450000,
                    'status' => 'rejected',
                    'created_at' => Carbon::now()->subDays(1),
                    'image' => null
                ]
            ],
            'currentPage' => 1,
            'perPage' => 20,
            'total' => 1245,
            'totalPages' => 63
        ]);
    })->name('products.index');

    // Statistics & Analytics (Consolidated)
    Route::get('/statistics', function () {
        return view('admin.statistics-consolidated', [
            'filters' => [
                'start_date' => request('start_date', date('Y-m-01')),
                'end_date' => request('end_date', date('Y-m-d'))
            ],
            'overview' => [
                'total_revenue' => 125000000,
                'revenue_growth' => 12.5,
                'active_umkm' => 89,
                'umkm_growth' => 8.4,
                'total_products' => 1245,
                'products_growth' => 15.2,
                'total_visitors' => 25432,
                'visitors_growth' => 6.7
            ],
            'salesData' => [
                ['date' => '2025-07-21', 'amount' => 5200000],
                ['date' => '2025-07-22', 'amount' => 6800000],
                ['date' => '2025-07-23', 'amount' => 4500000],
                ['date' => '2025-07-24', 'amount' => 7200000],
                ['date' => '2025-07-25', 'amount' => 8100000],
                ['date' => '2025-07-26', 'amount' => 6900000],
                ['date' => '2025-07-27', 'amount' => 9300000]
            ],
            'revenueBreakdown' => [
                ['category' => 'Makanan', 'amount' => 50000000, 'percentage' => 40, 'color' => '#3B82F6'],
                ['category' => 'Fashion', 'amount' => 37500000, 'percentage' => 30, 'color' => '#10B981'],
                ['category' => 'Kerajinan', 'amount' => 25000000, 'percentage' => 20, 'color' => '#F59E0B'],
                ['category' => 'Lainnya', 'amount' => 12500000, 'percentage' => 10, 'color' => '#EF4444']
            ],
            'topUmkm' => [
                ['name' => 'Warung Bu Sari', 'category' => 'Makanan', 'views' => 1234, 'products' => 15],
                ['name' => 'Fashion Store Anisa', 'category' => 'Fashion', 'views' => 987, 'products' => 32],
                ['name' => 'Kerajinan Bambu', 'category' => 'Kerajinan', 'views' => 756, 'products' => 8],
                ['name' => 'Elektronik Jaya', 'category' => 'Elektronik', 'views' => 543, 'products' => 28],
                ['name' => 'Snack Malang', 'category' => 'Makanan', 'views' => 432, 'products' => 12]
            ],
            'topProducts' => [
                ['name' => 'Gudeg Bu Sari', 'umkm' => 'Warung Bu Sari', 'sales' => 234, 'revenue' => 2340000],
                ['name' => 'Tas Rajut', 'umkm' => 'Kerajinan Bambu', 'sales' => 156, 'revenue' => 1560000],
                ['name' => 'Kemeja Batik', 'umkm' => 'Fashion Store Anisa', 'sales' => 134, 'revenue' => 2680000],
                ['name' => 'Speaker Bluetooth', 'umkm' => 'Elektronik Jaya', 'sales' => 98, 'revenue' => 9800000],
                ['name' => 'Keripik Tempe', 'umkm' => 'Snack Malang', 'sales' => 87, 'revenue' => 435000]
            ]
        ]);
    })->name('statistics.index');

    // Export Data (Consolidated)
    Route::get('/exports', function () {
        return view('admin.exports-consolidated', [
            'exportStats' => [
                'umkm_count' => 156,
                'products_count' => 1245,
                'sales_count' => 2847,
                'users_count' => 543
            ],
            'scheduledExports' => [
                [
                    'id' => 1,
                    'name' => 'Laporan UMKM Bulanan',
                    'description' => 'Export data UMKM setiap bulan',
                    'type' => 'umkm',
                    'schedule' => 'Setiap tanggal 1',
                    'status' => 'active',
                    'last_run' => Carbon::now()->subDays(5)
                ],
                [
                    'id' => 2,
                    'name' => 'Laporan Penjualan Mingguan',
                    'description' => 'Export data penjualan setiap minggu',
                    'type' => 'sales',
                    'schedule' => 'Setiap Senin',
                    'status' => 'active',
                    'last_run' => Carbon::now()->subDays(2)
                ]
            ],
            'exportHistory' => [
                [
                    'id' => 1,
                    'filename' => 'umkm_data_2025_07_27.xlsx',
                    'type' => 'umkm',
                    'format' => 'excel',
                    'size' => '2.5 MB',
                    'status' => 'completed',
                    'created_at' => Carbon::now()->subHours(2),
                    'download_url' => '/downloads/umkm_data_2025_07_27.xlsx'
                ],
                [
                    'id' => 2,
                    'filename' => 'products_report_2025_07_26.pdf',
                    'type' => 'products',
                    'format' => 'pdf',
                    'size' => '1.8 MB',
                    'status' => 'completed',
                    'created_at' => Carbon::now()->subHours(24),
                    'download_url' => '/downloads/products_report_2025_07_26.pdf'
                ],
                [
                    'id' => 3,
                    'filename' => 'sales_data_processing.xlsx',
                    'type' => 'sales',
                    'format' => 'excel',
                    'size' => 'Processing...',
                    'status' => 'processing',
                    'created_at' => Carbon::now()->subMinutes(5),
                    'download_url' => null
                ]
            ]
        ]);
    })->name('exports.index');

});

require __DIR__.'/auth.php';
