<!-- UMKM Table -->
<div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
    <table class="min-w-full divide-y divide-gray-300 dark:divide-gray-600">
        <thead class="bg-gray-50 dark:bg-gray-700">
            <tr>
                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 dark:text-gray-300 sm:pl-6">
                    <input type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                </th>
                <th scope="col" class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wide text-gray-500 dark:text-gray-300">
                    UMKM
                </th>
                <th scope="col" class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wide text-gray-500 dark:text-gray-300">
                    Kategori
                </th>
                <th scope="col" class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wide text-gray-500 dark:text-gray-300">
                    Lokasi
                </th>
                <th scope="col" class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wide text-gray-500 dark:text-gray-300">
                    Status
                </th>
                <th scope="col" class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wide text-gray-500 dark:text-gray-300">
                    Produk
                </th>
                <th scope="col" class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wide text-gray-500 dark:text-gray-300">
                    Bergabung
                </th>
                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                    <span class="sr-only">Aksi</span>
                </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 dark:divide-gray-600 bg-white dark:bg-gray-800">
            @forelse($umkmList ?? [] as $umkm)
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                    <td class="py-4 pl-4 pr-3 text-sm sm:pl-6">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" value="{{ $umkm['id'] ?? '' }}">
                    </td>
                    <td class="px-6 py-4 text-sm">
                        <div class="flex items-center">
                            <div class="h-10 w-10 flex-shrink-0">
                                <img class="h-10 w-10 rounded-full object-cover" src="{{ $umkm['logo'] ?? '/images/placeholder-logo.jpg' }}" alt="{{ $umkm['name'] ?? 'UMKM' }}">
                            </div>
                            <div class="ml-4">
                                <div class="font-medium text-gray-900 dark:text-gray-100">{{ $umkm['name'] ?? 'Nama UMKM' }}</div>
                                <div class="text-gray-500 dark:text-gray-400">{{ $umkm['owner_name'] ?? 'Pemilik' }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                            {{ ucfirst($umkm['category'] ?? 'Kategori') }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">
                        {{ $umkm['city'] ?? 'Kota' }}, {{ $umkm['province'] ?? 'Provinsi' }}
                    </td>
                    <td class="px-6 py-4 text-sm">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                            @if(($umkm['status'] ?? 'pending') === 'approved') bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200
                            @elseif(($umkm['status'] ?? 'pending') === 'rejected') bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200
                            @elseif(($umkm['status'] ?? 'pending') === 'suspended') bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-200
                            @else bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200 @endif">
                            @if(($umkm['status'] ?? 'pending') === 'approved') Aktif
                            @elseif(($umkm['status'] ?? 'pending') === 'rejected') Ditolak
                            @elseif(($umkm['status'] ?? 'pending') === 'suspended') Disuspend
                            @else Menunggu @endif
                        </span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">
                        {{ $umkm['products_count'] ?? 0 }} produk
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">
                        {{ $umkm['created_at'] ? date('d M Y', strtotime($umkm['created_at'])) : 'Tidak diketahui' }}
                    </td>
                    <td class="py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                        <div class="flex justify-end space-x-2">
                            <button type="button" onclick="showUmkmDetail({{ $umkm['id'] ?? 0 }})" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300">
                                Detail
                            </button>
                            <button type="button" onclick="showStatusModal({{ $umkm['id'] ?? 0 }})" class="text-green-600 hover:text-green-900 dark:text-green-400 dark:hover:text-green-300">
                                Ubah Status
                            </button>
                            <button type="button" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">
                                Hapus
                            </button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="px-6 py-12 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Tidak ada data UMKM ditemukan</p>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- Bulk Actions -->
<div class="mt-4 flex items-center justify-between">
    <div class="flex items-center space-x-2">
        <select class="block pl-3 pr-10 py-2 text-base border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md bg-white dark:bg-gray-800">
            <option value="">Aksi Massal</option>
            <option value="approve">Setujui Terpilih</option>
            <option value="reject">Tolak Terpilih</option>
            <option value="suspend">Suspend Terpilih</option>
            <option value="delete">Hapus Terpilih</option>
        </select>
        <button type="button" class="inline-flex items-center px-3 py-2 border border-gray-300 dark:border-gray-600 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Terapkan
        </button>
    </div>
    
    <div class="text-sm text-gray-500 dark:text-gray-400">
        Menampilkan {{ ($currentPage ?? 1 - 1) * ($perPage ?? 10) + 1 }} - {{ min(($currentPage ?? 1) * ($perPage ?? 10), $total ?? 0) }} dari {{ $total ?? 0 }} UMKM
    </div>
</div>
