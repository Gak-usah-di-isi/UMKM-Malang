@extends('core.landingPage')

@section('title', 'UMKM Kota Malang | Kontak')

@section('content')
<!-- Hero Contact Section -->
<section class="min-h-[40vh] bg-gradient-to-br from-green-600 to-emerald-600 flex items-center relative overflow-hidden pt-20">
    <!-- Simplified background elements -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 left-10 w-32 h-32 bg-white rounded-full mix-blend-overlay animate-blob"></div>
        <div class="absolute bottom-20 right-10 w-40 h-40 bg-emerald-200 rounded-full mix-blend-overlay animate-blob animation-delay-3000"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 relative z-10 scale-90 origin-top">
        <div class="text-center text-white py-12 section-reveal">
            <h1 class="text-3xl lg:text-4xl font-bold leading-tight mb-4">
                Hubungi <span class="text-yellow-300">Kami</span>
            </h1>
            <p class="text-lg lg:text-xl text-emerald-100 max-w-2xl mx-auto">
                Tim kami siap membantu Anda kapan saja
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4 sm:px-6 scale-90 origin-top">
        <div class="flex items-center text-sm text-gray-600 mb-4">
            <a href="/" class="hover:text-emerald-600">Beranda</a>
            <span class="mx-2">/</span>
            <span class="text-gray-400">Kontak</span>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 md:gap-12">
            <!-- Contact Information (Now on the left) -->
            <div class="section-reveal order-1">
                <div class="bg-emerald-50 rounded-2xl p-6 md:p-8 border border-emerald-100">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">
                        Informasi Kontak
                    </h2>

                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-emerald-600 text-sm"></i>
                            </div>
                            <div>
                                <h3 class="text-base font-semibold text-gray-800 mb-1">
                                    Alamat Kantor
                                </h3>
                                <p class="text-gray-600 text-sm">
                                    Jl. Tugu No. 1, Klojen<br />
                                    Kota Malang, Jawa Timur 65111
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone-alt text-emerald-600 text-sm"></i>
                            </div>
                            <div>
                                <h3 class="text-base font-semibold text-gray-800 mb-1">
                                    Telepon & WhatsApp
                                </h3>
                                <p class="text-gray-600 text-sm">
                                    +62 341 123 4567<br />
                                    WhatsApp: +62 812 3456 7890
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-emerald-600 text-sm"></i>
                            </div>
                            <div>
                                <h3 class="text-base font-semibold text-gray-800 mb-1">
                                    Email
                                </h3>
                                <p class="text-gray-600 text-sm">
                                    info@umkmmalang.go.id<br />
                                    support@umkmmalang.go.id
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-clock text-emerald-600 text-sm"></i>
                            </div>
                            <div>
                                <h3 class="text-base font-semibold text-gray-800 mb-1">
                                    Jam Operasional
                                </h3>
                                <p class="text-gray-600 text-sm">
                                    Senin-Jumat: 08:00-17:00 WIB<br />
                                    Sabtu: 08:00-12:00 WIB
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="mt-8">
                        <h3 class="text-base font-semibold text-gray-800 mb-3">
                            Media Sosial
                        </h3>
                        <div class="flex space-x-3">
                            <a href="#" class="w-9 h-9 bg-emerald-600 rounded-full flex items-center justify-center hover:bg-emerald-700 transition-colors">
                                <i class="fab fa-facebook-f text-white text-xs"></i>
                            </a>
                            <a href="#" class="w-9 h-9 bg-emerald-600 rounded-full flex items-center justify-center hover:bg-emerald-700 transition-colors">
                                <i class="fab fa-instagram text-white text-xs"></i>
                            </a>
                            <a href="#" class="w-9 h-9 bg-emerald-600 rounded-full flex items-center justify-center hover:bg-emerald-700 transition-colors">
                                <i class="fab fa-twitter text-white text-xs"></i>
                            </a>
                            <a href="#" class="w-9 h-9 bg-emerald-600 rounded-full flex items-center justify-center hover:bg-emerald-700 transition-colors">
                                <i class="fab fa-youtube text-white text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Map Placeholder -->
                <div class="mt-6 bg-gray-100 rounded-xl h-64 flex items-center justify-center border border-gray-200">
                    <div class="text-center text-gray-500">
                        <i class="fas fa-map-marker-alt text-3xl text-emerald-600 mb-3"></i>
                        <p class="text-sm">Peta Lokasi Kantor UMKM Kota Malang</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form (Now on the right) -->
            <div class="section-reveal order-2">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">
                    Kirim Pesan kepada Kami
                </h2>
                <form class="space-y-5">
                    <div class="grid md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm text-gray-700 mb-2">Nama Lengkap</label>
                            <input
                                type="text"
                                class="w-full px-4 py-2.5 rounded-lg border border-gray-200 focus:border-emerald-500 focus:ring-1 focus:ring-emerald-200 focus:outline-none transition-all text-sm"
                                placeholder="Nama lengkap Anda" />
                        </div>
                        <div>
                            <label class="block text-sm text-gray-700 mb-2">Email</label>
                            <input
                                type="email"
                                class="w-full px-4 py-2.5 rounded-lg border border-gray-200 focus:border-emerald-500 focus:ring-1 focus:ring-emerald-200 focus:outline-none transition-all text-sm"
                                placeholder="Alamat email Anda" />
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm text-gray-700 mb-2">Subjek</label>
                        <input
                            type="text"
                            class="w-full px-4 py-2.5 rounded-lg border border-gray-200 focus:border-emerald-500 focus:ring-1 focus:ring-emerald-200 focus:outline-none transition-all text-sm"
                            placeholder="Subjek pesan Anda" />
                    </div>

                    <div>
                        <label class="block text-sm text-gray-700 mb-2">Pesan</label>
                        <textarea
                            rows="4"
                            class="w-full px-4 py-2.5 rounded-lg border border-gray-200 focus:border-emerald-500 focus:ring-1 focus:ring-emerald-200 focus:outline-none transition-all text-sm"
                            placeholder="Tulis pesan Anda secara detail"></textarea>
                    </div>

                    <button
                        type="submit"
                        class="bg-gradient-to-r from-green-500 to-emerald-500 text-white px-5 py-2.5 rounded-lg font-medium hover:shadow-md transition-all transform hover:scale-[1.02] text-sm">
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-12 bg-emerald-50">
    <div class="container mx-auto px-4 sm:px-6 scale-90 origin-top">
        <div class="text-center mb-10 section-reveal">
            <h2 class="text-2xl font-bold text-gray-800 mb-3">
                Pertanyaan yang Sering Diajukan
            </h2>
            <p class="text-gray-600 text-sm max-w-xl mx-auto">
                Temukan jawaban atas pertanyaan umum seputar platform kami
            </p>
        </div>

        <div class="max-w-2xl mx-auto space-y-3">
            <!-- FAQ Item 1 -->
            <div class="section-reveal bg-white rounded-lg shadow-xs overflow-hidden border border-gray-200 hover:border-emerald-300 transition-all">
                <button class="w-full flex justify-between items-center p-5 text-left faq-toggle group">
                    <h3 class="text-base font-semibold text-gray-800 group-hover:text-emerald-600 transition-colors">
                        Bagaimana cara mendaftarkan UMKM saya?
                    </h3>
                    <i class="fas fa-chevron-down text-emerald-600 text-xs transition-transform"></i>
                </button>
                <div class="px-5 pb-5 hidden faq-content">
                    <p class="text-gray-600 text-sm">
                        Anda bisa mendaftarkan UMKM Anda dengan mengisi formulir
                        pendaftaran di halaman "Gabung UMKM". Setelah mengisi data
                        lengkap, tim kami akan memverifikasi dan mengaktifkan akun UMKM
                        Anda dalam 1-2 hari kerja.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="section-reveal bg-white rounded-lg shadow-xs overflow-hidden border border-gray-200 hover:border-emerald-300 transition-all">
                <button class="w-full flex justify-between items-center p-5 text-left faq-toggle group">
                    <h3 class="text-base font-semibold text-gray-800 group-hover:text-emerald-600 transition-colors">
                        Apakah ada biaya untuk mendaftar?
                    </h3>
                    <i class="fas fa-chevron-down text-emerald-600 text-xs transition-transform"></i>
                </button>
                <div class="px-5 pb-5 hidden faq-content">
                    <p class="text-gray-600 text-sm">
                        Tidak, pendaftaran UMKM di platform kami sepenuhnya gratis. Kami
                        berkomitmen untuk mendukung perkembangan UMKM tanpa membebani
                        biaya.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="section-reveal bg-white rounded-lg shadow-xs overflow-hidden border border-gray-200 hover:border-emerald-300 transition-all">
                <button class="w-full flex justify-between items-center p-5 text-left faq-toggle group">
                    <h3 class="text-base font-semibold text-gray-800 group-hover:text-emerald-600 transition-colors">
                        Bagaimana cara mempromosikan produk saya?
                    </h3>
                    <i class="fas fa-chevron-down text-emerald-600 text-xs transition-transform"></i>
                </button>
                <div class="px-5 pb-5 hidden faq-content">
                    <p class="text-gray-600 text-sm">
                        Setelah akun UMKM Anda aktif, Anda bisa mengunggah produk dengan
                        foto dan deskripsi yang menarik. Produk unggulan akan
                        ditampilkan di halaman depan secara berkala.
                    </p>
                </div>
            </div>
        </div>

        <div class="text-center mt-6 section-reveal">
            <a href="#" class="text-emerald-600 hover:text-emerald-800 font-medium inline-flex items-center text-sm">
                Lihat Semua FAQ <i class="fas fa-arrow-right ml-1.5 text-xs transition-transform group-hover:translate-x-1"></i>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-14 bg-gradient-to-br from-green-600 to-emerald-600 relative overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-10 right-10 w-28 h-28 bg-white rounded-full mix-blend-overlay animate-blob"></div>
        <div class="absolute bottom-10 left-10 w-32 h-32 bg-emerald-200 rounded-full mix-blend-overlay animate-blob animation-delay-2000"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 relative z-10 scale-90 origin-top">
        <div class="text-center text-white section-reveal">
            <h2 class="text-2xl lg:text-3xl font-bold mb-4">
                Butuh Bantuan Lebih Lanjut?
            </h2>
            <p class="text-lg text-emerald-100 mb-6 max-w-xl mx-auto">
                Hubungi tim support kami yang siap membantu Anda
            </p>
            <button class="bg-white text-emerald-600 px-6 py-2.5 rounded-full font-medium text-base hover:bg-gray-50 transition-all transform hover:scale-105">
                <i class="fas fa-headset mr-2 text-sm"></i>
                Hubungi Support
            </button>
        </div>
    </div>
