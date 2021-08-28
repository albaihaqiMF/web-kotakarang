<x-guest-layout>
    <div class="w-full">
        <div class="w-full py-8 flex items-center justify-center">
            <h1 class="font-bold text-3xl md:text-4xl text-center">Pembuatan Beberapa Atribut</h1>
        </div>
        <div class="grid md:grid-cols-4 gap-4 w-full p-5">
            <a href="{{ route('ktp') }}">
                <div
                    class="bg-blue-500 transform duration-200 hover:scale-105 border-4 border-blue-100 rounded-2xl shadow-sm hover:shadow-xl p-5 text-xl font-semibold text-white m-1 flex flex-col items-center justify-center">
                    <i class="far fa-address-card fa-3x"></i>
                    <span>KTP</span>
                </div>
            </a>
            <a href="{{ route('sk-kelahiran') }}">
                <div
                    class="bg-green-500 transform duration-200 hover:scale-105 border-4 border-green-100 rounded-2xl shadow-sm hover:shadow-xl p-5 text-xl font-semibold text-white m-1 flex flex-col items-center justify-center">
                    <i class="fas fa-sticky-note fa-3x"></i>
                    <span>SK Kelahiran</span>
                </div>
            </a>
            <a href="{{ route('sk-kematian') }}">
                <div
                    class="bg-red-500 transform duration-200 hover:scale-105 border-4 border-red-100 rounded-2xl shadow-sm hover:shadow-xl p-5 text-xl font-semibold text-white m-1 flex flex-col items-center justify-center">
                    <i class="fas fa-notes-medical fa-3x"></i>
                    <span>SK Kematian</span>
                </div>
            </a>
            <a href="{{ route('kk') }}">
                <div
                    class="bg-yellow-300 transform duration-200 hover:scale-105 border-4 border-yellow-100 rounded-2xl shadow-sm hover:shadow-xl p-5 text-xl font-semibold text-white m-1 flex flex-col items-center justify-center">
                    <i class="far fa-newspaper fa-3x"></i>
                    <span>KK</span>
                </div>
            </a>
        </div>'
    </div>
</x-guest-layout>
