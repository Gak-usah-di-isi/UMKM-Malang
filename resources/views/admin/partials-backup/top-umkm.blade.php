<!-- Top UMKM -->
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6">
        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
            Top UMKM Performer
        </h3>
        
        <div class="space-y-4">
            @forelse($topUmkm ?? [] as $index => $umkm)
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
                            <img class="h-10 w-10 rounded-full object-cover" src="{{ $umkm['logo'] ?? '/images/placeholder-logo.jpg' }}" alt="{{ $umkm['name'] ?? 'UMKM' }}">
                            <div>
                                <p class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ $umkm['name'] ?? 'Nama UMKM' }}</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">{{ $umkm['category'] ?? 'Kategori' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900 dark:text-gray-100">Rp {{ number_format($umkm['total_sales'] ?? 0, 0, ',', '.') }}</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">{{ $umkm['orders_count'] ?? 0 }} pesanan</p>
                    </div>
                </div>
            @empty
                <div class="text-center py-8">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Belum ada data UMKM terbaik</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
