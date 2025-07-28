<!-- Pending Product Verifications -->
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                Produk Menunggu Verifikasi
            </h3>
            <a href="#" class="text-blue-600 hover:text-blue-500 text-sm font-medium">
                Lihat Semua
            </a>
        </div>
        
        <div class="space-y-4">
            @forelse($pendingProducts ?? [] as $product)
                <div class="flex items-center space-x-4 p-4 border border-gray-200 dark:border-gray-700 rounded-lg">
                    <div class="flex-shrink-0">
                        <img class="h-12 w-12 rounded-lg object-cover" src="{{ $product['image'] ?? '/images/placeholder-product.jpg' }}" alt="{{ $product['name'] ?? 'Product' }}">
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-900 dark:text-gray-100 truncate">
                                    {{ $product['name'] ?? 'Nama Produk' }}
                                </p>
                                <p class="text-sm text-gray-500 dark:text-gray-400 truncate">
                                    {{ $product['umkm_name'] ?? 'Nama UMKM' }}
                                </p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-sm text-gray-500 dark:text-gray-400">
                                    Rp {{ number_format($product['price'] ?? 0, 0, ',', '.') }}
                                </span>
                                <div class="flex space-x-1">
                                    <button class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                        Setujui
                                    </button>
                                    <button class="inline-flex items-center px-2.5 py-1.5 border border-gray-300 dark:border-gray-600 text-xs font-medium rounded text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        Detail
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center py-8">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Tidak ada produk yang menunggu verifikasi</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
