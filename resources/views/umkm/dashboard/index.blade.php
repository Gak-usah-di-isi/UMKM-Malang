@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
    <main class="flex-1 p-6">
        <div class="max-w-7xl mx-auto">

            {{-- Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

                {{-- Total Product --}}
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Total Product</p>
                            <p class="text-2xl font-bold text-gray-900">{{ number_format($totalProduct) }}</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <i class="fa-solid fa-boxes-stacked text-blue-600 text-xl"></i>
                        </div>
                    </div>
                    <div class="mt-4 text-sm text-gray-600">Semua produk milik UMKM kamu</div>
                </div>

                {{-- Favorite --}}
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Favorite</p>
                            <p class="text-2xl font-bold text-gray-900">{{ number_format($totalFavorite) }}</p>
                        </div>
                        <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center">
                            <i class="fa-solid fa-heart text-pink-600 text-xl"></i>
                        </div>
                    </div>
                    <div class="mt-4 text-sm text-gray-600">Ditandai favorit</div>
                </div>

                {{-- Featured --}}
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Featured</p>
                            <p class="text-2xl font-bold text-gray-900">{{ number_format($totalFeatured) }}</p>
                        </div>
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                            <i class="fa-solid fa-star text-purple-600 text-xl"></i>
                        </div>
                    </div>
                    <div class="mt-4 text-sm text-gray-600">Produk unggulan</div>
                </div>

                {{-- Total Stock (opsional) --}}
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Total Stock</p>
                            <p class="text-2xl font-bold text-gray-900">{{ number_format($totalStock) }}</p>
                        </div>
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                            <i class="fa-solid fa-warehouse text-green-600 text-xl"></i>
                        </div>
                    </div>
                    <div class="mt-4 text-sm text-gray-600">Akumulasi stok semua produk</div>
                </div>
            </div>

            {{-- Charts + Produk Terbaru --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                {{-- Chart: Produk dibuat per bulan --}}
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">
                        Produk Dibuat per Bulan ({{ $chart['year'] }})
                    </h3>
                    <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                        <canvas id="productChart" class="w-full h-full"></canvas>
                    </div>
                </div>

                {{-- Produk Terbaru --}}
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">
                        Produk Terbaru
                    </h3>

                    <div class="space-y-4">
                        @forelse($recentProducts as $idx => $p)
                            <div class="flex items-center justify-between py-3 border-b border-gray-100 last:border-b-0">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 {{ $idx == 0 ? 'bg-blue-100' : ($idx == 1 ? 'bg-green-100' : 'bg-purple-100') }} rounded-full flex items-center justify-center">
                                        <span
                                            class="text-xs font-medium {{ $idx == 0 ? 'text-blue-600' : ($idx == 1 ? 'text-green-600' : 'text-purple-600') }}">#{{ $idx + 1 }}</span>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900">{{ $p->name }}</p>
                                        <p class="text-sm text-gray-600">{{ $p->category->name ?? '—' }}</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span class="text-sm text-gray-900 font-medium">
                                        Rp {{ number_format($p->price ?? 0, 0, ',', '.') }}
                                    </span>
                                    <div class="text-xs text-gray-500">
                                        {{ optional($p->created_at)->diffForHumans() }}
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="text-sm text-gray-500">Belum ada produk.</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </main>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            (function() {
                const el = document.getElementById('productChart');
                if (!el) return;

                const labels = @json($chart['labels'] ?? []);
                const values = @json($chart['data'] ?? []);

                if (!Array.isArray(labels) || !Array.isArray(values) || labels.length === 0) {
                    el.parentElement.innerHTML = '<div class="text-sm text-gray-500">Belum ada data tahun ini.</div>';
                    return;
                }

                const ctx = el.getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Produk dibuat',
                            data: values
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                display: true
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    precision: 0
                                }
                            }
                        }
                    }
                });
            })();
        </script>
    @endpush
@endsection
