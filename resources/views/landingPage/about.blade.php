@extends('core.landingPage')

@section('title', 'UMKM Kota Malang | About')

@section('content')
<!-- Hero About Section -->
<section
    class="min-h-[60vh] gradient-bg flex items-center relative overflow-hidden pt-20">
    <div class="absolute inset-0">
        <div
            class="absolute top-20 left-10 w-72 h-72 bg-white opacity-10 rounded-full animate-float"></div>
        <div
            class="absolute bottom-20 right-10 w-96 h-96 bg-white opacity-5 rounded-full animate-bounce-slow"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center text-white py-16">
            <div class="section-reveal">
                <h1 class="text-5xl lg:text-6xl font-bold leading-tight mb-6">
                    Tentang <span class="text-yellow-300">Kami</span>
                </h1>
                <p class="text-xl lg:text-2xl text-blue-100 max-w-3xl mx-auto">
                    Platform Katalog UMKM Kota Malang - Memberdayakan usaha kecil dan
                    menengah untuk tumbuh bersama
                </p>
            </div>
        </div>
    </div>
</section>

<!-- About Content Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="section-reveal">
                <div
                    class="w-full h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-3xl flex items-center justify-center">
                    <div class="text-center">
                        <i
                            class="fas fa-city text-6xl text-blue-600 mb-4 opacity-50"></i>
                        <p class="text-xl text-gray-600">Kota Malang</p>
                        <p class="text-sm text-gray-500">Mendukung UMKM Lokal</p>
                    </div>
                </div>
            </div>

            <div class="section-reveal">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-8">
                    Siapa <span class="text-gradient">Kami?</span>
                </h2>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Platform Katalog UMKM Kota Malang adalah inisiatif Pemerintah Kota
                    Malang bersama dengan berbagai stakeholder lokal untuk mendukung
                    dan mempromosikan produk-produk unggulan dari pelaku usaha mikro,
                    kecil, dan menengah di Kota Malang.
                </p>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Kami hadir sebagai jembatan antara UMKM dengan pasar yang lebih
                    luas, baik lokal maupun nasional, dengan memanfaatkan teknologi
                    digital untuk memperluas jangkauan pemasaran.
                </p>

                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-gray-50 rounded-2xl p-6">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-calendar-check text-blue-600"></i>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800">Didirikan</h3>
                        </div>
                        <p class="text-gray-600">2020</p>
                    </div>

                    <div class="bg-gray-50 rounded-2xl p-6">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-store text-green-600"></i>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800">
                                UMKM Terdaftar
                            </h3>
                        </div>
                        <p class="text-gray-600">500+</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16 section-reveal">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                Visi & <span class="text-gradient">Misi</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Landasan filosofis yang menjadi dasar setiap langkah kami
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8">
            <div
                class="section-reveal card-hover bg-white rounded-3xl shadow-lg p-8">
                <div class="flex items-start mb-6">
                    <div
                        class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0 mr-6">
                        <i class="fas fa-bullseye text-blue-600 text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Visi Kami</h3>
                        <p class="text-gray-600">
                            Menjadi platform terdepan dalam mendukung pertumbuhan UMKM di
                            Indonesia melalui digitalisasi dan perluasan akses pasar,
                            serta menjadi wadah kolaborasi antara pelaku usaha,
                            pemerintah, dan masyarakat.
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="section-reveal card-hover bg-white rounded-3xl shadow-lg p-8">
                <div class="flex items-start mb-6">
                    <div
                        class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0 mr-6">
                        <i class="fas fa-tasks text-green-600 text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Misi Kami</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Memberdayakan UMKM lokal melalui pemanfaatan teknologi
                                    digital</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Menghubungkan pelaku UMKM dengan pasar yang lebih
                                    luas</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Menyediakan akses terhadap pelatihan dan sumber daya
                                    bisnis</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Meningkatkan daya saing produk UMKM di pasar global</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16 section-reveal">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                Nilai <span class="text-gradient">Kami</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Prinsip-prinsip yang memandu setiap tindakan dan keputusan kami
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div
                class="section-reveal card-hover bg-white rounded-3xl shadow-lg p-8 text-center">
                <div
                    class="w-20 h-20 bg-gradient-to-r from-red-400 to-pink-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-hands-helping text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Kolaborasi</h3>
                <p class="text-gray-600">
                    Kami percaya pada kekuatan kerja sama untuk mencapai hasil yang
                    lebih besar
                </p>
            </div>

            <div
                class="section-reveal card-hover bg-white rounded-3xl shadow-lg p-8 text-center">
                <div
                    class="w-20 h-20 bg-gradient-to-r from-blue-400 to-indigo-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-lightbulb text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Inovasi</h3>
                <p class="text-gray-600">
                    Terus mencari cara baru untuk meningkatkan nilai bagi UMKM
                </p>
            </div>

            <div
                class="section-reveal card-hover bg-white rounded-3xl shadow-lg p-8 text-center">
                <div
                    class="w-20 h-20 bg-gradient-to-r from-green-400 to-teal-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-shield-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Integritas</h3>
                <p class="text-gray-600">
                    Bertindak jujur dan transparan dalam semua aspek
                </p>
            </div>

            <div
                class="section-reveal card-hover bg-white rounded-3xl shadow-lg p-8 text-center">
                <div
                    class="w-20 h-20 bg-gradient-to-r from-purple-400 to-pink-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-heart text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Dampak Sosial</h3>
                <p class="text-gray-600">
                    Fokus pada penciptaan manfaat nyata bagi masyarakat
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16 section-reveal">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                Tim <span class="text-gradient">Kami</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Orang-orang berdedikasi di balik kesuksesan platform ini
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div
                class="section-reveal card-hover bg-white rounded-3xl shadow-lg overflow-hidden text-center">
                <div
                    class="h-64 bg-gradient-to-br from-blue-200 to-blue-300 flex items-center justify-center">
                    <i class="fas fa-user-tie text-blue-600 text-6xl"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-1">Budi Santoso</h3>
                    <p class="text-blue-600 font-medium mb-4">Project Leader</p>
                    <div class="flex justify-center space-x-2">
                        <a
                            href="#"
                            class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition-colors">
                            <i class="fab fa-linkedin-in text-blue-600 text-sm"></i>
                        </a>
                        <a
                            href="#"
                            class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center hover:bg-green-200 transition-colors">
                            <i class="fas fa-envelope text-green-600 text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div
                class="section-reveal card-hover bg-white rounded-3xl shadow-lg overflow-hidden text-center">
                <div
                    class="h-64 bg-gradient-to-br from-purple-200 to-purple-300 flex items-center justify-center">
                    <i class="fas fa-laptop-code text-purple-600 text-6xl"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-1">Ani Wijaya</h3>
                    <p class="text-blue-600 font-medium mb-4">Tech Lead</p>
                    <div class="flex justify-center space-x-2">
                        <a
                            href="#"
                            class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition-colors">
                            <i class="fab fa-linkedin-in text-blue-600 text-sm"></i>
                        </a>
                        <a
                            href="#"
                            class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center hover:bg-green-200 transition-colors">
                            <i class="fas fa-envelope text-green-600 text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div
                class="section-reveal card-hover bg-white rounded-3xl shadow-lg overflow-hidden text-center">
                <div
                    class="h-64 bg-gradient-to-br from-green-200 to-green-300 flex items-center justify-center">
                    <i class="fas fa-chart-line text-green-600 text-6xl"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-1">Citra Dewi</h3>
                    <p class="text-blue-600 font-medium mb-4">Marketing</p>
                    <div class="flex justify-center space-x-2">
                        <a
                            href="#"
                            class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition-colors">
                            <i class="fab fa-linkedin-in text-blue-600 text-sm"></i>
                        </a>
                        <a
                            href="#"
                            class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center hover:bg-green-200 transition-colors">
                            <i class="fas fa-envelope text-green-600 text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div
                class="section-reveal card-hover bg-white rounded-3xl shadow-lg overflow-hidden text-center">
                <div
                    class="h-64 bg-gradient-to-br from-red-200 to-red-300 flex items-center justify-center">
                    <i class="fas fa-users text-red-600 text-6xl"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-1">
                        Dedi Kurniawan
                    </h3>
                    <p class="text-blue-600 font-medium mb-4">UMKM Relations</p>
                    <div class="flex justify-center space-x-2">
                        <a
                            href="#"
                            class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition-colors">
                            <i class="fab fa-linkedin-in text-blue-600 text-sm"></i>
                        </a>
                        <a
                            href="#"
                            class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center hover:bg-green-200 transition-colors">
                            <i class="fas fa-envelope text-green-600 text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partners Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16 section-reveal">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                Mitra <span class="text-gradient">Kami</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Organisasi dan institusi yang mendukung platform ini
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            <div
                class="section-reveal bg-gray-50 rounded-2xl p-8 flex items-center justify-center h-32">
                <i class="fas fa-university text-4xl text-blue-600"></i>
            </div>
            <div
                class="section-reveal bg-gray-50 rounded-2xl p-8 flex items-center justify-center h-32">
                <i class="fas fa-landmark text-4xl text-green-600"></i>
            </div>
            <div
                class="section-reveal bg-gray-50 rounded-2xl p-8 flex items-center justify-center h-32">
                <i class="fas fa-hands-helping text-4xl text-purple-600"></i>
            </div>
            <div
                class="section-reveal bg-gray-50 rounded-2xl p-8 flex items-center justify-center h-32">
                <i class="fas fa-chart-network text-4xl text-red-600"></i>
            </div>
            <div
                class="section-reveal bg-gray-50 rounded-2xl p-8 flex items-center justify-center h-32">
                <i class="fas fa-handshake text-4xl text-yellow-600"></i>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 gradient-bg relative overflow-hidden">
    <div class="absolute inset-0">
        <div
            class="absolute top-10 right-10 w-64 h-64 bg-white opacity-10 rounded-full animate-float"></div>
        <div
            class="absolute bottom-10 left-10 w-80 h-80 bg-white opacity-5 rounded-full animate-bounce-slow"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center text-white section-reveal">
            <h2 class="text-4xl lg:text-5xl font-bold mb-8">
                Siap Bergabung dengan
                <span class="text-yellow-300">UMKM Malang?</span>
            </h2>
            <p class="text-xl text-blue-100 mb-12 max-w-3xl mx-auto">
                Daftarkan usaha Anda sekarang dan jadilah bagian dari ekosistem UMKM
                terbesar di Kota Malang
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button
                    class="bg-white text-blue-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-blue-50 transition-all transform hover:scale-105">
                    <i class="fas fa-store mr-2"></i>
                    Daftar UMKM
                </button>
                <button
                    class="glass-effect text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:bg-opacity-20 transition-all">
                    <i class="fas fa-phone-alt mr-2"></i>
                    Hubungi Kami
                </button>
            </div>
        </div>
    </div>
</section>
@endsection