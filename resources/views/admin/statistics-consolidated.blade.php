<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Statistik & Analytics') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Date Range Filter -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4 sm:mb-0">
                            Filter Periode
                        </h3>
                        <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-4">
                            <div>
                                <input type="date" id="start_date" name="start_date" 
                                       class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300"
                                       value="{{ $filters['start_date'] ?? date('Y-m-01') }}">
                            </div>
                            <div>
                                <input type="date" id="end_date" name="end_date" 
                                       class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300"
                                       value="{{ $filters['end_date'] ?? date('Y-m-d') }}">
                            </div>
                            <button type="button" onclick="applyDateFilter()" 
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                Terapkan
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Overview Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-blue-500 rounded-md flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">Total Pendapatan</dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                                            Rp {{ number_format($overview['total_revenue'] ?? 125000000, 0, ',', '.') }}
                                        </div>
                                        <div class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                            <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                            {{ $overview['revenue_growth'] ?? '+12.5' }}%
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-green-500 rounded-md flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-4m-5 0H9m0 0H5m0 0h2M7 7h.01M7 3h.01"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">Total UMKM Aktif</dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                                            {{ $overview['active_umkm'] ?? 89 }}
                                        </div>
                                        <div class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                            <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                            {{ $overview['umkm_growth'] ?? '+8.4' }}%
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-yellow-500 rounded-md flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">Total Produk</dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                                            {{ $overview['total_products'] ?? 1245 }}
                                        </div>
                                        <div class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                            <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                            {{ $overview['products_growth'] ?? '+15.2' }}%
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-purple-500 rounded-md flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">Total Kunjungan</dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                                            {{ number_format($overview['total_visitors'] ?? 25432, 0, ',', '.') }}
                                        </div>
                                        <div class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                            <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                            {{ $overview['visitors_growth'] ?? '+6.7' }}%
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                
                <!-- Sales Trend Chart -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                            Tren Penjualan (7 Hari Terakhir)
                        </h3>
                        <div class="h-64">
                            <canvas id="salesChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Revenue Breakdown -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                            Breakdown Pendapatan
                        </h3>
                        
                        <!-- Pie Chart Container -->
                        <div class="h-64 mb-4">
                            <canvas id="revenueChart"></canvas>
                        </div>
                        
                        <!-- Legend -->
                        <div class="space-y-2">
                            @foreach($revenueBreakdown ?? [] as $category)
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="w-3 h-3 rounded-full mr-2" style="background-color: {{ $category['color'] ?? '#3B82F6' }}"></div>
                                        <span class="text-sm text-gray-600 dark:text-gray-300">{{ ucfirst($category['category'] ?? 'Kategori') }}</span>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ $category['percentage'] ?? 0 }}%</span>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">Rp {{ number_format($category['amount'] ?? 0, 0, ',', '.') }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Visitor Chart -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                        Kunjungan Website (30 Hari Terakhir)
                    </h3>
                    <div class="h-80">
                        <canvas id="visitorChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Top Performing Content -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                
                <!-- Top UMKM -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                            UMKM Terpopuler
                        </h3>
                        <div class="space-y-4">
                            @foreach($topUmkm ?? [] as $index => $umkm)
                                <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-8 h-8 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center">
                                            <span class="text-sm font-medium text-blue-600 dark:text-blue-300">{{ $index + 1 }}</span>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ $umkm['name'] ?? 'N/A' }}</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">{{ $umkm['category'] ?? 'N/A' }}</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ $umkm['views'] ?? 0 }} views</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">{{ $umkm['products'] ?? 0 }} produk</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Top Products -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                            Produk Terlaris
                        </h3>
                        <div class="space-y-4">
                            @foreach($topProducts ?? [] as $index => $product)
                                <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-8 h-8 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center">
                                            <span class="text-sm font-medium text-green-600 dark:text-green-300">{{ $index + 1 }}</span>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ $product['name'] ?? 'N/A' }}</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">{{ $product['umkm'] ?? 'N/A' }}</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ $product['sales'] ?? 0 }} terjual</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Rp {{ number_format($product['revenue'] ?? 0, 0, ',', '.') }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    {{-- Include chart base functionality --}}
    @include('admin.partials.chart-base')
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // Sales Chart
        const salesCtx = document.getElementById('salesChart');
        if (salesCtx) {
            const salesData = {!! json_encode($salesData ?? [
                ['date' => '2025-07-21', 'amount' => 5200000],
                ['date' => '2025-07-22', 'amount' => 6800000],
                ['date' => '2025-07-23', 'amount' => 4500000],
                ['date' => '2025-07-24', 'amount' => 7200000],
                ['date' => '2025-07-25', 'amount' => 8100000],
                ['date' => '2025-07-26', 'amount' => 6900000],
                ['date' => '2025-07-27', 'amount' => 9300000]
            ]) !!};
            
            new Chart(salesCtx, {
                type: 'line',
                data: {
                    labels: salesData.map(item => {
                        const date = new Date(item.date);
                        return date.toLocaleDateString('id-ID', { weekday: 'short', day: 'numeric' });
                    }),
                    datasets: [{
                        label: 'Penjualan (Rp)',
                        data: salesData.map(item => item.amount),
                        borderColor: '#3B82F6',
                        backgroundColor: 'rgba(59, 130, 246, 0.1)',
                        borderWidth: 2,
                        fill: true,
                        tension: 0.4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return 'Rp ' + (value / 1000000).toFixed(1) + 'M';
                                }
                            }
                        }
                    }
                }
            });
        }

        // Revenue Breakdown Chart
        const revenueCtx = document.getElementById('revenueChart');
        if (revenueCtx) {
            const revenueData = {!! json_encode($revenueBreakdown ?? [
                ['category' => 'Makanan', 'amount' => 50000000, 'percentage' => 40, 'color' => '#3B82F6'],
                ['category' => 'Fashion', 'amount' => 37500000, 'percentage' => 30, 'color' => '#10B981'],
                ['category' => 'Kerajinan', 'amount' => 25000000, 'percentage' => 20, 'color' => '#F59E0B'],
                ['category' => 'Lainnya', 'amount' => 12500000, 'percentage' => 10, 'color' => '#EF4444']
            ]) !!};
            
            new Chart(revenueCtx, {
                type: 'doughnut',
                data: {
                    labels: revenueData.map(item => item.category),
                    datasets: [{
                        data: revenueData.map(item => item.percentage),
                        backgroundColor: revenueData.map(item => item.color),
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.label + ': ' + context.parsed + '% (Rp ' + 
                                           revenueData[context.dataIndex].amount.toLocaleString('id-ID') + ')';
                                }
                            }
                        }
                    }
                }
            });
        }

        // Visitor Chart
        const visitorCtx = document.getElementById('visitorChart');
        if (visitorCtx) {
            const visitorData = {!! json_encode($visitorData ?? array_map(function($i) {
                return [
                    'date' => date('Y-m-d', strtotime("-{$i} days")),
                    'visitors' => rand(150, 800)
                ];
            }, range(29, 0))) !!};
            
            new Chart(visitorCtx, {
                type: 'bar',
                data: {
                    labels: visitorData.map(item => {
                        const date = new Date(item.date);
                        return date.toLocaleDateString('id-ID', { day: 'numeric', month: 'short' });
                    }),
                    datasets: [{
                        label: 'Kunjungan',
                        data: visitorData.map(item => item.visitors),
                        backgroundColor: 'rgba(168, 85, 247, 0.8)',
                        borderColor: '#A855F7',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
    });

    // Date filter function
    function applyDateFilter() {
        const startDate = document.getElementById('start_date').value;
        const endDate = document.getElementById('end_date').value;
        
        if (startDate && endDate) {
            // Add loading state
            const button = event.target;
            const originalText = button.textContent;
            button.textContent = 'Loading...';
            button.disabled = true;
            
            // Simulate API call - replace with actual implementation
            setTimeout(() => {
                button.textContent = originalText;
                button.disabled = false;
                // Reload page with new filters or update charts via AJAX
                window.location.href = `?start_date=${startDate}&end_date=${endDate}`;
            }, 1000);
        }
    }
    </script>
</x-app-layout>
