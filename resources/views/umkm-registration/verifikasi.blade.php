@extends('umkm-registration.main')

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
        @foreach ($umkms as $umkm)
            <div class="text-center mb-8 md:mb-12">
                <div class="inline-flex items-center gap-2 bg-green-100 rounded-full px-6 py-2 mb-6">
                    <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                    <span class="text-green-700 font-medium">Verifikasi UMKM</span>
                </div>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-black text-gray-800 mb-4 md:mb-6">
                    Verifikasi
                    <span
                        class="bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">{{ $umkm->name }}</span>
                </h1>
                <p class="text-base md:text-xl text-gray-600 max-w-3xl mx-auto">
                    UMKM milik Anda yang beralamat di <strong>{{ $umkm->address }}</strong>, Kecamatan
                    <strong>{{ $umkm->district }}</strong><br>
                    sedang menunggu proses verifikasi oleh tim kami.
                </p>
            </div>
        @endforeach
        <div class="mb-8 md:mb-12">
            <div class="flex items-center justify-center space-x-4 mb-8">
                <div class="flex items-center space-x-2">
                    <div
                        class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center text-sm font-bold">
                        <i class="fas fa-check text-xs"></i>
                    </div>
                    <span class="text-green-600 font-medium">Informasi UMKM</span>
                </div>
                <div class="w-8 h-1 bg-green-500 rounded"></div>
                <div class="flex items-center space-x-2">
                    <div
                        class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center text-sm font-bold animate-pulse">
                        2
                    </div>
                    <span class="text-green-600 font-medium">Verifikasi</span>
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

        @foreach ($umkms as $umkm)
            <div
                class="bg-white/90 border border-gray-200 rounded-3xl shadow-md p-6 md:p-8 lg:p-12 text-center backdrop-blur-sm">

                <div class="mb-8">
                    <div
                        class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6 animate-pulse">
                        <i class="fas fa-check-circle text-green-600 text-4xl"></i>
                    </div>
                    <div class="inline-flex items-center gap-2 bg-green-100 rounded-full px-6 py-2">
                        <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                        <span class="text-green-700 font-medium">Pendaftaran Berhasil</span>
                    </div>
                </div>

                <div class="mb-8">
                    <p class="text-base md:text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                        UMKM <strong class="text-gray-800">{{ $umkm->name }}</strong> telah berhasil didaftarkan.
                        Tim kami akan melakukan verifikasi dalam <strong class="text-green-600">1-3 hari kerja</strong>.
                    </p>
                </div>

                <div class="bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-2xl p-6 mb-8">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-clock text-white text-xl"></i>
                        </div>
                        <div class="text-left">
                            <h3 class="text-lg font-semibold text-gray-800">
                                Status:
                                <span
                                    class="{{ $umkm->verification_status === 'verified' ? 'text-green-600' : 'text-yellow-400' }}">
                                    {{ ucfirst($umkm->verification_status) }}
                                </span>
                            </h3>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-3 gap-4 mt-6">
                        <div class="text-center">
                            <div
                                class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center mx-auto mb-2">
                                <i class="fas fa-file text-sm"></i>
                            </div>
                            <p class="text-sm text-gray-600">Validasi Dokumen</p>
                        </div>
                        <div class="text-center">
                            <div
                                class="w-8 h-8 bg-yellow-400 text-white rounded-full flex items-center justify-center mx-auto mb-2">
                                <i class="fas fa-search text-sm"></i>
                            </div>
                            <p class="text-sm text-gray-600">Verifikasi Data</p>
                        </div>
                        <div class="text-center">
                            <div
                                class="w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center mx-auto mb-2">
                                <i class="fas fa-thumbs-up text-sm"></i>
                            </div>
                            <p class="text-sm text-gray-600">Persetujuan</p>
                        </div>
                    </div>
                </div>

                <div class="bg-blue-50 border border-blue-200 rounded-2xl p-6 mb-8 text-left">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        Langkah Selanjutnya
                    </h3>
                    <ul class="space-y-3 text-gray-700 text-sm">
                        <li class="flex items-start">
                            <i class="fas fa-envelope text-green-500 mr-3 mt-0.5"></i>
                            <span>Email konfirmasi akan dikirim ke:
                                <strong>{{ $umkm->user->email ?? 'email pengguna' }}</strong></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone-alt text-green-500 mr-3 mt-0.5"></i>
                            <span>Tim kami akan menghubungi Anda bila diperlukan informasi tambahan.</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-store text-green-500 mr-3 mt-0.5"></i>
                            <span>Setelah disetujui, Anda dapat mulai mengelola profil UMKM dan menambahkan produk.</span>
                        </li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <a href="{{ route('home') }}"
                        class="w-full inline-block bg-gradient-to-r from-green-500 to-emerald-500 text-white px-8 py-4 rounded-2xl font-bold text-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-home mr-3"></i>
                        Kembali ke Beranda
                    </a>
                </div>
            </div>
        @endforeach

    </main>

@endsection
