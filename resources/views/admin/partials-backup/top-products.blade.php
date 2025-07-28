<!-- Top Products -->
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6">
        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
            Produk Terlaris
        </h3>
        
        <div class="space-y-4">
            @forelse($topProducts ?? [] as $index => $product)
                <div class="flex items-center justify-between p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full 
                                @if($index === 0) bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200
                                @elseif($index === 1) bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-200
                                @elseif($index === 2) bg-orange-100 text-orange-800 dark:bg-orange-900 dark:text-orange-200
                                @else bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200 @endif">
                                {{ $index + 1 }}
                            </span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img class="h-10 w-10 rounded-lg object-cover" src="{{ $product['image'] ?? '/images/placeholder-product.jpg' }}" alt="{{ $product['name'] ?? 'Product' }}">
                            <div>
                                <p class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ $product['name'] ?? 'Nama Produk' }}</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">{{ $product['umkm_name'] ?? 'UMKM' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ $product['sold_count'] ?? 0 }} terjual</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Rp {{ number_format($product['price'] ?? 0, 0, ',', '.') }}</p>
                    </div>
                </div>
            @empty
                <div class="text-center py-8">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Belum ada data produk terlaris</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
