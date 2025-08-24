@extends('core.landingPage')

@section('title', 'Detail Artikel UMKM')

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
@section('content')
    <div class="min-h-screen py-8 bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <nav class="flex mb-6 text-sm text-gray-600" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li><a href="/" class="hover:text-emerald-600">Beranda</a></li>
                    <li><i class="fas fa-chevron-right text-xs mx-2 text-gray-400"></i></li>
                    <li><a href="{{ route('articles.index') }}" class="hover:text-emerald-600">Artikel & Berita</a></li>
                    <li><i class="fas fa-chevron-right text-xs mx-2 text-gray-400"></i></li>
                    <li><span class="text-emerald-600 font-medium">Detail Artikel</span></li>
                </ol>
            </nav>

            <main class="flex-5 scrollable-main">
                <div class="glass rounded-3xl overflow-hidden mb-8">
                    <div class="relative">
                        <img src="{{ asset($article->thumbnail) }}" alt="Artikel UMKM" class="w-full h-96 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-8">
                            <div class="flex items-center gap-2 mb-4">
                                <span
                                    class="bg-emerald-500 text-white text-xs font-bold px-3 py-1 rounded-full">{{ $article->category->name }}</span>
                            </div>
                            <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">{{ $article->title }}</h1>
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 green-gradient-bg rounded-full flex items-center justify-center">
                                    <span
                                        class="text-white font-bold text-sm">{{ strtoupper(substr($article->user->name, 0, 2)) }}</span>
                                </div>
                                <div>
                                    <p class="font-medium text-white">{{ $article->user->name }}</p>
                                    <p class="text-white/80 text-sm">{{ $article->created_at->format('d M Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-8">
                        <div class="article-content">
                            {!! nl2br(e($article->content)) !!}
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
