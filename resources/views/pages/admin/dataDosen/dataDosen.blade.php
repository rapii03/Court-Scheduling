<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
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
    <x-layoutAdmin />
    <div class="ml-[228px] p-5">
        <div class="text-[40px] font-bold mb-2">Dashboard</div>
        <a href="/DataDosen/Tambah" type="button"
            class="text-white bg-[#C8AC5E] hover:bg-[#C8AC5E]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2 gap-2">
            <div class="div">
                <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5 0C5.16576 0 5.32473 0.0658481 5.44194 0.183058C5.55915 0.300269 5.625 0.45924 5.625 0.625V4.375H9.375C9.54076 4.375 9.69973 4.44085 9.81694 4.55806C9.93415 4.67527 10 4.83424 10 5C10 5.16576 9.93415 5.32473 9.81694 5.44194C9.69973 5.55915 9.54076 5.625 9.375 5.625H5.625V9.375C5.625 9.54076 5.55915 9.69973 5.44194 9.81694C5.32473 9.93415 5.16576 10 5 10C4.83424 10 4.67527 9.93415 4.55806 9.81694C4.44085 9.69973 4.375 9.54076 4.375 9.375V5.625H0.625C0.45924 5.625 0.300269 5.55915 0.183058 5.44194C0.0658481 5.32473 0 5.16576 0 5C0 4.83424 0.0658481 4.67527 0.183058 4.55806C0.300269 4.44085 0.45924 4.375 0.625 4.375H4.375V0.625C4.375 0.45924 4.44085 0.300269 4.55806 0.183058C4.67527 0.0658481 4.83424 0 5 0Z"
                        fill="#EBEBEB" />
                </svg>
            </div>
            <div class="text-[12px]">
                Tambah Data Dosen
            </div>
        </a>
        <div class="flex justify-between">
            <div class="text-[25px] font-bold">Tabel Data Dosen</div>
            <div class="div">
                <form class="flex items-center max-w-sm mx-auto">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <input type="text" id="simple-search"
                            class="bg-gray-50 border border-black text-black text-sm rounded-xl focus:ring-black focus:border-black block w-[196px] ps-5 p-2.5"
                            placeholder="Cari Dosen" required />
                    </div>
                </form>
            </div>
        </div>
        <div class="relative overflow-x-auto mt-2">
            <table class="w-full text-sm text-left rtl:text-right text-black">
                <thead class="text-xs text-black uppercase bg-[#1F5F92]">
                    <tr>
                        <th scope="col"
                            class="text-[12px] px-2 py-1 rounded-tl-lg text-center items-center justify-center m-auto">
                            No
                        </th>
                        <th scope="col" class="text-[12px] px-6 py-3">
                            NIP
                        </th>
                        <th scope="col" class="text-[12px] px-6 py-3">
                            NIDN
                        </th>
                        <th scope="col" class="text-[12px] px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="text-[12px] px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="text-[12px] px-6 py-3">
                            Kelompok Keahlian
                        </th>
                        <th scope="col" class="text-[12px] px-6 py-3 rounded-tr-lg">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="border border-1 border-black">
                    <?php
                    $contohData = [
                        [
                            'No' => 1,
                            'NIP' => '198602142019031008',
                            'NIDN' => '0014028604',
                            'Nama' => 'Andre Febrianto, S.Kom., M.Eng.',
                            'Email' => 'Andre Febrianto@if.itera.ac.id',
                            'Kelompok Keahlian' => 'Rekayasa Perangkat Lunak dan Sistem Informasi',
                        ],
                        [
                            'No' => 2,
                            'NIP' => '198602142019031009',
                            'NIDN' => '0014028605',
                            'Nama' => 'Budi Santoso, S.T., M.T.',
                            'Email' => 'BudiSantoso@if.itera.ac.id',
                            'Kelompok Keahlian' => 'Sistem Informasi',
                        ],
                    ];
                    ?>
                    <?php foreach ($contohData as $data): ?>
                    <tr class="bg-white border border-1 border-black">
                        <th scope="row" class="px-2 py-1 font-medium text-gray-900 text-center whitespace-nowrap">
                            <?php echo $data['No']; ?></th>
                        <td class="px-6 py-4"><?php echo $data['NIP']; ?></td>
                        <td class="px-6 py-4"><?php echo $data['NIDN']; ?></td>
                        <td class="px-6 py-4"><?php echo $data['Nama']; ?></td>
                        <td class="px-6 py-4"><?php echo $data['Email']; ?></td>
                        <td class="px-6 py-4"><?php echo $data['Kelompok Keahlian']; ?></td>
                        <td class="px-6 py-4 flex gap-2">
                            <div>
                                <a href="/DataDosen/View">
                                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.9018 15L12.3259 13.3523L10.4598 11.1932L9.03571 12.8409V13.6364H10.2143V15H10.9018ZM16.3036 4.77273C16.1726 4.62121 16.0376 4.62595 15.8984 4.78693L11.6016 9.75852C11.4624 9.91951 11.4583 10.0758 11.5893 10.2273C11.7202 10.3788 11.8553 10.3741 11.9944 10.2131L16.2913 5.24148C16.4304 5.08049 16.4345 4.92424 16.3036 4.77273ZM17.2857 13.2102V15.9091C17.2857 17.036 16.9399 17.9995 16.2483 18.7997C15.5567 19.5999 14.724 20 13.75 20H3.53571C2.56176 20 1.72898 19.5999 1.03739 18.7997C0.345796 17.9995 0 17.036 0 15.9091V4.09091C0 2.96402 0.345796 2.00047 1.03739 1.20028C1.72898 0.400095 2.56176 0 3.53571 0H13.75C14.2656 0 14.7444 0.118371 15.1864 0.355114C15.3092 0.421402 15.3828 0.530303 15.4074 0.681818C15.4319 0.842803 15.3951 0.980114 15.2969 1.09375L14.6953 1.78977C14.5807 1.92235 14.4498 1.96023 14.3025 1.90341C14.1142 1.84659 13.9301 1.81818 13.75 1.81818H3.53571C2.99554 1.81818 2.53311 2.04072 2.14844 2.4858C1.76376 2.93087 1.57143 3.46591 1.57143 4.09091V15.9091C1.57143 16.5341 1.76376 17.0691 2.14844 17.5142C2.53311 17.9593 2.99554 18.1818 3.53571 18.1818H13.75C14.2902 18.1818 14.7526 17.9593 15.1373 17.5142C15.5219 17.0691 15.7143 16.5341 15.7143 15.9091V14.1193C15.7143 13.9962 15.7511 13.892 15.8248 13.8068L16.6105 12.8977C16.7333 12.7557 16.8765 12.7225 17.0402 12.7983C17.2039 12.8741 17.2857 13.0114 17.2857 13.2102ZM16.1071 2.72727L19.6429 6.81818L11.3929 16.3636H7.85714V12.2727L16.1071 2.72727ZM21.558 4.60227L20.4286 5.90909L16.8929 1.81818L18.0223 0.511364C18.2515 0.246212 18.5298 0.113636 18.8571 0.113636C19.1845 0.113636 19.4628 0.246212 19.692 0.511364L21.558 2.67045C21.7872 2.93561 21.9018 3.25758 21.9018 3.63636C21.9018 4.01515 21.7872 4.33712 21.558 4.60227Z"
                                            fill="black" />
                                    </svg>
                                </a>
                            </div>
                            <div class="div">
                                <button data-modal-target="popup-modal1" data-modal-toggle="popup-modal1">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.5 7.5H8.75V15H7.5V7.5Z" fill="#872929" />
                                        <path d="M11.25 7.5H12.5V15H11.25V7.5Z" fill="#872929" />
                                        <path
                                            d="M2.5 3.75V5H3.75V17.5C3.75 17.8315 3.8817 18.1495 4.11612 18.3839C4.35054 18.6183 4.66848 18.75 5 18.75H15C15.3315 18.75 15.6495 18.6183 15.8839 18.3839C16.1183 18.1495 16.25 17.8315 16.25 17.5V5H17.5V3.75H2.5ZM5 17.5V5H15V17.5H5Z"
                                            fill="#872929" />
                                        <path d="M7.5 1.25H12.5V2.5H7.5V1.25Z" fill="#872929" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div id="popup-modal1" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <button type="button"
                    class="absolute top-3 end-2.5 text-[#872929] bg-transparent hover:bg-[#C8AC5E] hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="popup-modal1">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-10 text-center">
                    <h3 class="mb-5 mt-10 font-normal text-black font-bold text-[18px]">Apakah kamu yakin untuk
                        menghapus data ini?</h3>
                    <div class="p-4 md:p-5 text-center">
                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button"
                            class="text-white bg-[#C8AC5E] hover:bg-[#C8AC5E] focus:ring-4 focus:outline-none focus:ring-[#C8AC5E] font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Yes
                        </button>
                        <button data-modal-hide="popup-modal1" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-black focus:z-10 focus:ring-4 focus:ring-gray-100">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full backdrop-blur">
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
                    <div class="flex m-auto text-center items-center justify-center">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 8C20 5.87827 20.8429 3.84344 22.3431 2.34315C23.8434 0.842854 25.8783 0 28 0H52C54.1217 0 56.1566 0.842854 57.6569 2.34315C59.1571 3.84344 60 5.87827 60 8V16H76C77.0609 16 78.0783 16.4214 78.8284 17.1716C79.5786 17.9217 80 18.9391 80 20C80 21.0609 79.5786 22.0783 78.8284 22.8284C78.0783 23.5786 77.0609 24 76 24H71.724L68.256 72.568C68.1123 74.5863 67.2092 76.4753 65.7285 77.8543C64.2477 79.2333 62.2994 80 60.276 80H19.72C17.6966 80 15.7483 79.2333 14.2675 77.8543C12.7868 76.4753 11.8837 74.5863 11.74 72.568L8.28 24H4C2.93913 24 1.92172 23.5786 1.17157 22.8284C0.421427 22.0783 0 21.0609 0 20C0 18.9391 0.421427 17.9217 1.17157 17.1716C1.92172 16.4214 2.93913 16 4 16H20V8ZM28 16H52V8H28V16ZM16.296 24L19.724 72H60.28L63.708 24H16.296ZM32 32C33.0609 32 34.0783 32.4214 34.8284 33.1716C35.5786 33.9217 36 34.9391 36 36V60C36 61.0609 35.5786 62.0783 34.8284 62.8284C34.0783 63.5786 33.0609 64 32 64C30.9391 64 29.9217 63.5786 29.1716 62.8284C28.4214 62.0783 28 61.0609 28 60V36C28 34.9391 28.4214 33.9217 29.1716 33.1716C29.9217 32.4214 30.9391 32 32 32ZM48 32C49.0609 32 50.0783 32.4214 50.8284 33.1716C51.5786 33.9217 52 34.9391 52 36V60C52 61.0609 51.5786 62.0783 50.8284 62.8284C50.0783 63.5786 49.0609 64 48 64C46.9391 64 45.9217 63.5786 45.1716 62.8284C44.4214 62.0783 44 61.0609 44 60V36C44 34.9391 44.4214 33.9217 45.1716 33.1716C45.9217 32.4214 46.9391 32 48 32Z"
                                fill="#872929" />
                        </svg>
                    </div>
                    <h3 class="mb-5 mt-5 text-lg font-normal text-gray-500">Item ini telah dihapus</h3>
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
