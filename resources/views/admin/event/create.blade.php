<x-admin-layout title="Buat Acara">
    <x-slot name="header">
        / Buat Acara Baru
    </x-slot>
    <div class="w-full p-3">
        <div class="w-full shadow p-4 rounded-lg">
            <form action="{{ route('admin.event.store') }}" method="post">
                @csrf
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="title">
                            Judul
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            name="title" id="title" type="text" placeholder="Judul Acara" value="{{ old('title') }}"
                            required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="jadwal">
                            Jadwal
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            name="jadwal" id="jadwal" type="date" placeholder="Jadwal" value="{{ old('jadwal') }}"
                            required>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="desc">
                        Keterangan
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="desc"
                        id="desc" type="text" placeholder="Keterangan" value="{{ old('desc') }}" required>
                </div>
                <div class="w-full p-3 flex justify-center">
                    <button type="submit"
                        class="rounded-full bg-gradient-to-br from-gray-500 to-cyan-500 px-4 py-2 text-white hover:from-gray-300 hover:to-cyan-300 hover:text-gray-800 font-bold">BUAT</button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
