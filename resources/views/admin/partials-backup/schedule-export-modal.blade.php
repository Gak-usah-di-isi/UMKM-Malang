<!-- Schedule Export Modal -->
<div id="scheduleExportModal" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="inline-block align-bottom bg-white dark:bg-gray-800 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full">
            <div class="bg-white dark:bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 dark:bg-green-900 sm:mx-0 sm:h-10 sm:w-10">
                        <svg class="h-6 w-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100" id="modal-title">
                            Jadwalkan Ekspor Otomatis
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                Buat jadwal ekspor otomatis untuk laporan rutin.
                            </p>
                        </div>

                        <form class="mt-6 space-y-6">
                            <!-- Schedule Name -->
                            <div>
                                <label for="schedule_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Jadwal</label>
                                <input type="text" name="schedule_name" id="schedule_name" placeholder="Laporan Bulanan UMKM" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                            </div>

                            <!-- Data Type Selection -->
                            <div>
                                <label class="text-base font-medium text-gray-900 dark:text-gray-100">Jenis Data</label>
                                <fieldset class="mt-4">
                                    <legend class="sr-only">Data Type</legend>
                                    <div class="space-y-4">
                                        <div class="flex items-center">
                                            <input id="schedule_umkm" name="schedule_data_type" type="radio" value="umkm" class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300">
                                            <label for="schedule_umkm" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                Data UMKM
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="schedule_products" name="schedule_data_type" type="radio" value="products" class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300">
                                            <label for="schedule_products" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                Data Produk
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="schedule_sales" name="schedule_data_type" type="radio" value="sales" class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300">
                                            <label for="schedule_sales" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                Data Penjualan
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="schedule_users" name="schedule_data_type" type="radio" value="users" class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300">
                                            <label for="schedule_users" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                Data Pengguna
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <!-- Schedule Frequency -->
                            <div>
                                <label for="frequency" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Frekuensi</label>
                                <select id="frequency" name="frequency" class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                    <option value="daily">Harian</option>
                                    <option value="weekly">Mingguan</option>
                                    <option value="monthly">Bulanan</option>
                                    <option value="quarterly">Triwulan</option>
                                    <option value="yearly">Tahunan</option>
                                </select>
                            </div>

                            <!-- Schedule Time -->
                            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                                <div>
                                    <label for="schedule_time" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Waktu Eksekusi</label>
                                    <input type="time" name="schedule_time" id="schedule_time" value="02:00" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                                </div>
                                <div id="day_of_week_field" class="hidden">
                                    <label for="day_of_week" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Hari dalam Minggu</label>
                                    <select id="day_of_week" name="day_of_week" class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                        <option value="monday">Senin</option>
                                        <option value="tuesday">Selasa</option>
                                        <option value="wednesday">Rabu</option>
                                        <option value="thursday">Kamis</option>
                                        <option value="friday">Jumat</option>
                                        <option value="saturday">Sabtu</option>
                                        <option value="sunday">Minggu</option>
                                    </select>
                                </div>
                                <div id="day_of_month_field" class="hidden">
                                    <label for="day_of_month" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Tanggal dalam Bulan</label>
                                    <input type="number" name="day_of_month" id="day_of_month" min="1" max="31" value="1" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                                </div>
                            </div>

                            <!-- Format Selection -->
                            <div>
                                <label class="text-base font-medium text-gray-900 dark:text-gray-100">Format File</label>
                                <fieldset class="mt-4">
                                    <legend class="sr-only">File Format</legend>
                                    <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                        <div class="flex items-center">
                                            <input id="schedule_excel" name="schedule_format" type="radio" value="excel" checked class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300">
                                            <label for="schedule_excel" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                Excel (.xlsx)
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="schedule_csv" name="schedule_format" type="radio" value="csv" class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300">
                                            <label for="schedule_csv" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                CSV (.csv)
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="schedule_pdf" name="schedule_format" type="radio" value="pdf" class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300">
                                            <label for="schedule_pdf" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                                PDF (.pdf)
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <!-- Email Recipients -->
                            <div>
                                <label for="email_recipients" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Penerima Email (Opsional)</label>
                                <input type="email" name="email_recipients" id="email_recipients" placeholder="admin@umkm.com, manager@umkm.com" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Pisahkan beberapa email dengan koma</p>
                            </div>

                            <!-- Additional Options -->
                            <div>
                                <div class="flex items-center">
                                    <input id="schedule_active" name="schedule_active" type="checkbox" checked class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300 rounded">
                                    <label for="schedule_active" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                        Aktifkan jadwal setelah dibuat
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" onclick="createScheduledExport()" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Buat Jadwal
                </button>
                <button type="button" onclick="closeScheduleModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 dark:border-gray-600 shadow-sm px-4 py-2 bg-white dark:bg-gray-800 text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Batal
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function openScheduleModal() {
    document.getElementById('scheduleExportModal').classList.remove('hidden');
}

function closeScheduleModal() {
    document.getElementById('scheduleExportModal').classList.add('hidden');
}

function createScheduledExport() {
    // Get form data
    const scheduleName = document.getElementById('schedule_name').value;
    const dataType = document.querySelector('input[name="schedule_data_type"]:checked')?.value;
    const frequency = document.getElementById('frequency').value;
    const scheduleTime = document.getElementById('schedule_time').value;
    const fileFormat = document.querySelector('input[name="schedule_format"]:checked')?.value;
    const emailRecipients = document.getElementById('email_recipients').value;
    const isActive = document.getElementById('schedule_active').checked;

    if (!scheduleName || !dataType) {
        alert('Silakan lengkapi nama jadwal dan jenis data');
        return;
    }

    // Get additional schedule details based on frequency
    let scheduleDetails = { frequency, time: scheduleTime };
    
    if (frequency === 'weekly') {
        scheduleDetails.dayOfWeek = document.getElementById('day_of_week').value;
    } else if (frequency === 'monthly' || frequency === 'quarterly' || frequency === 'yearly') {
        scheduleDetails.dayOfMonth = document.getElementById('day_of_month').value;
    }

    // Simulate schedule creation
    closeScheduleModal();
    
    // Show notification
    alert(`Jadwal ekspor "${scheduleName}" berhasil dibuat!`);
    
    // Here you would typically send the data to your backend
    console.log('Schedule configuration:', {
        scheduleName,
        dataType,
        scheduleDetails,
        fileFormat,
        emailRecipients: emailRecipients.split(',').map(email => email.trim()).filter(Boolean),
        isActive
    });
}

// Show/hide additional fields based on frequency
document.getElementById('frequency').addEventListener('change', function() {
    const frequency = this.value;
    const dayOfWeekField = document.getElementById('day_of_week_field');
    const dayOfMonthField = document.getElementById('day_of_month_field');
    
    // Hide all additional fields first
    dayOfWeekField.classList.add('hidden');
    dayOfMonthField.classList.add('hidden');
    
    // Show relevant fields based on frequency
    if (frequency === 'weekly') {
        dayOfWeekField.classList.remove('hidden');
    } else if (frequency === 'monthly' || frequency === 'quarterly' || frequency === 'yearly') {
        dayOfMonthField.classList.remove('hidden');
    }
});
</script>
