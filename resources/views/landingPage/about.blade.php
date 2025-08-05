@extends('core.landingPage')

@section('title', 'UMKM Kota Malang | About')

@section('style')
<style>
    /* Animation optimizations */
    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-15px) rotate(2deg); }
    }
    
    @keyframes bounce-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    
    .animate-float {
        animation: float 6s ease-in-out infinite;
        will-change: transform;
    }
    
    .animate-bounce-slow {
        animation: bounce-slow 4s ease-in-out infinite;
        will-change: transform;
    }
    
    /* Scroll reveal optimization */
    .section-reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        will-change: opacity, transform;
    }
    
    .section-reveal.revealed {
        opacity: 1;
        transform: translateY(0);
    }
    
    /* Card hover effect optimization */
    .card-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        will-change: transform;
    }
    
    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    
    /* Performance optimizations */
    .gradient-bg {
        background: linear-gradient(135deg, #059669, #047857);
        backface-visibility: hidden;
    }
    
    .text-gradient {
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    /* Image optimization */
    .lazy-img {
        opacity: 0;
        transition: opacity 0.4s ease;
    }
    
    .lazy-img.loaded {
        opacity: 1;
    }
</style>
@endsection

@section('content')
<!-- Hero About Section - Optimized with will-change -->
<section class="min-h-[60vh] gradient-bg flex items-center relative overflow-hidden pt-20">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-20 left-10 w-72 h-72 bg-white opacity-10 rounded-full animate-float will-change-transform"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-white opacity-5 rounded-full animate-bounce-slow will-change-transform"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center text-white py-16">
            <div class="section-reveal">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                    Tentang <span class="text-emerald-200">Kami</span>
                </h1>
                <p class="text-lg md:text-xl lg:text-2xl text-emerald-100 max-w-3xl mx-auto">
                    Platform Katalog UMKM Kota Malang - Memberdayakan usaha kecil dan
                    menengah untuk tumbuh bersama
                </p>
            </div>
        </div>
    </div>
</section>

<!-- About Content Section - Optimized with efficient layout -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-4 md:px-6">
        <div class="grid lg:grid-cols-2 gap-12 md:gap-16 items-center">
            <div class="section-reveal">
                <div class="w-full aspect-square md:h-96 bg-emerald-50 rounded-3xl flex items-center justify-center">
                    <div class="text-center">
                        <i class="fas fa-city text-5xl md:text-6xl text-emerald-500 mb-4 opacity-50"></i>
                        <p class="text-lg md:text-xl text-gray-600">Kota Malang</p>
                        <p class="text-sm md:text-base text-gray-500">Mendukung UMKM Lokal</p>
                    </div>
                </div>
            </div>

            <div class="section-reveal">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-6 md:mb-8">
                    Siapa <span class="text-gradient bg-gradient-to-r from-emerald-500 to-green-500">Kami?</span>
                </h2>
                <p class="text-lg md:text-xl text-gray-600 mb-6 md:mb-8 leading-relaxed">
                    Platform Katalog UMKM Kota Malang adalah inisiatif Pemerintah Kota
                    Malang bersama dengan berbagai stakeholder lokal untuk mendukung
                    dan mempromosikan produk-produk unggulan dari pelaku usaha mikro,
                    kecil, dan menengah di Kota Malang.
                </p>
                <p class="text-lg md:text-xl text-gray-600 mb-6 md:mb-8 leading-relaxed">
                    Kami hadir sebagai jembatan antara UMKM dengan pasar yang lebih
                    luas, baik lokal maupun nasional, dengan memanfaatkan teknologi
                    digital untuk memperluas jangkauan pemasaran.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6 mb-6 md:mb-8">
                    <div class="bg-emerald-50 rounded-xl md:rounded-2xl p-4 md:p-6">
                        <div class="flex items-center mb-3 md:mb-4">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-emerald-100 rounded-lg md:rounded-xl flex items-center justify-center mr-3 md:mr-4">
                                <i class="fas fa-calendar-check text-emerald-600 text-lg md:text-xl"></i>
                            </div>
                            <h3 class="text-base md:text-lg font-bold text-gray-800">Didirikan</h3>
                        </div>
                        <p class="text-gray-600">2020</p>
                    </div>

                    <div class="bg-emerald-50 rounded-xl md:rounded-2xl p-4 md:p-6">
                        <div class="flex items-center mb-3 md:mb-4">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-emerald-100 rounded-lg md:rounded-xl flex items-center justify-center mr-3 md:mr-4">
                                <i class="fas fa-store text-emerald-600 text-lg md:text-xl"></i>
                            </div>
                            <h3 class="text-base md:text-lg font-bold text-gray-800">UMKM Terdaftar</h3>
                        </div>
                        <p class="text-gray-600">500+</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision - Optimized with reduced repaints -->
<section class="py-16 md:py-20 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6">
        <div class="text-center mb-12 md:mb-16 section-reveal">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-4 md:mb-6">
                Visi & <span class="text-gradient bg-gradient-to-r from-emerald-500 to-green-500">Misi</span>
            </h2>
            <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                Landasan filosofis yang menjadi dasar setiap langkah kami
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-6 md:gap-8">
            <div class="section-reveal card-hover bg-white rounded-2xl md:rounded-3xl shadow-md md:shadow-lg p-6 md:p-8">
                <div class="flex items-start mb-4 md:mb-6">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-emerald-100 rounded-lg md:rounded-xl flex items-center justify-center flex-shrink-0 mr-4 md:mr-6">
                        <i class="fas fa-bullseye text-emerald-600 text-xl md:text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-3 md:mb-4">Visi Kami</h3>
                        <p class="text-gray-600">
                            Menjadi platform terdepan dalam mendukung pertumbuhan UMKM di
                            Indonesia melalui digitalisasi dan perluasan akses pasar,
                            serta menjadi wadah kolaborasi antara pelaku usaha,
                            pemerintah, dan masyarakat.
                        </p>
                    </div>
                </div>
            </div>

            <div class="section-reveal card-hover bg-white rounded-2xl md:rounded-3xl shadow-md md:shadow-lg p-6 md:p-8">
                <div class="flex items-start mb-4 md:mb-6">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-emerald-100 rounded-lg md:rounded-xl flex items-center justify-center flex-shrink-0 mr-4 md:mr-6">
                        <i class="fas fa-tasks text-emerald-600 text-xl md:text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-3 md:mb-4">Misi Kami</h3>
                        <ul class="space-y-2 md:space-y-3 text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-emerald-500 mt-1 mr-2 text-sm md:text-base"></i>
                                <span>Memberdayakan UMKM lokal melalui pemanfaatan teknologi digital</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-emerald-500 mt-1 mr-2 text-sm md:text-base"></i>
                                <span>Menghubungkan pelaku UMKM dengan pasar yang lebih luas</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-emerald-500 mt-1 mr-2 text-sm md:text-base"></i>
                                <span>Menyediakan akses terhadap pelatihan dan sumber daya bisnis</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-emerald-500 mt-1 mr-2 text-sm md:text-base"></i>
                                <span>Meningkatkan daya saing produk UMKM di pasar global</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Values - Optimized with simplified animations -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-4 md:px-6">
        <div class="text-center mb-12 md:mb-16 section-reveal">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-4 md:mb-6">
                Nilai <span class="text-gradient bg-gradient-to-r from-emerald-500 to-green-500">Kami</span>
            </h2>
            <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                Prinsip-prinsip yang memandu setiap tindakan dan keputusan kami
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
            <div class="section-reveal card-hover bg-white rounded-2xl md:rounded-3xl shadow-md md:shadow-lg p-6 md:p-8 text-center">
                <div class="w-16 h-16 md:w-20 md:h-20 bg-gradient-to-r from-emerald-400 to-green-500 rounded-xl md:rounded-2xl flex items-center justify-center mx-auto mb-4 md:mb-6">
                    <i class="fas fa-hands-helping text-white text-xl md:text-2xl"></i>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-2 md:mb-3">Kolaborasi</h3>
                <p class="text-gray-600 text-sm md:text-base">
                    Kami percaya pada kekuatan kerja sama untuk mencapai hasil yang lebih besar
                </p>
            </div>

            <div class="section-reveal card-hover bg-white rounded-2xl md:rounded-3xl shadow-md md:shadow-lg p-6 md:p-8 text-center">
                <div class="w-16 h-16 md:w-20 md:h-20 bg-gradient-to-r from-emerald-400 to-teal-500 rounded-xl md:rounded-2xl flex items-center justify-center mx-auto mb-4 md:mb-6">
                    <i class="fas fa-lightbulb text-white text-xl md:text-2xl"></i>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-2 md:mb-3">Inovasi</h3>
                <p class="text-gray-600 text-sm md:text-base">
                    Terus mencari cara baru untuk meningkatkan nilai bagi UMKM
                </p>
            </div>

            <div class="section-reveal card-hover bg-white rounded-2xl md:rounded-3xl shadow-md md:shadow-lg p-6 md:p-8 text-center">
                <div class="w-16 h-16 md:w-20 md:h-20 bg-gradient-to-r from-green-500 to-emerald-600 rounded-xl md:rounded-2xl flex items-center justify-center mx-auto mb-4 md:mb-6">
                    <i class="fas fa-shield-alt text-white text-xl md:text-2xl"></i>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-2 md:mb-3">Integritas</h3>
                <p class="text-gray-600 text-sm md:text-base">
                    Bertindak jujur dan transparan dalam semua aspek
                </p>
            </div>

            <div class="section-reveal card-hover bg-white rounded-2xl md:rounded-3xl shadow-md md:shadow-lg p-6 md:p-8 text-center">
                <div class="w-16 h-16 md:w-20 md:h-20 bg-gradient-to-r from-teal-400 to-emerald-500 rounded-xl md:rounded-2xl flex items-center justify-center mx-auto mb-4 md:mb-6">
                    <i class="fas fa-heart text-white text-xl md:text-2xl"></i>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-2 md:mb-3">Dampak Sosial</h3>
                <p class="text-gray-600 text-sm md:text-base">
                    Fokus pada penciptaan manfaat nyata bagi masyarakat
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section - Optimized with reduced paint complexity -->
<section class="py-16 md:py-20 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6">
        <div class="text-center mb-12 md:mb-16 section-reveal">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-4 md:mb-6">
                Tim <span class="text-gradient bg-gradient-to-r from-emerald-500 to-green-500">Kami</span>
            </h2>
            <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                Orang-orang berdedikasi di balik kesuksesan platform ini
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
            <div class="section-reveal card-hover bg-white rounded-2xl md:rounded-3xl shadow-md md:shadow-lg overflow-hidden text-center">
                <div class="h-48 md:h-64 bg-emerald-50 flex items-center justify-center">
                    <i class="fas fa-user-tie text-emerald-600 text-4xl md:text-6xl"></i>
                </div>
                <div class="p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-1">Budi Santoso</h3>
                    <p class="text-emerald-600 font-medium mb-3 md:mb-4">Project Leader</p>
                    <div class="flex justify-center space-x-2">
                        <a href="#" class="w-7 h-7 md:w-8 md:h-8 bg-emerald-100 rounded-full flex items-center justify-center hover:bg-emerald-200 transition-colors">
                            <i class="fab fa-linkedin-in text-emerald-600 text-xs md:text-sm"></i>
                        </a>
                        <a href="#" class="w-7 h-7 md:w-8 md:h-8 bg-emerald-100 rounded-full flex items-center justify-center hover:bg-emerald-200 transition-colors">
                            <i class="fas fa-envelope text-emerald-600 text-xs md:text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="section-reveal card-hover bg-white rounded-2xl md:rounded-3xl shadow-md md:shadow-lg overflow-hidden text-center">
                <div class="h-48 md:h-64 bg-emerald-50 flex items-center justify-center">
                    <i class="fas fa-laptop-code text-emerald-600 text-4xl md:text-6xl"></i>
                </div>
                <div class="p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-1">Ani Wijaya</h3>
                    <p class="text-emerald-600 font-medium mb-3 md:mb-4">Tech Lead</p>
                    <div class="flex justify-center space-x-2">
                        <a href="#" class="w-7 h-7 md:w-8 md:h-8 bg-emerald-100 rounded-full flex items-center justify-center hover:bg-emerald-200 transition-colors">
                            <i class="fab fa-linkedin-in text-emerald-600 text-xs md:text-sm"></i>
                        </a>
                        <a href="#" class="w-7 h-7 md:w-8 md:h-8 bg-emerald-100 rounded-full flex items-center justify-center hover:bg-emerald-200 transition-colors">
                            <i class="fas fa-envelope text-emerald-600 text-xs md:text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="section-reveal card-hover bg-white rounded-2xl md:rounded-3xl shadow-md md:shadow-lg overflow-hidden text-center">
                <div class="h-48 md:h-64 bg-emerald-50 flex items-center justify-center">
                    <i class="fas fa-chart-line text-emerald-600 text-4xl md:text-6xl"></i>
                </div>
                <div class="p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-1">Citra Dewi</h3>
                    <p class="text-emerald-600 font-medium mb-3 md:mb-4">Marketing</p>
                    <div class="flex justify-center space-x-2">
                        <a href="#" class="w-7 h-7 md:w-8 md:h-8 bg-emerald-100 rounded-full flex items-center justify-center hover:bg-emerald-200 transition-colors">
                            <i class="fab fa-linkedin-in text-emerald-600 text-xs md:text-sm"></i>
                        </a>
                        <a href="#" class="w-7 h-7 md:w-8 md:h-8 bg-emerald-100 rounded-full flex items-center justify-center hover:bg-emerald-200 transition-colors">
                            <i class="fas fa-envelope text-emerald-600 text-xs md:text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="section-reveal card-hover bg-white rounded-2xl md:rounded-3xl shadow-md md:shadow-lg overflow-hidden text-center">
                <div class="h-48 md:h-64 bg-emerald-50 flex items-center justify-center">
                    <i class="fas fa-users text-emerald-600 text-4xl md:text-6xl"></i>
                </div>
                <div class="p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-1">Dedi Kurniawan</h3>
                    <p class="text-emerald-600 font-medium mb-3 md:mb-4">UMKM Relations</p>
                    <div class="flex justify-center space-x-2">
                        <a href="#" class="w-7 h-7 md:w-8 md:h-8 bg-emerald-100 rounded-full flex items-center justify-center hover:bg-emerald-200 transition-colors">
                            <i class="fab fa-linkedin-in text-emerald-600 text-xs md:text-sm"></i>
                        </a>
                        <a href="#" class="w-7 h-7 md:w-8 md:h-8 bg-emerald-100 rounded-full flex items-center justify-center hover:bg-emerald-200 transition-colors">
                            <i class="fas fa-envelope text-emerald-600 text-xs md:text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partners Section - Optimized with simplified layout -->
<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-4 md:px-6">
        <div class="text-center mb-12 md:mb-16 section-reveal">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-4 md:mb-6">
                Mitra <span class="text-gradient bg-gradient-to-r from-emerald-500 to-green-500">Kami</span>
            </h2>
            <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                Organisasi dan institusi yang mendukung platform ini
            </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-6">
            <div class="section-reveal bg-emerald-50 rounded-xl md:rounded-2xl p-6 flex items-center justify-center h-24 md:h-32">
                <i class="fas fa-university text-3xl md:text-4xl text-emerald-600"></i>
            </div>
            <div class="section-reveal bg-emerald-50 rounded-xl md:rounded-2xl p-6 flex items-center justify-center h-24 md:h-32">
                <i class="fas fa-landmark text-3xl md:text-4xl text-emerald-600"></i>
            </div>
            <div class="section-reveal bg-emerald-50 rounded-xl md:rounded-2xl p-6 flex items-center justify-center h-24 md:h-32">
                <i class="fas fa-hands-helping text-3xl md:text-4xl text-emerald-600"></i>
            </div>
            <div class="section-reveal bg-emerald-50 rounded-xl md:rounded-2xl p-6 flex items-center justify-center h-24 md:h-32">
                <i class="fas fa-chart-network text-3xl md:text-4xl text-emerald-600"></i>
            </div>
            <div class="section-reveal bg-emerald-50 rounded-xl md:rounded-2xl p-6 flex items-center justify-center h-24 md:h-32">
                <i class="fas fa-handshake text-3xl md:text-4xl text-emerald-600"></i>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section - Optimized with performance in mind -->
<section class="py-16 md:py-20 gradient-bg relative overflow-hidden">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-10 right-10 w-48 md:w-64 h-48 md:h-64 bg-white opacity-10 rounded-full animate-float will-change-transform"></div>
        <div class="absolute bottom-10 left-10 w-60 md:w-80 h-60 md:h-80 bg-white opacity-5 rounded-full animate-bounce-slow will-change-transform"></div>
    </div>

    <div class="container mx-auto px-4 md:px-6 relative z-10">
        <div class="text-center text-white section-reveal">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 md:mb-8">
                Siap Bergabung dengan
                <span class="text-emerald-200">UMKM Malang?</span>
            </h2>
            <p class="text-lg md:text-xl text-emerald-100 mb-8 md:mb-12 max-w-3xl mx-auto">
                Daftarkan usaha Anda sekarang dan jadilah bagian dari ekosistem UMKM
                terbesar di Kota Malang
            </p>

            <div class="flex flex-col sm:flex-row gap-3 md:gap-4 justify-center">
                <button class="bg-white text-emerald-600 px-6 py-3 md:px-8 md:py-4 rounded-full font-semibold text-base md:text-lg hover:bg-emerald-50 transition-all transform hover:scale-[1.03] md:hover:scale-105 active:scale-95 will-change-transform">
                    <i class="fas fa-store mr-2"></i>
                    Daftar UMKM
                </button>
                <button class="bg-white bg-opacity-20 text-white px-6 py-3 md:px-8 md:py-4 rounded-full font-semibold text-base md:text-lg hover:bg-opacity-30 transition-all active:scale-95 will-change-transform">
                    <i class="fas fa-phone-alt mr-2"></i>
                    Hubungi Kami
                </button>
            </div>
        </div>
    </div>
</section>

<script>
    // Optimized JavaScript for better performance
    document.addEventListener('DOMContentLoaded', function() {
        // Intersection Observer for scroll reveal
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        document.querySelectorAll('.section-reveal').forEach(section => {
            revealObserver.observe(section);
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Optimized hover effects
        const cards = document.querySelectorAll('.card-hover');
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-5px)';
                card.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.1)';
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = '';
                card.style.boxShadow = '';
            });
        });
    });

    // Lazy loading for images (if any)
    if ('loading' in HTMLImageElement.prototype) {
        const images = document.querySelectorAll('img[loading="lazy"]');
        images.forEach(img => {
            img.classList.add('lazy-img');
            img.addEventListener('load', () => {
                img.classList.add('loaded');
            });
        });
    }
</script>
@endsection