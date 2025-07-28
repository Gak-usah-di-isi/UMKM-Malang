<!-- Bulk Action Modal -->
<div id="bulkActionModal" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="inline-block align-bottom bg-white dark:bg-gray-800 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white dark:bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-orange-100 dark:bg-orange-900 sm:mx-0 sm:h-10 sm:w-10">
                        <svg class="h-6 w-6 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100" id="modal-title">
                            Aksi Massal
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                Pilih aksi yang akan diterapkan pada <span id="selected-count" class="font-medium">0</span> item yang dipilih.
                            </p>
                        </div>

                        <form class="mt-6 space-y-6">
                            <!-- Bulk Action Type -->
                            <div>
                                <label class="text-base font-medium text-gray-900 dark:text-gray-100">Jenis Aksi</label>
                                <p class="text-sm leading-5 text-gray-500 dark:text-gray-400">Pilih aksi yang akan diterapkan</p>
                                <fieldset class="mt-4">
                                    <legend class="sr-only">Bulk Action Type</legend>
                                    <div class="space-y-4">
                                        <div class="flex items-center">
                                            <input id="bulk_approve" name="bulk_action" type="radio" value="approve" class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300">
                                            <label for="bulk_approve" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                <span class="text-green-600 dark:text-green-400 font-medium">Setujui Semua</span> - Setujui semua item yang dipilih
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="bulk_reject" name="bulk_action" type="radio" value="reject" class="focus:ring-red-500 h-4 w-4 text-red-600 border-gray-300">
                                            <label for="bulk_reject" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                <span class="text-red-600 dark:text-red-400 font-medium">Tolak Semua</span> - Tolak semua item yang dipilih
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="bulk_revision" name="bulk_action" type="radio" value="revision" class="focus:ring-yellow-500 h-4 w-4 text-yellow-600 border-gray-300">
                                            <label for="bulk_revision" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                <span class="text-yellow-600 dark:text-yellow-400 font-medium">Minta Revisi</span> - Minta revisi untuk semua item
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="bulk_suspend" name="bulk_action" type="radio" value="suspend" class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300">
                                            <label for="bulk_suspend" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                <span class="text-orange-600 dark:text-orange-400 font-medium">Suspend</span> - Suspend semua item yang dipilih
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="bulk_delete" name="bulk_action" type="radio" value="delete" class="focus:ring-red-500 h-4 w-4 text-red-600 border-gray-300">
                                            <label for="bulk_delete" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                <span class="text-red-600 dark:text-red-400 font-medium">Hapus</span> - Hapus semua item yang dipilih
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="bulk_export" name="bulk_action" type="radio" value="export" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                            <label for="bulk_export" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                <span class="text-blue-600 dark:text-blue-400 font-medium">Ekspor</span> - Ekspor data item yang dipilih
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <!-- Action Notes -->
                            <div>
                                <label for="bulk_notes" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Catatan Aksi
                                </label>
                                <div class="mt-1">
                                    <textarea id="bulk_notes" name="bulk_notes" rows="3" class="shadow-sm focus:ring-orange-500 focus:border-orange-500 block w-full sm:text-sm border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 rounded-md" placeholder="Berikan catatan untuk aksi ini (opsional)..."></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                    Catatan ini akan disertakan dalam notifikasi (jika ada)
                                </p>
                            </div>

                            <!-- Export Format (shown only for export action) -->
                            <div id="export_format_section" class="hidden">
                                <label class="text-base font-medium text-gray-900 dark:text-gray-100">Format Ekspor</label>
                                <fieldset class="mt-4">
                                    <legend class="sr-only">Export Format</legend>
                                    <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                        <div class="flex items-center">
                                            <input id="export_excel" name="export_format" type="radio" value="excel" checked class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                            <label for="export_excel" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                Excel (.xlsx)
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="export_csv" name="export_format" type="radio" value="csv" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                            <label for="export_csv" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                CSV (.csv)
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="export_pdf" name="export_format" type="radio" value="pdf" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                            <label for="export_pdf" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                PDF (.pdf)
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <!-- Confirmation -->
                            <div class="bg-yellow-50 dark:bg-yellow-900 border border-yellow-200 dark:border-yellow-800 rounded-md p-4">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <h3 class="text-sm font-medium text-yellow-800 dark:text-yellow-200">
                                            Perhatian
                                        </h3>
                                        <div class="mt-2 text-sm text-yellow-700 dark:text-yellow-300">
                                            <p>Aksi ini akan diterapkan pada semua item yang dipilih dan tidak dapat dibatalkan. Pastikan Anda telah memilih aksi yang benar.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Send Notification -->
                            <div>
                                <div class="flex items-center">
                                    <input id="send_bulk_notification" name="send_bulk_notification" type="checkbox" checked class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300 rounded">
                                    <label for="send_bulk_notification" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                        Kirim notifikasi email kepada pemilik terkait
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" onclick="executeBulkAction()" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-orange-600 text-base font-medium text-white hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Jalankan Aksi
                </button>
                <button type="button" onclick="closeBulkActionModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 dark:border-gray-600 shadow-sm px-4 py-2 bg-white dark:bg-gray-800 text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Batal
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function openBulkActionModal(selectedItems = []) {
    // Store selected items for bulk action
    window.currentBulkItems = selectedItems;
    document.getElementById('selected-count').textContent = selectedItems.length;
    document.getElementById('bulkActionModal').classList.remove('hidden');
}

