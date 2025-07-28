<!-- Sales Chart -->
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                Tren Penjualan
            </h3>
            <div class="flex space-x-2">
                <button type="button" onclick="changeSalesChartPeriod('daily')" class="sales-period-btn px-3 py-1 text-sm rounded-md bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                    Harian
                </button>
                <button type="button" onclick="changeSalesChartPeriod('weekly')" class="sales-period-btn px-3 py-1 text-sm rounded-md text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700">
                    Mingguan
                </button>
                <button type="button" onclick="changeSalesChartPeriod('monthly')" class="sales-period-btn px-3 py-1 text-sm rounded-md text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700">
                    Bulanan
                </button>
            </div>
        </div>
        
        <!-- Chart Container -->
        <div class="h-80">
            <canvas id="salesChart" width="400" height="200"></canvas>
        </div>
        
        <!-- Chart Legend/Summary -->
        <div class="mt-4 grid grid-cols-3 gap-4 pt-4 border-t border-gray-200 dark:border-gray-600">
            <div class="text-center">
                <div class="text-2xl font-bold text-blue-600">{{ number_format($salesChartData['total_sales'] ?? 0) }}</div>
                <div class="text-sm text-gray-500 dark:text-gray-400">Total Penjualan</div>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold text-green-600">Rp {{ number_format($salesChartData['total_revenue'] ?? 0, 0, ',', '.') }}</div>
                <div class="text-sm text-gray-500 dark:text-gray-400">Total Pendapatan</div>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold text-purple-600">Rp {{ number_format($salesChartData['average_sale'] ?? 0, 0, ',', '.') }}</div>
                <div class="text-sm text-gray-500 dark:text-gray-400">Rata-rata per Transaksi</div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
let salesChart;

// Sample data - replace with actual data from backend
const salesData = {
    daily: {
        labels: {!! json_encode($salesChartData['daily']['labels'] ?? ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']) !!},
        sales: {!! json_encode($salesChartData['daily']['sales'] ?? [12, 19, 8, 15, 10, 22, 18]) !!},
        revenue: {!! json_encode($salesChartData['daily']['revenue'] ?? [1200000, 1900000, 800000, 1500000, 1000000, 2200000, 1800000]) !!}
    },
    weekly: {
        labels: {!! json_encode($salesChartData['weekly']['labels'] ?? ['Week 1', 'Week 2', 'Week 3', 'Week 4']) !!},
        sales: {!! json_encode($salesChartData['weekly']['sales'] ?? [50, 75, 60, 85]) !!},
        revenue: {!! json_encode($salesChartData['weekly']['revenue'] ?? [5000000, 7500000, 6000000, 8500000]) !!}
    },
    monthly: {
        labels: {!! json_encode($salesChartData['monthly']['labels'] ?? ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']) !!},
        sales: {!! json_encode($salesChartData['monthly']['sales'] ?? [200, 250, 180, 300, 220, 280]) !!},
        revenue: {!! json_encode($salesChartData['monthly']['revenue'] ?? [20000000, 25000000, 18000000, 30000000, 22000000, 28000000]) !!}
    }
};

function initSalesChart() {
    const ctx = document.getElementById('salesChart').getContext('2d');
    
    salesChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: salesData.daily.labels,
            datasets: [{
                label: 'Jumlah Penjualan',
                data: salesData.daily.sales,
                borderColor: 'rgb(59, 130, 246)',
                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                borderWidth: 2,
                fill: true,
                tension: 0.1,
                yAxisID: 'y'
            }, {
                label: 'Pendapatan (Rp)',
                data: salesData.daily.revenue,
                borderColor: 'rgb(16, 185, 129)',
                backgroundColor: 'rgba(16, 185, 129, 0.1)',
                borderWidth: 2,
                fill: false,
                tension: 0.1,
                yAxisID: 'y1'
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
                            if (context.datasetIndex === 1) {
                                return 'Pendapatan: Rp ' + context.parsed.y.toLocaleString('id-ID');
                            }
                            return context.dataset.label + ': ' + context.parsed.y;
                        }
                    }
                }
            },
            scales: {
                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Periode'
                    }
                },
                y: {
                    type: 'linear',
                    display: true,
                    position: 'left',
                    title: {
                        display: true,
                        text: 'Jumlah Penjualan'
                    }
                },
                y1: {
                    type: 'linear',
                    display: true,
                    position: 'right',
                    title: {
                        display: true,
                        text: 'Pendapatan (Rp)'
                    },
                    grid: {
                        drawOnChartArea: false,
                    },
                    ticks: {
                        callback: function(value) {
                            return 'Rp ' + value.toLocaleString('id-ID');
                        }
                    }
                }
            }
        }
    });
}

function changeSalesChartPeriod(period) {
    // Update button states
    document.querySelectorAll('.sales-period-btn').forEach(btn => {
        btn.classList.remove('bg-blue-100', 'text-blue-800', 'dark:bg-blue-900', 'dark:text-blue-200');
        btn.classList.add('text-gray-600', 'dark:text-gray-400');
    });
    
    event.target.classList.add('bg-blue-100', 'text-blue-800', 'dark:bg-blue-900', 'dark:text-blue-200');
    event.target.classList.remove('text-gray-600', 'dark:text-gray-400');
    
    // Update chart data
    salesChart.data.labels = salesData[period].labels;
    salesChart.data.datasets[0].data = salesData[period].sales;
    salesChart.data.datasets[1].data = salesData[period].revenue;
    salesChart.update();
}

// Initialize chart when page loads
document.addEventListener('DOMContentLoaded', function() {
    initSalesChart();
});
</script>
