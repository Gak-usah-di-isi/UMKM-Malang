<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Export Data UMKM & Produk
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- UMKM Data Export -->
                @include('admin.partials.umkm-export-card')

                <!-- Product Data Export -->
                @include('admin.partials.product-export-card')
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
                <!-- Sales Data Export -->
                @include('admin.partials.sales-export-card')

                <!-- User Data Export -->
                @include('admin.partials.user-export-card')
            </div>

            <div class="mt-6">
                <!-- Scheduled Exports -->
                @include('admin.partials.scheduled-exports')
            </div>

            <div class="mt-6">
                <!-- Export History -->
                @include('admin.partials.export-history')
            </div>
        </div>
    </div>

    <!-- Modals -->
    @include('admin.partials.custom-export-modal')
    @include('admin.partials.schedule-export-modal')
</x-app-layout>