function closeBulkActionModal() {
    document.getElementById('bulkActionModal').classList.add('hidden');
    // Clear form
    document.querySelector('#bulkActionModal form').reset();
    document.getElementById('export_format_section').classList.add('hidden');
}

function executeBulkAction() {
    const action = document.querySelector('input[name="bulk_action"]:checked')?.value;
    const notes = document.getElementById('bulk_notes').value;
    const sendNotification = document.getElementById('send_bulk_notification').checked;

    if (!action) {
        alert('Silakan pilih jenis aksi yang akan dilakukan');
        return;
    }

    const selectedItems = window.currentBulkItems || [];
    if (selectedItems.length === 0) {
        alert('Tidak ada item yang dipilih');
        return;
    }

    // Confirm destructive actions
    if (['reject', 'suspend', 'delete'].includes(action)) {
        const actionText = {
            reject: 'menolak',
            suspend: 'suspend',
            delete: 'menghapus'
        };
        
        if (!confirm(`Apakah Anda yakin ingin ${actionText[action]} ${selectedItems.length} item yang dipilih? Tindakan ini tidak dapat dibatalkan.`)) {
            return;
        }
    }

    // Get export format for export action
    let exportFormat = null;
    if (action === 'export') {
        exportFormat = document.querySelector('input[name="export_format"]:checked')?.value;
        if (!exportFormat) {
            alert('Silakan pilih format ekspor');
            return;
        }
    }

    // Simulate bulk action execution
    let message = '';
    switch (action) {
        case 'approve':
            message = `${selectedItems.length} item berhasil disetujui!`;
            break;
        case 'reject':
            message = `${selectedItems.length} item berhasil ditolak!`;
            break;
        case 'revision':
            message = `Permintaan revisi untuk ${selectedItems.length} item berhasil dikirim!`;
            break;
        case 'suspend':
            message = `${selectedItems.length} item berhasil disuspend!`;
            break;
        case 'delete':
            message = `${selectedItems.length} item berhasil dihapus!`;
            break;
        case 'export':
            message = `Ekspor ${selectedItems.length} item dalam format ${exportFormat.toUpperCase()} sedang diproses...`;
            break;
    }

    // Here you would typically send the bulk action data to your backend
    console.log('Bulk action data:', {
        action,
        items: selectedItems,
        notes,
        exportFormat,
        sendNotification
    });

    alert(message);
    closeBulkActionModal();
    
    // Refresh the page or update the UI
    location.reload();
}

// Show export format options when export action is selected
document.addEventListener('change', function(e) {
    if (e.target.name === 'bulk_action') {
        const exportSection = document.getElementById('export_format_section');
        if (e.target.value === 'export') {
            exportSection.classList.remove('hidden');
        } else {
            exportSection.classList.add('hidden');
        }
    }
});
</script>
