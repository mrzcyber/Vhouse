<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Produk Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            @if ($errors->any())
                <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf

                        <!-- Nama, Harga, Stok -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="price" class="block text-sm font-medium text-gray-700">Harga (Rp)</label>
                                <input type="number" name="price" id="price" value="{{ old('price') }}" required min="0" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="stock" class="block text-sm font-medium text-gray-700">Stok</label>
                                <input type="number" name="stock" id="stock" value="{{ old('stock') }}" required min="0" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <!-- LT, LB, Lantai -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label for="lt" class="block text-sm font-medium text-gray-700">Luas Tanah (m²)</label>
                                <input type="number" name="lt" id="lt" value="{{ old('lt') }}" required min="0" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="lb" class="block text-sm font-medium text-gray-700">Luas Bangunan (m²)</label>
                                <input type="number" name="lb" id="lb" value="{{ old('lb') }}" required min="0" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="flors" class="block text-sm font-medium text-gray-700">Jumlah Lantai</label>
                                <input type="number" name="flors" id="flors" value="{{ old('flors') }}" required min="0" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <!-- Kamar Tidur, Kamar Mandi, Garasi -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label for="badroom" class="block text-sm font-medium text-gray-700">Kamar Tidur</label>
                                <input type="number" name="badroom" id="badroom" value="{{ old('badroom') }}" required min="0" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="bathrom" class="block text-sm font-medium text-gray-700">Kamar Mandi</label>
                                <input type="number" name="bathrom" id="bathrom" value="{{ old('bathrom') }}" required min="0" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="garage" class="block text-sm font-medium text-gray-700">Kapasitas Garasi</label>
                                <input type="number" name="garage" id="garage" value="{{ old('garage') }}" required min="0" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <!-- Gambar Utama -->
                        <div>
                            <label for="image" class="block text-sm font-medium text-gray-700">Gambar Utama Produk</label>
                            <input type="file" name="image" id="image" required class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>

                        <!-- Gambar Galeri -->
                        <div>
                            <label for="galeries" class="block text-sm font-medium text-gray-700">Gambar Galeri (Bisa memilih lebih dari satu)</label>
                            <input type="file" name="galeries[]" id="galeries" multiple class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>

                        <!-- Tombol Batal & Simpan -->
                        <div class="flex justify-end space-x-3 pt-4 border-t border-gray-200">
                            <a href="{{ route('admin.products.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition ease-in-out duration-150">
                                Batal
                            </a>
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
