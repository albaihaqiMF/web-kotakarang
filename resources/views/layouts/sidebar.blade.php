<div @click.away="open = false"
    class="md:fixed md:h-screen flex flex-col w-full text-gray-700 bg-gray-500 md:w-64 dark-mode:text-gray-200 dark-mode:bg-gray-800 shadow-xl relative z-50"
    x-data="{ open: false, show: false }">
    <div class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4">
        <a href="#"
            class="text-lg font-semibold tracking-widest text-white uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
            <x-app-logo size="30"></x-app-logo>
        </a>
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                <path x-show="!open" fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
                <path x-show="open" fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
    <nav :class="{'block': open, 'hidden': !open}" class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
        <a class="block px-4 py-2 mt-2 text-sm font-semibold text-white rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-black dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-white focus:text-black hover:bg-black focus:bg-gray-200 focus:outline-none focus:shadow-outline"
            href="{{ route('admin.dashboard') }}">
            <i class="far fa-chart-bar mx-1"></i>
            <span>Dashboard</span>
        </a>
        <a x-on:click.prevent="show=!show"
            class="block px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-white hover:bg-black cursor-pointer"><i
                class="fas fa-chart-pie mx-1"></i>
            <span>Data</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-0': show, '-rotate-90': !show}"
                class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg></a>
        <div x-show="show" x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95" class="px-2">
            <a class="block px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-white hover:bg-black cursor-pointer"
                href="{{ route('admin.data-penduduk') }}"><i class="fas fa-user mx-1"></i>
                <span>Penduduk</span>
            </a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-white hover:bg-black cursor-pointer"
                href="{{ route('admin.data-keluarga') }}"><i class="fas fa-users mx-1"></i>
                <span>Kartu Keluarga</span>
            </a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-white hover:bg-black cursor-pointer"
                href="{{ route('admin.data-keluarga') }}"><i class="fas fa-user-tie mx-1"></i>
                <span>RT</span>
            </a>
        </div>
        <a class="block px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-black dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-white focus:text-black hover:bg-black focus:bg-gray-200 focus:outline-none focus:shadow-outline"
            href="{{ route('admin.map') }}"><i class="fas fa-map-marked-alt mx-1"></i>
            <span>Map</span>
        </a>
        <a class="block px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-black dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-white focus:text-black hover:bg-black focus:bg-gray-200 focus:outline-none focus:shadow-outline"
            href="#">
            <span>Kontak</span>
        </a>
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open"
                class="flex flex-row items-center w-full px-4 text-white py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-black dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-white focus:text-black hover:bg-black focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                <span>Layanan</span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                    class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-700">

                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-black dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-white focus:text-black hover:bg-black focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="#">KTP</a>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-black dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-white focus:text-black hover:bg-black focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="#">Kartu Keluarga</a>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-black dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-white focus:text-black hover:bg-black focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="#">SK Kelahiran</a>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-black dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-white focus:text-black hover:bg-black focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="#">SK Kematian</a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="route('logout')"
                            class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-black dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-white focus:text-black hover:bg-black focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</div>
