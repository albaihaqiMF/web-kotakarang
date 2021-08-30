<x-admin-layout title="{{ $data->title }}">
    <x-slot name="header">
        / Edit / {{ $data->title }}
    </x-slot>
    <div class="w-full p-3">
        <div class="w-full shadow p-4 rounded-lg">
            <form action="{{ route('admin.event.update',['event'=>$data->slug]) }}" method="post">
                @csrf
                @method('patch')
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="title">
                            Judul
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="title"
                            id="title" type="text" placeholder="Judul Acara" value="{{ old('title') ?? $data->title }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="jadwal">
                            Jadwal
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="jadwal"
                            id="jadwal" type="date" placeholder="Jadwal" value="{{ old('jadwal') ?? $data->jadwal }}" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="desc">
                        Keterangan
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="desc"
                        id="desc" type="text" placeholder="Keterangan" value="{{ old('desc') ?? $data->desc }}" required>
                </div>
                <div class="w-full p-3 flex justify-center">
                    <button type="submit"
                        class="rounded-full bg-gradient-to-br from-gray-500 to-cyan-500 px-4 py-2 text-white hover:from-gray-300 hover:to-cyan-300 hover:text-gray-800 font-bold">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
