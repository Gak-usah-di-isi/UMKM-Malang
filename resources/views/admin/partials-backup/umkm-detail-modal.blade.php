<!-- UMKM Detail Modal -->
<div id="umkmDetailModal" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Background overlay -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true" onclick="closeUmkmDetailModal()"></div>

        <!-- Modal panel -->
        <div class="inline-block align-bottom bg-white dark:bg-gray-800 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full">
            <div class="bg-white dark:bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100" id="modal-title">
                        Detail UMKM
                    </h3>
                    <button type="button" onclick="closeUmkmDetailModal()" class="bg-white dark:bg-gray-800 rounded-md text-gray-400 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <span class="sr-only">Close</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Basic Information -->
                    <div class="space-y-4">
                        <div>
                            <h4 class="text-sm font-medium text-gray-900 dark:text-gray-100 mb-2">Informasi Dasar</h4>
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg space-y-3">
                                <div class="flex items-center space-x-3">
                                    <img id="umkmLogo" class="h-16 w-16 rounded-full object-cover" src="" alt="Logo UMKM">
                                    <div>
                                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-100" id="umkmName">-</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400" id="umkmOwner">-</p>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-3 text-sm">
                                    <div>
                                        <span class="text-gray-500 dark:text-gray-400">Kategori:</span>
                                        <span class="text-gray-900 dark:text-gray-100 font-medium" id="umkmCategory">-</span>
                                    </div>
                                    <div>
                                        <span class="text-gray-500 dark:text-gray-400">Status:</span>
                                        <span id="umkmStatus" class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium">-</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Information -->
                        <div>
                            <h4 class="text-sm font-medium text-gray-900 dark:text-gray-100 mb-2">Kontak</h4>
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg space-y-2 text-sm">
                                <div class="flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    <span id="umkmEmail">-</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    <span id="umkmPhone">-</span>
                                </div>
                                <div class="flex items-start space-x-2">
                                    <svg class="w-4 h-4 text-gray-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <span id="umkmAddress">-</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div class="space-y-4">
                        <!-- Description -->
                        <div>
                            <h4 class="text-sm font-medium text-gray-900 dark:text-gray-100 mb-2">Deskripsi</h4>
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <p class="text-sm text-gray-600 dark:text-gray-300" id="umkmDescription">-</p>
                            </div>
                        </div>

                        <!-- Statistics -->
                        <div>
                            <h4 class="text-sm font-medium text-gray-900 dark:text-gray-100 mb-2">Statistik</h4>
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <div class="grid grid-cols-2 gap-4 text-sm">
                                    <div class="text-center">
                                        <p class="text-2xl font-bold text-blue-600" id="umkmProductsCount">0</p>
                                        <p class="text-gray-500 dark:text-gray-400">Produk</p>
                                    </div>
                                    <div class="text-center">
                                        <p class="text-2xl font-bold text-green-600" id="umkmSalesCount">0</p>
                                        <p class="text-gray-500 dark:text-gray-400">Penjualan</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Documents -->
                        <div>
                            <h4 class="text-sm font-medium text-gray-900 dark:text-gray-100 mb-2">Dokumen</h4>
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg space-y-2">
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-gray-600 dark:text-gray-300">NIB:</span>
                                    <a href="#" class="text-blue-600 hover:text-blue-800">Lihat</a>
                                </div>
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-gray-600 dark:text-gray-300">SIUP:</span>
                                    <a href="#" class="text-blue-600 hover:text-blue-800">Lihat</a>
                                </div>
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-gray-600 dark:text-gray-300">NPWP:</span>
                                    <a href="#" class="text-blue-600 hover:text-blue-800">Lihat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" onclick="showStatusModal()" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Ubah Status
                </button>
                <button type="button" onclick="closeUmkmDetailModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 dark:border-gray-600 shadow-sm px-4 py-2 bg-white dark:bg-gray-800 text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function showUmkmDetail(umkmId) {
    // Fetch UMKM data and populate modal
    // This would be an AJAX call to your backend
    document.getElementById('umkmDetailModal').classList.remove('hidden');
}

function closeUmkmDetailModal() {
    document.getElementById('umkmDetailModal').classList.add('hidden');
}
</script>
