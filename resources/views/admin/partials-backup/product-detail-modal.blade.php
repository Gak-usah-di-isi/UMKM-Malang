<!-- Product Detail Modal -->
<div id="productDetailModal" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="inline-block align-bottom bg-white dark:bg-gray-800 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full">
            <div class="bg-white dark:bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">
                        Detail Produk
                    </h3>
                    <button type="button" onclick="closeProductDetailModal()" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Product Images -->
                    <div>
                        <div class="aspect-w-16 aspect-h-12 bg-gray-200 dark:bg-gray-700 rounded-lg overflow-hidden mb-4">
                            <img id="product-main-image" src="https://via.placeholder.com/400x300/6B7280/FFFFFF?text=Produk" alt="Product Image" class="w-full h-full object-cover">
                        </div>
                        <div class="grid grid-cols-4 gap-2">
                            <div class="aspect-w-1 aspect-h-1 bg-gray-200 dark:bg-gray-700 rounded-lg overflow-hidden cursor-pointer">
                                <img src="https://via.placeholder.com/100x100/6B7280/FFFFFF?text=1" alt="Product Thumbnail" class="w-full h-full object-cover">
                            </div>
                            <div class="aspect-w-1 aspect-h-1 bg-gray-200 dark:bg-gray-700 rounded-lg overflow-hidden cursor-pointer">
                                <img src="https://via.placeholder.com/100x100/6B7280/FFFFFF?text=2" alt="Product Thumbnail" class="w-full h-full object-cover">
                            </div>
                            <div class="aspect-w-1 aspect-h-1 bg-gray-200 dark:bg-gray-700 rounded-lg overflow-hidden cursor-pointer">
                                <img src="https://via.placeholder.com/100x100/6B7280/FFFFFF?text=3" alt="Product Thumbnail" class="w-full h-full object-cover">
                            </div>
                            <div class="aspect-w-1 aspect-h-1 bg-gray-200 dark:bg-gray-700 rounded-lg overflow-hidden cursor-pointer">
                                <img src="https://via.placeholder.com/100x100/6B7280/FFFFFF?text=4" alt="Product Thumbnail" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>

                    <!-- Product Information -->
                    <div class="space-y-6">
                        <!-- Basic Info -->
                        <div>
                            <h4 id="product-title" class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-2">
                                Batik Tulis Malang Premium
                            </h4>
                            <div class="flex items-center space-x-4 mb-4">
                                <span id="product-price" class="text-2xl font-bold text-green-600 dark:text-green-400">
                                    Rp 150.000
                                </span>
                                <span id="product-status" class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200">
                                    Menunggu Verifikasi
                                </span>
                            </div>
                        </div>

                        <!-- UMKM Info -->
                        <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
                            <h5 class="text-sm font-medium text-gray-900 dark:text-gray-100 mb-2">Informasi UMKM</h5>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-500 dark:text-gray-400">Nama UMKM:</span>
                                    <span id="umkm-name" class="text-sm text-gray-900 dark:text-gray-100">Batik Malang Heritage</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-500 dark:text-gray-400">Pemilik:</span>
                                    <span id="umkm-owner" class="text-sm text-gray-900 dark:text-gray-100">Siti Aminah</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-500 dark:text-gray-400">Kategori:</span>
                                    <span id="umkm-category" class="text-sm text-gray-900 dark:text-gray-100">Fashion & Tekstil</span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Details -->
                        <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
                            <h5 class="text-sm font-medium text-gray-900 dark:text-gray-100 mb-2">Detail Produk</h5>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-500 dark:text-gray-400">SKU:</span>
                                    <span id="product-sku" class="text-sm text-gray-900 dark:text-gray-100">BTK-MLG-001</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-500 dark:text-gray-400">Kategori:</span>
                                    <span id="product-category" class="text-sm text-gray-900 dark:text-gray-100">Batik</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-500 dark:text-gray-400">Stok:</span>
                                    <span id="product-stock" class="text-sm text-gray-900 dark:text-gray-100">25 unit</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-500 dark:text-gray-400">Berat:</span>
                                    <span id="product-weight" class="text-sm text-gray-900 dark:text-gray-100">300 gram</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-500 dark:text-gray-400">Dimensi:</span>
                                    <span id="product-dimensions" class="text-sm text-gray-900 dark:text-gray-100">120 x 200 cm</span>
                                </div>
                            </div>
                        </div>

                        <!-- Submission Info -->
                        <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
                            <h5 class="text-sm font-medium text-gray-900 dark:text-gray-100 mb-2">Informasi Pengajuan</h5>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-500 dark:text-gray-400">Tanggal Submit:</span>
                                    <span id="submit-date" class="text-sm text-gray-900 dark:text-gray-100">5 Januari 2024</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-500 dark:text-gray-400">Reviewer:</span>
                                    <span id="reviewer" class="text-sm text-gray-900 dark:text-gray-100">-</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-500 dark:text-gray-400">Catatan Review:</span>
                                    <span id="review-notes" class="text-sm text-gray-900 dark:text-gray-100">-</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Description -->
                <div class="mt-6 border-t border-gray-200 dark:border-gray-700 pt-6">
                    <h5 class="text-sm font-medium text-gray-900 dark:text-gray-100 mb-3">Deskripsi Produk</h5>
                    <div id="product-description" class="text-sm text-gray-700 dark:text-gray-300 leading-relaxed">
                        Batik tulis premium dengan motif khas Malang yang dibuat secara tradisional. Menggunakan bahan katun berkualitas tinggi dan pewarna alami. Cocok untuk acara formal maupun kasual. Setiap piece adalah unik dan memiliki nilai seni tinggi.
                    </div>
                </div>

                <!-- Product Specifications -->
                <div class="mt-6 border-t border-gray-200 dark:border-gray-700 pt-6">
                    <h5 class="text-sm font-medium text-gray-900 dark:text-gray-100 mb-3">Spesifikasi</h5>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Bahan:</span>
                            <span class="text-sm text-gray-900 dark:text-gray-100 ml-2">Katun Premium</span>
                        </div>
                        <div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Motif:</span>
                            <span class="text-sm text-gray-900 dark:text-gray-100 ml-2">Tradisional Malang</span>
                        </div>
                        <div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Cara Perawatan:</span>
                            <span class="text-sm text-gray-900 dark:text-gray-100 ml-2">Cuci Kering</span>
                        </div>
                        <div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Warna:</span>
                            <span class="text-sm text-gray-900 dark:text-gray-100 ml-2">Biru, Coklat</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Actions -->
            <div class="bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" onclick="approveProduct()" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Setujui
                </button>
                <button type="button" onclick="rejectProduct()" class="mt-3 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Tolak
                </button>
                <button type="button" onclick="requestRevision()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 dark:border-gray-600 shadow-sm px-4 py-2 bg-white dark:bg-gray-800 text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Minta Revisi
                </button>
                <button type="button" onclick="closeProductDetailModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 dark:border-gray-600 shadow-sm px-4 py-2 bg-white dark:bg-gray-800 text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function openProductDetailModal(productId) {
    // Here you would typically fetch product data from your backend
    // For now, we'll use sample data
    
    document.getElementById('productDetailModal').classList.remove('hidden');
}

function closeProductDetailModal() {
    document.getElementById('productDetailModal').classList.add('hidden');
}

function approveProduct() {
    if (confirm('Apakah Anda yakin ingin menyetujui produk ini?')) {
        // Here you would send approval request to backend
        alert('Produk berhasil disetujui!');
        closeProductDetailModal();
        // Refresh the product list
        location.reload();
    }
}

function rejectProduct() {
    const reason = prompt('Masukkan alasan penolakan:');
    if (reason && reason.trim()) {
        // Here you would send rejection request to backend
        alert('Produk berhasil ditolak!');
        closeProductDetailModal();
        // Refresh the product list
        location.reload();
    }
}

function requestRevision() {
    const notes = prompt('Masukkan catatan revisi yang diperlukan:');
    if (notes && notes.trim()) {
        // Here you would send revision request to backend
        alert('Permintaan revisi berhasil dikirim!');
        closeProductDetailModal();
        // Refresh the product list
        location.reload();
    }
}
</script>
