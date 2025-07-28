<!-- Product Verification Modal -->
<div id="productVerificationModal" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="inline-block align-bottom bg-white dark:bg-gray-800 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white dark:bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 dark:bg-blue-900 sm:mx-0 sm:h-10 sm:w-10">
                        <svg class="h-6 w-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100" id="modal-title">
                            Verifikasi Produk
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                Tentukan status verifikasi untuk produk yang dipilih.
                            </p>
                        </div>

                        <form class="mt-6 space-y-6">
                            <!-- Verification Action -->
                            <div>
                                <label class="text-base font-medium text-gray-900 dark:text-gray-100">Tindakan Verifikasi</label>
                                <p class="text-sm leading-5 text-gray-500 dark:text-gray-400">Pilih tindakan yang akan dilakukan</p>
                                <fieldset class="mt-4">
                                    <legend class="sr-only">Verification Action</legend>
                                    <div class="space-y-4">
                                        <div class="flex items-center">
                                            <input id="approve" name="verification_action" type="radio" value="approve" class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300">
                                            <label for="approve" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                <span class="text-green-600 dark:text-green-400 font-medium">Setujui</span> - Produk memenuhi standar dan dapat dipublikasikan
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="reject" name="verification_action" type="radio" value="reject" class="focus:ring-red-500 h-4 w-4 text-red-600 border-gray-300">
                                            <label for="reject" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                <span class="text-red-600 dark:text-red-400 font-medium">Tolak</span> - Produk tidak memenuhi standar
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="revision" name="verification_action" type="radio" value="revision" class="focus:ring-yellow-500 h-4 w-4 text-yellow-600 border-gray-300">
                                            <label for="revision" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                <span class="text-yellow-600 dark:text-yellow-400 font-medium">Minta Revisi</span> - Produk perlu diperbaiki
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <!-- Verification Notes -->
                            <div>
                                <label for="verification_notes" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Catatan Verifikasi
                                </label>
                                <div class="mt-1">
                                    <textarea id="verification_notes" name="verification_notes" rows="4" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 rounded-md" placeholder="Berikan catatan detail tentang keputusan verifikasi..."></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                    Catatan ini akan dikirim kepada pemilik UMKM
                                </p>
                            </div>

                            <!-- Quality Checklist -->
                            <div>
                                <label class="text-base font-medium text-gray-900 dark:text-gray-100">Checklist Kualitas</label>
                                <p class="text-sm leading-5 text-gray-500 dark:text-gray-400">Periksa aspek-aspek berikut</p>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-center">
                                        <input id="quality_photos" name="quality_photos" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                        <label for="quality_photos" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                            Foto produk berkualitas baik
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="complete_description" name="complete_description" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                        <label for="complete_description" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                            Deskripsi produk lengkap dan jelas
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="appropriate_price" name="appropriate_price" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                        <label for="appropriate_price" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                            Harga sesuai dengan kualitas produk
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="correct_category" name="correct_category" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                        <label for="correct_category" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                            Kategori produk sudah benar
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="complete_specifications" name="complete_specifications" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                        <label for="complete_specifications" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                            Spesifikasi produk lengkap
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="policy_compliance" name="policy_compliance" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                        <label for="policy_compliance" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                            Mematuhi kebijakan platform
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Priority Level -->
                            <div>
                                <label for="priority_level" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Prioritas Verifikasi
                                </label>
                                <select id="priority_level" name="priority_level" class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option value="normal">Normal</option>
                                    <option value="high">Tinggi</option>
                                    <option value="urgent">Mendesak</option>
                                </select>
                            </div>

                            <!-- Send Notification -->
                            <div>
                                <div class="flex items-center">
                                    <input id="send_notification" name="send_notification" type="checkbox" checked class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                    <label for="send_notification" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                        Kirim notifikasi email kepada pemilik UMKM
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" onclick="submitVerification()" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Proses Verifikasi
                </button>
                <button type="button" onclick="closeProductVerificationModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 dark:border-gray-600 shadow-sm px-4 py-2 bg-white dark:bg-gray-800 text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Batal
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function openProductVerificationModal(productIds = []) {
    // Store product IDs for verification
    window.currentVerificationProducts = productIds;
    document.getElementById('productVerificationModal').classList.remove('hidden');
}

function closeProductVerificationModal() {
    document.getElementById('productVerificationModal').classList.add('hidden');
    // Clear form
    document.querySelector('form').reset();
}

function submitVerification() {
    const action = document.querySelector('input[name="verification_action"]:checked')?.value;
    const notes = document.getElementById('verification_notes').value;
    const priority = document.getElementById('priority_level').value;
    const sendNotification = document.getElementById('send_notification').checked;

    if (!action) {
        alert('Silakan pilih tindakan verifikasi');
        return;
    }

    if (!notes.trim()) {
        alert('Silakan berikan catatan verifikasi');
        return;
    }

    // Get quality checklist
    const qualityChecklist = {
        photos: document.getElementById('quality_photos').checked,
        description: document.getElementById('complete_description').checked,
        price: document.getElementById('appropriate_price').checked,
        category: document.getElementById('correct_category').checked,
        specifications: document.getElementById('complete_specifications').checked,
        policy: document.getElementById('policy_compliance').checked
    };

    // Simulate verification process
    const productIds = window.currentVerificationProducts || [];
    
    let message = '';
    switch (action) {
        case 'approve':
            message = `${productIds.length} produk berhasil disetujui!`;
            break;
        case 'reject':
            message = `${productIds.length} produk berhasil ditolak!`;
            break;
        case 'revision':
            message = `Permintaan revisi untuk ${productIds.length} produk berhasil dikirim!`;
            break;
    }

    // Here you would typically send the verification data to your backend
    console.log('Verification data:', {
        productIds,
        action,
        notes,
        priority,
        qualityChecklist,
        sendNotification
    });

    alert(message);
    closeProductVerificationModal();
    
    // Refresh the product list
    location.reload();
}
</script>
