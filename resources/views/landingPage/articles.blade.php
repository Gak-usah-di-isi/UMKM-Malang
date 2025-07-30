@extends('core.landingPage')

@section('title', 'UMKM Kota Malang | Articles')

@section('content')
<!-- Hero News Section -->
<section
    class="min-h-[40vh] gradient-bg flex items-center relative overflow-hidden pt-20">
    <div class="absolute inset-0">
        <div
            class="absolute top-20 left-10 w-72 h-72 bg-white opacity-10 rounded-full animate-float"></div>
        <div
            class="absolute bottom-20 right-10 w-96 h-96 bg-white opacity-5 rounded-full animate-bounce-slow"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center text-white py-12">
            <div class="section-reveal">
                <h1 class="text-4xl lg:text-5xl font-bold leading-tight mb-6">
                    Berita & <span class="text-yellow-300">Artikel</span>
                </h1>
                <p class="text-xl lg:text-2xl text-blue-100 max-w-3xl mx-auto">
                    Informasi terbaru seputar perkembangan UMKM dan tips bisnis
                </p>
            </div>
        </div>
    </div>
</section>

<!-- News Filter Section -->
<section class="py-8 bg-white">
    <div class="container mx-auto px-6">
        <div class="bg-white rounded-2xl shadow-md p-6">
            <div class="grid md:grid-cols-4 gap-4">
                <div class="md:col-span-2">
                    <input
                        type="text"
                        placeholder="Cari berita atau artikel..."
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:outline-none" />
                </div>
                <div>
                    <select
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:outline-none">
                        <option value="">Semua Kategori</option>
                        <option value="tips">Tips Bisnis</option>
                        <option value="event">Event</option>
                        <option value="kisah">Kisah Sukses</option>
                        <option value="pelatihan">Pelatihan</option>
                    </select>
                </div>
                <div>
                    <button
                        class="w-full btn-gradient text-white px-4 py-3 rounded-xl font-medium">
                        <i class="fas fa-search mr-2"></i>
                        Cari
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Grid Section -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6">
        <div
            class="flex flex-col md:flex-row justify-between items-center mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-4 md:mb-0">
                Artikel Terbaru
            </h2>
            <div class="flex items-center space-x-4">
                <span class="text-gray-600">Kategori:</span>
                <select
                    class="px-4 py-2 rounded-xl border border-gray-200 focus:border-blue-500 focus:outline-none">
                    <option value="semua">Semua</option>
                    <option value="tips">Tips Bisnis</option>
                    <option value="event">Event</option>
                    <option value="kisah">Kisah Sukses</option>
                    <option value="pelatihan">Pelatihan</option>
                </select>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Article 1 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Digital Marketing"
                        class="w-full h-48 object-cover" />
                    <div
                        class="absolute bottom-0 left-0 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-tr-lg">
                        Tips Bisnis
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <i class="far fa-calendar-alt mr-2"></i>
                        <span>2 hari lalu</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">
                        5 Strategi Digital Marketing untuk UMKM
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Pelajari strategi digital marketing yang efektif untuk
                        meningkatkan penjualan produk UMKM di era digital saat ini.
                        Mulai dari optimasi media sosial hingga teknik SEO sederhana.
                    </p>
                    <a
                        href="news-detail.html"
                        class="text-blue-600 hover:text-blue-800 font-medium">
                        Baca Selengkapnya <i class="fas fa-chevron-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Article 2 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Pelatihan UMKM"
                        class="w-full h-48 object-cover" />
                    <div
                        class="absolute bottom-0 left-0 bg-green-600 text-white text-xs font-bold px-3 py-1 rounded-tr-lg">
                        Event
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <i class="far fa-calendar-alt mr-2"></i>
                        <span>1 minggu lalu</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">
                        Pelatihan Digital Marketing Gratis untuk UMKM Malang
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Dinas Koperasi dan UMKM Kota Malang akan mengadakan pelatihan
                        digital marketing gratis bagi pelaku UMKM. Daftarkan diri Anda
                        sekarang sebelum kuota penuh!
                    </p>
                    <a
                        href="news-detail.html"
                        class="text-blue-600 hover:text-blue-800 font-medium">
                        Baca Selengkapnya <i class="fas fa-chevron-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Article 3 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Kisah Sukses"
                        class="w-full h-48 object-cover" />
                    <div
                        class="absolute bottom-0 left-0 bg-purple-600 text-white text-xs font-bold px-3 py-1 rounded-tr-lg">
                        Kisah Sukses
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <i class="far fa-calendar-alt mr-2"></i>
                        <span>3 hari lalu</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">
                        Dari Dapur Kecil Hingga Ekspor: Kisah Sukses UMKM Keripik Tempe
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Bermodal nekat dan tekad kuat, Bu Sari berhasil mengembangkan
                        usaha keripik tempe rumahan hingga bisa menembus pasar ekspor.
                        Simak perjalanan inspiratifnya.
                    </p>
                    <a
                        href="news-detail.html"
                        class="text-blue-600 hover:text-blue-800 font-medium">
                        Baca Selengkapnya <i class="fas fa-chevron-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Article 4 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Pembukuan UMKM"
                        class="w-full h-48 object-cover" />
                    <div
                        class="absolute bottom-0 left-0 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-tr-lg">
                        Tips Bisnis
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <i class="far fa-calendar-alt mr-2"></i>
                        <span>5 hari lalu</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">
                        Pentingnya Pembukuan Sederhana untuk UMKM
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Pembukuan yang rapi adalah kunci perkembangan usaha. Pelajari
                        cara membuat pembukuan sederhana yang efektif untuk UMKM dengan
                        modal minim.
                    </p>
                    <a
                        href="news-detail.html"
                        class="text-blue-600 hover:text-blue-800 font-medium">
                        Baca Selengkapnya <i class="fas fa-chevron-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Article 5 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Pameran UMKM"
                        class="w-full h-48 object-cover" />
                    <div
                        class="absolute bottom-0 left-0 bg-green-600 text-white text-xs font-bold px-3 py-1 rounded-tr-lg">
                        Event
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <i class="far fa-calendar-alt mr-2"></i>
                        <span>2 minggu lalu</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">
                        Pameran UMKM Malang 2023: Peluang Emas Perluas Jaringan
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Pameran UMKM Malang 2023 akan digelar bulan depan dengan peserta
                        dari berbagai sektor. Ini kesempatan emas untuk memperluas
                        jaringan dan pasar.
                    </p>
                    <a
                        href="news-detail.html"
                        class="text-blue-600 hover:text-blue-800 font-medium">
                        Baca Selengkapnya <i class="fas fa-chevron-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Article 6 -->
            <div
                class="section-reveal card-hover bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Kemasan Produk"
                        class="w-full h-48 object-cover" />
                    <div
                        class="absolute bottom-0 left-0 bg-purple-600 text-white text-xs font-bold px-3 py-1 rounded-tr-lg">
                        Kisah Sukses
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <i class="far fa-calendar-alt mr-2"></i>
                        <span>1 minggu lalu</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">
                        Inovasi Kemasan yang Meningkatkan Penjualan Produk UMKM
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Kisah inspiratif UMKM keripik buah yang berhasil meningkatkan
                        penjualan hingga 300% hanya dengan mengubah strategi kemasan
                        produknya.
                    </p>
                    <a
                        href="news-detail.html"
                        class="text-blue-600 hover:text-blue-800 font-medium">
                        Baca Selengkapnya <i class="fas fa-chevron-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-12">
            <nav class="flex items-center space-x-2">
                <a
                    href="#"
                    class="px-4 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a
                    href="#"
                    class="px-4 py-2 border border-blue-500 bg-blue-500 text-white rounded-lg font-medium">1</a>
                <a
                    href="#"
                    class="px-4 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100">2</a>
                <a
                    href="#"
                    class="px-4 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100">3</a>
                <span class="px-4 py-2 text-gray-600">...</span>
                <a
                    href="#"
                    class="px-4 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100">5</a>
                <a
                    href="#"
                    class="px-4 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </nav>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 gradient-bg relative overflow-hidden">
    <div class="absolute inset-0">
        <div
            class="absolute top-10 right-10 w-64 h-64 bg-white opacity-10 rounded-full animate-float"></div>
        <div
            class="absolute bottom-10 left-10 w-80 h-80 bg-white opacity-5 rounded-full animate-bounce-slow"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center text-white">
            <h2 class="text-3xl lg:text-4xl font-bold mb-6">
                Ingin UMKM Anda Tampil di Berita Kami?
            </h2>
            <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                Kirim cerita inspiratif tentang perkembangan usaha Anda dan dapatkan
                kesempatan untuk ditampilkan di platform kami.
            </p>
            <button
                class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold text-lg hover:bg-blue-50 transition-all transform hover:scale-105">
                <i class="fas fa-paper-plane mr-2"></i>
                Kirim Cerita Anda
            </button>
        </div>
    </div>
</section>
@endsection