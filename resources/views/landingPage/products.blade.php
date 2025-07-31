@extends('core.landingPage')

@section('title', 'UMKM Kota Malang | Products')

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

    /* Custom range slider styles */
    input[type="range"] {
        -webkit-appearance: none;
        height: 6px;
        background: #e5e7eb;
        border-radius: 5px;
        background-image: linear-gradient(to right, #10b981, #10b981);
        background-repeat: no-repeat;
    }

    input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        height: 18px;
        width: 18px;
        border-radius: 50%;
        background: #10b981;
        cursor: pointer;
        box-shadow: 0 0 2px 0 #555;
        transition: all .3s ease;
    }

    input[type="range"]::-webkit-slider-thumb:hover {
        background: #059669;
        transform: scale(1.1);
    }

    /* Custom scrollbar - hidden on medium screens */
    .scrollable-sidebar {
        height: calc(100vh - 2rem);
        overflow-y: auto;
        scrollbar-width: thin;
        scrollbar-color: #10b981 #e5e7eb;
    }

    .scrollable-sidebar::-webkit-scrollbar {
        width: 6px;
    }

    .scrollable-sidebar::-webkit-scrollbar-track {
        background: #e5e7eb;
        border-radius: 10px;
    }

    .scrollable-sidebar::-webkit-scrollbar-thumb {
        background-color: #10b981;
        border-radius: 10px;
    }

    .scrollable-main {
        height: calc(100vh - 2rem);
        overflow-y: auto;
        scrollbar-width: thin;
        scrollbar-color: #10b981 #e5e7eb;
    }

    .scrollable-main::-webkit-scrollbar {
        width: 6px;
    }

    .scrollable-main::-webkit-scrollbar-track {
        background: #e5e7eb;
        border-radius: 10px;
    }

    .scrollable-main::-webkit-scrollbar-thumb {
        background-color: #10b981;
        border-radius: 10px;
    }

    /* Hide scrollbars on medium screens */
    @media (max-width: 1023px) {
        .scrollable-sidebar {
            scrollbar-width: none;
            /* Firefox */
            -ms-overflow-style: none;
            /* IE and Edge */
        }

        .scrollable-sidebar::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari and Opera */
        }

        .scrollable-main {
            scrollbar-width: none;
            /* Firefox */
            -ms-overflow-style: none;
            /* IE and Edge */
        }

        .scrollable-main::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari and Opera */
        }
    }

    /* Adjust padding when scrollbars are hidden */
    @media (max-width: 1023px) {
        .scrollable-sidebar {
            padding-right: 0 !important;
        }

        .scrollable-main {
            padding-right: 0 !important;
        }
    }
</style>
@endsection

