@extends('layouts.app')

@section('title', 'Tambah Article')

@section('content')
    <main class="flex-1 p-6">
        <div class="max-w-6xl mx-auto">

            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Tambah Article Baru</h1>
                <p class="text-gray-600">Buat article informatif untuk platform UMKM Malang</p>
            </div>

            <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf

                <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-100">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Thumbnail Article</h2>

                    <label for="thumbnail-input" class="block cursor-pointer">
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
                                        Pilih atau drag & drop thumbnail di sini
                                    </p>
                                    <p class="mt-2 text-sm text-gray-500">PNG, JPG, JPEG hingga 2MB</p>
                                </div>
                            </div>
                        </div>
                        <input type="file" name="thumbnail" id="thumbnail-input" class="sr-only" accept="image/*">
                    </label>

                    <div id="thumbnail-preview" class="hidden">
                        <img id="preview-image" class="w-full h-64 object-cover rounded-lg border">
                        <button type="button" id="remove-thumbnail"
                            class="mt-2 text-red-600 hover:text-red-800 text-sm">Hapus Thumbnail</button>
                    </div>

                    @error('thumbnail')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-100">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6">Informasi Article</h2>

                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Judul Article *</label>
                            <input type="text" name="title" value="{{ old('title') }}"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('title') border-red-500 @enderror"
                                placeholder="Masukkan judul article">
                            @error('title')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Kategori Article *</label>
                            <select name="article_category_id"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('article_category_id') border-red-500 @enderror">
                                <option value="">-- Pilih Kategori --</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('article_category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('article_category_id')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Konten Article *</label>
                            <textarea name="content" rows="12" id="content-editor"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('content') border-red-500 @enderror"
                                placeholder="Tulis konten article di sini...">{{ old('content') }}</textarea>
                            @error('content')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="is_publish" value="1"
                                    {{ old('is_publish') ? 'checked' : '' }}
                                    class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2 text-sm font-medium text-gray-700">Publish Article</span>
                            </label>
                            <p class="text-xs text-gray-500 mt-1">Centang untuk mempublikasikan article</p>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end gap-4 pt-6">
                    <a href="{{ route('admin.articles.index') }}"
                        class="px-6 py-3 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 font-medium transition-colors">
                        Batal
                    </a>
                    <button type="submit"
                        class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-medium transition-colors">
                        Simpan Article
                    </button>
                </div>
            </form>
        </div>
    </main>

    <script>
        const thumbnailInput = document.getElementById('thumbnail-input');
        const thumbnailPreview = document.getElementById('thumbnail-preview');
        const previewImage = document.getElementById('preview-image');
        const removeThumbnail = document.getElementById('remove-thumbnail');

        thumbnailInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    thumbnailPreview.classList.remove('hidden');
                    document.querySelector('label[for="thumbnail-input"]').classList.add('hidden');
                }
                reader.readAsDataURL(file);
            }
        });

        removeThumbnail.addEventListener('click', function() {
            thumbnailInput.value = '';
            thumbnailPreview.classList.add('hidden');
            document.querySelector('label[for="thumbnail-input"]').classList.remove('hidden');
        });

        const uploadArea = document.querySelector('label[for="thumbnail-input"]');

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

        function highlight() {
            uploadArea.classList.add('border-blue-400', 'bg-blue-50');
        }

        function unhighlight() {
            uploadArea.classList.remove('border-blue-400', 'bg-blue-50');
        }

        uploadArea.addEventListener('drop', handleDrop, false);

        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;

            if (files.length > 0 && files[0].type.startsWith('image/')) {
                thumbnailInput.files = files;
                thumbnailInput.dispatchEvent(new Event('change'));
            }
        }
    </script>
@endsection
