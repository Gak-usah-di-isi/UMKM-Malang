<!-- Product Verification Tabs -->
<div class="border-b border-gray-200 dark:border-gray-600">
    <nav class="-mb-px flex space-x-8" aria-label="Tabs">
        <button type="button" onclick="switchProductTab('all')" 
                class="product-tab-btn whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm focus:outline-none active"
                data-tab="all">
            Semua Produk
            <span class="bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100 ml-2 py-0.5 px-2.5 rounded-full text-xs font-medium">
                {{ $productCounts['all'] ?? 0 }}
            </span>
        </button>
        
        <button type="button" onclick="switchProductTab('pending')" 
                class="product-tab-btn border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm focus:outline-none"
                data-tab="pending">
            Menunggu Verifikasi
            <span class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 ml-2 py-0.5 px-2.5 rounded-full text-xs font-medium">
                {{ $productCounts['pending'] ?? 0 }}
            </span>
        </button>
        
        <button type="button" onclick="switchProductTab('approved')" 
                class="product-tab-btn border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm focus:outline-none"
                data-tab="approved">
            Disetujui
            <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 ml-2 py-0.5 px-2.5 rounded-full text-xs font-medium">
                {{ $productCounts['approved'] ?? 0 }}
            </span>
        </button>
        
        <button type="button" onclick="switchProductTab('rejected')" 
                class="product-tab-btn border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm focus:outline-none"
                data-tab="rejected">
            Ditolak
            <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 ml-2 py-0.5 px-2.5 rounded-full text-xs font-medium">
                {{ $productCounts['rejected'] ?? 0 }}
            </span>
        </button>
        
        <button type="button" onclick="switchProductTab('suspended')" 
                class="product-tab-btn border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm focus:outline-none"
                data-tab="suspended">
            Disuspend
            <span class="bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 ml-2 py-0.5 px-2.5 rounded-full text-xs font-medium">
                {{ $productCounts['suspended'] ?? 0 }}
            </span>
        </button>
    </nav>
</div>

<!-- Filter Bar for Products -->
<div class="mt-4 flex flex-col sm:flex-row sm:items-center sm:justify-between space-y-3 sm:space-y-0 sm:space-x-3">
    <div class="flex space-x-3">
        <!-- Category Filter -->
        <select name="category" class="block pl-3 pr-10 py-2 text-base border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md bg-white dark:bg-gray-800">
            <option value="">Semua Kategori</option>
            <option value="makanan">Makanan</option>
            <option value="minuman">Minuman</option>
            <option value="kerajinan">Kerajinan</option>
            <option value="fashion">Fashion</option>
            <option value="teknologi">Teknologi</option>
            <option value="lainnya">Lainnya</option>
        </select>

        <!-- Price Range Filter -->
        <select name="price_range" class="block pl-3 pr-10 py-2 text-base border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md bg-white dark:bg-gray-800">
            <option value="">Semua Harga</option>
            <option value="0-50000">< Rp 50.000</option>
            <option value="50000-100000">Rp 50.000 - 100.000</option>
            <option value="100000-500000">Rp 100.000 - 500.000</option>
            <option value="500000-1000000">Rp 500.000 - 1.000.000</option>
            <option value="1000000+">> Rp 1.000.000</option>
        </select>

        <!-- Sort By -->
        <select name="sort" class="block pl-3 pr-10 py-2 text-base border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md bg-white dark:bg-gray-800">
            <option value="newest">Terbaru</option>
            <option value="oldest">Terlama</option>
            <option value="name_asc">Nama A-Z</option>
            <option value="name_desc">Nama Z-A</option>
            <option value="price_asc">Harga Terendah</option>
            <option value="price_desc">Harga Tertinggi</option>
        </select>
    </div>

    <!-- Bulk Actions -->
    <div class="flex items-center space-x-2">
        <select id="bulkAction" class="block pl-3 pr-10 py-2 text-base border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md bg-white dark:bg-gray-800">
            <option value="">Aksi Massal</option>
            <option value="approve">Setujui Terpilih</option>
            <option value="reject">Tolak Terpilih</option>
            <option value="suspend">Suspend Terpilih</option>
            <option value="delete">Hapus Terpilih</option>
        </select>
        <button type="button" onclick="executeBulkAction()" class="inline-flex items-center px-3 py-2 border border-gray-300 dark:border-gray-600 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Terapkan
        </button>
    </div>
</div>

<script>
function switchProductTab(status) {
    // Remove active class from all tabs
    document.querySelectorAll('.product-tab-btn').forEach(btn => {
        btn.classList.remove('border-blue-500', 'text-blue-600', 'active');
        btn.classList.add('border-transparent', 'text-gray-500');
    });
    
    // Add active class to selected tab
    const activeTab = document.querySelector(`[data-tab="${status}"]`);
    activeTab.classList.remove('border-transparent', 'text-gray-500');
    activeTab.classList.add('border-blue-500', 'text-blue-600', 'active');
    
    // Here you would filter the products table
    filterProductsByStatus(status);
}

function filterProductsByStatus(status) {
    // Implementation to filter products by status
    console.log('Filtering products by status:', status);
    // This would typically involve an AJAX call to reload the product table
}

function executeBulkAction() {
    const action = document.getElementById('bulkAction').value;
    if (!action) return;
    
    const selectedProducts = document.querySelectorAll('input[name="selected_products"]:checked');
    if (selectedProducts.length === 0) {
        alert('Pilih minimal satu produk untuk melakukan aksi massal.');
        return;
    }
    
    const productIds = Array.from(selectedProducts).map(cb => cb.value);
    console.log('Executing bulk action:', action, 'on products:', productIds);
    
    // Show confirmation modal or execute action
}
</script>
