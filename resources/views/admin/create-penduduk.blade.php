<x-admin-layout title="Masukkan Data KK Baru">
    <form action="{{ route('admin.keluarga.store') }}" method="post">
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
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="nik">
                            NIK
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            name="nik" id="nik" type="text" placeholder="NIK" value="{{ old('nik') }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="no_kk">
                            No. KK
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            name="no_kk" id="no_kk" type="text" placeholder="No. KK" value="{{ old('no_kk') }}">
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
