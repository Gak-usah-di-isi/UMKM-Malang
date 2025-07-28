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

<script>
// Initialize revenue breakdown chart
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('revenueChart');
    if (ctx) {
        const revenueData = {!! json_encode($revenueBreakdown ?? [
            ['category' => 'Makanan', 'amount' => 50000000, 'percentage' => 40, 'color' => '#3B82F6'],
            ['category' => 'Fashion', 'amount' => 37500000, 'percentage' => 30, 'color' => '#10B981'],
            ['category' => 'Kerajinan', 'amount' => 25000000, 'percentage' => 20, 'color' => '#F59E0B'],
            ['category' => 'Lainnya', 'amount' => 12500000, 'percentage' => 10, 'color' => '#EF4444']
        ]) !!};
        
        new Chart(ctx, {
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
});
</script>
