@extends('layouts.app')

@section('title', 'Edit Artikel')

@section('content')
<main class="flex-1 p-6">
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold text-gray-900">Edit Artikel</h1>
            <a href="{{ route('admin.articles.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition duration-200 flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Kembali
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <div class="border-b border-gray-200 pb-4 mb-6">
                        <h3 class="text-lg font-semibold text-gray-900">Form Artikel</h3>
                    </div>

                    <form action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data" id="articleForm">
                        @csrf
                        @method('PUT')

                        <div class="mb-6">
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                                Judul Artikel <span class="text-red-500">*</span>
                            </label>
                            <input type="text"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('title') border-red-500 @enderror"
                                id="title" name="title" value="{{ old('title', $article->title) }}" required>
                            @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="slug" class="block text-sm font-medium text-gray-700 mb-2">Slug</label>
                            <input type="text"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-50 @error('slug') border-red-500 @enderror"
                                id="slug" name="slug" value="{{ old('slug', $article->slug) }}" readonly>
                            @error('slug')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <p class="mt-1 text-sm text-gray-500">Slug akan dibuat otomatis dari judul</p>
                        </div>

                        <div class="mb-6">
                            <label for="article_category_id" class="block text-sm font-medium text-gray-700 mb-2">
                                Kategori <span class="text-red-500">*</span>
                            </label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('article_category_id') border-red-500 @enderror"
                                id="article_category_id" name="article_category_id" required>
                                <option value="">Pilih Kategori</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('article_category_id', $article->article_category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                            @error('article_category_id')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="thumbnail" class="block text-sm font-medium text-gray-700 mb-2">Thumbnail</label>
                            <div class="flex items-center gap-4">
                                @if($article->thumbnail)
                                <div class="relative">
                                    <img src="{{ asset('storage/' . $article->thumbnail) }}" class="w-16 h-16 object-cover rounded-lg border border-gray-300" id="current-thumbnail">
                                    <button type="button" id="remove-current-thumbnail" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full p-1 hover:bg-red-600">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                                @endif
                                <label for="thumbnail" class="cursor-pointer">
                                    <div class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-200 flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        {{ $article->thumbnail ? 'Ganti Gambar' : 'Pilih Gambar' }}
                                    </div>
                                    <input type="file" class="hidden" id="thumbnail" name="thumbnail" accept="image/*">
                                </label>
                                <span class="text-sm text-gray-500" id="file-name">{{ $article->thumbnail ? 'Gambar saat ini: ' . basename($article->thumbnail) : 'Belum ada file dipilih' }}</span>
                                <button type="button" id="remove-thumbnail" class="hidden text-red-500 hover:text-red-700 text-sm">
                                    Hapus
                                </button>
                            </div>
                            @error('thumbnail')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <p class="mt-1 text-sm text-gray-500">Format: JPG, JPEG, PNG, WEBP. Maksimal: 2MB</p>

                            <div id="thumbnail-preview" class="mt-4 hidden">
                                <p class="text-sm font-medium text-gray-700 mb-2">Preview:</p>
                                <div class="relative">
                                    <img id="preview-image" src="" class="w-full max-w-sm h-auto object-cover rounded-lg border border-gray-300">
                                </div>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Konten Artikel <span class="text-red-500">*</span>
                            </label>
                            <textarea name="content" id="editor"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('content') border-red-500 @enderror"
                                rows="20" required>{{ old('content', $article->content) }}</textarea>
                            @error('content')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Status Publikasi</label>
                            <div class="flex items-center space-x-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="is_publish" value="1"
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300"
                                        {{ old('is_publish', $article->is_publish) == 1 ? 'checked' : '' }}>
                                    <span class="ml-2 text-gray-700">Publikasikan</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="is_publish" value="0"
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300"
                                        {{ old('is_publish', $article->is_publish) == 0 ? 'checked' : '' }}>
                                    <span class="ml-2 text-gray-700">Simpan sebagai Draft</span>
                                </label>
                            </div>
                            @error('is_publish')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex justify-end space-x-4 pt-6 border-t border-gray-200">
                            <button type="button" onclick="window.history.back()" class="px-6 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-200 flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                Batal
                            </button>
                            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-200 flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <div class="border-b border-gray-200 pb-4 mb-6">
                        <h3 class="text-lg font-semibold text-gray-900">Tips Penulisan</h3>
                    </div>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">Gunakan judul yang menarik dan informatif</span>
                        </li>
                        <li class="flex items-start">
                            <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">Pilih kategori yang sesuai dengan konten artikel</span>
                        </li>
                        <li class="flex items-start">
                            <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">Gunakan gambar thumbnail berkualitas tinggi</span>
                        </li>
                        <li class="flex items-start">
                            <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">Gunakan heading untuk struktur yang jelas</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <div class="border-b border-gray-200 pb-4 mb-6">
                        <h3 class="text-lg font-semibold text-gray-900">Preview Google</h3>
                    </div>
                    <div class="border rounded-lg p-4 bg-gray-50">
                        <div class="text-blue-600 text-lg hover:underline cursor-pointer" id="preview-title">
                            {{ $article->title }}
                        </div>
                        <div class="text-green-600 text-sm mt-1" id="preview-url">
                            [https://example.com/artikel/{{ $article->slug }}](https://example.com/artikel/{{ $article->slug }})
                        </div>
                        <div class="text-gray-600 text-sm mt-2" id="preview-description">
                            {{ Str::limit(strip_tags($article->content), 155) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/slugify@1.6.5/slugify.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const titleInput = document.getElementById('title');
        const slugInput = document.getElementById('slug');
        const thumbnailInput = document.getElementById('thumbnail');
        const fileNameSpan = document.getElementById('file-name');
        const removeThumbnailBtn = document.getElementById('remove-thumbnail');
        const removeCurrentThumbnailBtn = document.getElementById('remove-current-thumbnail');
        const currentThumbnail = document.getElementById('current-thumbnail');
        const previewImage = document.getElementById('preview-image');
        const thumbnailPreview = document.getElementById('thumbnail-preview');
        const previewTitle = document.getElementById('preview-title');
        const previewUrl = document.getElementById('preview-url');
        const hiddenRemoveThumbnailInput = document.createElement('input');

        // Create hidden input to handle thumbnail removal
        hiddenRemoveThumbnailInput.type = 'hidden';
        hiddenRemoveThumbnailInput.name = 'remove_thumbnail';
        hiddenRemoveThumbnailInput.value = '0';
        document.getElementById('articleForm').appendChild(hiddenRemoveThumbnailInput);

        // Initialize CKEditor
        ClassicEditor
            .create(document.getElementsByName('content'), {
                toolbar: {
                    items: [
                        'heading', '|',
                        'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|',
                        'blockQuote', 'insertTable', 'undo', 'redo', '|',
                    ]
                },
            })
            .then(editor => {
                // Update the Google preview description with editor content
                editor.model.document.on('change:data', () => {
                    const editorContent = editor.getData();
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(editorContent, 'text/html');
                    const textContent = doc.body.textContent || "";
                    document.getElementById('preview-description').textContent = textContent.substring(0, 155) + (textContent.length > 155 ? '...' : '');
                });
            })
            .catch(error => {
                console.error(error);
            });

        // Auto-generate slug and update Google preview title and URL
        titleInput.addEventListener('input', function() {
            if (this.value) {
                const slug = slugify(this.value, {
                    lower: true,
                    strict: true,
                    remove: /[*+~.()'"!:@]/g
                });
                slugInput.value = slug;
                previewTitle.textContent = this.value;
                previewUrl.textContent = `https://example.com/artikel/${slug}`;
            } else {
                slugInput.value = '';
                previewTitle.textContent = 'Judul artikel akan muncul di sini';
                previewUrl.textContent = 'https://example.com/artikel/slug-artikel';
            }
        });

        // Thumbnail preview functionality
        thumbnailInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                fileNameSpan.textContent = file.name;
                removeThumbnailBtn.classList.remove('hidden');

                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    thumbnailPreview.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }
        });

        // Remove new thumbnail functionality
        removeThumbnailBtn.addEventListener('click', function() {
            thumbnailInput.value = ''; // Clear the file input
            fileNameSpan.textContent = 'Belum ada file dipilih';
            removeThumbnailBtn.classList.add('hidden');
            thumbnailPreview.classList.add('hidden');
            previewImage.src = '';
        });

        // Remove current thumbnail functionality
        if (removeCurrentThumbnailBtn) {
            removeCurrentThumbnailBtn.addEventListener('click', function() {
                currentThumbnail.remove();
                removeCurrentThumbnailBtn.remove();
                fileNameSpan.textContent = 'Belum ada file dipilih';
                hiddenRemoveThumbnailInput.value = '1'; // Mark thumbnail for removal
            });
        }

        // Ensure the form doesn't double-submit
        const articleForm = document.getElementById('articleForm');
        articleForm.addEventListener('submit', function(event) {
            const submitBtn = event.submitter;
            submitBtn.disabled = true;
            setTimeout(() => submitBtn.disabled = false, 5000); // Re-enable after 5 seconds to prevent accidental double clicks
        });
    });
</script>
@endpush
@endsection