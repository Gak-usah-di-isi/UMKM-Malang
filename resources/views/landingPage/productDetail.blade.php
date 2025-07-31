@extends('core.landingPage')

@section('title', 'UMKM Kota Malang | Detail Produk')

@section('style')
<style>
    @keyframes blob {
        0% { transform: translate(0px, 0px) scale(1); }
        33% { transform: translate(30px, -50px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
        100% { transform: translate(0px, 0px) scale(1); }
    }
    
    .animate-blob {
        animation: blob 7s infinite;
    }
    
    .animation-delay-2000 {
        animation-delay: 2s;
    }
    
    .animation-delay-4000 {
        animation-delay: 4s;
    }
    
    .btn-gradient {
        background: linear-gradient(to right, #10b981, #059669);
        transition: all 0.3s ease;
    }
    
    .btn-gradient:hover {
        background: linear-gradient(to right, #059669, #047857);
        transform: translateY(-2px);
        box-shadow: 0 10px 15px -3px rgba(5, 150, 105, 0.3);
    }
    
    .image-zoom:hover img {
        transform: scale(1.05);
    }
    
    .gallery-thumbnail.active {
        border-color: #10b981;
    }
    
    .rating-stars {
        color: #f59e0b;
    }
    
    .tab-btn.active {
        border-bottom-color: #10b981;
        color: #10b981;
    }
    
    .review-card:hover {
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }
    
    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection

@section('content')
<!-- Background with animated gradients -->
<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 relative overflow-hidden">
    <!-- Animated background elements -->
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-20 left-10 w-32 h-32 bg-green-200 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
        <div class="absolute top-40 right-10 w-32 h-32 bg-emerald-200 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-20 w-32 h-32 bg-teal-200 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10 py-8">
        <!-- Breadcrumb -->
        <nav class="flex mb-6 text-sm text-gray-600" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li><a href="/" class="hover:text-emerald-600">Beranda</a></li>
                <li><i class="fas fa-chevron-right text-xs mx-2 text-gray-400"></i></li>
                <li><a href="/products" class="hover:text-emerald-600">Produk</a></li>
                <li><i class="fas fa-chevron-right text-xs mx-2 text-gray-400"></i></li>
                <li class="text-emerald-600 font-medium">Tempat Tisu Handmade</li>
            </ol>
        </nav>

        <!-- Product Detail Section -->
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12">
            <!-- Product Images -->
            <div class="backdrop-blur-lg bg-white/80 border border-white/20 rounded-3xl border-neutral-200 p-6">
                <div class="image-zoom rounded-2xl overflow-hidden mb-4 bg-gray-100">
                    <img id="main-image" 
                         src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/cd8fbedf-b03f-4d82-9e8a-467049d080f1.png" 
                         alt="Tempat Tisu" 
                         class="w-full h-64 sm:h-80 lg:h-96 object-cover transition-transform duration-500">
                </div>
                <div class="grid grid-cols-4 gap-3">
                    <div class="gallery-thumbnail active rounded-lg overflow-hidden cursor-pointer border-2 border-emerald-500">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/cd8fbedf-b03f-4d82-9e8a-467049d080f1.png" 
                             alt="Tempat Tisu" class="w-full h-16 sm:h-20 object-cover" onclick="changeImage(this, 0)">
                    </div>
                    <div class="gallery-thumbnail rounded-lg overflow-hidden cursor-pointer border border-gray-200 hover:border-emerald-300">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a32dee1c-864e-495f-adff-5f23ebf5f7fc.png" 
                             alt="Tempat Tisu" class="w-full h-16 sm:h-20 object-cover" onclick="changeImage(this, 1)">
                    </div>
                    <div class="gallery-thumbnail rounded-lg overflow-hidden cursor-pointer border border-gray-200 hover:border-emerald-300">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/f0a0ab70-24c1-4518-ac89-47cb2ec254a3.png" 
                             alt="Tempat Tisu" class="w-full h-16 sm:h-20 object-cover" onclick="changeImage(this, 2)">
                    </div>
                    <div class="gallery-thumbnail rounded-lg overflow-hidden cursor-pointer border border-gray-200 hover:border-emerald-300">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/30b1bb46-6e01-47fa-8123-2371e7f65984.png" 
                             alt="Tempat Tisu" class="w-full h-16 sm:h-20 object-cover" onclick="changeImage(this, 3)">
                    </div>
                </div>
            </div>

            <!-- Product Info -->
            <div class="space-y-6">
                <!-- Product Header -->
                <div class="backdrop-blur-lg bg-white/80 border border-white/20 rounded-3xl border-neutral-200 p-6">
                    <span class="text-sm text-emerald-600 font-medium bg-emerald-100 px-3 py-1 rounded-full">Kerajinan</span>
                    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mt-4 leading-tight">Tempat Tisu Handmade</h1>
                    <div class="flex flex-wrap items-center mt-3 gap-4">
                        <div class="flex items-center">
                            <div class="rating-stars mr-2">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star-half-alt text-yellow-400"></i>
                            </div>
                            <span class="text-gray-700 font-medium">4.5</span>
                        </div>
                        <span class="text-sm text-gray-500">(18 ulasan)</span>
                        <span class="text-sm text-emerald-600 font-medium flex items-center">
                            <span class="w-2 h-2 bg-emerald-500 rounded-full mr-2"></span>
                            Tersedia
                        </span>
                    </div>
                </div>

                <!-- Price & Stock -->
                <div class="backdrop-blur-lg bg-white/80 border border-white/20 rounded-3xl border-neutral-200 p-6 bg-gradient-to-r from-emerald-50 to-teal-50">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <div>
                            <span class="text-3xl sm:text-4xl font-bold bg-gradient-to-r from-emerald-600 to-green-600 bg-clip-text text-transparent">Rp 75.000</span>
                            <p class="text-sm text-gray-600 mt-1">Harga sudah termasuk pajak</p>
                        </div>
                        <div class="text-right">
                            <span class="text-sm text-gray-500">Stok tersisa</span>
                            <div class="text-lg font-bold text-gray-800">15 pcs</div>
                        </div>
                    </div>
                </div>

                <!-- UMKM Info -->
                <div class="backdrop-blur-lg bg-white/80 border border-white/20 rounded-3xl border-neutral-200 p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <div class="w-8 h-8 bg-gradient-to-r from-emerald-400 to-green-500 rounded-lg flex items-center justify-center mr-2">
                            <i class="fas fa-store text-white text-sm"></i>
                        </div>
                        Informasi Penjual
                    </h3>
                    <div class="flex items-start space-x-4">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/dcded2c4-2a35-4ad4-8f4c-46ae73ed0c0a.png" 
                             alt="UMKM" class="w-16 h-16 rounded-xl object-cover flex-shrink-0 border-2 border-emerald-100">
                        <div class="flex-1 min-w-0">
                            <h4 class="font-bold text-gray-800 truncate">Sewish & Rich</h4>
                            <div class="space-y-2 mt-2">
                                <div class="flex items-start text-sm text-gray-600">
                                    <i class="fas fa-map-marker-alt mr-2 text-emerald-600 mt-0.5 flex-shrink-0"></i>
                                    <span class="break-words">Taman Buaran Indah Blok A2 No 7, Jakarta Timur</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-envelope mr-2 text-emerald-600 flex-shrink-0"></i>
                                    <span class="break-all">sewingmich@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Description -->
                <div class="backdrop-blur-lg bg-white/80 border border-white/20 rounded-3xl border-neutral-200 p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <div class="w-8 h-8 bg-gradient-to-r from-emerald-400 to-green-500 rounded-lg flex items-center justify-center mr-2">
                            <i class="fas fa-info-circle text-white text-sm"></i>
                        </div>
                        Deskripsi Produk
                    </h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Tempat tisu handmade yang elegan dan fungsional, cocok untuk mempercantik ruangan Anda. 
                        Dibuat dengan bahan berkualitas tinggi dan desain yang unik. Dapat digunakan untuk tisu basah maupun kering.
                        Produk ramah lingkungan dengan finishing yang halus dan tahan lama.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-3 sm:gap-4">
                        <div class="bg-gray-50 rounded-lg p-3">
                            <span class="block text-xs sm:text-sm text-gray-500">Kategori</span>
                            <span class="font-semibold text-gray-800">Kerajinan</span>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-3">
                            <span class="block text-xs sm:text-sm text-gray-500">Sub Kategori</span>
                            <span class="font-semibold text-gray-800">Souvenir</span>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-3">
                            <span class="block text-xs sm:text-sm text-gray-500">Bahan</span>
                            <span class="font-semibold text-gray-800">Kayu & Kain</span>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-3">
                            <span class="block text-xs sm:text-sm text-gray-500">Dimensi</span>
                            <span class="font-semibold text-gray-800">20x15x8 cm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Tabs -->
        <div class="mt-12">
            <div class="backdrop-blur-lg bg-white/80 border border-white/20 rounded-3xl border-neutral-200 overflow-hidden">
                <div class="border-b border-gray-200 py-4 px-6">
                    <nav class="flex space-x-8 overflow-x-auto">
                        <button onclick="showTab('description')" class="tab-btn whitespace-nowrap pb-4 px-1 border-b-2 border-transparent font-medium text-gray-500 hover:text-gray-700">
                            Deskripsi Lengkap
                        </button>
                        <button onclick="showTab('reviews')" class="tab-btn whitespace-nowrap pb-4 px-1 border-b-2 border-transparent font-medium text-gray-500 hover:text-gray-700">
                            Ulasan (18)
                        </button>
                    </nav>
                </div>

                <div class="p-6">
                    <!-- Description Tab -->
                    <div id="description-tab" class="tab-content">
                        <div class="prose max-w-none">
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Detail Produk</h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Tempat tisu handmade ini merupakan karya seni fungsional yang dirancang khusus untuk menambah keindahan interior rumah Anda. 
                                Setiap produk dibuat dengan tangan oleh pengrajin berpengalaman yang memperhatikan setiap detail finishing.
                            </p>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-3">Keunggulan Produk:</h4>
                                    <ul class="space-y-2 text-gray-600">
                                        <li class="flex items-start"><i class="fas fa-check text-emerald-500 mr-2 mt-1"></i> Bahan kayu berkualitas tinggi</li>
                                        <li class="flex items-start"><i class="fas fa-check text-emerald-500 mr-2 mt-1"></i> Finishing halus dan tahan lama</li>
                                        <li class="flex items-start"><i class="fas fa-check text-emerald-500 mr-2 mt-1"></i> Desain unik dan elegan</li>
                                        <li class="flex items-start"><i class="fas fa-check text-emerald-500 mr-2 mt-1"></i> Mudah dibersihkan</li>
                                        <li class="flex items-start"><i class="fas fa-check text-emerald-500 mr-2 mt-1"></i> Ramah lingkungan</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-3">Perawatan:</h4>
                                    <ul class="space-y-2 text-gray-600">
                                        <li class="flex items-start"><i class="fas fa-info-circle text-emerald-500 mr-2 mt-1"></i> Bersihkan dengan kain lembab</li>
                                        <li class="flex items-start"><i class="fas fa-info-circle text-emerald-500 mr-2 mt-1"></i> Hindari paparan air berlebihan</li>
                                        <li class="flex items-start"><i class="fas fa-info-circle text-emerald-500 mr-2 mt-1"></i> Gunakan pembersih kayu jika perlu</li>
                                        <li class="flex items-start"><i class="fas fa-info-circle text-emerald-500 mr-2 mt-1"></i> Simpan di tempat kering</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Reviews Tab -->
                    <div id="reviews-tab" class="tab-content hidden">
                        <div class="grid lg:grid-cols-3 gap-8">
                            <!-- Review Summary -->
                            <div class="lg:col-span-1">
                                <div class="bg-gradient-to-r from-emerald-50 to-green-50 rounded-xl p-6 text-center">
                                    <div class="text-4xl font-bold text-gray-800 mb-2">4.5</div>
                                    <div class="rating-stars justify-center mb-2">
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <i class="fas fa-star-half-alt text-yellow-400"></i>
                                    </div>
                                    <p class="text-sm text-gray-600">Berdasarkan 18 ulasan</p>
                                </div>

                                <div class="mt-6 space-y-3">
                                    <div class="flex items-center text-sm">
                                        <span class="w-12">5 ★</span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2 mx-3">
                                            <div class="bg-yellow-400 h-2 rounded-full" style="width: 72%"></div>
                                        </div>
                                        <span class="w-8 text-gray-600">72%</span>
                                    </div>
                                    <div class="flex items-center text-sm">
                                        <span class="w-12">4 ★</span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2 mx-3">
                                            <div class="bg-yellow-400 h-2 rounded-full" style="width: 22%"></div>
                                        </div>
                                        <span class="w-8 text-gray-600">22%</span>
                                    </div>
                                    <div class="flex items-center text-sm">
                                        <span class="w-12">3 ★</span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2 mx-3">
                                            <div class="bg-yellow-400 h-2 rounded-full" style="width: 6%"></div>
                                        </div>
                                        <span class="w-8 text-gray-600">6%</span>
                                    </div>
                                    <div class="flex items-center text-sm">
                                        <span class="w-12">2 ★</span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2 mx-3">
                                            <div class="bg-yellow-400 h-2 rounded-full" style="width: 0%"></div>
                                        </div>
                                        <span class="w-8 text-gray-600">0%</span>
                                    </div>
                                    <div class="flex items-center text-sm">
                                        <span class="w-12">1 ★</span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2 mx-3">
                                            <div class="bg-yellow-400 h-2 rounded-full" style="width: 0%"></div>
                                        </div>
                                        <span class="w-8 text-gray-600">0%</span>
                                    </div>
                                </div>

                                <button class="w-full mt-6 btn-gradient text-white py-3 rounded-xl font-medium">
                                    <i class="fas fa-edit mr-2"></i>Tulis Ulasan
                                </button>
                            </div>

                            <!-- Reviews List -->
                            <div class="lg:col-span-2 space-y-6">
                                <!-- Review 1 -->
                                <div class="review-card bg-white border border-gray-200 rounded-xl p-6 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-4">
                                        <div class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-green-600 rounded-full flex items-center justify-center text-white font-bold flex-shrink-0">
                                            A
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-3">
                                                <div>
                                                    <h4 class="font-bold text-gray-800">Ahmad Wijaya</h4>
                                                    <div class="flex items-center text-sm text-gray-600 mt-1">
                                                        <div class="rating-stars mr-2">
                                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                                        </div>
                                                        <span>2 hari lalu</span>
                                                    </div>
                                                </div>
                                                <button class="text-gray-400 hover:text-emerald-600 mt-2 sm:mt-0">
                                                    <i class="fas fa-reply"></i>
                                                </button>
                                            </div>
                                            <p class="text-gray-600 mb-4 leading-relaxed">
                                                Kualitas produknya sangat bagus! Finishing kayunya halus dan rapi. Desainnya juga elegan, cocok banget untuk di ruang tamu. 
                                                Penjualnya ramah dan pengiriman cepat. Recommended banget! 👍
                                            </p>
                                            <div class="flex items-center space-x-4 text-sm text-gray-500">
                                                <button class="hover:text-emerald-600 transition-colors">
                                                    <i class="fas fa-thumbs-up mr-1"></i>Berguna (8)
                                                </button>
                                                <button class="hover:text-emerald-600 transition-colors">
                                                    <i class="fas fa-comment mr-1"></i>Balas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Review 2 -->
                                <div class="review-card bg-white border border-gray-200 rounded-xl p-6 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-4">
                                        <div class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-green-600 rounded-full flex items-center justify-center text-white font-bold flex-shrink-0">
                                            S
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-3">
                                                <div>
                                                    <h4 class="font-bold text-gray-800">Siti Nurhaliza</h4>
                                                    <div class="flex items-center text-sm text-gray-600 mt-1">
                                                        <div class="rating-stars mr-2">
                                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                                            <i class="fas fa-star text-gray-300 text-xs"></i>
                                                        </div>
                                                        <span>1 minggu lalu</span>
                                                    </div>
                                                </div>
                                                <button class="text-gray-400 hover:text-emerald-600 mt-2 sm:mt-0">
                                                    <i class="fas fa-reply"></i>
                                                </button>
                                            </div>
                                            <p class="text-gray-600 mb-4 leading-relaxed">
                                                Tempat tisunya cantik dan fungsional. Ukurannya pas dan tidak terlalu besar. Cocok untuk hadiah juga. 
                                                Cuma agak lama pengirimannya, tapi overall puas dengan produknya.
                                            </p>
                                            <div class="flex items-center space-x-4 text-sm text-gray-500">
                                                <button class="hover:text-emerald-600 transition-colors">
                                                    <i class="fas fa-thumbs-up mr-1"></i>Berguna (5)
                                                </button>
                                                <button class="hover:text-emerald-600 transition-colors">
                                                    <i class="fas fa-comment mr-1"></i>Balas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Seller Reply -->
                                <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-6 ml-8">
                                    <div class="flex items-start space-x-4">
                                        <div class="w-10 h-10 bg-gradient-to-r from-emerald-500 to-green-600 rounded-full flex items-center justify-center text-white flex-shrink-0">
                                            <i class="fas fa-store text-sm"></i>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <div class="flex flex-col sm:flex-row sm:items-center mb-2">
                                                <h4 class="font-bold text-gray-800">Sewish & Rich</h4>
                                                <div class="flex items-center mt-1 sm:mt-0 sm:ml-3">
                                                    <span class="bg-emerald-600 text-white text-xs px-2 py-1 rounded-full">Penjual</span>
                                                    <span class="ml-2 text-sm text-gray-600">5 hari lalu</span>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 leading-relaxed">
                                                Terima kasih atas ulasannya, Bu Siti! 🙏 Mohon maaf untuk keterlambatan pengiriman. 
                                                Kami akan terus berusaha meningkatkan layanan kami. Semoga produknya bermanfaat ya! 😊
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button class="text-emerald-600 hover:text-emerald-800 font-medium transition-colors">
                                        Lihat Semua Ulasan (18) <i class="fas fa-chevron-down ml-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products Section -->
        <section class="mt-12">
            <div class="backdrop-blur-lg bg-white/80 border border-white/20 rounded-3xl border-neutral-200 p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">
                    Produk Lainnya dari UMKM Ini
                </h2>

                <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                    <!-- Related Product 1 -->
                    <div class="card-hover bg-white rounded-2xl shadow-sm overflow-hidden transition-all duration-300">
                        <div class="relative image-zoom">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a32dee1c-864e-495f-adff-5f23ebf5f7fc.png" 
                                 alt="Kotak Perhiasan" class="w-full h-32 sm:h-48 object-cover transition-transform duration-500">
                            <div class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded-full">
                                <i class="fas fa-star mr-1"></i> 4.7
                            </div>
                        </div>
                        <div class="p-3 sm:p-4">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-xs sm:text-sm text-emerald-600 font-medium">Kerajinan</span>
                                <span class="text-xs sm:text-sm text-gray-500">Stok: 8</span>
                            </div>
                            <h3 class="text-sm sm:text-lg font-bold text-gray-800 mb-2 line-clamp-2">
                                Kotak Perhiasan Vintage
                            </h3>
                            <div class="flex justify-between items-center">
                                <span class="text-sm sm:text-lg font-bold text-emerald-600">Rp 95.000</span>
                                <a href="#" class="text-emerald-600 hover:text-emerald-800 text-xs sm:text-sm font-medium">
                                    Detail <i class="fas fa-chevron-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Related Product 2 -->
                    <div class="card-hover bg-white rounded-2xl shadow-sm overflow-hidden transition-all duration-300">
                        <div class="relative image-zoom">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/f0a0ab70-24c1-4518-ac89-47cb2ec254a3.png" 
                                 alt="Rak Buku Mini" class="w-full h-32 sm:h-48 object-cover transition-transform duration-500">
                            <div class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded-full">
                                <i class="fas fa-star mr-1"></i> 4.6
                            </div>
                        </div>
                        <div class="p-3 sm:p-4">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-xs sm:text-sm text-emerald-600 font-medium">Kerajinan</span>
                                <span class="text-xs sm:text-sm text-gray-500">Stok: 12</span>
                            </div>
                            <h3 class="text-sm sm:text-lg font-bold text-gray-800 mb-2 line-clamp-2">
                                Rak Buku Mini Kayu
                            </h3>
                            <div class="flex justify-between items-center">
                                <span class="text-sm sm:text-lg font-bold text-emerald-600">Rp 125.000</span>
                                <a href="#" class="text-emerald-600 hover:text-emerald-800 text-xs sm:text-sm font-medium">
                                    Detail <i class="fas fa-chevron-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Related Product 3 -->
                    <div class="card-hover bg-white rounded-2xl shadow-sm overflow-hidden transition-all duration-300">
                        <div class="relative image-zoom">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/30b1bb46-6e01-47fa-8123-2371e7f65984.png" 
                                 alt="Tempat Pensil" class="w-full h-32 sm:h-48 object-cover transition-transform duration-500">
                            <div class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded-full">
                                <i class="fas fa-star mr-1"></i> 4.8
                            </div>
                        </div>
                        <div class="p-3 sm:p-4">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-xs sm:text-sm text-emerald-600 font-medium">Kerajinan</span>
                                <span class="text-xs sm:text-sm text-gray-500">Stok: 20</span>
                            </div>
                            <h3 class="text-sm sm:text-lg font-bold text-gray-800 mb-2 line-clamp-2">
                                Tempat Pensil Handmade
                            </h3>
                            <div class="flex justify-between items-center">
                                <span class="text-sm sm:text-lg font-bold text-emerald-600">Rp 45.000</span>
                                <a href="#" class="text-emerald-600 hover:text-emerald-800 text-xs sm:text-sm font-medium">
                                    Detail <i class="fas fa-chevron-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Related Product 4 -->
                    <div class="card-hover bg-white rounded-2xl shadow-sm overflow-hidden transition-all duration-300">
                        <div class="relative image-zoom">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a4e27cea-7565-4c29-8bd4-dfb1059b79b7.png" 
                                 alt="Cermin Hias" class="w-full h-32 sm:h-48 object-cover transition-transform duration-500">
                            <div class="absolute top-2 right-2 bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded-full">
                                <i class="fas fa-star mr-1"></i> 4.9
                            </div>
                        </div>
                        <div class="p-3 sm:p-4">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-xs sm:text-sm text-emerald-600 font-medium">Kerajinan</span>
                                <span class="text-xs sm:text-sm text-gray-500">Stok: 6</span>
                            </div>
                            <h3 class="text-sm sm:text-lg font-bold text-gray-800 mb-2 line-clamp-2">
                                Cermin Hias Vintage
                            </h3>
                            <div class="flex justify-between items-center">
                              <span class="text-sm sm:text-lg font-bold text-blue-600">Rp 180.000</span>
                              <button class="text-blue-600 hover:text-blue-800 text-xs sm:text-sm font-medium">
                                Detail <i class="fas fa-chevron-right ml-1"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
               <div class="text-center mt-8">
                 <button class="btn-gradient text-white px-8 py-3 rounded-xl font-medium">
                   Lihat Semua Produk UMKM Ini
                 </button>
               </div>
             </div>
           </div>
         </section>

    <script>
  // Mobile menu toggle
  const mobileMenuBtn = document.getElementById("mobile-menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");
  const closeMenu = document.getElementById("close-menu");

  mobileMenuBtn.addEventListener("click", () => {
    mobileMenu.classList.remove("translate-x-full");
  });

  closeMenu.addEventListener("click", () => {
    mobileMenu.classList.add("translate-x-full");
  });

  // Close mobile menu when clicking outside
  mobileMenu.addEventListener("click", (e) => {
    if (e.target === mobileMenu) {
      mobileMenu.classList.add("translate-x-full");
    }
  });

  // Navbar scroll effect
  window.addEventListener("scroll", () => {
    const navbar = document.getElementById("navbar");
    if (window.scrollY > 50) {
      navbar.classList.add("navbar-scroll", "shadow-lg");
    } else {
      navbar.classList.remove("navbar-scroll", "shadow-lg");
    }
  });

  // Scroll reveal animation
  function revealSections() {
    const sections = document.querySelectorAll(".section-reveal");
    sections.forEach((section) => {
      const sectionTop = section.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;
      if (sectionTop < windowHeight - 100) {
        section.classList.add("revealed");
      }
    });
  }

  window.addEventListener("scroll", revealSections);
  window.addEventListener("load", revealSections);

  // Product gallery image change
  const images = [
    "https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/cd8fbedf-b03f-4d82-9e8a-467049d080f1.png",
    "https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a32dee1c-864e-495f-adff-5f23ebf5f7fc.png",
    "https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/f0a0ab70-24c1-4518-ac89-47cb2ec254a3.png",
    "https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/30b1bb46-6e01-47fa-8123-2371e7f65984.png"
  ];

  function changeImage(element, index) {
    const mainImage = document.getElementById("main-image");
    const thumbnails = document.querySelectorAll(".gallery-thumbnail");

    // Update main image
    mainImage.src = images[index];

    // Update active thumbnail
    thumbnails.forEach((thumb) => {
      thumb.classList.remove("border-emerald-500", "border-2", "active");
      thumb.classList.add("border-gray-200");
    });
    
    element.parentElement.classList.remove("border-gray-200");
    element.parentElement.classList.add("border-emerald-500", "border-2", "active");
  }

  // Tab functionality
  function showTab(tabName) {
    // Hide all tab contents
    const tabContents = document.querySelectorAll('.tab-content');
    tabContents.forEach(content => {
      content.classList.add('hidden');
    });

    // Remove active class from all tab buttons
    const tabButtons = document.querySelectorAll('.tab-btn');
    tabButtons.forEach(btn => {
      btn.classList.remove('border-emerald-600', 'text-emerald-600');
      btn.classList.add('border-transparent', 'text-gray-500');
    });

    // Show selected tab content
    document.getElementById(tabName + '-tab').classList.remove('hidden');

    // Add active class to clicked button
    event.target.classList.remove('border-transparent', 'text-gray-500');
    event.target.classList.add('border-emerald-600', 'text-emerald-600');
  }

  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });

  // Add to cart functionality (demo)
  document.querySelectorAll('button').forEach(btn => {
    if (btn.textContent.includes('Tambah ke Keranjang') || btn.textContent.includes('Beli Sekarang')) {
      btn.addEventListener('click', function() {
        // Show success message
        const toast = document.createElement('div');
        toast.className = 'fixed top-20 right-4 bg-emerald-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 transform translate-x-full transition-transform duration-300';
        toast.innerHTML = '<i class="fas fa-check mr-2"></i>Produk berhasil ditambahkan ke keranjang!';
        document.body.appendChild(toast);
        
        // Animate in
        setTimeout(() => {
          toast.classList.remove('translate-x-full');
        }, 100);
        
        // Remove after 3 seconds
        setTimeout(() => {
          toast.classList.add('translate-x-full');
          setTimeout(() => {
            document.body.removeChild(toast);
          }, 300);
        }, 3000);
      });
    }
  });

  // Lazy loading for images
  if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.dataset.src;
          img.classList.remove('opacity-0');
          imageObserver.unobserve(img);
        }
      });
    });

    document.querySelectorAll('img[data-src]').forEach(img => {
      imageObserver.observe(img);
    });
  }

  // Enhanced hover effects for cards
  document.querySelectorAll('.card-hover').forEach(card => {
    card.addEventListener('mouseenter', function() {
      this.style.transform = 'translateY(-8px)';
      this.style.boxShadow = '0 20px 40px rgba(0, 0, 0, 0.12)';
    });
    
    card.addEventListener('mouseleave', function() {
      this.style.transform = 'translateY(0)';
      this.style.boxShadow = '';
    });
  });

  // Image loading optimization
  document.querySelectorAll('img').forEach(img => {
    img.addEventListener('load', function() {
      this.classList.add('loaded');
    });
    
    img.addEventListener('error', function() {
      this.src = 'https://via.placeholder.com/400x300?text=Image+Not+Found';
    });
  });

  // Performance optimization - debounce scroll events
  function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
      const later = () => {
        clearTimeout(timeout);
        func(...args);
      };
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
    };
  }

  // Apply debounce to scroll events
  window.addEventListener('scroll', debounce(() => {
    revealSections();
  }, 10));

  // Add loading state to buttons
  document.querySelectorAll('button').forEach(btn => {
    btn.addEventListener('click', function() {
      if (this.textContent.includes('Tambah ke Keranjang')) {
        const originalText = this.innerHTML;
        this.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Menambahkan...';
        this.disabled = true;
        
        setTimeout(() => {
          this.innerHTML = originalText;
          this.disabled = false;
        }, 1500);
      }
    });
  });

  // Initialize tooltips for truncated text
  document.querySelectorAll('.line-clamp-2').forEach(element => {
    if (element.scrollHeight > element.clientHeight) {
      element.title = element.textContent;
    }
  });

  // Add touch feedback for mobile
  if ('ontouchstart' in window) {
    document.querySelectorAll('button, .card-hover').forEach(element => {
      element.addEventListener('touchstart', function() {
        this.style.transform = 'scale(0.98)';
      });
      
      element.addEventListener('touchend', function() {
        setTimeout(() => {
          this.style.transform = '';
        }, 150);
      });
    });
  }
</script>
 @endsection
