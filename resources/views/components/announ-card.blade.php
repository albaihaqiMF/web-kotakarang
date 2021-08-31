@foreach ($data as $item)

<a href="{{ route('pengumuman.show',['pengumuman'=>$item->slug]) }}" class="hover:shadow-lg transform scale-105 transition-all duration-300">
    <div class="shadow overflow-hidden rounded-md w-full h-auto md:h-56 lg:h-44 mb-4">
        <div class="grid md:grid-cols-4 gap-1">
            <div>
                <img src="{{ $item->gambar !== null ? asset('storage/'.$item->gambar) : 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png' }}"
                    alt="" class="w-full h-48 md:h-full object-cover">
            </div>
            <div class="md:col-span-3 p-3">
                <div id="header">
                    <div class="flex flex-col md:flex-row md:items-center justify-between">
                        <h1 class="text-3xl">{{ $item->title }}</h1>
                        <span class="text-blue-500">{{ $item->created_at->format('D, d M Y') }}</span>
                    </div>
                    <div class="border-solid border-t-2 rounded-md border-blue-100 mt-4"></div>
                </div>
                <div id="desc" class="py-4">
                    <span class="hidden md:block">
                        {{ substr($item->desc,0,250) }}
                    </span>
                    <span class="block md:hidden">
                        {{ substr($item->desc,0,150) }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</a>

@endforeach
