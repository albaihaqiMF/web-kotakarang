<x-admin-layout title="Data Penduduk">
    <x-slot name="header">
        /Data Penduduk
    </x-slot>
    <div class="container p-2 flex justify-between">
        <a class="bg-blue-500 rounded-md p-2" href="{{ route('admin.penduduk.create') }}">Masukkan Data Penduduk</a>
    </div>
    <div class="container">
        <div class="p-2 overflow-auto">
            <table class="table-auto rounded-sm w-full border-collapse">
                <thead>
                    <tr class="bg-blue-500">
                        <th class="border-2 p-1">Nama</th>
                        <th class="border-2 p-1">NIK</th>
                        <th class="border-2 p-1">KK</th>
                        <th class="border-2 p-1">Jenis Kelamin</th>
                        <th class="border-2 p-1">Tempat Lahir</th>
                        <th class="border-2 p-1">Tanggal Lahir</th>
                        <th class="border-2 p-1">Pekerjaan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr class="hover:bg-blue-200">
                        <td class="border-2 p-1">{{ $item->nama ?? '-' }}</td>
                        <td class="border-2 p-1">{{ $item->nik ?? '-' }}</td>
                        <td class="border-2 p-1">{{ $item->no_kk ?? '-' }}</td>
                        <td class="border-2 p-1">{{ $item->gender->title ?? '-' }}</td>
                        <td class="border-2 p-1">{{ $item->tempat_lahir ?? '-' }}</td>
                        <td class="border-2 p-1">{{ $item->tanggal_lahir ?? '-' }}</td>
                        <td class="border-2 p-1">{{ $item->pekerjaan->title ?? '-' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
