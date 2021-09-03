<x-guest-layout title="{{ $data->title }}">
    <div class="w-full">
        <div id="content" class="py-2 px-4">
            <div id="header-content"
                class="grid md:flex items-center justify-between border-b-2 border-blue-100 gap-4 py-4 mb-4">
                <div class="text-2xl font-bold">
                    {{ $data->title }}
                </div>
                <div class="text-blue-500 text-xs md:text-base">
                    {{ $data->created_at->format('D, d M Y') }}
                </div>
            </div>
            <div id="body-content" class="text-justify">
                {!! nl2br($data->desc) !!}
            </div>
        </div>
    </div>
</x-guest-layout>
