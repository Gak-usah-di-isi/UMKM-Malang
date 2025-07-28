<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Verifikasi & Moderasi Produk
            </h2>
            <div class="flex space-x-2">
                @include('admin.partials.search-filter', ['type' => 'products'])
                @include('admin.partials.export-button', ['type' => 'products'])
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Product Verification Tabs -->
                    @include('admin.partials.product-tabs')

                    <!-- Product Statistics -->
                    @include('admin.partials.product-stats')

                    <!-- Product Table -->
                    @include('admin.partials.product-table')

                    <!-- Pagination -->
                    @include('admin.partials.pagination')
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    @include('admin.partials.product-detail-modal')
    @include('admin.partials.product-verification-modal')
    @include('admin.partials.bulk-action-modal')
</x-app-layout>
