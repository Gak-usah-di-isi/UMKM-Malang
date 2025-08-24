@extends('core.landingPage')

@section('title', 'UMKM Kota Malang | Articles')
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

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Custom scrollbar */
        .scrollable-sidebar {
            height: calc(100vh - 2rem);
            overflow-y: auto;
            scrollbar-width: thin;
            scrollbar-color: #059669 #e5e7eb;
        }

        .scrollable-sidebar::-webkit-scrollbar {
            width: 6px;
        }

        .scrollable-sidebar::-webkit-scrollbar-track {
            background: #e5e7eb;
            border-radius: 10px;
        }

        .scrollable-sidebar::-webkit-scrollbar-thumb {
            background-color: #059669;
            border-radius: 10px;
        }

        .scrollable-main {
            height: calc(100vh - 2rem);
            overflow-y: auto;
            scrollbar-width: thin;
            scrollbar-color: #059669 #e5e7eb;
        }

        .scrollable-main::-webkit-scrollbar {
            width: 6px;
        }

        .scrollable-main::-webkit-scrollbar-track {
            background: #e5e7eb;
            border-radius: 10px;
        }

        .scrollable-main::-webkit-scrollbar-thumb {
            background-color: #059669;
            border-radius: 10px;
        }

        /* Hide scrollbars on medium screens */
        @media (max-width: 1023px) {
            .scrollable-sidebar {
                scrollbar-width: none;
                -ms-overflow-style: none;
            }

            .scrollable-sidebar::-webkit-scrollbar {
                display: none;
            }

            .scrollable-main {
                scrollbar-width: none;
                -ms-overflow-style: none;
            }

            .scrollable-main::-webkit-scrollbar {
                display: none;
            }
        }

        /* Hover effects for article cards */
        .article-card:hover .article-image {
            transform: scale(1.05);
        }

        .article-card:hover .article-overlay {
            opacity: 1;
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
    </style>
@endsection
@section('content')
    <div class="min-h-screen py-8 bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 relative overflow-hidden">
        <div class="container mx-auto  relative z-10">

            <nav class="flex ml-4 lg:ml-8 text-sm text-gray-600" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li><a href="/" class="hover:text-emerald-600">Beranda</a></li>
                    <li><i class="fas fa-chevron-right text-xs mx-2 text-gray-400"></i></li>
                    <li><a href="{{ route('articles.index') }}" class="hover:text-emerald-600">Artikel & Berita</a></li>

                </ol>
            </nav>

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
                <div class="flex flex-col lg:flex-row relative gap-8 pt-6">
                    <aside class="lg:w-3/12 h-fit sticky top-6">
                        <div class="scrollable-sidebar space-y-6 lg:pr-2">
                            <!-- Categories Filter -->
                            <div class="glass rounded-3xl p-6 transition-all duration-500 transform">
                                <div class="flex items-center gap-3 mb-6">
                                    <h2 class="font-bold text-xl green-gradient-text">Kategori Artikel</h2>
                                </div>
                                <ul class="space-y-2">
                                    @foreach ($categories as $category)
                                        <li class="group">
                                            <div
                                                class="flex items-center justify-between p-3 rounded-2xl cursor-pointer transition-all hover:text-emerald-600 duration-300 hover:bg-gradient-to-r hover:from-emerald-100 hover:to-teal-100 hover:border-emerald-200 border border-transparent">
                                                <a href="{{ route('articles.index', ['category' => $category->slug]) }}"
                                                    class="flex items-center space-x-3">
                                                    <span class="font-medium text-sm">{{ $category->name }}</span>
                                                </a>
                                                <span
                                                    class="text-xs bg-emerald-100 text-emerald-600 px-2 py-1 rounded-full">{{ $category->articles->count() }}</span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </aside>

                    <main class="flex-1 w-full md:w-9/12">
                        <div class="scrollable-main">
                            <div
                                class="relative rounded-3xl overflow-hidden bg-gradient-to-br from-emerald-500 via-green-600 to-teal-700 mb-8 transform transition-all duration-500">
                                <div class="absolute inset-0 bg-black/10"></div>
                                <div class="relative p-8">
                                    <div class="flex items-center justify-between">
                                        <div class="space-y-4">
                                            <div
                                                class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm rounded-full px-6 py-2">
                                                <span class="w-2 h-2 bg-emerald-300 rounded-full animate-pulse"></span>
                                                <span class="text-white font-medium">Artikel Terbaru</span>
                                            </div>
                                            <h1 class="text-4xl font-black text-white drop-shadow-lg">
                                                Wawasan Terkini untuk
                                                <span
                                                    class="block bg-gradient-to-r from-yellow-300 to-amber-300 bg-clip-text text-transparent">
                                                    Pengusaha UMKM
                                                </span>
                                            </h1>
                                            <p class="text-emerald-100 text-lg max-w-md">Temukan tips, trik, dan inspirasi
                                                terbaru untuk mengembangkan bisnis UMKM Anda</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute bottom-0 left-0 right-0">
                                    <svg viewBox="0 0 1200 120" preserveAspectRatio="none"
                                        class="relative block w-full h-16">
                                        <path
                                            d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                                            fill="white" fill-opacity="0.1"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="glass rounded-3xl p-8">

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    @foreach ($articles as $article)
                                        <div
                                            class="article-card backdrop-blur-sm bg-white/60 border border-white/30 rounded-3xl overflow-hidden border-neutral-200 transition-all duration-500 transform hover:-translate-y-3 cursor-pointer group">
                                            <div class="relative overflow-hidden">
                                                <img src="{{ asset($article->thumbnail) }}" alt="Article Image"
                                                    class="article-image w-full h-48 object-cover transition-transform duration-500">
                                                <div
                                                    class="article-overlay absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 transition-opacity duration-300">
                                                </div>

                                                <div class="absolute top-4 left-4">
                                                    <span
                                                        class="bg-emerald-500 text-white text-xs font-bold px-3 py-1 rounded-full">{{ $article->category->name }}</span>
                                                </div>
                                            </div>

                                            <div class="p-6">
                                                <div class="flex items-center gap-2 mb-3">

                                                </div>

                                                <h3
                                                    class="font-bold text-gray-800 mb-3 group-hover:text-emerald-600 transition-colors duration-300 line-clamp-2">
                                                    <a
                                                        href="{{ route('articles.show', ['slug' => $article->slug]) }}">{{ $article->title }}</a>
                                                </h3>

                                                <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                                    {{ \Str::limit($article->content, 150) }}
                                                </p>

                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap-2">
                                                        <div
                                                            class="w-8 h-8 green-gradient-bg rounded-full flex items-center justify-center">
                                                            <span
                                                                class="text-white font-bold text-xs">{{ strtoupper(substr($article->user->name, 0, 2)) }}</span>
                                                        </div>
                                                        <div>
                                                            <p class="font-medium text-gray-800 text-sm">
                                                                {{ $article->user->name }}</p>
                                                            <p class="text-gray-500 text-xs">
                                                                {{ $article->created_at->format('d M Y') }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="flex justify-center mt-12" id="load-more-container">
                                    @if ($articles->hasMorePages())
                                        <button id="load-more-btn"
                                            class="group green-gradient-bg text-white font-semibold px-8 py-4 rounded-2xl hover:opacity-90 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                            <span class="flex items-center gap-2">
                                                <span>Muat Artikel Lainnya</span>
                                                <svg class="w-5 h-5 transform group-hover:rotate-180 transition-transform duration-300"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection
