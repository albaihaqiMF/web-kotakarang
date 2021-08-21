<div class="w-screen">
    <form action="{{ route('service.search') }}" method="POST" class="m-4 flex md:justify-end">
        @csrf
        <h1 class="flex items-center mr-4">Cek Status Apabila Sudah Mendaftar</h1>
        <input hidden type="text" value="{{ $type }}" name="service">
        <div class="rounded-lg grid grid-cols-6 gap-0 border-black border-4">
            <input type="text" placeholder="Search (Nama atau No HP)" class="col-span-5 border-none" name="q">
            <button type="submit" class="bg-gray-400 text-black h-full"><i class="fas fa-search"></i></button>
        </div>
    </form>
</div>
