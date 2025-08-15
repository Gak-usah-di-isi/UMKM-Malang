@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <main class="flex-1 p-6">
        <div class="max-w-6xl mx-auto">
            <nav class="mb-6">
                <div class="flex items-center space-x-2 text-sm text-gray-600">
                    <a href="{{ route('umkm.products.index') }}" class="hover:text-blue-600">Produk Saya</a>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="text-gray-900 font-medium">{{ $product->name }}</span>
                </div>
            </nav>

            <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                <div class="grid lg:grid-cols-2 gap-8 p-8">
                    <div class="space-y-4">
                        @if ($product->photos->count() > 0)
                            <div class="relative">
                                <div class="main-image-container relative h-96 rounded-xl overflow-hidden">
                                    @foreach ($product->photos as $index => $photo)
                                        <img src="{{ asset('storage/' . $photo->file_path) }}" alt="{{ $product->name }}"
                                            class="main-image w-full h-full object-cover {{ $index === 0 ? 'active' : '' }}"
                                            data-index="{{ $index }}">
                                    @endforeach
                                </div>

                                @if ($product->photos->count() > 1)
                                    <button
                                        class="prev-btn absolute left-3 top-1/2 transform -translate-y-1/2 bg-black/50 text-white p-2 rounded-full hover:bg-black/70">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                    <button
                                        class="next-btn absolute right-3 top-1/2 transform -translate-y-1/2 bg-black/50 text-white p-2 rounded-full hover:bg-black/70">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>
                                @endif
                            </div>

                            @if ($product->photos->count() > 1)
                                <div class="flex gap-3 overflow-x-auto pb-2">
                                    @foreach ($product->photos as $index => $photo)
                                        <button class="thumbnail flex-shrink-0 {{ $index === 0 ? 'active' : '' }}"
                                            data-index="{{ $index }}">
                                            <img src="{{ asset('storage/' . $photo->file_path) }}"
                                                alt="{{ $product->name }}"
                                                class="w-20 h-20 object-cover rounded-lg border-2 border-transparent hover:border-blue-500 transition-colors">
                                        </button>
                                    @endforeach
                                </div>
                            @endif
                        @else
                            <div class="h-96 bg-gray-100 rounded-xl flex items-center justify-center">
                                <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        @endif
                    </div>

                    <div class="space-y-6">
                        <div>
                            <div class="flex items-start gap-3 mb-3">
                                <h1 class="text-3xl font-bold text-gray-900 flex-1">{{ $product->name }}</h1>
                                <div class="flex flex-col gap-2">
                                    @if ($product->is_featured)
                                        <span class="bg-orange-500 text-white text-xs px-3 py-1 rounded-full font-medium">
                                            Produk Unggulan
                                        </span>
                                    @endif
                                    @if ($product->is_favorite)
                                        <span class="bg-blue-500 text-white text-xs px-3 py-1 rounded-full font-medium">
                                            Produk Favorit
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <p class="text-gray-600">{{ $product->category->name ?? 'Tidak ada kategori' }}</p>
                        </div>

                        <div class="bg-blue-50 p-4 rounded-xl">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-3xl font-bold text-blue-600">
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </span>
                                <span class="text-sm text-gray-600">
                                    Stok: <span class="font-semibold">{{ $product->stock }}</span>
                                </span>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Deskripsi Produk</h3>
                            <p class="text-gray-700 leading-relaxed">{{ $product->description }}</p>
                        </div>

                        @if ($product->buy_link)
                            <div class="bg-green-50 p-4 rounded-xl">
                                <h4 class="font-semibold text-green-800 mb-2">Link Pembelian</h4>
                                <a href="{{ $product->buy_link }}" target="_blank"
                                    class="text-green-600 hover:text-green-800 break-all">
                                    {{ $product->buy_link }}
                                </a>
                            </div>
                        @endif

                        <div class="border-t pt-6">
                            <div class="grid grid-cols-2 gap-4 text-sm text-gray-600">
                                <div>
                                    <span class="font-medium">Dibuat:</span>
                                    <p>{{ $product->created_at->format('d M Y, H:i') }}</p>
                                </div>
                                <div>
                                    <span class="font-medium">Diperbarui:</span>
                                    <p>{{ $product->updated_at->format('d M Y, H:i') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex gap-3 pt-4">
                            <a href="{{ route('umkm.products.edit', $product->slug) }}"
                                class="flex-1 bg-blue-600 text-white py-3 px-6 rounded-lg text-center font-medium hover:bg-blue-700 transition-colors flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                    </path>
                                </svg>
                                Edit Produk
                            </a>
                            <form action="{{ route('umkm.products.destroy', $product->slug) }}" method="POST"
                                class="inline-block" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 text-white py-3 px-6 rounded-lg font-medium hover:bg-red-600 transition-colors flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mainImages = document.querySelectorAll('.main-image');
            const thumbnails = document.querySelectorAll('.thumbnail');
            const prevBtn = document.querySelector('.prev-btn');
            const nextBtn = document.querySelector('.next-btn');

            let currentIndex = 0;

            function showImage(index) {
                mainImages.forEach(img => img.classList.remove('active'));
                thumbnails.forEach(thumb => thumb.classList.remove('active'));

                if (mainImages[index]) {
                    mainImages[index].classList.add('active');
                }
                if (thumbnails[index]) {
                    thumbnails[index].classList.add('active');
                }

                currentIndex = index;
            }

            thumbnails.forEach((thumbnail, index) => {
                thumbnail.addEventListener('click', () => {
                    showImage(index);
                });
            });

            if (prevBtn) {
                prevBtn.addEventListener('click', () => {
                    const newIndex = currentIndex > 0 ? currentIndex - 1 : mainImages.length - 1;
                    showImage(newIndex);
                });
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', () => {
                    const newIndex = currentIndex < mainImages.length - 1 ? currentIndex + 1 : 0;
                    showImage(newIndex);
                });
            }

            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft' && prevBtn) {
                    prevBtn.click();
                } else if (e.key === 'ArrowRight' && nextBtn) {
                    nextBtn.click();
                }
            });
        });
    </script>

    <style>
        .main-image {
            display: none;
        }

        .main-image.active {
            display: block;
        }

        .thumbnail.active img {
            border-color: #3b82f6;
        }
    </style>
@endsection
