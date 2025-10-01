<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Makanan: {{ $food->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('admin.foods.update', $food) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Nama Makanan -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Nama Makanan *</label>
                            <input type="text" name="name" value="{{ old('name', $food->name) }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror"
                                required>
                            @error('name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Region -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Daerah Asal *</label>
                            <select name="region_id"
                                class="shadow border rounded w-full py-2 px-3 text-gray-700 @error('region_id') border-red-500 @enderror"
                                required>
                                <option value="">Pilih Daerah</option>
                                @foreach ($regions as $region)
                                    <option value="{{ $region->id }}"
                                        {{ old('region_id', $food->region_id) == $region->id ? 'selected' : '' }}>
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
                            <select name="category_id"
                                class="shadow border rounded w-full py-2 px-3 text-gray-700 @error('category_id') border-red-500 @enderror"
                                required>
                                <option value="">Pilih Kategori</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', $food->category_id) == $category->id ? 'selected' : '' }}>
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
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('short_description') border-red-500 @enderror"
                                required>{{ old('short_description', $food->short_description) }}</textarea>
                            @error('short_description')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Deskripsi Lengkap -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Deskripsi Lengkap</label>
                            <textarea name="long_description" rows="5"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('long_description', $food->long_description) }}</textarea>
                        </div>

                        <!-- Sejarah -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Sejarah Makanan</label>
                            <textarea name="food_history" rows="4"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('food_history', $food->food_history) }}</textarea>
                        </div>

                        <!-- Fakta Menarik -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Fakta Menarik</label>
                            <textarea name="interesting_facts" rows="4"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('interesting_facts', $food->interesting_facts) }}</textarea>
                        </div>

                        <!-- Current Image -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Gambar Saat Ini</label>
                            <img src="{{ $food->main_image_url }}" alt="{{ $food->name }}"
                                class="h-48 w-auto object-cover rounded">
                        </div>

                        <!-- New Image -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Ganti Gambar (Optional, Max
                                2MB)</label>
                            <input type="file" name="main_image" accept="image/*"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 @error('main_image') border-red-500 @enderror">
                            @error('main_image')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                            <p class="text-gray-500 text-xs mt-1">Kosongkan jika tidak ingin mengganti gambar</p>
                        </div>

                        <!-- Existing Gallery Images -->
                        @if ($food->galleries->count() > 0)
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Foto Gallery Saat Ini</label>
                                <div class="grid grid-cols-4 gap-4">
                                    @foreach ($food->galleries as $gallery)
                                        <div class="relative">
                                            <img src="{{ $gallery->image_url }}" alt="Gallery"
                                                class="h-32 w-full object-cover rounded">
                                            <button type="button" onclick="deleteGallery({{ $gallery->id }})"
                                                class="absolute top-1 right-1 bg-red-500 text-white rounded-full p-1 hover:bg-red-700">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                                <input type="hidden" name="delete_gallery_ids" id="delete_gallery_ids" value="">
                            </div>
                        @endif

                        <!-- Add New Gallery Images -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Tambah Foto Gallery (Optional,
                                Multiple)</label>
                            <input type="file" name="gallery_images[]" accept="image/*" multiple
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 @error('gallery_images.*') border-red-500 @enderror">
                            <p class="text-gray-500 text-xs mt-1">Bisa pilih lebih dari 1 foto, max 2MB per foto</p>
                            @error('gallery_images.*')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <script>
                            let deleteIds = [];

                            function deleteGallery(id) {
                                if (confirm('Yakin ingin menghapus foto ini?')) {
                                    deleteIds.push(id);
                                    document.getElementById('delete_gallery_ids').value = deleteIds.join(',');
                                    event.target.closest('.relative').style.opacity = '0.3';
                                }
                            }
                        </script>

                        <!-- Is Featured -->
                        <div class="mb-6">
                            <label class="flex items-center">
                                <input type="checkbox" name="is_featured" value="1"
                                    {{ old('is_featured', $food->is_featured) ? 'checked' : '' }}
                                    class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                <span class="ml-2 text-sm text-gray-600">Jadikan Makanan Unggulan</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Update
                            </button>
                            <a href="{{ route('admin.foods.index') }}" class="text-gray-600 hover:text-gray-900">
                                Batal
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
