@extends('layouts.app')

@section('title', 'Produk Saya')

@section('content')
    <main class="flex-1 p-6">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">Produk Saya</h1>
                    <p class="text-gray-600">Kelola semua produk yang Anda jual</p>
                </div>
                <a href="{{ route('umkm.products.create') }}"
                    class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors shadow-md flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Tambah Produk
                </a>
            </div>

            @if (session('success'))
                <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg border border-green-200">
                    {{ session('success') }}
                </div>
            @endif

            @if ($products->isEmpty())
                <div class="text-center py-20 bg-white rounded-xl shadow-sm">
                    <svg class="mx-auto w-24 h-24 text-gray-300 mb-6" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                    <h3 class="text-2xl font-semibold text-gray-700 mb-3">Belum ada produk</h3>
                    <p class="text-gray-500 mb-8 max-w-md mx-auto">Mulai tambahkan produk pertama Anda untuk memperluas
                        jangkauan bisnis</p>
                    <a href="{{ route('umkm.products.create') }}"
                        class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition-colors shadow-md">
                        Tambah Produk Pertama
                    </a>
                </div>
            @else
                <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($products as $product)
                        <div
                            class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group">

                            <div class="relative h-60 overflow-hidden">
                                @if ($product->photos->count() > 0)
                                    <div class="slideshow-container h-full" data-product-id="{{ $product->id }}">
                                        @foreach ($product->photos as $index => $photo)
                                            <div class="slide {{ $index === 0 ? 'active' : '' }} h-full">
                                                <img src="{{ asset('storage/' . $photo->file_path) }}"
                                                    alt="{{ $product->name }}"
                                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                                            </div>
                                        @endforeach

                                        @if ($product->photos->count() > 1)
                                            <div
                                                class="absolute bottom-3 left-1/2 transform -translate-x-1/2 flex space-x-2">
                                                @foreach ($product->photos as $index => $photo)
                                                    <div class="dot w-2 h-2 rounded-full bg-white/50 {{ $index === 0 ? 'bg-white' : '' }}"
                                                        data-slide="{{ $index }}"></div>
                                                @endforeach
                                            </div>

                                            <div
                                                class="absolute top-3 right-3 bg-black/50 text-white text-xs px-2 py-1 rounded-full">
                                                1/{{ $product->photos->count() }}
                                            </div>
                                        @endif
                                    </div>
                                @else
                                    <div class="w-full h-full bg-gray-100 flex items-center justify-center">
                                        <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                @endif

                                <div class="absolute top-3 left-3 flex flex-col gap-2">
                                    @if ($product->is_featured)
                                        <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded-full font-medium">
                                            Unggulan
                                        </span>
                                    @endif
                                    @if ($product->is_favorite)
                                        <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded-full font-medium">
                                            Favorit
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="mb-4">
                                    <h3 class="font-bold text-xl text-gray-800 line-clamp-2 mb-2">{{ $product->name }}</h3>
                                    <p class="text-sm text-gray-600 line-clamp-2">
                                        {{ Str::limit($product->description, 100) }}</p>
                                </div>

                                <div class="flex items-center justify-between mb-5">
                                    <div>
                                        <p class="text-2xl font-bold text-blue-600">
                                            Rp {{ number_format($product->price, 0, ',', '.') }}
                                        </p>
                                        <p class="text-sm text-gray-500">Stok: {{ $product->stock }}</p>
                                    </div>
                                    <div class="text-xs text-gray-400 text-right">
                                        <p>{{ $product->category->name ?? 'Tidak ada kategori' }}</p>
                                        <p>{{ $product->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>

                                <div class="flex gap-3">
                                    <a href="{{ route('umkm.products.show', $product->slug) }}"
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
                                    <a href="{{ route('umkm.products.edit', $product->slug) }}"
                                        class="flex-1 bg-blue-600 text-white py-3 px-4 rounded-lg text-center text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                            </path>
                                        </svg>
                                        Edit
                                    </a>
                                    <form action="{{ route('umkm.products.destroy', $product->slug) }}" method="POST"
                                        class="inline-block" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
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

                @if ($products->hasPages())
                    <div class="mt-8">
                        {{ $products->links() }}
                    </div>
                @endif
            @endif
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slideshows = document.querySelectorAll('.slideshow-container');

            slideshows.forEach(slideshow => {
                const slides = slideshow.querySelectorAll('.slide');
                const dots = slideshow.querySelectorAll('.dot');
                const counter = slideshow.querySelector('.absolute.top-3.right-3');

                if (slides.length <= 1) return;

                let currentSlide = 0;
                let interval;

                function showSlide(index) {
                    slides.forEach(slide => slide.classList.remove('active'));
                    dots.forEach(dot => {
                        dot.classList.remove('bg-white');
                        dot.classList.add('bg-white/50');
                    });

                    slides[index].classList.add('active');
                    if (dots[index]) {
                        dots[index].classList.remove('bg-white/50');
                        dots[index].classList.add('bg-white');
                    }

                    if (counter) {
                        counter.textContent = `${index + 1}/${slides.length}`;
                    }
                }

                function nextSlide() {
                    currentSlide = (currentSlide + 1) % slides.length;
                    showSlide(currentSlide);
                }

                function startSlideshow() {
                    interval = setInterval(nextSlide, 3000);
                }

                function stopSlideshow() {
                    clearInterval(interval);
                }

                startSlideshow();

                slideshow.addEventListener('mouseenter', stopSlideshow);
                slideshow.addEventListener('mouseleave', startSlideshow);

                dots.forEach((dot, index) => {
                    dot.addEventListener('click', () => {
                        currentSlide = index;
                        showSlide(currentSlide);
                        stopSlideshow();
                        startSlideshow();
                    });
                });
            });
        });
    </script>

    <style>
        .slide {
            display: none;
        }

        .slide.active {
            display: block;
        }

        .line-clamp-2 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }

        .dot {
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .dot:hover {
            transform: scale(1.2);
        }
    </style>
@endsection
