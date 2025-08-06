@extends('layouts.app')

@section('title', 'Pengajuan UMKM')

@section('content')
    <main class="flex-1 p-6">
        <div class="max-w-7xl mx-auto">
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-gray-800">Pengajuan UMKM</h1>
                <p class="text-gray-600">Daftar UMKM yang sedang menunggu verifikasi</p>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm text-left">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th class="px-6 py-3">No</th>
                                <th class="px-6 py-3">Nama UMKM</th>
                                <th class="px-6 py-3">Kategori</th>
                                <th class="px-6 py-3">Tahun Berdiri</th>
                                <th class="px-6 py-3">Alamat</th>
                                <th class="px-6 py-3">Kecamatan</th>
                                <th class="px-6 py-3">Tanggal Pengajuan</th>
                                <th class="px-6 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($umkms as $index => $umkm)
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td class="px-6 py-4">{{ $umkms->firstItem() + $index }}</td>
                                    <td class="px-6 py-4 font-medium text-gray-900">{{ $umkm->name }}</td>
                                    <td class="px-6 py-4">{{ $umkm->category->name ?? '-' }}</td>
                                    <td class="px-6 py-4">{{ \Carbon\Carbon::parse($umkm->established_year)->format('Y') }}
                                    </td>
                                    <td class="px-6 py-4">{{ $umkm->address }}</td>
                                    <td class="px-6 py-4">{{ $umkm->district }}</td>
                                    <td class="px-6 py-4">{{ $umkm->created_at->format('d M Y') }}</td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('admin.umkm-verification.show', $umkm->slug) }}"
                                            class="inline-block text-blue-600 hover:text-blue-800 font-semibold">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center py-6 text-gray-500">Belum ada pengajuan UMKM.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $umkms->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection
