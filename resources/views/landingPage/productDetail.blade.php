@extends('core.landingPage')

@section('title', 'UMKM Kota Malang | Detail Produk')

@section('style')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

        html {
            zoom: 0.9;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(3deg);
            }
        }

        @keyframes pulse-glow {

            0%,
            100% {
                box-shadow: 0 0 20px rgba(16, 185, 129, 0.3);
            }

            50% {
                box-shadow: 0 0 40px rgba(16, 185, 129, 0.6);
            }
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
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
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
            border-radius: 13px;
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

            <!-- Main Product Section -->
            <div class="grid lg:grid-cols-2 gap-12 mb-16">
                <!-- Enhanced Product Images -->
                <div class="scroll-reveal">
                    <div class="glass-card rounded-3xl p-6 interactive-3d">
                        <div class="image-container mb-6 relative">
                            <img id="main-image" src="{{ asset('storage/' . $product->photos->first()->file_path) }}"
                                alt="{{ $product->name }}" class="w-full h-80 lg:h-96 object-cover zoom-image">
                        </div>

                        <div class="grid grid-cols-4 gap-4">
                            @foreach ($product->photos as $index => $photo)
                                <div class="thumbnail-container cursor-pointer {{ $index == 0 ? 'thumbnail-active' : '' }}"
                                    onclick="changeImage({{ $index }})">
                                    <img src="{{ asset('storage/' . $photo->file_path) }}" alt="View {{ $index + 1 }}"
                                        class="w-full h-20 object-cover rounded-xl transition-transform hover:scale-105">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Enhanced Product Info -->
                <div class="space-y-6">
                    <div class="glass-card rounded-3xl p-6 scroll-reveal">
                        <!-- Category and Availability -->
                        <div class="flex items-center justify-between mb-4">
                            <span
                                class="bg-gradient-to-r from-emerald-500 to-green-500 text-white px-4 py-2 rounded-full text-sm font-semibold">
                                <i class="fas fa-hammer mr-1"></i> {{ $category->name }}
                            </span>
                            <div class="flex items-center space-x-2">
                                @if ($product->stock > 0)
                                    <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                    <span class="text-sm text-green-600 font-medium">Tersedia</span>
                                @else
                                    <div class="w-3 h-3 bg-red-500 rounded-full animate-pulse"></div>
                                    <span class="text-sm text-red-600 font-medium">Habis</span>
                                @endif
                            </div>
                        </div>

                        <!-- Product Name -->
                        <h1 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-4 leading-tight">
                            {{ $product->name }}
                        </h1>

                        <!-- Price Section -->
                        <div class="bg-gradient-to-r from-emerald-50 to-green-50 rounded-2xl p-6 mb-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="text-4xl font-bold price-highlight">Rp
                                        {{ number_format($product->price, 2, ',', '.') }}</span>
                                    <p class="text-gray-600 mt-1">Sudah termasuk pajak</p>
                                </div>
                                <div class="text-right">
                                    <div class="bg-white rounded-xl p-3 shadow-sm">
                                        <span class="text-sm text-gray-500 block">Stok tersisa</span>
                                        <span class="text-2xl font-bold text-gray-800">{{ $product->stock }}</span>
                                        <span class="text-sm text-gray-500">pcs</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Buy Link -->
                        <a href="{{ $product->buy_link }}" target="_blank"
                            class="text-white bg-green-600 hover:bg-green-700 py-3 px-6 rounded-full font-semibold transition-colors">
                            Beli Sekarang
                        </a>
                    </div>

                    <div class="glass-card rounded-3xl p-6 scroll-reveal">
                        <h3 class="text-xl font-bold text-gray-800">Informasi Penjual</h3>
                        <!-- Seller Info: UMKM -->
                        <div class="flex items-start space-x-4">
                            <div class="relative">
                                <!-- UMKM Logo -->
                                <img src="{{ asset('storage/' . $umkm->logo) }}" alt="{{ $umkm->name }}"
                                    class="w-16 h-16 rounded-2xl object-cover border-3 border-emerald-200">
                                <div
                                    class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-2 border-white flex items-center justify-center">
                                    <i class="fas fa-check text-white text-xs"></i>
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center space-x-2 mb-2">
                                    <h4 class="font-bold text-gray-800 text-lg">{{ $umkm->name }}</h4>
                                </div>
                                <div class="space-y-2 text-sm text-gray-600">
                                    <div class="flex items-center">
                                        <i class="fas fa-map-marker-alt text-emerald-500 mr-2"></i>
                                        <span>{{ $umkm->address }}</span>
                                    </div>

                                    <div class="flex items-center">
                                        <i class="fas fa-clock text-emerald-500 mr-2"></i>
                                        <span>Bergabung {{ $umkm->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Product Details Tabs -->
            <div class="glass-card rounded-3xl overflow-hidden mb-16 scroll-reveal">
                <div class="border-b border-gray-200 p-6">
                    <nav class="flex space-x-1">
                        <button onclick="showTab('description')"
                            class="tab-btn tab-active px-6 py-3 rounded-xl font-semibold transition-all duration-300">
                            <i class="fas fa-info-circle mr-2"></i>Deskripsi
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
                                    {{ $product->description }}
                                </p>
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
                            Produk Lainnya dari UMKM Ini
                        </h2>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach ($umkmProducts as $relatedProduct)
                            <div
                                class="group bg-white rounded-2xl shadow-sm overflow-hidden transition-all duration-500 hover:shadow-2xl hover:scale-105">
                                <div class="relative overflow-hidden">
                                    <img src="{{ asset('storage/' . $relatedProduct->photos->first()->file_path) }}"
                                        alt="{{ $relatedProduct->name }}"
                                        class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                                </div>
                                <div class="p-4">
                                    <!-- Menampilkan Kategori dan Stok -->
                                    <div class="flex justify-between items-start mb-2">
                                        <span
                                            class="text-sm text-emerald-600 font-semibold bg-emerald-100 px-2 py-1 rounded-lg">
                                            {{ $relatedProduct->category->name }} <!-- Nama Kategori -->
                                        </span>
                                        <span class="text-sm text-gray-500">Stok: {{ $relatedProduct->stock }}</span>
                                        <!-- Stok -->
                                    </div>

                                    <h3 class="font-bold text-gray-800 mb-3 line-clamp-2 text-lg">
                                        {{ $relatedProduct->name }}
                                    </h3>
                                    <div class="flex justify-between items-center">
                                        <span class="text-xl font-bold text-emerald-600">Rp
                                            {{ number_format($relatedProduct->price, 2, ',', '.') }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Tombol Kunjungi Toko UMKM -->
                    <div class="text-center mt-8">
                        <a href="{{ route('list-umkm.show', $umkm->slug) }}"
                            class="btn-primary text-white px-8 py-4 rounded-2xl font-semibold text-lg hover:scale-105 transition-transform">
                            <i class="fas fa-store mr-2"></i>Kunjungi Toko UMKM
                        </a>
                    </div>
                </div>
            </section>



            <!-- Back to Top Button -->
            <button id="back-to-top"
                class="fixed bottom-6 left-6 w-12 h-12 bg-gray-800 hover:bg-gray-900 text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 pointer-events-none">
                <i class="fas fa-chevron-up"></i>
            </button>
        </div>



        <script>
            // Enhanced JavaScript functionality


            // Image gallery functionality
            function changeImage(index) {
                const mainImage = document.getElementById('main-image');
                const thumbnails = document.querySelectorAll('.thumbnail-container');

                // Ambil gambar yang dipilih dari data gambar produk
                const productImages = @json($product->photos->pluck('file_path'));

                // Fade out effect
                mainImage.style.opacity = '0.5';

                setTimeout(() => {
                    // Mengganti gambar utama dengan gambar yang dipilih
                    mainImage.src = "{{ asset('storage/') }}/" + productImages[index];
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
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
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
                    this.src =
                        `data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='300' viewBox='0 0 400 300'%3E%3Crect width='400' height='300' fill='%23f3f4f6'/%3E%3Ctext x='200' y='150' text-anchor='middle' dy='.3em' fill='%236b7280' font-family='sans-serif' font-size='14'%3EGambar tidak tersedia%3C/text%3E%3C/svg%3E`;
                    this.alt = 'Gambar tidak tersedia';
                });
            });
        </script>
    @endsection
