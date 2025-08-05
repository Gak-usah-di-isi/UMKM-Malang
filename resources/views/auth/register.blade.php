@extends('auth.main')

@section('title', 'Daftar Akun - UMKM Kota Malang')

@section('content')
    <div
        class="min-h-screen flex items-center justify-center bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 relative overflow-hidden p-4">

        <div class="absolute inset-0 opacity-30">
            <div
                class="absolute top-20 left-10 w-32 h-32 bg-emerald-200 rounded-full mix-blend-multiply filter blur-xl animate-blob">
            </div>
            <div
                class="absolute top-40 right-10 w-32 h-32 bg-teal-200 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000">
            </div>
            <div
                class="absolute -bottom-8 left-20 w-32 h-32 bg-green-200 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000">
            </div>
        </div>

        <div class="w-full max-w-2xl mx-auto relative z-10">
            <div class="glass rounded-3xl p-8 md:p-10">

                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-gray-800 mb-2 green-gradient-text">Daftar Akun UMKM</h1>
                    <p class="text-gray-600">Bergabung dengan komunitas UMKM Kota Malang</p>
                </div>

                <form action="{{ route('register') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="nik" class="block text-sm font-medium text-gray-700 mb-1">NIK*</label>
                                <input id="nik" name="nik" type="text" class="input-field"
                                    value="{{ old('nik') }}" placeholder="Masukkan NIK Anda">
                                @error('nik')
                                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama
                                    Lengkap*</label>
                                <input id="name" name="name" type="text" class="input-field"
                                    value="{{ old('name') }}" placeholder="Nama sesuai KTP">
                                @error('name')
                                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email*</label>
                                <input id="email" name="email" type="email" class="input-field"
                                    value="{{ old('email') }}" placeholder="email@contoh.com">
                                @error('email')
                                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">No.
                                    Telepon*</label>
                                <input id="phone" name="phone" type="text" class="input-field"
                                    value="{{ old('phone') }}" placeholder="081234567890">
                                @error('phone')
                                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div>
                            <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Alamat
                                Lengkap*</label>
                            <textarea id="address" name="address" rows="2" class="input-field" placeholder="Jl. Contoh No. 123">{{ old('address') }}</textarea>
                            @error('address')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password*</label>
                                <input id="password" name="password" type="password" class="input-field"
                                    placeholder="Minimal 8 karakter">
                                @error('password')
                                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="password_confirmation"
                                    class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password*</label>
                                <input id="password_confirmation" name="password_confirmation" type="password"
                                    class="input-field" placeholder="Ulangi password">
                            </div>
                        </div>

                    </div>

                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" name="terms" type="checkbox" class="checkbox-field h-4 w-4 rounded"
                                {{ old('terms') ? 'checked' : '' }}>
                        </div>
                        <div class="ml-3">
                            <label for="terms" class="text-sm text-gray-700">
                                Saya menyetujui <a href="#" class="text-green-600 hover:underline">Syarat &
                                    Ketentuan</a> dan
                                <a href="#" class="text-green-600 hover:underline">Kebijakan Privasi</a>
                            </label>
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full green-gradient-bg text-white font-semibold rounded-xl px-6 py-3 btn-primary">
                            Daftar Sekarang
                        </button>
                    </div>

                    <div class="text-center text-sm text-gray-600">
                        Sudah punya akun?
                        <a href="{{ route('login') }}" class="text-green-600 font-medium hover:underline">Masuk
                            disini</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Dynamic dropdown scripts would go here
        document.addEventListener('DOMContentLoaded', function() {
            // Province selection would trigger city options
            // Similar to your existing implementation
        });
    </script>
@endsection
