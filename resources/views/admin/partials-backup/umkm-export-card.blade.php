<!-- UMKM Data Export Card -->
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Data UMKM</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Export data lengkap UMKM yang terdaftar</p>
                </div>
            </div>
        </div>

        <div class="space-y-4">
            <!-- Export Options -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="space-y-3">
                    <h4 class="text-sm font-medium text-gray-900 dark:text-gray-100">Status UMKM</h4>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input type="checkbox" name="umkm_status[]" value="all" checked class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">Semua Status</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="umkm_status[]" value="approved" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">Disetujui</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="umkm_status[]" value="pending" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">Menunggu</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="umkm_status[]" value="rejected" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">Ditolak</span>
                        </label>
                    </div>
                </div>

                <div class="space-y-3">
                    <h4 class="text-sm font-medium text-gray-900 dark:text-gray-100">Kolom Data</h4>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input type="checkbox" name="umkm_fields[]" value="basic" checked class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">Informasi Dasar</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="umkm_fields[]" value="contact" checked class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">Kontak</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="umkm_fields[]" value="documents" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">Dokumen</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="umkm_fields[]" value="statistics" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">Statistik</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Date Range -->
            <div class="space-y-3">
                <h4 class="text-sm font-medium text-gray-900 dark:text-gray-100">Rentang Tanggal Pendaftaran</h4>
                <div class="flex space-x-2">
                    <input type="date" name="umkm_start_date" class="block w-full border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-white dark:bg-gray-700">
                    <span class="flex items-center text-gray-500 dark:text-gray-400">s/d</span>
                    <input type="date" name="umkm_end_date" class="block w-full border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-white dark:bg-gray-700">
                </div>
            </div>

            <!-- Export Actions -->
            <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2 pt-4 border-t border-gray-200 dark:border-gray-600">
                <button type="button" onclick="exportUmkmData('excel')" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm0 2h12v10H4V5z"/>
                    </svg>
                    Export Excel
                </button>
                <button type="button" onclick="exportUmkmData('csv')" class="inline-flex items-center justify-center px-4 py-2 border border-gray-300 dark:border-gray-600 text-sm font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M4 4a1 1 0 011-1h10a1 1 0 011 1v1H4V4zM4 7h12v8a1 1 0 01-1 1H5a1 1 0 01-1-1V7z"/>
                    </svg>
                    Export CSV
                </button>
                <button type="button" onclick="exportUmkmData('pdf')" class="inline-flex items-center justify-center px-4 py-2 border border-gray-300 dark:border-gray-600 text-sm font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm0 2h12v10H4V5z"/>
                    </svg>
                    Export PDF
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function exportUmkmData(format) {
    // Collect form data
    const formData = new FormData();
    
    // Status filters
    document.querySelectorAll('input[name="umkm_status[]"]:checked').forEach(input => {
        formData.append('status[]', input.value);
    });
    
    // Field selections
    document.querySelectorAll('input[name="umkm_fields[]"]:checked').forEach(input => {
        formData.append('fields[]', input.value);
    });
    
    // Date range
    const startDate = document.querySelector('input[name="umkm_start_date"]').value;
    const endDate = document.querySelector('input[name="umkm_end_date"]').value;
    
    if (startDate) formData.append('start_date', startDate);
    if (endDate) formData.append('end_date', endDate);
    
    formData.append('format', format);
    formData.append('type', 'umkm');
    
    console.log('Exporting UMKM data:', Object.fromEntries(formData));
    
    // Here you would make an AJAX call or form submission to your export endpoint
    // For now, we'll just log the data
    alert(`Exporting UMKM data to ${format.toUpperCase()} format...`);
}
</script>
