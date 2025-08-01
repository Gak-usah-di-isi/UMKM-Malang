@extends('core.landingPage')

@section('title', 'UMKM Kota Malang')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="min-h-screen bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 flex items-center relative overflow-hidden pt-20">
        <!-- Animated background elements -->
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-20 left-10 w-32 h-32 bg-green-200 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
            <div class="absolute top-40 right-10 w-32 h-32 bg-emerald-200 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-8 left-20 w-32 h-32 bg-teal-200 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Hero Content -->
                <div class="text-gray-800 space-y-8 order-2 lg:order-1">
                    <div class="section-reveal">
                        <div class="inline-flex items-center gap-2 bg-green-100 backdrop-blur-sm rounded-full px-6 py-2 mb-6">
                            <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                            <span class="text-green-700 font-medium">Platform Digital UMKM</span>
                        </div>
                        <h1 class="text-5xl lg:text-6xl font-black leading-tight">
                            Discover Amazing
                            <span class="block bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Local Products</span>
                            <span class="block text-3xl lg:text-4xl font-medium text-gray-600">Kota Malang</span>
                        </h1>
                    </div>

                    <div class="section-reveal">
                        <p class="text-xl lg:text-xl text-gray-600 leading-relaxed">
                            Platform digital yang menghubungkan produk UMKM berkualitas dari Kota Malang dengan konsumen. 
                            Dukung ekonomi lokal dengan berbelanja produk asli buatan tangan pengrajin lokal.
                        </p>
                    </div>

                    <div class="section-reveal flex flex-col sm:flex-row gap-4">
                        <button class="bg-gradient-to-r from-green-500 to-emerald-500 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-xl transition-all transform hover:scale-105">
                            <i class="fas fa-search mr-2"></i>
                            Jelajahi Produk
                        </button>
                        <button class="backdrop-blur-sm bg-white/60 border border-white/30 text-green-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-white/80 transition-all">
                            <i class="fas fa-play mr-2"></i>
                            Lihat Video
                        </button>
                    </div>

                    <div class="section-reveal grid grid-cols-3 gap-6 pt-8">
                        <div class="text-center">
                            <div class="text-3xl font-black bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">500+</div>
                            <div class="text-gray-500">UMKM Terdaftar</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-black bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">2000+</div>
                            <div class="text-gray-500">Produk Tersedia</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-black bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">10K+</div>
                            <div class="text-gray-500">Pelanggan Puas</div>
                        </div>
                    </div>
                </div>

                <!-- Hero Image -->
                <div class="section-reveal order-1 lg:order-2">
                    <div class="relative">
                        <div class="w-full h-96 lg:h-[500px] backdrop-blur-lg bg-white/80 border border-white/20 rounded-3xl flex items-center justify-center">
                            <div class="text-center text-green-600">
                                <i class="fas fa-store text-6xl mb-4 opacity-70"></i>
                                <p class="text-xl opacity-75">Showcase Produk UMKM</p>
                            </div>
                        </div>
                        <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-gradient-to-r from-amber-400 to-orange-500 rounded-full flex items-center justify-center animate-float shadow-2xl">
                            <i class="fas fa-star text-white text-3xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Search Section -->
    <section class="py-16 bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 relative -mt-20 mx-6">
        <div class="container mx-auto">
            <div class="backdrop-blur-lg bg-white/80 border border-white/20 rounded-3xl shadow-2xl p-8">
                <div class="grid lg:grid-cols-4 gap-4">
                    <div class="lg:col-span-2">
                        <input type="text" placeholder="Cari produk UMKM..."
                            class="w-full px-6 py-4 rounded-2xl border border-gray-200 focus:border-green-500 focus:outline-none focus:ring-4 focus:ring-green-200 text-lg">
                    </div>
                    <div>
                        <select class="appearance-none w-full px-6 py-4 rounded-2xl border border-gray-200 focus:border-green-500 focus:outline-none focus:ring-4 focus:ring-green-200 text-lg cursor-pointer">
                            <option>Semua Kategori</option>
                            <option>Kuliner</option>
                            <option>Fashion</option>
                            <option>Kerajinan</option>
                            <option>Herbal</option>
                            <option>Jasa</option>
                        </select>
                    </div>
                    <div>
                        <button class="w-full bg-gradient-to-r from-green-500 to-emerald-500 text-white px-6 py-4 rounded-2xl font-semibold text-lg hover:shadow-xl transition-all">
                            <i class="fas fa-search mr-2"></i>
                            Cari
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Produk Unggulan -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 section-reveal">
                <h2 class="text-4xl lg:text-5xl font-black text-gray-800 mb-6">
                    Produk <span class="bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Unggulan</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Tiga produk terbaik dan paling populer dari UMKM Kota Malang
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Produk Unggulan 1 -->
                <div class="section-reveal group relative">
                    <div class="absolute -top-2 -left-2 z-20 bg-gradient-to-r from-amber-400 to-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg animate-pulse">
                        🏆 #1 Unggulan
                    </div>
                    <div class="backdrop-blur-sm bg-white/60 border border-white/30 rounded-3xl p-6 border-neutral-200 transition-all duration-500 transform hover:-translate-y-3 hover:border-green-200 cursor-pointer overflow-hidden relative shadow-xl">
                        <div class="absolute inset-0 hover:bg-slate-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-3xl"></div>
                        
                        <div class="relative mb-4 overflow-hidden rounded-2xl">
                            <div class="h-64 bg-gradient-to-br from-red-200 to-red-300 flex items-center justify-center transform group-hover:scale-110 transition-transform duration-500">
                                <i class="fas fa-cookie-bite text-red-600 text-6xl"></i>
                            </div>
                        </div>

                        <div class="space-y-3 relative z-10">
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-xs text-green-600 font-medium bg-green-100 px-3 py-1 rounded-full">Makanan</span>
                                <div class="flex items-center gap-1">
                                    <span class="text-yellow-400">⭐</span>
                                    <span class="font-medium text-gray-600">4.9</span>
                                </div>
                            </div>
                            
                            <h3 class="font-bold text-gray-800 group-hover:text-green-600 transition-colors duration-300">Keripik Tempe Original</h3>
                            <p class="text-gray-600 text-sm">Keripik tempe renyah dengan bumbu rahasia khas Malang yang sudah terkenal hingga mancanegara</p>
                            
                            <div class="flex items-center justify-between">
                                <p class="text-xl font-black bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Rp 25.000</p>
                            </div>

                            <a href="#" class="flex items-center justify-center gap-2 bg-green-600 text-white font-semibold rounded-full px-4 py-2 hover:bg-green-700 transition-colors duration-300 group">
                                <span class="flex items-center justify-center gap-2">
                                    <span class="text-xs">Lihat Detail</span>
                                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Produk Unggulan 2 -->
                <div class="section-reveal group relative">
                    <div class="absolute -top-2 -left-2 z-20 bg-gradient-to-r from-amber-400 to-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                        🥈 #2 Unggulan
                    </div>
                    <div class="backdrop-blur-sm bg-white/60 border border-white/30 rounded-3xl p-6 border-neutral-200 transition-all duration-500 transform hover:-translate-y-3 hover:border-green-200 cursor-pointer overflow-hidden relative shadow-xl">
                        <div class="absolute inset-0 hover:bg-slate-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-3xl"></div>
                        
                        <div class="relative mb-4 overflow-hidden rounded-2xl">
                            <div class="h-64 bg-gradient-to-br from-purple-200 to-purple-300 flex items-center justify-center transform group-hover:scale-110 transition-transform duration-500">
                                <i class="fas fa-gem text-purple-600 text-6xl"></i>
                            </div>
                        </div>

                        <div class="space-y-3 relative z-10">
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-xs text-green-600 font-medium bg-green-100 px-3 py-1 rounded-full">Fashion</span>
                                <div class="flex items-center gap-1">
                                    <span class="text-yellow-400">⭐</span>
                                    <span class="font-medium text-gray-600">4.8</span>
                                </div>
                            </div>
                            
                            <h3 class="font-bold text-gray-800 group-hover:text-green-600 transition-colors duration-300">Tas Rajut Handmade</h3>
                            <p class="text-gray-600 text-sm">Tas rajut cantik buatan tangan dengan kualitas premium dan desain eksklusif</p>
                            
                            <div class="flex items-center justify-between">
                                <p class="text-xl font-black bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Rp 125.000</p>
                            </div>

                            <a href="#" class="flex items-center justify-center gap-2 bg-green-600 text-white font-semibold rounded-full px-4 py-2 hover:bg-green-700 transition-colors duration-300 group">
                                <span class="flex items-center justify-center gap-2">
                                    <span class="text-xs">Lihat Detail</span>
                                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Produk Unggulan 3 -->
                <div class="section-reveal group relative">
                    <div class="absolute -top-2 -left-2 z-20 bg-gradient-to-r from-amber-400 to-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                        🥉 #3 Unggulan
                    </div>
                    <div class="backdrop-blur-sm bg-white/60 border border-white/30 rounded-3xl p-6 border-neutral-200 transition-all duration-500 transform hover:-translate-y-3 hover:border-green-200 cursor-pointer overflow-hidden relative shadow-xl">
                        <div class="absolute inset-0 hover:bg-slate-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-3xl"></div>
                        
                        <div class="relative mb-4 overflow-hidden rounded-2xl">
                            <div class="h-64 bg-gradient-to-br from-yellow-200 to-yellow-300 flex items-center justify-center transform group-hover:scale-110 transition-transform duration-500">
                                <i class="fas fa-coffee text-yellow-600 text-6xl"></i>
                            </div>
                        </div>

                        <div class="space-y-3 relative z-10">
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-xs text-green-600 font-medium bg-green-100 px-3 py-1 rounded-full">Minuman</span>
                                <div class="flex items-center gap-1">
                                    <span class="text-yellow-400">⭐</span>
                                    <span class="font-medium text-gray-600">4.9</span>
                                </div>
                            </div>
                            
                            <h3 class="font-bold text-gray-800 group-hover:text-green-600 transition-colors duration-300">Kopi Arabika Malang</h3>
                            <p class="text-gray-600 text-sm">Kopi premium dari perkebunan lokal Malang dengan cita rasa yang khas dan aroma yang memikat</p>
                            
                            <div class="flex items-center justify-between">
                                <p class="text-xl font-black bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Rp 85.000</p>
                            </div>

                            <a href="#" class="flex items-center justify-center gap-2 bg-green-600 text-white font-semibold rounded-full px-4 py-2 hover:bg-green-700 transition-colors duration-300 group">
                                <span class="flex items-center justify-center gap-2">
                                    <span class="text-xs">Lihat Detail</span>
                                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Produk Terbaru & Terfavorit -->
    <section class="py-20 bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 section-reveal">
                <h2 class="text-4xl lg:text-5xl font-black text-gray-800 mb-6">
                    Produk <span class="bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Terbaru & Terfavorit</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8">
                    Koleksi terbaru dan produk paling diminati dari UMKM Kota Malang
                </p>
                
                <!-- Filter Buttons -->
                <div class="flex justify-center gap-4 mb-8">
                    <button id="filterNew" class="filter-btn backdrop-blur-sm bg-white/70 text-gray-700 border-2 border-gray-300 px-6 py-3 rounded-full font-semibold transition-all duration-300 hover:border-green-600 hover:text-green-600">
                        Produk Terbaru
                    </button>
                    <button id="filterFavorite" class="filter-btn backdrop-blur-sm bg-white/70 text-gray-700 border-2 border-gray-300 px-6 py-3 rounded-full font-semibold transition-all duration-300 hover:border-green-600 hover:text-green-600">
                        Produk Favorit
                    </button>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6" id="productGrid">
                <!-- Produk Cards -->
                <!-- Produk 1 -->
                <div class="section-reveal group product-card" data-category="baru">
                    <div class="backdrop-blur-sm bg-white/60 border border-white/30 rounded-2xl overflow-hidden transition-all duration-500 transform hover:-translate-y-2 hover:border-green-200 cursor-pointer shadow-lg">
                        <div class="h-48 bg-gradient-to-br from-green-200 to-green-300 flex items-center justify-center relative">
                            <i class="fas fa-seedling text-green-600 text-4xl"></i>
                            <span class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 rounded text-xs font-bold">BARU</span>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-xs text-green-600 font-medium bg-green-100 px-2 py-1 rounded-full">Herbal</span>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs text-gray-600 ml-1">4.7</span>
                                </div>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-green-600 transition-colors">Jamu Tradisional</h3>
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-black bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Rp 35.000</span>
                                <button class="bg-green-600 text-white px-3 py-2 rounded-full text-xs hover:bg-green-700">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div class="section-reveal group product-card" data-category="hot">
                    <div class="backdrop-blur-sm bg-white/60 border border-white/30 rounded-2xl overflow-hidden transition-all duration-500 transform hover:-translate-y-2 hover:border-green-200 cursor-pointer shadow-lg">
                        <div class="h-48 bg-gradient-to-br from-pink-200 to-pink-300 flex items-center justify-center relative">
                            <i class="fas fa-cake text-pink-600 text-4xl"></i>
                            <span class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">HOT</span>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-xs text-green-600 font-medium bg-green-100 px-2 py-1 rounded-full">Makanan</span>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs text-gray-600 ml-1">4.8</span>
                                </div>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-green-600 transition-colors">Kue Tradisional</h3>
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-black bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Rp 45.000</span>
                                <button class="bg-green-600 text-white px-3 py-2 rounded-full text-xs hover:bg-green-700">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div class="section-reveal group product-card" data-category="favorit">
                    <div class="backdrop-blur-sm bg-white/60 border border-white/30 rounded-2xl overflow-hidden transition-all duration-500 transform hover:-translate-y-2 hover:border-green-200 cursor-pointer shadow-lg">
                        <div class="h-48 bg-gradient-to-br from-blue-200 to-blue-300 flex items-center justify-center relative">
                            <i class="fas fa-shirt text-blue-600 text-4xl"></i>
                            <span class="absolute top-2 left-2 bg-purple-500 text-white px-2 py-1 rounded text-xs font-bold">FAVORIT</span>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-xs text-green-600 font-medium bg-green-100 px-2 py-1 rounded-full">Fashion</span>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs text-gray-600 ml-1">4.6</span>
                                </div>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-green-600 transition-colors">Batik Modern</h3>
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-black bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Rp 150.000</span>
                                <button class="bg-green-600 text-white px-3 py-2 rounded-full text-xs hover:bg-green-700">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produk 4 -->
                <div class="section-reveal group product-card" data-category="baru">
                    <div class="backdrop-blur-sm bg-white/60 border border-white/30 rounded-2xl overflow-hidden transition-all duration-500 transform hover:-translate-y-2 hover:border-green-200 cursor-pointer shadow-lg">
                        <div class="h-48 bg-gradient-to-br from-orange-200 to-orange-300 flex items-center justify-center relative">
                            <i class="fas fa-palette text-orange-600 text-4xl"></i>
                            <span class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 rounded text-xs font-bold">BARU</span>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-xs text-green-600 font-medium bg-green-100 px-2 py-1 rounded-full">Kerajinan</span>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs text-gray-600 ml-1">4.9</span>
                                </div>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-green-600 transition-colors">Kerajinan Bambu</h3>
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-black bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Rp 75.000</span>
                                <button class="bg-green-600 text-white px-3 py-2 rounded-full text-xs hover:bg-green-700">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produk 5 -->
                <div class="section-reveal group product-card" data-category="hot">
                    <div class="backdrop-blur-sm bg-white/60 border border-white/30 rounded-2xl overflow-hidden transition-all duration-500 transform hover:-translate-y-2 hover:border-green-200 cursor-pointer shadow-lg">
                        <div class="h-48 bg-gradient-to-br from-teal-200 to-teal-300 flex items-center justify-center relative">
                            <i class="fas fa-leaf text-teal-600 text-4xl"></i>
                            <span class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">HOT</span>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-xs text-green-600 font-medium bg-green-100 px-2 py-1 rounded-full">Herbal</span>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs text-gray-600 ml-1">4.5</span>
                                </div>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-green-600 transition-colors">Minyak Herbal</h3>
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-black bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Rp 50.000</span>
                                <button class="bg-green-600 text-white px-3 py-2 rounded-full text-xs hover:bg-green-700">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produk 6 -->
                <div class="section-reveal group product-card" data-category="favorit">
                    <div class="backdrop-blur-sm bg-white/60 border border-white/30 rounded-2xl overflow-hidden transition-all duration-500 transform hover:-translate-y-2 hover:border-green-200 cursor-pointer shadow-lg">
                        <div class="h-48 bg-gradient-to-br from-indigo-200 to-indigo-300 flex items-center justify-center relative">
                            <i class="fas fa-mug-hot text-indigo-600 text-4xl"></i>
                            <span class="absolute top-2 left-2 bg-purple-500 text-white px-2 py-1 rounded text-xs font-bold">FAVORIT</span>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-xs text-green-600 font-medium bg-green-100 px-2 py-1 rounded-full">Minuman</span>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs text-gray-600 ml-1">4.7</span>
                                </div>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-green-600 transition-colors">Teh Herbal</h3>
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-black bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Rp 30.000</span>
                                <button class="bg-green-600 text-white px-3 py-2 rounded-full text-xs hover:bg-green-700">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produk 7 -->
                <div class="section-reveal group product-card" data-category="baru">
                    <div class="backdrop-blur-sm bg-white/60 border border-white/30 rounded-2xl overflow-hidden transition-all duration-500 transform hover:-translate-y-2 hover:border-green-200 cursor-pointer shadow-lg">
                        <div class="h-48 bg-gradient-to-br from-rose-200 to-rose-300 flex items-center justify-center relative">
                            <i class="fas fa-gift text-rose-600 text-4xl"></i>
                            <span class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 rounded text-xs font-bold">BARU</span>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-xs text-green-600 font-medium bg-green-100 px-2 py-1 rounded-full">Souvenir</span>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs text-gray-600 ml-1">4.8</span>
                                </div>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-green-600 transition-colors">Souvenir Khas</h3>
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-black bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Rp 25.000</span>
                                <button class="bg-green-600 text-white px-3 py-2 rounded-full text-xs hover:bg-green-700">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produk 8 -->
                <div class="section-reveal group product-card" data-category="hot">
                    <div class="backdrop-blur-sm bg-white/60 border border-white/30 rounded-2xl overflow-hidden transition-all duration-500 transform hover:-translate-y-2 hover:border-green-200 cursor-pointer shadow-lg">
                        <div class="h-48 bg-gradient-to-br from-amber-200 to-amber-300 flex items-center justify-center relative">
                            <i class="fas fa-bread-slice text-amber-600 text-4xl"></i>
                            <span class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">HOT</span>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-xs text-green-600 font-medium bg-green-100 px-2 py-1 rounded-full">Makanan</span>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs text-gray-600 ml-1">4.6</span>
                                </div>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-green-600 transition-colors">Roti Artisan</h3>
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-black bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Rp 40.000</span>
                                <button class="bg-green-600 text-white px-3 py-2 rounded-full text-xs hover:bg-green-700">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12 section-reveal">
                <button class="bg-gradient-to-r from-green-500 to-emerald-500 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-xl transition-all">
                    Lihat Semua Produk
                    <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Agenda Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 section-reveal">
                <h2 class="text-4xl lg:text-5xl font-black text-gray-800 mb-6">
                    Agenda <span class="bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Terbaru</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Event dan kegiatan terbaru untuk pengembangan UMKM Kota Malang
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Agenda 1 -->
                <div class="section-reveal backdrop-blur-sm bg-white/60 border border-white/30 rounded-3xl shadow-lg overflow-hidden border-l-4 border-green-500 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-calendar-alt text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <div class="text-sm text-gray-500">15 Agustus 2025</div>
                                <div class="text-sm font-semibold text-green-600">09:00 - 16:00 WIB</div>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-3">Workshop Digital Marketing UMKM</h3>
                        <p class="text-gray-600 text-sm mb-4">Pelatihan strategi pemasaran digital untuk meningkatkan penjualan online</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-green-600 font-medium bg-green-100 px-2 py-1 rounded">Gratis</span>
                            <button class="text-green-600 text-sm font-semibold hover:text-green-700">Daftar</button>
                        </div>
                    </div>
                </div>

                <!-- Agenda 2 -->
                <div class="section-reveal backdrop-blur-sm bg-white/60 border border-white/30 rounded-3xl shadow-lg overflow-hidden border-l-4 border-emerald-500 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-handshake text-emerald-600 text-xl"></i>
                            </div>
                            <div>
                                <div class="text-sm text-gray-500">22 Agustus 2025</div>
                                <div class="text-sm font-semibold text-emerald-600">10:00 - 15:00 WIB</div>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-3">Pameran Produk UMKM</h3>
                        <p class="text-gray-600 text-sm mb-4">Pameran dan expo produk UMKM terbaik Kota Malang dengan berbagai kategori</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-emerald-600 font-medium bg-emerald-100 px-2 py-1 rounded">Gratis</span>
                            <button class="text-emerald-600 text-sm font-semibold hover:text-emerald-700">Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Agenda 3 -->
                <div class="section-reveal backdrop-blur-sm bg-white/60 border border-white/30 rounded-3xl shadow-lg overflow-hidden border-l-4 border-teal-500 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-users text-teal-600 text-xl"></i>
                            </div>
                            <div>
                                <div class="text-sm text-gray-500">30 Agustus 2025</div>
                                <div class="text-sm font-semibold text-teal-600">13:00 - 17:00 WIB</div>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-3">Seminar Keuangan UMKM</h3>
                        <p class="text-gray-600 text-sm mb-4">Seminar pengelolaan keuangan dan akses permodalan untuk UMKM</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-teal-600 font-medium bg-teal-100 px-2 py-1 rounded">Rp 50K</span>
                            <button class="text-teal-600 text-sm font-semibold hover:text-teal-700">Daftar</button>
                        </div>
                    </div>
                </div>

                <!-- Agenda 4 -->
                <div class="section-reveal backdrop-blur-sm bg-white/60 border border-white/30 rounded-3xl shadow-lg overflow-hidden border-l-4 border-orange-500 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-trophy text-orange-600 text-xl"></i>
                            </div>
                            <div>
                                <div class="text-sm text-gray-500">5 September 2025</div>
                                <div class="text-sm font-semibold text-orange-600">08:00 - 18:00 WIB</div>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-3">Kompetisi Inovasi UMKM</h3>
                        <p class="text-gray-600 text-sm mb-4">Kompetisi inovasi produk dan layanan UMKM dengan hadiah menarik</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-orange-600 font-medium bg-orange-100 px-2 py-1 rounded">Gratis</span>
                            <button class="text-orange-600 text-sm font-semibold hover:text-orange-700">Ikuti</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12 section-reveal">
                <button class="bg-gradient-to-r from-green-500 to-emerald-500 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-xl transition-all">
                    Lihat Semua Agenda
                    <i class="fas fa-calendar-plus ml-2"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section id="news" class="py-20 bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50">
         <div class="container mx-auto px-6">
             <div class="text-center mb-16 section-reveal">
                 <h2 class="text-4xl lg:text-5xl font-black text-gray-800 mb-6">
                     Berita & <span class="bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Artikel Terbaru</span>
                 </h2>
                 <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                     Informasi terbaru seputar perkembangan UMKM dan tips bisnis untuk memajukan usaha Anda
                 </p>
             </div>
     
             <div class="grid lg:grid-cols-2 xl:grid-cols-4 gap-8 mb-12">
                 <!-- Article 1 -->
                 <div class="section-reveal group backdrop-blur-sm bg-white/60 border border-white/30 rounded-3xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                     <div class="h-48 bg-gradient-to-br from-blue-200 to-blue-300 flex items-center justify-center">
                         <i class="fas fa-newspaper text-blue-600 text-4xl"></i>
                     </div>
                     <div class="p-6">
                         <div class="flex items-center space-x-3 mb-4">
                             <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm font-medium">Tips Bisnis</span>
                             <span class="text-gray-500 text-sm">2 hari lalu</span>
                         </div>
                         <h3 class="text-lg font-bold text-gray-800 mb-3 line-clamp-2 group-hover:text-green-600 transition-colors">
                             5 Tips Meningkatkan Penjualan UMKM di Era Digital
                         </h3>
                         <p class="text-gray-600 mb-4 text-sm line-clamp-3">
                             Panduan lengkap untuk mengoptimalkan strategi pemasaran digital bagi pelaku UMKM...
                         </p>
                         <button class="text-green-600 font-semibold hover:text-green-700 transition-colors text-sm">
                             Baca Selengkapnya
                             <i class="fas fa-arrow-right ml-2"></i>
                         </button>
                     </div>
                 </div>
     
                 <!-- Article 2 -->
                 <div class="section-reveal group backdrop-blur-sm bg-white/60 border border-white/30 rounded-3xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                     <div class="h-48 bg-gradient-to-br from-green-200 to-green-300 flex items-center justify-center">
                         <i class="fas fa-calendar-alt text-green-600 text-4xl"></i>
                     </div>
                     <div class="p-6">
                         <div class="flex items-center space-x-3 mb-4">
                             <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm font-medium">Event</span>
                             <span class="text-gray-500 text-sm">1 minggu lalu</span>
                         </div>
                         <h3 class="text-lg font-bold text-gray-800 mb-3 line-clamp-2 group-hover:text-green-600 transition-colors">
                             Pelatihan Digital Marketing untuk UMKM Malang
                         </h3>
                         <p class="text-gray-600 mb-4 text-sm line-clamp-3">
                             Workshop gratis bagi pelaku UMKM untuk meningkatkan kemampuan pemasaran online...
                         </p>
                         <button class="text-green-600 font-semibold hover:text-green-700 transition-colors text-sm">
                             Baca Selengkapnya
                             <i class="fas fa-arrow-right ml-2"></i>
                         </button>
                     </div>
                 </div>
     
                 <!-- Article 3 -->
                 <div class="section-reveal group backdrop-blur-sm bg-white/60 border border-white/30 rounded-3xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                     <div class="h-48 bg-gradient-to-br from-purple-200 to-purple-300 flex items-center justify-center">
                         <i class="fas fa-trophy text-purple-600 text-4xl"></i>
                     </div>
                     <div class="p-6">
                         <div class="flex items-center space-x-3 mb-4">
                             <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm font-medium">Kisah Sukses</span>
                             <span class="text-gray-500 text-sm">3 hari lalu</span>
                         </div>
                         <h3 class="text-lg font-bold text-gray-800 mb-3 line-clamp-2 group-hover:text-green-600 transition-colors">
                             Dari Hobi Menjadi Bisnis: Cerita Sukses UMKM Batik
                         </h3>
                         <p class="text-gray-600 mb-4 text-sm line-clamp-3">
                             Inspirasi dari Bu Sari yang berhasil mengembangkan usaha batik hingga go internasional...
                         </p>
                         <button class="text-green-600 font-semibold hover:text-green-700 transition-colors text-sm">
                             Baca Selengkapnya
                             <i class="fas fa-arrow-right ml-2"></i>
                         </button>
                     </div>
                 </div>
     
                 <!-- Article 4 -->
                 <div class="section-reveal group backdrop-blur-sm bg-white/60 border border-white/30 rounded-3xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                     <div class="h-48 bg-gradient-to-br from-orange-200 to-orange-300 flex items-center justify-center">
                         <i class="fas fa-chart-line text-orange-600 text-4xl"></i>
                     </div>
                     <div class="p-6">
                         <div class="flex items-center space-x-3 mb-4">
                             <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm font-medium">Analisis</span>
                             <span class="text-gray-500 text-sm">5 hari lalu</span>
                         </div>
                         <h3 class="text-lg font-bold text-gray-800 mb-3 line-clamp-2 group-hover:text-green-600 transition-colors">
                             Tren UMKM 2024: Peluang dan Tantangan di Masa Depan
                         </h3>
                         <p class="text-gray-600 mb-4 text-sm line-clamp-3">
                             Analisis mendalam tentang perkembangan sektor UMKM dan prediksi untuk tahun mendatang...
                         </p>
                         <button class="text-green-600 font-semibold hover:text-green-700 transition-colors text-sm">
                             Baca Selengkapnya
                             <i class="fas fa-arrow-right ml-2"></i>
                         </button>
                     </div>
                 </div>
             </div>
     
             <!-- View All Button -->
             <div class="text-center section-reveal">
                 <button class="inline-flex items-center bg-gradient-to-r from-green-500 to-emerald-500 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-xl transition-all duration-300">
                     <i class="fas fa-newspaper mr-3"></i>
                     Lihat Semua Berita
                     <i class="fas fa-arrow-right ml-3"></i>
                 </button>
             </div>
         </div>
    </section>

    <!-- Join UMKM Section -->
    <section class="py-20 bg-gradient-to-br from-green-400 via-emerald-500 to-teal-600 relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-10 right-10 w-64 h-64 bg-white rounded-full animate-float"></div>
            <div class="absolute bottom-10 left-10 w-80 h-80 bg-white rounded-full animate-blob"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center text-white section-reveal">
                <h2 class="text-4xl lg:text-5xl font-black mb-8">
                    Bergabung dengan <span class="text-yellow-300">Komunitas UMKM</span>
                </h2>
                <p class="text-xl text-green-100 mb-12 max-w-3xl mx-auto">
                    Daftarkan usaha Anda dan jadilah bagian dari ekosistem UMKM terbesar di Kota Malang. 
                    Dapatkan akses ke ribuan pelanggan potensial.
                </p>
                
                <div class="grid md:grid-cols-3 gap-8 mb-12">
                    <div class="backdrop-blur-lg bg-white/20 border border-white/30 rounded-3xl p-8 text-center">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-user-plus text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Daftar Gratis</h3>
                        <p class="text-green-100">Pendaftaran mudah dan tanpa biaya untuk UMKM</p>
                    </div>
                    
                    <div class="backdrop-blur-lg bg-white/20 border border-white/30 rounded-3xl p-8 text-center">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-chart-line text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Tingkatkan Penjualan</h3>
                        <p class="text-green-100">Jangkauan pasar yang lebih luas untuk produk Anda</p>
                    </div>
                    
                    <div class="glass-effect rounded-3xl p-8 text-center">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-handshake text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Dukungan Penuh</h3>
                        <p class="text-blue-100">Bantuan teknis dan pelatihan bisnis berkelanjutan</p>
                    </div>
                </div>
                
                <button class="bg-white text-blue-600 px-12 py-4 rounded-full font-bold text-xl hover:bg-blue-50 transition-all transform hover:scale-105">
                    <i class="fas fa-rocket mr-3"></i>
                    Daftar Sekarang
                </button>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 section-reveal">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                    Kontak & <span class="bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Bantuan</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Ada pertanyaan? Tim kami siap membantu Anda 24/7
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-16">
                <div class="section-reveal">
                    <div class="space-y-8">
                        <div class="flex items-start space-x-6">
                            <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-blue-600 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Alamat Kantor</h3>
                                <p class="text-gray-600">
                                    Jl. Tugu No. 1, Klojen<br>
                                    Kota Malang, Jawa Timur 65111
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-6">
                            <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone text-green-600 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Telepon</h3>
                                <p class="text-gray-600">
                                    +62 341 123 4567<br>
                                    WhatsApp: +62 812 3456 7890
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-6">
                            <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-purple-600 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Email</h3>
                                <p class="text-gray-600">
                                    info@umkmmalang.go.id<br>
                                    support@umkmmalang.go.id
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-6">
                            <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-clock text-orange-600 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Jam Operasional</h3>
                                <p class="text-gray-600">
                                    Senin - Jumat: 08:00 - 17:00 WIB<br>
                                    Sabtu: 08:00 - 12:00 WIB
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="section-reveal">
                    <form class="bg-gray-50 rounded-3xl p-8 space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <input 
                                type="text" 
                                placeholder="Nama Lengkap"
                                class="w-full px-6 py-4 rounded-2xl border border-gray-200 focus:border-blue-500 focus:outline-none"
                            >
                            <input 
                                type="email" 
                                placeholder="Email"
                                class="w-full px-6 py-4 rounded-2xl border border-gray-200 focus:border-blue-500 focus:outline-none"
                            >
                        </div>
                        
                        <input 
                            type="text" 
                            placeholder="Subjek"
                            class="w-full px-6 py-4 rounded-2xl border border-gray-200 focus:border-blue-500 focus:outline-none"
                        >
                        
                        <textarea 
                            rows="6" 
                            placeholder="Pesan Anda"
                            class="w-full px-6 py-4 rounded-2xl border border-gray-200 focus:border-blue-500 focus:outline-none resize-none"
                        ></textarea>
                        
                        <button type="submit" class="w-full bg-gradient-to-r from-green-500 to-emerald-500 text-white py-4 rounded-2xl font-semibold text-lg">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const productCards = document.querySelectorAll('.product-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                filterButtons.forEach(btn => {
                    btn.classList.remove('active');
                    btn.classList.add('bg-white', 'text-gray-700', 'border-2', 'border-gray-300');
                    btn.classList.remove('bg-blue-600', 'text-white');
                });

                this.classList.add('active');
                this.classList.remove('bg-white', 'text-gray-700', 'border-2', 'border-gray-300');
                this.classList.add('bg-blue-600', 'text-white');

                let filterCategory = 'all';
                if (this.id === 'filterNew') {
                    filterCategory = 'baru';
                } else if (this.id === 'filterFavorite') {
                    filterCategory = 'favorit';
                }

                productCards.forEach(card => {
                    if (filterCategory === 'all' || card.dataset.category === filterCategory) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';
                        }, 100);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    });
</script>

@endsection
