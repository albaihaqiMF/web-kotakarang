<x-admin-layout title="Dashboard">
    <x-slot name="header">
        /Dashboard
    </x-slot>
    <div class="py-12">
        <div class="px-4">
            <div class="grid md:grid-cols-3 gap-10">
                <a href="{{ route('admin.data-penduduk') }}">
                    <div
                        class="card shadow-lg border-b-8 rounded-sm flex flex-col items-center justify-center transition duration-200 ease-linear transform hover:scale-105 border-blue-500 h-60 p-5">
                        <h1 class="text-5xl text-blue-500 text-center">
                            {{ $data['penduduk'] }}</h1>
                        <h4 class="text-blue-500 text-center">Jumlah Penduduk</h4>
                    </div>
                </a>
                <a href="{{ route('admin.data-keluarga') }}">
                    <div
                        class="card shadow-lg border-b-8 rounded-sm flex flex-col items-center justify-center transition duration-200 ease-linear transform hover:scale-105 border-green-500 h-60 p-5">
                        <h1 class="text-5xl text-green-500 text-center">
                            {{ $data['keluarga'] }}</h1>
                        <h4 class="text-green-500 text-center">Jumlah KK</h4>
                    </div>
                </a>
                <a href="">
                    <div
                        class="card shadow-lg border-b-8 rounded-sm flex flex-col items-center justify-center transition duration-200 ease-linear transform hover:scale-105 border-yellow-500 h-60 p-5">
                        <h1 class="text-5xl text-yellow-500 text-center">
                            {{ $data['rt'] }}</h1>
                        <h4 class="text-yellow-500 text-center">Jumlah RT</h4>
                    </div>
                </a>
                <div class="hidden md:flex container">
                    <canvas id="myChart" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>
    <script>
        var ctx = document.getElementById("myChart");
        var labels=["Perempuan", "Laki-laki"]
        var title = "Jumlah Penduduk"
    </script>
    <script src="{{ asset('assets/js/transition.js') }}"></script>
    <script src="{{ asset('assets/js/chart/gender.js') }}"></script>

</x-admin-layout>
