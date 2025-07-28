<!-- Custom Export Modal -->
<div id="customExportModal" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="inline-block align-bottom bg-white dark:bg-gray-800 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full">
            <div class="bg-white dark:bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 dark:bg-blue-900 sm:mx-0 sm:h-10 sm:w-10">
                        <svg class="h-6 w-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100" id="modal-title">
                            Ekspor Custom
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                Pilih data yang ingin diekspor dan format file yang diinginkan.
                            </p>
                        </div>

                        <form class="mt-6 space-y-6">
                            <!-- Data Type Selection -->
                            <div>
                                <label class="text-base font-medium text-gray-900 dark:text-gray-100">Jenis Data</label>
                                <p class="text-sm leading-5 text-gray-500 dark:text-gray-400">Pilih jenis data yang akan diekspor</p>
                                <fieldset class="mt-4">
                                    <legend class="sr-only">Data Type</legend>
                                    <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                        <div class="flex items-center">
                                            <input id="umkm_data" name="data_type" type="radio" value="umkm" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                            <label for="umkm_data" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                Data UMKM
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="product_data" name="data_type" type="radio" value="products" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                            <label for="product_data" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                Data Produk
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="sales_data" name="data_type" type="radio" value="sales" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                            <label for="sales_data" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                Data Penjualan
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="user_data" name="data_type" type="radio" value="users" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                            <label for="user_data" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                Data Pengguna
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <!-- Date Range -->
                            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                                <div>
                                    <label for="start_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Tanggal Mulai</label>
                                    <input type="date" name="start_date" id="start_date" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                                </div>
                                <div>
                                    <label for="end_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Tanggal Akhir</label>
                                    <input type="date" name="end_date" id="end_date" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                                </div>
                            </div>

                            <!-- Format Selection -->
                            <div>
                                <label class="text-base font-medium text-gray-900 dark:text-gray-100">Format File</label>
                                <p class="text-sm leading-5 text-gray-500 dark:text-gray-400">Pilih format ekspor yang diinginkan</p>
                                <fieldset class="mt-4">
                                    <legend class="sr-only">File Format</legend>
                                    <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                        <div class="flex items-center">
                                            <input id="excel_format" name="file_format" type="radio" value="excel" checked class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                            <label for="excel_format" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                Excel (.xlsx)
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="csv_format" name="file_format" type="radio" value="csv" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                            <label for="csv_format" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                CSV (.csv)
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="pdf_format" name="file_format" type="radio" value="pdf" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                            <label for="pdf_format" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                PDF (.pdf)
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="json_format" name="file_format" type="radio" value="json" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                            <label for="json_format" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                JSON (.json)
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <!-- Additional Options -->
                            <div>
                                <label class="text-base font-medium text-gray-900 dark:text-gray-100">Opsi Tambahan</label>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-center">
                                        <input id="include_deleted" name="include_deleted" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                        <label for="include_deleted" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                            Sertakan data yang dihapus
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="include_sensitive" name="include_sensitive" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                        <label for="include_sensitive" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                            Sertakan data sensitif (password hash, dll)
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="compress_file" name="compress_file" type="checkbox" checked class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                        <label for="compress_file" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                            Kompres file hasil ekspor
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" onclick="startCustomExport()" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Mulai Ekspor
                </button>
                <button type="button" onclick="closeCustomExportModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 dark:border-gray-600 shadow-sm px-4 py-2 bg-white dark:bg-gray-800 text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Batal
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function openCustomExportModal() {
    document.getElementById('customExportModal').classList.remove('hidden');
}

function closeCustomExportModal() {
    document.getElementById('customExportModal').classList.add('hidden');
}

function startCustomExport() {
    // Get form data
    const formData = new FormData();
    const dataType = document.querySelector('input[name="data_type"]:checked')?.value;
    const startDate = document.getElementById('start_date').value;
    const endDate = document.getElementById('end_date').value;
    const fileFormat = document.querySelector('input[name="file_format"]:checked')?.value;
    const includeDeleted = document.getElementById('include_deleted').checked;
    const includeSensitive = document.getElementById('include_sensitive').checked;
    const compressFile = document.getElementById('compress_file').checked;

    if (!dataType) {
        alert('Silakan pilih jenis data yang akan diekspor');
        return;
    }

    // Simulate export process
    closeCustomExportModal();
    
    // Show notification
    alert(`Memulai ekspor ${dataType} dalam format ${fileFormat}...`);
    
    // Here you would typically send the data to your backend
    console.log('Export configuration:', {
        dataType,
        startDate,
        endDate,
        fileFormat,
        includeDeleted,
        includeSensitive,
        compressFile
    });
}
</script>
