<nav id="navbar" class="w-full sticky top-0 z-50 transition-all duration-300 bg-white shadow-sm">
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <div>
                    <img src="{{ asset('images/logo_1.svg') }}" alt="UMKM Malang Logo" class="h-[60px] w-lg">
                </div>
                <div>
                    <img src="{{ asset('images/logoumkm.jpeg') }}" alt="UMKM Malang Logo" class="h-[45px] w-lg">
                </div>
            </div>

            <a href="/" class="text-green-600 hover:text-green-700 font-medium">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali ke Beranda
            </a>

            <button id="mobile-menu-btn" class="lg:hidden text-gray-700 text-2xl">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>

    <div id="mobile-menu"
        class="lg:hidden fixed inset-0 bg-white z-50 transform translate-x-full transition-transform duration-300">
        <div class="p-6">
            <button id="close-menu" class="absolute top-6 right-6 text-2xl text-gray-700">
                <i class="fas fa-times"></i>
            </button>
            <div class="mt-16 space-y-6 ">
                <a href="/" class="text-green-600 hover:text-green-700 font-medium">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</nav>
