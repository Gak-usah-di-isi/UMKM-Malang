@extends('layouts.app')

@section('title', $article->title)

@section('content')
    <main class="flex-1 p-6">
        <div class="max-w-6xl mx-auto">
            <nav class="mb-6">
                <div class="flex items-center space-x-2 text-sm text-gray-600">
                    <a href="{{ route('admin.articles.index') }}" class="hover:text-blue-600">Kelola Article</a>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="text-gray-900 font-medium">{{ Str::limit($article->title, 50) }}</span>
                </div>
            </nav>

            <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                <div class="p-8">
                    <div class="mb-8">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex-1">
                                <h1 class="text-3xl font-bold text-gray-900 mb-3">{{ $article->title }}</h1>
                                <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                            </path>
                                        </svg>
                                        <span>{{ $article->user->name ?? 'Unknown Author' }}</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                            </path>
                                        </svg>
                                        <span>{{ $article->category->name ?? 'Tidak ada kategori' }}</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>{{ $article->created_at->format('d M Y, H:i') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 ml-4">
                                @if ($article->is_publish)
                                    <span
                                        class="bg-green-500 text-white text-xs px-3 py-1 rounded-full font-medium inline-flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Published
                                    </span>
                                @else
                                    <span
                                        class="bg-gray-500 text-white text-xs px-3 py-1 rounded-full font-medium inline-flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Draft
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    @if ($article->thumbnail)
                        <div class="mb-8">
                            <div class="relative h-80 rounded-xl overflow-hidden">
                                <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}"
                                    class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                            </div>
                        </div>
                    @endif

                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-900 mb-4">Konten Article</h2>
                        <div class="prose prose-lg max-w-none">
                            <div class="text-gray-700 leading-relaxed whitespace-pre-wrap">{{ $article->content }}</div>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 mb-8">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi Article</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="text-sm font-medium text-gray-500 mb-1">Slug</h4>
                                <p class="text-gray-900 font-mono text-sm">{{ $article->slug }}</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-500 mb-1">Status</h4>
                                <p class="text-gray-900">{{ $article->is_publish ? 'Published' : 'Draft' }}</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-500 mb-1">Dibuat</h4>
                                <p class="text-gray-900">{{ $article->created_at->format('d M Y, H:i') }}</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-500 mb-1">Total Likes</h4>
                                <p class="text-gray-900 flex items-center gap-2">
                                    <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                    </svg>
                                    {{ $likesCount }} likes
                                </p>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-500 mb-1">Jumlah Karakter</h4>
                                <p class="text-gray-900">{{ number_format(strlen($article->content)) }} karakter</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-500 mb-1">Estimasi Waktu Baca</h4>
                                <p class="text-gray-900">{{ ceil(str_word_count($article->content) / 200) }} menit</p>
                            </div>
                        </div>
                    </div>

                    <!-- Comments Section -->
                    <div class="bg-gray-50 rounded-xl p-6 mb-8">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                            Komentar ({{ $comments->count() }})
                        </h3>

                        @if ($comments->count() > 0)
                            <div class="space-y-4">
                                @foreach ($comments as $comment)
                                    <div class="bg-white rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-start gap-3">
                                            <div class="flex-shrink-0">
                                                <div
                                                    class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                                                    <span class="text-white text-sm font-medium">
                                                        {{ substr($comment->user->name ?? 'U', 0, 1) }}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <div class="flex items-center gap-2 mb-1">
                                                    <h4 class="text-sm font-medium text-gray-900">
                                                        {{ $comment->user->name ?? 'Unknown User' }}
                                                    </h4>
                                                    <span class="text-xs text-gray-500">
                                                        {{ $comment->created_at->format('d M Y, H:i') }}
                                                    </span>
                                                </div>
                                                <p class="text-sm text-gray-700 leading-relaxed">
                                                    {{ $comment->content }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-8">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                    </path>
                                </svg>
                                <p class="text-gray-500">Belum ada komentar untuk artikel ini.</p>
                            </div>
                        @endif
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3 pt-6 border-t justify-end">
                        <a href="{{ route('admin.articles.edit', $article->slug) }}"
                            class="flex-1 sm:flex-none bg-blue-600 text-white py-3 px-6 rounded-lg text-center font-medium hover:bg-blue-700 transition-colors flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                </path>
                            </svg>
                            Edit Article
                        </a>

                        <form action="{{ route('admin.articles.destroy', $article->slug) }}" method="POST"
                            class="flex-1 sm:flex-none"
                            onsubmit="return confirm('Yakin ingin menghapus article ini? Tindakan ini tidak dapat dibatalkan.')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="w-full bg-red-500 text-white py-3 px-6 rounded-lg font-medium hover:bg-red-600 transition-colors flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                Hapus Article
                            </button>
                        </form>

                        <a href="{{ route('admin.articles.index') }}"
                            class="flex-1 sm:flex-none bg-gray-100 text-gray-700 py-3 px-6 rounded-lg text-center font-medium hover:bg-gray-200 transition-colors flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Kembali ke Daftar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <style>
        .prose {
            max-width: none;
        }

        .prose p {
            margin-bottom: 1rem;
        }

        .prose h1,
        .prose h2,
        .prose h3,
        .prose h4,
        .prose h5,
        .prose h6 {
            margin-top: 1.5rem;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .prose ul,
        .prose ol {
            margin: 1rem 0;
            padding-left: 1.5rem;
        }

        .prose blockquote {
            border-left: 4px solid #e5e7eb;
            padding-left: 1rem;
            margin: 1rem 0;
            font-style: italic;
            color: #6b7280;
        }
    </style>
@endsection
