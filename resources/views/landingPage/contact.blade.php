@extends('core.landingPage')

@section('title', 'UMKM Kota Malang | Contact')

@section('content')
<!-- Hero Contact Section -->
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
                    Hubungi <span class="text-yellow-300">Kami</span>
                </h1>
                <p class="text-xl lg:text-2xl text-blue-100 max-w-3xl mx-auto">
                    Kami siap membantu Anda kapan saja
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex items-center text-sm text-gray-600 mb-4">
            <a href="index.html" class="hover:text-blue-600">Beranda</a>
            <span class="mx-2">/</span>
            <span class="text-gray-400">Kontak</span>
        </div>

        <div class="grid lg:grid-cols-2 gap-12">
            <div class="section-reveal">
                <h2 class="text-3xl font-bold text-gray-800 mb-8">
                    Kirim Pesan kepada Kami
                </h2>
                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 mb-2">Nama Lengkap</label>
                            <input
                                type="text"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:outline-none" />
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Email</label>
                            <input
                                type="email"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:outline-none" />
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2">Subjek</label>
                        <input
                            type="text"
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:outline-none" />
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2">Pesan</label>
                        <textarea
                            rows="5"
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:outline-none"></textarea>
                    </div>

                    <button
                        type="submit"
                        class="btn-gradient text-white px-6 py-3 rounded-xl font-medium">
                        Kirim Pesan
                    </button>
                </form>
            </div>

            <div class="section-reveal">
                <div class="bg-gray-50 rounded-2xl p-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-8">
                        Informasi Kontak
                    </h2>

                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-blue-600"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">
                                    Alamat Kantor
                                </h3>
                                <p class="text-gray-600">
                                    Jl. Tugu No. 1, Klojen<br />
                                    Kota Malang, Jawa Timur 65111
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone-alt text-green-600"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">
                                    Telepon & WhatsApp
                                </h3>
                                <p class="text-gray-600">
                                    +62 341 123 4567<br />
                                    WhatsApp: +62 812 3456 7890
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-purple-600"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">
                                    Email
                                </h3>
                                <p class="text-gray-600">
                                    info@umkmmalang.go.id<br />
                                    support@umkmmalang.go.id
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-clock text-orange-600"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">
                                    Jam Operasional
                                </h3>
                                <p class="text-gray-600">
                                    Senin - Jumat: 08:00 - 17:00 WIB<br />
                                    Sabtu: 08:00 - 12:00 WIB
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">
                            Media Sosial
                        </h3>
                        <div class="flex space-x-4">
                            <a
                                href="#"
                                class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors">
                                <i class="fab fa-facebook-f text-white"></i>
                            </a>
                            <a
                                href="#"
                                class="w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center hover:bg-pink-700 transition-colors">
                                <i class="fab fa-instagram text-white"></i>
                            </a>
                            <a
                                href="#"
                                class="w-10 h-10 bg-blue-400 rounded-full flex items-center justify-center hover:bg-blue-500 transition-colors">
                                <i class="fab fa-twitter text-white"></i>
                            </a>
                            <a
                                href="#"
                                class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition-colors">
                                <i class="fab fa-youtube text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 section-reveal">
            <div
                class="bg-gray-200 rounded-2xl h-96 flex items-center justify-center">
                <i class="fas fa-map-marker-alt text-4xl text-blue-600"></i>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">
                Pertanyaan yang Sering Diajukan
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Temukan jawaban atas pertanyaan umum seputar platform kami
            </p>
        </div>

        <div class="max-w-3xl mx-auto space-y-4">
            <div
                class="section-reveal bg-white rounded-2xl shadow-md overflow-hidden">
                <button
                    class="w-full flex justify-between items-center p-6 text-left">
                    <h3 class="text-lg font-semibold text-gray-800">
                        Bagaimana cara mendaftarkan UMKM saya?
                    </h3>
                    <i class="fas fa-chevron-down text-blue-600"></i>
                </button>
                <div class="px-6 pb-6 hidden">
                    <p class="text-gray-600">
                        Anda bisa mendaftarkan UMKM Anda dengan mengisi formulir
                        pendaftaran di halaman "Gabung UMKM". Setelah mengisi data
                        lengkap, tim kami akan memverifikasi dan mengaktifkan akun UMKM
                        Anda dalam 1-2 hari kerja.
                    </p>
                </div>
            </div>

            <div
                class="section-reveal bg-white rounded-2xl shadow-md overflow-hidden">
                <button
                    class="w-full flex justify-between items-center p-6 text-left">
                    <h3 class="text-lg font-semibold text-gray-800">
                        Apakah ada biaya untuk mendaftar?
                    </h3>
                    <i class="fas fa-chevron-down text-blue-600"></i>
                </button>
                <div class="px-6 pb-6 hidden">
                    <p class="text-gray-600">
                        Tidak, pendaftaran UMKM di platform kami sepenuhnya gratis. Kami
                        berkomitmen untuk mendukung perkembangan UMKM tanpa membebani
                        biaya.
                    </p>
                </div>
            </div>

            <div
                class="section-reveal bg-white rounded-2xl shadow-md overflow-hidden">
                <button
                    class="w-full flex justify-between items-center p-6 text-left">
                    <h3 class="text-lg font-semibold text-gray-800">
                        Bagaimana cara mempromosikan produk saya?
                    </h3>
                    <i class="fas fa-chevron-down text-blue-600"></i>
                </button>
                <div class="px-6 pb-6 hidden">
                    <p class="text-gray-600">
                        Setelah akun UMKM Anda aktif, Anda bisa mengunggah produk dengan
                        foto dan deskripsi yang menarik. Produk unggulan akan
                        ditampilkan di halaman depan secara berkala. Kami juga
                        menyediakan layanan promosi berbayar dengan jangkauan lebih
                        luas.
                    </p>
                </div>
            </div>

            <div
                class="section-reveal bg-white rounded-2xl shadow-md overflow-hidden">
                <button
                    class="w-full flex justify-between items-center p-6 text-left">
                    <h3 class="text-lg font-semibold text-gray-800">
                        Apakah ada pelatihan untuk UMKM?
                    </h3>
                    <i class="fas fa-chevron-down text-blue-600"></i>
                </button>
                <div class="px-6 pb-6 hidden">
                    <p class="text-gray-600">
                        Ya, kami secara rutin menyelenggarakan pelatihan gratis untuk
                        UMKM terdaftar, meliputi digital marketing, pengembangan produk,
                        manajemen keuangan, dan lainnya. Informasi pelatihan bisa
                        dilihat di halaman "Berita & Artikel".
                    </p>
                </div>
            </div>
        </div>

        <div class="text-center mt-8">
            <a
                href="faq.html"
                class="text-blue-600 hover:text-blue-800 font-medium">
                Lihat Semua FAQ <i class="fas fa-arrow-right ml-2"></i>
            </a>
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
                Butuh Bantuan Lebih Lanjut?
            </h2>
            <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                Hubungi tim support kami yang siap membantu Anda kapan saja
            </p>
            <button
                class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold text-lg hover:bg-blue-50 transition-all transform hover:scale-105">
                <i class="fas fa-headset mr-2"></i>
                Hubungi Support
            </button>
        </div>
    </div>
</section>
@endsection