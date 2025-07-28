<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Manajemen UMKM') }}
            </h2>
            <div class="flex space-x-2">
                @include('admin.partials.search-filter', ['type' => 'umkm'])
                @include('admin.partials.export-button', ['type' => 'umkm'])
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Filter and Search Section -->
                    @include('admin.partials.umkm-filters')

                    <!-- UMKM Statistics Overview -->
                    @include('admin.partials.umkm-stats')

                    <!-- UMKM Table -->
                    @include('admin.partials.umkm-table')

                    <!-- Pagination -->
                    @include('admin.partials.pagination')
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    @include('admin.partials.umkm-detail-modal')
    @include('admin.partials.umkm-status-modal')
</x-app-layout>
