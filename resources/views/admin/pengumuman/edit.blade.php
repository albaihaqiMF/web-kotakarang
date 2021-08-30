<x-admin-layout title="{{ $data->title }}">
    <x-slot name="header">
        / Edit / {{ $data->slug }}
    </x-slot>
    <div class="w-full p-3">
        <div class="w-full rounded-lg shadow p-4">
            <form action="{{ route('admin.pengumuman.update',['pengumuman'=>$data->slug]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="mb-4">
                    <label class="block text-gray-600 text-sm font-bold mb-2" for="title">
                        Judul Pengumuman
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-600" name="title"
                        id="title" type="text" placeholder="Judul Pengumuman" value="{{ old('title') ?? $data->title }}"
                        required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 text-sm font-bold mb-2" for="desc">
                        Isi
                    </label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-600" name="desc"
                        id="desc" placeholder="Isi">{{ old('desc') ?? $data->desc }}</textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 text-sm font-bold mb-2" for="gambar">
                        Gambar
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-600" name="gambar"
                        id="gambar" type="file" placeholder="Gambar" value="{{ old('gambar') ?? $data->gambar }}">
                </div>
                <div class="w-full flex justify-center">
                    <button type="submit"
                        class="rounded-full bg-gradient-to-br from-gray-500 to-cyan-500 px-4 py-2 text-white hover:from-gray-300 hover:to-cyan-300 hover:text-gray-800 font-bold">TERBITKAN</button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
