@extends('core.landingPage')

@section('title', 'UMKM Kota Malang | Articles')

@section('content')

@section('style')
<style>
    @keyframes blob {
        0% {
            transform: translate(0px, 0px) scale(1);
        }

        33% {
            transform: translate(30px, -50px) scale(1.1);
        }

        66% {
            transform: translate(-20px, 20px) scale(0.9);
        }

        100% {
            transform: translate(0px, 0px) scale(1);
        }
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

    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Custom scrollbar */
    .scrollable-sidebar {
        height: calc(100vh - 2rem);
        overflow-y: auto;
        scrollbar-width: thin;
        scrollbar-color: #059669 #e5e7eb;
    }

    .scrollable-sidebar::-webkit-scrollbar {
        width: 6px;
    }

    .scrollable-sidebar::-webkit-scrollbar-track {
        background: #e5e7eb;
        border-radius: 10px;
    }

    .scrollable-sidebar::-webkit-scrollbar-thumb {
        background-color: #059669;
        border-radius: 10px;
    }

    .scrollable-main {
        height: calc(100vh - 2rem);
        overflow-y: auto;
        scrollbar-width: thin;
        scrollbar-color: #059669 #e5e7eb;
    }

    .scrollable-main::-webkit-scrollbar {
        width: 6px;
    }

    .scrollable-main::-webkit-scrollbar-track {
        background: #e5e7eb;
        border-radius: 10px;
    }

    .scrollable-main::-webkit-scrollbar-thumb {
        background-color: #059669;
        border-radius: 10px;
    }

    /* Hide scrollbars on medium screens */
    @media (max-width: 1023px) {
        .scrollable-sidebar {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .scrollable-sidebar::-webkit-scrollbar {
            display: none;
        }

        .scrollable-main {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .scrollable-main::-webkit-scrollbar {
            display: none;
        }
    }

    /* Hover effects for article cards */
    .article-card:hover .article-image {
        transform: scale(1.05);
    }

    .article-card:hover .article-overlay {
        opacity: 1;
    }

    /* Glassmorphism effect */
    .glass {
        backdrop-filter: blur(16px) saturate(180%);
        -webkit-backdrop-filter: blur(16px) saturate(180%);
        background-color: rgba(255, 255, 255, 0.75);
        border: 1px solid rgba(255, 255, 255, 0.125);
    }

    /* Green theme enhancements */
    .green-gradient-text {
        background-image: linear-gradient(to right, #059669, #10b981);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .green-gradient-bg {
        background-image: linear-gradient(to right, #059669, #10b981);
    }

    .leaf-icon {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23059669'%3E%3Cpath d='M17 8h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2h-2a1 1 0 010-2h2V6a1 1 0 012 0v2zM2 6a1 1 0 011-1h8a1 1 0 011 1v8a1 1 0 01-1 1H3a1 1 0 01-1-1V6zm2 1v6h6V7H4z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }

    .eco-badge {
        background-color: rgba(5, 150, 105, 0.1);
        border: 1px solid rgba(5, 150, 105, 0.3);
    }
</style>
@endsection

<!-- Background with animated green gradients -->
<div class="min-h-screen py-8 bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 relative overflow-hidden">

    <!-- Breadcrumb -->
    <nav class="flex ml-8 lg:ml-14 text-sm text-gray-600" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li><a href="/" class="hover:text-emerald-600">Beranda</a></li>
            <li><i class="fas fa-chevron-right text-xs mx-2 text-gray-400"></i></li>
            <li><a href="/news" class="hover:text-emerald-600 font-medium text-emerald-700">Artikel & Berita</a></li>
        </ol>
    </nav>

    <!-- Animated green background elements -->
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-20 left-10 w-32 h-32 bg-emerald-200 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
        <div class="absolute top-40 right-10 w-32 h-32 bg-teal-200 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-20 w-32 h-32 bg-green-200 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col lg:flex-row relative gap-8 pt-6">
            <!-- Sidebar categories with glassmorphism -->
            <aside class="lg:w-3/12 h-fit sticky top-6">
                <div class="scrollable-sidebar space-y-6 lg:pr-2">
                    <!-- Categories Filter -->
                    <div class="glass rounded-3xl p-6 transition-all duration-500 transform">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-8 h-8 green-gradient-bg rounded-lg flex items-center justify-center">
                                <span class="text-white text-sm font-bold">🌿</span>
                            </div>
                            <h2 class="font-bold text-xl green-gradient-text">Kategori Artikel</h2>
                        </div>
                        <ul class="space-y-2">
                            <li class="group">
                                <div class="flex items-center justify-between p-3 rounded-2xl cursor-pointer transition-all hover:text-emerald-600 duration-300 hover:bg-gradient-to-r hover:from-emerald-100 hover:to-teal-100 hover:border-emerald-200 border border-transparent">
                                    <div class="flex items-center space-x-3">
                                        <span class="transition-transform duration-300">📈</span>
                                        <span class="font-medium text-sm">Tips Bisnis</span>
                                    </div>
                                    <span class="text-xs bg-emerald-100 text-emerald-600 px-2 py-1 rounded-full">24</span>
                                </div>
                            </li>
                            <li class="group">
                                <div class="flex items-center justify-between p-3 rounded-2xl cursor-pointer transition-all hover:text-emerald-600 duration-300 hover:bg-gradient-to-r hover:from-emerald-100 hover:to-teal-100 hover:border-emerald-200 border border-transparent">
                                    <div class="flex items-center space-x-3">
                                        <span class="transition-transform duration-300">🎯</span>
                                        <span class="font-medium text-sm">Marketing Digital</span>
                                    </div>
                                    <span class="text-xs bg-emerald-100 text-emerald-600 px-2 py-1 rounded-full">18</span>
                                </div>
                            </li>
                            <li class="group">
                                <div class="flex items-center justify-between p-3 rounded-2xl cursor-pointer transition-all hover:text-emerald-600 duration-300 hover:bg-gradient-to-r hover:from-emerald-100 hover:to-teal-100 hover:border-emerald-200 border border-transparent">
                                    <div class="flex items-center space-x-3">
                                        <span class="transition-transform duration-300">🏆</span>
                                        <span class="font-medium text-sm">Success Stories</span>
                                    </div>
                                    <span class="text-xs bg-emerald-100 text-emerald-600 px-2 py-1 rounded-full">12</span>
                                </div>
                            </li>
                            <li class="group">
                                <div class="flex items-center justify-between p-3 rounded-2xl cursor-pointer transition-all hover:text-emerald-600 duration-300 hover:bg-gradient-to-r hover:from-emerald-100 hover:to-teal-100 hover:border-emerald-200 border border-transparent">
                                    <div class="flex items-center space-x-3">
                                        <span class="transition-transform duration-300">💰</span>
                                        <span class="font-medium text-sm">Keuangan</span>
                                    </div>
                                    <span class="text-xs bg-emerald-100 text-emerald-600 px-2 py-1 rounded-full">15</span>
                                </div>
                            </li>
                            <li class="group">
                                <div class="flex items-center justify-between p-3 rounded-2xl cursor-pointer transition-all hover:text-emerald-600 duration-300 hover:bg-gradient-to-r hover:from-emerald-100 hover:to-teal-100 hover:border-emerald-200 border border-transparent">
                                    <div class="flex items-center space-x-3">
                                        <span class="transition-transform duration-300">🌱</span>
                                        <span class="font-medium text-sm">Bisnis Berkelanjutan</span>
                                    </div>
                                    <span class="text-xs bg-emerald-100 text-emerald-600 px-2 py-1 rounded-full">9</span>
                                </div>
                            </li>
                            <li class="group">
                                <div class="flex items-center justify-between p-3 rounded-2xl cursor-pointer transition-all hover:text-emerald-600 duration-300 hover:bg-gradient-to-r hover:from-emerald-100 hover:to-teal-100 hover:border-emerald-200 border border-transparent">
                                    <div class="flex items-center space-x-3">
                                        <span class="transition-transform duration-300">🎪</span>
                                        <span class="font-medium text-sm">Event & Workshop</span>
                                    </div>
                                    <span class="text-xs bg-emerald-100 text-emerald-600 px-2 py-1 rounded-full">7</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Popular Tags -->
                    <div class="glass rounded-3xl p-6 transition-all duration-500 transform">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-8 h-8 green-gradient-bg rounded-lg flex items-center justify-center">
                                <span class="text-white text-sm font-bold">🔥</span>
                            </div>
                            <h2 class="font-bold text-xl green-gradient-text">Tag Populer</h2>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-gradient-to-r from-emerald-100 to-emerald-200 text-emerald-700 rounded-full text-xs font-medium cursor-pointer hover:from-emerald-200 hover:to-emerald-300 transition-all">#UMKM</span>
                            <span class="px-3 py-1 bg-gradient-to-r from-teal-100 to-teal-200 text-teal-700 rounded-full text-xs font-medium cursor-pointer hover:from-teal-200 hover:to-teal-300 transition-all">#StartUp</span>
                            <span class="px-3 py-1 bg-gradient-to-r from-green-100 to-green-200 text-green-700 rounded-full text-xs font-medium cursor-pointer hover:from-green-200 hover:to-green-300 transition-all">#DigitalMarketing</span>
                            <span class="px-3 py-1 bg-gradient-to-r from-lime-100 to-lime-200 text-lime-700 rounded-full text-xs font-medium cursor-pointer hover:from-lime-200 hover:to-lime-300 transition-all">#Ecommerce</span>
                            <span class="px-3 py-1 bg-gradient-to-r from-emerald-100 to-emerald-200 text-emerald-700 rounded-full text-xs font-medium cursor-pointer hover:from-emerald-200 hover:to-emerald-300 transition-all">#Berkelanjutan</span>
                            <span class="px-3 py-1 bg-gradient-to-r from-teal-100 to-teal-200 text-teal-700 rounded-full text-xs font-medium cursor-pointer hover:from-teal-200 hover:to-teal-300 transition-all">#Inovasi</span>
                        </div>
                    </div>

                    <!-- Newsletter Signup -->
                    <div class="glass rounded-3xl p-6 transition-all duration-500 transform">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-8 h-8 green-gradient-bg rounded-lg flex items-center justify-center">
                                <span class="text-white text-sm font-bold">📧</span>
                            </div>
                            <h2 class="font-bold text-lg green-gradient-text">Newsletter</h2>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">Dapatkan artikel terbaru langsung di email Anda!</p>
                        <div class="space-y-3">
                            <input type="email" placeholder="Email Anda" class="w-full bg-white/70 backdrop-blur-sm border-2 border-gray-200 rounded-xl text-sm px-4 py-3 focus:outline-none focus:ring-2 focus:ring-emerald-200 focus:border-emerald-400 hover:border-emerald-300 transition-all duration-300">
                            <button class="w-full green-gradient-bg text-white font-semibold rounded-xl px-4 py-3 hover:opacity-90 transition-all duration-300 shadow-lg hover:shadow-xl">
                                Berlangganan
                            </button>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Main content -->
            <main class="flex-1 w-full md:w-9/12">
                <div class="scrollable-main">
                    <!-- Hero Banner -->
                    <div class="relative rounded-3xl overflow-hidden bg-gradient-to-br from-emerald-500 via-green-600 to-teal-700 mb-8 transform transition-all duration-500">
                        <div class="absolute inset-0 bg-black/10"></div>
                        <div class="relative p-8">
                            <div class="flex items-center justify-between">
                                <div class="space-y-4">
                                    <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm rounded-full px-6 py-2">
                                        <span class="w-2 h-2 bg-emerald-300 rounded-full animate-pulse"></span>
                                        <span class="text-white font-medium">Artikel Terbaru</span>
                                    </div>
                                    <h1 class="text-4xl font-black text-white drop-shadow-lg">
                                        Wawasan Terkini untuk
                                        <span class="block bg-gradient-to-r from-yellow-300 to-amber-300 bg-clip-text text-transparent">
                                            Pengusaha UMKM
                                        </span>
                                    </h1>
                                    <p class="text-emerald-100 text-lg max-w-md">Temukan tips, trik, dan inspirasi terbaru untuk mengembangkan bisnis UMKM Anda</p>
                                </div>
                            </div>
                        </div>
                        <!-- Decorative waves -->
                        <div class="absolute bottom-0 left-0 right-0">
                            <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="relative block w-full h-16">
                                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" fill="white" fill-opacity="0.1"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Content Card with glassmorphism -->
                    <div class="glass rounded-3xl p-8">
                        <!-- Filter and view controls -->
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-8 space-y-4 sm:space-y-0">
                            <div class="flex space-x-3">
                                <button title="Grid View" class="group p-3 rounded-2xl green-gradient-bg text-white shadow-lg hover:shadow-xl transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <rect x="3" y="3" width="7" height="7" rx="2" ry="2" stroke-width="2" />
                                        <rect x="14" y="3" width="7" height="7" rx="2" ry="2" stroke-width="2" />
                                        <rect x="3" y="14" width="7" height="7" rx="2" ry="2" stroke-width="2" />
                                        <rect x="14" y="14" width="7" height="7" rx="2" ry="2" stroke-width="2" />
                                    </svg>
                                </button>
                                <button title="List View" class="group p-3 rounded-2xl border-2 border-emerald-200 text-emerald-600 hover:bg-emerald-500 hover:text-white hover:border-emerald-500 shadow-lg hover:shadow-xl transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <line x1="4" y1="6" x2="20" y2="6" stroke-width="2" stroke-linecap="round" />
                                        <line x1="4" y1="12" x2="20" y2="12" stroke-width="2" stroke-linecap="round" />
                                        <line x1="4" y1="18" x2="20" y2="18" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </button>
                            </div>

                            <div class="flex space-x-4 items-center">
                                <div class="relative">
                                    <select class="appearance-none bg-white/70 backdrop-blur-sm border border-neutral-200 rounded-2xl text-sm px-6 py-3 pr-10 focus:outline-none focus:ring-4 focus:ring-emerald-200 focus:border-emerald-400 hover:border-emerald-300 transition-all duration-300 cursor-pointer">
                                        <option>📅 Terbaru</option>
                                        <option>📈 Terpopuler</option>
                                        <option>⭐ Rating Tertinggi</option>
                                        <option>👀 Paling Banyak Dibaca</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Featured Article -->
                        <div class="mb-12">
                            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-400 to-yellow-500 text-white rounded-full px-4 py-2 mb-6">
                                <span class="text-sm">🌟</span>
                                <span class="font-bold text-sm">Artikel Pilihan</span>
                            </div>

                            <div class="article-card backdrop-blur-sm bg-white/60 border border-white/30 rounded-3xl overflow-hidden border-neutral-200 transition-all duration-500 transform hover:-translate-y-2 cursor-pointer group">
                                <div class="md:flex">
                                    <div class="md:w-1/2 relative overflow-hidden">
                                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                            alt="Featured Article"
                                            class="article-image w-full h-64 md:h-full object-cover transition-transform duration-500">
                                        <div class="article-overlay absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 transition-opacity duration-300"></div>
                                        <div class="absolute top-4 left-4">
                                            <span class="bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">HOT</span>
                                        </div>
                                        <div class="absolute bottom-4 left-4">
                                            <span class="eco-badge text-emerald-700 text-xs font-medium px-3 py-1 rounded-full flex items-center gap-1">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"></path>
                                                </svg>
                                                Ramah Lingkungan
                                            </span>
                                        </div>
                                    </div>
                                    <div class="md:w-1/2 p-8 flex flex-col justify-center">
                                        <div class="flex items-center gap-2 mb-4">
                                            <span class="bg-emerald-100 text-emerald-600 text-xs font-medium px-3 py-1 rounded-full">Tips Bisnis</span>
                                            <span class="text-gray-500 text-sm">• 5 min read</span>
                                        </div>
                                        <h2 class="text-2xl font-bold text-gray-800 mb-4 group-hover:text-emerald-600 transition-colors duration-300">
                                            10 Strategi Digital Marketing yang Wajib Dicoba UMKM di 2024
                                        </h2>
                                        <p class="text-gray-600 mb-6 line-clamp-3">
                                            Era digital mengharuskan UMKM untuk beradaptasi dengan teknologi terbaru. Pelajari strategi pemasaran digital yang efektif dan mudah diterapkan untuk meningkatkan penjualan bisnis Anda...
                                        </p>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap-3">
                                                <div class="w-10 h-10 green-gradient-bg rounded-full flex items-center justify-center">
                                                    <span class="text-white font-bold text-sm">AB</span>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-gray-800">Ahmad Budiman</p>
                                                    <p class="text-gray-500 text-sm">25 Jan 2024</p>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-4 text-gray-500">
                                                <span class="flex items-center gap-1 text-sm">
                                                    <i class="far fa-heart"></i> 234
                                                </span>
                                                <span class="flex items-center gap-1 text-sm">
                                                    <i class="far fa-comment"></i> 45
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Articles Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Article 1 -->
                            <div class="article-card backdrop-blur-sm bg-white/60 border border-white/30 rounded-3xl overflow-hidden border-neutral-200 transition-all duration-500 transform hover:-translate-y-3 cursor-pointer group">
                                <div class="relative overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                                        alt="Article Image"
                                        class="article-image w-full h-48 object-cover transition-transform duration-500">
                                    <div class="article-overlay absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 transition-opacity duration-300"></div>
                                    <div class="absolute top-4 left-4">
                                        <span class="bg-emerald-500 text-white text-xs font-bold px-3 py-1 rounded-full">Keuangan</span>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="text-gray-500 text-sm">💰 Keuangan</span>
                                        <span class="text-gray-400">•</span>
                                        <span class="text-gray-500 text-sm">3 min read</span>
                                    </div>
                                    <h3 class="font-bold text-gray-800 mb-3 group-hover:text-emerald-600 transition-colors duration-300 line-clamp-2">
                                        Cara Mengelola Cashflow UMKM yang Efektif
                                    </h3>
                                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                        Pengelolaan arus kas yang baik adalah kunci kesuksesan bisnis UMKM. Pelajari tips praktis untuk mengatur keuangan bisnis Anda...
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-2">
                                            <div class="w-8 h-8 green-gradient-bg rounded-full flex items-center justify-center">
                                                <span class="text-white font-bold text-xs">SR</span>
                                            </div>
                                            <div>
                                                <p class="font-medium text-gray-800 text-sm">Sari Rahmawati</p>
                                                <p class="text-gray-500 text-xs">22 Jan 2024</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3 text-gray-500">
                                            <span class="flex items-center gap-1 text-xs">
                                                <i class="far fa-heart"></i> 189
                                            </span>
                                            <span class="flex items-center gap-1 text-xs">
                                                <i class="far fa-comment"></i> 23
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Article 2 -->
                            <div class="article-card backdrop-blur-sm bg-white/60 border border-white/30 rounded-3xl overflow-hidden border-neutral-200 transition-all duration-500 transform hover:-translate-y-3 cursor-pointer group">
                                <div class="relative overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1553484771-371a605b060b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                                        alt="Article Image"
                                        class="article-image w-full h-48 object-cover transition-transform duration-500">
                                    <div class="article-overlay absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 transition-opacity duration-300"></div>
                                    <div class="absolute top-4 left-4">
                                        <span class="bg-teal-500 text-white text-xs font-bold px-3 py-1 rounded-full">Success Story</span>
                                    </div>
                                    <div class="absolute bottom-4 left-4">
                                        <span class="eco-badge text-emerald-700 text-xs font-medium px-3 py-1 rounded-full flex items-center gap-1">
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"></path>
                                            </svg>
                                            Ramah Lingkungan
                                        </span>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="text-gray-500 text-sm">🏆 Success Stories</span>
                                        <span class="text-gray-400">•</span>
                                        <span class="text-gray-500 text-sm">5 min read</span>
                                    </div>
                                    <h3 class="font-bold text-gray-800 mb-3 group-hover:text-teal-600 transition-colors duration-300 line-clamp-2">
                                        Dari Warung Kecil Menjadi Brand Ternama
                                    </h3>
                                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                        Kisah inspiratif UMKM Malang yang berhasil berkembang pesat dalam 3 tahun. Simak strategi dan perjuangan mereka...
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-2">
                                            <div class="w-8 h-8 bg-gradient-to-r from-teal-400 to-cyan-500 rounded-full flex items-center justify-center">
                                                <span class="text-white font-bold text-xs">DP</span>
                                            </div>
                                            <div>
                                                <p class="font-medium text-gray-800 text-sm">Dewi Purnama</p>
                                                <p class="text-gray-500 text-xs">20 Jan 2024</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3 text-gray-500">
                                            <span class="flex items-center gap-1 text-xs">
                                                <i class="far fa-heart"></i> 312
                                            </span>
                                            <span class="flex items-center gap-1 text-xs">
                                                <i class="far fa-comment"></i> 67
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Article 3 -->
                            <div class="article-card backdrop-blur-sm bg-white/60 border border-white/30 rounded-3xl overflow-hidden border-neutral-200 transition-all duration-500 transform hover:-translate-y-3 cursor-pointer group">
                                <div class="relative overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                                        alt="Article Image"
                                        class="article-image w-full h-48 object-cover transition-transform duration-500">
                                    <div class="article-overlay absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 transition-opacity duration-300"></div>
                                    <div class="absolute top-4 left-4">
                                        <span class="bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">Berkelanjutan</span>
                                    </div>
                                    <div class="absolute bottom-4 left-4">
                                        <span class="eco-badge text-emerald-700 text-xs font-medium px-3 py-1 rounded-full flex items-center gap-1">
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"></path>
                                            </svg>
                                            Ramah Lingkungan
                                        </span>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="text-gray-500 text-sm">🌱 Bisnis Berkelanjutan</span>
                                        <span class="text-gray-400">•</span>
                                        <span class="text-gray-500 text-sm">4 min read</span>
                                    </div>
                                    <h3 class="font-bold text-gray-800 mb-3 group-hover:text-green-600 transition-colors duration-300 line-clamp-2">
                                        Membangun Bisnis Ramah Lingkungan
                                    </h3>
                                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                        Tren bisnis berkelanjutan semakin berkembang. Pelajari cara memulai bisnis yang peduli lingkungan dan tetap profitable...
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-2">
                                            <div class="w-8 h-8 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full flex items-center justify-center">
                                                <span class="text-white font-bold text-xs">RK</span>
                                            </div>
                                            <div>
                                                <p class="font-medium text-gray-800 text-sm">Rudi Kurniawan</p>
                                                <p class="text-gray-500 text-xs">18 Jan 2024</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3 text-gray-500">
                                            <span class="flex items-center gap-1 text-xs">
                                                <i class="far fa-heart"></i> 156
                                            </span>
                                            <span class="flex items-center gap-1 text-xs">
                                                <i class="far fa-comment"></i> 34
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Article 4 -->
                            <div class="article-card backdrop-blur-sm bg-white/60 border border-white/30 rounded-3xl overflow-hidden border-neutral-200 transition-all duration-500 transform hover:-translate-y-3 cursor-pointer group">
                                <div class="relative overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1611224923853-80b023f02d71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                                        alt="Article Image"
                                        class="article-image w-full h-48 object-cover transition-transform duration-500">
                                    <div class="article-overlay absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 transition-opacity duration-300"></div>
                                    <div class="absolute top-4 left-4">
                                        <span class="bg-lime-500 text-white text-xs font-bold px-3 py-1 rounded-full">Tips</span>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="text-gray-500 text-sm">📈 Tips Bisnis</span>
                                        <span class="text-gray-400">•</span>
                                        <span class="text-gray-500 text-sm">6 min read</span>
                                    </div>
                                    <h3 class="font-bold text-gray-800 mb-3 group-hover:text-lime-600 transition-colors duration-300 line-clamp-2">
                                        5 Tools Gratis untuk Meningkatkan Produktivitas
                                    </h3>
                                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                        Maksimalkan efisiensi bisnis Anda dengan tools gratis yang powerful. Dari manajemen proyek hingga analisis data...
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-2">
                                            <div class="w-8 h-8 bg-gradient-to-r from-lime-400 to-green-500 rounded-full flex items-center justify-center">
                                                <span class="text-white font-bold text-xs">LM</span>
                                            </div>
                                            <div>
                                                <p class="font-medium text-gray-800 text-sm">Lisa Maharani</p>
                                                <p class="text-gray-500 text-xs">15 Jan 2024</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3 text-gray-500">
                                            <span class="flex items-center gap-1 text-xs">
                                                <i class="far fa-heart"></i> 98
                                            </span>
                                            <span class="flex items-center gap-1 text-xs">
                                                <i class="far fa-comment"></i> 19
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Article 5 -->
                            <div class="article-card backdrop-blur-sm bg-white/60 border border-white/30 rounded-3xl overflow-hidden border-neutral-200 transition-all duration-500 transform hover:-translate-y-3 cursor-pointer group">
                                <div class="relative overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1559526324-4b87b5e36e44?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                                        alt="Article Image"
                                        class="article-image w-full h-48 object-cover transition-transform duration-500">
                                    <div class="article-overlay absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 transition-opacity duration-300"></div>
                                    <div class="absolute top-4 left-4">
                                        <span class="bg-amber-500 text-white text-xs font-bold px-3 py-1 rounded-full">Workshop</span>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="text-gray-500 text-sm">🎪 Event & Workshop</span>
                                        <span class="text-gray-400">•</span>
                                        <span class="text-gray-500 text-sm">2 min read</span>
                                    </div>
                                    <h3 class="font-bold text-gray-800 mb-3 group-hover:text-amber-600 transition-colors duration-300 line-clamp-2">
                                        Workshop Digital Marketing Gratis Februari 2024
                                    </h3>
                                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                        Bergabunglah dalam workshop gratis untuk mempelajari strategi pemasaran digital terkini. Daftar sekarang, kuota terbatas!
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-2">
                                            <div class="w-8 h-8 bg-gradient-to-r from-amber-400 to-yellow-500 rounded-full flex items-center justify-center">
                                                <span class="text-white font-bold text-xs">AD</span>
                                            </div>
                                            <div>
                                                <p class="font-medium text-gray-800 text-sm">Admin</p>
                                                <p class="text-gray-500 text-xs">12 Jan 2024</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3 text-gray-500">
                                            <span class="flex items-center gap-1 text-xs">
                                                <i class="far fa-heart"></i> 245
                                            </span>
                                            <span class="flex items-center gap-1 text-xs">
                                                <i class="far fa-comment"></i> 56
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Article 6 -->
                            <div class="article-card backdrop-blur-sm bg-white/60 border border-white/30 rounded-3xl overflow-hidden border-neutral-200 transition-all duration-500 transform hover:-translate-y-3 cursor-pointer group">
                                <div class="relative overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                                        alt="Article Image"
                                        class="article-image w-full h-48 object-cover transition-transform duration-500">
                                    <div class="article-overlay absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 transition-opacity duration-300"></div>
                                    <div class="absolute top-4 left-4">
                                        <span class="bg-teal-500 text-white text-xs font-bold px-3 py-1 rounded-full">Teknologi</span>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="text-gray-500 text-sm">🎯 Marketing Digital</span>
                                        <span class="text-gray-400">•</span>
                                        <span class="text-gray-500 text-sm">7 min read</span>
                                    </div>
                                    <h3 class="font-bold text-gray-800 mb-3 group-hover:text-teal-600 transition-colors duration-300 line-clamp-2">
                                        AI untuk UMKM: Peluang atau Ancaman?
                                    </h3>
                                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                        Teknologi AI semakin mudah diakses. Bagaimana UMKM bisa memanfaatkan AI untuk meningkatkan efisiensi dan kompetitivitas...
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-2">
                                            <div class="w-8 h-8 bg-gradient-to-r from-teal-400 to-cyan-500 rounded-full flex items-center justify-center">
                                                <span class="text-white font-bold text-xs">BP</span>
                                            </div>
                                            <div>
                                                <p class="font-medium text-gray-800 text-sm">Budi Pratama</p>
                                                <p class="text-gray-500 text-xs">10 Jan 2024</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3 text-gray-500">
                                            <span class="flex items-center gap-1 text-xs">
                                                <i class="far fa-heart"></i> 187
                                            </span>
                                            <span class="flex items-center gap-1 text-xs">
                                                <i class="far fa-comment"></i> 42
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Load More Button -->
                        <div class="flex justify-center mt-12">
                            <button class="group green-gradient-bg text-white font-semibold px-8 py-4 rounded-2xl hover:opacity-90 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                <span class="flex items-center gap-2">
                                    <span>Muat Artikel Lainnya</span>
                                    <svg class="w-5 h-5 transform group-hover:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
@endsection