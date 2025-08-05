@extends('umkmRegistration.main')

@section('title', 'Daftar UMKM')

@section('style')
    <style>
        @keyframes blob {
            0% {
                transform: translate(0px, 0px) scale(1);
            }

            33% {
                transform: translate(30px, -50px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }

            100% {
                transform: translate(0px, 0px) scale(1);
            }
        }

        .animate-blob {
            animation: blob 7s infinite;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>

@endsection

@section('content')

    <div class="fixed inset-0 opacity-30 pointer-events-none z-0">
        <div
            class="absolute top-20 left-10 w-32 h-32 bg-green-200 rounded-full mix-blend-multiply filter blur-xl animate-blob">
        </div>
        <div
            class="absolute top-40 right-10 w-32 h-32 bg-emerald-200 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000">
        </div>
        <div
            class="absolute bottom-20 left-1/3 w-32 h-32 bg-teal-200 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000">
        </div>
    </div>

    <main class="container max-w-4xl mx-auto px-4 md:px-8 lg:px-12 py-8 md:py-12 relative z-10">
        <div class="text-center mb-8 md:mb-12">
            <div class="inline-flex items-center gap-2 bg-green-100 rounded-full px-6 py-2 mb-6">
                <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                <span class="text-green-700 font-medium">Pendaftaran UMKM</span>
            </div>
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-black text-gray-800 mb-4 md:mb-6">
                Daftarkan
                <span class="bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">UMKM
                    Anda</span>
            </h1>
            <p class="text-base md:text-xl text-gray-600 max-w-3xl mx-auto">
                Bergabunglah dengan platform digital UMKM terbesar di Kota
                Malang dan tingkatkan jangkauan bisnis Anda
            </p>
        </div>

        <div class="mb-8 md:mb-12">
            <div class="flex items-center justify-center space-x-4 mb-8">
                <div class="flex items-center space-x-2">
                    <div
                        class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center text-sm font-bold">
                        1
                    </div>
                    <span class="text-green-600 font-medium">Informasi UMKM</span>
                </div>
                <div class="w-8 h-1 bg-gray-300 rounded"></div>
                <div class="flex items-center space-x-2">
                    <div
                        class="w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center text-sm font-bold">
                        2
                    </div>
                    <span class="text-gray-500 font-medium">Verifikasi</span>
                </div>
                <div class="w-8 h-1 bg-gray-300 rounded"></div>
                <div class="flex items-center space-x-2">
                    <div
                        class="w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center text-sm font-bold">
                        3
                    </div>
                    <span class="text-gray-500 font-medium">Selesai</span>
                </div>
            </div>
        </div>

        <div class="bg-white/80 border border-white/30 rounded-3xl shadow-2xl p-6 md:p-8 lg:p-12">
            <form id="umkmForm" class="space-y-6 md:space-y-8" method="POST" action="{{ route('pengajuan-umkm.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="text-center">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">
                        Informasi UMKM
                    </h2>
                    <p class="text-gray-600">
                        Lengkapi data UMKM Anda dengan benar
                    </p>
                </div>

                <div class="space-y-2">
                    <label for="umkm_category_id" class="block text-lg font-semibold text-gray-700">
                        Kategori UMKM
                    </label>
                    <div class="relative">
                        <select id="umkm_category_id" name="umkm_category_id"
                            class="w-full px-6 py-4 rounded-2xl border @error('umkm_category_id') border-red-500 @else border-gray-200 @enderror focus:border-green-500 focus:outline-none focus:ring-4 focus:ring-green-200 text-lg appearance-none bg-white">
                            <option value="">Pilih kategori UMKM...</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('umkm_category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        <div class="absolute right-4 top-1/2 transform -translate-y-1/2 pointer-events-none"></div>
                    </div>
                    @error('umkm_category_id')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label for="name_umkm" class="block text-lg font-semibold text-gray-700">
                        Nama UMKM
                    </label>
                    <input type="text" id="name_umkm" name="name_umkm" value="{{ old('name_umkm') }}"
                        placeholder="Masukkan nama UMKM Anda..."
                        class="w-full px-6 py-4 rounded-2xl border @error('name_umkm') border-red-500 @else border-gray-200 @enderror focus:border-green-500 focus:outline-none focus:ring-4 focus:ring-green-200 text-lg" />
                    <p class="text-sm text-gray-500 mt-1">
                        Nama yang akan ditampilkan di platform
                    </p>
                    @error('name_umkm')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label for="established_year" class="block text-lg font-semibold text-gray-700">
                        Tahun Berdiri
                    </label>
                    <input type="date" id="established_year" name="established_year"
                        value="{{ old('established_year') }}"
                        class="w-full px-6 py-4 rounded-2xl border @error('established_year') border-red-500 @else border-gray-200 @enderror focus:border-green-500 focus:outline-none focus:ring-4 focus:ring-green-200 text-lg bg-white">
                    @error('established_year')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label for="address" class="block text-lg font-semibold text-gray-700">
                        Alamat Lengkap
                    </label>
                    <textarea id="address" name="address" rows="4"
                        class="w-full px-6 py-4 rounded-2xl border @error('address') border-red-500 @else border-gray-200 @enderror focus:border-green-500 focus:outline-none focus:ring-4 focus:ring-green-200 text-lg resize-none"
                        placeholder="Masukkan alamat lengkap UMKM Anda...">{{ old('address') }}</textarea>
                    <p class="text-sm text-gray-500 mt-1">
                        Alamat akan digunakan untuk keperluan pengiriman dan verifikasi
                    </p>
                    @error('address')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label for="district" class="block text-lg font-semibold text-gray-700">
                        Kecamatan
                    </label>
                    <input type="text" id="district" name="district" value="{{ old('district') }}"
                        class="w-full px-6 py-4 rounded-2xl border @error('district') border-red-500 @else border-gray-200 @enderror focus:border-green-500 focus:outline-none focus:ring-4 focus:ring-green-200 text-lg bg-white"
                        placeholder="Masukkan nama kecamatan...">
                    @error('district')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label for="nib" class="block text-lg font-semibold text-gray-700">
                        NIB (Opsional)
                    </label>
                    <input type="file" id="nib" name="nib"
                        class="w-full px-4 py-2 rounded-2xl border @error('nib') border-red-500 @else border-gray-200 @enderror focus:border-green-500 focus:outline-none focus:ring-4 focus:ring-green-200 text-lg file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100" />
                    <p class="text-sm text-gray-500 mt-1">Format: PDF, JPG, PNG. Maksimal 5MB</p>
                    @error('nib')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label for="iumk" class="block text-lg font-semibold text-gray-700">
                        IUMK (Opsional)
                    </label>
                    <input type="file" id="iumk" name="iumk"
                        class="w-full px-4 py-2 rounded-2xl border @error('iumk') border-red-500 @else border-gray-200 @enderror focus:border-green-500 focus:outline-none focus:ring-4 focus:ring-green-200 text-lg file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100" />
                    <p class="text-sm text-gray-500 mt-1">Format: PDF, JPG, PNG. Maksimal 5MB</p>
                    @error('iumk')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="bg-green-50 border border-green-200 rounded-2xl p-6">
                    <div class="flex items-start space-x-3">
                        <input type="checkbox" id="terms" name="terms" {{ old('terms') ? 'checked' : '' }}
                            class="mt-1 w-5 h-5 text-green-600 border-gray-300 rounded focus:ring-green-500" />
                        <label for="terms" class="text-gray-700 leading-relaxed">
                            Saya menyetujui
                            <a href="#" class="text-green-600 hover:text-green-700 font-semibold">Syarat dan
                                Ketentuan</a>
                            serta
                            <a href="#" class="text-green-600 hover:text-green-700 font-semibold">Kebijakan
                                Privasi</a>
                            platform UMKM Kota Malang. Data yang saya berikan adalah benar dan dapat dipertanggungjawabkan.
                        </label>
                    </div>
                    @error('terms')
                        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pt-6">
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-green-500 to-emerald-500 text-white px-8 py-6 rounded-2xl font-bold text-xl hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-rocket mr-3"></i>
                        Daftarkan UMKM Saya
                    </button>
                </div>

                <!-- Help Text -->
                <div class="text-center pt-4">
                    <p class="text-gray-600">
                        Butuh bantuan?
                        <a href="#" class="text-green-600 hover:text-green-700 font-semibold">Hubungi Tim
                            Support</a>
                    </p>
                </div>
            </form>
        </div>

        <!-- Benefits Section -->
        <div class="mt-12 md:mt-16">
            <h3 class="text-2xl md:text-3xl font-bold text-center text-gray-800 mb-8">
                Keuntungan Bergabung dengan Platform Kami
            </h3>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white/60 border border-white/30 rounded-2xl p-6 text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-chart-line text-green-600 text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-2">
                        Jangkauan Lebih Luas
                    </h4>
                    <p class="text-gray-600">
                        Akses ke ribuan pelanggan potensial di Kota Malang
                    </p>
                </div>
                <div class="bg-white/60 border border-white/30 rounded-2xl p-6 text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-tools text-blue-600 text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-2">
                        Dukungan Penuh
                    </h4>
                    <p class="text-gray-600">
                        Pelatihan bisnis dan bantuan teknis berkelanjutan
                    </p>
                </div>
                <div class="bg-white/60 border border-white/30 rounded-2xl p-6 text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-gift text-purple-600 text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-2">
                        Gratis Selamanya
                    </h4>
                    <p class="text-gray-600">
                        Tanpa biaya pendaftaran atau biaya bulanan
                    </p>
                </div>
            </div>
        </div>
    </main>

@endsection
