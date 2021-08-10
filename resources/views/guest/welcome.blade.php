<x-guest-layout>
    @section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/carousel.css') }}">
    @endsection
    <div class="">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="{{ asset('image/carousel/kkn.jpg') }}" class="h-96 object-cover" style="width:100%">
                <div class="text text-white text-xl bg-blue-500 bg-opacity-80">Kunjungan Mahasiswa KKN</div>
            </div>

            <div class="mySlides fade">
                <img src="{{ asset('image/carousel/pengasinan.jpg') }}" class="h-96 object-cover" style="width:100%">
                <div class="text text-white text-xl bg-blue-500 bg-opacity-80">Pengasinan Ikan Asin di Pulau Kota Karang</div>
            </div>

            <div class="mySlides fade">
                <img src="{{ asset('image/carousel/tambak.jpg') }}" class="h-96 object-cover" style="width:100%">
                <div class="text text-white text-xl bg-blue-500 bg-opacity-80">Beberapa Kolam milik warga desa Kota Karang</div>
            </div>

        </div>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>
    <script src="{{ asset('assets/js/carousel.js') }}"></script>
</x-guest-layout>
