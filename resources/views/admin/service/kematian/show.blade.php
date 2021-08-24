<x-admin-layout title="{{ $data->nama }}">
    <div class="w-full">
        <div class="container p-4">
            <div class="mb-4">
                <h1 class="text-xl font-bold">Nama : "{{ $data->nama }}"</h1>
            </div>
            <div class="detail">
                <div class="mb-4">
                    <h4 class="block text-grey-darker text-sm font-bold mb-2" for="alamat">Alamat:</h4>
                    <p class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker">
                        {{ $data->alamat }}</p>
                </div>
                <div class="mb-4">
                    <h4 class="block text-grey-darker text-sm font-bold mb-2" for="alamat">No. Handphone:</h4>
                    <p class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker">
                        {{ $data->no_hp }}</p>
                </div>
                <div class="grid grid-cols-3 gap-3">
                    <div class="mb-4 P-4">
                        <h4 class="block text-grey-darker text-sm font-bold mb-2" for="alamat">Surat Ketengan RT:</h4>
                        <img src="{{ asset('storage/'.$data->sk_rt) }}" alt="{{ $data->sk_rt }}">
                    </div>
                    <div class="mb-4 P-4">
                        <h4 class="block text-grey-darker text-sm font-bold mb-2" for="alamat">Surat Keterangan dari Rumah
                            Sakit:</h4>
                        <img src="{{ asset('storage/'.$data->sk_rs) }}" alt="{{ $data->sk_rs }}">
                    </div>
                    <div class="mb-4 P-4">
                        <h4 class="block text-grey-darker text-sm font-bold mb-2" for="alamat">Surat Keterangan PBB:</h4>
                        <img src="{{ asset('storage/'.$data->sk_pbb) }}" alt="{{ $data->sk_pbb }}">
                    </div>
                </div>
            </div>

            <x-modal title="Verifikasi Data" button="Verifikasi" color="green">
                Apa sudah yakin untuk diverifikasi?
            </x-modal>
        </div>
    </div>
</x-admin-layout>
