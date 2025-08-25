@extends('core.landingPage')

@section('title', 'UMKM Kota Malang | UMKM Lists')

@section('style')
    <style>
        /* Base animations and styles */
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

        /* Custom scrollbar styles for different sections */
        /* Main content scroll */
        .scrollable-main {
            height: calc(100vh - 2rem);
            overflow-y: auto;
            scrollbar-width: thin;
            scrollbar-color: #10b981 #e5e7eb;
        }

        .scrollable-main::-webkit-scrollbar {
            width: 6px;
        }

        .scrollable-main::-webkit-scrollbar-track {
            background: #e5e7eb;
            border-radius: 10px;
        }

        .scrollable-main::-webkit-scrollbar-thumb {
            background-color: #10b981;
            border-radius: 10px;
        }

        /* Sidebar scroll - different style */
        .scrollable-sidebar {
            height: calc(100vh - 2rem);
            overflow-y: auto;
            scrollbar-width: thin;
            scrollbar-color: #10b981;
        }

        .scrollable-sidebar::-webkit-scrollbar {
            width: 6px;
        }

        .scrollable-sidebar::-webkit-scrollbar-track {
            background: #bfdbfe;
            border-radius: 10px;
        }

        .scrollable-sidebar::-webkit-scrollbar-thumb {
            background-color: #3b82f6;
            border-radius: 10px;
        }

        /* Hide scrollbars on mobile */
        @media (max-width: 1023px) {

            .scrollable-sidebar,
            .scrollable-main {
                scrollbar-width: none;
                -ms-overflow-style: none;
            }

            .scrollable-sidebar::-webkit-scrollbar,
            .scrollable-main::-webkit-scrollbar {
                display: none;
            }
        }

        /* UMKM Card Specific Styles */
        .umkm-card {
            transition: all 0.3s ease;
            border-radius: 1.5rem;
            overflow: hidden;
            position: relative;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.8) 0%, rgba(236, 253, 245, 0.9) 100%);
        }

        .umkm-card:hover {
            transform: translateY(-5px);
        }

        .umkm-logo {
            width: 80px;
            height: 80px;
            border-radius: 1rem;
            object-fit: cover;
            border: 3px solid white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .umkm-card:hover .umkm-logo {
            transform: scale(1.05);
        }

        .umkm-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: linear-gradient(to right, #f59e0b, #ef4444);
            color: white;
            font-size: 0.75rem;
            font-weight: bold;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            z-index: 10;
        }

        .product-count {
            background-color: #ecfdf5;
            color: #059669;
            padding: 0.25rem 0.5rem;
            border-radius: 0.375rem;
            font-size: 0.75rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .umkm-card:hover .product-count {
            background-color: #d1fae5;
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
            transition: all 0.3s ease;
        }

        .umkm-card:hover .verified-badge {
            background-color: #d1fae5;
        }

        /* Section transition effects */
        .section-transition {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Floating action button */
        .fab-button {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: linear-gradient(to bottom right, #10b981, #059669);
            box-shadow: 0 4px 6px -1px rgba(16, 185, 129, 0.3), 0 2px 4px -1px rgba(16, 185, 129, 0.2);
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
            box-shadow: 0 10px 15px -3px rgba(16, 185, 129, 0.3), 0 4px 6px -2px rgba(16, 185, 129, 0.2);
        }
    </style>
@endsection

@section('content')
    <div class="min-h-screen py-8 bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 relative overflow-hidden">
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

        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col lg:flex-row relative gap-8 pt-6">
                <aside class="lg:w-3/12 h-fit sticky top-6">
                    <div class="scrollable-sidebar space-y-6 lg:pr-2">
                        <div class="backdrop-blur-lg bg-white/80 border border-white/20 rounded-3xl border-neutral-200 p-6">
                            <div class="flex items-center gap-3 mb-6">
                                <h2
                                    class="font-bold text-xl bg-gradient-to-r from-blue-600 to-cyan-600 bg-clip-text text-transparent">
                                    Cari UMKM</h2>
                            </div>
                            <div class="relative">
                                <input type="text" placeholder="Cari nama UMKM..."
                                    class="w-full bg-white/70 backdrop-blur-sm border-2 border-gray-200 rounded-xl text-sm px-4 py-3 pl-10">
                            </div>
                        </div>

                        <div class="backdrop-blur-lg bg-white/80 border border-white/20 rounded-3xl border-neutral-200 p-6">
                            <div class="flex items-center gap-3 mb-6">
                                <h2
                                    class="font-bold text-xl bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">
                                    Kategori Bisnis</h2>
                            </div>
                            <ul class="space-y-2">
                                @foreach ($categories as $category)
                                    <li class="filter-item">
                                        <a href="{{ route('list-umkm.index', ['category' => $category->slug]) }}"
                                            class="flex items-center justify-between p-3 rounded-2xl cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <span class="font-medium text-sm">{{ $category->name }}</span>
                                            </div>
                                            <span
                                                class="text-xs bg-green-100 text-gray-600 px-2 py-1 rounded-full">{{ $category->umkms_count }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </aside>

                <main class="flex-1 w-full md:w-9/12">
                    <div class="scrollable-main">
                        <div
                            class="relative rounded-3xl overflow-hidden bg-gradient-to-br from-green-400 via-emerald-500 to-teal-600 mb-8">
                            <div class="absolute inset-0 bg-black/10"></div>
                            <div class="relative p-8">
                                <div class="flex items-center justify-between">
                                    <div class="space-y-4">
                                        <div
                                            class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm rounded-full px-6 py-2">
                                            <span class="w-2 h-2 bg-green-300 rounded-full animate-pulse"></span>
                                            <span class="text-white font-medium">UMKM Terverifikasi</span>
                                        </div>
                                        <h1 class="text-4xl font-black text-white drop-shadow-lg">
                                            Daftar UMKM Kota Malang
                                        </h1>
                                        <p class="text-green-100 text-lg max-w-md">Temukan pelaku UMKM terbaik dari Kota
                                            Malang dengan berbagai produk unggulan</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($umkms as $umkm)
                                <div
                                    class="umkm-card backdrop-blur-sm border border-white/30 rounded-3xl p-6 border-neutral-200 hover:-translate-y-3 hover:border-green-200 cursor-pointer overflow-hidden relative">
                                    <div class="flex flex-col items-center text-center mb-4">
                                        <img src="{{ Storage::url($umkm->logo) }}" alt="Logo {{ $umkm->name }}"
                                            class="umkm-logo mb-3">
                                        <h3 class="text-lg font-bold text-gray-800">{{ $umkm->name }}</h3>
                                        <p class="text-sm text-gray-600">{{ $umkm->user->name }}</p>
                                    </div>

                                    <div class="flex justify-center mb-4">
                                        <span
                                            class="px-3 py-1 bg-gray-100 text-gray-800 text-xs font-medium rounded-full">{{ $umkm->category->name }}</span>
                                    </div>

                                    <div class="flex items-center justify-between mb-4">
                                        <div class="product-count">{{ $umkm->products->count() }} Produk</div>
                                        @if ($umkm->verification_status == 'verified')
                                            <div class="verified-badge flex items-center text-green-600">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Terverifikasi
                                            </div>
                                        @endif

                                    </div>

                                    <div class="space-y-2 text-sm">
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                                </path>
                                            </svg>
                                            <span>{{ $umkm->user->phone }}</span>
                                        </div>
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                                </path>
                                            </svg>
                                            <span class="truncate">{{ $umkm->user->email }}</span>
                                        </div>
                                    </div>

                                    <a href="{{ route('list-umkm.show', $umkm->slug) }}"
                                        class="w-full block text-center mt-4 bg-gradient-to-r from-green-500 to-emerald-500 text-white font-bold py-2 text-sm px-4 rounded-xl hover:from-green-600 hover:to-emerald-600 transition-all duration-300">
                                        Lihat UMKM
                                    </a>
                                </div>
                            @endforeach
                        </section>

                        <div class="mt-8 flex justify-center">
                            {{ $umkms->links() }}
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scroll behavior for both sections
            const sidebarScroll = document.querySelector('.scrollable-sidebar');
            const mainScroll = document.querySelector('.scrollable-main');

            if (sidebarScroll) {
                sidebarScroll.style.scrollBehavior = 'smooth';
            }

            if (mainScroll) {
                mainScroll.style.scrollBehavior = 'smooth';
            }

            // Add intersection observer for scroll effects
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fadeIn');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.umkm-card').forEach(card => {
                observer.observe(card);
            });
        });
    </script>
@endsection
