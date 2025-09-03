@extends('layouts.app')

@section('title', 'Edit UMKM - ' . $umkm->name)

@section('content')
    <main class="flex-1 p-6">
        <div class="max-w-5xl mx-auto">

            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Edit UMKM - {{ $umkm->name }}</h1>
                <p class="text-gray-600">Perbarui informasi UMKM secara lengkap.</p>
            </div>

            <div class="bg-white shadow-lg rounded-xl overflow-hidden border border-gray-100">
                <div class="grid grid-cols-1 md:grid-cols-3">

                    <div class="p-6 flex flex-col items-center justify-center border-b md:border-b-0 md:border-r">
                        <img id="logo-preview"
                            src="{{ $umkm->logo ? asset('storage/' . $umkm->logo) : 'https://placehold.co/300' }}"
                            alt="Logo UMKM" class="w-32 h-32 object-cover rounded-full border shadow-sm">

                        <label
                            class="mt-4 cursor-pointer inline-block bg-blue-50 text-blue-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-100">
                            Ganti Logo
                            <input type="file" class="hidden @error('logo') border-red-500 @enderror" name="logo"
                                id="logo-input" form="umkm-form" accept="image/*">
                        </label>
                        @error('logo')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="md:col-span-2 p-6">
                        <form id="umkm-form" action="{{ route('admin.umkm.update', $umkm->slug) }}" method="POST"
                            enctype="multipart/form-data" class="space-y-6">
                            @csrf
                            @method('PUT')

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Nama UMKM</label>
                                    <input type="text" name="name" value="{{ old('name', $umkm->name) }}"
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 @error('name') border-red-500 @enderror">
                                    @error('name')
                                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Kategori</label>
                                    <select name="umkm_category_id"
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 @error('umkm_category_id') border-red-500 @enderror">
                                        <option value="">Pilih Kategori</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ old('umkm_category_id', $umkm->umkm_category_id) == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('umkm_category_id')
                                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Tahun Berdiri</label>
                                    <input type="date" name="established_year"
                                        value="{{ old('established_year', $umkm->established_year) }}"
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 @error('established_year') border-red-500 @enderror">
                                    @error('established_year')
                                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Status Verifikasi</label>
                                    <select name="verification_status"
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 @error('verification_status') border-red-500 @enderror">
                                        <option value="pending"
                                            {{ old('verification_status', $umkm->verification_status) == 'pending' ? 'selected' : '' }}>
                                            Pending</option>
                                        <option value="verified"
                                            {{ old('verification_status', $umkm->verification_status) == 'verified' ? 'selected' : '' }}>
                                            Verified</option>
                                        <option value="rejected"
                                            {{ old('verification_status', $umkm->verification_status) == 'rejected' ? 'selected' : '' }}>
                                            Rejected</option>
                                    </select>
                                    @error('verification_status')
                                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Tagline</label>
                                <textarea name="tagline" rows="4"
                                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 @error('tagline') border-red-500 @enderror"
                                    placeholder="Kalimat singkat yang menggambarkan UMKM ini...">{{ old('tagline', $umkm->tagline) }}</textarea>
                                @error('tagline')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                <textarea name="description" rows="8"
                                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 @error('description') border-red-500 @enderror"
                                    placeholder="Ceritakan secara lengkap tentang UMKM ini">{{ old('description', $umkm->description) }}</textarea>
                                @error('description')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Alamat</label>
                                    <input type="text" name="address" value="{{ old('address', $umkm->address) }}"
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 @error('address') border-red-500 @enderror">
                                    @error('address')
                                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Kecamatan</label>
                                    <input type="text" name="district" value="{{ old('district', $umkm->district) }}"
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 @error('district') border-red-500 @enderror">
                                    @error('district')
                                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Google Maps Embed</label>
                                <textarea name="google_maps" rows="3"
                                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 @error('google_maps') border-red-500 @enderror"
                                    placeholder="Tempel kode embed Google Maps">{{ old('google_maps', $umkm->google_maps) }}</textarea>
                                @error('google_maps')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex justify-end gap-4 pt-4 border-t">
                                <a href="{{ route('admin.umkm.show', $umkm->slug) }}"
                                    class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">Batal</a>
                                <button type="submit"
                                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Simpan
                                    Perubahan</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
    </main>

    <script>
        document.getElementById('logo-input').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('logo-preview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection
