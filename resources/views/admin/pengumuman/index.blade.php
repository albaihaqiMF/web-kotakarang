<x-admin-layout title="Pengumuman">
    <x-slot name="header">
        /Pengumuman
    </x-slot>
    <div class="w-full py-4 px-3">
        @if (Auth::user()->role === 2)

        <a href="{{ route('admin.pengumuman.create') }}"
            class="px-6 py-3 rounded-md bg-gradient-to-br from-blue-500 to-cyan-500">Buat Baru</a>
        @endif
    </div>
    <div class="p-4">
        <table id="table" class="table table-auto border-collapse">
            <thead>
                <tr>
                    <th class="border border-blue-50 ">No.</th>
                    <th class="border border-blue-50 ">Judul</th>
                    <th class="border border-blue-50 ">Konten</th>
                    <th class="border border-blue-50 ">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $item)
                <tr class="hover:bg-blue-100">
                    <td class="border border-blue-50 ">{{ $index+1 }}</td>
                    <td class="border border-blue-50 ">{{ $item->title }}</td>
                    <td class="border border-blue-50 " title="{{ $item->desc }}">{{ substr($item->desc,0,20)."..." }}
                    </td>
                    <td class="border border-blue-50 ">
                        <div class="flex justify-around">
                            <x-modal color="blue" title="{{ $item->title }}">
                                <x-slot name="button">
                                    <i class="fas fa-eye"></i>
                                </x-slot>
                                <div class="w-full">
                                    <div class="w-full overflow-hidden h-52 rounded-xl">
                                        <img src="{{ $item->gambar !== null ? asset('storage/'.$item->gambar) : 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png' }}"
                                            alt="{{ $item->gambar }}" class="w-full object-cover">
                                    </div>
                                    <div>
                                        <h1 class="text-xl font-semibold">Tanggal Terbit:</h1>
                                        <p class="text-blue-500">{{ date('D, d M Y',strtotime($item->created_at)) }}</p>
                                    </div>
                                    <div>
                                        <h1 class="text-xl font-semibold">Keterangan:</h1>
                                        <p>{!! nl2br($item->desc) !!}</p>
                                    </div>
                                </div>
                            </x-modal>
                            @if (Auth::user()->role === 2)
                            <a href="{{ route('admin.pengumuman.edit',[
                                'pengumuman'=>$item->slug
                                ]) }}" title="edit"
                                class="px-4 py-1 bg-green-500 rounded-md text-green-50 hover:bg-green-50 border hover:border-green-500 hover:text-green-500">
                                <i class="fas fa-edit"></i>
                            </a>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('assets/js/table.js') }}"></script>
</x-admin-layout>
