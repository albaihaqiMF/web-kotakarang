<x-admin-layout title="Masukkan Data KK Baru">
    <form action="" method="post">
        @csrf
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
            <div class="text-lg w-full text-center py-2">
                Memasukkan Data KK
            </div>
            <div class="md:px-32">
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="No KK">
                        No KK
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="no_kk"
                        type="text" placeholder="No KK">
                </div>
                <div class="mb-4">
                  <label class="block text-grey-darker text-sm font-bold mb-2" for="Kepala Keluarga">
                       Kepala Keluarga
                  </label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="kepala_keluarga"
                                    type="text" placeholder="Kepala Keluarga">
                </div>
            </div>
        </div>
    </form>
</x-admin-layout>
