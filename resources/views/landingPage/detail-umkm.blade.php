@extends('core.landingPage')

@section('title', 'Detail UMKM | Sambal Teri Kacang Crispy')

@section('style')
<style>
    /* Reuse animations from list page */
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

    /* Detail Page Specific Styles */
    .umkm-header {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        border-radius: 2rem;
        overflow: hidden;
        position: relative;
    }

    .umkm-logo-large {
        width: 120px;
        height: 120px;
        border-radius: 1.5rem;
        object-fit: cover;
        border: 4px solid white;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.2);
    }

    .product-card {
        transition: all 0.3s ease;
        border-radius: 1.5rem;
        overflow: hidden;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(236, 253, 245, 0.95) 100%);
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px -5px rgba(16, 185, 129, 0.3);
    }

    .product-image {
        height: 180px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .product-card:hover .product-image {
        transform: scale(1.03);
    }

    .badge-featured {
        background: linear-gradient(to right, #f59e0b, #ef4444);
        color: white;
    }

    .badge-verified {
        background: linear-gradient(to right, #10b981, #059669);
        color: white;
    }

    .contact-button {
        transition: all 0.3s ease;
    }

    .contact-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 6px -1px rgba(16, 185, 129, 0.3);
    }

    .gallery-item {
        transition: all 0.3s ease;
        border-radius: 1rem;
        overflow: hidden;
    }

    .gallery-item:hover {
        transform: scale(1.02);
    }

    .section-card {
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.8);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
    }

    .section-card:hover {
        box-shadow: 0 10px 25px -5px rgba(16, 185, 129, 0.1);
    }

    .tab-button {
        transition: all 0.3s ease;
        position: relative;
    }

    .tab-button::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 3px;
        background: linear-gradient(to right, #10b981, #059669);
        transition: width 0.3s ease;
    }

    .tab-button.active {
        color: #059669;
        font-weight: 600;
    }

    .tab-button.active::after {
        width: 100%;
    }

    .fab-button {
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: linear-gradient(to bottom right, #10b981, #059669);
        box-shadow: 0 4px 6px -1px rgba(16, 185, 129, 0.3);
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
        box-shadow: 0 10px 15px -3px rgba(16, 185, 129, 0.3);
    }

    /* Remove scroll behavior */
    html {
        scroll-behavior: smooth;
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

    <div class="container mx-auto px-4 py-8 relative z-10">
        <!-- Back button -->
        <div class="mb-6">
            <a href="" class="inline-flex items-center text-green-600 hover:text-green-800 transition-colors duration-300">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Kembali ke Daftar UMKM
            </a>
        </div>

        <!-- UMKM Header Section -->
        <div class="umkm-header mb-8 p-8 text-white relative overflow-hidden">
            <div class="absolute inset-0 bg-black/10"></div>
            <div class="relative z-10 flex flex-col md:flex-row items-center md:items-start gap-8">
                <div class="flex-shrink-0">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/cd8fbedf-b03f-4d82-9e8a-467049d080f1.png"
                        alt="Logo Sambal Teri Kacang Crispy"
                        class="umkm-logo-large">
                </div>
                <div class="flex-1">
                    <div class="flex flex-wrap items-center gap-3 mb-4">
                        <h1 class="text-3xl font-bold">Sambal Teri Kacang Crispy</h1>
                        <span class="badge-verified px-3 py-1 rounded-full text-xs font-bold flex items-center">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Terverifikasi
                        </span>
                        <span class="badge-featured px-3 py-1 rounded-full text-xs font-bold">
                            🔥 UMKM Unggulan
                        </span>
                    </div>

                    <p class="text-green-100 mb-6 max-w-2xl">
                        Sambal Teri Kacang Crispy dengan cita rasa khas Malang yang pedas, gurih, dan nikmat.
                        Dibuat dari bahan-bahan pilihan tanpa pengawet untuk menjaga kualitas dan rasa otentik.
                    </p>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="bg-white/20 p-4 rounded-xl backdrop-blur-sm">
                            <div class="text-xs text-green-50 mb-1">Kategori</div>
                            <div class="font-bold text-white">Kuliner</div>
                        </div>
                        <div class="bg-white/20 p-4 rounded-xl backdrop-blur-sm">
                            <div class="text-xs text-green-50 mb-1">Produk</div>
                            <div class="font-bold text-white">12 Item</div>
                        </div>
                        <div class="bg-white/20 p-4 rounded-xl backdrop-blur-sm">
                            <div class="text-xs text-green-50 mb-1">Bergabung</div>
                            <div class="font-bold text-white">Jan 2022</div>
                        </div>
                        <div class="bg-white/20 p-4 rounded-xl backdrop-blur-sm">
                            <div class="text-xs text-green-50 mb-1">Lokasi</div>
                            <div class="font-bold text-white">Klojen, Malang</div>
                        </div>
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

        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
            <!-- Left Column - UMKM Info -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Tabs Navigation -->
                <div class="flex border-b border-gray-200">
                    <button class="tab-button active px-6 py-3 text-sm font-medium">Produk</button>
                    <button class="tab-button px-6 py-3 text-sm font-medium">Tentang</button>
                    <button class="tab-button px-6 py-3 text-sm font-medium">Galeri</button>
                    <button class="tab-button px-6 py-3 text-sm font-medium">Ulasan</button>
                </div>

                <!-- Products Section -->
                <div class="section-card rounded-3xl p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                        Produk Unggulan
                    </h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Product 1 -->
                        <div class="product-card border border-gray-200 p-4">
                            <div class="relative overflow-hidden rounded-xl mb-4">
                                <img src="https://images.unsplash.com/photo-1585032226651-759b368d7246?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                    alt="Sambal Teri Kacang Level 1"
                                    class="product-image w-full">
                                <div class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">
                                    Stok: 45
                                </div>
                            </div>
                            <h3 class="font-bold text-gray-800 mb-1">Sambal Teri Kacang Level 1</h3>
                            <p class="text-sm text-gray-600 mb-3">Pedas ringan dengan teri medan pilihan</p>
                            <div class="flex justify-between items-center">
                                <span class="font-bold text-green-600">Rp 25.000</span>
                                <button class="text-xs bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded-full transition-colors duration-300">
                                    + Keranjang
                                </button>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="product-card border border-gray-200 p-4">
                            <div class="relative overflow-hidden rounded-xl mb-4">
                                <img src="https://images.unsplash.com/photo-1561758033-7e924f619b47?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                    alt="Sambal Teri Kacang Level 2"
                                    class="product-image w-full">
                                <div class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">
                                    Stok: 32
                                </div>
                            </div>
                            <h3 class="font-bold text-gray-800 mb-1">Sambal Teri Kacang Level 2</h3>
                            <p class="text-sm text-gray-600 mb-3">Pedas sedang dengan cita rasa lebih kuat</p>
                            <div class="flex justify-between items-center">
                                <span class="font-bold text-green-600">Rp 28.000</span>
                                <button class="text-xs bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded-full transition-colors duration-300">
                                    + Keranjang
                                </button>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="product-card border border-gray-200 p-4">
                            <div class="relative overflow-hidden rounded-xl mb-4">
                                <img src="https://images.unsplash.com/photo-1563245372-f21724e3856d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                    alt="Sambal Teri Kacang Level 3"
                                    class="product-image w-full">
                                <div class="absolute top-2 right-2 bg-yellow-500 text-white text-xs px-2 py-1 rounded-full">
                                    Stok: 12
                                </div>
                            </div>
                            <h3 class="font-bold text-gray-800 mb-1">Sambal Teri Kacang Level 3</h3>
                            <p class="text-sm text-gray-600 mb-3">Pedas ekstra untuk pecinta rasa kuat</p>
                            <div class="flex justify-between items-center">
                                <span class="font-bold text-green-600">Rp 30.000</span>
                                <button class="text-xs bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded-full transition-colors duration-300">
                                    + Keranjang
                                </button>
                            </div>
                        </div>

                        <!-- Product 4 -->
                        <div class="product-card border border-gray-200 p-4">
                            <div class="relative overflow-hidden rounded-xl mb-4">
                                <img src="https://images.unsplash.com/photo-1563245372-f21724e3856d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                    alt="Paket Hemat 3 Level"
                                    class="product-image w-full">
                                <div class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">
                                    Stok: 18
                                </div>
                            </div>
                            <h3 class="font-bold text-gray-800 mb-1">Paket Hemat 3 Level</h3>
                            <p class="text-sm text-gray-600 mb-3">Paket komplit semua level dengan harga spesial</p>
                            <div class="flex justify-between items-center">
                                <span class="font-bold text-green-600">Rp 75.000</span>
                                <button class="text-xs bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded-full transition-colors duration-300">
                                    + Keranjang
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 text-center">
                        <button class="px-6 py-2 border border-green-500 text-green-600 rounded-full hover:bg-green-50 transition-colors duration-300">
                            Lihat Semua Produk (12)
                        </button>
                    </div>
                </div>

                <!-- About Section -->
                <div class="section-card rounded-3xl p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Tentang UMKM
                    </h2>

                    <div class="prose max-w-none">
                        <p class="text-gray-700 mb-4">
                            Sambal Teri Kacang Crispy adalah usaha rumahan yang berdiri sejak Januari 2022,
                            berlokasi di Klojen, Kota Malang. Kami memproduksi sambal teri kacang dengan
                            berbagai level kepedasan menggunakan bahan-bahan pilihan tanpa pengawet.
                        </p>

                        <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Visi & Misi</h3>
                        <p class="text-gray-700 mb-4">
                            <strong>Visi:</strong> Menjadi produsen sambal teri kacang terbaik di Malang dengan
                            cita rasa otentik yang diakui secara nasional.
                        </p>
                        <p class="text-gray-700 mb-4">
                            <strong>Misi:</strong>
                        </p>
                        <ul class="list-disc pl-5 text-gray-700 space-y-2">
                            <li>Menggunakan bahan baku berkualitas tinggi</li>
                            <li>Mempertahankan rasa tradisional dengan sentuhan modern</li>
                            <li>Memberikan harga terjangkau dengan kualitas premium</li>
                            <li>Mengembangkan produk inovatif berbasis sambal</li>
                        </ul>

                        <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Proses Produksi</h3>
                        <p class="text-gray-700 mb-4">
                            Kami mengutamakan kebersihan dan kualitas dalam setiap tahap produksi:
                        </p>
                        <ol class="list-decimal pl-5 text-gray-700 space-y-2">
                            <li>Seleksi bahan baku (teri medan, kacang tanah, cabai)</li>
                            <li>Pencucian dan sterilisasi bahan</li>
                            <li>Pengolahan dengan teknik khusus untuk menjaga kerenyahan</li>
                            <li>Pengemasan higienis dengan standar food grade</li>
                            <li>Quality control sebelum distribusi</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Right Column - Contact & Info -->
            <div class="space-y-6">
                <!-- Contact Card -->
                <div class="section-card rounded-3xl p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        Kontak UMKM
                    </h2>

                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500">Telepon/WhatsApp</div>
                                <div class="font-medium text-gray-800">085692615060</div>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500">Email</div>
                                <div class="font-medium text-gray-800">rthkumala05@gmail.com</div>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500">Alamat</div>
                                <div class="font-medium text-gray-800">Jl. Raya Tlogomas No. 246, Klojen, Malang</div>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500">Sosial Media</div>
                                <div class="flex space-x-3 mt-1">
                                    <a href="#" class="text-blue-600 hover:text-blue-800">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="text-pink-600 hover:text-pink-800">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="text-blue-400 hover:text-blue-600">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 space-y-3">
                        <button class="contact-button w-full bg-green-500 hover:bg-green-600 text-white font-medium py-3 px-4 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                            Chat via WhatsApp
                        </button>
                        <button class="contact-button w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-3 px-4 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            Hubungi via Telepon
                        </button>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="section-card rounded-3xl p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Jam Operasional
                    </h2>

                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-700">Senin - Jumat</span>
                            <span class="font-medium">08:00 - 17:00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-700">Sabtu</span>
                            <span class="font-medium">09:00 - 15:00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-700">Minggu</span>
                            <span class="font-medium text-red-500">Libur</span>
                        </div>
                    </div>
                </div>

                <!-- Location Map -->
                <div class="section-card rounded-3xl p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Lokasi UMKM
                    </h2>

                    <div class="rounded-xl overflow-hidden h-48 bg-gray-100 relative">
                        <!-- Map placeholder - would be replaced with actual map in implementation -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="mt-4">
                        <button class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                            </svg>
                            Buka di Google Maps
                        </button>
                    </div>
                </div>
            </div>
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
        // Tab switching functionality
        const tabs = document.querySelectorAll('.tab-button');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs
                tabs.forEach(t => t.classList.remove('active'));
                // Add active class to clicked tab
                tab.classList.add('active');

                // Here you would typically show/hide the corresponding content sections
                // For demo purposes we're just changing the tab appearance
            });
        });
    });
</script>
@endsection