<!-- Navigation -->
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

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="/" class="nav-link text-gray-700 hover:text-green-600 transition-colors">Beranda</a>
                <a href="/about" class="nav-link text-gray-700 hover:text-green-600 transition-colors">Tentang</a>
                <a href="/products" class="nav-link text-gray-700 hover:text-green-600 transition-colors">Produk</a>
                <a href="/categories" class="nav-link text-gray-700 hover:text-green-600 transition-colors">Kategori</a>
                <a href="/umkm-list" class="nav-link text-gray-700 hover:text-green-600 transition-colors">UMKM</a>
                <a href="/articles" class="nav-link text-gray-700 hover:text-green-600 transition-colors">Berita</a>
                <a href="/contact" class="nav-link text-gray-700 hover:text-green-600 transition-colors">Kontak</a>
                <!-- Cek jika sudah login -->
                @auth
                    <!-- Dropdown Profile -->
                    <div class="relative">
                        <button id="profile-button"
                            class="w-10 h-10 rounded-full bg-gradient-to-r from-green-500 to-yellow-300 hover:shadow-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 mt-1 mr-4"
                            aria-label="Profile Menu">
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="profile-dropdown"
                            class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 py-1 z-50 opacity-0 invisible transform scale-95 transition-all duration-200 origin-top-right">

                            <!-- Profile Info -->
                            <div class="px-4 py-3 border-b border-gray-100">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-gradient-to-r from-green-500"></div>
                                    <div>
                                        <p class="text-sm font-medium text-gray-900">{{ auth()->user()->name }}</p>
                                        <p class="text-xs text-gray-500">{{ auth()->user()->email }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="py-1">
                                <a href="{{ route('profile.edit') }}"
                                    class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors duration-150">
                                    <svg class="w-4 h-4 mr-3 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    Profile
                                </a>
                            </div>

                            <div class="border-t border-gray-100 py-1">
                                <form method="POST" action="{{ route('logout') }}" id="logout-form" style="display: none;">
                                    @csrf
                                </form>
                                <a href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="flex items-center w-full px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors duration-150">
                                    <svg class="w-4 h-4 mr-3 text-red-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    Logout
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Jika belum login -->
                    <a href="{{ route('login') }}"
                        class="bg-gradient-to-r from-green-500 to-emerald-500 text-white px-6 py-2 rounded-full font-medium hover:shadow-md transition">
                        Gabung UMKM
                    </a>
                @endauth

            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="lg:hidden text-gray-700 text-2xl">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="lg:hidden fixed inset-0 bg-white z-50 transform translate-x-full transition-transform duration-300">
        <div class="p-6">
            <button id="close-menu" class="absolute top-6 right-6 text-2xl text-gray-700">
                <i class="fas fa-times"></i>
            </button>
            <div class="mt-16 space-y-6 ">
                <a href="/" class="block text-xl text-gray-700 hover:text-green-600">Beranda</a>
                <a href="/about" class="block text-xl text-gray-700 hover:text-green-600">Tentang</a>
                <a href="/products" class="block text-xl text-gray-700 hover:text-green-600">Produk</a>
                <a href="/categories" class="block text-xl text-gray-700 hover:text-green-600">Kategori</a>
                <a href="/umkm-list" class="block text-xl text-gray-700 hover:text-green-600">UMKM</a>
                <a href="/articles" class="block text-xl text-gray-700 hover:text-green-600">Berita</a>
                <a href="/contact" class="block text-xl text-gray-700 hover:text-green-600">Kontak</a>
                <button
                    class="bg-gradient-to-r from-green-500 to-emerald-500 text-white px-8 py-3 rounded-full font-medium mt-6">
                    Gabung UMKM
                </button>
            </div>
        </div>
    </div>
</nav>
