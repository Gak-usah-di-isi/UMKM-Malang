<!-- Visitor Chart -->
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                Statistik Pengunjung
            </h3>
            <div class="flex space-x-2">
                <button type="button" onclick="changeVisitorChartType('line')" class="visitor-chart-btn px-3 py-1 text-sm rounded-md bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-200">
                    Garis
                </button>
                <button type="button" onclick="changeVisitorChartType('bar')" class="visitor-chart-btn px-3 py-1 text-sm rounded-md text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700">
                    Batang
                </button>
            </div>
        </div>
        
        <!-- Chart Container -->
        <div class="h-80">
            <canvas id="visitorChart" width="400" height="200"></canvas>
        </div>
        
        <!-- Visitor Metrics -->
        <div class="mt-4 grid grid-cols-4 gap-4 pt-4 border-t border-gray-200 dark:border-gray-600">
            <div class="text-center">
                <div class="text-lg font-bold text-purple-600">{{ number_format($visitorData['unique_visitors'] ?? 0) }}</div>
                <div class="text-xs text-gray-500 dark:text-gray-400">Pengunjung Unik</div>
            </div>
            <div class="text-center">
                <div class="text-lg font-bold text-blue-600">{{ number_format($visitorData['page_views'] ?? 0) }}</div>
                <div class="text-xs text-gray-500 dark:text-gray-400">Tampilan Halaman</div>
            </div>
            <div class="text-center">
                <div class="text-lg font-bold text-green-600">{{ $visitorData['avg_session_duration'] ?? '0:00' }}</div>
                <div class="text-xs text-gray-500 dark:text-gray-400">Durasi Rata-rata</div>
            </div>
            <div class="text-center">
                <div class="text-lg font-bold text-orange-600">{{ number_format($visitorData['bounce_rate'] ?? 0, 1) }}%</div>
                <div class="text-xs text-gray-500 dark:text-gray-400">Bounce Rate</div>
            </div>
        </div>
        
        <!-- Traffic Sources -->
        <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-600">
            <h4 class="text-sm font-medium text-gray-900 dark:text-gray-100 mb-3">Sumber Traffic</h4>
            <div class="space-y-2">
                @foreach($visitorData['traffic_sources'] ?? [] as $source)
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-3 h-3 rounded-full mr-2" style="background-color: {{ $source['color'] ?? '#6B7280' }}"></div>
                        <span class="text-sm text-gray-700 dark:text-gray-300">{{ $source['name'] ?? 'Unknown' }}</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-sm text-gray-500 dark:text-gray-400">{{ number_format($source['visitors'] ?? 0) }}</span>
                        <span class="text-xs text-gray-400">({{ number_format($source['percentage'] ?? 0, 1) }}%)</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
let visitorChart;

// Sample visitor data - replace with actual data from backend
const visitorData = {
    labels: {!! json_encode($visitorChartData['labels'] ?? ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']) !!},
    uniqueVisitors: {!! json_encode($visitorChartData['unique_visitors'] ?? [150, 200, 180, 220, 170, 250, 300]) !!},
    pageViews: {!! json_encode($visitorChartData['page_views'] ?? [450, 600, 540, 660, 510, 750, 900]) !!},
    sessions: {!! json_encode($visitorChartData['sessions'] ?? [180, 240, 216, 264, 204, 300, 360]) !!}
};

function initVisitorChart() {
    const ctx = document.getElementById('visitorChart').getContext('2d');
    
    visitorChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: visitorData.labels,
            datasets: [{
                label: 'Pengunjung Unik',
                data: visitorData.uniqueVisitors,
                borderColor: 'rgb(147, 51, 234)',
                backgroundColor: 'rgba(147, 51, 234, 0.1)',
                borderWidth: 2,
                fill: true,
                tension: 0.1
            }, {
                label: 'Tampilan Halaman',
                data: visitorData.pageViews,
                borderColor: 'rgb(59, 130, 246)',
                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                borderWidth: 2,
                fill: false,
                tension: 0.1
            }, {
                label: 'Sesi',
                data: visitorData.sessions,
                borderColor: 'rgb(16, 185, 129)',
                backgroundColor: 'rgba(16, 185, 129, 0.1)',
                borderWidth: 2,
                fill: false,
                tension: 0.1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            interaction: {
                mode: 'index',
                intersect: false,
            },
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.dataset.label + ': ' + context.parsed.y.toLocaleString('id-ID');
                        }
                    }
                }
            },
            scales: {
                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Hari'
                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Jumlah'
                    },
                    beginAtZero: true
                }
            }
        }
    });
}

function changeVisitorChartType(type) {
    // Update button states
    document.querySelectorAll('.visitor-chart-btn').forEach(btn => {
        btn.classList.remove('bg-purple-100', 'text-purple-800', 'dark:bg-purple-900', 'dark:text-purple-200');
        btn.classList.add('text-gray-600', 'dark:text-gray-400');
    });
    
    event.target.classList.add('bg-purple-100', 'text-purple-800', 'dark:bg-purple-900', 'dark:text-purple-200');
    event.target.classList.remove('text-gray-600', 'dark:text-gray-400');
    
    // Update chart type
    visitorChart.config.type = type;
    
    // Adjust fill for different chart types
    if (type === 'bar') {
        visitorChart.data.datasets.forEach(dataset => {
            dataset.fill = false;
        });
    } else {
        visitorChart.data.datasets[0].fill = true;
        visitorChart.data.datasets[1].fill = false;
        visitorChart.data.datasets[2].fill = false;
    }
    
    visitorChart.update();
}

// Initialize chart when page loads
document.addEventListener('DOMContentLoaded', function() {
    initVisitorChart();
});
</script>
