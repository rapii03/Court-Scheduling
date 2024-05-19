<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile User</title>
    <link rel="icon" type="image/x-icon" href="/assets/">
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
    <x-layoutUser />
    <div class="ml-[228px] mt-24">
        <div class="h-full pt-5 pb-5">
            <div class="bg-white rounded-lg shadow-lg mt-42 ml-10 mr-10 min-h-[605px]">
                <div class="p-5">
                    <div class="text-[40px] font-bold mb-10">Data User</div>
                    <div class="justify-between flex gap-5">
                        <div class="w-[25%]">
                            <div id="tooltip-jese" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                Rafi Ramadhan Pratama
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                            <img data-tooltip-target="tooltip-jese" class="w-full h-full rounded"
                                src="https://platinumlist.net/guide/wp-content/uploads/2023/03/IMG-worlds-of-adventure.webp"
                                alt="Medium avatar">
                        </div>
                        <div class="w-[75%]">
                            <div class="flex justify-between gap-5">
                                <div class="mb-4 w-[50%]">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                        Email
                                    </label>
                                    <input name=""
                                        class="shadow appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="email" type="email" placeholder="Email" maxlength="20" required>
                                </div>
                                <div class="mb-4 w-[50%]">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nim">
                                        NIM
                                    </label>
                                    <input name=""
                                        class="shadow appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="email" type="text" placeholder="NIM" minlength="8" maxlength="20"
                                        required>
                                </div>
                            </div>
                            <div class="flex justify-between gap-5">
                                <div class="mb-4 w-[50%]">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="dosenWali">
                                        Dosen Wali
                                    </label>
                                    <input name=""
                                        class="shadow appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="email" type="text" placeholder="Dosen Wali" maxlength="20" required>
                                </div>
                                <div class="mb-4 w-[50%]">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="bidangKeahlian">
                                        Bidang Keahlian
                                    </label>
                                    <input name=""
                                        class="shadow appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="bidangKeahlian" type="text" placeholder="Bidang Keahlian" maxlength="20"
                                        required>
                                </div>
                            </div>
                            <div class="flex justify-between gap-5">
                                <div class="mb-4 w-[50%]">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="dosenPembimbing1">
                                        Dosen Pembimbing 1
                                    </label>
                                    <input name=""
                                        class="shadow appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="dosenPembimbing1" type="text" placeholder="Dosen Pembimbing 1"
                                        maxlength="100" required>
                                </div>
                                <div class="mb-4 w-[50%]">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="dosenPembimbing2">
                                        Dosen Pembimbing 2
                                    </label>
                                    <input name=""
                                        class="shadow appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="dosenPembimbing2" type="email" placeholder="Dosen Pembimbing 2"
                                        maxlength="100" required>
                                </div>
                            </div>
                            <div class="flex justify-between gap-5">
                                <div class="mb-4 w-[50%]">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="status">
                                        Status
                                    </label>
                                    <input name=""
                                        class="shadow appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="status" type="text" placeholder="Status" maxlength="100"
                                        required>
                                    <div class="mt-2">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="semester">
                                            Semester
                                        </label>
                                        <input name=""
                                            class="shadow appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            id="semester" type="text" placeholder="Semester" maxlength="100"
                                            required>
                                    </div>
                                </div>
                                <div class="mb-4 w-[50%]">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="judulTugasAkhir">
                                        Judul Tugas Akhir
                                    </label>
                                    <textarea name="" id="" class="w-full h-28 text-black-50" placeholder="Judul Tugas Akhir"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-end mt-5">
                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                            class="bg-[#C8AC5E] hover:bg-[#B7A05E] w-[150px] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="button">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="popup-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <button type="button"
                    class="absolute top-3 end-2.5 text-[#872929] bg-transparent hover:bg-[#C8AC5E] hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg width="80" height="65" viewBox="0 0 80 65" fill="none" class="m-auto flex"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M70.3177 9.68233C71.7136 11.0783 71.7136 13.2975 70.3177 14.6935L29.7271 55.2841C29.3995 55.6157 29.0093 55.879 28.5792 56.0587C28.1491 56.2384 27.6876 56.3309 27.2215 56.3309C26.7553 56.3309 26.2939 56.2384 25.8637 56.0587C25.4336 55.879 25.0435 55.6157 24.7159 55.2841L9.68233 40.2506C9.35073 39.923 9.08746 39.5328 8.90777 39.1027C8.72809 38.6726 8.63556 38.2111 8.63556 37.745C8.63556 37.2788 8.72809 36.8173 8.90777 36.3872C9.08746 35.9571 9.35073 35.567 9.68233 35.2394C10.0099 34.9078 10.4001 34.6445 10.8302 34.4648C11.2603 34.2851 11.7218 34.1926 12.1879 34.1926C12.654 34.1926 13.1155 34.2851 13.5456 34.4648C13.9758 34.6445 14.3659 34.9078 14.6935 35.2394L27.2215 47.7673L65.3065 9.68233C65.6341 9.35073 66.0242 9.08746 66.4543 8.90777C66.8845 8.72809 67.3459 8.63556 67.8121 8.63556C68.2782 8.63556 68.7397 8.72809 69.1698 8.90777C69.5999 9.08746 69.9901 9.35073 70.3177 9.68233ZM62.7651 2.09396L27.2215 37.6376L17.2349 27.651C14.443 24.8591 9.89709 24.8591 7.10514 27.651L2.09396 32.6622C-0.697987 35.4541 -0.697987 40 2.09396 42.7919L22.1387 62.8367C24.9306 65.6286 29.4765 65.6286 32.2685 62.8367L77.906 17.2349C80.698 14.443 80.698 9.89709 77.906 7.10514L72.8949 2.09396C70.0671 -0.697987 65.557 -0.697987 62.7651 2.09396Z"
                            fill="#26B34D" />
                    </svg>
                    <h3 class="mb-5 mt-5 text-lg font-normal text-gray-500">Your account has been successfully created!
                    </h3>
                    <button data-modal-hide="popup-modal" type="button"
                        class="text-white bg-[#C8AC5E] hover:bg-[#C8AC5E] focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Confirm
                    </button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
