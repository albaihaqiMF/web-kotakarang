<x-admin-layout title="Acara">
    <x-slot name="header">
        /Acara
    </x-slot>
    <div class="w-full py-4 px-3">
        @if (Auth::user()->role === 2)
        <a href="{{ route('admin.event.create') }}"
            class="px-6 py-3 rounded-md bg-gradient-to-br from-blue-500 to-cyan-500">Buat Baru</a>
        @endif
    </div>
    <div class="p-4">
        <table id="table" class="table table-auto border-collapse">
            <thead>
                <tr>
                    <th class="border border-blue-50 ">No.</th>
                    <th class="border border-blue-50 ">Judul</th>
                    <th class="border border-blue-50 ">Keterangan</th>
                    <th class="border border-blue-50 ">Jadwal</th>
                    <th class="border border-blue-50 ">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $item)
                <tr class="hover:bg-blue-100">
                    <td class="border border-blue-50 ">{{ $index+1 }}</td>
                    <td class="border border-blue-50 font-semibold">{{ $item->title }}</td>
                    <td class="border border-blue-50 " title="{{ $item->desc }}">{{ substr($item->desc,0,20)."..." }}
                    <td class="border border-blue-50 "
                        title="{{ $item->jadwal <= now() ? 'Sudah Lewat' : 'Akan Datang' }}">
                        <div class="flex justify-between">
                            <span>{{ date('D, d M Y',strtotime($item->jadwal)) }}</span>
                            <div
                                class="w-5 h-5 rounded-full bg-gradient-to-br {{ $item->jadwal <= now() ? 'from-red-500 to-yellow-700' : 'from-blue-800 to-cyan-800' }}">
                            </div>
                        </div>
                    </td>
                    </td>
                    <td class="border border-blue-50 ">
                        <div class="flex justify-around">
                            <x-modal color="blue" title="{{ $item->title }}">
                                <x-slot name="button">
                                    <i class="fas fa-eye"></i>
                                </x-slot>
                                <div class="w-full">
                                    <div>
                                        <h1 class="text-xl font-semibold">Jadwal:</h1>
                                        <p class="text-blue-500">{{ date('D, d M Y',strtotime($item->jadwal)) }}</p>
                                    </div>
                                    <div>
                                        <h1 class="text-xl font-semibold">Keterangan:</h1>
                                        <p>{!! nl2br($item->desc) !!}</p>
                                    </div>
                                </div>
                            </x-modal>
                            @if (Auth::user()->role === 2)
                            <a href="{{ route('admin.event.edit',['event'=>$item->slug]) }}" title="edit"
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
