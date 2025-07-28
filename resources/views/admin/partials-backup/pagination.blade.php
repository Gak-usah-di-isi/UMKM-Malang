<!-- Pagination -->
@if(($totalPages ?? 1) > 1)
<nav class="bg-white dark:bg-gray-800 px-4 py-3 flex items-center justify-between border-t border-gray-200 dark:border-gray-600 sm:px-6" aria-label="Pagination">
    <div class="hidden sm:block">
        <p class="text-sm text-gray-700 dark:text-gray-300">
            Menampilkan
            <span class="font-medium">{{ ($currentPage ?? 1 - 1) * ($perPage ?? 10) + 1 }}</span>
            sampai
            <span class="font-medium">{{ min(($currentPage ?? 1) * ($perPage ?? 10), $total ?? 0) }}</span>
            dari
            <span class="font-medium">{{ $total ?? 0 }}</span>
            hasil
        </p>
    </div>
    <div class="flex-1 flex justify-between sm:justify-end">
        @if(($currentPage ?? 1) > 1)
            <a href="?page={{ ($currentPage ?? 1) - 1 }}" class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 text-sm font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700">
                Sebelumnya
            </a>
        @endif

        <div class="hidden md:-mt-px md:flex">
            @for($i = max(1, ($currentPage ?? 1) - 2); $i <= min(($totalPages ?? 1), ($currentPage ?? 1) + 2); $i++)
                @if($i == ($currentPage ?? 1))
                    <span class="border-blue-500 text-blue-600 border-t-2 pt-4 px-4 inline-flex items-center text-sm font-medium">
                        {{ $i }}
                    </span>
                @else
                    <a href="?page={{ $i }}" class="border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 border-t-2 pt-4 px-4 inline-flex items-center text-sm font-medium">
                        {{ $i }}
                    </a>
                @endif
            @endfor
        </div>

        @if(($currentPage ?? 1) < ($totalPages ?? 1))
            <a href="?page={{ ($currentPage ?? 1) + 1 }}" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 text-sm font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700">
                Selanjutnya
            </a>
        @endif
    </div>
</nav>
@endif
