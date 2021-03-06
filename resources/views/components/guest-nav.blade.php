<nav class="bg-white shadow-lg transition duration-200 z-10" id="navbar">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <!-- Website Logo -->
                <div class="px-3">
                    <a href="{{ route('welcome') }}" class="flex items-center py-4 px-2">
                        <x-app-logo size="25" label="false"></x-app-logo>
                    </a>
                </div>
                <!-- Primary Navbar items -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="{{ route('welcome') }}"
                        class="py-4 px-2  font-semibold {{ request()->is('/') ? 'text-gray-500 border-b-4 border-blue-500' : 'hover:text-blue-500 transition duration-300' }}">Beranda</a>
                    <a href="{{ route('service') }}"
                        class="py-4 px-2  font-semibold {{ request()->is('service/*') || request()->is('service') ? 'text-gray-500 border-b-4 border-blue-500' : 'hover:text-blue-500 transition duration-300' }}">Layanan</a>
                    <a href="{{ route('map') }}"
                        class="py-4 px-2  font-semibold {{ request()->is('map') ? 'text-gray-500 border-b-4 border-blue-500' : 'hover:text-blue-500 transition duration-300' }}">Map</a>
                    <a href="{{ route('about') }}"
                        class="py-4 px-2  font-semibold {{ request()->is('about-us') ? 'text-gray-500 border-b-4 border-blue-500' : 'hover:text-blue-500 transition duration-300' }}">Tentang</a>
                    <a href="{{ route('contact') }}"
                        class="py-4 px-2  font-semibold {{ request()->is('contact-us') ? 'text-gray-500 border-b-4 border-blue-500' : 'hover:text-blue-500 transition duration-300' }}">Kontak</a>
                </div>
            </div>
            <!-- Secondary Navbar items -->
            <div class="hidden md:flex items-center space-x-3 ">
                @auth
                @if (Auth::user()->role == 2)
                <a href="{{ route('admin.dashboard') }}">{{ Auth::user()->name }}</a>
                @else
                <a href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a>
                @endif
                @else
                <a href="{{ route('login') }}"
                    class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-blue-500 hover:text-white transition duration-300">Log
                    In</a>
                @endauth
            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                    <svg class=" w-6 h-6 text-gray-500 hover:text-blue-500 " x-show="!showMenu" fill="none"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- mobile menu -->
    <div class="hidden mobile-menu">
        <ul class="">
            <li class="active"><a href="{{ route('welcome') }}"
                    class="block text-sm px-2 py-4 {{ request()->is('/') ? 'text-white bg-blue-500 font-semibold' : 'hover:bg-blue-500 transition duration-300' }}">Beranda</a>
            </li>
            <li><a href="{{ route('service') }}"
                    class="block text-sm px-2 py-4 {{ request()->is('service') ? 'text-white bg-blue-500 font-semibold' : 'hover:bg-blue-500 transition duration-300' }}">Layanan</a>
            </li>
            <li><a href="{{ route('map') }}"
                    class="block text-sm px-2 py-4 {{ request()->is('map') ? 'text-white bg-blue-500 font-semibold' : 'hover:bg-blue-500 transition duration-300' }}">Map</a>
            </li>
            <li><a href="{{ route('about') }}"
                    class="block text-sm px-2 py-4 {{ request()->is('about-us') ? 'text-white bg-blue-500 font-semibold' : 'hover:bg-blue-500 transition duration-300' }}">Tentang</a>
            </li>
            <li><a href="{{ route('contact') }}"
                    class="block text-sm px-2 py-4 {{ request()->is('contact-us') ? 'text-white bg-blue-500 font-semibold' : 'hover:bg-blue-500 transition duration-300' }}">Kontak</a>
            </li>

        </ul>
    </div>
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });

        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', (e) => {
            if (window.pageYOffset > 0) {
                navbar.classList.add('fixed')
                navbar.classList.add('top-0')
                navbar.classList.add('w-full')
            } else {
                navbar.classList.remove('fixed')
                navbar.classList.remove('top-0')
                navbar.classList.remove('w-full')
            }
        })
    </script>
</nav>
