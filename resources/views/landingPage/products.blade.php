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

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination .page-item {
            margin: 0 5px;
        }

        .pagination .page-link {
            background-color: #ffffff;
            /* Warna latar belakang putih */
            color: #4B5563;
            /* Warna teks abu-abu gelap atau warna teks tema Anda */
            border: 1px solid #ddd;
            /* Border yang lebih terang */
            padding: 10px 15px;
            border-radius: 10px;
            transition: background-color 0.3s, color 0.3s;
        }

        .pagination .page-link:hover {
            background-color: #4CAF50;
            /* Warna latar belakang hijau ketika hover */
            color: white;
            /* Warna teks putih */
        }

        .pagination .page-item.active .page-link {
            background-color: #4CAF50;
            /* Warna latar belakang untuk halaman aktif */
            color: white;
            border-color: #4CAF50;
        }
    </style>
@endsection

@section('content')
    <!-- Background with animated gradients -->
    <div class="min-h-screen py-8 bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 relative overflow-hidden">

        <!-- Breadcrumb -->
        <nav class="flex ml-10 lg:ml-24 text-sm text-gray-600" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li><a href="/" class="hover:text-emerald-600">Beranda</a></li>
                <li><i class="fas fa-chevron-right text-xs mx-2 text-gray-400"></i></li>
                <li><a href="/products" class="hover:text-emerald-600">Produk</a></li>
            </ol>
        </nav>

        <!-- Animated background elements -->
        <div class="absolute inset-0 opacity-30">
            <div
                class="absolute top-20 left-10 w-32 h-32 bg-green-200 rounded-full mix-blend-multiply filter blur-xl animate-blob">
            </div>
            <div
                class="absolute top-40 right-10 w-32 h-32 bg-emerald-200 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000">
            </div>
            <div
                class="absolute -bottom-8 left-20 w-32 h-32 bg-teal-200 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000">
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col lg:flex-row relative gap-8 pt-6">
                <!-- Sidebar categories with glassmorphism -->
                <aside class="lg:w-3/12 h-fit sticky top-6">
                    <div class="scrollable-sidebar space-y-6 lg:pr-2">
                        <div
                            class="backdrop-blur-lg bg-white/80 border border-white/20 rounded-3xl border-neutral-200 p-6 transition-all duration-500 transform">
                            <div class="flex items-center gap-3 mb-6">
                                <h2
                                    class="font-bold text-xl bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">
                                    Semua Kategori</h2>
                            </div>
                            <ul class="space-y-2">
                                @foreach ($categories as $category)
                                    <li class="filter-item">
                                        <a href="{{ route('products.index', ['category' => $category->slug]) }}"
                                            class="flex items-center justify-between p-3 rounded-2xl cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <span class="font-medium text-sm">{{ $category->name }}</span>
                                            </div>
                                            <span
                                                class="text-xs bg-green-100 text-gray-600 px-2 py-1 rounded-full">{{ $category->products_count }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </aside>

                <!-- Main content -->
                <main class="flex-1 w-full md:w-9/12">
                    <div class="scrollable-main">
                        <!-- Hero Banner with modern design -->
                        <div
                            class="relative rounded-3xl overflow-hidden bg-gradient-to-br from-green-400 via-emerald-500 to-teal-600 mb-8 transform transition-all duration-500">
                            <div class="absolute inset-0 bg-black/10"></div>
                            <div class="relative p-8">
                                <div class="flex items-center justify-between">
                                    <div class="space-y-4">
                                        <div
                                            class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm rounded-full px-6 py-2">
                                            <span class="w-2 h-2 bg-green-300 rounded-full animate-pulse"></span>
                                            <span class="text-white font-medium">Live Products</span>
                                        </div>
                                        <h1 class="text-4xl font-black text-white drop-shadow-lg">
                                            Discover Amazing
                                            <span
                                                class="block bg-gradient-to-r from-yellow-300 to-orange-300 bg-clip-text text-transparent">
                                                Local Products
                                            </span>
                                        </h1>
                                        <p class="text-green-100 text-lg max-w-md">Temukan produk UMKM terbaik dari Kota
                                            Malang dengan kualitas premium dan harga terjangkau</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Decorative waves -->
                            <div class="absolute bottom-0 left-0 right-0">
                                <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="relative block w-full h-16">
                                    <path
                                        d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                                        fill="white" fill-opacity="0.1"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Content Card with glassmorphism -->
                        <div class="backdrop-blur-lg bg-white/80 border border-white/20 rounded-3xl border-neutral-200 p-8">
                            <!-- Product grid with modern cards -->
                            <section class="grid items-center grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                                @foreach ($products as $product)
                                    <div class="group relative">
                                        <!-- Floating badge for bestseller -->
                                        @if ($product->total_sales > 100)
                                            <div
                                                class="absolute -top-2 -left-2 z-20 bg-gradient-to-r from-orange-400 to-red-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg animate-pulse">
                                                🔥 Bestseller
                                            </div>
                                        @endif

                                        <div
                                            class="backdrop-blur-sm bg-white/60 border border-white/30 rounded-3xl p-6 border-neutral-200 transition-all duration-500 transform hover:-translate-y-3 hover:border-green-200 cursor-pointer overflow-hidden relative">
                                            <!-- Gradient overlay on hover -->
                                            <div
                                                class="absolute inset-0 hover:bg-slate-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-3xl">
                                            </div>

                                            <!-- Image container with modern styling -->
                                            <div class="relative mb-4 overflow-hidden rounded-2xl">
                                                @if ($product->photos->isNotEmpty())
                                                    <img src="{{ asset('storage/' . $product->photos->first()->file_path) }}"
                                                        alt="Foto produk {{ $product->name }}"
                                                        class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500"
                                                        onerror="this.onerror=null;this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/dcded2c4-2a35-4ad4-8f4c-46ae73ed0c0a.png';" />
                                                @else
                                                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/dcded2c4-2a35-4ad4-8f4c-46ae73ed0c0a.png"
                                                        alt="No image available"
                                                        class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500" />
                                                @endif
                                            </div>

                                            <!-- Product info -->
                                            <div class="space-y-3 relative z-10">
                                                <h3
                                                    class="font-bold text-gray-800 group-hover:text-green-600 transition-colors duration-300 line-clamp-2">
                                                    {{ $product->name }}
                                                </h3>

                                                <!-- Rating and sold -->
                                                <div class="flex items-center justify-between text-sm">
                                                    <span class="text-gray-500">{{ $product->total_sales }} terjual</span>
                                                </div>

                                                <!-- Price -->
                                                <div class="flex items-center justify-between">
                                                    <p
                                                        class="text-xl font-black bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">
                                                        Rp {{ number_format($product->price, 2, ',', '.') }}
                                                    </p>
                                                </div>

                                                <!-- CTA Button -->
                                                <a href="{{ route('products.show', $product->slug) }}"
                                                    class="flex items-center justify-center gap-2 bg-green-600 text-white font-semibold rounded-full px-4 py-2 hover:bg-green-700 transition-colors duration-300 group">
                                                    <span class="flex items-center justify-center gap-2">
                                                        <span class="text-xs">Lihat Detail</span>
                                                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300"
                                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </section>

                            <!-- Pagination -->
                            <div class="mt-8">
                                {{ $products->links() }}
                            </div>
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
            this.style.backgroundImage =
                `linear-gradient(to right, #10b981 0%, #10b981 ${(value/500000)*100}%, #e5e7eb ${(value/500000)*100}%, #e5e7eb 100%)`;
        });

        function formatCurrency(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
        }
    </script>
@endsection

@endsection
