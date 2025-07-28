<!-- UMKM Status Change Modal -->
<div id="umkmStatusModal" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Background overlay -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true" onclick="closeStatusModal()"></div>

        <!-- Modal panel -->
        <div class="inline-block align-bottom bg-white dark:bg-gray-800 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white dark:bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 dark:bg-blue-900 sm:mx-0 sm:h-10 sm:w-10">
                        <svg class="h-6 w-6 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100" id="modal-title">
                            Ubah Status UMKM
                        </h3>
                        <div class="mt-4">
                            <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                                Pilih status baru untuk UMKM <span id="statusUmkmName" class="font-medium">-</span>
                            </p>
                            
                            <form id="statusForm" class="space-y-4">
                                <input type="hidden" id="statusUmkmId" value="">
                                
                                <!-- Status Selection -->
                                <div>
                                    <label class="text-sm font-medium text-gray-700 dark:text-gray-300">Status Baru</label>
                                    <div class="mt-2 space-y-2">
                                        <label class="flex items-center">
                                            <input type="radio" name="status" value="approved" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                            <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                                    Disetujui
                                                </span>
                                            </span>
                                        </label>
                                        <label class="flex items-center">
                                            <input type="radio" name="status" value="pending" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                            <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200">
                                                    Menunggu Review
                                                </span>
                                            </span>
                                        </label>
                                        <label class="flex items-center">
                                            <input type="radio" name="status" value="suspended" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                            <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-200">
                                                    Disuspend
                                                </span>
                                            </span>
                                        </label>
                                        <label class="flex items-center">
                                            <input type="radio" name="status" value="rejected" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                            <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200">
                                                    Ditolak
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <!-- Reason/Notes -->
                                <div>
                                    <label for="statusReason" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                        Alasan/Catatan
                                    </label>
                                    <textarea id="statusReason" name="reason" rows="3" 
                                              class="mt-1 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100"
                                              placeholder="Berikan alasan atau catatan untuk perubahan status ini..."></textarea>
                                </div>

                                <!-- Send Notification -->
                                <div class="flex items-center">
                                    <input type="checkbox" id="sendNotification" name="send_notification" checked 
                                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <label for="sendNotification" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">
                                        Kirim notifikasi email ke pemilik UMKM
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" onclick="updateUmkmStatus()" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Update Status
                </button>
                <button type="button" onclick="closeStatusModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 dark:border-gray-600 shadow-sm px-4 py-2 bg-white dark:bg-gray-800 text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Batal
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function showStatusModal(umkmId, umkmName = '') {
    document.getElementById('statusUmkmId').value = umkmId;
    document.getElementById('statusUmkmName').textContent = umkmName || 'UMKM';
    document.getElementById('umkmStatusModal').classList.remove('hidden');
}

function closeStatusModal() {
    document.getElementById('umkmStatusModal').classList.add('hidden');
    document.getElementById('statusForm').reset();
}

function updateUmkmStatus() {
    const form = document.getElementById('statusForm');
    const formData = new FormData(form);
    
    // Add UMKM ID
    formData.append('umkm_id', document.getElementById('statusUmkmId').value);
    
    // Here you would make an AJAX call to update the status
    console.log('Updating UMKM status:', Object.fromEntries(formData));
    
    // Close modal and refresh page/table
    closeStatusModal();
    // location.reload(); // or update the table row dynamically
}
</script>
