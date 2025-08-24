@extends('core.landingPage')

@section('title', 'Detail Artikel UMKM')

@section('content')

@section('style')
    <style>
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

        /* Glassmorphism effect */
        .glass {
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            background-color: rgba(255, 255, 255, 0.75);
            border: 1px solid rgba(255, 255, 255, 0.125);
        }

        /* Green theme enhancements */
        .green-gradient-text {
            background-image: linear-gradient(to right, #059669, #10b981);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .green-gradient-bg {
            background-image: linear-gradient(to right, #059669, #10b981);
        }

        .leaf-icon {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23059669'%3E%3Cpath d='M17 8h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2h-2a1 1 0 010-2h2V6a1 1 0 012 0v2zM2 6a1 1 0 011-1h8a1 1 0 011 1v8a1 1 0 01-1 1H3a1 1 0 01-1-1V6zm2 1v6h6V7H4z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
        }

        .eco-badge {
            background-color: rgba(5, 150, 105, 0.1);
            border: 1px solid rgba(5, 150, 105, 0.3);
        }

        .article-content p {
            margin-bottom: 1.5rem;
            line-height: 1.7;
            color: #4b5563;
        }

        .article-content h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1f2937;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .article-content h3 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1f2937;
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }

        .article-content ul {
            list-style-type: disc;
            padding-left: 2rem;
            margin-bottom: 1.5rem;
        }

        .article-content ol {
            list-style-type: decimal;
            padding-left: 2rem;
            margin-bottom: 1.5rem;
        }

        .article-content img {
            border-radius: 1rem;
            margin: 2rem 0;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .share-btn {
            transition: all 0.3s ease;
        }

        .share-btn:hover {
            transform: translateY(-3px);
        }

        /* New styles for scrollable content */
        .scrollable-main {
            height: calc(100vh - 4rem);
            overflow-y: auto;
            position: sticky;
            top: 2rem;
        }

        .scrollable-sidebar {
            height: calc(100vh - 4rem);
            overflow-y: auto;
            position: sticky;
            top: 2rem;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(5, 150, 105, 0.1);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(5, 150, 105, 0.3);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgba(5, 150, 105, 0.5);
        }
    </style>
@endsection

<!-- Background with animated green gradients -->
<div class="min-h-screen py-8 bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 relative overflow-hidden">

    <!-- Animated green background elements -->
    <div class="absolute inset-0 opacity-30">
        <div
            class="absolute top-20 left-10 w-32 h-32 bg-emerald-200 rounded-full mix-blend-multiply filter blur-xl animate-blob">
        </div>
        <div
            class="absolute top-40 right-10 w-32 h-32 bg-teal-200 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000">
        </div>
        <div
            class="absolute -bottom-8 left-20 w-32 h-32 bg-green-200 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000">
        </div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Breadcrumb -->
        <nav class="flex mb-6 text-sm text-gray-600" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li><a href="/" class="hover:text-emerald-600">Beranda</a></li>
                <li><i class="fas fa-chevron-right text-xs mx-2 text-gray-400"></i></li>
                <li><a href="/news" class="hover:text-emerald-600">Artikel & Berita</a></li>
                <li><i class="fas fa-chevron-right text-xs mx-2 text-gray-400"></i></li>
                <li><span class="text-emerald-600 font-medium">Detail Artikel</span></li>
            </ol>
        </nav>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Main Content -->
            <main class="flex-5 scrollable-main">
                <div class="glass rounded-3xl overflow-hidden mb-8">
                    <!-- Article Header -->
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
                            alt="Artikel UMKM" class="w-full h-96 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-8">
                            <div class="flex items-center gap-2 mb-4">
                                <span class="bg-emerald-500 text-white text-xs font-bold px-3 py-1 rounded-full">Tips
                                    Bisnis</span>
                                <span class="text-white/80 text-sm">• 5 min read</span>
                            </div>
                            <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">
                                10 Strategi Digital Marketing yang Wajib Dicoba UMKM di 2024
                            </h1>
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 green-gradient-bg rounded-full flex items-center justify-center">
                                    <span class="text-white font-bold text-sm">AB</span>
                                </div>
                                <div>
                                    <p class="font-medium text-white">Ahmad Budiman</p>
                                    <p class="text-white/80 text-sm">25 Jan 2024</p>
                                </div>
                            </div>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">HOT</span>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span
                                class="eco-badge text-emerald-700 text-xs font-medium px-3 py-1 rounded-full flex items-center gap-1">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l1.5 1.5a2 2 0 11-2.828-2.828l3-3z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Ramah Lingkungan
                            </span>
                        </div>
                    </div>

                    <!-- Article Content -->
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-8 border-b border-gray-200 pb-6">
                            <div class="flex items-center gap-4 text-gray-500">
                                <span class="flex items-center gap-1">
                                    <i class="far fa-heart"></i> 234 Suka
                                </span>
                                <span class="flex items-center gap-1">
                                    <i class="far fa-comment"></i> 45 Komentar
                                </span>
                            </div>
                        </div>

                        <div class="article-content">
                            <p class="text-lg font-medium text-gray-700 mb-6">
                                Era digital mengharuskan UMKM untuk beradaptasi dengan teknologi terbaru. Dalam artikel
                                ini, kami akan membahas 10 strategi pemasaran digital yang efektif dan mudah diterapkan
                                untuk meningkatkan penjualan bisnis UMKM Anda di tahun 2024.
                            </p>

                            <h2 class="green-gradient-text">1. Optimasi Google My Business</h2>
                            <p>
                                Google My Business (GMB) adalah tools gratis dari Google yang memungkinkan bisnis lokal
                                muncul di hasil pencarian Google. Untuk UMKM, memiliki profil GMB yang lengkap dan
                                teroptimasi adalah keharusan.
                            </p>
                            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Google My Business" class="w-full">

                            <p>
                                Beberapa hal yang perlu diperhatikan:
                            </p>
                            <ul>
                                <li>Isi semua informasi bisnis secara lengkap</li>
                                <li>Tambahkan foto produk/layanan berkualitas tinggi</li>
                                <li>Update jam operasional secara rutin</li>
                                <li>Respons cepat terhadap ulasan pelanggan</li>
                            </ul>

                            <h2 class="green-gradient-text">2. Konten Video Pendek</h2>
                            <p>
                                Tren video pendek ala TikTok dan Reels terus berkembang. UMKM bisa memanfaatkan platform
                                ini untuk:
                            </p>
                            <ul>
                                <li>Memperkenalkan produk secara kreatif</li>
                                <li>Membagikan testimoni pelanggan</li>
                                <li>Menunjukkan proses produksi</li>
                                <li>Membuat konten edukasi terkait produk</li>
                            </ul>

                            <h2 class="green-gradient-text">3. Chatbot WhatsApp Bisnis</h2>
                            <p>
                                WhatsApp Business API memungkinkan UMKM membuat chatbot sederhana untuk:
                            </p>
                            <img src="https://images.unsplash.com/photo-1621781196517-3f49735f1f0d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="WhatsApp Business" class="w-full">

                            <ul>
                                <li>Menjawab pertanyaan umum pelanggan</li>
                                <li>Mengirim katalog produk otomatis</li>
                                <li>Memproses pesanan sederhana</li>
                                <li>Mengirim notifikasi promo</li>
                            </ul>

                            <h2 class="green-gradient-text">4. Influencer Mikro</h2>
                            <p>
                                Kolaborasi dengan influencer mikro (1K-10K followers) sering memberikan hasil yang lebih
                                baik untuk UMKM karena:
                            </p>
                            <ul>
                                <li>Biaya lebih terjangkau</li>
                                <li>Engagement rate lebih tinggi</li>
                                <li>Target audiens lebih spesifik</li>
                                <li>Lebih mudah membangun hubungan jangka panjang</li>
                            </ul>

                            <h2 class="green-gradient-text">5. Program Referral</h2>
                            <p>
                                Program referral atau rujukan adalah strategi klasik yang tetap efektif di era digital.
                                UMKM bisa mengembangkan sistem referral dengan:
                            </p>
                            <ul>
                                <li>Memberikan diskon untuk pelanggan yang mengajak teman</li>
                                <li>Membuat kode referral unik</li>
                                <li>Menggunakan tools referral otomatis</li>
                                <li>Memberikan hadiah menarik untuk top referrer</li>
                            </ul>

                            <div class="bg-emerald-50 border-l-4 border-emerald-500 p-6 rounded-r-lg my-8">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <h3 class="text-lg font-medium text-emerald-800">Tips Tambahan</h3>
                                        <div class="mt-2 text-sm text-emerald-700">
                                            <p>Mulailah dengan 1-2 strategi yang paling sesuai dengan bisnis Anda,
                                                kuasai dengan baik, baru kemudian ekspansi ke strategi lainnya.
                                                Konsistensi adalah kunci kesuksesan digital marketing untuk UMKM.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="green-gradient-text">6. Email Marketing Sederhana</h2>
                            <p>
                                Meski terkesan tradisional, email marketing masih sangat efektif dengan ROI tinggi. UMKM
                                bisa memulai dengan:
                            </p>
                            <ul>
                                <li>Mengumpulkan email pelanggan saat transaksi</li>
                                <li>Mengirim newsletter bulanan</li>
                                <li>Membuat email promo khusus</li>
                                <li>Menggunakan tools gratis seperti Mailchimp</li>
                            </ul>

                            <h2 class="green-gradient-text">7. Optimasi Website Mobile</h2>
                            <p>
                                Mayoritas trafik internet sekarang berasal dari mobile. Pastikan website UMKM Anda:
                            </p>
                            <ul>
                                <li>Responsif di semua perangkat mobile</li>
                                <li>Memiliki kecepatan loading yang baik</li>
                                <li>Desain sederhana dan mudah dinavigasi</li>
                                <li>Tombol CTA yang jelas</li>
                            </ul>

                            <h2 class="green-gradient-text">8. User Generated Content</h2>
                            <p>
                                Manfaatkan konten yang dibuat pelanggan (UGC) untuk membangun kepercayaan:
                            </p>
                            <ul>
                                <li>Repost foto/video pelanggan</li>
                                <li>Buat hashtag khusus brand</li>
                                <li>Adakan kompetisi UGC</li>
                                <li>Tampilkan testimoni di website</li>
                            </ul>

                            <h2 class="green-gradient-text">9. Lokal SEO</h2>
                            <p>
                                Optimasi SEO lokal membantu UMKM muncul di pencarian "terdekat":
                            </p>
                            <ul>
                                <li>Gunakan kata kunci berbasis lokasi</li>
                                <li>Daftarkan bisnis di direktori lokal</li>
                                <li>Dapatkan backlink dari website lokal</li>
                                <li>Buat konten tentang komunitas lokal</li>
                            </ul>

                            <h2 class="green-gradient-text">10. Analisis Data Sederhana</h2>
                            <p>
                                Gunakan tools analisis gratis untuk memahami pelanggan:
                            </p>
                            <ul>
                                <li>Google Analytics untuk website</li>
                                <li>Insights dari media sosial</li>
                                <li>Data penjualan harian/bulanan</li>
                                <li>Feedback langsung pelanggan</li>
                            </ul>

                            <div class="border-t border-gray-200 mt-12 pt-8">
                                <h3 class="text-xl font-bold text-gray-800 mb-4">Komentar (45)</h3>

                                <!-- Comment Form -->
                                <div class="mb-8">
                                    <textarea
                                        class="w-full bg-white/70 backdrop-blur-sm border-2 border-gray-200 rounded-xl text-sm px-4 py-3 focus:outline-none focus:ring-2 focus:ring-emerald-200 focus:border-emerald-400 hover:border-emerald-300 transition-all duration-300"
                                        rows="3" placeholder="Tulis komentar Anda..."></textarea>
                                    <div class="flex justify-end mt-2">
                                        <button
                                            class="green-gradient-bg text-white font-semibold rounded-xl px-6 py-2 hover:opacity-90 transition-all duration-300 shadow-lg hover:shadow-xl">
                                            Kirim Komentar
                                        </button>
                                    </div>
                                </div>

                                <!-- Comment List -->
                                <div class="space-y-6">
                                    <!-- Comment 1 -->
                                    <div class="flex gap-4">
                                        <div class="flex-shrink-0">
                                            <div
                                                class="w-10 h-10 bg-gradient-to-r from-emerald-400 to-teal-500 rounded-full flex items-center justify-center">
                                                <span class="text-white font-bold text-sm">RS</span>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <div class="bg-white p-4 rounded-xl shadow-sm">
                                                <div class="flex items-center justify-between mb-2">
                                                    <h4 class="font-bold text-gray-800">Rina Susanti</h4>
                                                    <span class="text-gray-500 text-sm">2 hari lalu</span>
                                                </div>
                                                <p class="text-gray-600">Artikel yang sangat bermanfaat! Saya sudah
                                                    mencoba strategi no 1 dan 3 untuk usaha kue saya, hasilnya cukup
                                                    signifikan dalam 1 bulan terakhir.</p>
                                                <div class="flex items-center gap-4 mt-3">
                                                    <button
                                                        class="text-gray-500 hover:text-emerald-600 text-sm flex items-center gap-1">
                                                        <i class="far fa-thumbs-up"></i> 12
                                                    </button>
                                                    <button
                                                        class="text-gray-500 hover:text-emerald-600 text-sm flex items-center gap-1">
                                                        Balas
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Comment 2 -->
                                    <div class="flex gap-4">
                                        <div class="flex-shrink-0">
                                            <div
                                                class="w-10 h-10 bg-gradient-to-r from-amber-400 to-yellow-500 rounded-full flex items-center justify-center">
                                                <span class="text-white font-bold text-sm">DP</span>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <div class="bg-white p-4 rounded-xl shadow-sm">
                                                <div class="flex items-center justify-between mb-2">
                                                    <h4 class="font-bold text-gray-800">Dodi Pratama</h4>
                                                    <span class="text-gray-500 text-sm">1 minggu lalu</span>
                                                </div>
                                                <p class="text-gray-600">Untuk strategi no 7, apakah ada rekomendasi
                                                    platform untuk membuat website yang mobile friendly dengan budget
                                                    terbatas?</p>
                                                <div class="flex items-center gap-4 mt-3">
                                                    <button
                                                        class="text-gray-500 hover:text-emerald-600 text-sm flex items-center gap-1">
                                                        <i class="far fa-thumbs-up"></i> 5
                                                    </button>
                                                    <button
                                                        class="text-gray-500 hover:text-emerald-600 text-sm flex items-center gap-1">
                                                        Balas
                                                    </button>
                                                </div>

                                                <!-- Reply -->
                                                <div class="mt-4 pl-4 border-l-2 border-emerald-200">
                                                    <div class="flex gap-4">
                                                        <div class="flex-shrink-0">
                                                            <div
                                                                class="w-8 h-8 ml-4 green-gradient-bg rounded-full flex items-center justify-center">
                                                                <span class="text-white font-bold text-xs">AB</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div class="bg-emerald-50 p-3 rounded-lg">
                                                                <div class="flex items-center justify-between mb-1">
                                                                    <h4 class="font-bold text-gray-800">Ahmad Budiman
                                                                        (Penulis)</h4>
                                                                    <span class="text-gray-500 text-xs">1 minggu
                                                                        lalu</span>
                                                                </div>
                                                                <p class="text-gray-600 text-sm">Saya sarankan
                                                                    menggunakan WordPress dengan tema yang responsive,
                                                                    atau platform seperti Wix/Shopify yang sudah mobile
                                                                    friendly out of the box. Untuk UMKM, biayanya cukup
                                                                    terjangkau.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Sidebar -->
            <aside class="flex-2 lg:w-4/12 space-y-6 scrollable-sidebar">
                <!-- About Author -->
                <div class="glass rounded-3xl p-6">
                    <h3 class="font-bold text-xl green-gradient-text mb-4">Tentang Penulis</h3>
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-16 h-16 green-gradient-bg rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-xl">AB</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800">Ahmad Budiman</h4>
                            <p class="text-gray-600 text-sm">Digital Marketing Specialist</p>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">
                        Ahmad Budiman adalah praktisi digital marketing dengan pengalaman lebih dari 5 tahun membantu
                        UMKM mengembangkan bisnis secara online. Fokus pada strategi pemasaran yang efektif dengan
                        budget terbatas.
                    </p>
                    <button
                        class="w-full bg-white border-2 border-emerald-500 text-emerald-600 font-semibold rounded-xl px-4 py-2 hover:bg-emerald-500 hover:text-white transition-all duration-300">
                        Ikuti Penulis
                    </button>
                </div>

                <!-- Related Articles -->
                <div class="glass rounded-3xl p-6">
                    <h3 class="font-bold text-xl green-gradient-text mb-4">Artikel Terkait</h3>
                    <div class="space-y-4">
                        <!-- Article 1 -->
                        <a href="#" class="group flex gap-3">
                            <div class="flex-shrink-0 w-20 h-20 rounded-xl overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80"
                                    alt="Related Article"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <div>
                                <h4
                                    class="font-medium text-gray-800 group-hover:text-emerald-600 transition-colors duration-300 line-clamp-2">
                                    Cara Mengelola Cashflow UMKM yang Efektif</h4>
                                <p class="text-gray-500 text-xs mt-1">22 Jan 2024 • 3 min read</p>
                            </div>
                        </a>

                        <!-- Article 2 -->
                        <a href="#" class="group flex gap-3">
                            <div class="flex-shrink-0 w-20 h-20 rounded-xl overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1553484771-371a605b060b?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80"
                                    alt="Related Article"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <div>
                                <h4
                                    class="font-medium text-gray-800 group-hover:text-emerald-600 transition-colors duration-300 line-clamp-2">
                                    Dari Warung Kecil Menjadi Brand Ternama</h4>
                                <p class="text-gray-500 text-xs mt-1">20 Jan 2024 • 5 min read</p>
                            </div>
                        </a>

                        <!-- Article 3 -->
                        <a href="#" class="group flex gap-3">
                            <div class="flex-shrink-0 w-20 h-20 rounded-xl overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80"
                                    alt="Related Article"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <div>
                                <h4
                                    class="font-medium text-gray-800 group-hover:text-emerald-600 transition-colors duration-300 line-clamp-2">
                                    Membangun Bisnis Ramah Lingkungan</h4>
                                <p class="text-gray-500 text-xs mt-1">18 Jan 2024 • 4 min read</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Popular Tags -->
                <div class="glass rounded-3xl p-6">
                    <h3 class="font-bold text-xl green-gradient-text mb-4">Tag Populer</h3>
                    <div class="flex flex-wrap gap-2">
                        <a href="#"
                            class="px-3 py-1 bg-gradient-to-r from-emerald-100 to-emerald-200 text-emerald-700 rounded-full text-xs font-medium hover:from-emerald-200 hover:to-emerald-300 transition-all">#UMKM</a>
                        <a href="#"
                            class="px-3 py-1 bg-gradient-to-r from-teal-100 to-teal-200 text-teal-700 rounded-full text-xs font-medium hover:from-teal-200 hover:to-teal-300 transition-all">#StartUp</a>
                        <a href="#"
                            class="px-3 py-1 bg-gradient-to-r from-green-100 to-green-200 text-green-700 rounded-full text-xs font-medium hover:from-green-200 hover:to-green-300 transition-all">#DigitalMarketing</a>
                        <a href="#"
                            class="px-3 py-1 bg-gradient-to-r from-lime-100 to-lime-200 text-lime-700 rounded-full text-xs font-medium hover:from-lime-200 hover:to-lime-300 transition-all">#Ecommerce</a>
                        <a href="#"
                            class="px-3 py-1 bg-gradient-to-r from-emerald-100 to-emerald-200 text-emerald-700 rounded-full text-xs font-medium hover:from-emerald-200 hover:to-emerald-300 transition-all">#Berkelanjutan</a>
                        <a href="#"
                            class="px-3 py-1 bg-gradient-to-r from-teal-100 to-teal-200 text-teal-700 rounded-full text-xs font-medium hover:from-teal-200 hover:to-teal-300 transition-all">#Inovasi</a>
                    </div>
                </div>

                <!-- Newsletter -->
                <div class="glass rounded-3xl p-6">
                    <h3 class="font-bold text-xl green-gradient-text mb-4">Newsletter</h3>
                    <p class="text-gray-600 text-sm mb-4">Dapatkan artikel terbaru langsung di email Anda!</p>
                    <div class="space-y-3">
                        <input type="email" placeholder="Email Anda"
                            class="w-full bg-white/70 backdrop-blur-sm border-2 border-gray-200 rounded-xl text-sm px-4 py-3 focus:outline-none focus:ring-2 focus:ring-emerald-200 focus:border-emerald-400 hover:border-emerald-300 transition-all duration-300">
                        <button
                            class="w-full green-gradient-bg text-white font-semibold rounded-xl px-4 py-3 hover:opacity-90 transition-all duration-300 shadow-lg hover:shadow-xl">
                            Berlangganan
                        </button>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>
@endsection
