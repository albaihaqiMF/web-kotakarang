<x-guest-layout title="Tentang Kami">
    <div class="w-full h-24 md:h-64 flex flex-row items-center justify-center bg-gradient-to-br from-blue-300 to-cyan-300 bg-fixed bg-cover bg-bottom filter saturate-100"
        style="background-image: url('{{ asset('image/about.jpg') }}')">

        <div>
            <h1 class="text-3xl md:text-5xl text-white font-semibold text-center group">
                Tentang Kami
                <div class="border-t-4 rounded-full border-blue-500 mt-4 group-hover:border-blue-300"></div>
            </h1>
        </div>
    </div>
    <div class="w-full py-4 px-8">
        <div class="grid md:grid-cols-2 gap-4">
            <div>
                <div class="flex flex-col justify-around">
                    <h1 class="text-2xl md:text-3xl font-bold">Visi</h1>
                    <div class="border-t-4 mt-4 w-full rounded-full border-cyan-500"></div>
                </div>
                <p class="text-justify font-semibold">
                    Terwujudnya peningkatan pelayanan masyarakat dan kinerja aparatur melalui partisipasi masyarakat
                    dalam pembangunan
                </p>
            </div>
            <div>
                <div class="flex flex-col justify-around">
                    <h1 class="text-2xl md:text-3xl font-bold">Misi</h1>
                    <div class="border-t-4 mt-4 w-full rounded-full border-cyan-500"></div>
                </div>
                <ul type="1" class="text-justify font-semibold list-decimal px-4">
                    <li>Meningkatkan tertib administrasi yang berkualitas, dinamis dan bertanggungjawab</li>
                    <li>Menyelenggarakan pemerintah yang bersih, berwibawa, jujur dan partisifatip</li>
                    <li>Meningkatkan peran serta masyarakat dalam pembangunan yang demokratis, berkeadilan dan
                        berkelanjutan</li>
                </ul>
            </div>
        </div>
    </div>
</x-guest-layout>