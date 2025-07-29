@extends('core.landingPage')

@section('title', 'UMKM Kota Malang | Products')

@section('style')
<style>
    .gradient-bg {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .glass-effect {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    .animate-bounce-slow {
        animation: bounce 3s infinite;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    @keyframes bounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-15px);
        }
    }

    .card-hover {
        transition: all 0.3s ease;
    }

    .card-hover:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    .text-gradient {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .btn-gradient {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        transition: all 0.3s ease;
    }

    .btn-gradient:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(102, 126, 234, 0.4);
    }

    .navbar-scroll {
        backdrop-filter: blur(20px);
        background: rgba(255, 255, 255, 0.95);
    }

    .section-reveal {
        opacity: 0;
        transform: translateY(50px);
        transition: all 0.8s ease;
    }

    .section-reveal.revealed {
        opacity: 1;
        transform: translateY(0);
    }

    .product-rating {
        unicode-bidi: bidi-override;
        direction: rtl;
    }

    .product-rating>span {
        display: inline-block;
        position: relative;
        width: 1.1em;
    }

    .product-rating>span:hover:before,
    .product-rating>span:hover~span:before {
        content: "\2605";
        position: absolute;
        color: #f1c40f;
    }
</style>
@endsection

@section('content')
<!-- Hero Products Section -->
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
                    Katalog <span class="text-yellow-300">Produk</span>
                </h1>
                <p class="text-xl lg:text-2xl text-blue-100 max-w-3xl mx-auto">
                    Temukan produk unggulan dari UMKM Kota Malang
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Products Filter Section -->
<section class="py-8 bg-white">
    <div class="container mx-auto px-6">
        <div class="bg-white rounded-2xl shadow-md p-6">
            <div class="grid md:grid-cols-4 gap-4">
                <div class="md:col-span-2">
                    <input
                        type="text"
                        placeholder="Cari produk..."
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:outline-none" />
                </div>
                <div>
                    <select
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:outline-none">
                        <option value="">Semua Kategori</option>
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                        <option value="fashion">Fashion</option>
                        <option value="kerajinan">Kerajinan</option>
                        <option value="jasa">Jasa</option>
                    </select>
                </div>
                <div>
                    <button
                        class="w-full btn-gradient text-white px-4 py-3 rounded-xl font-medium">
                        <i class="fas fa-search mr-2"></i>
                        Cari
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Grid Section -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6">
        <div
            class="flex flex-col md:flex-row justify-between items-center mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-4 md:mb-0">
                Semua Produk UMKM Malang
            </h2>
            <div class="flex items-center space-x-4">
                <span class="text-gray-600">Urutkan:</span>
                <select
                    class="px-4 py-2 rounded-xl border border-gray-200 focus:border-blue-500 focus:outline-none">
                    <option value="terbaru">Terbaru</option>
                    <option value="termurah">Termurah</option>
                    <option value="termahal">Termahal</option>
                    <option value="terpopuler">Terpopuler</option>
                    <option value="rating">Rating Tertinggi</option>
                </select>
            </div>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- Product Card 1 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1587241321921-91a834d6d191?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Keripik Tempe"
                        class="w-full h-48 object-cover" />
                    <div
                        class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded-full">
                        <i class="fas fa-star mr-1"></i> 4.8
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-sm text-blue-600 font-medium">Makanan</span>
                        <span class="text-sm text-gray-500">Stok: 25</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">
                        Keripik Tempe Original
                    </h3>
                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">
                        Keripik tempe renyah dengan bumbu rahasia khas Malang, dibuat
                        dari bahan pilihan tanpa pengawet.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-blue-600">Rp 25.000</span>
                        <a
                            href="product-detail.html"
                            class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Lihat Detail <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1556909114-44e1cd6167e5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Tas Rajut"
                        class="w-full h-48 object-cover" />
                    <div
                        class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded-full">
                        <i class="fas fa-star mr-1"></i> 4.9
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-sm text-blue-600 font-medium">Fashion</span>
                        <span class="text-sm text-gray-500">Stok: 12</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">
                        Tas Rajut Handmade
                    </h3>
                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">
                        Tas rajut cantik buatan tangan dengan kualitas premium, desain
                        eksklusif dan tahan lama.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-blue-600">Rp 125.000</span>
                        <a
                            href="product-detail.html"
                            class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Lihat Detail <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1595475706258-c565d3840331?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Jamu Tradisional"
                        class="w-full h-48 object-cover" />
                    <div
                        class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded-full">
                        <i class="fas fa-star mr-1"></i> 4.7
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-sm text-blue-600 font-medium">Herbal</span>
                        <span class="text-sm text-gray-500">Stok: 30</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">
                        Jamu Kunyit Asam
                    </h3>
                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">
                        Jamu tradisional untuk kesehatan wanita, dibuat dari bahan alami
                        tanpa bahan kimia.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-blue-600">Rp 35.000</span>
                        <a
                            href="product-detail.html"
                            class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Lihat Detail <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1511920170033-f8396924c348?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Kopi Arabika"
                        class="w-full h-48 object-cover" />
                    <div
                        class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded-full">
                        <i class="fas fa-star mr-1"></i> 4.8
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-sm text-blue-600 font-medium">Minuman</span>
                        <span class="text-sm text-gray-500">Stok: 18</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">
                        Kopi Arabika Malang
                    </h3>
                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">
                        Kopi premium dari perkebunan lokal Malang, rasa khas dengan
                        aroma yang menggugah selera.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-blue-600">Rp 85.000</span>
                        <a
                            href="product-detail.html"
                            class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Lihat Detail <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1560343090-f0409e92791a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Batik Tulis"
                        class="w-full h-48 object-cover" />
                    <div
                        class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded-full">
                        <i class="fas fa-star mr-1"></i> 4.6
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-sm text-blue-600 font-medium">Fashion</span>
                        <span class="text-sm text-gray-500">Stok: 8</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">
                        Kemeja Batik Tulis
                    </h3>
                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">
                        Kemeja batik tulis premium dengan motif eksklusif, nyaman
                        dipakai untuk berbagai acara.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-blue-600">Rp 250.000</span>
                        <a
                            href="product-detail.html"
                            class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Lihat Detail <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 6 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1601050690597-df0568f70950?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Keripik Singkong"
                        class="w-full h-48 object-cover" />
                    <div
                        class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded-full">
                        <i class="fas fa-star mr-1"></i> 4.5
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-sm text-blue-600 font-medium">Makanan</span>
                        <span class="text-sm text-gray-500">Stok: 42</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">
                        Keripik Singkong Balado
                    </h3>
                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">
                        Keripik singkong dengan bumbu balado khas Malang, renyah dan
                        pedasnya pas.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-blue-600">Rp 18.000</span>
                        <a
                            href="product-detail.html"
                            class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Lihat Detail <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 7 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1594035910387-fea47794261f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Gantungan Kunci"
                        class="w-full h-48 object-cover" />
                    <div
                        class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded-full">
                        <i class="fas fa-star mr-1"></i> 4.3
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-sm text-blue-600 font-medium">Kerajinan</span>
                        <span class="text-sm text-gray-500">Stok: 50</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">
                        Gantungan Kunci Kayu
                    </h3>
                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">
                        Gantungan kunci unik dari kayu jati dengan ukiran motif khas
                        Malang.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-blue-600">Rp 15.000</span>
                        <a
                            href="product-detail.html"
                            class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Lihat Detail <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 8 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1608270586620-248524c67de9?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Madu Hutan"
                        class="w-full h-48 object-cover" />
                    <div
                        class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded-full">
                        <i class="fas fa-star mr-1"></i> 4.9
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-sm text-blue-600 font-medium">Herbal</span>
                        <span class="text-sm text-gray-500">Stok: 15</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">
                        Madu Hutan Asli
                    </h3>
                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">
                        Madu hutan murni dari lebah liar di hutan sekitar Malang, tanpa
                        campuran.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-blue-600">Rp 120.000</span>
                        <a
                            href="product-detail.html"
                            class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Lihat Detail <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-12">
            <nav class="flex items-center space-x-2">
                <a
                    href="#"
                    class="px-4 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a
                    href="#"
                    class="px-4 py-2 border border-blue-500 bg-blue-500 text-white rounded-lg font-medium">1</a>
                <a
                    href="#"
                    class="px-4 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100">2</a>
                <a
                    href="#"
                    class="px-4 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100">3</a>
                <span class="px-4 py-2 text-gray-600">...</span>
                <a
                    href="#"
                    class="px-4 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100">10</a>
                <a
                    href="#"
                    class="px-4 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </nav>
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