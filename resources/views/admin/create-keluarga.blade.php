<x-admin-layout title="Masukkan Data KK Baru">
    <form action="{{ route('admin.keluarga.store') }}" method="post">
        @csrf
        <div class="bg-white shadow-md rounded px-4 md:px-8 pt-6 pb-8 flex flex-col">
            <div class="text-lg w-full text-center py-2">
                Memasukkan Data KK
            </div>
            <div class="">
                <div class="mb-4">
                    <label class="block text-gray-800 text-sm font-bold mb-2" for="No KK">
                        No KK
                    </label>
                    <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800"
                        id="no_kk" name="no_kk" type="text" placeholder="No KK" value="{{ old('no_kk') }}">
                    @error('no_kk')
                    <x-alert-validate>
                        {{ Str::upper($message) }}
                    </x-alert-validate>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-800 text-sm font-bold mb-2" for="Kepala Keluarga">
                        Kepala Keluarga
                    </label>
                    <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800"
                        id="kepala_keluarga" name="kepala_keluarga" type="text" placeholder="Kepala Keluarga"
                        value="{{ old('kepala_keluarga') }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-800 text-sm font-bold mb-2" for="alamat">
                        Alamat
                    </label>
                    <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800"
                        name="alamat" id="alamat" type="text" placeholder="Alamat" value="{{ old('alamat') }}">
                </div>
                <div class="grid md:grid-cols-3 gap-3">
                    <div class="mb-4">
                        <label class="block text-gray-800 text-sm font-bold mb-2" for="rt">
                            RT
                        </label>
                        <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800"
                            name="rt" id="rt" type="text" placeholder="RT" value="{{ old('rt') }}">
                        @error('rt')
                        <x-alert-validate>
                            {{ Str::upper($message) }}
                        </x-alert-validate>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-800 text-sm font-bold mb-2" for="rw">
                            RW
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800" name="rw"
                            id="rw" type="text" placeholder="RW" value="{{ old('rw') }}">
                        @error('rw')
                        <x-alert-validate>
                            {{ Str::upper($message) }}
                        </x-alert-validate>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-800 text-sm font-bold mb-2" for="kode_pos">
                            Kode Pos
                        </label>
                        <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800"
                            name="kode_pos" id="kode_pos" type="text" placeholder="Kode Pos"
                            value="{{ old('kode_pos') }}">
                        @error('kode_pos')
                        <x-alert-validate>
                            {{ Str::upper($message) }}
                        </x-alert-validate>
                        @enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-3">
                    <div class="mb-4">
                        <label class="block text-gray-800 text-sm font-bold mb-2" for="kelurahan">
                            Kelurahan
                        </label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800"
                            name="kelurahan" id="kelurahan" value="{{ old('kelurahan') }}">
                            <option value="1122001">Kota Karang</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-800 text-sm font-bold mb-2" for="kecamatan">
                            Kecamatan
                        </label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800"
                            name="kecamatan" id="kecamatan" value="{{ old('kecamatan') }}">
                            <option value="1123001">Telukbetung Timur</option>
                        </select>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-3">
                    <div class="mb-4">
                        <label class="block text-gray-800 text-sm font-bold mb-2" for="kabupaten">
                            Kabupaten
                        </label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800"
                            name="kabupaten" id="kabupaten" value="{{ old('kabupaten') }}">
                            <option value="1124001">Kota Bandar Lampung</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-800 text-sm font-bold mb-2" for="provinsi">
                            Provinsi
                        </label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800"
                            name="provinsi" id="provinsi" value="{{ old('provinsi') }}">
                            <option value="1125001">Lampung</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="text-lg w-full text-center py-2">
                <button type="submit" class="rounded-md bg-blue-500 text-white p-2 w-full">
                    Masukkan
                </button>
            </div>
        </div>
    </form>
</x-admin-layout>
