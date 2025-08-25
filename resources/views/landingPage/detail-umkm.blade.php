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
    <div class="min-h-screen bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 relative overflow-hidden">
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

        <div class="container mx-auto px-4 py-8 relative z-10">
            <div class="mb-6">
                <a href=""
                    class="inline-flex items-center text-green-600 hover:text-green-800 transition-colors duration-300">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali ke Daftar UMKM
                </a>
            </div>

            <!-- UMKM Header Section -->
            <div class="umkm-header mb-8 p-8 text-white relative overflow-hidden">
                <div class="absolute inset-0 bg-black/10"></div>
                <div class="relative z-10 flex flex-col md:flex-row items-center md:items-start gap-8">
                    <div class="flex-shrink-0">
                        <img src="{{ Storage::url($umkm->logo) }}" alt="Logo {{ $umkm->name }}" class="umkm-logo-large">
                    </div>
                    <div class="flex-1">
                        <div class="flex flex-wrap items-center gap-3 mb-4">
                            <h1 class="text-3xl font-bold">{{ $umkm->name }}</h1>
                            <span class="badge-verified px-3 py-1 rounded-full text-xs font-bold flex items-center">
                                @if ($umkm->verification_status == 'verified')
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Terverifikasi
                                @endif
                            </span>
                        </div>

                        <p class="text-green-100 mb-6 max-w-2xl">
                            {{ $umkm->tagline }}
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div class="bg-white/20 p-4 rounded-xl backdrop-blur-sm">
                                <div class="text-xs text-green-50 mb-1">Kategori</div>
                                <div class="font-bold text-white">{{ $umkm->category->name }}</div>
                            </div>
                            <div class="bg-white/20 p-4 rounded-xl backdrop-blur-sm">
                                <div class="text-xs text-green-50 mb-1">Produk</div>
                                <div class="font-bold text-white">{{ $umkm->products->count() }} Item</div>
                            </div>
                            <div class="bg-white/20 p-4 rounded-xl backdrop-blur-sm">
                                <div class="text-xs text-green-50 mb-1">Bergabung</div>
                                <div class="font-bold text-white">{{ $umkm->established_year }}</div>
                            </div>
                            <div class="bg-white/20 p-4 rounded-xl backdrop-blur-sm">
                                <div class="text-xs text-green-50 mb-1">Lokasi</div>
                                <div class="font-bold text-white">{{ $umkm->address }}</div>
                            </div>
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

            <!-- Main Content -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
                <!-- Left Column - UMKM Info -->
                <div class="lg:col-span-2 space-y-8">

                    <!-- Default content, produk data -->
                    <div class="section-card rounded-3xl p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                            Produk Unggulan
                        </h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            @foreach ($umkm->products as $product)
                                <div class="product-card border border-gray-200 p-4">
                                    <div class="relative overflow-hidden rounded-xl mb-4">
                                        @php

                                            $photo = $product->photos->first();
                                        @endphp @if ($photo)
                                            <img src="{{ asset('storage/' . $photo->file_path) }}"
                                                alt="{{ $product->name }}" class="product-image w-full">
                                        @else
                                            <img src="{{ asset('default-image.jpg') }}" alt="Default Image"
                                                class="product-image w-full">
                                    </div>
                                </div>
                            @endif
                            <div class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">
                                Stok: {{ $product->stock }}
                            </div>
                        </div>

                        <h3 class="font-bold text-gray-800 mb-1">{{ $product->name }}</h3>
                        <p class="text-sm text-gray-600 mb-3">{{ $product->description }}</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-green-600">Rp
                                {{ number_format($product->price, 0, ',', '.') }}</span>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

            <div id="galleryContent" class="section-card rounded-3xl p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center">Galeri UMKM</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($umkm->photos as $photo)
                        <div class="gallery-item">
                            <img src="{{ asset('storage/' . $photo->file_path) }}" alt="Gallery Image"
                                class="gallery-image">
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="section-card rounded-3xl p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Tentang UMKM
                </h2>

                <div class="prose max-w-none">
                    {{ $umkm->description }}
                </div>
            </div>
        </div>

        <div class="space-y-6">
            <div class="section-card rounded-3xl p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                        </path>
                    </svg>
                    Kontak UMKM
                </h2>

                <div class="space-y-4">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs text-gray-500">Telepon/WhatsApp</div>
                            <div class="font-medium text-gray-800">{{ $umkm->user->phone }}</div>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs text-gray-500">Email</div>
                            <div class="font-medium text-gray-800">{{ $umkm->user->email }}</div>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs text-gray-500">Alamat</div>
                            <div class="font-medium text-gray-800">{{ $umkm->address }}</div>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs text-gray-500">Sosial Media</div>
                            @foreach ($umkm->socials as $social)
                                <div class="flex space-x-3 mt-1">
                                    @if ($social->platform == 'tiktok')
                                        <a href="{{ $social->url }}" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M9 2v13.5a3.5 3.5 0 1 0 3.5 3.5V9h4a5 5 0 1 1-5-5z" />
                                            </svg>
                                        </a>
                                    @elseif($social->platform == 'facebook')
                                        <a href="{{ $social->url }}" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <path
                                                    d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.406.593 24 1.325 24h11.495v-9.294H9.691v-3.622h3.129V8.413c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.466.099 2.797.143v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.312h3.59l-.467 3.622h-3.123V24h6.116c.73 0 1.324-.594 1.324-1.324V1.325C24 .593 23.406 0 22.675 0z" />
                                            </svg>
                                        </a>
                                    @elseif($social->platform == 'instagram')
                                        <a href="{{ $social->url }}" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-500"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                                <rect x="2" y="2" width="20" height="20" rx="5"
                                                    ry="5" />
                                                <path d="M16 11.37A4 4 0 1 1 9.63 8 4 4 0 0 1 16 11.37z" />
                                                <line x1="17.5" y1="6.5" x2="17.5" y2="6.5" />
                                            </svg>
                                        </a>
                                    @endif
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

            <div class="section-card rounded-3xl p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Lokasi UMKM
                </h2>

                <div class="rounded-xl overflow-hidden h-48 bg-gray-100 relative">
                    <iframe src="{{ $umkm->google_maps }}" width="100%" height="100%" frameborder="0"
                        style="border:0;" allowfullscreen></iframe>
                </div>

                <div class="mt-4">
                    <a href="https://www.google.com/maps?q={{ urlencode($umkm->google_maps) }}" target="_blank"
                        class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-xl flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7">
                            </path>
                        </svg>
                        Buka di Google Maps
                    </a>
                </div>

            </div>
        </div>
    </div>
    </div>

    <a href="#" class="fab-button">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
            </path>
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
                });
            });
        });
    </script>
@endsection
