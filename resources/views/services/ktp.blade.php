<x-guest-layout>
    <x-search type="1"></x-search>
    <div class="w-screen">
        @if (session()->has('success'))
            <x-alert-success>
                {{ session()->get('success') }}
            </x-alert-success>
        @endif
        @if (session()->has('search'))
        <div class="p-4 overflow-auto">
            <table class="table w-full border-collapse">
                <thead>
                    <tr>
                        <th class="border-2 p-1">Nama</th>
                        <th class="border-2 p-1">No. Handphone</th>
                        <th class="border-2 p-1">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse (session()->get('search') as $item)
                    <tr>
                        <td class="border-2 p-1">{{ $item->nama }}</td>
                        <td class="border-2 p-1">{{ $item->no_hp }}</td>
                        <td class="border-2 p-1">{{ $item->status === 1 ? 'Terverfikasi' : 'Belum diverifikasi' }}</td>
                    </tr>
                    @empty
                    <div class="flex justify-center m-4 p-4 bg-red-200 border-2 rounded-lg border-red-500">
                        <h1 class="text-red-500 font-bold">DATA TIDAK ADA</h1>
                    </div>
                    @endforelse
                </tbody>
            </table>
        </div>
        @else
        <div class="flex justify-center p-4">
            <h1 class="text-2xl text-center">Mendaftar Pembuatan KTP</h1>
        </div>
        <div class="p-4 w-full flex flex-col items-center">
            <form action="{{ route('store.ktp') }}" method="post" class="md:w-6/12 md:p-4 md:bg-white rounded-lg md:shadow-md">
                @csrf
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="nama">
                        Nama
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="nama"
                        id="nama" type="text" placeholder="Nama" value="{{ old('nama') }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="alamat">
                        Alamat
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="alamat"
                        id="alamat" type="text" placeholder="Alamat" value="{{ old('alamat') }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="no_hp">
                        No. Handphone
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="no_hp"
                        id="no_hp" type="text" placeholder="No. Handphone" value="{{ old('no_hp') }}" required>
                        @error('no_hp')
                            <x-alert-validate>
                                {{ $message }}
                            </x-alert-validate>
                        @enderror
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="bg-blue-500 rounded-lg p-2 md:shadow-md text-white text-lg">DAFTAR</button>
                </div>
            </form>
        </div>
        @endif
    </div>
</x-guest-layout>
