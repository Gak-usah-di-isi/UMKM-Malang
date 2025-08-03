@extends('core.landingPage')

@section('title', 'UMKM Kota Malang | Detail Produk')

@section('style')
<style>
   @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        html {
            zoom: 0.9;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(3deg); }
        }
        
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(16, 185, 129, 0.3); }
            50% { box-shadow: 0 0 40px rgba(16, 185, 129, 0.6); }
        }
        
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .animate-pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite;
        }
        
        .animate-slide-in-up {
            animation: slideInUp 0.6s ease-out forwards;
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #10b981, #059669);
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #059669, #047857);
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 20px 40px rgba(16, 185, 129, 0.4);
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
        }
        
        .btn-primary:hover::before {
            left: 100%;
        }
        
        .image-container {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            background: #f0f0f0;
        }
        
        .zoom-image {
            transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        .zoom-image:hover {
            transform: scale(1.1) rotate(2deg);
        }
        
        .thumbnail-active {
            border: 3px solid #10b981;
            box-shadow: 0 0 20px rgba(16, 185, 129, 0.5);
            transform: scale(1.05);
        }
        
        .price-highlight {
            background: linear-gradient(135deg, #10b981, #34d399);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            filter: drop-shadow(0 2px 4px rgba(16, 185, 129, 0.3));
        }
        
        .rating-stars {
            filter: drop-shadow(0 2px 4px rgba(245, 158, 11, 0.3));
        }
        
        .floating-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(135deg, #f59e0b, #d97706);
            color: white;
            padding: 8px 12px;
            border-radius: 25px;
            font-size: 12px;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(245, 158, 11, 0.4);
            animation: float 3s ease-in-out infinite;
        }
        
        .review-card {
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        .review-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .tab-active {
            background: linear-gradient(135deg, #10b981, #34d399);
            color: white;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
        }
        
        .parallax-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            background-attachment: fixed;
        }
        
        .scroll-reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.6s ease-out;
        }
        
        .scroll-reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }
        
        .interactive-3d {
            transform-style: preserve-3d;
            transition: transform 0.3s ease;
        }
        
        .interactive-3d:hover {
            transform: rotateY(5deg) rotateX(5deg) scale(1.02);
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #10b981, #34d399);
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #059669, #10b981);
        }
        
        .notification-toast {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            transform: translateX(100%);
            transition: transform 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        .notification-toast.show {
            transform: translateX(0);
        }
        
        @media (max-width: 768px) {
            .glass-card {
                margin: 10px;
                border-radius: 15px;
            }
        }
</style>
@endsection

@section('content')
<div class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 min-h-screen">

    <div class="container mx-auto px-4 py-8 relative z-10">
        <!-- Enhanced Breadcrumb -->
        <nav class="mb-8 scroll-reveal">
            <div class="glass-card rounded-2xl p-4">
                <ol class="flex items-center space-x-2 text-sm">
                    <li><a href="/" class="text-gray-600 hover:text-emerald-600 transition-colors flex items-center">
                        <i class="fas fa-home mr-1"></i> Beranda
                    </a></li>
                    <li><i class="fas fa-chevron-right text-gray-400 text-xs"></i></li>
                    <li><a href="/products" class="text-gray-600 hover:text-emerald-600 transition-colors">Produk</a></li>
                    <li><i class="fas fa-chevron-right text-gray-400 text-xs"></i></li>
                    <li class="text-emerald-600 font-semibold">Tempat Tisu Handmade</li>
                </ol>
            </div>
        </nav>

        <!-- Main Product Section -->
        <div class="grid lg:grid-cols-2 gap-12 mb-16">
            <!-- Enhanced Product Images -->
            <div class="scroll-reveal">
                <div class="glass-card rounded-3xl p-6 interactive-3d">
                    <div class="image-container mb-6 relative">
                        <img id="main-image" 
                             src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/cd8fbedf-b03f-4d82-9e8a-467049d080f1.png" 
                             alt="Tempat Tisu Handmade" 
                             class="w-full h-80 lg:h-96 object-cover zoom-image">
                        <div class="floating-badge">
                            <i class="fas fa-star mr-1"></i> 4.5
                        </div>
                        <button class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-sm p-3 rounded-full shadow-lg hover:scale-110 transition-transform">
                            <i class="fas fa-search-plus text-gray-700"></i>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-4 gap-4">
                        <div class="thumbnail-container cursor-pointer thumbnail-active" onclick="changeImage(0)">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/cd8fbedf-b03f-4d82-9e8a-467049d080f1.png" 
                                 alt="View 1" class="w-full h-20 object-cover rounded-xl transition-transform hover:scale-105">
                        </div>
                        <div class="thumbnail-container cursor-pointer rounded-xl border-2 border-transparent hover:border-emerald-300 transition-all" onclick="changeImage(1)">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a32dee1c-864e-495f-adff-5f23ebf5f7fc.png" 
                                 alt="View 2" class="w-full h-20 object-cover rounded-xl transition-transform hover:scale-105">
                        </div>
                        <div class="thumbnail-container cursor-pointer rounded-xl border-2 border-transparent hover:border-emerald-300 transition-all" onclick="changeImage(2)">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/f0a0ab70-24c1-4518-ac89-47cb2ec254a3.png" 
                                 alt="View 3" class="w-full h-20 object-cover rounded-xl transition-transform hover:scale-105">
                        </div>
                        <div class="thumbnail-container cursor-pointer rounded-xl border-2 border-transparent hover:border-emerald-300 transition-all" onclick="changeImage(3)">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/30b1bb46-6e01-47fa-8123-2371e7f65984.png" 
                                 alt="View 4" class="w-full h-20 object-cover rounded-xl transition-transform hover:scale-105">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Product Info -->
            <div class="space-y-6">
                <!-- Product Header -->
                <div class="glass-card rounded-3xl p-6 scroll-reveal">
                    <div class="flex items-center justify-between mb-4">
                        <span class="bg-gradient-to-r from-emerald-500 to-green-500 text-white px-4 py-2 rounded-full text-sm font-semibold">
                            <i class="fas fa-hammer mr-1"></i> Kerajinan
                        </span>
                        <div class="flex items-center space-x-2">
                            <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                            <span class="text-sm text-green-600 font-medium">Tersedia</span>
                        </div>
                    </div>
                    
                    <h1 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-4 leading-tight">
                        Tempat Tisu Handmade Premium
                    </h1>
                    
                    <div class="flex flex-wrap items-center gap-6 mb-6">
                        <div class="flex items-center">
                            <div class="rating-stars mr-2">
                                <i class="fas fa-star text-yellow-400 text-lg"></i>
                                <i class="fas fa-star text-yellow-400 text-lg"></i>
                                <i class="fas fa-star text-yellow-400 text-lg"></i>
                                <i class="fas fa-star text-yellow-400 text-lg"></i>
                                <i class="fas fa-star-half-alt text-yellow-400 text-lg"></i>
                            </div>
                            <span class="text-xl font-bold text-gray-800">4.5</span>
                            <span class="text-gray-500 ml-2">(18 ulasan)</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-eye mr-2"></i>
                            <span>1,240 dilihat</span>
                        </div>
                    </div>

                    <!-- Price Section -->
                    <div class="bg-gradient-to-r from-emerald-50 to-green-50 rounded-2xl p-6 mb-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-4xl font-bold price-highlight">Rp 75.000</span>
                                <p class="text-gray-600 mt-1">Sudah termasuk pajak</p>
                            </div>
                            <div class="text-right">
                                <div class="bg-white rounded-xl p-3 shadow-sm">
                                    <span class="text-sm text-gray-500 block">Stok tersisa</span>
                                    <span class="text-2xl font-bold text-gray-800">15</span>
                                    <span class="text-sm text-gray-500">pcs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enhanced UMKM Info -->
                <div class="glass-card rounded-3xl p-6 scroll-reveal">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold text-gray-800 flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-r from-emerald-500 to-green-500 rounded-xl flex items-center justify-center mr-3">
                                <i class="fas fa-store text-white"></i>
                            </div>
                            Informasi Penjual
                        </h3>
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            <span class="text-sm text-green-600">Online</span>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="relative">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/dcded2c4-2a35-4ad4-8f4c-46ae73ed0c0a.png" 
                                 alt="Sewish & Rich" class="w-16 h-16 rounded-2xl object-cover border-3 border-emerald-200">
                            <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-2 border-white flex items-center justify-center">
                                <i class="fas fa-check text-white text-xs"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center space-x-2 mb-2">
                                <h4 class="font-bold text-gray-800 text-lg">Sewish & Rich</h4>
                                <span class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-2 py-1 rounded-full text-xs font-semibold">
                                    <i class="fas fa-crown mr-1"></i>Premium
                                </span>
                            </div>
                            <div class="space-y-2 text-sm text-gray-600">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-emerald-500 mr-2"></i>
                                    <span>Jakarta Timur</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400 mr-2"></i>
                                    <span>4.8 (250+ ulasan)</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-clock text-emerald-500 mr-2"></i>
                                    <span>Bergabung 3 tahun lalu</span>
                                </div>
                            </div>
                            <button class="mt-3 bg-emerald-100 text-emerald-700 px-4 py-2 rounded-xl font-medium hover:bg-emerald-200 transition-colors">
                                <i class="fas fa-comment mr-2"></i>Chat Penjual
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced Product Details Tabs -->
        <div class="glass-card rounded-3xl overflow-hidden mb-16 scroll-reveal">
            <div class="border-b border-gray-200 p-6">
                <nav class="flex space-x-1">
                    <button onclick="showTab('description')" class="tab-btn tab-active px-6 py-3 rounded-xl font-semibold transition-all duration-300">
                        <i class="fas fa-info-circle mr-2"></i>Deskripsi
                    </button>
                    <button onclick="showTab('reviews')" class="tab-btn px-6 py-3 rounded-xl font-semibold text-gray-600 hover:text-gray-800 transition-all duration-300">
                        <i class="fas fa-star mr-2"></i>Ulasan (18)
                    </button>
                </nav>
            </div>

            <div class="p-6">
                <!-- Description Tab -->
                <div id="description-tab" class="tab-content">
                    <div class="grid lg:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-4">Tentang Produk</h3>
                            <p class="text-gray-600 leading-relaxed mb-6">
                                Tempat tisu handmade premium yang menggabungkan keindahan desain dengan fungsi praktis. 
                                Dibuat oleh pengrajin berpengalaman dengan perhatian detail tinggi untuk memberikan sentuhan 
                                elegan pada interior rumah Anda.
                            </p>
                            
                            <div class="space-y-4">
                                <h4 class="font-semibold text-gray-800 text-lg">Keunggulan Produk:</h4>
                                <div class="grid gap-3">
                                    <div class="flex items-center space-x-3 p-3 bg-green-50 rounded-xl">
                                        <i class="fas fa-check-circle text-green-500"></i>
                                        <span class="text-gray-700">Bahan kayu berkualitas tinggi</span>
                                    </div>
                                    <div class="flex items-center space-x-3 p-3 bg-green-50 rounded-xl">
                                        <i class="fas fa-check-circle text-green-500"></i>
                                        <span class="text-gray-700">Finishing halus dan tahan lama</span>
                                    </div>
                                    <div class="flex items-center space-x-3 p-3 bg-green-50 rounded-xl">
                                        <i class="fas fa-check-circle text-green-500"></i>
                                        <span class="text-gray-700">Desain unik dan elegan</span>
                                    </div>
                                    <div class="flex items-center space-x-3 p-3 bg-green-50 rounded-xl">
                                        <i class="fas fa-check-circle text-green-500"></i>
                                        <span class="text-gray-700">Ramah lingkungan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <h4 class="font-semibold text-gray-800 text-lg mb-4">Perawatan Produk:</h4>
                            <div class="space-y-3">
                                <div class="flex items-start space-x-3 p-3 bg-blue-50 rounded-xl">
                                    <i class="fas fa-info-circle text-blue-500 mt-1"></i>
                                    <span class="text-gray-700">Bersihkan dengan kain lembab secara berkala</span>
                                </div>
                                <div class="flex items-start space-x-3 p-3 bg-blue-50 rounded-xl">
                                    <i class="fas fa-info-circle text-blue-500 mt-1"></i>
                                    <span class="text-gray-700">Hindari paparan air berlebihan</span>
                                </div>
                                <div class="flex items-start space-x-3 p-3 bg-blue-50 rounded-xl">
                                    <i class="fas fa-info-circle text-blue-500 mt-1"></i>
                                    <span class="text-gray-700">Simpan di tempat kering dan sejuk</span>
                                </div>
                            </div>
                            
                            <div class="mt-8 p-6 bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl">
                                <h4 class="font-semibold text-gray-800 mb-3">💡 Tips Penggunaan</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Untuk hasil terbaik, letakkan di area dengan sirkulasi udara yang baik. 
                                    Produk ini cocok untuk tisu basah maupun kering dengan berbagai ukuran.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Reviews Tab -->
                <div id="reviews-tab" class="tab-content hidden">
                    <div class="grid lg:grid-cols-3 gap-8">
                        <!-- Review Summary -->
                        <div class="lg:col-span-1">
                            <div class="bg-gradient-to-br from-emerald-50 to-green-100 rounded-2xl p-6 text-center mb-6">
                                <div class="text-5xl font-bold text-gray-800 mb-3">4.5</div>
                                <div class="rating-stars justify-center mb-3">
                                    <i class="fas fa-star text-yellow-400 text-xl"></i>
                                    <i class="fas fa-star text-yellow-400 text-xl"></i>
                                    <i class="fas fa-star text-yellow-400 text-xl"></i>
                                    <i class="fas fa-star text-yellow-400 text-xl"></i>
                                    <i class="fas fa-star-half-alt text-yellow-400 text-xl"></i>
                                </div>
                                <p class="text-gray-600 font-medium">Berdasarkan 18 ulasan</p>
                            </div>

                            <div class="space-y-3 mb-6">
                                <div class="flex items-center text-sm">
                                    <span class="w-12 font-medium">5 ★</span>
                                    <div class="flex-1 bg-gray-200 rounded-full h-2.5 mx-3">
                                        <div class="bg-yellow-400 h-2.5 rounded-full transition-all duration-1000" style="width: 72%"></div>
                                    </div>
                                    <span class="w-12 text-gray-600 font-medium">72%</span>
                                </div>
                                <div class="flex items-center text-sm">
                                    <span class="w-12 font-medium">4 ★</span>
                                    <div class="flex-1 bg-gray-200 rounded-full h-2.5 mx-3">
                                        <div class="bg-yellow-400 h-2.5 rounded-full transition-all duration-1000" style="width: 22%"></div>
                                    </div>
                                    <span class="w-12 text-gray-600 font-medium">22%</span>
                                </div>
                                <div class="flex items-center text-sm">
                                    <span class="w-12 font-medium">3 ★</span>
                                    <div class="flex-1 bg-gray-200 rounded-full h-2.5 mx-3">
                                        <div class="bg-yellow-400 h-2.5 rounded-full transition-all duration-1000" style="width: 6%"></div>
                                    </div>
                                    <span class="w-12 text-gray-600 font-medium">6%</span>
                                </div>
                                <div class="flex items-center text-sm">
                                    <span class="w-12 font-medium">2 ★</span>
                                    <div class="flex-1 bg-gray-200 rounded-full h-2.5 mx-3">
                                        <div class="bg-gray-300 h-2.5 rounded-full transition-all duration-1000" style="width: 0%"></div>
                                    </div>
                                    <span class="w-12 text-gray-600 font-medium">0%</span>
                                </div>
                                <div class="flex items-center text-sm">
                                    <span class="w-12 font-medium">1 ★</span>
                                    <div class="flex-1 bg-gray-200 rounded-full h-2.5 mx-3">
                                        <div class="bg-gray-300 h-2.5 rounded-full transition-all duration-1000" style="width: 0%"></div>
                                    </div>
                                    <span class="w-12 text-gray-600 font-medium">0%</span>
                                </div>
                            </div>

                            <button class="w-full btn-primary text-white py-4 rounded-2xl font-semibold hover:scale-105 transition-transform">
                                <i class="fas fa-edit mr-2"></i>Tulis Ulasan
                            </button>
                        </div>

                        <!-- Reviews List -->
                        <div class="lg:col-span-2 space-y-6">
                            <!-- Review 1 -->
                            <div class="review-card glass-card rounded-2xl p-6">
                                <div class="flex items-start space-x-4">
                                    <div class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-green-600 rounded-2xl flex items-center justify-center text-white font-bold flex-shrink-0">
                                        A
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-3">
                                            <div>
                                                <h4 class="font-bold text-gray-800 text-lg">Ahmad Wijaya</h4>
                                                <div class="flex items-center mt-1">
                                                    <div class="rating-stars mr-2">
                                                        <i class="fas fa-star text-yellow-400"></i>
                                                        <i class="fas fa-star text-yellow-400"></i>
                                                        <i class="fas fa-star text-yellow-400"></i>
                                                        <i class="fas fa-star text-yellow-400"></i>
                                                        <i class="fas fa-star text-yellow-400"></i>
                                                    </div>
                                                    <span class="text-sm text-gray-500">2 hari lalu</span>
                                                </div>
                                            </div>
                                            <div class="text-green-600 font-semibold">
                                                <i class="fas fa-check-circle mr-1"></i>Terverifikasi
                                            </div>
                                        </div>
                                        <p class="text-gray-700 leading-relaxed mb-4">
                                            Kualitas produknya sangat bagus! Finishing kayunya halus dan rapi. Desainnya juga elegan, 
                                            cocok banget untuk di ruang tamu. Penjualnya ramah dan pengiriman cepat. Recommended banget! 👍
                                        </p>
                                        <div class="flex items-center space-x-6 text-sm">
                                            <button class="flex items-center space-x-2 text-gray-500 hover:text-emerald-600 transition-colors">
                                                <i class="fas fa-thumbs-up"></i>
                                                <span>Berguna (8)</span>
                                            </button>
                                            <button class="flex items-center space-x-2 text-gray-500 hover:text-emerald-600 transition-colors">
                                                <i class="fas fa-comment"></i>
                                                <span>Balas</span>
                                            </button>
                                            <button class="flex items-center space-x-2 text-gray-500 hover:text-red-500 transition-colors">
                                                <i class="fas fa-flag"></i>
                                                <span>Laporkan</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Review 2 -->
                            <div class="review-card glass-card rounded-2xl p-6">
                                <div class="flex items-start space-x-4">
                                    <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center text-white font-bold flex-shrink-0">
                                        S
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-3">
                                            <div>
                                                <h4 class="font-bold text-gray-800 text-lg">Siti Nurhaliza</h4>
                                                <div class="flex items-center mt-1">
                                                    <div class="rating-stars mr-2">
                                                        <i class="fas fa-star text-yellow-400"></i>
                                                        <i class="fas fa-star text-yellow-400"></i>
                                                        <i class="fas fa-star text-yellow-400"></i>
                                                        <i class="fas fa-star text-yellow-400"></i>
                                                        <i class="fas fa-star text-gray-300"></i>
                                                    </div>
                                                    <span class="text-sm text-gray-500">1 minggu lalu</span>
                                                </div>
                                            </div>
                                            <div class="text-green-600 font-semibold">
                                                <i class="fas fa-check-circle mr-1"></i>Terverifikasi
                                            </div>
                                        </div>
                                        <p class="text-gray-700 leading-relaxed mb-4">
                                            Tempat tisunya cantik dan fungsional. Ukurannya pas dan tidak terlalu besar. 
                                            Cocok untuk hadiah juga. Cuma agak lama pengirimannya, tapi overall puas dengan produknya.
                                        </p>
                                        <div class="flex items-center space-x-6 text-sm">
                                            <button class="flex items-center space-x-2 text-gray-500 hover:text-emerald-600 transition-colors">
                                                <i class="fas fa-thumbs-up"></i>
                                                <span>Berguna (5)</span>
                                            </button>
                                            <button class="flex items-center space-x-2 text-gray-500 hover:text-emerald-600 transition-colors">
                                                <i class="fas fa-comment"></i>
                                                <span>Balas</span>
                                            </button>
                                            <button class="flex items-center space-x-2 text-gray-500 hover:text-red-500 transition-colors">
                                                <i class="fas fa-flag"></i>
                                                <span>Laporkan</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Seller Reply -->
                            <div class="bg-gradient-to-r from-emerald-50 to-green-50 border border-emerald-200 rounded-2xl p-6 ml-8">
                                <div class="flex items-start space-x-4">
                                    <div class="w-10 h-10 bg-gradient-to-r from-emerald-500 to-green-600 rounded-xl flex items-center justify-center text-white flex-shrink-0">
                                        <i class="fas fa-store"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center mb-2">
                                            <h4 class="font-bold text-gray-800 mr-3">Sewish & Rich</h4>
                                            <span class="bg-emerald-600 text-white text-xs px-3 py-1 rounded-full font-semibold">Penjual</span>
                                            <span class="ml-3 text-sm text-gray-600">5 hari lalu</span>
                                        </div>
                                        <p class="text-gray-700 leading-relaxed">
                                            Terima kasih atas ulasannya, Bu Siti! 🙏 Mohon maaf untuk keterlambatan pengiriman. 
                                            Kami akan terus berusaha meningkatkan layanan kami. Semoga produknya bermanfaat ya! 😊
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Load More Reviews -->
                            <div class="text-center pt-6">
                                <button class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-8 py-3 rounded-2xl font-semibold transition-colors">
                                    Lihat Semua Ulasan (18) <i class="fas fa-chevron-down ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products Section -->
        <section class="scroll-reveal">
            <div class="glass-card rounded-3xl p-8">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-3xl font-bold text-gray-800">
                        <i class="fas fa-heart text-red-500 mr-3"></i>
                        Produk Lainnya dari UMKM Ini
                    </h2>
                    <button class="text-emerald-600 hover:text-emerald-800 font-semibold transition-colors">
                        Lihat Semua <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Related Product 1 -->
                    <div class="group bg-white rounded-2xl shadow-sm overflow-hidden transition-all duration-500 hover:shadow-2xl hover:scale-105">
                        <div class="relative overflow-hidden">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a32dee1c-864e-495f-adff-5f23ebf5f7fc.png" 
                                 alt="Kotak Perhiasan" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute top-3 right-3 bg-gradient-to-r from-yellow-400 to-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                                <i class="fas fa-star mr-1"></i> 4.7
                            </div>
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300"></div>
                            <div class="absolute bottom-3 left-3 right-3 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <button class="w-full bg-white text-gray-800 py-2 rounded-xl font-semibold hover:bg-gray-100 transition-colors">
                                    <i class="fas fa-eye mr-2"></i>Lihat Detail
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-sm text-emerald-600 font-semibold bg-emerald-100 px-2 py-1 rounded-lg">Kerajinan</span>
                                <span class="text-sm text-gray-500">Stok: 8</span>
                            </div>
                            <h3 class="font-bold text-gray-800 mb-3 line-clamp-2 text-lg">
                                Kotak Perhiasan Vintage
                            </h3>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-emerald-600">Rp 95.000</span>
                                <button class="text-emerald-600 hover:text-emerald-800 font-semibold transition-colors">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Related Product 2 -->
                    <div class="group bg-white rounded-2xl shadow-sm overflow-hidden transition-all duration-500 hover:shadow-2xl hover:scale-105">
                        <div class="relative overflow-hidden">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/f0a0ab70-24c1-4518-ac89-47cb2ec254a3.png" 
                                 alt="Rak Buku Mini" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute top-3 right-3 bg-gradient-to-r from-yellow-400 to-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                                <i class="fas fa-star mr-1"></i> 4.6
                            </div>
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300"></div>
                            <div class="absolute bottom-3 left-3 right-3 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <button class="w-full bg-white text-gray-800 py-2 rounded-xl font-semibold hover:bg-gray-100 transition-colors">
                                    <i class="fas fa-eye mr-2"></i>Lihat Detail
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-sm text-emerald-600 font-semibold bg-emerald-100 px-2 py-1 rounded-lg">Kerajinan</span>
                                <span class="text-sm text-gray-500">Stok: 12</span>
                            </div>
                            <h3 class="font-bold text-gray-800 mb-3 line-clamp-2 text-lg">
                                Rak Buku Mini Kayu
                            </h3>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-emerald-600">Rp 125.000</span>
                                <button class="text-emerald-600 hover:text-emerald-800 font-semibold transition-colors">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Related Product 3 -->
                    <div class="group bg-white rounded-2xl shadow-sm overflow-hidden transition-all duration-500 hover:shadow-2xl hover:scale-105">
                        <div class="relative overflow-hidden">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/30b1bb46-6e01-47fa-8123-2371e7f65984.png" 
                                 alt="Tempat Pensil" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute top-3 right-3 bg-gradient-to-r from-yellow-400 to-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                                <i class="fas fa-star mr-1"></i> 4.8
                            </div>
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300"></div>
                            <div class="absolute bottom-3 left-3 right-3 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <button class="w-full bg-white text-gray-800 py-2 rounded-xl font-semibold hover:bg-gray-100 transition-colors">
                                    <i class="fas fa-eye mr-2"></i>Lihat Detail
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-sm text-emerald-600 font-semibold bg-emerald-100 px-2 py-1 rounded-lg">Kerajinan</span>
                                <span class="text-sm text-gray-500">Stok: 20</span>
                            </div>
                            <h3 class="font-bold text-gray-800 mb-3 line-clamp-2 text-lg">
                                Tempat Pensil Handmade
                            </h3>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-emerald-600">Rp 45.000</span>
                                <button class="text-emerald-600 hover:text-emerald-800 font-semibold transition-colors">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Related Product 4 -->
                    <div class="group bg-white rounded-2xl shadow-sm overflow-hidden transition-all duration-500 hover:shadow-2xl hover:scale-105">
                        <div class="relative overflow-hidden">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a4e27cea-7565-4c29-8bd4-dfb1059b79b7.png" 
                                 alt="Cermin Hias" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute top-3 right-3 bg-gradient-to-r from-yellow-400 to-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                                <i class="fas fa-star mr-1"></i> 4.9
                            </div>
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300"></div>
                            <div class="absolute bottom-3 left-3 right-3 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <button class="w-full bg-white text-gray-800 py-2 rounded-xl font-semibold hover:bg-gray-100 transition-colors">
                                    <i class="fas fa-eye mr-2"></i>Lihat Detail
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-sm text-emerald-600 font-semibold bg-emerald-100 px-2 py-1 rounded-lg">Kerajinan</span>
                                <span class="text-sm text-gray-500">Stok: 6</span>
                            </div>
                            <h3 class="font-bold text-gray-800 mb-3 line-clamp-2 text-lg">
                                Cermin Hias Vintage
                            </h3>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-emerald-600">Rp 180.000</span>
                                <button class="text-emerald-600 hover:text-emerald-800 font-semibold transition-colors">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-8">
                    <button class="btn-primary text-white px-8 py-4 rounded-2xl font-semibold text-lg hover:scale-105 transition-transform">
                        <i class="fas fa-store mr-2"></i>Kunjungi Toko UMKM
                    </button>
                </div>
            </div>
        </section>

        <!-- Back to Top Button -->
        <button id="back-to-top" class="fixed bottom-6 left-6 w-12 h-12 bg-gray-800 hover:bg-gray-900 text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 pointer-events-none">
            <i class="fas fa-chevron-up"></i>
        </button>
    </div>

    

    <script>
        // Enhanced JavaScript functionality
        const images = [
            "https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/cd8fbedf-b03f-4d82-9e8a-467049d080f1.png",
            "https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a32dee1c-864e-495f-adff-5f23ebf5f7fc.png",
            "https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/f0a0ab70-24c1-4518-ac89-47cb2ec254a3.png",
            "https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/30b1bb46-6e01-47fa-8123-2371e7f65984.png"
        ];

        // Image gallery functionality
        function changeImage(index) {
            const mainImage = document.getElementById('main-image');
            const thumbnails = document.querySelectorAll('.thumbnail-container');
            
            // Fade out effect
            mainImage.style.opacity = '0.5';
            
            setTimeout(() => {
                mainImage.src = images[index];
                mainImage.style.opacity = '1';
            }, 200);

            // Update active thumbnail
            thumbnails.forEach((thumb, i) => {
                if (i === index) {
                    thumb.classList.add('thumbnail-active');
                } else {
                    thumb.classList.remove('thumbnail-active');
                }
            });
        }

        // Tab functionality with smooth transitions
        function showTab(tabName) {
            const tabContents = document.querySelectorAll('.tab-content');
            const tabButtons = document.querySelectorAll('.tab-btn');

            // Fade out all tab contents
            tabContents.forEach(content => {
                content.style.opacity = '0';
                setTimeout(() => {
                    content.classList.add('hidden');
                }, 150);
            });

            // Remove active class from all buttons
            tabButtons.forEach(btn => {
                btn.classList.remove('tab-active');
                btn.classList.add('text-gray-600');
            });

            // Show selected tab with fade in effect
            setTimeout(() => {
                const selectedTab = document.getElementById(tabName + '-tab');
                selectedTab.classList.remove('hidden');
                setTimeout(() => {
                    selectedTab.style.opacity = '1';
                }, 50);
            }, 150);

            // Add active class to clicked button
            event.target.classList.add('tab-active');
            event.target.classList.remove('text-gray-600');
        }

        // Scroll reveal animation
        function revealElements() {
            const elements = document.querySelectorAll('.scroll-reveal');
            const windowHeight = window.innerHeight;

            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                
                if (elementTop < windowHeight - 100) {
                    element.classList.add('revealed');
                }
            });
        }

        // Back to top functionality
        function toggleBackToTop() {
            const backToTopBtn = document.getElementById('back-to-top');
            
            if (window.scrollY > 300) {
                backToTopBtn.style.opacity = '1';
                backToTopBtn.style.pointerEvents = 'auto';
            } else {
                backToTopBtn.style.opacity = '0';
                backToTopBtn.style.pointerEvents = 'none';
            }
        }

        // Notification toast functionality
        function showNotification(message, type = 'success') {
            const toast = document.getElementById('notification-toast');
            const icon = toast.querySelector('i');
            
            // Update content based on type
            if (type === 'success') {
                toast.className = 'notification-toast bg-green-500 text-white px-6 py-4 rounded-2xl shadow-2xl show';
                icon.className = 'fas fa-check-circle text-xl';
            } else if (type === 'error') {
                toast.className = 'notification-toast bg-red-500 text-white px-6 py-4 rounded-2xl shadow-2xl show';
                icon.className = 'fas fa-exclamation-circle text-xl';
            }

            // Show toast
            toast.classList.add('show');

            // Hide after 3 seconds
            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        }

        // Initialize animations on page load
        function initializeAnimations() {
            // Stagger animation for product cards
            const cards = document.querySelectorAll('.group');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
                card.classList.add('animate-slide-in-up');
            });

            // Initialize scroll reveal
            revealElements();
        }

        // Event listeners
        document.addEventListener('DOMContentLoaded', function() {
            initializeAnimations();

            // Back to top button
            document.getElementById('back-to-top').addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });

        // Scroll events with throttling for better performance
        let scrollTimeout;
        window.addEventListener('scroll', function() {
            if (!scrollTimeout) {
                scrollTimeout = setTimeout(function() {
                    revealElements();
                    toggleBackToTop();
                    scrollTimeout = null;
                }, 10);
            }
        });

        // Error handling for images
        document.querySelectorAll('img').forEach(img => {
            img.addEventListener('error', function() {
                this.src = `data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='300' viewBox='0 0 400 300'%3E%3Crect width='400' height='300' fill='%23f3f4f6'/%3E%3Ctext x='200' y='150' text-anchor='middle' dy='.3em' fill='%236b7280' font-family='sans-serif' font-size='14'%3EGambar tidak tersedia%3C/text%3E%3C/svg%3E`;
                this.alt = 'Gambar tidak tersedia';
            });
        });
    </script>
@endsection