@section('content')
<!-- Background with animated gradients -->
<div class="min-h-screen py-8 bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 relative overflow-hidden">
    <!-- Animated background elements -->
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-20 left-10 w-32 h-32 bg-green-200 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
        <div class="absolute top-40 right-10 w-32 h-32 bg-emerald-200 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-20 w-32 h-32 bg-teal-200 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col lg:flex-row relative gap-8 pt-6">
            <!-- Sidebar categories with glassmorphism -->
            <aside class="lg:w-3/12 h-fit sticky top-6">
                <div class="scrollable-sidebar space-y-6 lg:pr-2">
                    <div class="backdrop-blur-lg bg-white/80 border border-white/20 rounded-3xl border-neutral-200 p-6 transition-all duration-500 transform">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-8 h-8 bg-gradient-to-r from-green-400 to-emerald-500 rounded-lg flex items-center justify-center">
                                <span class="text-white text-sm font-bold">📂</span>
                            </div>
                            <h2 class="font-bold text-xl bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Semua Kategori</h2>
                        </div>
                        <ul class="space-y-2">
                            @php
                            $categories = [
                            ['icon' => '🍲', 'name' => 'Kuliner', 'gradient' => 'from-orange-400 to-red-400'],
                            ['icon' => '👗', 'name' => 'Fashion', 'gradient' => 'from-pink-400 to-purple-400'],
                            ['icon' => '📿', 'name' => 'Aksesoris', 'gradient' => 'from-yellow-400 to-orange-400'],
                            ['icon' => '🧦', 'name' => 'Kerajinan Alas Kaki', 'gradient' => 'from-blue-400 to-cyan-400'],
                            ['icon' => '🎮', 'name' => 'Gadget dan Elektronik', 'gradient' => 'from-indigo-400 to-purple-400'],
                            ['icon' => '🎨', 'name' => 'Handicraft', 'gradient' => 'from-green-400 to-teal-400'],
                            ['icon' => '🚗', 'name' => 'Otomotif', 'gradient' => 'from-gray-400 to-slate-400'],
                            ['icon' => '🎓', 'name' => 'Pendidikan', 'gradient' => 'from-emerald-400 to-green-400'],
                            ['icon' => '💼', 'name' => 'Jasa', 'gradient' => 'from-violet-400 to-purple-400'],
                            ['icon' => '🌐', 'name' => 'Internet', 'gradient' => 'from-cyan-400 to-blue-400'],
                            ['icon' => '🌾', 'name' => 'Agrobisnis', 'gradient' => 'from-lime-400 to-green-400'],
                            ['icon' => '🧰', 'name' => 'Lainnya', 'gradient' => 'from-teal-400 to-emerald-400'],
                            ];
                            @endphp
                            @foreach ($categories as $category)
                            <li class="group">
                                <div class="flex items-center justify-between p-3 rounded-2xl cursor-pointer transition-all hover:text-green-600 duration-300 hover:bg-gradient-to-r hover:{{ $category['gradient'] }} hover:border-green-200 border border-transparent">
                                    <div class="flex items-center space-x-3">
                                        <span class="transition-transform duration-300">{{ $category['icon'] }}</span>
                                        <span class="font-medium text-sm">{{ $category['name'] }}</span>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform group-hover:-rotate-45 delay-300 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Price Range Filter -->
                    <div class="backdrop-blur-lg bg-white/80 border border-white/20 rounded-3xl border-neutral-200 p-6 transition-all duration-500 transform">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-8 h-8 bg-gradient-to-r from-amber-400 to-orange-500 rounded-lg flex items-center justify-center">
                                <span class="text-white text-sm font-bold">💰</span>
                            </div>
                            <h2 class="font-bold text-xl bg-gradient-to-r from-amber-600 to-orange-600 bg-clip-text text-transparent">Filter Harga</h2>
                        </div>

                        <div class="space-y-4">
                            <!-- Price Range Slider -->
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm font-medium text-gray-600">Range Harga:</span>
                                    <span class="text-sm font-bold text-green-600" id="priceRangeValue">Rp 0 - Rp 500.000</span>
                                </div>
                                <input type="range" id="priceRange" min="0" max="500000" step="50000" value="500000"
                                    class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                                <div class="flex justify-between text-xs text-gray-500 mt-1">
                                    <span>Rp 0</span>
                                    <span>Rp 500.000</span>
                                </div>
                            </div>

                            <!-- Quick Price Filters -->
                            <div class="space-y-2">
                                <span class="text-sm font-medium text-gray-600">Pilih Cepat:</span>
                                <div class="grid grid-cols-3 gap-2">
                                    <button class="text-xs py-1 px-2 bg-green-100 text-green-700 rounded-full hover:bg-green-200 transition-colors">
                                        < Rp 50rb
                                            </button>
                                            <button class="text-xs py-1 px-2 bg-green-100 text-green-700 rounded-full hover:bg-green-200 transition-colors">
                                                Rp 50-100rb
                                            </button>
                                            <button class="text-xs py-1 px-2 bg-green-100 text-green-700 rounded-full hover:bg-green-200 transition-colors">
                                                Rp 100-200rb
                                            </button>
                                            <button class="text-xs py-1 px-2 bg-green-100 text-green-700 rounded-full hover:bg-green-200 transition-colors">
                                                Rp 200-300rb
                                            </button>
                                            <button class="text-xs py-1 px-2 bg-green-100 text-green-700 rounded-full hover:bg-green-200 transition-colors">
                                                Rp 300-400rb
                                            </button>
                                            <button class="text-xs py-1 px-2 bg-green-100 text-green-700 rounded-full hover:bg-green-200 transition-colors">
                                                > Rp 400rb
                                            </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Location Filter -->
                    <div class="backdrop-blur-lg bg-white/80 border border-white/20 rounded-3xl border-neutral-200 p-6 transition-all duration-500 transform">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-8 h-8 bg-gradient-to-r from-blue-400 to-cyan-500 rounded-lg flex items-center justify-center">
                                <span class="text-white text-sm font-bold">📍</span>
                            </div>
                            <h2 class="font-bold text-xl bg-gradient-to-r from-blue-600 to-cyan-600 bg-clip-text text-transparent">Filter Lokasi</h2>
                        </div>

                        <div class="space-y-4">
                            <!-- District Selector -->
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-2">Kecamatan:</label>
                                <select class="w-full bg-white/70 backdrop-blur-sm border-2 border-gray-200 rounded-xl text-sm px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-blue-400 hover:border-blue-300 transition-all duration-300 cursor-pointer">
                                    <option value="">Semua Kecamatan</option>
                                    <option>Klojen</option>
                                    <option>Blimbing</option>
                                    <option>Kedungkandang</option>
                                    <option>Sukun</option>
                                    <option>Lowokwaru</option>
                                </select>
                            </div>

                            <!-- Popular Areas -->
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-2">Area Populer:</label>
                                <div class="space-y-2">
                                    <label class="flex items-center space-x-3 cursor-pointer">
                                        <input type="checkbox" class="form-checkbox h-4 w-4 text-green-500 rounded border-gray-300 focus:ring-green-500">
                                        <span class="text-gray-700 text-sm">Kawasan Jalan Ijen</span>
                                    </label>
                                    <label class="flex items-center space-x-3 cursor-pointer">
                                        <input type="checkbox" class="form-checkbox h-4 w-4 text-green-500 rounded border-gray-300 focus:ring-green-500">
                                        <span class="text-gray-700 text-sm">Kawasan Kayutangan</span>
                                    </label>
                                    <label class="flex items-center space-x-3 cursor-pointer">
                                        <input type="checkbox" class="form-checkbox h-4 w-4 text-green-500 rounded border-gray-300 focus:ring-green-500">
                                        <span class="text-gray-700 text-sm">Kawasan Malang Kota</span>
                                    </label>
                                    <label class="flex items-center space-x-3 cursor-pointer">
                                        <input type="checkbox" class="form-checkbox h-4 w-4 text-green-500 rounded border-gray-300 focus:ring-green-500">
                                        <span class="text-gray-700 text-sm">Kawasan Universitas</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Main content -->
            <main class="flex-1 w-full md:w-9/12">
                <div class="scrollable-main">
                    <!-- Hero Banner with modern design -->
                    <div class="relative rounded-3xl overflow-hidden bg-gradient-to-br from-green-400 via-emerald-500 to-teal-600 mb-8 transform transition-all duration-500">
                        <div class="absolute inset-0 bg-black/10"></div>
                        <div class="relative p-8">
                            <div class="flex items-center justify-between">
                                <div class="space-y-4">
                                    <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm rounded-full px-6 py-2">
                                        <span class="w-2 h-2 bg-green-300 rounded-full animate-pulse"></span>
                                        <span class="text-white font-medium">Live Products</span>
                                    </div>
                                    <h1 class="text-4xl font-black text-white drop-shadow-lg">
                                        Discover Amazing
                                        <span class="block bg-gradient-to-r from-yellow-300 to-orange-300 bg-clip-text text-transparent">
                                            Local Products
                                        </span>
                                    </h1>
                                    <p class="text-green-100 text-lg max-w-md">Temukan produk UMKM terbaik dari Kota Malang dengan kualitas premium dan harga terjangkau</p>
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
                    <div class="backdrop-blur-lg bg-white/80 border border-white/20 rounded-3xl border-neutral-200 p-8">
                        <!-- Filter and view controls with modern design -->
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-8 space-y-4 sm:space-y-0">
                            <div class="flex space-x-3">
                                <button title="Grid View" class="group p-3 rounded-2xl bg-gradient-to-r from-green-500 to-emerald-500 text-white shadow-lg hover:shadow-xl transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <rect x="3" y="3" width="7" height="7" rx="2" ry="2" stroke-width="2" />
                                        <rect x="14" y="3" width="7" height="7" rx="2" ry="2" stroke-width="2" />
                                        <rect x="3" y="14" width="7" height="7" rx="2" ry="2" stroke-width="2" />
                                        <rect x="14" y="14" width="7" height="7" rx="2" ry="2" stroke-width="2" />
                                    </svg>
                                </button>
                                <button title="List View" class="group p-3 rounded-2xl border-2 border-green-200 text-green-600 hover:bg-green-500 hover:text-white hover:border-green-500 shadow-lg hover:shadow-xl transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <line x1="4" y1="6" x2="20" y2="6" stroke-width="2" stroke-linecap="round" />
                                        <line x1="4" y1="12" x2="20" y2="12" stroke-width="2" stroke-linecap="round" />
                                        <line x1="4" y1="18" x2="20" y2="18" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </button>
                            </div>

                            <div class="flex space-x-4 items-center">
                                <div class="relative">
                                    <select id="sort" name="sort" class="appearance-none bg-white/70 backdrop-blur-sm border border-neutral-200 rounded-2xl text-sm px-6 py-3 pr-10 focus:outline-none focus:ring-4 focus:ring-green-200 focus:border-green-400 hover:border-green-300 transition-all duration-300 cursor-pointer">
                                        <option>🔄 Urutkan</option>
                                        <option value="name_asc">📝 Nama A-Z</option>
                                        <option value="name_desc">📝 Nama Z-A</option>
                                        <option value="price_asc">💰 Harga Terendah</option>
                                        <option value="price_desc">💰 Harga Tertinggi</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </div>

                                <div class="relative">
                                    <select id="perPage" name="perPage" class="appearance-none bg-white/70 backdrop-blur-sm border border-neutral-200 rounded-2xl text-sm px-6 py-3 pr-10 focus:outline-none focus:ring-4 focus:ring-green-200 focus:border-green-400 hover:border-green-300 transition-all duration-300 cursor-pointer">
                                        <option value="12" selected>📊 Tampilkan 12</option>
                                        <option value="24">📊 Tampilkan 24</option>
                                        <option value="48">📊 Tampilkan 48</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product grid with modern cards -->
                        <section class="grid items-center grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                            @php
                            $products = [
                            ['name' => 'Keripik Tempe Premium', 'image' => 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/cd8fbedf-b03f-4d82-9e8a-467049d080f1.png', 'price' => 'Rp 100.000', 'rating' => 4.8, 'sold' => 120],
                            ['name' => 'Batik Malangan Original', 'image' => 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a32dee1c-864e-495f-adff-5f23ebf5f7fc.png', 'price' => 'Rp 150.000', 'rating' => 4.9, 'sold' => 85],
                            ['name' => 'Tas Rajut Handmade', 'image' => 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/f0a0ab70-24c1-4518-ac89-47cb2ec254a3.png', 'price' => 'Rp 120.000', 'rating' => 4.7, 'sold' => 95],
                            ['name' => 'Sepatu Kulit Asli', 'image' => 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/30b1bb46-6e01-47fa-8123-2371e7f65984.png', 'price' => 'Rp 200.000', 'rating' => 4.6, 'sold' => 67],
                            ['name' => 'Kopi Robusta Malang', 'image' => 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a4e27cea-7565-4c29-8bd4-dfb1059b79b7.png', 'price' => 'Rp 80.000', 'rating' => 4.9, 'sold' => 156],
                            ['name' => 'Gelang Perak Tradisional', 'image' => 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/dff3c74d-30b9-43a1-8ac6-5bbb030964e8.png', 'price' => 'Rp 90.000', 'rating' => 4.5, 'sold' => 78],
                            ['name' => 'Dodol Apel Batu', 'image' => 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/dbb689ad-7350-47ca-9413-e8b653911c0c.png', 'price' => 'Rp 110.000', 'rating' => 4.8, 'sold' => 134],
                            ['name' => 'Kerajinan Bambu Art', 'image' => 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e23c6486-fff1-4e34-8553-532c19e82f62.png', 'price' => 'Rp 140.000', 'rating' => 4.7, 'sold' => 92],
                            ];
                            @endphp
                            @foreach ($products as $index => $product)
                            <div class="group relative">
                                <!-- Floating badge for bestseller -->
                                @if($product['sold'] > 100)
                                <div class="absolute -top-2 -left-2 z-20 bg-gradient-to-r from-orange-400 to-red-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg animate-pulse">
                                    🔥 Bestseller
                                </div>
                                @endif

                                <div class="backdrop-blur-sm bg-white/60 border border-white/30 rounded-3xl p-6 border-neutral-200 transition-all duration-500 transform hover:-translate-y-3 hover:border-green-200 cursor-pointer overflow-hidden relative">
                                    <!-- Gradient overlay on hover -->
                                    <div class="absolute inset-0 hover:bg-slate-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-3xl"></div>

                                    <!-- Image container with modern styling -->
                                    <div class="relative mb-4 overflow-hidden rounded-2xl">
                                        <img src="{{ $product['image'] }}"
                                            alt="Foto produk {{ $product['name'] }} yang menunjukkan produk UMKM khas Malang dengan latar putih"
                                            class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500"
                                            onerror="this.onerror=null;this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/dcded2c4-2a35-4ad4-8f4c-46ae73ed0c0a.png';" />

                                        <!-- Overlay buttons -->
                                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-3">
                                            <button class="bg-white/20 backdrop-blur-sm p-3 rounded-full text-white hover:bg-white/30 transition-colors duration-200">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                </svg>
                                            </button>
                                            <button class="bg-white/20 backdrop-blur-sm p-3 rounded-full text-white hover:bg-white/30 transition-colors duration-200">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Product info -->
                                    <div class="space-y-3 relative z-10">
                                        <h3 class="font-bold text-gray-800 group-hover:text-green-600 transition-colors duration-300 line-clamp-2">{{ $product['name'] }}</h3>

                                        <!-- Rating and sold -->
                                        <div class="flex items-center justify-between text-sm">
                                            <div class="flex items-center gap-1">
                                                <span class="text-yellow-400">⭐</span>
                                                <span class="font-medium text-gray-600">{{ $product['rating'] }}</span>
                                            </div>
                                            <span class="text-gray-500">{{ $product['sold'] }} terjual</span>
                                        </div>

                                        <!-- Price -->
                                        <div class="flex items-center justify-between">
                                            <p class="text-xl font-black bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">{{ $product['price'] }}</p>
                                            <div class="flex gap-2">
                                                <button class="p-2 rounded-full bg-green-100 text-green-600 hover:bg-green-200 transition-colors duration-200">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m.6 5L8 21l4-8m0 0l8-8m-8 8v8"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>

                                        <!-- CTA Button -->
                                        <button class="w-full mt-4 bg-gradient-to-r from-green-500 to-emerald-500 text-white font-bold py-3 px-6 rounded-2xl hover:from-green-600 hover:to-emerald-600 transition-all duration-300 shadow-lg hover:shadow-xl">
                                            <span class="flex items-center justify-center gap-2">
                                                <span class="text-xs">Lihat Detail</span>
                                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </section>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

@section('scripts')
<script>
    // Price range slider functionality
    const priceRange = document.getElementById('priceRange');
    const priceRangeValue = document.getElementById('priceRangeValue');

    priceRange.addEventListener('input', function() {
        const value = this.value;
        priceRangeValue.textContent = `Rp 0 - Rp ${formatCurrency(value)}`;
        // Update the background gradient for the slider
        this.style.backgroundImage = `linear-gradient(to right, #10b981 0%, #10b981 ${(value/500000)*100}%, #e5e7eb ${(value/500000)*100}%, #e5e7eb 100%)`;
    });

    function formatCurrency(num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
    }
</script>
@endsection

@endsection