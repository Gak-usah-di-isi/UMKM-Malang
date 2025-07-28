<!-- Export Button Component - Reusable untuk semua export functionality -->
<div class="export-button-group inline-flex" data-export-type="{{ $type ?? 'default' }}">
    @if(isset($showDropdown) && $showDropdown)
        <!-- Dropdown Export Button -->
        <div class="relative inline-block text-left">
            <button type="button" onclick="toggleExportDropdown('{{ $dropdownId ?? 'exportDropdown' }}')"
                    class="inline-flex items-center justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-700">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                {{ $text ?? 'Export' }}
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>

            <div id="{{ $dropdownId ?? 'exportDropdown' }}" class="hidden origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5 z-50">
                <div class="py-1" role="menu">
                    <button type="button" onclick="executeExport('{{ $type ?? 'default' }}', 'excel')"
                            class="group flex items-center px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 w-full text-left">
                        <svg class="w-4 h-4 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Export ke Excel (.xlsx)
                    </button>
                    <button type="button" onclick="executeExport('{{ $type ?? 'default' }}', 'csv')"
                            class="group flex items-center px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 w-full text-left">
                        <svg class="w-4 h-4 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Export ke CSV (.csv)
                    </button>
                    <button type="button" onclick="executeExport('{{ $type ?? 'default' }}', 'pdf')"
                            class="group flex items-center px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 w-full text-left">
                        <svg class="w-4 h-4 mr-3 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                        Export ke PDF (.pdf)
                    </button>
                    
                    @if(isset($showCustom) && $showCustom)
                        <hr class="my-1 border-gray-200 dark:border-gray-600">
                        <button type="button" onclick="openCustomExportModal('{{ $type ?? 'default' }}')"
                                class="group flex items-center px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 w-full text-left">
                            <svg class="w-4 h-4 mr-3 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"/>
                            </svg>
                            Custom Export...
                        </button>
                    @endif
                </div>
            </div>
        </div>
    @else
        <!-- Simple Export Buttons -->
        <div class="inline-flex rounded-md shadow-sm" role="group">
            <button type="button" onclick="executeExport('{{ $type ?? 'default' }}', 'excel')"
                    class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                Excel
            </button>
            <button type="button" onclick="executeExport('{{ $type ?? 'default' }}', 'pdf')"
                    class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                </svg>
                PDF
            </button>
            @if(isset($showCsv) && $showCsv)
                <button type="button" onclick="executeExport('{{ $type ?? 'default' }}', 'csv')"
                        class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-r-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    CSV
                </button>
            @endif
        </div>
    @endif
</div>

<script>
// Export functionality management
class ExportManager {
    static exportQueue = [];
    static isExporting = false;
    
    static async executeExport(type, format, options = {}) {
        if (this.isExporting) {
            this.showNotification('Export sedang berjalan, mohon tunggu...', 'warning');
            return;
        }
        
        this.isExporting = true;
        this.showLoadingState(type, format);
        
        try {
            // Build export URL
            const params = new URLSearchParams({
                type: type,
                format: format,
                ...options
            });
            
            // Add selected items if any
            const selectedItems = this.getSelectedItems(type);
            if (selectedItems.length > 0) {
                params.append('selected', selectedItems.join(','));
            }
            
            const exportUrl = `/admin/export?${params.toString()}`;
            
            // Simulate export process (replace with actual API call)
            await this.delay(2000);
            
            // Trigger download
            const link = document.createElement('a');
            link.href = exportUrl;
            link.download = `${type}_export_${new Date().toISOString().split('T')[0]}.${format}`;
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            
            this.showNotification(`Export ${format.toUpperCase()} berhasil dimulai`, 'success');
            
        } catch (error) {
            console.error('Export error:', error);
            this.showNotification('Export gagal, silakan coba lagi', 'error');
        } finally {
            this.isExporting = false;
            this.hideLoadingState();
        }
    }
    
    static getSelectedItems(type) {
        const checkboxes = document.querySelectorAll(`input[name="selected_${type}[]"]:checked`);
        return Array.from(checkboxes).map(cb => cb.value);
    }
    
    static showLoadingState(type, format) {
        // Update all export buttons to show loading
        const buttons = document.querySelectorAll('.export-button-group button');
        buttons.forEach(button => {
            if (!button.disabled) {
                button.innerHTML = `
                    <svg class="animate-spin w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Exporting...
                `;
                button.disabled = true;
            }
        });
    }
    
    static hideLoadingState() {
        // Reset all export buttons
        setTimeout(() => {
            location.reload(); // Simple reset, bisa diganti dengan update DOM yang lebih spesifik
        }, 1000);
    }
    
    static delay(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }
    
    static showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 p-4 rounded-md shadow-lg z-50 transition-all duration-300 ${
            type === 'success' ? 'bg-green-500 text-white' : 
            type === 'error' ? 'bg-red-500 text-white' : 
            type === 'warning' ? 'bg-yellow-500 text-white' :
            'bg-blue-500 text-white'
        }`;
        notification.textContent = message;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.style.opacity = '0';
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 300);
        }, 3000);
    }
}

// Global functions yang bisa dipanggil dari template
function executeExport(type, format, options = {}) {
    ExportManager.executeExport(type, format, options);
}

function toggleExportDropdown(dropdownId) {
    const dropdown = document.getElementById(dropdownId);
    const isHidden = dropdown.classList.contains('hidden');
    
    // Close all other dropdowns
    document.querySelectorAll('[id$="Dropdown"]').forEach(d => {
        if (d.id !== dropdownId) {
            d.classList.add('hidden');
        }
    });
    
    // Toggle current dropdown
    if (isHidden) {
        dropdown.classList.remove('hidden');
    } else {
        dropdown.classList.add('hidden');
    }
}

function openCustomExportModal(type) {
    ExportManager.showNotification('Custom export modal akan segera tersedia', 'info');
}

// Close dropdowns when clicking outside
document.addEventListener('click', function(event) {
    if (!event.target.closest('.export-button-group')) {
        document.querySelectorAll('[id$="Dropdown"]').forEach(dropdown => {
            dropdown.classList.add('hidden');
        });
    }
});

</script>
