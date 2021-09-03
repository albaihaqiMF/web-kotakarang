<x-guest-layout title="Event">
    <div class="py-8">
        <div id="header" class="text-5xl font-mono font-bold w-full text-center">
            EVENT
            <div class="border-t-2 rounded-sm border-gray-800 "></div>
        </div>
        <div class="w-full grid md:grid-cols-3 gap-4 p-4">
            @foreach ($data as $index => $item)
            <a href="{{ route('event.show',[
                'event' => $item->slug
            ]) }}">
                <div
                    class="bg-gradient-to-br from-white to-white hover:from-blue-500 hover:to-cyan-200 overflow-hidden shadow rounded-md h-auto transform hover:scale-105 transition-all duration-300 group">
                    <div id="content" class="px-2 py-4 grid md:flex justify-between items-center">
                        <div class="text-xl capitalize group-hover:text-white">
                            {{  $item->title }}</div>
                        <div class="{{ $item->jadwal > now() ? 'text-blue-500 group-hover:text-white' : 'text-red-500' }}">
                            {{ $item->created_at->format('D, d M Y') }}
                        </div>
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
