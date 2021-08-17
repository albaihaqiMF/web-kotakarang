<x-admin-layout title="Masukkan Data KK Baru">
    <form action="{{ route('admin.penduduk.store') }}" method="post">
        @csrf
        <div class="bg-white shadow-md rounded px-4 md:px-8 pt-6 pb-8 flex flex-col">
            <div class="text-lg w-full text-center py-2">
                Memasukkan Data Penduduk
            </div>
            <div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="nama">
                        Nama
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="nama"
                        id="nama" type="text" placeholder="Nama" value="{{ old('nama') }}" required>
                </div>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="nik">
                            NIK
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            name="nik" id="nik" type="text" placeholder="NIK" value="{{ old('nik') }}" required>
                        @error('nik')
                        <x-alert-validate>
                            {{ Str::upper($message) }}
                        </x-alert-validate>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="no_kk">
                            No. KK
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            name="no_kk" id="no_kk" type="text" placeholder="No. KK (Boleh Kosong)"
                            value="{{ old('no_kk') }}">
                        @error('no_kk')
                        <x-alert-validate>
                            {{ Str::upper($message) }}
                        </x-alert-validate>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="kewarganegaraan">
                            Kewarganegaraan
                        </label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            name="kewarganegaraan" id="kewarganegaraan" placeholder="Kewarganegaraan"
                            value="{{ old('kewarganegaraan') }}" required>
                            @foreach ($negara as $item)
                            <option value="{{ $item->code }}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="jenis_kelamin">
                            Jenis Kelamin
                        </label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin"
                            value="{{ old('jenis_kelamin') }}" required>
                            @foreach ($gender as $item)
                            <option value="{{ $item->code }}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="tempat_lahir">
                            Tempat Lahir
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            name="tempat_lahir" id="tempat_lahir" type="text" placeholder="Tempat Lahir"
                            value="{{ old('tempat_lahir') }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="tanggal_lahir">
                            Tanggal Lahir
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            name="tanggal_lahir" id="tanggal_lahir" type="date" placeholder="Tanggal Lahir"
                            value="{{ old('tanggal_lahir') }}" required>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="agama">
                            Agama
                        </label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            name="agama" id="agama" placeholder="Agama" value="{{ old('agama') }}" required>
                            @foreach ($agama as $item)
                            <option value="{{ $item->code }}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="status_pernikahan">
                            Status Pernikahan
                        </label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            name="status_pernikahan" id="status_pernikahan" placeholder="Status Pernikahan"
                            value="{{ old('status_pernikahan') }}" required>
                            @foreach ($status as $item)
                            <option value="{{ $item->code }}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-4">

                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="pendidikan">
                        Pendidikan
                    </label>
                    <select class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                        name="pendidikan" id="pendidikan" placeholder="Pendidikan" value="{{ old('pendidikan') }}"
                        required>
                        @foreach ($pendidikan as $item)
                        <option value="{{ $item->code }}">{{ $item->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="jenis_pekerjaan">
                        Pekerjaan
                    </label>
                    <select class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                        name="jenis_pekerjaan" id="jenis_pekerjaan" placeholder="Pekerjaan"
                        value="{{ old('jenis_pekerjaan') }}" required>
                        @foreach ($pekerjaan as $item)
                        <option value="{{ $item->code }}">{{ $item->title }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="no_paspor">
                        Nomor Paspor
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                        name="no_paspor" id="no_paspor" type="text" placeholder="Nomor Paspor"
                        value="{{ old('no_paspor') }}">
                    @error('no_paspor')
                    <x-alert-validate>
                        {{ Str::upper($message) }}
                    </x-alert-validate>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="no_kitas">
                        Nomor Kitas/Kitap
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                        name="no_kitas" id="no_kitas" type="text" placeholder="Nomor Kitas/Kitap"
                        value="{{ old('no_kitas') }}">
                    @error('no_kitas')
                    <x-alert-validate>
                        {{ Str::upper($message) }}
                    </x-alert-validate>
                    @enderror
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="nama_ayah">
                        Nama Ayah
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                        name="nama_ayah" id="nama_ayah" type="text" placeholder="Nama Ayah"
                        value="{{ old('nama_ayah') }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="nama_ibu">
                        Nama Ibu
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                        name="nama_ibu" id="nama_ibu" type="text" placeholder="Nama Ibu" value="{{ old('nama_ibu') }}"
                        required>
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-4"></div>
            <div class="text-lg w-full text-center py-2">
                <button type="submit" class="rounded-md bg-blue-500 text-white p-2 w-full">
                    Masukkan
                </button>
            </div>
        </div>
    </form>
</x-admin-layout>
