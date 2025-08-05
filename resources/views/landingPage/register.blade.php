@extends('core.landingPage')

@section('title', 'Daftar Akun - UMKM Kota Malang')

@section('style')
    <style>
        /* Consistent styling with login page */
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

        .glass {
            backdrop-filter: blur(16px) saturate(180%);
            background-color: rgba(255, 255, 255, 0.75);
            border: 1px solid rgba(255, 255, 255, 0.125);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1);
        }

        .green-gradient-text {
            background-image: linear-gradient(to right, #059669, #10b981);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .green-gradient-bg {
            background-image: linear-gradient(to right, #059669, #10b981);
        }

        .input-field {
            transition: all 0.3s ease;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 12px 16px;
            width: 100%;
        }

        .input-field:focus {
            border-color: #059669;
            box-shadow: 0 0 0 3px rgba(5, 150, 105, 0.2);
            outline: none;
        }

        .btn-primary {
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px -1px rgba(5, 150, 105, 0.2), 0 2px 4px -1px rgba(5, 150, 105, 0.1);
            border-radius: 12px;
            font-weight: 600;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(5, 150, 105, 0.2), 0 4px 6px -2px rgba(5, 150, 105, 0.1);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        .checkbox-field {
            border: 2px solid #e5e7eb;
            border-radius: 4px;
        }

        .checkbox-field:checked {
            background-color: #059669;
            border-color: #059669;
        }

        .select-field {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }
    </style>
@endsection

@section('content')
    <div
        class="min-h-screen flex items-center justify-center bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 relative overflow-hidden p-4">

        <!-- Animated background blobs -->
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
                <!-- Logo/Header Section -->
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-gray-800 mb-2 green-gradient-text">Daftar Akun UMKM</h1>
                    <p class="text-gray-600">Bergabung dengan komunitas UMKM Kota Malang</p>
                </div>

                <!-- Registration Form -->
                <form action="" method="POST" class="space-y-6">
                    @csrf

                    <!-- Personal Information -->
                    <div class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="nik" class="block text-sm font-medium text-gray-700 mb-1">NIK*</label>
                                <input id="nik" name="nik" type="text" required class="input-field"
                                    placeholder="Masukkan NIK Anda">
                            </div>
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama
                                    Lengkap*</label>
                                <input id="name" name="name" type="text" required class="input-field"
                                    placeholder="Nama sesuai KTP">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email*</label>
                                <input id="email" name="email" type="email" required class="input-field"
                                    placeholder="email@contoh.com">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">No.
                                    Telepon*</label>
                                <input id="phone" name="phone" type="tel" required class="input-field"
                                    placeholder="0812-3456-7890">
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div>
                            <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Alamat
                                Lengkap*</label>
                            <textarea id="address" name="address" rows="2" required class="input-field" placeholder="Jl. Contoh No. 123"></textarea>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password*</label>
                                <input id="password" name="password" type="password" required class="input-field"
                                    placeholder="Minimal 8 karakter">
                            </div>
                            <div>
                                <label for="password_confirmation"
                                    class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password*</label>
                                <input id="password_confirmation" name="password_confirmation" type="password" required
                                    class="input-field" placeholder="Ulangi password">
                            </div>
                        </div>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" name="terms" type="checkbox" required
                                class="checkbox-field h-4 w-4 rounded">
                        </div>
                        <div class="ml-3">
                            <label for="terms" class="text-sm text-gray-700">
                                Saya menyetujui <a href="#" class="text-green-600 hover:underline">Syarat &
                                    Ketentuan</a> dan <a href="#" class="text-green-600 hover:underline">Kebijakan
                                    Privasi</a>
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="w-full green-gradient-bg text-white font-semibold rounded-xl px-6 py-3 btn-primary">
                            Daftar Sekarang
                        </button>
                    </div>

                    <!-- Login Link -->
                    <div class="text-center text-sm text-gray-600">
                        Sudah punya akun?
                        <a href="{{ route('login') }}" class="text-green-600 font-medium hover:underline">Masuk disini</a>
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
