<!-- Overview Statistics -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <!-- Total Revenue -->
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                        </svg>
                    </div>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">
                            Total Pendapatan
                        </dt>
                        <dd class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            Rp {{ number_format($overviewStats['total_revenue'] ?? 0, 0, ',', '.') }}
                        </dd>
                        <dd class="text-sm text-gray-500 dark:text-gray-400">
                            <span class="text-green-600">+{{ $overviewStats['revenue_growth'] ?? 0 }}%</span> dari periode sebelumnya
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Orders -->
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                        </svg>
                    </div>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">
                            Total Pesanan
                        </dt>
                        <dd class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ number_format($overviewStats['total_orders'] ?? 0, 0, ',', '.') }}
                        </dd>
                        <dd class="text-sm text-gray-500 dark:text-gray-400">
                            <span class="text-blue-600">+{{ $overviewStats['orders_growth'] ?? 0 }}%</span> dari periode sebelumnya
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Visitors -->
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">
                            Total Pengunjung
                        </dt>
                        <dd class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ number_format($overviewStats['total_visitors'] ?? 0, 0, ',', '.') }}
                        </dd>
                        <dd class="text-sm text-gray-500 dark:text-gray-400">
                            <span class="text-purple-600">+{{ $overviewStats['visitors_growth'] ?? 0 }}%</span> dari periode sebelumnya
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <!-- Conversion Rate -->
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">
                            Tingkat Konversi
                        </dt>
                        <dd class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ number_format($overviewStats['conversion_rate'] ?? 0, 2) }}%
                        </dd>
                        <dd class="text-sm text-gray-500 dark:text-gray-400">
                            <span class="text-orange-600">+{{ $overviewStats['conversion_growth'] ?? 0 }}%</span> dari periode sebelumnya
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Additional Metrics -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
    <!-- Average Order Value -->
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6">
            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-2">Rata-rata Nilai Pesanan</h3>
            <div class="text-3xl font-bold text-blue-600">
                Rp {{ number_format($overviewStats['average_order_value'] ?? 0, 0, ',', '.') }}
            </div>
            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                {{ $overviewStats['aov_change'] > 0 ? '+' : '' }}{{ number_format($overviewStats['aov_change'] ?? 0, 1) }}% dari periode sebelumnya
            </p>
        </div>
    </div>

    <!-- Active UMKM -->
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6">
            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-2">UMKM Aktif</h3>
            <div class="text-3xl font-bold text-green-600">
                {{ number_format($overviewStats['active_umkm'] ?? 0) }}
            </div>
            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                {{ number_format($overviewStats['umkm_with_sales'] ?? 0) }} UMKM memiliki penjualan
            </p>
        </div>
    </div>

    <!-- Top Selling Category -->
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6">
            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-2">Kategori Terlaris</h3>
            <div class="text-3xl font-bold text-purple-600">
                {{ ucfirst($overviewStats['top_category'] ?? 'N/A') }}
            </div>
            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                {{ number_format($overviewStats['top_category_sales'] ?? 0) }} penjualan
            </p>
        </div>
    </div>
</div>
