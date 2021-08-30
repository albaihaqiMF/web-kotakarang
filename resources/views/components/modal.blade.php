{{-- <div class="m-10"> --}}
<!-- Modal -->
<div x-data="{ showModal : false }">
    <!-- Button -->
    <button @click="showModal = !showModal"
        class="px-4 py-2 text-sm bg-{{$color}}-500 rounded-lg border transition-colors duration-150 ease-linear border-gray-200 text-white hover:text-{{$color}}-500 font-bold hover:bg-gray-50 focus:ring focus:ring-{{ $color }}-500">{{$button}}</button>

    <!-- Modal Background -->
    <div x-show="showModal"
        class="fixed text-gray-800 flex items-center justify-center overflow-auto z-50 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0"
        x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <!-- Modal -->
        <div x-show="showModal" class="bg-white rounded-xl shadow-2xl p-6 sm:w-6/12 mx-10"
            @click.away="showModal = false" x-transition:enter="transition ease duration-100 transform"
            x-transition:enter-start="opacity-0 scale-90 translate-y-1"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease duration-100 transform"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-90 translate-y-1">
            <!-- Title -->
            <span class="font-bold block text-2xl mb-3">{{ $title }} </span>
            <!-- Some beer 🍺 -->
            <p class="mb-5">{{$slot}}</p>

            <!-- Buttons -->
            <div class="flex justify-end space-x-5 mt-5">
                <button @click="showModal = !showModal"
                    class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-800 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">Cancel</button>
                @isset ($link)
                <form action="{{ $link }}" method="POST">
                    @csrf
                    @method('patch')
                    <button type="submit"
                        class="px-4 py-2 text-sm bg-{{$color}}-500 rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-white hover:text-{{$color}}-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">{{ $button }}</button>
                </form>
                @endisset
            </div>
        </div>
    </div>
</div>
{{-- </div> --}}
