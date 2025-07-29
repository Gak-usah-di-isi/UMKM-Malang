@extends('core.landingPage')

@section('title', 'UMKM Kota Malang | Categories')

@section('content')

<!-- Hero Categories Section -->
<section
    class="min-h-[40vh] gradient-bg flex items-center relative overflow-hidden pt-20">
    <div class="absolute inset-0">
        <div
            class="absolute top-20 left-10 w-72 h-72 bg-white opacity-10 rounded-full animate-float"></div>
        <div
            class="absolute bottom-20 right-10 w-96 h-96 bg-white opacity-5 rounded-full animate-bounce-slow"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center text-white py-12">
            <div class="section-reveal">
                <h1 class="text-4xl lg:text-5xl font-bold leading-tight mb-6">
                    Kategori <span class="text-yellow-300">Produk</span>
                </h1>
                <p class="text-xl lg:text-2xl text-blue-100 max-w-3xl mx-auto">
                    Temukan produk UMKM berdasarkan kategori yang tersedia
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Categories Grid Section -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <!-- Category 1 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Makanan & Minuman"
                        class="w-full h-48 object-cover" />
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">
                        Makanan & Minuman
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Kuliner khas Malang dan minuman tradisional
                    </p>
                    <a
                        href="products.html?category=makanan"
                        class="text-blue-600 hover:text-blue-800 font-medium">
                        Lihat Produk <i class="fas fa-chevron-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Category 2 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Fashion & Aksesoris"
                        class="w-full h-48 object-cover" />
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">
                        Fashion & Aksesoris
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Pakaian dan aksesoris buatan lokal
                    </p>
                    <a
                        href="products.html?category=fashion"
                        class="text-blue-600 hover:text-blue-800 font-medium">
                        Lihat Produk <i class="fas fa-chevron-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Category 3 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Kerajinan & Souvenir"
                        class="w-full h-48 object-cover" />
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">
                        Kerajinan & Souvenir
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Kerajinan tangan unik khas Malang
                    </p>
                    <a
                        href="products.html?category=kerajinan"
                        class="text-blue-600 hover:text-blue-800 font-medium">
                        Lihat Produk <i class="fas fa-chevron-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Category 4 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1597047084897-51e81819a499?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Produk Herbal"
                        class="w-full h-48 object-cover" />
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">
                        Produk Herbal
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Ramuan tradisional untuk kesehatan
                    </p>
                    <a
                        href="products.html?category=herbal"
                        class="text-blue-600 hover:text-blue-800 font-medium">
                        Lihat Produk <i class="fas fa-chevron-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Category 5 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Jasa & Layanan"
                        class="w-full h-48 object-cover" />
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">
                        Jasa & Layanan
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Berbagai jasa profesional dari UMKM
                    </p>
                    <a
                        href="products.html?category=jasa"
                        class="text-blue-600 hover:text-blue-800 font-medium">
                        Lihat Produk <i class="fas fa-chevron-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Category 6 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1606787366850-de6330128bfc?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Kecantikan"
                        class="w-full h-48 object-cover" />
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Kecantikan</h3>
                    <p class="text-gray-600 mb-4">
                        Produk perawatan tubuh dan kecantikan
                    </p>
                    <a
                        href="products.html?category=kecantikan"
                        class="text-blue-600 hover:text-blue-800 font-medium">
                        Lihat Produk <i class="fas fa-chevron-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Category 7 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1583947581924-a6d2a2b344e2?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Pertanian"
                        class="w-full h-48 object-cover" />
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Pertanian</h3>
                    <p class="text-gray-600 mb-4">
                        Produk pertanian dan perkebunan lokal
                    </p>
                    <a
                        href="products.html?category=pertanian"
                        class="text-blue-600 hover:text-blue-800 font-medium">
                        Lihat Produk <i class="fas fa-chevron-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Category 8 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Teknologi"
                        class="w-full h-48 object-cover" />
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Teknologi</h3>
                    <p class="text-gray-600 mb-4">
                        Produk inovatif berbasis teknologi
                    </p>
                    <a
                        href="products.html?category=teknologi"
                        class="text-blue-600 hover:text-blue-800 font-medium">
                        Lihat Produk <i class="fas fa-chevron-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 gradient-bg relative overflow-hidden">
    <div class="absolute inset-0">
        <div
            class="absolute top-10 right-10 w-64 h-64 bg-white opacity-10 rounded-full animate-float"></div>
        <div
            class="absolute bottom-10 left-10 w-80 h-80 bg-white opacity-5 rounded-full animate-bounce-slow"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center text-white">
            <h2 class="text-3xl lg:text-4xl font-bold mb-6">
                Punya Produk UMKM?
                <span class="text-yellow-300">Daftarkan Sekarang!</span>
            </h2>
            <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                Bergabunglah dengan ratusan UMKM lainnya yang telah memperluas pasar
                mereka melalui platform kami.
            </p>
            <button
                class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold text-lg hover:bg-blue-50 transition-all transform hover:scale-105">
                <i class="fas fa-store mr-2"></i>
                Daftar UMKM
            </button>
        </div>
    </div>
</section>

@endsection