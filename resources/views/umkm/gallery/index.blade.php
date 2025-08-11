@extends('layouts.app')

@section('title', 'Galeri Foto UMKM')

@section('content')
    <main class="flex-1 p-6">
        <div class="max-w-6xl mx-auto">

            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex items-center justify-between mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Galeri Foto UMKM</h1>

                <button id="openModalBtn"
                    class="inline-block bg-blue-600 text-white px-5 py-2 rounded-full shadow hover:bg-blue-700 transition">
                    Upload Foto UMKM
                </button>
            </div>

            @if ($umkm->photos->isEmpty())
                <div class="text-center py-16">
                    <div class="mx-auto w-24 h-24 mb-6 bg-gray-100 rounded-full flex items-center justify-center">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Belum ada foto</h3>
                    <p class="text-gray-500 mb-6">Mulai upload foto pertama untuk menampilkan galeri UMKM Anda</p>
                    <button onclick="document.getElementById('openModalBtn').click()"
                        class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                        Upload Foto Sekarang
                    </button>
                </div>
            @else
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                    @foreach ($umkm->photos as $index => $photo)
                        <div
                            class="group relative bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden transform hover:-translate-y-1">

                            <div class="relative overflow-hidden">
                                <img src="{{ asset('storage/' . $photo->file_path) }}" alt="Foto UMKM"
                                    class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110"
                                    loading="lazy">

                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>

                                <form action="{{ route('umkm.gallery.destroy', $photo) }}" method="POST"
                                    class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin ingin menghapus foto ini?')"
                                        class="bg-red-500/90 backdrop-blur-sm text-white rounded-full p-1.5 hover:bg-red-600 transition-colors shadow-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </form>

                                <button onclick="openImageModal('{{ asset('storage/' . $photo->file_path) }}')"
                                    class="absolute bottom-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-blue-500/90 backdrop-blur-sm text-white rounded-full p-1.5 hover:bg-blue-600 shadow-lg">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </button>
                            </div>

                            <div class="p-3">
                                <div class="flex items-center justify-between">
                                    <span class="text-xs font-medium text-gray-600">Foto #{{ $index + 1 }}</span>
                                    <span class="text-xs text-gray-400">{{ $photo->created_at->format('d/m/Y') }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div id="imageModal"
                    class="fixed inset-0 bg-black/90 backdrop-blur-sm flex items-center justify-center hidden z-50 p-4">
                    <div class="relative max-w-4xl max-h-full">
                        <button onclick="closeImageModal()"
                            class="absolute -top-12 right-0 text-white hover:text-gray-300 transition-colors">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                        <img id="modalImage" src="" alt="Preview"
                            class="max-w-full max-h-full object-contain rounded-lg shadow-2xl">
                    </div>
                </div>
            @endif

        </div>

        <div id="uploadModal"
            class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center hidden z-50 transition-all duration-300 opacity-0">
            <div
                class="bg-white rounded-2xl shadow-2xl max-w-lg w-full mx-4 relative transform scale-95 transition-all duration-300">

                <div class="flex items-center justify-between p-6 border-b border-gray-100">
                    <h2 class="text-2xl font-bold text-gray-900">Upload Foto</h2>
                    <button id="closeModalBtn" class="p-2 hover:bg-gray-100 rounded-full transition-colors">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>

                <form action="{{ route('umkm.gallery.upload') }}" method="POST" enctype="multipart/form-data"
                    class="p-6 space-y-6">
                    @csrf

                    <div class="border-2 border-dashed border-gray-300 rounded-xl p-8 text-center hover:border-blue-400 transition-colors duration-300"
                        id="dropZone">
                        <div class="mx-auto w-16 h-16 mb-4 bg-blue-50 rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                </path>
                            </svg>
                        </div>
                        <p class="text-lg font-semibold text-gray-700 mb-2">Pilih atau seret foto ke sini</p>
                        <p class="text-sm text-gray-500 mb-4">PNG, JPG, GIF hingga 10MB</p>
                        <input type="file" name="photo" id="modalPhotoInput" accept="image/*" required
                            class="hidden" />
                        <button type="button" onclick="document.getElementById('modalPhotoInput').click()"
                            class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium">
                            Pilih File
                        </button>
                    </div>

                    @error('photo')
                        <p class="text-sm text-red-600 bg-red-50 p-3 rounded-lg">{{ $message }}</p>
                    @enderror

                    <div id="previewContainer" class="hidden opacity-0 transition-all duration-500">
                        <div class="bg-gray-50 rounded-xl p-4">
                            <p class="text-sm font-medium text-gray-700 mb-3">Preview:</p>
                            <div class="relative">
                                <img id="previewImage" src="#" alt="Preview"
                                    class="w-full max-h-64 object-contain rounded-lg" />
                                <button type="button" id="removePreview"
                                    class="absolute top-2 right-2 bg-red-500 text-white rounded-full p-1 hover:bg-red-600 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end gap-3 pt-4 border-t border-gray-100">
                        <button type="button" id="modalCancelBtn"
                            class="px-6 py-2.5 text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg font-medium transition-colors">
                            Batal
                        </button>
                        <button type="submit"
                            class="px-6 py-2.5 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white rounded-lg font-medium transition-all transform hover:scale-105 shadow-lg">
                            Upload Foto
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script>
        const openModalBtn = document.getElementById('openModalBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const modalCancelBtn = document.getElementById('modalCancelBtn');
        const uploadModal = document.getElementById('uploadModal');
        const modalPhotoInput = document.getElementById('modalPhotoInput');
        const previewContainer = document.getElementById('previewContainer');
        const previewImage = document.getElementById('previewImage');
        const dropZone = document.getElementById('dropZone');
        const removePreview = document.getElementById('removePreview');

        function openModal() {
            uploadModal.classList.remove('hidden');
            setTimeout(() => {
                uploadModal.classList.remove('opacity-0');
                uploadModal.querySelector('.transform').classList.remove('scale-95');
                uploadModal.querySelector('.transform').classList.add('scale-100');
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            uploadModal.classList.add('opacity-0');
            uploadModal.querySelector('.transform').classList.remove('scale-100');
            uploadModal.querySelector('.transform').classList.add('scale-95');

            setTimeout(() => {
                uploadModal.classList.add('hidden');
                resetForm();
            }, 300);
            document.body.style.overflow = 'auto';
        }

        function resetForm() {
            previewContainer.classList.add('hidden', 'opacity-0');
            previewImage.src = '#';
            modalPhotoInput.value = '';
            dropZone.classList.remove('hidden');
        }

        function showPreview(file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewContainer.classList.remove('hidden');
                setTimeout(() => {
                    previewContainer.classList.remove('opacity-0');
                }, 10);
                dropZone.classList.add('hidden');
            };
            reader.readAsDataURL(file);
        }

        function openImageModal(imageSrc) {
            const imageModal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');

            modalImage.src = imageSrc;
            imageModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeImageModal() {
            const imageModal = document.getElementById('imageModal');
            imageModal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Event Listeners
        openModalBtn.addEventListener('click', openModal);
        closeModalBtn.addEventListener('click', closeModal);
        modalCancelBtn.addEventListener('click', closeModal);
        removePreview.addEventListener('click', resetForm);

        uploadModal.addEventListener('click', function(e) {
            if (e.target === uploadModal) closeModal();
        });

        document.getElementById('imageModal').addEventListener('click', function(e) {
            if (e.target === this) closeImageModal();
        });

        modalPhotoInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) showPreview(file);
        });

        dropZone.addEventListener('dragover', function(e) {
            e.preventDefault();
            this.classList.add('border-blue-400', 'bg-blue-50');
        });

        dropZone.addEventListener('dragleave', function(e) {
            e.preventDefault();
            this.classList.remove('border-blue-400', 'bg-blue-50');
        });

        dropZone.addEventListener('drop', function(e) {
            e.preventDefault();
            this.classList.remove('border-blue-400', 'bg-blue-50');

            const files = e.dataTransfer.files;
            if (files.length > 0) {
                const file = files[0];
                if (file.type.startsWith('image/')) {
                    modalPhotoInput.files = files;
                    showPreview(file);
                }
            }
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                if (!uploadModal.classList.contains('hidden')) {
                    closeModal();
                } else if (!document.getElementById('imageModal').classList.contains('hidden')) {
                    closeImageModal();
                }
            }
        });
    </script>
@endsection
