<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Detail Produk') }} - {{ $product->name }}
            </h2>
            <a href="{{ route('admin.products.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-8">
                    <!-- Bagian Gambar & Info Utama -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <img class="w-full h-80 object-cover rounded-lg shadow-md" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                        </div>
                        <div class="flex flex-col justify-between">
                            <div>
                                <h1 class="text-3xl font-bold text-gray-900">{{ $product->name }}</h1>
                                <p class="text-2xl font-semibold text-indigo-600 mt-2">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                                <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full mt-4 {{ $product->stock > 0 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    Stok: {{ $product->stock }}
                                </span>
                            </div>
                            <div class="flex space-x-3 mt-6">
                                <a href="{{ route('admin.products.edit', $product->id) }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
                                    Edit Produk
                                </a>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini beserta galerinya?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">
                                        Hapus Produk
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Spesifikasi -->
                    <div class="border-t border-gray-200 pt-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Spesifikasi Properti</h3>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
                            <div class="bg-gray-50 p-4 rounded-lg text-center shadow-sm">
                                <span class="block text-sm font-medium text-gray-500">Luas Tanah</span>
                                <span class="text-xl font-semibold text-gray-900">{{ $product->lt }} m²</span>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg text-center shadow-sm">
                                <span class="block text-sm font-medium text-gray-500">Luas Bangunan</span>
                                <span class="text-xl font-semibold text-gray-900">{{ $product->lb }} m²</span>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg text-center shadow-sm">
                                <span class="block text-sm font-medium text-gray-500">Jumlah Lantai</span>
                                <span class="text-xl font-semibold text-gray-900">{{ $product->flors }}</span>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg text-center shadow-sm">
                                <span class="block text-sm font-medium text-gray-500">Garasi</span>
                                <span class="text-xl font-semibold text-gray-900">{{ $product->garage }} mobil</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 mt-4">
                            <div class="bg-gray-50 p-4 rounded-lg text-center shadow-sm">
                                <span class="block text-sm font-medium text-gray-500">Kamar Tidur</span>
                                <span class="text-xl font-semibold text-gray-900">{{ $product->badroom }}</span>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg text-center shadow-sm">
                                <span class="block text-sm font-medium text-gray-500">Kamar Mandi</span>
                                <span class="text-xl font-semibold text-gray-900">{{ $product->bathrom }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Galeri -->
                    <div class="border-t border-gray-200 pt-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Galeri Gambar</h3>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-6">
                            @forelse ($product->galeries as $galery)
                                <div>
                                    <img class="w-full h-44 object-cover rounded-lg shadow-md" src="{{ asset('storage/' . $galery->image) }}" alt="Galeri">
                                </div>
                            @empty
                                <p class="text-sm text-gray-500 col-span-3">Belum ada gambar galeri untuk produk ini.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
