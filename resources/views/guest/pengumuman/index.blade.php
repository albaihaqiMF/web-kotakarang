<x-guest-layout title="Pengumuman">
    <div class="py-8">
        <div id="header" class="text-5xl font-mono font-bold w-full text-center">
            PENGUMUMAN
            <div class="border-t-2 rounded-sm border-gray-800 "></div>
        </div>
        <div class="w-full grid md:grid-cols-4 gap-4 p-4">
            @foreach ($data as $index => $item)
            <a href="{{ route('pengumuman.show',[
                'pengumuman' => $item->slug
            ]) }}">
                <div
                    class="overflow-hidden shadow rounded-md h-auto transform hover:scale-105 transition-all duration-300">
                    <img src="{{ $item->gambar !== null ? asset('storage/'.$item->gambar) : 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png' }}"
                        alt="{{ $item->title }}" class="object-cover h-40 w-full">
                    <div id="content" class="px-2 py-4 grid md:flex justify-between items-center">
                        <div class="text-xl capitalize">
                            {{ strlen($item->title) <= 10 ? $item->title : substr($item->title,0,10)."..." }}</div>
                        <div class="text-blue-500">{{ $item->created_at->format('D, d M Y') }}</div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <div class="w-full p-4">
            {{ $data->links() }}
        </div>
    </div>
</x-guest-layout>
