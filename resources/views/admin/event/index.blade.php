@extends('layouts.app')

@section('title', 'Kelola Event')

@section('content')
    <main class="flex-1 p-6">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">Kelola Event</h1>
                    <p class="text-gray-600">Kelola semua event di platform</p>
                </div>
                <a href="{{ route('admin.events.create') }}"
                    class="bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700 transition-colors shadow-md flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Tambah Event
                </a>
            </div>

            @if (session('success'))
                <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg border border-green-200">
                    {{ session('success') }}
                </div>
            @endif

            @if ($events->isEmpty())
                <div class="text-center py-20 bg-white rounded-xl shadow-sm">
                    <svg class="mx-auto w-24 h-24 text-gray-300 mb-6" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M8 7V3a1 1 0 011-1h6a1 1 0 011 1v4h3a1 1 0 011 1v9a2 2 0 01-2 2H5a2 2 0 01-2-2V8a1 1 0 011-1h3z" />
                    </svg>
                    <h3 class="text-2xl font-semibold text-gray-700 mb-3">Belum ada event</h3>
                    <p class="text-gray-500 mb-8 max-w-md mx-auto">Mulai tambahkan event pertama untuk komunitas UMKM
                    </p>
                    <a href="{{ route('admin.events.create') }}"
                        class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition-colors shadow-md">
                        Tambah Event Pertama
                    </a>
                </div>
            @else
                <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($events as $event)
                        <div
                            class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group">

                            <div class="relative h-48 overflow-hidden">
                                @if ($event->thumbnail)
                                    <img src="{{ asset('storage/' . $event->thumbnail) }}" alt="{{ $event->title }}"
                                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                                @else
                                    <div class="w-full h-full bg-gray-100 flex items-center justify-center">
                                        <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                d="M8 7V3a1 1 0 011-1h6a1 1 0 011 1v4h3a1 1 0 011 1v9a2 2 0 01-2 2H5a2 2 0 01-2-2V8a1 1 0 011-1h3z" />
                                        </svg>
                                    </div>
                                @endif

                                <div class="absolute top-3 left-3 flex flex-col gap-2">
                                    @if ($event->status == 'upcoming')
                                        <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded-full font-medium">
                                            Upcoming
                                        </span>
                                    @elseif($event->status == 'ongoing')
                                        <span class="bg-green-500 text-white text-xs px-2 py-1 rounded-full font-medium">
                                            Ongoing
                                        </span>
                                    @elseif($event->status == 'completed')
                                        <span class="bg-gray-500 text-white text-xs px-2 py-1 rounded-full font-medium">
                                            Completed
                                        </span>
                                    @else
                                        <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full font-medium">
                                            Cancelled
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="mb-4">
                                    <h3 class="font-bold text-xl text-gray-800 line-clamp-2 mb-2">{{ $event->title }}</h3>
                                    <p class="text-sm text-gray-600 line-clamp-3">
                                        {{ Str::limit(strip_tags($event->content), 100) }}</p>
                                </div>

                                <div class="flex items-center justify-between mb-5">
                                    <div>
                                        <p class="text-sm font-medium text-blue-600">
                                            {{ $event->organizer }}
                                        </p>
                                        <p class="text-xs text-gray-500">{{ $event->location }}</p>
                                    </div>
                                    <div class="text-xs text-gray-400 text-right">
                                        <p>{{ $event->start_time->format('d M Y') }}</p>
                                        <p>{{ $event->start_time->format('H:i') }}</p>
                                    </div>
                                </div>

                                <div class="flex gap-3">
                                    <a href="{{ route('admin.events.show', $event->slug) }}"
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
                                    <a href="{{ route('admin.events.edit', $event->slug) }}"
                                        class="flex-1 bg-blue-600 text-white py-3 px-4 rounded-lg text-center text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                            </path>
                                        </svg>
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.events.destroy', $event->slug) }}" method="POST"
                                        class="inline-block" onsubmit="return confirm('Yakin ingin menghapus event ini?')">
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

                @if ($events->hasPages())
                    <div class="mt-8">
                        {{ $events->links() }}
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
