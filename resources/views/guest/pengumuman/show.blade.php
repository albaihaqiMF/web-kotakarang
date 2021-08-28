<x-guest-layout title="{{ $data->title }}">
    <div class="w-full">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png" alt="" class="w-full max-h-96 object-cover">
        <div id="content" class="py-2 px-4">
            <div id="header-content" class="grid md:flex items-center justify-between border-b-2 border-blue-100 gap-4 py-4 mb-4">
                <div class="text-2xl font-bold">
                    {{ $data->title }}
                </div>
                <div class="text-blue-500 text-xs md:text-base">
                    {{ $data->created_at->format('D, d M Y') }}
                </div>
            </div>
            <div id="body-content" class="text-justify">
                {{ $data->desc }}
            </div>
        </div>
    </div>
</x-guest-layout>
