<!-- Product Table -->
<div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
    <table class="min-w-full divide-y divide-gray-300 dark:divide-gray-600">
        <thead class="bg-gray-50 dark:bg-gray-700">
            <tr>
                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 dark:text-gray-300 sm:pl-6">
                    <input type="checkbox" id="selectAllProducts" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" onchange="toggleAllProducts()">
                </th>
                <th scope="col" class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wide text-gray-500 dark:text-gray-300">
                    Produk
                </th>
                <th scope="col" class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wide text-gray-500 dark:text-gray-300">
                    UMKM
                </th>
                <th scope="col" class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wide text-gray-500 dark:text-gray-300">
                    Kategori
                </th>
                <th scope="col" class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wide text-gray-500 dark:text-gray-300">
                    Harga
                </th>
                <th scope="col" class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wide text-gray-500 dark:text-gray-300">
                    Status
                </th>
                <th scope="col" class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wide text-gray-500 dark:text-gray-300">
                    Tanggal
                </th>
                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                    <span class="sr-only">Aksi</span>
                </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 dark:divide-gray-600 bg-white dark:bg-gray-800">
            @forelse($products ?? [] as $product)
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                    <td class="py-4 pl-4 pr-3 text-sm sm:pl-6">
                        <input type="checkbox" name="selected_products" value="{{ $product['id'] ?? '' }}" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    </td>
                    <td class="px-6 py-4 text-sm">
                        <div class="flex items-center">
                            <div class="h-16 w-16 flex-shrink-0">
                                <img class="h-16 w-16 rounded-lg object-cover" src="{{ $product['image'] ?? '/images/placeholder-product.jpg' }}" alt="{{ $product['name'] ?? 'Product' }}">
                            </div>
                            <div class="ml-4">
                                <div class="font-medium text-gray-900 dark:text-gray-100">{{ $product['name'] ?? 'Nama Produk' }}</div>
                                <div class="text-gray-500 dark:text-gray-400 text-xs mt-1">SKU: {{ $product['sku'] ?? 'N/A' }}</div>
                                <div class="text-gray-500 dark:text-gray-400 text-xs">Stok: {{ $product['stock'] ?? 0 }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm">
                        <div class="flex items-center">
                            <div class="h-8 w-8 flex-shrink-0">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ $product['umkm_logo'] ?? '/images/placeholder-logo.jpg' }}" alt="{{ $product['umkm_name'] ?? 'UMKM' }}">
                            </div>
                            <div class="ml-2">
                                <div class="font-medium text-gray-900 dark:text-gray-100">{{ $product['umkm_name'] ?? 'Nama UMKM' }}</div>
                                <div class="text-gray-500 dark:text-gray-400 text-xs">{{ $product['umkm_location'] ?? 'Lokasi' }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                            {{ ucfirst($product['category'] ?? 'Kategori') }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100 font-medium">
                        Rp {{ number_format($product['price'] ?? 0, 0, ',', '.') }}
                    </td>
                    <td class="px-6 py-4 text-sm">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                            @if(($product['status'] ?? 'pending') === 'approved') bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200
                            @elseif(($product['status'] ?? 'pending') === 'rejected') bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200
                            @elseif(($product['status'] ?? 'pending') === 'suspended') bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-200
                            @else bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200 @endif">
                            @if(($product['status'] ?? 'pending') === 'approved') Disetujui
                            @elseif(($product['status'] ?? 'pending') === 'rejected') Ditolak
                            @elseif(($product['status'] ?? 'pending') === 'suspended') Disuspend
                            @else Menunggu @endif
                        </span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">
                        {{ $product['created_at'] ? date('d M Y', strtotime($product['created_at'])) : 'Tidak diketahui' }}
                    </td>
                    <td class="py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                        <div class="flex justify-end space-x-2">
                            <button type="button" onclick="showProductDetail({{ $product['id'] ?? 0 }})" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300">
                                Detail
                            </button>
                            @if(($product['status'] ?? 'pending') === 'pending')
                                <button type="button" onclick="showVerificationModal({{ $product['id'] ?? 0 }})" class="text-green-600 hover:text-green-900 dark:text-green-400 dark:hover:text-green-300">
                                    Verifikasi
                                </button>
                            @endif
                            <button type="button" onclick="editProduct({{ $product['id'] ?? 0 }})" class="text-yellow-600 hover:text-yellow-900 dark:text-yellow-400 dark:hover:text-yellow-300">
                                Edit
                            </button>
                            <button type="button" onclick="deleteProduct({{ $product['id'] ?? 0 }})" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">
                                Hapus
                            </button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="px-6 py-12 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Tidak ada produk ditemukan</p>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<script>
function toggleAllProducts() {
    const masterCheckbox = document.getElementById('selectAllProducts');
    const productCheckboxes = document.querySelectorAll('input[name="selected_products"]');
    
    productCheckboxes.forEach(checkbox => {
        checkbox.checked = masterCheckbox.checked;
    });
}

function showProductDetail(productId) {
    // Show product detail modal
    console.log('Showing product detail for ID:', productId);
}

function showVerificationModal(productId) {
    // Show verification modal
    console.log('Showing verification modal for product ID:', productId);
}

function editProduct(productId) {
    // Navigate to edit product page or show edit modal
    console.log('Editing product ID:', productId);
}

function deleteProduct(productId) {
    if (confirm('Apakah Anda yakin ingin menghapus produk ini?')) {
        console.log('Deleting product ID:', productId);
        // Make AJAX call to delete product
    }
}
</script>