</section>

<!-- Styles -->
<style>
    /* Animation optimizations */
    .section-reveal {
        opacity: 0;
        transform: translateY(15px);
        transition: opacity 0.4s ease-out, transform 0.4s ease-out;
    }

    .section-reveal.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Blob animation - simplified */
    @keyframes blob {
        0% { transform: translate(0px, 0px) scale(1); }
        50% { transform: translate(15px, -15px) scale(1.03); }
        100% { transform: translate(0px, 0px) scale(1); }
    }

    .animate-blob {
        animation: blob 10s infinite ease-in-out;
    }

    .animation-delay-2000 {
        animation-delay: 2s;
    }
    
    .animation-delay-3000 {
        animation-delay: 3s;
    }

    /* FAQ toggle animation */
    .faq-toggle .fa-chevron-down {
        transition: transform 0.25s ease;
    }
    
    .faq-toggle.active .fa-chevron-down {
        transform: rotate(180deg);
    }

    /* Performance optimizations */
    @media (prefers-reduced-motion: reduce) {
        * {
            animation: none !important;
            transition: none !important;
        }
        
        .section-reveal {
            opacity: 1;
            transform: none;
        }
    }
</style>

<!-- Optimized JavaScript -->
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
        threshold: 0.05,
        rootMargin: '0px 0px -40px 0px'
    });

    // Observe all sections
    document.querySelectorAll('.section-reveal').forEach(section => {
        observer.observe(section);
    });

    // FAQ toggle functionality
    document.querySelectorAll('.faq-toggle').forEach(button => {
        button.addEventListener('click', function() {
            const faqItem = this.closest('.bg-white');
            const content = faqItem.querySelector('.faq-content');
            const icon = this.querySelector('i');
            
            // Toggle active class
            this.classList.toggle('active');
            
            // Toggle content
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                content.style.maxHeight = content.scrollHeight + 'px';
            } else {
                content.style.maxHeight = '0';
                setTimeout(() => {
                    content.classList.add('hidden');
                }, 250);
            }
        });
    });
});
</script>
@endsection