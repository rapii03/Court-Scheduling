<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jadwal</title>
    <link rel="icon" type="image/x-icon" href="/logo_if2.ico">
    {{-- Awal Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    {{-- Akhir Tailwind --}}
    {{-- Awal Flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    {{-- Akhir Flowbite --}}
    {{-- Awal DeasyUi --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" /> --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- Akhir DeasyUi --}}
</head>

<body>
    <x-layoutAdmin />
    <div class="ml-[228px] p-10">
        <div class="font-bold text-[27px]">
            Edit Data Mahasiswa Tugas Akhir
        </div>
        <div class="border-b-[1px] border-[#000000] w-full mt-5"></div>
        <form action="" method="POST" class="rounded bg-white mt-5">
            @csrf
            <div class="flex justify-between gap-5">
                <div class="mb-4 w-[50%]">
                    <label for="" class="mb-2 block text-sm  text-gray-700">Status</label>
                    <input name="" id="" type="text" placeholder="status" value="" required
                        class="w-full appearance-none rounded border text-gray-700 shadow focus:shadow-outline focus:outline-none">
                </div>
                <div class="mb-4 w-[50%]">
                    <label for="" class="mb-2 block text-sm  text-gray-700">Dosen Penguji 1</label>
                    <input name="" id="" type="text" placeholder="Dosen Penguji 2" minlength="8"
                        maxlength="20" value="" required
                        class="w-full appearance-none rounded border text-gray-700 shadow focus:shadow-outline focus:outline-none">
                </div>
            </div>

            <div class="flex justify-between gap-5">
                <div class="mb-4 w-[50%]">
                    <label for="" class="mb-2 block text-sm  text-gray-700">Nama</label>
                    <input name="" id="" type="text" placeholder="Nama" maxlength="100"
                        value="" required
                        class="w-full appearance-none rounded border text-gray-700 shadow focus:shadow-outline focus:outline-none">
                </div>
                <div class="mb-4 w-[50%]">
                    <label for="" class="mb-2 block text-sm  text-gray-700">Dosen Penguji 2</label>
                    <input name="" id="" type="text" placeholder="Dosen Penguji 2" value=""
                        required
                        class="w-full appearance-none rounded border text-gray-700 shadow focus:shadow-outline focus:outline-none">
                </div>
            </div>

            <div class="flex justify-between gap-5">
                <div class="mb-4 w-[50%]">
                    <label for="" class="mb-2 block text-sm  text-gray-700">NIM</label>
                    <input name="" id="" type="number" placeholder="NIM" value="" required
                        class="w-full appearance-none rounded border text-gray-700 shadow focus:shadow-outline focus:outline-none">
                </div>
                <div class="mb-4 w-[50%]">
                    <label for="" class="mb-2 block text-sm  text-gray-700">Hari</label>
                    <input name="" id="" type="text" placeholder="Hari" value="" required
                        class="w-full appearance-none rounded border text-gray-700 shadow focus:shadow-outline focus:outline-none">
                </div>
            </div>

            <div class="flex justify-between gap-5">
                <div class="mb-4 w-[50%]">
                    <label for="" class="mb-2 block text-sm  text-gray-700">Dosen Pembimbing
                        1</label>
                    <input name="" id="" type="text" placeholder="Dosen Pembimbing 1" value=""
                        required
                        class="w-full appearance-none rounded border text-gray-700 shadow focus:shadow-outline focus:outline-none">
                </div>
                <div class="mb-4 w-[50%]">
                    <label for="" class="mb-2 block text-sm  text-gray-700">Tanggal</label>
                    <input name="" id="" type="date" value="" required
                        class="w-full appearance-none rounded border text-gray-700 shadow focus:shadow-outline focus:outline-none">
                </div>
            </div>

            <div class="flex justify-between gap-5">
                <div class="mb-4 w-[50%]">
                    <label for="" class="mb-2 block text-sm  text-gray-700">Dosen Pembimbing
                        2</label>
                    <input name="" id="" type="text" placeholder="Dosen Pembimbing 2" value=""
                        required
                        class="w-full appearance-none rounded border text-gray-700 shadow focus:shadow-outline focus:outline-none">
                </div>
                <div class="mb-4 w-[50%]">
                    <label for="jam" class="mb-2 block text-sm  text-gray-700">Jam</label>
                    <input name="jam" id="jam" type="text" placeholder="Jam" value="" required
                        class="w-full appearance-none rounded border text-gray-700 shadow focus:shadow-outline focus:outline-none">
                </div>
            </div>

            <div class="flex justify-between gap-5">
                <div class="mb-4 w-[50%]">
                    <label for="" class="mb-2 block text-sm  text-gray-700">Judul</label>
                    <textarea name="" id="" placeholder="Judul Tugas Akhir" maxlength="100" rows="4" required
                        class="w-full appearance-none rounded border text-gray-700 shadow focus:shadow-outline focus:outline-none"></textarea>
                </div>
                <div class="mb-4 w-[50%]">
                    <label for="" class="mb-2 block text-sm  text-gray-700">Link Meet</label>
                    <input name="" id="" type="text" placeholder="Link Meet" value=""
                        required
                        class="w-full appearance-none rounded border text-gray-700 shadow focus:shadow-outline focus:outline-none">
                </div>
            </div>

            <div class="flex items-center justify-end gap-5">
                <button type="button" onclick="" data-modal-target="popup-modal1"
                    data-modal-toggle="popup-modal1"
                    class="w-[150px] rounded bg-[#FF0000] px-4 py-2 font-bold text-white hover:bg-[#FF0000] focus:shadow-outline focus:outline-none border border-black">
                    Hapus Jadwal
                </button>
                <button type="button" onclick="" data-modal-target="modal-berhasil-simpan"  data-modal-toggle="modal-berhasil-simpan"
                    class="w-[150px] rounded bg-[#C8AC5E] px-4 py-2 font-bold text-white hover:bg-[#C8AC5E] focus:shadow-outline focus:outline-none border border-black">
                    Simpan
                </button>
            </div>
        </form>
    </div>
    <div id="popup-modal1" tabindex="-1"
        class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
        <div class="relative max-h-full w-full max-w-md p-4">
            <div class="relative rounded-lg bg-white shadow">
                <button type="button"
                    class="absolute end-2.5 top-3 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-[#872929] hover:bg-[#C8AC5E] hover:text-white"
                    data-modal-hide="popup-modal1">
                    <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-10 text-center">
                    <h3 class="mb-5 mt-10 text-[18px] font-bold font-normal text-black">Apakah kamu yakin untuk
                        menghapus jadwal ini?</h3>
                    <form action="/DataDosen/Delete" class="p-4 text-center md:p-5">
                        @csrf
                        <input type="hidden" name="id" id="id-data-delete">
                        <button type=""
                            class="inline-flex items-center rounded-lg bg-[#C8AC5E] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#C8AC5E] focus:outline-none focus:ring-4 focus:ring-[#C8AC5E] border border-black">
                            Yes
                        </button>
                        <button data-modal-hide="popup-modal1" type="button"
                            class="ms-3 rounded-lg bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-black focus:z-10 border border-black">No</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-berhasil-simpan" tabindex="-1"
        class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
        <div class="relative max-h-full w-full max-w-md p-4">
            <div class="relative rounded-lg bg-white shadow">
                <button type="button"
                    class="absolute end-2.5 top-3 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-[#872929] hover:bg-[#C8AC5E] hover:text-white"
                    data-modal-hide="modal-berhasil-simpan">
                    <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 text-center md:p-5">
                    <svg width="80" height="65" viewBox="0 0 80 65" fill="none" class="m-auto flex"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M70.3177 9.68233C71.7136 11.0783 71.7136 13.2975 70.3177 14.6935L29.7271 55.2841C29.3995 55.6157 29.0093 55.879 28.5792 56.0587C28.1491 56.2384 27.6876 56.3309 27.2215 56.3309C26.7553 56.3309 26.2939 56.2384 25.8637 56.0587C25.4336 55.879 25.0435 55.6157 24.7159 55.2841L9.68233 40.2506C9.35073 39.923 9.08746 39.5328 8.90777 39.1027C8.72809 38.6726 8.63556 38.2111 8.63556 37.745C8.63556 37.2788 8.72809 36.8173 8.90777 36.3872C9.08746 35.9571 9.35073 35.567 9.68233 35.2394C10.0099 34.9078 10.4001 34.6445 10.8302 34.4648C11.2603 34.2851 11.7218 34.1926 12.1879 34.1926C12.654 34.1926 13.1155 34.2851 13.5456 34.4648C13.9758 34.6445 14.3659 34.9078 14.6935 35.2394L27.2215 47.7673L65.3065 9.68233C65.6341 9.35073 66.0242 9.08746 66.4543 8.90777C66.8845 8.72809 67.3459 8.63556 67.8121 8.63556C68.2782 8.63556 68.7397 8.72809 69.1698 8.90777C69.5999 9.08746 69.9901 9.35073 70.3177 9.68233ZM62.7651 2.09396L27.2215 37.6376L17.2349 27.651C14.443 24.8591 9.89709 24.8591 7.10514 27.651L2.09396 32.6622C-0.697987 35.4541 -0.697987 40 2.09396 42.7919L22.1387 62.8367C24.9306 65.6286 29.4765 65.6286 32.2685 62.8367L77.906 17.2349C80.698 14.443 80.698 9.89709 77.906 7.10514L72.8949 2.09396C70.0671 -0.697987 65.557 -0.697987 62.7651 2.09396Z"
                            fill="#26B34D" />
                    </svg>
                    <h3 class="mb-5 mt-5 text-lg font-normal text-gray-500">Data berhasil
                        disimpan</h3>
                    <button data-modal-hide="modal-berhasil-simpan" type="button"
                        class="inline-flex items-center rounded-lg bg-[#C8AC5E] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#C8AC5E] focus:outline-none focus:ring-4 focus:ring-red-300">
                        Confirm
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
