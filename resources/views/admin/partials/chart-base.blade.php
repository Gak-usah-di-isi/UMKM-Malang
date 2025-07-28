<!-- Base Chart Component - untuk chart yang sering dipakai -->
<div id="chartContainer{{ $chartId ?? 'Default' }}" class="chart-container">
    <canvas id="{{ $chartId ?? 'defaultChart' }}" class="w-full h-full"></canvas>
</div>

<script>
// Base Chart Manager untuk menghindari duplikasi Chart.js logic
class ChartManager {
    static charts = {};
    
    static createChart(chartId, config) {
        // Destroy existing chart if exists
        if (this.charts[chartId]) {
            this.charts[chartId].destroy();
        }
        
        const canvas = document.getElementById(chartId);
        if (!canvas) {
            console.error(`Canvas with ID ${chartId} not found`);
            return null;
        }
        
        this.charts[chartId] = new Chart(canvas, config);
        return this.charts[chartId];
    }
    
    static destroyChart(chartId) {
        if (this.charts[chartId]) {
            this.charts[chartId].destroy();
            delete this.charts[chartId];
        }
    }
    
    static updateChart(chartId, newData) {
        if (this.charts[chartId]) {
            this.charts[chartId].data = newData;
            this.charts[chartId].update();
        }
    }
    
    // Common chart configurations
    static getLineChartConfig(data, options = {}) {
        return {
            type: 'line',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: options.showLegend !== false
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false,
                    }
                },
                scales: {
                    x: {
                        display: true,
                        grid: {
                            display: options.showGrid !== false
                        }
                    },
                    y: {
                        display: true,
                        beginAtZero: true,
                        grid: {
                            display: options.showGrid !== false
                        },
                        ticks: {
                            callback: options.yAxisFormatter || function(value) {
                                return value;
                            }
                        }
                    }
                },
                interaction: {
                    mode: 'nearest',
                    axis: 'x',
                    intersect: false
                },
                ...options.chartOptions
            }
        };
    }
    
    static getBarChartConfig(data, options = {}) {
        return {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: options.showLegend !== false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: options.yAxisFormatter || function(value) {
                                return value;
                            }
                        }
                    }
                },
                ...options.chartOptions
            }
        };
    }
    
    static getDoughnutChartConfig(data, options = {}) {
        return {
            type: 'doughnut',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: options.showLegend !== false,
                        position: options.legendPosition || 'bottom'
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                if (options.tooltipFormatter) {
                                    return options.tooltipFormatter(context);
                                }
                                return context.label + ': ' + context.parsed + '%';
                            }
                        }
                    }
                },
                ...options.chartOptions
            }
        };
    }
}

// Utility functions for common data formatting
function formatCurrency(value) {
    return 'Rp ' + value.toLocaleString('id-ID');
}

function formatNumber(value) {
    return value.toLocaleString('id-ID');
}

function formatPercentage(value) {
    return value + '%';
}

// Common chart color schemes
const ChartColors = {
    primary: ['#3B82F6', '#10B981', '#F59E0B', '#EF4444', '#8B5CF6'],
    blue: ['#3B82F6', '#60A5FA', '#93C5FD', '#BFDBFE', '#DBEAFE'],
    green: ['#10B981', '#34D399', '#6EE7B7', '#A7F3D0', '#D1FAE5'],
    gradient: {
        blue: 'rgba(59, 130, 246, 0.1)',
        green: 'rgba(16, 185, 129, 0.1)',
        yellow: 'rgba(245, 158, 11, 0.1)',
        red: 'rgba(239, 68, 68, 0.1)',
        purple: 'rgba(139, 92, 246, 0.1)'
    }
};

// Example usage functions that can be called from consolidated views
function createSalesChart(chartId, salesData) {
    const data = {
        labels: salesData.map(item => {
            const date = new Date(item.date);
            return date.toLocaleDateString('id-ID', { weekday: 'short', day: 'numeric' });
        }),
        datasets: [{
            label: 'Penjualan',
            data: salesData.map(item => item.amount),
            borderColor: ChartColors.primary[0],
            backgroundColor: ChartColors.gradient.blue,
            borderWidth: 2,
            fill: true,
            tension: 0.4
        }]
    };
    
    const config = ChartManager.getLineChartConfig(data, {
        yAxisFormatter: function(value) {
            return formatCurrency(value);
        }
    });
    
    return ChartManager.createChart(chartId, config);
}

function createRevenueChart(chartId, revenueData) {
    const data = {
        labels: revenueData.map(item => item.category),
        datasets: [{
            data: revenueData.map(item => item.percentage),
            backgroundColor: revenueData.map(item => item.color),
            borderWidth: 0
        }]
    };
    
    const config = ChartManager.getDoughnutChartConfig(data, {
        showLegend: false,
        tooltipFormatter: function(context) {
            const item = revenueData[context.dataIndex];
            return context.label + ': ' + context.parsed + '% (' + formatCurrency(item.amount) + ')';
        }
    });
    
    return ChartManager.createChart(chartId, config);
}

function createVisitorChart(chartId, visitorData) {
    const data = {
        labels: visitorData.map(item => {
            const date = new Date(item.date);
            return date.toLocaleDateString('id-ID', { day: 'numeric', month: 'short' });
        }),
        datasets: [{
            label: 'Kunjungan',
            data: visitorData.map(item => item.visitors),
            backgroundColor: ChartColors.primary[4],
            borderColor: ChartColors.primary[4],
            borderWidth: 1
        }]
    };
    
    const config = ChartManager.getBarChartConfig(data, {
        showLegend: false
    });
    
    return ChartManager.createChart(chartId, config);
}

// Cleanup function untuk destroy charts saat page unload
window.addEventListener('beforeunload', function() {
    Object.keys(ChartManager.charts).forEach(chartId => {
        ChartManager.destroyChart(chartId);
    });
});
</script>
