@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
    <main class="flex-1 p-6">
        <div class="max-w-6xl mx-auto">

            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Tambah Produk Baru</h1>
                <p class="text-gray-600">Lengkapi informasi produk dan unggah foto produk.</p>
            </div>

            <form id="product-form" action="{{ route('umkm.products.store') }}" method="POST" enctype="multipart/form-data"
                class="space-y-8">
                @csrf

                <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-100">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Foto Produk</h2>

                    <label for="photo-input" class="block cursor-pointer">
                        <div
                            class="border-2 border-dashed border-gray-300 rounded-lg p-8 mb-4 hover:border-blue-400 transition-colors hover:bg-blue-50">
                            <div class="text-center">
                                <svg class="mx-auto h-16 w-16 text-gray-400" stroke="currentColor" fill="none"
                                    viewBox="0 0 48 48">
                                    <path
                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="mt-6">
                                    <p class="text-lg font-medium text-gray-900">
                                        Klik di mana saja atau drag & drop foto di sini
                                    </p>
                                    <p class="mt-2 text-sm text-gray-500">PNG, JPG, JPEG hingga 5MB per file</p>
                                    <p class="mt-1 text-xs text-gray-400">Anda dapat memilih beberapa foto sekaligus</p>
                                </div>
                            </div>
                        </div>
                        <input type="file" name="photos[]" id="photo-input" multiple class="sr-only" accept="image/*">
                    </label>

                    <div id="photo-preview-container" class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    </div>

                    @error('photos')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                    @error('photos.*')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-100">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6">Informasi Produk</h2>

                    <div class="space-y-6">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nama Produk *</label>
                                <input type="text" name="name" value="{{ old('name') }}"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('name') border-red-500 @enderror"
                                    placeholder="Masukkan nama produk">
                                @error('name')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Kategori *</label>
                                <select name="product_category_id"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('product_category_id') border-red-500 @enderror">
                                    <option value="">-- Pilih Kategori --</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}"
                                            {{ old('product_category_id') == $cat->id ? 'selected' : '' }}>
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('product_category_id')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi *</label>
                            <textarea name="description" rows="6"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('description') border-red-500 @enderror"
                                placeholder="Ceritakan detail produk, keunggulan, bahan, cara penggunaan, dll...">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Harga *</label>
                                <div class="relative">
                                    <span class="absolute left-3 top-3 text-gray-500">Rp</span>
                                    <input type="number" name="price" value="{{ old('price') }}"
                                        class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('price') border-red-500 @enderror"
                                        placeholder="0">
                                </div>
                                @error('price')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Stok *</label>
                                <input type="number" name="stock" value="{{ old('stock') }}"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('stock') border-red-500 @enderror"
                                    placeholder="0">
                                @error('stock')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Link Pembelian</label>
                                <input type="url" name="buy_link" value="{{ old('buy_link') }}"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('buy_link') border-red-500 @enderror"
                                    placeholder="https://...">
                                <p class="text-xs text-gray-500 mt-1">Link ke marketplace atau website (opsional)</p>
                                @error('buy_link')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="grid grid-cols-2 gap-4 mt-7">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="is_favorite" value="1"
                                            {{ old('is_favorite') ? 'checked' : '' }}
                                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-2 text-sm font-medium text-gray-700">Produk Favorit</span>
                                    </label>
                                    <p class="text-xs text-gray-500 mt-1">Badge Produk Favorit</p>
                                </div>

                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="is_featured" value="1"
                                            {{ old('is_featured') ? 'checked' : '' }}
                                            class="rounded border-gray-300 text-orange-600 focus:ring-orange-500">
                                        <span class="ml-2 text-sm font-medium text-gray-700">Produk Unggulan</span>
                                    </label>
                                    <p class="text-xs text-gray-500 mt-1">Badge Produk Unggulan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Action Buttons --}}
                <div class="flex justify-end gap-4 pt-6">
                    <a href="{{ route('umkm.products.index') }}"
                        class="px-6 py-3 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 font-medium transition-colors">
                        Batal
                    </a>
                    <button type="submit"
                        class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-medium transition-colors">
                        Simpan Produk
                    </button>
                </div>
            </form>
        </div>
    </main>

    {{-- Script untuk preview foto --}}
    <script>
        const photoInput = document.getElementById('photo-input');
        const previewContainer = document.getElementById('photo-preview-container');
        let selectedFiles = [];

        photoInput.addEventListener('change', function(e) {
            // Tambahkan file baru ke array yang sudah ada
            Array.from(e.target.files).forEach(file => {
                selectedFiles.push(file);
            });

            updatePreview();
            updateFileInput();
        });

        function updatePreview() {
            previewContainer.innerHTML = "";

            selectedFiles.forEach((file, index) => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imgWrapper = document.createElement('div');
                    imgWrapper.classList.add('relative', 'group', 'aspect-square');

                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.classList.add('w-full', 'h-full', 'object-cover', 'rounded-lg', 'border',
                        'border-gray-200');

                    const removeBtn = document.createElement('button');
                    removeBtn.innerHTML = `
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    `;
                    removeBtn.classList.add(
                        'absolute', 'top-2', 'right-2', 'bg-red-500', 'text-white',
                        'rounded-full', 'p-1', 'opacity-0', 'group-hover:opacity-100',
                        'transition-opacity', 'hover:bg-red-600'
                    );
                    removeBtn.type = 'button';
                    removeBtn.onclick = () => removePhoto(index);

                    const overlay = document.createElement('div');
                    overlay.classList.add(
                        'absolute', 'inset-0', 'bg-black', 'bg-opacity-0',
                        'group-hover:bg-opacity-20', 'transition-all', 'rounded-lg'
                    );

                    imgWrapper.appendChild(img);
                    imgWrapper.appendChild(overlay);
                    imgWrapper.appendChild(removeBtn);
                    previewContainer.appendChild(imgWrapper);
                }
                reader.readAsDataURL(file);
            });

            // Tambahkan tombol untuk menambah foto lagi
            if (selectedFiles.length > 0) {
                const addMoreBtn = document.createElement('div');
                addMoreBtn.classList.add(
                    'aspect-square', 'border-2', 'border-dashed', 'border-gray-300',
                    'rounded-lg', 'flex', 'items-center', 'justify-center',
                    'cursor-pointer', 'hover:border-blue-400', 'transition-colors', 'hover:bg-blue-50'
                );
                addMoreBtn.innerHTML = `
                    <div class="text-center">
                        <svg class="w-8 h-8 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        <p class="text-xs text-gray-500">Tambah Foto</p>
                    </div>
                `;
                addMoreBtn.onclick = () => photoInput.click();
                previewContainer.appendChild(addMoreBtn);
            }
        }

        function removePhoto(index) {
            selectedFiles.splice(index, 1);
            updatePreview();
            updateFileInput();
        }

        function updateFileInput() {
            // Create new DataTransfer object to update file input
            const dt = new DataTransfer();
            selectedFiles.forEach(file => {
                dt.items.add(file);
            });
            photoInput.files = dt.files;
        }

        // Drag and drop functionality
        const uploadArea = document.querySelector('label[for="photo-input"]');

        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            uploadArea.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        ['dragenter', 'dragover'].forEach(eventName => {
            uploadArea.addEventListener(eventName, highlight, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            uploadArea.addEventListener(eventName, unhighlight, false);
        });

        function highlight(e) {
            uploadArea.querySelector('.border-dashed').classList.add('border-blue-400', 'bg-blue-50');
        }

        function unhighlight(e) {
            uploadArea.querySelector('.border-dashed').classList.remove('border-blue-400', 'bg-blue-50');
        }

        uploadArea.addEventListener('drop', handleDrop, false);

        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;

            Array.from(files).forEach(file => {
                if (file.type.startsWith('image/')) {
                    selectedFiles.push(file);
                }
            });

            updatePreview();
            updateFileInput();
        }
    </script>
@endsection
