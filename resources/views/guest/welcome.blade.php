<x-guest-layout>
    @section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/carousel.css') }}">
    @endsection
    <x-carousel></x-carousel>
    <script src="{{ asset('assets/js/carousel.js') }}"></script>
</x-guest-layout>
