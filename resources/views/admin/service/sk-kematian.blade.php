<x-admin-layout title="SK Kematian">

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
                        <div class="grid grid-cols-3 gap-2">
                            <a href="{{ route('admin.sk-kelahiran.detail', [
                                'kelahiran' => $item->id
                            ]) }}" class="p-1 text-center bg-green-500 rounded-md">Lihat</a>
                            <a href="" class="p-1 text-center bg-red-500 rounded-md">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('assets/js/table.js') }}"></script>
</x-admin-layout>
