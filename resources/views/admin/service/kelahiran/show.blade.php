<x-admin-layout>
    <div class="w-full">
        <div class="container p-4">

            <div class="mb-4">
                <h1 class="text-xl font-bold">{{ $kelahiran->nama }}</h1>
            </div>
            <div class="detail">
                <div class="mb-4">
                    <h4 class="block text-gray-800 text-sm font-bold mb-2" for="alamat">Alamat:</h4>
                    <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800">
                        {{ $kelahiran->alamat }}</p>
                </div>
                <div class="mb-4">
                    <h4 class="block text-gray-800 text-sm font-bold mb-2" for="alamat">No. Handphone:</h4>
                    <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800">
                        {{ $kelahiran->no_hp }}</p>
                </div>
                <div class="grid grid-cols-2 gap-3">

                    <div class="mb-4 P-4">
                        <h4 class="block text-gray-800 text-sm font-bold mb-2" for="alamat">Surat Ketengan RT:</h4>
                        <img src="{{ asset('storage/'.$kelahiran->sk_rt) }}" alt="{{ $kelahiran->sk_rt }}">
                    </div>
                    <div class="mb-4 P-4">
                        <h4 class="block text-gray-800 text-sm font-bold mb-2" for="alamat">Surat Ketengan RS atau
                            Bidan:</h4>
                        <img src="{{ asset('storage/'.$kelahiran->sk_rs) }}" alt="{{ $kelahiran->sk_rs }}">
                    </div>
                    <div class="mb-4 P-4">
                        <h4 class="block text-gray-800 text-sm font-bold mb-2" for="alamat">Foto Kartu Keluarga:</h4>
                        <img src="{{ asset('storage/'.$kelahiran->foto_kk) }}" alt="{{ $kelahiran->foto_kk }}">
                    </div>
                    <div class="mb-4 P-4">
                        <h4 class="block text-gray-800 text-sm font-bold mb-2" for="alamat">Surat Keterangan PBB:
                        </h4>
                        <img src="{{ asset('storage/'.$kelahiran->sk_pbb) }}" alt="{{ $kelahiran->sk_pbb }}">
                    </div>
                </div>
            </div>
            @if (Auth::user()->role === 2)

            <x-modal title="Verifikasi Data" button="Verifikasi" color="green" link="null">
                Apa sudah yakin untuk diverifikasi?
            </x-modal>
            @endif
        </div>
    </div>
</x-admin-layout>
