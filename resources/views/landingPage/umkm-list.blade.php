@extends('core.landingPage')

@section('title', 'UMKM Kota Malang | UMKM Lists')

@section('style')
<style>
    /* Base animations and styles */
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

    /* Custom scrollbar styles for different sections */
    /* Main content scroll */
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

    /* Sidebar scroll - different style */
    .scrollable-sidebar {
        height: calc(100vh - 2rem);
        overflow-y: auto;
        scrollbar-width: thin;
        scrollbar-color: #10b981;
    }

    .scrollable-sidebar::-webkit-scrollbar {
        width: 6px;
    }

    .scrollable-sidebar::-webkit-scrollbar-track {
        background: #bfdbfe;
        border-radius: 10px;
    }

    .scrollable-sidebar::-webkit-scrollbar-thumb {
        background-color: #3b82f6;
        border-radius: 10px;
    }

    /* Hide scrollbars on mobile */
    @media (max-width: 1023px) {

        .scrollable-sidebar,
        .scrollable-main {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .scrollable-sidebar::-webkit-scrollbar,
        .scrollable-main::-webkit-scrollbar {
            display: none;
        }
    }

    /* UMKM Card Specific Styles */
    .umkm-card {
        transition: all 0.3s ease;
        border-radius: 1.5rem;
        overflow: hidden;
        position: relative;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.8) 0%, rgba(236, 253, 245, 0.9) 100%);
    }

    .umkm-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px -5px rgba(16, 185, 129, 0.3);
    }

    .umkm-logo {
        width: 80px;
        height: 80px;
        border-radius: 1rem;
        object-fit: cover;
        border: 3px solid white;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .umkm-card:hover .umkm-logo {
        transform: scale(1.05);
        box-shadow: 0 6px 12px -2px rgba(0, 0, 0, 0.15);
    }

    .umkm-badge {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: linear-gradient(to right, #f59e0b, #ef4444);
        color: white;
        font-size: 0.75rem;
        font-weight: bold;
        padding: 0.25rem 0.75rem;
        border-radius: 9999px;
        z-index: 10;
    }

    .product-count {
        background-color: #ecfdf5;
        color: #059669;
        padding: 0.25rem 0.5rem;
        border-radius: 0.375rem;
        font-size: 0.75rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .umkm-card:hover .product-count {
        background-color: #d1fae5;
    }

    .verified-badge {
        display: inline-flex;
        align-items: center;
        background-color: #ecfdf5;
        color: #059669;
        padding: 0.25rem 0.5rem;
        border-radius: 0.375rem;
        font-size: 0.75rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .umkm-card:hover .verified-badge {
        background-color: #d1fae5;
    }

    /* Section transition effects */
    .section-transition {
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Floating action button */
    .fab-button {
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: linear-gradient(to bottom right, #10b981, #059669);
        box-shadow: 0 4px 6px -1px rgba(16, 185, 129, 0.3), 0 2px 4px -1px rgba(16, 185, 129, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        z-index: 40;
        transition: all 0.3s ease;
    }

    .fab-button:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 10px 15px -3px rgba(16, 185, 129, 0.3), 0 4px 6px -2px rgba(16, 185, 129, 0.2);
    }
</style>
@endsection

@section('content')
@php
$umkms = [
[
'name' => 'Sambal Teri Kacang Crispy',
'owner' => 'Hakarian A Hemenan',
'logo' => 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/cd8fbedf-b03f-4d82-9e8a-467049d080f1.png',
'category' => 'Kuliner',
'products' => 12,
'phone' => '085692615060',
'email' => 'rthkumala05@gmail.com',
'verified' => true,
'featured' => true
],
[
'name' => 'D\' Bebek Kyu',
'owner' => 'Kakaran A Mengraf',
'logo' => 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a32dee1c-864e-495f-adff-5f23ebf5f7fc.png',
'category' => 'Kuliner',
'products' => 8,
'phone' => '081231830848',
'email' => 'ummuaziz99@gmail.com',
'verified' => true,
'featured' => false
],
[
'name' => 'LIMITTES',
'owner' => 'Limites.id',
'logo' => 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/f0a0ab70-24c1-4518-ac89-47cb2ec254a3.png',
'category' => 'Fashion',
'products' => 24,
'phone' => '081513080715',
'email' => 'limittessaison@gmail.com',
'verified' => true,
'featured' => true
],
[
'name' => 'Oval Pastry',
'owner' => 'Ruth Kumala',
'logo' => 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/30b1bb46-6e01-47fa-8123-2371e7f65984.png',
'category' => 'Kuliner',
'products' => 15,
'phone' => '085692615060',
'email' => 'rthkumala05@gmail.com',
'verified' => false,
'featured' => false
],
[
'name' => 'Dapur Khadjah',
'owner' => 'Ummu Aziz',
'logo' => 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a4e27cea-7565-4c29-8bd4-dfb1059b79b7.png',
'category' => 'Kuliner',
'products' => 6,
'phone' => '081231830848',
'email' => 'ummuaziz99@gmail.com',
'verified' => true,
'featured' => false
],
[
'name' => 'Limites Saison',
'owner' => 'Limites.id',
'logo' => 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/dff3c74d-30b9-43a1-8ac6-5bbb030964e8.png',
'category' => 'Fashion',
'products' => 18,
'phone' => '081513080715',
'email' => 'limittessaison@gmail.com',
'verified' => true,
'featured' => true
],
];
@endphp
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
            <!-- Sidebar filters with distinct scroll style -->
            <aside class="lg:w-3/12 h-fit sticky top-6">
                <div class="scrollable-sidebar space-y-6 lg:pr-2">
                    <!-- Search Filter -->
                    <div class="backdrop-blur-lg bg-white/80 border border-white/20 rounded-3xl border-neutral-200 p-6 transition-all duration-500 transform section-transition hover:shadow-lg">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-8 h-8 bg-gradient-to-r from-blue-400 to-cyan-500 rounded-lg flex items-center justify-center">
                                <span class="text-white text-sm font-bold">🔍</span>
                            </div>
                            <h2 class="font-bold text-xl bg-gradient-to-r from-blue-600 to-cyan-600 bg-clip-text text-transparent">Cari UMKM</h2>
                        </div>
                        <div class="relative">
                            <input type="text" placeholder="Cari nama UMKM..." class="w-full bg-white/70 backdrop-blur-sm border-2 border-gray-200 rounded-xl text-sm px-4 py-3 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-blue-400 hover:border-blue-300 transition-all duration-300">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Category Filter -->
                    <div class="backdrop-blur-lg bg-white/80 border border-white/20 rounded-3xl border-neutral-200 p-6 transition-all duration-500 transform section-transition hover:shadow-lg">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-8 h-8 bg-gradient-to-r from-green-400 to-emerald-500 rounded-lg flex items-center justify-center">
                                <span class="text-white text-sm font-bold">📂</span>
                            </div>
                            <h2 class="font-bold text-xl bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Kategori Bisnis</h2>
                        </div>
                        <ul class="space-y-2">
                            @php
                            $categories = [
                            ['icon' => '🍲', 'name' => 'Kuliner', 'count' => 128],
                            ['icon' => '👗', 'name' => 'Fashion', 'count' => 76],
                            ['icon' => '📿', 'name' => 'Aksesoris', 'count' => 54],
                            ['icon' => '🧦', 'name' => 'Kerajinan', 'count' => 42],
                            ['icon' => '🏠', 'name' => 'Jasa', 'count' => 39],
                            ['icon' => '🌾', 'name' => 'Agrobisnis', 'count' => 31],
                            ['icon' => '🎨', 'name' => 'Seni', 'count' => 28],
                            ['icon' => '🧰', 'name' => 'Lainnya', 'count' => 45],
                            ];
                            @endphp
                            @foreach ($categories as $category)
                            <li class="filter-item">
                                <div class="flex items-center border border-opacity-0 justify-between p-3 rounded-2xl cursor-pointer transition-all hover:text-green-600 duration-300 hover:border-green-200 border-transparent">
                                    <div class="flex items-center space-x-3">
                                        <span class="transition-transform duration-300">{{ $category['icon'] }}</span>
                                        <span class="font-medium text-sm">{{ $category['name'] }}</span>
                                    </div>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded-full">{{ $category['count'] }}</span>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Location Filter -->
                    <div class="backdrop-blur-lg bg-white/80 border border-white/20 rounded-3xl border-neutral-200 p-6 transition-all duration-500 transform section-transition hover:shadow-lg">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-8 h-8 bg-gradient-to-r from-blue-400 to-cyan-500 rounded-lg flex items-center justify-center">
                                <span class="text-white text-sm font-bold">📍</span>
                            </div>
                            <h2 class="font-bold text-xl bg-gradient-to-r from-blue-600 to-cyan-600 bg-clip-text text-transparent">Filter Lokasi</h2>
                        </div>
                        <div class="space-y-4">
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
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Main content with different scroll style -->
            <main class="flex-1 w-full md:w-9/12">
                <div class="scrollable-main">
                    <!-- Hero Banner -->
                    <div class="relative rounded-3xl overflow-hidden bg-gradient-to-br from-green-400 via-emerald-500 to-teal-600 mb-8 transform transition-all duration-500 section-transition hover:shadow-xl">
                        <div class="absolute inset-0 bg-black/10"></div>
                        <div class="relative p-8">
                            <div class="flex items-center justify-between">
                                <div class="space-y-4">
                                    <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm rounded-full px-6 py-2">
                                        <span class="w-2 h-2 bg-green-300 rounded-full animate-pulse"></span>
                                        <span class="text-white font-medium">UMKM Terverifikasi</span>
                                    </div>
                                    <h1 class="text-4xl font-black text-white drop-shadow-lg">
                                        Daftar UMKM
                                        <span class="block bg-gradient-to-r from-yellow-300 to-orange-300 bg-clip-text text-transparent">
                                            Kota Malang
                                        </span>
                                    </h1>
                                    <p class="text-green-100 text-lg max-w-md">Temukan pelaku UMKM terbaik dari Kota Malang dengan berbagai produk unggulan</p>
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

                    <!-- Content Card -->
                    <div class="backdrop-blur-lg bg-white/80 border border-white/20 rounded-3xl border-neutral-200 p-8 section-transition hover:shadow-lg">
                        <!-- Filter and view controls -->
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-8 space-y-4 sm:space-y-0">
                            <div>
                                <h2 class="text-2xl font-bold text-gray-800">Daftar UMKM</h2>
                                <p class="text-gray-600">Total <span class="font-bold text-green-600">324</span> UMKM terdaftar</p>
                            </div>

                            <div class="flex space-x-4 items-center">
                                <div class="relative">
                                    <select id="sort" name="sort" class="appearance-none bg-white/70 backdrop-blur-sm border border-neutral-200 rounded-2xl text-sm px-6 py-3 pr-10 focus:outline-none focus:ring-4 focus:ring-green-200 focus:border-green-400 hover:border-green-300 transition-all duration-300 cursor-pointer">
                                        <option>🔄 Urutkan</option>
                                        <option value="name_asc">📝 Nama A-Z</option>
                                        <option value="name_desc">📝 Nama Z-A</option>
                                        <option value="product_asc">📊 Produk Terbanyak</option>
                                        <option value="product_desc">📊 Produk Tersedikit</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- UMKM Grid -->
                        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($umkms as $umkm)
                            <div class="umkm-card backdrop-blur-sm border border-white/30 rounded-3xl p-6 border-neutral-200 transition-all duration-500 transform hover:-translate-y-3 hover:border-green-200 cursor-pointer overflow-hidden relative">
                                @if($umkm['featured'])
                                <div class="umkm-badge">🔥 Unggulan</div>
                                @endif

                                <div class="flex flex-col items-center text-center mb-4">
                                    <img src="{{ $umkm['logo'] }}" alt="Logo {{ $umkm['name'] }}" class="umkm-logo mb-3">
                                    <h3 class="text-lg font-bold text-gray-800">{{ $umkm['name'] }}</h3>
                                    <p class="text-sm text-gray-600">{{ $umkm['owner'] }}</p>
                                </div>

                                <div class="flex justify-center mb-4">
                                    <span class="px-3 py-1 bg-gray-100 text-gray-800 text-xs font-medium rounded-full">{{ $umkm['category'] }}</span>
                                </div>

                                <div class="flex items-center justify-between mb-4">
                                    <div class="product-count">
                                        {{ $umkm['products'] }} Produk
                                    </div>
                                    @if($umkm['verified'])
                                    <div class="verified-badge">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                        Terverifikasi
                                    </div>
                                    @endif
                                </div>

                                <div class="space-y-2 text-sm">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                        <span>{{ $umkm['phone'] }}</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        <span class="truncate">{{ $umkm['email'] }}</span>
                                    </div>
                                </div>

                                <button class="w-full mt-4 bg-gradient-to-r from-green-500 to-emerald-500 text-white font-bold py-2 px-4 rounded-xl hover:from-green-600 hover:to-emerald-600 transition-all duration-300">
                                    Lihat Produk
                                </button>
                            </div>
                            @endforeach
                        </section>

                        <!-- Pagination -->
                        <div class="mt-8 flex justify-center">
                            <nav class="inline-flex rounded-md shadow-sm">
                                <a href="#" class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Previous</span>
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-green-600 hover:bg-gray-50">1</a>
                                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">2</a>
                                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">3</a>
                                <a href="#" class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Next</span>
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Floating Action Button -->
    <a href="#" class="fab-button">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
        </svg>
    </a>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scroll behavior for both sections
        const sidebarScroll = document.querySelector('.scrollable-sidebar');
        const mainScroll = document.querySelector('.scrollable-main');

        if (sidebarScroll) {
            sidebarScroll.style.scrollBehavior = 'smooth';
        }

        if (mainScroll) {
            mainScroll.style.scrollBehavior = 'smooth';
        }

        // Add intersection observer for scroll effects
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeIn');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.umkm-card').forEach(card => {
            observer.observe(card);
        });
    });
</script>
@endsection