<x-admin-layout title="Data Keluarga">
    <x-slot name="header">
        /Data Keluarga
    </x-slot>
    <div class="container py-2 px-4">
        @if (Auth::user()->role === 2)
        <div class="flex justify-between p-2">
            <a href="{{ route('admin.keluarga.create') }}"
                class="bg-blue-500 rounded-md p-2 text-white hover:shadow-lg hover:bg-gray-500">Masukkan Data Baru</a>
        </div>
        @endif
        @if (session()->has('success'))
        <x-alert-success>
            {{ session()->get('success') }}
        </x-alert-success>
        @endif
        <div class="p-2 overflow-auto">
            <table class="table-auto rounded-lg w-full border border-collapse my-1 relative z-0" id="table">
                <thead>
                    <tr class="bg-blue-500">
                        <th class="border-2 p-1">No. KK</th>
                        <th class="border-2 p-1">Kepala Keluarga</th>
                        <th class="border-2 p-1">Alamat</th>
                        <th class="border-2 p-1">RT</th>
                        <th class="border-2 p-1">LK</th>
                        <th class="border-2 p-1">Kelurahan</th>
                        <th class="border-2 p-1">Kecamatan</th>
                        <th class="border-2 p-1">Kabupaten</th>
                        <th class="border-2 p-1">Provinsi</th>
                        <th class="border-2 p-1">Kode Pos</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr class="hover:bg-blue-200">
                        <td class="border-2 p-1">{{ $item->no_kk ?? '-' }}</td>
                        <td class="border-2 p-1">{{ $item->kepala_keluarga ?? '-' }}</td>
                        <td class="border-2 p-1">{{ $item->alamat ?? '-' }}</td>
                        <td class="border-2 p-1">{{ $item->rt ?? '-' }}</td>
                        <td class="border-2 p-1">{{ $item->rw ? 'LK.'.$item->rw : '-' }}</td>
                        <td class="border-2 p-1">{{ $item->masterKelurahan->title ?? '-' }}</td>
                        <td class="border-2 p-1">{{ $item->masterKecamatan->title ?? '-' }}</td>
                        <td class="border-2 p-1">{{ $item->masterKabupaten->title ?? '-' }}</td>
                        <td class="border-2 p-1">{{ $item->masterProvinsi->title ?? '-' }}</td>
                        <td class="border-2 p-1">{{ $item->kode_pos ?? '-' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="{{ asset('assets/js/table.js') }}"></script>
</x-admin-layout>
