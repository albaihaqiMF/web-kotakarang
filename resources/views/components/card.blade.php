<div class="container">
    <div class="min-h-screen w-full relative flex flex-col items-center pt-6 sm:pt-0">
        <div>
            {{ $logo ?? null }}
        </div>

        <div class="w-full md:w-1/2 mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</div>
