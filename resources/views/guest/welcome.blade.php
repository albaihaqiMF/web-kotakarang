<x-guest-layout>
    @section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/carousel.css') }}">
    @endsection
    <x-carousel></x-carousel>
    <div class="grid md:grid-cols-6 gap-2 h-full">
        <!-- Pengumuman -->
        <div class="lg:col-span-5 md:col-span-4  md:border-r-2 border-gray-100">
            <div class="header w-full py-4 px-2 border-solid flex flex-col items-center">
                <h1 class="text-3xl text-gray-900 text-center">Pengumuman</h1>
                <div class="border-solid border-t-4 border-blue-500 rounded-full w-1/2"></div>
            </div>
            <div class="py-4 px-8">
                <x-announ-card></x-announ-card>
            </div>
        </div>
        <!-- Event -->
        <div class="lg:col-span-1 md:col-span-2">
            <div class="header w-full py-4 px-2 flex flex-col items-center">
                <h1 class="text-3xl text-gray-900 text-center">Event</h1>
                <div class="border-solid border-t-4 border-blue-500 rounded-full w-1/2"></div>
            </div>
            <div id="content" class="p-4">
                <x-event-card></x-event-card>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/carousel.js') }}"></script>
</x-guest-layout>
