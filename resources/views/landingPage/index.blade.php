@extends('core.landingPage')

@section('title', 'UMKM Kota Malang')

@section('content')
    <!-- Hero Section -->
    <section id="home"
        class="relative flex justify-center items-center overflow-hidden bg-white pb-16 md:pb-20 lg:pb-24">
        <!-- Background blur hijau & kuning -->
        <div
            class="absolute -top-20 -left-20 w-72 h-72 bg-green-300 rounded-full mix-blend-multiply filter blur-3xl opacity-40">
        </div>
        <div
            class="absolute top-40 -right-20 w-72 h-72 bg-yellow-300 rounded-full mix-blend-multiply filter blur-3xl opacity-40">
        </div>
        <div
            class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-96 h-96 bg-green-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30">
        </div>

        <div class="container max-w-screen-xl mx-auto px-4 md:px-8 lg:px-12">
            <div class="flex flex-col lg:flex-row items-center justify-center gap-x-20 relative z-10">
                <div class="flex-1">
                    <img class="max-w-lg mx-auto" src="{{ asset('/images/hero.png') }}" alt="">
                </div>
                <div class="flex-1">
                    <h1 class="font-extrabold text-5xl text-neutral-800 mb-6">
                        Discover Amazing <br>
                        <span class="bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">
                            Local Products
                        </span>
                    </h1>
                    <p class="text-neutral-600 mb-8">
                        Support local businesses and find unique products from Malang's finest UMKM.
                    </p>

                    <div class="flex gap-x-4 items-center mb-8">
                        <a href="#"
                            class="flex items-center justify-center gap-2 px-9 text-xs py-4 bg-gradient-to-tr from-green-800 to-green-500 rounded-full text-center text-white font-semibold">
                            <!-- Logo Kaca Pembesar -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                            Jelajahi Produk
                        </a>
                        <a href="#"
                            class="flex items-center justify-center gap-2 px-8 text-xs text-green-700 py-3 border-2 border-green-700 rounded-full text-center font-semibold">
                            <!-- Logo Toko -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zm13 15.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                            </svg>
                            Jelajahi UMKM
                        </a>
                    </div>
                    <!-- Statistik -->
                    <div class="flex gap-x-4 text-center">
                        <div class="bg-gradient-to-r from-green-600 to-emerald-600 text-white p-4 rounded-2xl">
                            <p class="text-lg font-extrabold">500+</p>
                            <p class="text-xs">UMKM Terdaftar</p>
                        </div>
                        <div class="bg-gradient-to-r from-green-600 to-emerald-600 text-white p-4 rounded-2xl">
                            <p class="text-lg font-extrabold">2000+</p>
                            <p class="text-xs">Produk Tersedia</p>
                        </div>
                        <div class="bg-gradient-to-r from-green-600 to-emerald-600 text-white p-4 rounded-2xl">
                            <p class="text-lg font-extrabold">10K+</p>
                            <p class="text-xs">Pelanggan Puas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Produk Unggulan -->
    <section class="py-16 md:py-20 lg:py-24 bg-white">
        <div class="container max-w-screen-xl mx-auto px-4 md:px-8 lg:px-12">
            <div class="text-center mb-12 md:mb-16 lg:mb-20 section-reveal">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-gray-800 mb-6">
                    Produk <span
                        class="bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Unggulan</span>
                </h2>
                <p class="text-base md:text-xl text-gray-600 max-w-3xl mx-auto">
                    Tiga produk terbaik dan paling populer dari UMKM Kota Malang
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach ($featuredProducts as $product)
                    <div
                        class="section-reveal border bg-white/60 border border-neutral-200 rounded-3xl overflow-hidden transition-all duration-300 transform hover:-translate-y-2">
                        <!-- Product Image -->
                        <div
                            class="h-48 bg-gradient-to-br from-red-200 to-red-300 flex items-center justify-center overflow-hidden">
                            @if ($product->photos->isNotEmpty())
                                <img src="{{ asset('storage/' . $product->photos->first()->file_path) }}"
                                    alt="{{ $product->name }}" class="w-full h-48 object-cover">
                            @else
                                <i class="fas fa-cookie-bite text-red-600 text-4xl"></i>
                            @endif
                        </div>

                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center mr-4">
                                    @if ($product->photos->isNotEmpty())
                                        <img src="{{ asset('storage/' . $product->photos->first()->file_path) }}"
                                            alt="{{ $product->name }}" class="w-full h-full object-cover rounded-lg">
                                    @else
                                        <i class="fas fa-cookie-bite text-red-600 text-lg"></i>
                                    @endif
                                </div>
                                <div>
                                    <div class="text-xs text-green-600 font-medium px-2 py-1 rounded">
                                        {{ $product->category->name }}
                                    </div>
                                    <div class="flex items-center gap-1 mt-1">
                                        <span class="text-lg font-bold text-emerald-600">Rp
                                            {{ number_format($product->price, 2, ',', '.') }}</span>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-4 line-clamp-2">{{ $product->name }}</h3>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $product->description }}</p>
                            <div class="flex items-center justify-between">
                                <a href="{{ route('products.show', $product->slug) }}"
                                    class="text-green-600 text-center w-full border border-green-700 mx-auto p-4 rounded-2xl text-sm font-semibold hover:text-green-700">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12 section-reveal">
                <a href="{{ route('products.index') }}"
                    class="bg-gradient-to-r from-green-500 to-emerald-500 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-xl transition-all">
                    Lihat Semua Produk
                    <i class="fas fa-shopping-bag ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>

    <section class="py-16 md:py-20 lg:py-24 bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50">
        <div class="container max-w-screen-xl mx-auto px-4 md:px-8 lg:px-12">
            <div class="text-center mb-12 md:mb-16 lg:mb-20 section-reveal">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-gray-800 mb-6">
                    Produk <span
                        class="bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Terbaru &
                        Terfavorit</span>
                </h2>
                <p class="text-base md:text-xl text-gray-600 max-w-3xl mx-auto mb-8">
                    Koleksi terbaru dan produk paling diminati dari UMKM Kota Malang
                </p>

                <!-- Filter Buttons -->
                <div class="flex flex-wrap justify-center gap-4 mb-8">
                    <button id="filterNew"
                        class="filter-btn bg-white/70 text-gray-700 border-2 border-gray-300 px-6 py-3 rounded-full font-semibold transition-all duration-300 hover:border-green-600 hover:text-green-600 active">
                        Produk Terbaru
                    </button>
                    <button id="filterFavorite"
                        class="filter-btn bg-white/70 text-gray-700 border-2 border-gray-300 px-6 py-3 rounded-full font-semibold transition-all duration-300 hover:border-green-600 hover:text-green-600">
                        Produk Favorit
                    </button>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6" id="productGrid">
                @foreach ($favoriteProducts as $product)
                    <div class="section-reveal group product-card" data-category="favorit">
                        <div
                            class="bg-white/60 border border-white/30 rounded-2xl overflow-hidden transition-all duration-500 transform hover:-translate-y-2 hover:border-green-200 cursor-pointer shadow-lg">
                            <div
                                class="h-48 bg-gradient-to-br from-green-200 to-green-300 flex items-center justify-center relative">
                                <!-- Menampilkan gambar produk favorit pertama -->
                                @if ($product->photos->isNotEmpty())
                                    <img src="{{ asset('storage/' . $product->photos->first()->file_path) }}"
                                        alt="{{ $product->name }}" class="w-full h-48 object-cover">
                                @else
                                    <i class="fas fa-star text-green-600 text-4xl"></i>
                                    <!-- Fallback ke ikon jika tidak ada foto -->
                                @endif
                                <span
                                    class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 rounded text-xs font-bold">FAVORIT</span>
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-bold text-gray-800 mb-3">{{ $product->name }}</h3>
                                <p class="text-gray-600 text-sm mb-4">{{ $product->description }}</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-lg font-bold text-emerald-600">Rp
                                        {{ number_format($product->price, 2, ',', '.') }}</span>
                                    <a href="{{ route('products.show', $product->slug) }}"
                                        class="bg-green-600 text-white px-3 py-2 rounded-full text-xs hover:bg-green-700">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12 section-reveal">
                <a href="{{ route('products.index') }}"
                    class="bg-gradient-to-r from-green-500 to-emerald-500 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-xl transition-all">
                    Lihat Semua Produk
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Agenda Section -->
    <section class="py-16 md:py-20 lg:py-24 bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50">
        <div class="container max-w-screen-xl mx-auto px-4 md:px-8 lg:px-12">
            <div class="text-center mb-12 md:mb-16 lg:mb-20 section-reveal">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-gray-800 mb-6">
                    Agenda <span
                        class="bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Terbaru</span>
                </h2>
                <p class="text-base md:text-xl text-gray-600 max-w-3xl mx-auto">
                    Event dan kegiatan terbaru untuk pengembangan UMKM Kota Malang
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
                @foreach ($events as $event)
                    <div
                        class="section-reveal bg-white/60 border border-white/30 rounded-3xl shadow-lg overflow-hidden border-l-4 border-green-500 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-calendar-alt text-green-600 text-xl"></i>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-500">{{ $event->start_time->format('d F Y') }}</div>
                                    <div class="text-sm font-semibold text-green-600">
                                        {{ $event->start_time->format('H:i') }} - {{ $event->end_time->format('H:i') }}
                                        WIB</div>
                                </div>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-4">{{ $event->title }}</h3>
                            <p class="text-gray-600 text-sm mb-4">{{ $event->content }}</p>
                            <div class="flex items-center justify-between">
                                <a href="{{ route('events.show', $event->slug) }}"
                                    class="text-green-600 text-sm font-semibold hover:text-green-700">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12 section-reveal">
                <a href="{{ route('events') }}"
                    class="bg-gradient-to-r from-green-500 to-emerald-500 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-xl transition-all">
                    Lihat Semua Agenda
                    <i class="fas fa-calendar-plus ml-2"></i>
                </a>
            </div>
        </div>
    </section>


    <!-- News Section -->
    <section id="news" class="py-16 md:py-20 lg:py-24 bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50">
        <div class="container max-w-screen-xl mx-auto px-4 md:px-8 lg:px-12">
            <div class="text-center mb-12 md:mb-16 lg:mb-20 section-reveal">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-gray-800 mb-6">
                    Berita & <span
                        class="bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Artikel
                        Terbaru</span>
                </h2>
                <p class="text-base md:text-xl text-gray-600 max-w-3xl mx-auto mb-8">
                    Informasi terbaru seputar perkembangan UMKM dan tips bisnis untuk memajukan usaha Anda
                </p>
            </div>

            <div class="grid lg:grid-cols-2 xl:grid-cols-4 gap-6 mb-12">
                @foreach ($articles as $article)
                    <div
                        class="section-reveal group bg-white/60 border border-white/30 rounded-3xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="h-48 bg-gradient-to-br from-blue-200 to-blue-300 flex items-center justify-center">
                            @if ($article->thumbnail)
                                <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}"
                                    class="w-full h-full object-cover">
                            @else
                                <i class="fas fa-newspaper text-blue-600 text-4xl"></i>
                            @endif
                        </div>
                        <div class="p-6">
                            <div class="flex items-center space-x-3 mb-4">
                                <span
                                    class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm font-medium">{{ $article->category->name }}</span>
                                <span class="text-gray-500 text-sm">{{ $article->created_at->diffForHumans() }}</span>
                            </div>
                            <h3
                                class="text-lg font-bold text-gray-800 mb-4 line-clamp-2 group-hover:text-green-600 transition-colors">
                                {{ $article->title }}
                            </h3>
                            <p class="text-gray-600 mb-4 text-sm line-clamp-3">
                                {{ $article->content }}
                            </p>
                            <a href="{{ route('articles.show', $article->slug) }}"
                                class="text-green-600 font-semibold hover:text-green-700 transition-colors text-sm">
                                Baca Selengkapnya
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- View All Button -->
            <div class="text-center section-reveal">
                <a href="{{ route('articles.index') }}"
                    class="bg-gradient-to-r from-green-500 to-emerald-500 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-xl transition-all">
                    Lihat Semua Berita
                    <i class="fas fa-arrow-right ml-3"></i>
                </a>
            </div>
        </div>
    </section>


    <!-- Join UMKM Section -->
    <section
        class="py-16 md:py-20 lg:py-24 bg-gradient-to-br from-green-400 via-emerald-500 to-teal-600 relative overflow-hidden">
        <!-- Simplified background elements -->
        <div class="absolute inset-0 opacity-20 pointer-events-none">
            <div class="absolute top-10 right-10 w-40 md:w-64 h-40 md:h-64 bg-white rounded-full"></div>
        </div>

        <div class="container max-w-screen-xl mx-auto px-4 md:px-8 lg:px-12 relative z-10">
            <div class="text-center text-white section-reveal">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-black mb-8">
                    Bergabung dengan <span class="text-yellow-300">Komunitas UMKM</span>
                </h2>
                <p class="text-base md:text-xl text-green-100 mb-12 max-w-3xl mx-auto">
                    Daftarkan usaha Anda dan jadilah bagian dari ekosistem UMKM terbesar di Kota Malang.
                    Dapatkan akses ke ribuan pelanggan potensial.
                </p>

                <div class="grid md:grid-cols-3 gap-6 mb-12">
                    <div class="bg-white/20 border border-white/30 rounded-3xl p-8 text-center">
                        <div
                            class="w-16 h-16 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-user-plus text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Daftar Gratis</h3>
                        <p class="text-green-100">Pendaftaran mudah dan tanpa biaya untuk UMKM</p>
                    </div>

                    <div class="bg-white/20 border border-white/30 rounded-3xl p-8 text-center">
                        <div
                            class="w-16 h-16 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-chart-line text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Tingkatkan Penjualan</h3>
                        <p class="text-green-100">Jangkauan pasar yang lebih luas untuk produk Anda</p>
                    </div>

                    <div class="bg-white/20 border border-white/30 rounded-3xl p-8 text-center">
                        <div
                            class="w-16 h-16 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-handshake text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Dukungan Penuh</h3>
                        <p class="text-green-100">Bantuan teknis dan pelatihan bisnis berkelanjutan</p>
                    </div>
                </div>

                <a href="{{ route('pengajuan-umkm.create') }}"
                    class="bg-white text-green-600 px-12 py-4 rounded-full font-bold text-xl hover:bg-green-50 transition-all transform hover:scale-105">
                    <i class="fas fa-rocket mr-3"></i>
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 md:py-20 lg:py-24 bg-white">
        <div class="container max-w-screen-xl mx-auto px-4 md:px-8 lg:px-12">
            <div class="text-center mb-12 md:mb-16 lg:mb-20 section-reveal">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                    Kontak & <span
                        class="bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Bantuan</span>
                </h2>
                <p class="text-base md:text-xl text-gray-600 max-w-3xl mx-auto">
                    Ada pertanyaan? Tim kami siap membantu Anda 24/7
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-16">
                <div class="section-reveal">
                    <div class="space-y-8">
                        <div class="flex items-start space-x-6">
                            <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-green-600 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Alamat Kantor</h3>
                                <p class="text-gray-600">
                                    Jl. Tugu No. 1, Klojen<br>
                                    Kota Malang, Jawa Timur 65111
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-6">
                            <div
                                class="w-16 h-16 bg-emerald-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone text-emerald-600 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Telepon</h3>
                                <p class="text-gray-600">
                                    +62 341 123 4567<br>
                                    WhatsApp: +62 812 3456 7890
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-6">
                            <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-blue-600 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Email</h3>
                                <p class="text-gray-600">
                                    info@umkmmalang.go.id<br>
                                    support@umkmmalang.go.id
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-6">
                            <div
                                class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-clock text-orange-600 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Jam Operasional</h3>
                                <p class="text-gray-600">
                                    Senin - Jumat: 08:00 - 17:00 WIB<br>
                                    Sabtu: 08:00 - 12:00 WIB
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-reveal">
                    <form class="bg-gray-50 rounded-3xl p-8 space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <input type="text" placeholder="Nama Lengkap"
                                class="w-full px-6 py-4 rounded-2xl border border-gray-200 focus:border-green-500 focus:outline-none">
                        </div>

                        <input type="text" placeholder="Subjek"
                            class="w-full px-6 py-4 rounded-2xl border border-gray-200 focus:border-green-500 focus:outline-none">

                        <textarea rows="6" placeholder="Pesan Anda"
                            class="w-full px-6 py-4 rounded-2xl border border-gray-200 focus:border-green-500 focus:outline-none resize-none"></textarea>

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-green-500 to-emerald-500 text-white py-4 rounded-2xl font-semibold text-lg">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Styles -->
    <style>
        /* Animation optimizations */
        .section-reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease-out, transform 0.5s ease-out;
        }

        .section-reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Blob animation - simplified */
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

        /* Filter button active state */
        .filter-btn.active {
            background-color: rgb(34 197 94);
            color: white;
            border-color: rgb(34 197 94);
        }

        /* Filtered products */
        .product-card.filtered-out {
            display: none;
        }

        /* Search section specific styles */
        .backdrop-blur-sm {
            backdrop-filter: blur(8px);
        }

        /* Popular tags hover effect */
        .popular-tag {
            transition: all 0.3s ease;
        }

        .popular-tag:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(34, 197, 94, 0.3);
        }

        /* Performance optimizations */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }

        /* Basic hover effects */
        .transform-hover:hover {
            transform: scale(1.05);
        }

        .transition-all {
            transition: all 0.3s ease;
        }

        /* Custom select arrow */
        select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
        }
    </style>

    <!-- Enhanced JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Intersection Observer for section reveals
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -100px 0px'
            });

            // Observe all sections
            document.querySelectorAll('.section-reveal').forEach(section => {
                observer.observe(section);
            });

            // Product filter functionality
            const filterButtons = document.querySelectorAll('.filter-btn');
            const productCards = document.querySelectorAll('.product-card');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Update active button
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    // Determine filter value
                    const filterValue = this.id === 'filterNew' ? 'baru' :
                        this.id === 'filterFavorite' ? 'favorit' : 'all';

                    // Filter products
                    productCards.forEach(card => {
                        if (filterValue === 'all' || card.dataset.category ===
                            filterValue) {
                            card.classList.remove('filtered-out');
                        } else {
                            card.classList.add('filtered-out');
                        }
                    });
                });
            });

            // Initialize with first filter active
            document.querySelector('#filterNew').classList.add('active');

            // Search functionality
            const searchForm = document.getElementById('searchForm');
            const searchInput = document.getElementById('searchInput');
            const categoryFilter = document.getElementById('categoryFilter');
            const priceFilter = document.getElementById('priceFilter');
            const locationFilter = document.getElementById('locationFilter');
            const popularTags = document.querySelectorAll('.popular-tag');

            // Handle search form submission
            searchForm.addEventListener('submit', function(e) {
                e.preventDefault();
                performSearch();
            });

            // Handle popular tag clicks
            popularTags.forEach(tag => {
                tag.addEventListener('click', function() {
                    searchInput.value = this.textContent.trim();
                    performSearch();
                });
            });

            // Real-time search on input change
            searchInput.addEventListener('input', debounce(performSearch, 300));

            // Filter change handlers
            categoryFilter.addEventListener('change', performSearch);
            priceFilter.addEventListener('change', performSearch);
            locationFilter.addEventListener('change', performSearch);

            function performSearch() {
                const searchTerm = searchInput.value.toLowerCase().trim();
                const category = categoryFilter.value;
                const priceRange = priceFilter.value;
                const location = locationFilter.value;

                // Here you would typically make an API call to search
                // For now, we'll just log the search parameters
                console.log('Searching for:', {
                    term: searchTerm,
                    category: category,
                    priceRange: priceRange,
                    location: location
                });

                // Show loading state
                const searchButton = searchForm.querySelector('button[type="submit"]');
                const originalText = searchButton.innerHTML;
                searchButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-3"></i>Mencari...';

                // Simulate API call
                setTimeout(() => {
                    searchButton.innerHTML = originalText;

                    // Here you would handle the search results
                    if (searchTerm || category || priceRange || location) {
                        showSearchResults();
                    }
                }, 1000);
            }

            function showSearchResults() {
                // Scroll to results section (products section)
                document.querySelector('.bg-white.py-16').scrollIntoView({
                    behavior: 'smooth'
                });
            }

            // Debounce function for search input
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

            // Add search input focus effects
            searchInput.addEventListener('focus', function() {
                this.parentElement.classList.add('ring-2', 'ring-green-500', 'ring-opacity-50');
            });

            searchInput.addEventListener('blur', function() {
                this.parentElement.classList.remove('ring-2', 'ring-green-500', 'ring-opacity-50');
            });

            // Enhanced search suggestions (mock data)
            const searchSuggestions = [
                'Keripik Tempe Original',
                'Batik Modern Malang',
                'Kopi Arabika Premium',
                'Tas Rajut Handmade',
                'Jamu Tradisional',
                'Kerajinan Bambu',
                'Kue Tradisional',
                'Produk Herbal'
            ];

            // Simple autocomplete functionality
            let suggestionBox = null;

            searchInput.addEventListener('input', function() {
                const value = this.value.toLowerCase();

                // Remove existing suggestions
                if (suggestionBox) {
                    suggestionBox.remove();
                    suggestionBox = null;
                }

                if (value.length > 2) {
                    const filtered = searchSuggestions.filter(item =>
                        item.toLowerCase().includes(value)
                    );

                    if (filtered.length > 0) {
                        suggestionBox = document.createElement('div');
                        suggestionBox.className =
                            'absolute top-full left-0 right-0 bg-white border border-gray-200 rounded-lg shadow-lg z-50 mt-1';

                        filtered.slice(0, 5).forEach(suggestion => {
                            const item = document.createElement('div');
                            item.className =
                                'px-4 py-3 hover:bg-gray-50 cursor-pointer border-b border-gray-100 last:border-b-0';
                            item.textContent = suggestion;
                            item.addEventListener('click', () => {
                                searchInput.value = suggestion;
                                suggestionBox.remove();
                                suggestionBox = null;
                                performSearch();
                            });
                            suggestionBox.appendChild(item);
                        });

                        this.parentElement.appendChild(suggestionBox);
                    }
                }
            });

            // Close suggestions when clicking outside
            document.addEventListener('click', function(e) {
                if (!searchInput.contains(e.target) && suggestionBox) {
                    suggestionBox.remove();
                    suggestionBox = null;
                }
            });
        });
    </script>
@endsection
