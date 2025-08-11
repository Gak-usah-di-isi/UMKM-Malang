@extends('layouts.app')

@section('title', 'Social Media UMKM')

@section('content')
    <main class="flex-1 p-6">
        <div class="max-w-5xl mx-auto">

            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">{{ session('success') }}</div>
            @endif

            <div class="mb-6 flex items-center justify-between">
                <h1 class="text-3xl font-bold text-gray-800">Social Media UMKM</h1>
                <button id="openAddModalBtn"
                    class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700 transition">Tambah Social
                    Media</button>
            </div>

            @if ($socials->isEmpty())
                <p class="text-gray-600">Belum ada social media yang ditambahkan.</p>
            @else
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm text-left">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th class="px-6 py-4">Platform</th>
                                    <th class="px-6 py-4">URL</th>
                                    <th class="px-6 py-4 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($socials as $social)
                                    <tr class="bg-white border-b hover:bg-gray-50">
                                        <td class="px-6 py-4 font-medium flex items-center gap-2">
                                            @if ($social->platform == 'tiktok')
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black"
                                                    viewBox="0 0 24 24" fill="currentColor">
                                                    <path d="M9 2v13.5a3.5 3.5 0 1 0 3.5 3.5V9h4a5 5 0 1 1-5-5z" />
                                                </svg>
                                            @elseif($social->platform == 'facebook')
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600"
                                                    viewBox="0 0 24 24" fill="currentColor">
                                                    <path
                                                        d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.406.593 24 1.325 24h11.495v-9.294H9.691v-3.622h3.129V8.413c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.466.099 2.797.143v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.312h3.59l-.467 3.622h-3.123V24h6.116c.73 0 1.324-.594 1.324-1.324V1.325C24 .593 23.406 0 22.675 0z" />
                                                </svg>
                                            @elseif($social->platform == 'instagram')
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-500"
                                                    fill="none" stroke="currentColor" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                                    <rect x="2" y="2" width="20" height="20" rx="5"
                                                        ry="5" />
                                                    <path d="M16 11.37A4 4 0 1 1 9.63 8 4 4 0 0 1 16 11.37z" />
                                                    <line x1="17.5" y1="6.5" x2="17.5" y2="6.5" />
                                                </svg>
                                            @endif
                                            {{ ucfirst($social->platform) }}
                                        </td>


                                        <td class="px-6 py-4">
                                            @if ($social->url)
                                                <a href="{{ $social->url }}" target="_blank"
                                                    class="text-blue-600 hover:underline">
                                                    {{ $social->url }}
                                                </a>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 text-center space-x-2">
                                            <button class="editBtn text-yellow-600 hover:text-yellow-800 font-semibold"
                                                data-id="{{ $social->id }}" data-platform="{{ $social->platform }}"
                                                data-url="{{ $social->url }}">Edit</button>

                                            <form action="{{ route('umkm.socials.destroy', $social) }}" method="POST"
                                                class="inline-block"
                                                onsubmit="return confirm('Yakin ingin menghapus social media ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-600 hover:text-red-800 font-semibold">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $socials->links() }}
                    </div>
                </div>

            @endif
        </div>

        <div id="addModal" class="fixed inset-0 bg-black/50 flex items-center justify-center hidden z-50">
            <div class="bg-white rounded-xl shadow-lg max-w-md w-full mx-4 p-6 relative">
                <h2 class="text-2xl font-bold mb-4">Tambah Social Media</h2>

                <form action="{{ route('umkm.socials.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="add-platform" class="block font-medium text-gray-700">Platform</label>
                        <select name="platform" id="add-platform" required
                            class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 @error('platform') border-red-500 @enderror">
                            <option value="" disabled selected>-- Pilih Platform --</option>
                            <option value="tiktok">TikTok</option>
                            <option value="facebook">Facebook</option>
                            <option value="instagram">Instagram</option>
                        </select>
                        @error('platform')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="add-url" class="block font-medium text-gray-700">URL</label>
                        <input type="url" name="url" id="add-url"
                            class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 @error('url') border-red-500 @enderror"
                            value="{{ old('url') }}">
                        @error('url')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-end gap-3 pt-4 border-t border-gray-200">
                        <button type="button" id="addCancelBtn"
                            class="px-4 py-2 rounded-lg bg-gray-100 hover:bg-gray-200 font-medium">Batal</button>
                        <button type="submit"
                            class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 font-medium">Tambah</button>
                    </div>
                </form>

                <button id="addCloseModalBtn"
                    class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-xl font-bold">&times;</button>
            </div>
        </div>

        <div id="editModal" class="fixed inset-0 bg-black/50 flex items-center justify-center hidden z-50">
            <div class="bg-white rounded-xl shadow-lg max-w-md w-full mx-4 p-6 relative">
                <h2 class="text-2xl font-bold mb-4">Edit Social Media</h2>

                <form id="editForm" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="edit-platform" class="block font-medium text-gray-700">Platform</label>
                        <select name="platform" id="edit-platform" required
                            class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500">
                            <option value="" disabled>-- Pilih Platform --</option>
                            <option value="tiktok">TikTok</option>
                            <option value="facebook">Facebook</option>
                            <option value="instagram">Instagram</option>
                        </select>
                    </div>

                    <div>
                        <label for="edit-url" class="block font-medium text-gray-700">URL</label>
                        <input type="url" name="url" id="edit-url"
                            class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div class="flex justify-end gap-3 pt-4 border-t border-gray-200">
                        <button type="button" id="editCancelBtn"
                            class="px-4 py-2 rounded-lg bg-gray-100 hover:bg-gray-200 font-medium">Batal</button>
                        <button type="submit"
                            class="px-4 py-2 rounded-lg bg-yellow-600 text-white hover:bg-yellow-700 font-medium">Simpan</button>
                    </div>
                </form>

                <button id="editCloseModalBtn"
                    class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-xl font-bold">&times;</button>
            </div>
        </div>

    </main>

    <script>
        const openAddModalBtn = document.getElementById('openAddModalBtn');
        const addModal = document.getElementById('addModal');
        const addCloseModalBtn = document.getElementById('addCloseModalBtn');
        const addCancelBtn = document.getElementById('addCancelBtn');

        openAddModalBtn.addEventListener('click', () => addModal.classList.remove('hidden'));
        addCloseModalBtn.addEventListener('click', () => addModal.classList.add('hidden'));
        addCancelBtn.addEventListener('click', () => addModal.classList.add('hidden'));

        window.addEventListener('click', (e) => {
            if (e.target === addModal) addModal.classList.add('hidden');
        });

        const editModal = document.getElementById('editModal');
        const editCloseModalBtn = document.getElementById('editCloseModalBtn');
        const editCancelBtn = document.getElementById('editCancelBtn');
        const editForm = document.getElementById('editForm');

        const editButtons = document.querySelectorAll('.editBtn');

        editButtons.forEach(button => {
            button.addEventListener('click', () => {
                const id = button.dataset.id;
                const platform = button.dataset.platform;
                const url = button.dataset.url;

                editForm.action = `/umkm/socials/${id}`;
                document.getElementById('edit-platform').value = platform;
                document.getElementById('edit-url').value = url;

                editModal.classList.remove('hidden');
            });
        });

        editCloseModalBtn.addEventListener('click', () => editModal.classList.add('hidden'));
        editCancelBtn.addEventListener('click', () => editModal.classList.add('hidden'));

        window.addEventListener('click', (e) => {
            if (e.target === editModal) editModal.classList.add('hidden');
        });
    </script>
@endsection
