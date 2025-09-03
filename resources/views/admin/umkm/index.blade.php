@extends('layouts.app')

@section('title', 'Kelola UMKM')

@section('content')
    <main class="flex-1 p-6">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">Kelola UMKM</h1>
                    <p class="text-gray-600">Kelola semua UMKM di platform</p>
                </div>
            </div>

            @if (session('success'))
                <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg border border-green-200">
                    {{ session('success') }}
                </div>
            @endif

            @if ($umkms->isEmpty())
                <div class="text-center py-20 bg-white rounded-xl shadow-sm">
                    <svg class="mx-auto w-24 h-24 text-gray-300 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-4m-5 0H3m2 0h3M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    <h3 class="text-2xl font-semibold text-gray-700 mb-3">Belum ada UMKM</h3>
                    <p class="text-gray-500 mb-8 max-w-md mx-auto">Belum ada UMKM yang terdaftar dalam sistem</p>
                </div>
            @else
                <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($umkms as $umkm)
                        <div
                            class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group">

                            <div class="relative h-48 overflow-hidden">
                                @if ($umkm->logo)
                                    <img src="{{ asset('storage/' . $umkm->logo) }}" alt="{{ $umkm->name }}"
                                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                                @else
                                    <div class="w-full h-full bg-gray-100 flex items-center justify-center">
                                        <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-4m-5 0H3m2 0h3M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                        </svg>
                                    </div>
                                @endif

                                <div class="absolute top-3 left-3 flex flex-col gap-2">
                                    @if ($umkm->verification_status === 'verified')
                                        <span class="bg-green-500 text-white text-xs px-2 py-1 rounded-full font-medium">
                                            Verified
                                        </span>
                                    @elseif ($umkm->verification_status === 'rejected')
                                        <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full font-medium">
                                            Rejected
                                        </span>
                                    @else
                                        <span class="bg-yellow-500 text-white text-xs px-2 py-1 rounded-full font-medium">
                                            Pending
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="mb-4">
                                    <h3 class="font-bold text-xl text-gray-800 line-clamp-2 mb-2">{{ $umkm->name }}</h3>
                                    <p class="text-sm text-gray-600 line-clamp-3">
                                        {{ Str::limit($umkm->description, 100) }}</p>
                                </div>

                                <div class="flex items-center justify-between mb-5">
                                    <div>
                                        <p class="text-sm font-medium text-blue-600">
                                            {{ $umkm->category->name ?? 'Tidak ada kategori' }}
                                        </p>
                                        <p class="text-xs text-gray-500">{{ $umkm->user->name ?? 'Unknown' }}</p>
                                    </div>
                                    <div class="text-xs text-gray-400 text-right">
                                        <p>{{ $umkm->created_at->diffForHumans() }}</p>
                                        <p>{{ $umkm->district }}</p>
                                    </div>
                                </div>

                                <div class="flex gap-3">
                                    <a href="{{ route('admin.umkm.show', $umkm->slug) }}"
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
                                    <a href="{{ route('admin.umkm.edit', $umkm->slug) }}"
                                        class="flex-1 bg-blue-600 text-white py-3 px-4 rounded-lg text-center text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                            </path>
                                        </svg>
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.umkm.destroy', $umkm->slug) }}" method="POST"
                                        class="inline-block" onsubmit="return confirm('Yakin ingin menghapus UMKM ini?')">
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

                @if ($umkms->hasPages())
                    <div class="mt-8">
                        {{ $umkms->links() }}
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
