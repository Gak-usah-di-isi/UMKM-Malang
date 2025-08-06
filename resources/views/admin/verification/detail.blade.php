@extends('layouts.app')

@section('title', 'Detail UMKM')

@section('content')
    <main class="flex-1 p-6">
        <div class="max-w-7xl mx-auto space-y-6">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Detail UMKM</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-700">
                    <div><strong>Nama UMKM:</strong> {{ $umkm->name }}</div>
                    <div><strong>Kategori:</strong> {{ $umkm->category->name ?? '-' }}</div>
                    <div><strong>Tahun Berdiri:</strong> {{ \Carbon\Carbon::parse($umkm->established_year)->format('Y') }}
                    </div>
                    <div><strong>Alamat:</strong> {{ $umkm->address }}</div>
                    <div><strong>Kecamatan:</strong> {{ $umkm->district }}</div>
                    <div><strong>Status Verifikasi:</strong>
                        <span class="inline-block px-2 py-1 text-xs rounded bg-yellow-100 text-yellow-800">
                            {{ ucfirst($umkm->verification_status) }}
                        </span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Dokumen</h3>

                @foreach ($umkm->documents as $doc)
                    <div class="mb-6">
                        <p class="font-medium text-gray-700 mb-2">{{ strtoupper($doc->type) }}</p>
                        @if (Str::endsWith($doc->file_path, ['.pdf']))
                            <iframe src="{{ asset('storage/' . $doc->file_path) }}" class="w-full h-96 border rounded"
                                frameborder="0"></iframe>
                        @else
                            <img src="{{ asset('storage/' . $doc->file_path) }}" alt="{{ $doc->type }}"
                                class="w-full max-w-md border rounded">
                        @endif
                    </div>
                @endforeach
            </div>

            <div class="flex justify-end gap-2">
                <form action="{{ route('admin.umkm-verification.rejected', $umkm->slug) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Tolak</button>
                </form>
                <form action="{{ route('admin.umkm-verification.verified', $umkm->slug) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit"
                        class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Setujui</button>
                </form>
            </div>
        </div>
    </main>
@endsection
