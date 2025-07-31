@extends('core.landingPage')

@section('title', 'Detail UMKM')

@section('style')
<style>
    .detail-hero {
        background: linear-gradient(135deg, rgba(16, 185, 129, 0.1) 0%, rgba(5, 150, 105, 0.05) 100%);
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
    }
    
    .product-card {
        transition: all 0.3s ease;
        border-radius: 1rem;
        overflow: hidden;
    }
    
    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px -5px rgba(16, 185, 129, 0.2);
    }
    
    .gallery-image {
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .gallery-image:hover {
        transform: scale(1.02);
    }
    
    .contact-button {
        transition: all 0.3s ease;
    }
    
    .contact-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 6px -1px rgba(16, 185, 129, 0.3);
    }
</style>
@endsection

@section('content')
@php
    // Dummy data for the UMKM
    $umkm = [
        'name' => 'Sambal Teri Kacang Crispy',
        'owner' => 'Hakarian A Hemenan',
        'logo' => 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/cd8fbedf-b03f-4d82-9e8a-467049d080f1.png',
        'category' => 'Kuliner',
        'products' => 12,
        'phone' => '085692615060',
        'email' => 'rthkumala05@gmail.com',
        'verified' => true,
        'featured' => true,
        'district' => 'Klojen'
    ];
@endphp

<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50">
    <!-- Hero Section -->
    <div class="detail-hero py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-8">
                <!-- Logo -->
                <div class="relative w-40 h-40 md:w-48 md:h-48 bg-white rounded-2xl shadow-md overflow-hidden border-4 border-white">
                    <img src="{{ $umkm['logo'] }}" alt="Logo {{ $umkm['name'] }}" 
                         class="w-full h-full object-cover"
                         onerror="this.src='https://via.placeholder.com/200?text=UMKM'">
                    @if($umkm['verified'])
                    <div class="absolute -bottom-2 -right-2 bg-white p-1 rounded-full shadow-md">
                        <svg class="w-6 h-6 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    @endif
                </div>
                
                <!-- Info -->
                <div class="flex-1">
                    <div class="flex items-center gap-4 mb-2">
                        <h1 class="text-3xl font-bold text-gray-800">{{ $umkm['name'] }}</h1>
                        @if($umkm['featured'])
                        <span class="px-3 py-1 rounded-full text-xs font-bold bg-gradient-to-r from-amber-400 to-orange-500 text-white shadow">
                            🔥 Unggulan
                        </span>
                        @endif
                    </div>
                    
                    <p class="text-lg text-gray-600 mb-4">{{ $umkm['owner'] }}</p>
                    
                    <div class="flex flex-wrap items-center gap-3 mb-6">
                        <span class="px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                            {{ $umkm['category'] }}
                        </span>
                        <span class="px-3 py-1 rounded-full text-sm font-medium bg-emerald-100 text-emerald-800">
                            {{ $umkm['products'] }} Produk
                        </span>
                    </div>
                    
                    <div class="flex flex-wrap gap-4">
                        <a href="tel:{{ $umkm['phone'] }}" class="contact-button flex items-center px-5 py-3 bg-white rounded-xl shadow-sm border border-gray-200 text-gray-700 font-medium">
                            <svg class="w-5 h-5 mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            Hubungi
                        </a>
                        
                        <a href="https://wa.me/{{ $umkm['phone'] }}" class="contact-button flex items-center px-5 py-3 bg-emerald-500 rounded-xl shadow-sm text-white font-medium">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Left Column -->
            <div class="lg:w-2/3">
                <!-- About Section -->
                <div class="bg-white rounded-2xl shadow-sm p-6 mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Tentang UMKM</h2>
                    <div class="prose max-w-none text-gray-600">
                        <p>Sambal Teri Kacang Crispy adalah UMKM lokal Malang yang berfokus pada produksi sambal khas dengan bahan baku terbaik. Kami menggunakan resep turun-temurun yang telah dimodernisasi tanpa menghilangkan cita rasa aslinya.</p>
                        <p>Dengan komitmen terhadap kualitas dan kebersihan, semua produk kami diproses secara higienis dan dikemas dengan teknologi vacuum untuk menjaga kesegaran. Kami telah beroperasi sejak 2015 dan terus berkembang dengan dukungan pelanggan setia.</p>
                    </div>
                </div>
                
                <!-- Gallery Section -->
                <div class="bg-white rounded-2xl shadow-sm p-6 mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Galeri</h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <div class="gallery-image aspect-square bg-gray-100 rounded-xl overflow-hidden">
                            <img src="https://source.unsplash.com/random/300x300/?sambal" 
                                 alt="Proses pembuatan sambal" 
                                 class="w-full h-full object-cover">
                        </div>
                        <div class="gallery-image aspect-square bg-gray-100 rounded-xl overflow-hidden">
                            <img src="https://source.unsplash.com/random/300x300/?packaging" 
                                 alt="Kemasan produk" 
                                 class="w-full h-full object-cover">
                        </div>
                        <div class="gallery-image aspect-square bg-gray-100 rounded-xl overflow-hidden">
                            <img src="https://source.unsplash.com/random/300x300/?workshop" 
                                 alt="Area produksi" 
                                 class="w-full h-full object-cover">
                        </div>
                        <div class="gallery-image aspect-square bg-gray-100 rounded-xl overflow-hidden">
                            <img src="https://source.unsplash.com/random/300x300/?chili" 
                                 alt="Bahan baku" 
                                 class="w-full h-full object-cover">
                        </div>
                        <div class="gallery-image aspect-square bg-gray-100 rounded-xl overflow-hidden">
                            <img src="https://source.unsplash.com/random/300x300/?market" 
                                 alt="Stand penjualan" 
                                 class="w-full h-full object-cover">
                        </div>
                        <div class="gallery-image aspect-square bg-gray-100 rounded-xl overflow-hidden">
                            <img src="https://source.unsplash.com/random/300x300/?team" 
                                 alt="Tim kami" 
                                 class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
                
                <!-- Products Section -->
                <div class="bg-white rounded-2xl shadow-sm p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-gray-800">Produk Unggulan</h2>
                        <a href="#" class="text-emerald-600 font-medium flex items-center">
                            Lihat Semua
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="product-card bg-white border border-gray-100 rounded-xl p-4">
                            <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden mb-4">
                                <img src="https://source.unsplash.com/random/400x400/?sambal,teri" 
                                     alt="Sambal Teri Kacang" 
                                     class="w-full h-full object-cover">
                            </div>
                            <h3 class="font-bold text-gray-800 mb-1">Sambal Teri Kacang Original</h3>
                            <p class="text-emerald-600 font-bold mb-3">Rp 35.000</p>
                            <button class="w-full py-2 bg-emerald-50 text-emerald-600 rounded-lg font-medium hover:bg-emerald-100 transition-colors">
                                Lihat Detail
                            </button>
                        </div>
                        <div class="product-card bg-white border border-gray-100 rounded-xl p-4">
                            <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden mb-4">
                                <img src="https://source.unsplash.com/random/400x400/?sambal,pedas" 
                                     alt="Sambal Extra Pedas" 
                                     class="w-full h-full object-cover">
                            </div>
                            <h3 class="font-bold text-gray-800 mb-1">Sambal Teri Kacang Extra Pedas</h3>
                            <p class="text-emerald-600 font-bold mb-3">Rp 38.000</p>
                            <button class="w-full py-2 bg-emerald-50 text-emerald-600 rounded-lg font-medium hover:bg-emerald-100 transition-colors">
                                Lihat Detail
                            </button>
                        </div>
                        <div class="product-card bg-white border border-gray-100 rounded-xl p-4">
                            <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden mb-4">
                                <img src="https://source.unsplash.com/random/400x400/?sambal,jar" 
                                     alt="Paket Hemat" 
                                     class="w-full h-full object-cover">
                            </div>
                            <h3 class="font-bold text-gray-800 mb-1">Paket Hemat 3 Sambal</h3>
                            <p class="text-emerald-600 font-bold mb-3">Rp 100.000</p>
                            <button class="w-full py-2 bg-emerald-50 text-emerald-600 rounded-lg font-medium hover:bg-emerald-100 transition-colors">
                                Lihat Detail
                            </button>
                        </div>
                        <div class="product-card bg-white border border-gray-100 rounded-xl p-4">
                            <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden mb-4">
                                <img src="https://source.unsplash.com/random/400x400/?gift,box" 
                                     alt="Paket Hadiah" 
                                     class="w-full h-full object-cover">
                            </div>
                            <h3 class="font-bold text-gray-800 mb-1">Paket Hadiah Spesial</h3>
                            <p class="text-emerald-600 font-bold mb-3">Rp 150.000</p>
                            <button class="w-full py-2 bg-emerald-50 text-emerald-600 rounded-lg font-medium hover:bg-emerald-100 transition-colors">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Column -->
            <div class="lg:w-1/3">
                <!-- Contact Info -->
                <div class="bg-white rounded-2xl shadow-sm p-6 mb-8 sticky top-4">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Informasi Kontak</h2>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-gray-500">Alamat</h3>
                                <p class="text-sm text-gray-800">Jl. Raya Tlogomas No. 246, Kec. Lowokwaru, Kota Malang, Jawa Timur</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-gray-500">Telepon</h3>
                                <p class="text-sm text-gray-800">{{ $umkm['phone'] }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-gray-500">Email</h3>
                                <p class="text-sm text-gray-800">{{ $umkm['email'] }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-gray-500">Jam Operasional</h3>
                                <p class="text-sm text-gray-800">Senin - Jumat: 08.00 - 17.00 WIB</p>
                                <p class="text-sm text-gray-800">Sabtu: 08.00 - 15.00 WIB</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6">
                        <h3 class="text-sm font-medium text-gray-500 mb-2">Sosial Media</h3>
                        <div class="flex space-x-3">
                            <a href="#" class="w-10 h-10 flex items-center justify-center bg-blue-100 rounded-full text-blue-500 hover:bg-blue-200 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 flex items-center justify-center bg-pink-100 rounded-full text-pink-500 hover:bg-pink-200 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 flex items-center justify-center bg-red-100 rounded-full text-red-500 hover:bg-red-200 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Location Map -->
                <div class="bg-white rounded-2xl shadow-sm p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Lokasi</h2>
                    <div class="aspect-video bg-gray-100 rounded-lg overflow-hidden">
                        <!-- Replace with actual map embed -->
                        <div class="w-full h-full flex items-center justify-center text-gray-400">
                            <svg class="w-12 h-12 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>Peta Lokasi</span>
                        </div>
                    </div>
                    <button class="w-full mt-4 py-2 bg-emerald-50 text-emerald-600 rounded-lg font-medium hover:bg-emerald-100 transition-colors">
                        Lihat Petunjuk Arah
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection