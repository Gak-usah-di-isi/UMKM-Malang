@extends('core.landingPage')

@section('title', 'UMKM Kota Malang | List')

@section('content')

<!-- Hero UMKM Section -->
<section class="min-h-[40vh] gradient-bg flex items-center relative overflow-hidden pt-20">
    <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-72 h-72 bg-white opacity-10 rounded-full animate-float"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-white opacity-5 rounded-full animate-bounce-slow"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center text-white py-12">
            <div class="section-reveal">
                <h1 class="text-4xl lg:text-5xl font-bold leading-tight mb-6">
                    Daftar <span class="text-yellow-300">UMKM</span>
                </h1>
                <p class="text-xl lg:text-2xl text-blue-100 max-w-3xl mx-auto">
                    Temukan UMKM terbaik di Kota Malang dengan produk berkualitas
                </p>
            </div>
        </div>
    </div>
</section>

<!-- UMKM Filter Section -->
<section class="py-8 bg-white">
    <div class="container mx-auto px-6">
        <div class="bg-white rounded-2xl shadow-md p-6">
            <div class="grid md:grid-cols-4 gap-4">
                <div class="md:col-span-2">
                    <input type="text" placeholder="Cari UMKM..." class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:outline-none">
                </div>
                <div>
                    <select class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:outline-none">
                        <option value="">Semua Kategori</option>
                        <option value="makanan">Makanan & Minuman</option>
                        <option value="fashion">Fashion</option>
                        <option value="kerajinan">Kerajinan</option>
                        <option value="jasa">Jasa</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
                <div>
                    <button class="w-full btn-gradient text-white px-4 py-3 rounded-xl font-medium">
                        <i class="fas fa-search mr-2"></i>
                        Cari
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- UMKM Grid Section -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-4 md:mb-0">
                Semua UMKM Terdaftar
            </h2>
            <div class="flex items-center space-x-4">
                <span class="text-gray-600">Urutkan:</span>
                <select class="px-4 py-2 rounded-xl border border-gray-200 focus:border-blue-500 focus:outline-none">
                    <option value="terbaru">Terbaru</option>
                    <option value="terlama">Terlama</option>
                    <option value="rating">Rating Tertinggi</option>
                    <option value="produk">Jumlah Produk</option>
                </select>
            </div>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- UMKM Card 1 -->
            <div class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1579113800032-c38bd7635818?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Warung Makan Sari Rasa" class="w-full h-48 object-cover">
                    <div class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded-full">
                        <i class="fas fa-star mr-1"></i> 4.8
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Warung Makan Sari Rasa</h3>
                    <div class="flex items-center text-sm text-gray-600 mb-3">
                        <i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>
                        <span>Jl. Veteran No. 45, Klojen</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">Warung makan dengan berbagai menu tradisional khas Malang, menggunakan bahan-bahan segar dan berkualitas.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-blue-600 font-medium">12 Produk</span>
                        <a href="umkm-detail.html" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Lihat Detail <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- UMKM Card 2 -->
            <div class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1556909114-44e1cd6167e5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Kerajinan Bambu Indah" class="w-full h-48 object-cover">
                    <div class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded-full">
                        <i class="fas fa-star mr-1"></i> 4.9
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Kerajinan Bambu Indah</h3>
                    <div class="flex items-center text-sm text-gray-600 mb-3">
                        <i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>
                        <span>Jl. Kawi No. 78, Klojen</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">Produk kerajinan dari bambu berkualitas tinggi dengan desain modern dan tradisional.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-blue-600 font-medium">8 Produk</span>
                        <a href="umkm-detail.html" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Lihat Detail <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- UMKM Card 3 -->
            <div class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1595475706258-c565d3840331?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Fashion Batik Nusantara" class="w-full h-48 object-cover">
                    <div class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded-full">
                        <i class="fas fa-star mr-1"></i> 4.7
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Fashion Batik Nusantara</h3>
                    <div class="flex items-center text-sm text-gray-600 mb-3">
                        <i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>
                        <span>Jl. Brawijaya No. 12, Lowokwaru</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">Batik modern dengan sentuhan tradisional, dibuat dengan teknik tulis dan cap berkualitas.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-blue-600 font-medium">15 Produk</span>
                        <a href="umkm-detail.html" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Lihat Detail <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- UMKM Card 4 -->
            <div class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Kopi Arabika Malang" class="w-full h-48 object-cover">
                    <div class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded-full">
                        <i class="fas fa-star mr-1"></i> 4.8
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Kopi Arabika Malang</h3>
                    <div class="flex items-center text-sm text-gray-600 mb-3">
                        <i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>
                        <span>Jl. Soekarno Hatta No. 9, Blimbing</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">Kopi premium dari perkebunan lokal Malang, diproses secara tradisional dengan kualitas terbaik.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-blue-600 font-medium">5 Produk</span>
                        <a href="umkm-detail.html" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Lihat Detail <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- UMKM Card 5 -->
            <div class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1560343090-f0409e92791a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Jamu Tradisional" class="w-full h-48 object-cover">
                    <div class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded-full">
                        <i class="fas fa-star mr-1"></i> 4.6
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Jamu Tradisional Murni</h3>
                    <div class="flex items-center text-sm text-gray-600 mb-3">
                        <i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>
                        <span>Jl. Danau Bratan No. 4, Sukun</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">Jamu herbal alami untuk kesehatan keluarga, dibuat dari bahan pilihan tanpa bahan kimia.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-blue-600 font-medium">7 Produk</span>
                        <a href="umkm-detail.html" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Lihat Detail <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- UMKM Card 6 -->
            <div class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Kerajinan Kayu" class="w-full h-48 object-cover">
                    <div class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded-full">
                        <i class="fas fa-star mr-1"></i> 4.5
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Kerajinan Kayu Jati</h3>
                    <div class="flex items-center text-sm text-gray-600 mb-3">
                        <i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>
                        <span>Jl. Raya Tlogomas No. 56, Lowokwaru</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">Kerajinan kayu jati berkualitas dengan desain modern dan tradisional, cocok untuk souvenir.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-blue-600 font-medium">10 Produk</span>
                        <a href="umkm-detail.html" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Lihat Detail <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- UMKM Card 7 -->
            <div class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1594035910387-fea47794261f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Tas Rajut" class="w-full h-48 object-cover">
                    <div class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded-full">
                        <i class="fas fa-star mr-1"></i> 4.3
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Tas Rajut Handmade</h3>
                    <div class="flex items-center text-sm text-gray-600 mb-3">
                        <i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>
                        <span>Jl. Mayjen Panjaitan No. 23, Klojen</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">Tas rajut cantik buatan tangan dengan kualitas premium dan desain eksklusif.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-blue-600 font-medium">6 Produk</span>
                        <a href="umkm-detail.html" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Lihat Detail <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- UMKM Card 8 -->
            <div class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1608270586620-248524c67de9?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Madu Hutan" class="w-full h-48 object-cover">
                    <div class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded-full">
                        <i class="fas fa-star mr-1"></i> 4.9
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Madu Hutan Asli</h3>
                    <div class="flex items-center text-sm text-gray-600 mb-3">
                        <i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>
                        <span>Jl. Bandung No. 11, Klojen</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">Madu hutan murni dari lebah liar di hutan sekitar Malang, tanpa campuran dan bahan pengawet.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-blue-600 font-medium">3 Produk</span>
                        <a href="umkm-detail.html" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Lihat Detail <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-12">
            <nav class="flex items-center space-x-2">
                <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a href="#" class="px-4 py-2 border border-blue-500 bg-blue-500 text-white rounded-lg font-medium">1</a>
                <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100">2</a>
                <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100">3</a>
                <span class="px-4 py-2 text-gray-600">...</span>
                <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100">8</a>
                <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </nav>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 gradient-bg relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-10 right-10 w-64 h-64 bg-white opacity-10 rounded-full animate-float"></div>
        <div class="absolute bottom-10 left-10 w-80 h-80 bg-white opacity-5 rounded-full animate-bounce-slow"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center text-white">
            <h2 class="text-3xl lg:text-4xl font-bold mb-6">
                Punya Usaha? <span class="text-yellow-300">Daftarkan UMKM Anda Sekarang!</span>
            </h2>
            <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                Bergabunglah dengan ratusan UMKM lainnya yang telah memperluas pasar mereka melalui platform kami.
            </p>
            <button class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold text-lg hover:bg-blue-50 transition-all transform hover:scale-105">
                <i class="fas fa-store mr-2"></i>
                Daftar UMKM
            </button>
        </div>
    </div>
</section>

@endsection