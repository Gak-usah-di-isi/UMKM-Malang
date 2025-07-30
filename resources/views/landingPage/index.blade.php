@extends('core.landingPage')

@section('title', 'UMKM Kota Malang')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="min-h-screen gradient-bg flex items-center relative overflow-hidden pt-20">
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-72 h-72 bg-white opacity-10 rounded-full animate-float"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-white opacity-5 rounded-full animate-bounce-slow"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Foto -->
                <div class="section-reveal order-2 lg:order-1">
                    <div class="relative">
                        <div class="w-full h-96 lg:h-[500px] bg-white bg-opacity-10 rounded-3xl backdrop-blur-sm border border-white border-opacity-20 flex items-center justify-center">
                            <div class="text-center text-white">
                                <i class="fas fa-store text-6xl mb-4 opacity-50"></i>
                                <p class="text-xl opacity-75">Showcase Produk UMKM</p>
                            </div>
                        </div>
                        <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-yellow-400 rounded-full flex items-center justify-center animate-bounce-slow">
                            <i class="fas fa-star text-white text-3xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Deskripsi -->
                <div class="text-white space-y-8 order-1 lg:order-2">
                    <div class="section-reveal">
                        <h1 class="text-5xl lg:text-7xl font-bold leading-tight">
                            Katalog
                            <span class="block text-yellow-300">UMKM</span>
                            <span class="block text-3xl lg:text-4xl font-medium">Kota Malang</span>
                        </h1>
                    </div>

                    <div class="section-reveal">
                        <p class="text-xl lg:text-2xl text-blue-100 leading-relaxed">
                            Platform digital yang menghubungkan produk UMKM berkualitas dari Kota Malang dengan konsumen. 
                            Dukung ekonomi lokal dengan berbelanja produk asli buatan tangan pengrajin lokal.
                        </p>
                    </div>

                    <div class="section-reveal flex flex-col sm:flex-row gap-4">
                        <button class="bg-white text-blue-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-blue-50 transition-all transform hover:scale-105">
                            <i class="fas fa-search mr-2"></i>
                            Jelajahi Produk
                        </button>
                        <button class="glass-effect text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:bg-opacity-20 transition-all">
                            <i class="fas fa-play mr-2"></i>
                            Lihat Video
                        </button>
                    </div>

                    <div class="section-reveal grid grid-cols-3 gap-6 pt-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold">500+</div>
                            <div class="text-blue-200">UMKM Terdaftar</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold">2000+</div>
                            <div class="text-blue-200">Produk Tersedia</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold">10K+</div>
                            <div class="text-blue-200">Pelanggan Puas</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Search Section -->
    <section class="py-16 bg-white relative -mt-20 mx-6">
        <div class="container mx-auto">
            <div class="bg-white rounded-3xl shadow-2xl p-8 glass-effect">
                <div class="grid lg:grid-cols-4 gap-4">
                    <div class="lg:col-span-2">
                        <input type="text" placeholder="Cari produk UMKM..."
                            class="w-full px-6 py-4 rounded-2xl border border-gray-200 focus:border-blue-500 focus:outline-none text-lg">
                    </div>
                    <div>
                        <select
                            class="w-full px-6 py-4 rounded-2xl border border-gray-200 focus:border-blue-500 focus:outline-none text-lg">
                            <option>Semua Kategori</option>
                            <option>Makanan & Minuman</option>
                            <option>Fashion & Aksesoris</option>
                            <option>Kerajinan & Souvenir</option>
                            <option>Produk Herbal</option>
                            <option>Jasa & Layanan</option>
                        </select>
                    </div>
                    <div>
                        <button class="w-full btn-gradient text-white px-6 py-4 rounded-2xl font-semibold text-lg">
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
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                    Produk <span class="text-gradient">Unggulan</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Tiga produk terbaik dan paling populer dari UMKM Kota Malang
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Produk Unggulan 1 -->
                <div class="section-reveal card-hover bg-white rounded-3xl shadow-xl overflow-hidden border-2 border-yellow-200">
                    <div class="relative">
                        <div class="h-64 bg-gradient-to-br from-red-200 to-red-300 flex items-center justify-center">
                            <i class="fas fa-cookie-bite text-red-600 text-6xl"></i>
                        </div>
                        <div class="absolute top-4 right-4 bg-yellow-400 text-white px-3 py-1 rounded-full text-sm font-bold">
                            <i class="fas fa-crown mr-1"></i>
                            #1 Unggulan
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-blue-600 font-medium bg-blue-100 px-3 py-1 rounded-full">Makanan</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-gray-600 ml-1 font-semibold">4.9</span>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Keripik Tempe Original</h3>
                        <p class="text-gray-600 mb-6">Keripik tempe renyah dengan bumbu rahasia khas Malang yang sudah terkenal hingga mancanegara</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-600">Rp 25.000</span>
                            <button class="bg-yellow-400 text-white px-6 py-3 rounded-full font-semibold hover:bg-yellow-500 transition-colors">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Produk Unggulan 2 -->
                <div class="section-reveal card-hover bg-white rounded-3xl shadow-xl overflow-hidden border-2 border-yellow-200">
                    <div class="relative">
                        <div class="h-64 bg-gradient-to-br from-purple-200 to-purple-300 flex items-center justify-center">
                            <i class="fas fa-gem text-purple-600 text-6xl"></i>
                        </div>
                        <div class="absolute top-4 right-4 bg-yellow-400 text-white px-3 py-1 rounded-full text-sm font-bold">
                            <i class="fas fa-crown mr-1"></i>
                            #2 Unggulan
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-blue-600 font-medium bg-blue-100 px-3 py-1 rounded-full">Fashion</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-gray-600 ml-1 font-semibold">4.8</span>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Tas Rajut Handmade</h3>
                        <p class="text-gray-600 mb-6">Tas rajut cantik buatan tangan dengan kualitas premium dan desain eksklusif</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-600">Rp 125.000</span>
                            <button class="bg-yellow-400 text-white px-6 py-3 rounded-full font-semibold hover:bg-yellow-500 transition-colors">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Produk Unggulan 3 -->
                <div class="section-reveal card-hover bg-white rounded-3xl shadow-xl overflow-hidden border-2 border-yellow-200">
                    <div class="relative">
                        <div class="h-64 bg-gradient-to-br from-yellow-200 to-yellow-300 flex items-center justify-center">
                            <i class="fas fa-coffee text-yellow-600 text-6xl"></i>
                        </div>
                        <div class="absolute top-4 right-4 bg-yellow-400 text-white px-3 py-1 rounded-full text-sm font-bold">
                            <i class="fas fa-crown mr-1"></i>
                            #3 Unggulan
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-blue-600 font-medium bg-blue-100 px-3 py-1 rounded-full">Minuman</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-gray-600 ml-1 font-semibold">4.9</span>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Kopi Arabika Malang</h3>
                        <p class="text-gray-600 mb-6">Kopi premium dari perkebunan lokal Malang dengan cita rasa yang khas dan aroma yang memikat</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-600">Rp 85.000</span>
                            <button class="bg-yellow-400 text-white px-6 py-3 rounded-full font-semibold hover:bg-yellow-500 transition-colors">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Produk Terbaru/Terfavorit -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 section-reveal">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                    Produk <span class="text-gradient">Terbaru & Terfavorit</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Koleksi terbaru dan produk paling diminati dari UMKM Kota Malang
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Produk Cards -->
                <!-- Produk 1 -->
                <div class="section-reveal card-hover bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-green-200 to-green-300 flex items-center justify-center relative">
                        <i class="fas fa-seedling text-green-600 text-4xl"></i>
                        <span class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 rounded text-xs font-bold">BARU</span>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs text-blue-600 font-medium">Herbal</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs text-gray-600 ml-1">4.7</span>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Jamu Tradisional</h3>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-blue-600">Rp 35.000</span>
                            <button class="bg-blue-600 text-white px-3 py-2 rounded-full text-xs hover:bg-blue-700">Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div class="section-reveal card-hover bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-pink-200 to-pink-300 flex items-center justify-center relative">
                        <i class="fas fa-cake text-pink-600 text-4xl"></i>
                        <span class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">HOT</span>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs text-blue-600 font-medium">Makanan</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs text-gray-600 ml-1">4.8</span>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Kue Tradisional</h3>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-blue-600">Rp 45.000</span>
                            <button class="bg-blue-600 text-white px-3 py-2 rounded-full text-xs hover:bg-blue-700">Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div class="section-reveal card-hover bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-blue-200 to-blue-300 flex items-center justify-center relative">
                        <i class="fas fa-shirt text-blue-600 text-4xl"></i>
                        <span class="absolute top-2 left-2 bg-purple-500 text-white px-2 py-1 rounded text-xs font-bold">FAVORIT</span>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs text-blue-600 font-medium">Fashion</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs text-gray-600 ml-1">4.6</span>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Batik Modern</h3>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-blue-600">Rp 150.000</span>
                            <button class="bg-blue-600 text-white px-3 py-2 rounded-full text-xs hover:bg-blue-700">Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Produk 4 -->
                <div class="section-reveal card-hover bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-orange-200 to-orange-300 flex items-center justify-center relative">
                        <i class="fas fa-palette text-orange-600 text-4xl"></i>
                        <span class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 rounded text-xs font-bold">BARU</span>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs text-blue-600 font-medium">Kerajinan</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs text-gray-600 ml-1">4.9</span>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Kerajinan Bambu</h3>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-blue-600">Rp 75.000</span>
                            <button class="bg-blue-600 text-white px-3 py-2 rounded-full text-xs hover:bg-blue-700">Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Produk 5 -->
                <div class="section-reveal card-hover bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-teal-200 to-teal-300 flex items-center justify-center relative">
                        <i class="fas fa-leaf text-teal-600 text-4xl"></i>
                        <span class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">HOT</span>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs text-blue-600 font-medium">Herbal</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs text-gray-600 ml-1">4.5</span>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Minyak Herbal</h3>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-blue-600">Rp 50.000</span>
                            <button class="bg-blue-600 text-white px-3 py-2 rounded-full text-xs hover:bg-blue-700">Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Produk 6 -->
                <div class="section-reveal card-hover bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-indigo-200 to-indigo-300 flex items-center justify-center relative">
                        <i class="fas fa-mug-hot text-indigo-600 text-4xl"></i>
                        <span class="absolute top-2 left-2 bg-purple-500 text-white px-2 py-1 rounded text-xs font-bold">FAVORIT</span>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs text-blue-600 font-medium">Minuman</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs text-gray-600 ml-1">4.7</span>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Teh Herbal</h3>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-blue-600">Rp 30.000</span>
                            <button class="bg-blue-600 text-white px-3 py-2 rounded-full text-xs hover:bg-blue-700">Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Produk 7 -->
                <div class="section-reveal card-hover bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-rose-200 to-rose-300 flex items-center justify-center relative">
                        <i class="fas fa-gift text-rose-600 text-4xl"></i>
                        <span class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 rounded text-xs font-bold">BARU</span>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs text-blue-600 font-medium">Souvenir</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs text-gray-600 ml-1">4.8</span>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Souvenir Khas</h3>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-blue-600">Rp 25.000</span>
                            <button class="bg-blue-600 text-white px-3 py-2 rounded-full text-xs hover:bg-blue-700">Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Produk 8 -->
                <div class="section-reveal card-hover bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-amber-200 to-amber-300 flex items-center justify-center relative">
                        <i class="fas fa-bread-slice text-amber-600 text-4xl"></i>
                        <span class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">HOT</span>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs text-blue-600 font-medium">Makanan</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs text-gray-600 ml-1">4.6</span>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Roti Artisan</h3>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-blue-600">Rp 40.000</span>
                            <button class="bg-blue-600 text-white px-3 py-2 rounded-full text-xs hover:bg-blue-700">Detail</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12 section-reveal">
                <button class="btn-gradient text-white px-8 py-4 rounded-full font-semibold text-lg">
                    Lihat Semua Produk
                    <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Agenda Terbaru -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 section-reveal">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                    Agenda <span class="text-gradient">Terbaru</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Event dan kegiatan terbaru untuk pengembangan UMKM Kota Malang
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Agenda 1 -->
                <div class="section-reveal card-hover bg-white rounded-3xl shadow-lg overflow-hidden border-l-4 border-blue-500">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-calendar-alt text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <div class="text-sm text-gray-500">15 Agustus 2025</div>
                                <div class="text-sm font-semibold text-blue-600">09:00 - 16:00 WIB</div>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-3">Workshop Digital Marketing UMKM</h3>
                        <p class="text-gray-600 text-sm mb-4">Pelatihan strategi pemasaran digital untuk meningkatkan penjualan online</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-blue-600 font-medium bg-blue-100 px-2 py-1 rounded">Gratis</span>
                            <button class="text-blue-600 text-sm font-semibold hover:text-blue-700">Daftar</button>
                        </div>
                    </div>
                </div>

                <!-- Agenda 2 -->
                <div class="section-reveal card-hover bg-white rounded-3xl shadow-lg overflow-hidden border-l-4 border-green-500">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-handshake text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <div class="text-sm text-gray-500">22 Agustus 2025</div>
                                <div class="text-sm font-semibold text-green-600">10:00 - 15:00 WIB</div>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-3">Pameran Produk UMKM</h3>
                        <p class="text-gray-600 text-sm mb-4">Pameran dan expo produk UMKM terbaik Kota Malang dengan berbagai kategori</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-green-600 font-medium bg-green-100 px-2 py-1 rounded">Gratis</span>
                            <button class="text-green-600 text-sm font-semibold hover:text-green-700">Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Agenda 3 -->
                <div class="section-reveal card-hover bg-white rounded-3xl shadow-lg overflow-hidden border-l-4 border-purple-500">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-users text-purple-600 text-xl"></i>
                            </div>
                            <div>
                                <div class="text-sm text-gray-500">30 Agustus 2025</div>
                                <div class="text-sm font-semibold text-purple-600">13:00 - 17:00 WIB</div>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-3">Seminar Keuangan UMKM</h3>
                        <p class="text-gray-600 text-sm mb-4">Seminar pengelolaan keuangan dan akses permodalan untuk UMKM</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-purple-600 font-medium bg-purple-100 px-2 py-1 rounded">Rp 50K</span>
                            <button class="text-purple-600 text-sm font-semibold hover:text-purple-700">Daftar</button>
                        </div>
                    </div>
                </div>

                <!-- Agenda 4 -->
                <div class="section-reveal card-hover bg-white rounded-3xl shadow-lg overflow-hidden border-l-4 border-orange-500">
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
                <button class="btn-gradient text-white px-8 py-4 rounded-full font-semibold text-lg">
                    Lihat Semua Agenda
                    <i class="fas fa-calendar-plus ml-2"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- UMKM Kota Malang -->
    <section class="py-20 bg-gradient-to-br from-blue-50 to-purple-50">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Info -->
                <div class="section-reveal">
                    <div class="space-y-8">
                        <div>
                            <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                                Tentang <span class="text-gradient">UMKM Kota Malang</span>
                            </h2>
                            <p class="text-xl text-gray-600 leading-relaxed mb-6">
                                Kota Malang memiliki potensi UMKM yang sangat besar dengan berbagai produk unggulan 
                                yang telah dikenal hingga mancanegara. Platform ini hadir untuk mendukung 
                                pertumbuhan dan perkembangan UMKM lokal.
                            </p>
                        </div>

                        <div class="grid grid-cols-2 gap-6">
                            <div class="bg-white p-6 rounded-2xl shadow-lg">
                                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
                                    <i class="fas fa-chart-line text-blue-600 text-xl"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Pertumbuhan Pesat</h3>
                                <p class="text-gray-600 text-sm">Peningkatan 25% UMKM terdaftar setiap tahunnya</p>
                            </div>
                            <div class="bg-white p-6 rounded-2xl shadow-lg">
                                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-4">
                                    <i class="fas fa-globe text-green-600 text-xl"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Jangkauan Global</h3>
                                <p class="text-gray-600 text-sm">Produk telah diekspor ke 15+ negara</p>
                            </div>
                            <div class="bg-white p-6 rounded-2xl shadow-lg">
                                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-4">
                                    <i class="fas fa-users text-purple-600 text-xl"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Penyerapan Tenaga Kerja</h3>
                                <p class="text-gray-600 text-sm">10,000+ tenaga kerja terserap</p>
                            </div>
                            <div class="bg-white p-6 rounded-2xl shadow-lg">
                                <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center mb-4">
                                    <i class="fas fa-award text-yellow-600 text-xl"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Produk Bersertifikat</h3>
                                <p class="text-gray-600 text-sm">500+ produk bersertifikat halal dan SNI</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gambar -->
                <div class="section-reveal">
                    <div class="relative">
                        <div class="w-full h-96 lg:h-[500px] bg-gradient-to-br from-blue-200 to-purple-200 rounded-3xl flex items-center justify-center relative overflow-hidden">
                            <div class="text-center text-blue-800">
                                <i class="fas fa-city text-8xl mb-6 opacity-30"></i>
                                <p class="text-2xl font-semibold opacity-75">Kota Malang</p>
                                <p class="text-lg opacity-60">Pusat UMKM Jawa Timur</p>
                            </div>
                            <div class="absolute top-10 right-10 w-20 h-20 bg-white opacity-20 rounded-full"></div>
                            <div class="absolute bottom-10 left-10 w-16 h-16 bg-yellow-300 opacity-30 rounded-full"></div>
                            <div class="absolute top-1/2 left-10 w-12 h-12 bg-purple-300 opacity-40 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  Kategori Produk -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 section-reveal">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                    Kategori <span class="text-gradient">Produk</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Berbagai kategori produk UMKM unggulan dari Kota Malang
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Kategori 1 -->
                <div class="section-reveal card-hover bg-gradient-to-br from-red-50 to-red-100 rounded-3xl p-8 text-center border-2 border-red-200 hover:border-red-300 transition-all">
                    <div class="w-20 h-20 bg-red-200 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-utensils text-red-600 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Makanan & Minuman</h3>
                    <p class="text-gray-600 mb-6">Keripik, kue tradisional, minuman herbal, dan kuliner khas Malang</p>
                    <div class="text-red-600 font-semibold text-lg">500+ Produk</div>
                </div>

                <!-- Kategori 2 -->
                <div class="section-reveal card-hover bg-gradient-to-br from-purple-50 to-purple-100 rounded-3xl p-8 text-center border-2 border-purple-200 hover:border-purple-300 transition-all">
                    <div class="w-20 h-20 bg-purple-200 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-tshirt text-purple-600 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Fashion & Aksesoris</h3>
                    <p class="text-gray-600 mb-6">Batik, tas rajut, aksesoris handmade, dan produk fashion lokal</p>
                    <div class="text-purple-600 font-semibold text-lg">300+ Produk</div>
                </div>

                <!-- Kategori 3 -->
                <div class="section-reveal card-hover bg-gradient-to-br from-orange-50 to-orange-100 rounded-3xl p-8 text-center border-2 border-orange-200 hover:border-orange-300 transition-all">
                    <div class="w-20 h-20 bg-orange-200 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-hammer text-orange-600 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Kerajinan & Souvenir</h3>
                    <p class="text-gray-600 mb-6">Kerajinan bambu, kayu, dan berbagai souvenir khas Malang</p>
                    <div class="text-orange-600 font-semibold text-lg">250+ Produk</div>
                </div>

                <!-- Kategori 4 -->
                <div class="section-reveal card-hover bg-gradient-to-br from-green-50 to-green-100 rounded-3xl p-8 text-center border-2 border-green-200 hover:border-green-300 transition-all">
                    <div class="w-20 h-20 bg-green-200 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-leaf text-green-600 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Produk Herbal</h3>
                    <p class="text-gray-600 mb-6">Jamu, minyak herbal, kosmetik alami dari bahan tradisional</p>
                    <div class="text-green-600 font-semibold text-lg">200+ Produk</div>
                </div>

                <!-- Kategori 5 -->
                <div class="section-reveal card-hover bg-gradient-to-br from-blue-50 to-blue-100 rounded-3xl p-8 text-center border-2 border-blue-200 hover:border-blue-300 transition-all">
                    <div class="w-20 h-20 bg-blue-200 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-tools text-blue-600 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Jasa & Layanan</h3>
                    <p class="text-gray-600 mb-6">Jasa desain, catering, event organizer, dan layanan kreatif</p>
                    <div class="text-blue-600 font-semibold text-lg">150+ Layanan</div>
                </div>

                <!-- Kategori 6 -->
                <div class="section-reveal card-hover bg-gradient-to-br from-teal-50 to-teal-100 rounded-3xl p-8 text-center border-2 border-teal-200 hover:border-teal-300 transition-all">
                    <div class="w-20 h-20 bg-teal-200 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-seedling text-teal-600 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Pertanian Organik</h3>
                    <p class="text-gray-600 mb-6">Produk pertanian organik, sayuran segar, dan olahan pertanian</p>
                    <div class="text-teal-600 font-semibold text-lg">100+ Produk</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partner UMKM -->
    <section id="umkm" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 section-reveal">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                    Partner <span class="text-gradient">UMKM</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Bergabunglah dengan komunitas UMKM terbaik Kota Malang
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="section-reveal card-hover bg-white rounded-3xl shadow-lg p-8 text-center">
                    <div class="w-20 h-20 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-store text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Warung Makan Sari Rasa</h3>
                    <p class="text-gray-600 mb-4">Kuliner tradisional dengan cita rasa autentik</p>
                    <div class="flex items-center justify-center space-x-4 mb-4">
                        <span class="text-sm text-gray-500">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            Jl. Veteran No. 45
                        </span>
                        <span class="text-sm text-gray-500">
                            <i class="fas fa-phone mr-1"></i>
                            0812-3456-7890
                        </span>
                    </div>
                    <div class="flex items-center justify-center space-x-2">
                        <a href="#" class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition-colors">
                            <i class="fab fa-facebook-f text-blue-600 text-sm"></i>
                        </a>
                        <a href="#" class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center hover:bg-green-200 transition-colors">
                            <i class="fab fa-whatsapp text-green-600 text-sm"></i>
                        </a>
                        <a href="#" class="w-8 h-8 bg-pink-100 rounded-full flex items-center justify-center hover:bg-pink-200 transition-colors">
                            <i class="fab fa-instagram text-pink-600 text-sm"></i>
                        </a>
                    </div>
                    <a href="#" class="inline-block mt-6 text-blue-600 font-medium hover:text-blue-700 transition-colors">
                        Lihat Produk <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>

                <div class="section-reveal card-hover bg-white rounded-3xl shadow-lg p-8 text-center">
                    <div class="w-20 h-20 bg-gradient-to-r from-green-400 to-teal-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-palette text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Kerajinan Bambu Indah</h3>
                    <p class="text-gray-600 mb-4">Kerajinan bambu berkualitas tinggi</p>
                    <div class="flex items-center justify-center space-x-4 mb-4">
                        <span class="text-sm text-gray-500">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            Jl. Kawi No. 78
                        </span>
                        <span class="text-sm text-gray-500">
                            <i class="fas fa-phone mr-1"></i>
                            0813-4567-8901
                        </span>
                    </div>
                    <div class="flex items-center justify-center space-x-2">
                        <a href="#" class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition-colors">
                            <i class="fab fa-facebook-f text-blue-600 text-sm"></i>
                        </a>
                        <a href="#" class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center hover:bg-green-200 transition-colors">
                            <i class="fab fa-whatsapp text-green-600 text-sm"></i>
                        </a>
                        <a href="#" class="w-8 h-8 bg-pink-100 rounded-full flex items-center justify-center hover:bg-pink-200 transition-colors">
                            <i class="fab fa-instagram text-pink-600 text-sm"></i>
                        </a>
                    </div>
                    <a href="#" class="inline-block mt-6 text-blue-600 font-medium hover:text-blue-700 transition-colors">
                        Lihat Produk <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>

                <div class="section-reveal card-hover bg-white rounded-3xl shadow-lg p-8 text-center">
                    <div class="w-20 h-20 bg-gradient-to-r from-red-400 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-tshirt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Fashion Batik Nusantara</h3>
                    <p class="text-gray-600 mb-4">Batik modern dengan sentuhan tradisional</p>
                    <div class="flex items-center justify-center space-x-4 mb-4">
                        <span class="text-sm text-gray-500">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            Jl. Brawijaya No. 12
                        </span>
                        <span class="text-sm text-gray-500">
                            <i class="fas fa-phone mr-1"></i>
                            0811-2222-3333
                        </span>
                    </div>
                    <div class="flex items-center justify-center space-x-2">
                        <a href="#" class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition-colors">
                            <i class="fab fa-facebook-f text-blue-600 text-sm"></i>
                        </a>
                        <a href="#" class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center hover:bg-green-200 transition-colors">
                            <i class="fab fa-whatsapp text-green-600 text-sm"></i>
                        </a>
                        <a href="#" class="w-8 h-8 bg-pink-100 rounded-full flex items-center justify-center hover:bg-pink-200 transition-colors">
                            <i class="fab fa-instagram text-pink-600 text-sm"></i>
                        </a>
                    </div>
                    <a href="#" class="inline-block mt-6 text-blue-600 font-medium hover:text-blue-700 transition-colors">
                        Lihat Produk <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>

            <div class="text-center mt-12 section-reveal">
                <button class="btn-gradient text-white px-8 py-4 rounded-full font-semibold text-lg">
                    Lihat Semua UMKM
                    <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
        </div>
    </section>


    <!-- News -->
    <section id="news" class="py-20 bg-gray-50">
         <div class="container mx-auto px-6">
             <div class="text-center mb-16 section-reveal">
                 <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                     Berita & <span class="text-gradient">Artikel Terbaru</span>
                 </h2>
                 <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                     Informasi terbaru seputar perkembangan UMKM dan tips bisnis untuk memajukan usaha Anda
                 </p>
             </div>
     
             <div class="grid lg:grid-cols-2 xl:grid-cols-4 gap-8 mb-12">
                 <!-- Article 1 -->
                 <div class="section-reveal card-hover bg-white rounded-3xl shadow-lg overflow-hidden">
                     <div class="h-48 bg-gradient-to-br from-blue-200 to-blue-300 flex items-center justify-center">
                         <i class="fas fa-newspaper text-blue-600 text-4xl"></i>
                     </div>
                     <div class="p-6">
                         <div class="flex items-center space-x-3 mb-4">
                             <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm font-medium">Tips Bisnis</span>
                             <span class="text-gray-500 text-sm">2 hari lalu</span>
                         </div>
                         <h3 class="text-lg font-bold text-gray-800 mb-3 line-clamp-2">
                             5 Tips Meningkatkan Penjualan UMKM di Era Digital
                         </h3>
                         <p class="text-gray-600 mb-4 text-sm line-clamp-3">
                             Panduan lengkap untuk mengoptimalkan strategi pemasaran digital bagi pelaku UMKM...
                         </p>
                         <button href="/articles" class="text-blue-600 font-semibold hover:text-blue-700 transition-colors text-sm">
                             Baca Selengkapnya
                             <i class="fas fa-arrow-right ml-2"></i>
                         </button>
                     </div>
                 </div>
     
                 <!-- Article 2 -->
                 <div class="section-reveal card-hover bg-white rounded-3xl shadow-lg overflow-hidden">
                     <div class="h-48 bg-gradient-to-br from-green-200 to-green-300 flex items-center justify-center">
                         <i class="fas fa-calendar-alt text-green-600 text-4xl"></i>
                     </div>
                     <div class="p-6">
                         <div class="flex items-center space-x-3 mb-4">
                             <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm font-medium">Event</span>
                             <span class="text-gray-500 text-sm">1 minggu lalu</span>
                         </div>
                         <h3 class="text-lg font-bold text-gray-800 mb-3 line-clamp-2">
                             Pelatihan Digital Marketing untuk UMKM Malang
                         </h3>
                         <p class="text-gray-600 mb-4 text-sm line-clamp-3">
                             Workshop gratis bagi pelaku UMKM untuk meningkatkan kemampuan pemasaran online...
                         </p>
                         <button class="text-blue-600 font-semibold hover:text-blue-700 transition-colors text-sm">
                             Baca Selengkapnya
                             <i class="fas fa-arrow-right ml-2"></i>
                         </button>
                     </div>
                 </div>
     
                 <!-- Article 3 -->
                 <div class="section-reveal card-hover bg-white rounded-3xl shadow-lg overflow-hidden">
                     <div class="h-48 bg-gradient-to-br from-purple-200 to-purple-300 flex items-center justify-center">
                         <i class="fas fa-trophy text-purple-600 text-4xl"></i>
                     </div>
                     <div class="p-6">
                         <div class="flex items-center space-x-3 mb-4">
                             <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-sm font-medium">Kisah Sukses</span>
                             <span class="text-gray-500 text-sm">3 hari lalu</span>
                         </div>
                         <h3 class="text-lg font-bold text-gray-800 mb-3 line-clamp-2">
                             Dari Hobi Menjadi Bisnis: Cerita Sukses UMKM Batik
                         </h3>
                         <p class="text-gray-600 mb-4 text-sm line-clamp-3">
                             Inspirasi dari Bu Sari yang berhasil mengembangkan usaha batik hingga go internasional...
                         </p>
                         <button class="text-blue-600 font-semibold hover:text-blue-700 transition-colors text-sm">
                             Baca Selengkapnya
                             <i class="fas fa-arrow-right ml-2"></i>
                         </button>
                     </div>
                 </div>
     
                 <!-- Article 4 (New) -->
                 <div class="section-reveal card-hover bg-white rounded-3xl shadow-lg overflow-hidden">
                     <div class="h-48 bg-gradient-to-br from-orange-200 to-orange-300 flex items-center justify-center">
                         <i class="fas fa-chart-line text-orange-600 text-4xl"></i>
                     </div>
                     <div class="p-6">
                         <div class="flex items-center space-x-3 mb-4">
                             <span class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-sm font-medium">Analisis</span>
                             <span class="text-gray-500 text-sm">5 hari lalu</span>
                         </div>
                         <h3 class="text-lg font-bold text-gray-800 mb-3 line-clamp-2">
                             Tren UMKM 2024: Peluang dan Tantangan di Masa Depan
                         </h3>
                         <p class="text-gray-600 mb-4 text-sm line-clamp-3">
                             Analisis mendalam tentang perkembangan sektor UMKM dan prediksi untuk tahun mendatang...
                         </p>
                         <button class="text-blue-600 font-semibold hover:text-blue-700 transition-colors text-sm">
                             Baca Selengkapnya
                             <i class="fas fa-arrow-right ml-2"></i>
                         </button>
                     </div>
                 </div>
             </div>
     
             <!-- View All Button -->
             <div class="text-center section-reveal">
                 <a href="/articles" class="inline-flex items-center btn-gradient text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-lg transition-all duration-300">
                     <i class="fas fa-newspaper mr-3"></i>
                     Lihat Semua Berita
                     <i class="fas fa-arrow-right ml-3"></i>
                 </a>
             </div>
         </div>
     </section>

    <!-- Testimonials -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 section-reveal">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                    Testimoni <span class="text-gradient">Pelanggan</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Apa kata mereka tentang produk UMKM Kota Malang?
                </p>
            </div>

            <div class="grid lg:grid-cols-3 gap-8">
                <div class="section-reveal card-hover bg-gray-50 rounded-3xl p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full flex items-center justify-center text-white text-xl font-bold">
                            A
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-gray-800">Ahmad Wijaya</h4>
                            <div class="flex items-center">
                                <div class="flex space-x-1 mr-2">
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                </div>
                                <span class="text-sm text-gray-600">5.0</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "Produk keripik tempe di sini benar-benar enak! Renyah dan bumbunya pas banget. 
                        Sudah jadi langganan keluarga kami."
                    </p>
                </div>

                <div class="section-reveal card-hover bg-gray-50 rounded-3xl p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-pink-400 to-red-500 rounded-full flex items-center justify-center text-white text-xl font-bold">
                            S
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-gray-800">Siti Nurhaliza</h4>
                            <div class="flex items-center">
                                <div class="flex space-x-1 mr-2">
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                </div>
                                <span class="text-sm text-gray-600">5.0</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "Tas rajutnya cantik banget! Kualitas premium dengan harga yang sangat terjangkau. 
                        Pelayanannya juga ramah dan cepat."
                    </p>
                </div>

                <div class="section-reveal card-hover bg-gray-50 rounded-3xl p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-green-400 to-teal-500 rounded-full flex items-center justify-center text-white text-xl font-bold">
                            B
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-gray-800">Budi Santoso</h4>
                            <div class="flex items-center">
                                <div class="flex space-x-1 mr-2">
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-gray-300 text-sm"></i>
                                </div>
                                <span class="text-sm text-gray-600">4.8</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "Platform yang sangat membantu untuk menemukan produk UMKM berkualitas. 
                        Interface-nya mudah digunakan dan informatif."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Join UMKM Section -->
    <section class="py-20 gradient-bg relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-10 right-10 w-64 h-64 bg-white opacity-10 rounded-full animate-float"></div>
            <div class="absolute bottom-10 left-10 w-80 h-80 bg-white opacity-5 rounded-full animate-bounce-slow"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center text-white section-reveal">
                <h2 class="text-4xl lg:text-5xl font-bold mb-8">
                    Bergabung dengan <span class="text-yellow-300">Komunitas UMKM</span>
                </h2>
                <p class="text-xl text-blue-100 mb-12 max-w-3xl mx-auto">
                    Daftarkan usaha Anda dan jadilah bagian dari ekosistem UMKM terbesar di Kota Malang. 
                    Dapatkan akses ke ribuan pelanggan potensial.
                </p>
                
                <div class="grid md:grid-cols-3 gap-8 mb-12">
                    <div class="glass-effect rounded-3xl p-8 text-center">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-user-plus text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Daftar Gratis</h3>
                        <p class="text-blue-100">Pendaftaran mudah dan tanpa biaya untuk UMKM</p>
                    </div>
                    
                    <div class="glass-effect rounded-3xl p-8 text-center">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-chart-line text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Tingkatkan Penjualan</h3>
                        <p class="text-blue-100">Jangkauan pasar yang lebih luas untuk produk Anda</p>
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
                    Kontak & <span class="text-gradient">Bantuan</span>
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
                        
                        <button type="submit" class="w-full btn-gradient text-white py-4 rounded-2xl font-semibold text-lg">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
