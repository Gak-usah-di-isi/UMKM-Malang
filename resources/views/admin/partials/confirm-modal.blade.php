<!-- Confirmation Modal - Reusable for delete/approve/reject actions -->
<div id="confirmModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        
        <div class="inline-block align-bottom bg-white dark:bg-gray-800 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white dark:bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 dark:bg-red-900 sm:mx-0 sm:h-10 sm:w-10" id="modalIcon">
                        <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/>
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100" id="modalTitle">
                            Konfirmasi Aksi
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500 dark:text-gray-400" id="modalMessage">
                                Apakah Anda yakin ingin melanjutkan?
                            </p>
                            <div id="modalInput" class="hidden mt-3">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300" id="modalInputLabel">
                                    Alasan:
                                </label>
                                <textarea id="modalTextarea" rows="3" 
                                          class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" 
                                          placeholder="Masukkan alasan..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" onclick="confirmAction()" 
                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm"
                        id="confirmButton">
                    Konfirmasi
                </button>
                <button type="button" onclick="closeConfirmModal()" 
                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:hover:bg-gray-700">
                    Batal
                </button>
            </div>
        </div>
    </div>
</div>

<script>
let currentAction = null;
let currentCallback = null;

function showConfirmModal(options) {
    const {
        title = 'Konfirmasi Aksi',
        message = 'Apakah Anda yakin ingin melanjutkan?',
        type = 'danger', // danger, warning, info, success
        confirmText = 'Konfirmasi',
        showInput = false,
        inputLabel = 'Alasan:',
        inputPlaceholder = 'Masukkan alasan...',
        onConfirm = null
    } = options;

    // Set modal content
    document.getElementById('modalTitle').textContent = title;
    document.getElementById('modalMessage').textContent = message;
    document.getElementById('confirmButton').textContent = confirmText;
    
    // Set modal styling based on type
    const modalIcon = document.getElementById('modalIcon');
    const confirmButton = document.getElementById('confirmButton');
    
    modalIcon.className = 'mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full sm:mx-0 sm:h-10 sm:w-10';
    
    switch(type) {
        case 'danger':
            modalIcon.classList.add('bg-red-100', 'dark:bg-red-900');
            confirmButton.className = confirmButton.className.replace(/bg-\w+-\d+/g, '').replace(/hover:bg-\w+-\d+/g, '') + ' bg-red-600 hover:bg-red-700';
            break;
        case 'warning':
            modalIcon.classList.add('bg-yellow-100', 'dark:bg-yellow-900');
            confirmButton.className = confirmButton.className.replace(/bg-\w+-\d+/g, '').replace(/hover:bg-\w+-\d+/g, '') + ' bg-yellow-600 hover:bg-yellow-700';
            break;
        case 'success':
            modalIcon.classList.add('bg-green-100', 'dark:bg-green-900');
            confirmButton.className = confirmButton.className.replace(/bg-\w+-\d+/g, '').replace(/hover:bg-\w+-\d+/g, '') + ' bg-green-600 hover:bg-green-700';
            break;
        default:
            modalIcon.classList.add('bg-blue-100', 'dark:bg-blue-900');
            confirmButton.className = confirmButton.className.replace(/bg-\w+-\d+/g, '').replace(/hover:bg-\w+-\d+/g, '') + ' bg-blue-600 hover:bg-blue-700';
    }
    
    // Handle input field
    const modalInput = document.getElementById('modalInput');
    const modalInputLabel = document.getElementById('modalInputLabel');
    const modalTextarea = document.getElementById('modalTextarea');
    
    if (showInput) {
        modalInput.classList.remove('hidden');
        modalInputLabel.textContent = inputLabel;
        modalTextarea.placeholder = inputPlaceholder;
        modalTextarea.value = '';
    } else {
        modalInput.classList.add('hidden');
    }
    
    // Store callback
    currentCallback = onConfirm;
    
    // Show modal
    document.getElementById('confirmModal').classList.remove('hidden');
}

function closeConfirmModal() {
    document.getElementById('confirmModal').classList.add('hidden');
    currentCallback = null;
    document.getElementById('modalTextarea').value = '';
}

function confirmAction() {
    if (currentCallback) {
        const inputValue = document.getElementById('modalTextarea').value;
        currentCallback(inputValue);
    }
    closeConfirmModal();
}

// Usage examples:
function deleteItem(id, name) {
    showConfirmModal({
        title: 'Hapus Item',
        message: `Apakah Anda yakin ingin menghapus "${name}"? Aksi ini tidak dapat dibatalkan.`,
        type: 'danger',
        confirmText: 'Hapus',
        onConfirm: () => {
            // Actual delete logic here
            console.log('Deleting item:', id);
        }
    });
}

function rejectItem(id, name) {
    showConfirmModal({
        title: 'Tolak Item',
        message: `Mengapa Anda menolak "${name}"?`,
        type: 'warning',
        confirmText: 'Tolak',
        showInput: true,
        inputLabel: 'Alasan penolakan:',
        inputPlaceholder: 'Jelaskan alasan penolakan...',
        onConfirm: (reason) => {
            if (!reason.trim()) {
                alert('Alasan penolakan harus diisi');
                return;
            }
            // Actual reject logic here
            console.log('Rejecting item:', id, 'Reason:', reason);
        }
    });
}

function approveItem(id, name) {
    showConfirmModal({
        title: 'Setujui Item',
        message: `Apakah Anda yakin ingin menyetujui "${name}"?`,
        type: 'success',
        confirmText: 'Setujui',
        onConfirm: () => {
            // Actual approve logic here
            console.log('Approving item:', id);
        }
    });
}
</script>
