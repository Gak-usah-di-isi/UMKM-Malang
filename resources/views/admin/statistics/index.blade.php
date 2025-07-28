<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Statistik Penjualan & Pengunjung
            </h2>
            <div class="flex space-x-2">
                @include('admin.partials.date-range-filter')
                @include('admin.partials.export-button', ['type' => 'statistics'])
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Overview Statistics -->
            @include('admin.partials.overview-stats')

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
                <!-- Sales Chart -->
                @include('admin.partials.sales-chart')

                <!-- Visitor Chart -->
                @include('admin.partials.visitor-chart')
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">
                <!-- Top UMKM -->
                @include('admin.partials.top-umkm')

                <!-- Top Products -->
                @include('admin.partials.top-products')

                <!-- Revenue Breakdown -->
                @include('admin.partials.revenue-breakdown')
            </div>

            <div class="mt-6">
                <!-- Detailed Reports -->
                @include('admin.partials.detailed-reports')
            </div>
        </div>
    </div>
</x-app-layout>
