@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <main class="flex-1 p-6">
        <div class="max-w-7xl mx-auto">

            {{-- Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

                {{-- Total UMKM (dengan breakdown) --}}
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Total UMKM</p>
                            <p class="text-2xl font-bold text-gray-900">{{ number_format($totalUmkm) }}</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <i class="fa-solid fa-users text-blue-600 text-xl" aria-hidden="true"></i>
                        </div>

                    </div>
                    <div class="mt-4 text-sm text-gray-600">
                        <div class="flex items-center justify-between">
                            <span>Verified</span>
                            <span class="font-semibold text-gray-900">{{ number_format($verifiedUmkm) }}</span>
                        </div>
                        <div class="flex items-center justify-between mt-1">
                            <span>Belum Verified</span>
                            <span class="font-semibold text-gray-900">{{ number_format($unverifiedUmkm) }}</span>
                        </div>
                    </div>
                </div>

                {{-- Total Agenda (Articles) --}}
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Total Agenda</p>
                            <p class="text-2xl font-bold text-gray-900">{{ number_format($totalAgenda) }}</p>
                        </div>
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                            <i class="fa-solid fa-clipboard-list text-green-600 text-xl" aria-hidden="true"></i>
                        </div>

                    </div>
                    <div class="mt-4 text-sm text-gray-600">
                        <span class="text-gray-600">Semua agenda (published/unpublished)</span>
                    </div>
                </div>

                {{-- Total Event --}}
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Total Event</p>
                            <p class="text-2xl font-bold text-gray-900">{{ number_format($totalEvent) }}</p>
                        </div>
                        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                            <i class="fa-solid fa-calendar-days text-orange-600 text-xl" aria-hidden="true"></i>
                        </div>

                    </div>
                    <div class="mt-4 text-sm text-gray-600">
                        <span class="text-gray-600">Termasuk event berjalan & selesai</span>
                    </div>
                </div>

                {{-- Verified Rate --}}
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Verified Rate</p>
                            @php $vr = $totalUmkm ? round(($verifiedUmkm / $totalUmkm) * 100, 1) : 0; @endphp
                            <p class="text-2xl font-bold text-gray-900">{{ $vr }}%</p>
                        </div>
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                            <i class="fa-solid fa-circle-check text-purple-600 text-xl" aria-hidden="true"></i>
                        </div>

                    </div>
                    <div class="mt-4 text-sm text-gray-600">Persentase UMKM terverifikasi</div>
                </div>
            </div>

            {{-- Charts + Recent UMKM --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">
                        Pendaftaran UMKM per Bulan ({{ $chart['year'] }})
                    </h3>
                    <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                        <canvas id="umkmChart" class="w-full h-full"></canvas>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">
                        UMKM Terbaru
                    </h3>

                    <div class="space-y-4">
                        @forelse($recentUmkm as $idx => $u)
                            <div class="flex items-center justify-between py-3 border-b border-gray-100 last:border-b-0">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 {{ $idx == 0 ? 'bg-blue-100' : ($idx == 1 ? 'bg-green-100' : 'bg-purple-100') }} rounded-full flex items-center justify-center">
                                        <span
                                            class="text-xs font-medium {{ $idx == 0 ? 'text-blue-600' : ($idx == 1 ? 'text-green-600' : 'text-purple-600') }}">#{{ $idx + 1 }}</span>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900">{{ $u->name }}</p>
                                        <p class="text-sm text-gray-600">
                                            {{ optional($u->user)->name ?? '—' }}
                                            @if ($u->category)
                                                · {{ $u->category->name }}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span
                                        class="text-sm {{ $u->verification_status === 'verified' ? 'text-green-600' : 'text-gray-600' }} font-medium">
                                        {{ $u->verification_status ?? 'unverified' }}
                                    </span>
                                    <div class="text-xs text-gray-500">
                                        {{ optional($u->created_at)->diffForHumans() }}
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="text-sm text-gray-500">Belum ada UMKM.</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- Chart.js --}}
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            (function() {
                const el = document.getElementById('umkmChart');
                if (!el) return;

                const labels = @json($chart['labels'] ?? []);
                const values = @json($chart['data'] ?? []);

                // guard: kalau kosong, jangan render chart
                if (!Array.isArray(labels) || !Array.isArray(values) || labels.length === 0 || values.length === 0) {
                    console.warn('UMKM chart: labels/data kosong.');
                    return;
                }

                const ctx = el.getContext('2d');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'UMKM Terdaftar',
                            data: values,
                            tension: 0.35,
                            fill: true
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
