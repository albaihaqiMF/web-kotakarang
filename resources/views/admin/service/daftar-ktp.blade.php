<x-admin-layout title="Pendaftar KTP">
    @if (session()->has('option'))
        <x-alert-success>
            {{ session()->get('option') }}
        </x-alert-success>
    @endif
    <div class="p-2 overflow-auto">
        <table class="table-auto rounded-lg w-full border border-collapse my-1 relative z-0" id="table">
            <thead>
                <tr class="bg-blue-500">
                    <th class="border-2 p-1">Nama</th>
                    <th class="border-2 p-1">No. Handphone</th>
                    <th class="border-2 p-1">Alamat</th>
                    <th class="border-2 p-1">Status</th>
                    <th class="border-2 p-1">Tanggal Daftar</th>
                    <th class="border-2 p-1">Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr class="hover:bg-blue-200">
                    <td class="border-2 p-1">{{ $item->nama ?? '-' }}</td>
                    <td class="border-2 p-1">{{ $item->no_hp ?? '-' }}</td>
                    <td class="border-2 p-1">{{ $item->alamat ?? '-' }}</td>
                    <td class="border-2 p-1">{{ $item->status === 1 ? 'Telah Diverifikasi' : 'Belum Diverifikasi' }}
                    </td>
                    <td class="border-2 p-1">{{ $item->created_at ?? '-' }}</td>
                    <td class="border-2 p-1">
                        <div class="flex justify-center gap-2">
                            @if ($item->status === 0)
                            <x-modal title="Verifikasi Data" color="green" button="Verifikasi" link="{{ route('admin.daftar-ktp.verify', [
                                'id'=>$item->id
                                ]) }}">
                                Data {{ $item->nama }} sudah lengkap?
                            </x-modal>
                            @endif
                            <x-modal title="Hapus Data" color="red" button="Hapus" link="{{ route('admin.daftar-ktp.delete', [
                                'id'=>$item->id
                            ]) }}">
                                Apakah ingin menghapus data {{ $item->nama }}?
                            </x-modal>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('assets/js/table.js') }}"></script>
</x-admin-layout>
