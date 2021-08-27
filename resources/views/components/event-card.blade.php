@foreach ($data as $item)
<a href="">
    <div class="grid md:grid-cols-6 h-auto shadow mb-4 overflow-hidden">
        <div class="md:col-span-2 p-4 md:p-1 bg-gradient-to-br from-blue-500 to-green-200">
            <div class="flex flex-col h-full justify-end">
                <span class="text-xl md:text-lg font-semibold">{{ strtoupper(date('M',strtotime($item->jadwal))) }}</span>
                <span class="text-4xl md:text-3xl">{{ date('d',strtotime($item->jadwal)) }}</span>
            </div>
        </div>
        <div class="md:col-span-4 p-4">
            <div class="flex flex-col">
                <span class="text-lg hidden md:block">{{ strlen($item->title) > 10 ? substr($item->title,0,10).'...' : $item->title }}</span>
                <span class="text-lg block md:hidden">{{ $item->title }}</span>
                <span class="text-xs {{ $item->jadwal >= now() ? 'text-blue-500' : 'text-red-500' }}">{{ date('D, d M Y',strtotime($item->jadwal)) }}</span>
            </div>
        </div>
    </div>
</a>
@endforeach
