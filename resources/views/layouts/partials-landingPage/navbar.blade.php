<!-- Navigation -->
<nav id="navbar" class="fixed w-full z-50 transition-all duration-300 bg-white shadow-sm">
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <div
                    class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                    <i class="fas fa-store text-white text-xl"></i>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-800">UMKM Malang</h1>
                    <p class="text-xs text-gray-600">Produk Lokal Berkualitas</p>
                </div>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="#home" class="nav-link text-gray-700 hover:text-blue-600 transition-colors">Beranda</a>
                <a href="#about" class="nav-link text-gray-700 hover:text-blue-600 transition-colors">Tentang</a>
                <a href="#products" class="nav-link text-gray-700 hover:text-blue-600 transition-colors">Produk</a>
                <a href="#categories" class="nav-link text-gray-700 hover:text-blue-600 transition-colors">Kategori</a>
                <a href="#umkm" class="nav-link text-gray-700 hover:text-blue-600 transition-colors">UMKM</a>
                <a href="#news" class="nav-link text-gray-700 hover:text-blue-600 transition-colors">Berita</a>
                <a href="#contact" class="nav-link text-gray-700 hover:text-blue-600 transition-colors">Kontak</a>
                <button class="btn-gradient text-white px-6 py-2 rounded-full font-medium">
                    Gabung UMKM
                </button>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="lg:hidden text-gray-700 text-2xl">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="lg:hidden fixed inset-0 bg-white z-40 transform translate-x-full transition-transform duration-300">
        <div class="p-6">
            <button id="close-menu" class="absolute top-6 right-6 text-2xl text-gray-700">
                <i class="fas fa-times"></i>
            </button>
            <div class="mt-16 space-y-6">
                <a href="#home" class="block text-xl text-gray-700 hover:text-blue-600">Beranda</a>
                <a href="#about" class="block text-xl text-gray-700 hover:text-blue-600">Tentang</a>
                <a href="#products" class="block text-xl text-gray-700 hover:text-blue-600">Produk</a>
                <a href="#categories" class="block text-xl text-gray-700 hover:text-blue-600">Kategori</a>
                <a href="#umkm" class="block text-xl text-gray-700 hover:text-blue-600">UMKM</a>
                <a href="#news" class="block text-xl text-gray-700 hover:text-blue-600">Berita</a>
                <a href="#contact" class="block text-xl text-gray-700 hover:text-blue-600">Kontak</a>
                <button class="btn-gradient text-white px-8 py-3 rounded-full font-medium mt-6">
                    Gabung UMKM
                </button>
            </div>
        </div>
    </div>
</nav>
