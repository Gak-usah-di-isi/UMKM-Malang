@extends('layouts.app')

@section('title', 'Kelola Article')

@section('content')
    <main class="flex-1 p-6">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">Kelola Article</h1>
                    <p class="text-gray-600">Kelola semua article di platform</p>
                </div>
                <a href="{{ route('admin.articles.create') }}"
                    class="bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700 transition-colors shadow-md flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Tambah Article
                </a>
            </div>

            @if (session('success'))
                <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg border border-green-200">
                    {{ session('success') }}
                </div>
            @endif

            @if ($articles->isEmpty())
                <div class="text-center py-20 bg-white rounded-xl shadow-sm">
                    <svg class="mx-auto w-24 h-24 text-gray-300 mb-6" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                    </svg>
                    <h3 class="text-2xl font-semibold text-gray-700 mb-3">Belum ada article</h3>
                    <p class="text-gray-500 mb-8 max-w-md mx-auto">Mulai tambahkan article pertama untuk berbagi informasi
                    </p>
                    <a href="{{ route('admin.articles.create') }}"
                        class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition-colors shadow-md">
                        Tambah Article Pertama
                    </a>
                </div>
            @else
                <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($articles as $article)
                        <div
                            class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group">

                            <div class="relative h-48 overflow-hidden">
                                @if ($article->thumbnail)
                                    <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}"
                                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                                @else
                                    <div class="w-full h-full bg-gray-100 flex items-center justify-center">
                                        <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                                        </svg>
                                    </div>
                                @endif

                                <div class="absolute top-3 left-3 flex flex-col gap-2">
                                    @if ($article->is_publish)
                                        <span class="bg-green-500 text-white text-xs px-2 py-1 rounded-full font-medium">
                                            Published
                                        </span>
                                    @else
                                        <span class="bg-gray-500 text-white text-xs px-2 py-1 rounded-full font-medium">
                                            Draft
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="mb-4">
                                    <h3 class="font-bold text-xl text-gray-800 line-clamp-2 mb-2">{{ $article->title }}</h3>
                                    <p class="text-sm text-gray-600 line-clamp-3">
                                        {{ Str::limit(strip_tags($article->content), 100) }}</p>
                                </div>

                                <div class="flex items-center justify-between mb-5">
                                    <div>
                                        <p class="text-sm font-medium text-blue-600">
                                            {{ $article->category->name ?? 'Tidak ada kategori' }}
                                        </p>
                                        <p class="text-xs text-gray-500">{{ $article->user->name ?? 'Unknown' }}</p>
                                    </div>
                                    <div class="text-xs text-gray-400 text-right">
                                        <p>{{ $article->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>

                                <div class="flex gap-3">
                                    <a href="{{ route('admin.articles.show', $article->slug) }}"
                                        class="flex-1 bg-gray-100 text-gray-700 py-3 px-4 rounded-lg text-center text-sm font-medium hover:bg-gray-200 transition-colors flex items-center justify-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg>
                                        Detail
                                    </a>
                                    <a href="{{ route('admin.articles.edit', $article->slug) }}"
                                        class="flex-1 bg-blue-600 text-white py-3 px-4 rounded-lg text-center text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                            </path>
                                        </svg>
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.articles.destroy', $article->slug) }}" method="POST"
                                        class="inline-block"
                                        onsubmit="return confirm('Yakin ingin menghapus article ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 text-white py-3 px-4 rounded-lg text-sm font-medium hover:bg-red-600 transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                @if ($articles->hasPages())
                    <div class="mt-8">
                        {{ $articles->links() }}
                    </div>
                @endif
            @endif
        </div>
    </main>

    <style>
        .line-clamp-2 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }

        .line-clamp-3 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
        }
    </style>
@endsection
