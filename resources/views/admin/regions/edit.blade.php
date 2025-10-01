<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Daerah: {{ $region->region_name }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('admin.regions.update', $region) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Nama Daerah *</label>
                            <input type="text" name="region_name"
                                value="{{ old('region_name', $region->region_name) }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 @error('region_name') border-red-500 @enderror"
                                required>
                            @error('region_name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Kota/Kabupaten *</label>
                            <input type="text" name="regency_city"
                                value="{{ old('regency_city', $region->regency_city) }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 @error('regency_city') border-red-500 @enderror"
                                required>
                            @error('regency_city')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Provinsi *</label>
                            <input type="text" name="province" value="{{ old('province', $region->province) }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 @error('province') border-red-500 @enderror"
                                required>
                            @error('province')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Pulau *</label>
                            <select name="island"
                                class="shadow border rounded w-full py-2 px-3 text-gray-700 @error('island') border-red-500 @enderror"
                                required>
                                <option value="">Pilih Pulau</option>
                                <option value="Jawa"
                                    {{ old('island', $region->island) === 'Jawa' ? 'selected' : '' }}>Jawa</option>
                                <option value="Sumatera"
                                    {{ old('island', $region->island) === 'Sumatera' ? 'selected' : '' }}>Sumatera
                                </option>
                                <option value="Kalimantan"
                                    {{ old('island', $region->island) === 'Kalimantan' ? 'selected' : '' }}>Kalimantan
                                </option>
                                <option value="Sulawesi"
                                    {{ old('island', $region->island) === 'Sulawesi' ? 'selected' : '' }}>Sulawesi
                                </option>
                                <option value="Bali"
                                    {{ old('island', $region->island) === 'Bali' ? 'selected' : '' }}>Bali</option>
                                <option value="Papua"
                                    {{ old('island', $region->island) === 'Papua' ? 'selected' : '' }}>Papua</option>
                                <option value="Maluku"
                                    {{ old('island', $region->island) === 'Maluku' ? 'selected' : '' }}>Maluku</option>
                                <option value="Nusa Tenggara"
                                    {{ old('island', $region->island) === 'Nusa Tenggara' ? 'selected' : '' }}>Nusa
                                    Tenggara</option>
                            </select>
                            @error('island')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Kode Daerah *</label>
                            <input type="text" name="region_code"
                                value="{{ old('region_code', $region->region_code) }}" maxlength="10"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 @error('region_code') border-red-500 @enderror"
                                required>
                            <p class="text-gray-500 text-xs mt-1">Contoh: YK, PDG, SBY (max 10 karakter)</p>
                            @error('region_code')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Update
                            </button>
                            <a href="{{ route('admin.regions.index') }}"
                                class="text-gray-600 hover:text-gray-900">Batal</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
