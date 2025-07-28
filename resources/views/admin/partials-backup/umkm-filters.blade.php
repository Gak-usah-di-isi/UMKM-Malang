<!-- Search and Filter -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between space-y-3 sm:space-y-0 sm:space-x-3">
    <!-- Search Input -->
    <div class="flex-1 min-w-0">
        <label for="search" class="sr-only">Cari UMKM</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
            <input id="search" name="search" type="text" placeholder="Cari nama UMKM, kategori, atau lokasi..." 
                   class="block w-full pl-10 pr-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md leading-5 bg-white dark:bg-gray-800 placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm"
                   value="{{ request('search') }}">
        </div>
    </div>

    <!-- Filters -->
    <div class="flex space-x-3">
        <!-- Status Filter -->
        <select name="status" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md bg-white dark:bg-gray-800">
            <option value="">Semua Status</option>
            <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Menunggu</option>
            <option value="approved" {{ request('status') === 'approved' ? 'selected' : '' }}>Disetujui</option>
            <option value="rejected" {{ request('status') === 'rejected' ? 'selected' : '' }}>Ditolak</option>
            <option value="suspended" {{ request('status') === 'suspended' ? 'selected' : '' }}>Disuspend</option>
        </select>

        <!-- Category Filter -->
        <select name="category" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md bg-white dark:bg-gray-800">
            <option value="">Semua Kategori</option>
            <option value="makanan" {{ request('category') === 'makanan' ? 'selected' : '' }}>Makanan</option>
            <option value="minuman" {{ request('category') === 'minuman' ? 'selected' : '' }}>Minuman</option>
            <option value="kerajinan" {{ request('category') === 'kerajinan' ? 'selected' : '' }}>Kerajinan</option>
            <option value="fashion" {{ request('category') === 'fashion' ? 'selected' : '' }}>Fashion</option>
            <option value="teknologi" {{ request('category') === 'teknologi' ? 'selected' : '' }}>Teknologi</option>
            <option value="lainnya" {{ request('category') === 'lainnya' ? 'selected' : '' }}>Lainnya</option>
        </select>

        <!-- Apply Filter Button -->
        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Filter
        </button>

        <!-- Reset Filter Button -->
        <a href="{{ request()->url() }}" class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 shadow-sm text-sm font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Reset
        </a>
    </div>
</div>
