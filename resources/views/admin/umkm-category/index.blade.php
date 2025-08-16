@extends('layouts.app')

@section('title', 'Kategori UMKM')

@section('content')
    <main class="flex-1 p-6">
        <div class="max-w-6xl mx-auto">
            <div class="mb-6 flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">Kategori UMKM</h1>
                    <p class="text-gray-600">Kelola kategori UMKM yang tersedia</p>
                </div>
                <a href="{{ route('admin.umkm-categories.create') }}"
                    class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700 transition-colors flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Tambah Kategori
                </a>
            </div>

            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    {{ session('error') }}
                </div>
            @endif

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm text-left">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th class="px-6 py-3">No</th>
                                <th class="px-6 py-3">Nama Kategori</th>
                                <th class="px-6 py-3">Deskripsi</th>
                                <th class="px-6 py-3">Jumlah UMKM</th>
                                <th class="px-6 py-3">Dibuat</th>
                                <th class="px-6 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $index => $category)
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td class="px-6 py-4">{{ $categories->firstItem() + $index }}</td>
                                    <td class="px-6 py-4 font-medium text-gray-900">{{ $category->name }}</td>
                                    <td class="px-6 py-4 text-gray-600">
                                        {{ $category->description ? Str::limit($category->description, 50) : '-' }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                                            {{ $category->umkms_count }} UMKM
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">{{ $category->created_at->format('d M Y') }}</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <a href="{{ route('admin.umkm-categories.edit', $category->slug) }}"
                                                class="text-blue-600 hover:text-blue-800 font-semibold">
                                                Edit
                                            </a>
                                            <form action="{{ route('admin.umkm-categories.destroy', $category->slug) }}"
                                                method="POST" class="inline"
                                                onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-600 hover:text-red-800 font-semibold">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center py-6 text-gray-500">Belum ada kategori UMKM.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection
