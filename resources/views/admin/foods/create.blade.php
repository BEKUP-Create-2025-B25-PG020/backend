<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Makanan Baru
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('admin.foods.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Nama Makanan -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Nama Makanan *</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror" required>
                            @error('name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Region -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Daerah Asal *</label>
                            <select name="region_id" class="shadow border rounded w-full py-2 px-3 text-gray-700 @error('region_id') border-red-500 @enderror" required>
                                <option value="">Pilih Daerah</option>
                                @foreach($regions as $region)
                                    <option value="{{ $region->id }}" {{ old('region_id') == $region->id ? 'selected' : '' }}>
                                        {{ $region->region_name }} - {{ $region->province }}
                                    </option>
                                @endforeach
                            </select>
                            @error('region_id')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Category -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Kategori *</label>
                            <select name="category_id" class="shadow border rounded w-full py-2 px-3 text-gray-700 @error('category_id') border-red-500 @enderror" required>
                                <option value="">Pilih Kategori</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Deskripsi Singkat -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Deskripsi Singkat *</label>
                            <textarea name="short_description" rows="3"
                                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('short_description') border-red-500 @enderror" required>{{ old('short_description') }}</textarea>
                            @error('short_description')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Deskripsi Lengkap -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Deskripsi Lengkap</label>
                            <textarea name="long_description" rows="5"
                                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('long_description') }}</textarea>
                        </div>

                        <!-- Sejarah -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Sejarah Makanan</label>
                            <textarea name="food_history" rows="4"
                                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('food_history') }}</textarea>
                        </div>

                        <!-- Fakta Menarik -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Fakta Menarik</label>
                            <textarea name="interesting_facts" rows="4"
                                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('interesting_facts') }}</textarea>
                        </div>

                        <!-- Main Image -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Gambar Utama * (Max 2MB)</label>
                            <input type="file" name="main_image" accept="image/*"
                                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 @error('main_image') border-red-500 @enderror" required>
                            @error('main_image')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Gallery Images -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Foto Gallery (Optional, Multiple)</label>
                            <input type="file" name="gallery_images[]" accept="image/*" multiple
                                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 @error('gallery_images.*') border-red-500 @enderror">
                            <p class="text-gray-500 text-xs mt-1">Bisa pilih lebih dari 1 foto, max 2MB per foto</p>
                            @error('gallery_images.*')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Is Featured -->
                        <div class="mb-6">
                            <label class="flex items-center">
                                <input type="checkbox" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }}
                                       class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                <span class="ml-2 text-sm text-gray-600">Jadikan Makanan Unggulan</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Simpan
                            </button>
                            <a href="{{ route('admin.foods.index') }}"
                               class="text-gray-600 hover:text-gray-900">
                                Batal
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
