@extends('layouts.app')

@section('title', $umkm->name)

@section('content')
    <main class="flex-1 p-6">
        <div class="max-w-6xl mx-auto">
            <nav class="mb-6">
                <div class="flex items-center space-x-2 text-sm text-gray-600">
                    <a href="{{ route('admin.umkm.index') }}" class="hover:text-blue-600">Kelola UMKM</a>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="text-gray-900 font-medium">{{ Str::limit($umkm->name, 50) }}</span>
                </div>
            </nav>

            <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                <div class="p-8">
                    <div class="mb-8">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex-1">
                                <h1 class="text-3xl font-bold text-gray-900 mb-3">{{ $umkm->name }}</h1>
                                <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                            </path>
                                        </svg>
                                        <span>{{ $umkm->user->name ?? 'Unknown Owner' }}</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                            </path>
                                        </svg>
                                        <span>{{ $umkm->category->name ?? 'Tidak ada kategori' }}</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span>{{ $umkm->district }}</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>{{ $umkm->created_at->format('d M Y, H:i') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 ml-4">
                                @if ($umkm->verification_status === 'verified')
                                    <span
                                        class="bg-green-500 text-white text-xs px-3 py-1 rounded-full font-medium inline-flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Verified
                                    </span>
                                @elseif ($umkm->verification_status === 'rejected')
                                    <span
                                        class="bg-red-500 text-white text-xs px-3 py-1 rounded-full font-medium inline-flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                        Rejected
                                    </span>
                                @else
                                    <span
                                        class="bg-yellow-500 text-white text-xs px-3 py-1 rounded-full font-medium inline-flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Pending
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    @if ($umkm->logo)
                        <div class="mb-8">
                            <div class="relative h-80 rounded-xl overflow-hidden">
                                <img src="{{ asset('storage/' . $umkm->logo) }}" alt="{{ $umkm->name }}"
                                    class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                            </div>
                        </div>
                    @endif

                    @if ($umkm->tagline)
                        <div class="mb-8">
                            <h2 class="text-xl font-semibold text-gray-900 mb-4">Tagline</h2>
                            <div class="bg-blue-50 rounded-xl p-6">
                                <p class="text-blue-800 text-lg font-medium italic">"{{ $umkm->tagline }}"</p>
                            </div>
                        </div>
                    @endif

                    @if ($umkm->description)
                        <div class="mb-8">
                            <h2 class="text-xl font-semibold text-gray-900 mb-4">Deskripsi</h2>
                            <div class="prose prose-lg max-w-none">
                                <div class="text-gray-700 leading-relaxed whitespace-pre-wrap">{{ $umkm->description }}
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="bg-gray-50 rounded-xl p-6 mb-8">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi UMKM</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="text-sm font-medium text-gray-500 mb-1">Slug</h4>
                                <p class="text-gray-900 font-mono text-sm">{{ $umkm->slug }}</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-500 mb-1">Status Verifikasi</h4>
                                <p class="text-gray-900">{{ ucfirst($umkm->verification_status) }}</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-500 mb-1">Tahun Berdiri</h4>
                                <p class="text-gray-900">{{ $umkm->established_year }}</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-500 mb-1">Alamat</h4>
                                <p class="text-gray-900">{{ $umkm->address }}</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-500 mb-1">Jumlah Produk</h4>
                                <p class="text-gray-900">{{ $umkm->products->count() }} produk</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-500 mb-1">Jumlah Foto</h4>
                                <p class="text-gray-900">{{ $umkm->photos->count() }} foto</p>
                            </div>
                        </div>
                    </div>

                    @if ($umkm->google_maps)
                        <div class="mb-8">
                            <h2 class="text-xl font-semibold text-gray-900 mb-4">Lokasi</h2>
                            <div class="rounded-xl overflow-hidden">
                                {!! $umkm->google_maps !!}
                            </div>
                        </div>
                    @endif

                    <div class="flex flex-col sm:flex-row gap-3 pt-6 border-t justify-end">
                        <a href="{{ route('admin.umkm.edit', $umkm->slug) }}"
                            class="flex-1 sm:flex-none bg-blue-600 text-white py-3 px-6 rounded-lg text-center font-medium hover:bg-blue-700 transition-colors flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                </path>
                            </svg>
                            Edit UMKM
                        </a>

                        <form action="{{ route('admin.umkm.destroy', $umkm->slug) }}" method="POST"
                            class="flex-1 sm:flex-none"
                            onsubmit="return confirm('Yakin ingin menghapus UMKM ini? Tindakan ini tidak dapat dibatalkan.')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="w-full bg-red-500 text-white py-3 px-6 rounded-lg font-medium hover:bg-red-600 transition-colors flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                Hapus UMKM
                            </button>
                        </form>

                        <a href="{{ route('admin.umkm.index') }}"
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
@endsection
