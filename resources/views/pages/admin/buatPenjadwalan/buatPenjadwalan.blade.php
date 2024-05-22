<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Penjadwalan</title>
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
        <div class="text-[40px] font-bold mb-5">Buat Penjadwalan</div>
        <div class="gap-5 flex">
            <div class="w-[50%]">
                <div class="w-full full rounded-lg bg-[#1F5F92] relative">
                    <div class="p-5 text-white text-[20px] font-bold">Data Penjadwal</div>
                    <hr class="bottom-0 left-0 w-full border-white">
                    <div class="relative overflow-x-auto overflow-y-auto p-2.5">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 bg-transparent">
                            <tbody>
                                <tr class="text-white">
                                    <td class="px-3 py-2 text-[16px]">
                                        Nama
                                    </td>
                                    <td class="px-5 py-2 flex gap-2">
                                        <div class="text-white text-lg font-bold flex items-center">: </div>
                                        <div class="flex items-center">
                                            <form class="w-full">
                                                <div class="relative">
                                                    <input type="text" id="phone-input"
                                                        aria-describedby="helper-text-explanation"
                                                        class="bg-[#113450] border border-black text-white text-sm focus:ring-black focus:border-black block w-[300px] rounded-md h-[21px] ps-2 p-2.5"
                                                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                        placeholder="Andre Febrianto@if.itera.ac.id" required />
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-white">
                                    <td class="px-3 py-2 text-[16px]">
                                        NIM
                                    </td>
                                    <td class="px-5 py-2 flex gap-2">
                                        <div class="text-white text-lg font-bold flex items-center">: </div>
                                        <div class="flex items-center">
                                            <form class="w-full">
                                                <div class="relative">
                                                    <input type="text" id="phone-input"
                                                        aria-describedby="helper-text-explanation"
                                                        class="bg-[#113450] border border-black text-white text-sm focus:ring-black focus:border-black block w-[300px] rounded-md h-[21px] ps-2 p-2.5"
                                                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                        placeholder="Andre Febrianto@if.itera.ac.id" required />
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-white">
                                    <td class="px-3 py-2 text-[16px]">
                                        Pem 1
                                    </td>
                                    <td class="px-5 py-2 flex gap-2">
                                        <div class="text-white text-lg font-bold flex items-center">: </div>
                                        <div class="flex items-center">
                                            <form class="w-full">
                                                <div class="relative">
                                                    <input type="text" id="phone-input"
                                                        aria-describedby="helper-text-explanation"
                                                        class="bg-[#113450] border border-black text-white text-sm focus:ring-black focus:border-black block w-[300px] rounded-md h-[21px] ps-2 p-2.5"
                                                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                        placeholder="Andre Febrianto@if.itera.ac.id" required />
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-white">
                                    <td class="px-3 py-2 text-[16px]">
                                        Pem 2
                                    </td>
                                    <td class="px-5 py-2 flex gap-2">
                                        <div class="text-white text-lg font-bold flex items-center">: </div>
                                        <div class="flex items-center">
                                            <form class="w-full">
                                                <div class="relative">
                                                    <input type="text" id="phone-input"
                                                        aria-describedby="helper-text-explanation"
                                                        class="bg-[#113450] border border-black text-white text-sm focus:ring-black focus:border-black block w-[300px] rounded-md h-[21px] ps-2 p-2.5"
                                                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                        placeholder="Andre Febrianto@if.itera.ac.id" required />
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="p-5">
                        <button href="/DataDosen/Tambah" type="button"
                            class="text-white bg-[#C8AC5E] hover:bg-[#C8AC5E]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2 gap-2">
                            <div class="div">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.6663 9.16658C16.4625 7.7001 15.7822 6.3413 14.7302 5.2995C13.6782 4.25769 12.3128 3.59068 10.8444 3.40121C9.376 3.21174 7.88603 3.51032 6.60401 4.25096C5.32199 4.99159 4.31905 6.1332 3.74967 7.49992M3.33301 4.16658V7.49992H6.66634M3.33301 10.8333C3.53681 12.2997 4.21712 13.6585 5.26914 14.7003C6.32117 15.7421 7.68654 16.4092 9.15495 16.5986C10.6234 16.7881 12.1133 16.4895 13.3953 15.7489C14.6774 15.0082 15.6803 13.8666 16.2497 12.4999M16.6663 15.8333V12.4999H13.333"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="text-[12px]">
                                Generate
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-[50%]">
                <div class="w-full full rounded-lg bg-[#1F5F92] relative">
                    <div class="p-5 text-white text-[20px] font-bold">Hasil Jadwal</div>
                    <hr class="bottom-0 left-0 w-full border-white">
                    <div class="relative overflow-x-auto overflow-y-auto p-2.5">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 bg-transparent">
                            <tbody>
                                <tr class="text-white">
                                    <td class="px-3 py-2 text-[16px]">
                                        Peng 1
                                    </td>
                                    <td class="px-5 py-2 flex gap-2">
                                        <div class="text-white text-lg font-bold flex items-center">: </div>
                                        <div class="flex items-center">
                                            <form class="w-full">
                                                <div class="relative">
                                                    <input type="text" id="phone-input"
                                                        aria-describedby="helper-text-explanation"
                                                        class="bg-[#113450] border border-black text-white text-sm focus:ring-black focus:border-black block w-[300px] rounded-md h-[21px] ps-2 p-2.5"
                                                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                        placeholder="Andre Febrianto@if.itera.ac.id" required />
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-white">
                                    <td class="px-3 py-2 text-[16px]">
                                        Peng 2
                                    </td>
                                    <td class="px-5 py-2 flex gap-2">
                                        <div class="text-white text-lg font-bold flex items-center">: </div>
                                        <div class="flex items-center">
                                            <form class="w-full">
                                                <div class="relative">
                                                    <input type="text" id="phone-input"
                                                        aria-describedby="helper-text-explanation"
                                                        class="bg-[#113450] border border-black text-white text-sm focus:ring-black focus:border-black block w-[300px] rounded-md h-[21px] ps-2 p-2.5"
                                                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                        placeholder="Andre Febrianto@if.itera.ac.id" required />
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-white">
                                    <td class="px-3 py-2 text-[16px]">
                                        Waktu
                                    </td>
                                    <td class="px-5 py-2 flex gap-2">
                                        <div class="text-white text-lg font-bold flex items-center">: </div>
                                        <div class="flex items-center">
                                            <form class="w-full">
                                                <div class="relative">
                                                    <input type="text" id="phone-input"
                                                        aria-describedby="helper-text-explanation"
                                                        class="bg-[#113450] border border-black text-white text-sm focus:ring-black focus:border-black block w-[300px] rounded-md h-[21px] ps-2 p-2.5"
                                                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                        placeholder="Andre Febrianto@if.itera.ac.id" required />
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-white">
                                    <td class="px-3 py-2 text-[16px]">
                                        Link Meet
                                    </td>
                                    <td class="px-5 py-2 flex gap-2">
                                        <div class="text-white text-lg font-bold flex items-center">: </div>
                                        <div class="flex items-center">
                                            <form class="w-full">
                                                <div class="relative">
                                                    <input type="text" id="phone-input"
                                                        aria-describedby="helper-text-explanation"
                                                        class="bg-[#113450] border border-black text-white text-sm focus:ring-black focus:border-black block w-[300px] rounded-md h-[21px] ps-2 p-2.5"
                                                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                        placeholder="Andre Febrianto@if.itera.ac.id" required />
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="p-5">
                        <button href="/DataDosen/Tambah" type="button"
                            class="text-white bg-[#C8AC5E] hover:bg-[#C8AC5E]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2 gap-2">
                            <div class="text-[12px]">
                                Simpan Jadwal
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full mt-5">
            <div class="w-full full rounded-lg bg-[#1F5F92] relative">
                <div class="p-5">
                    <div class="flex justify-between">
                        <div class="text-[20px] text-white font-bold">Tabel Pembuatan Jadwal</div>
                        <div class="div">
                            <form class="flex items-center max-w-sm mx-auto">
                                <div class="relative w-full">
                                    <input type="text" id="simple-search"
                                        class="bg-gray-50 border border-black text-black text-sm rounded-xl focus:ring-black focus:border-black block w-full ps-5 p-2.5 h-[24px]"
                                        placeholder="Cari Nama" required />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="relative overflow-x-auto mt-4">
                        <table class="w-full text-sm text-left rtl:text-right text-black">
                            <thead class="text-black bg-white">
                                <tr>
                                    <th scope="col" class="px-6 py-3 rounded-tl-lg">
                                        Nama
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        NIM
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Judul
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Dosen Pembimbing 1
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Dosen Pembimbing 2
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Dosen Penguji 1
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Dosen Penguji 2
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Hari
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tanggal
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jam
                                    </th>
                                    <th scope="col" class="px-6 py-3 rounded-tr-lg">
                                        Link Meet
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="border border-1 border-black">
                                <?php
                                $contohData = [
                                    [
                                        'id' => 1,
                                        'nama' => 'Rafi Ramadhan Pratama',
                                        'nim' => '120140079',
                                        'judul' => 'Rancang Bangun Sistem Informasi Manajemen Pengendalian Menara Telekomunikasi (Studi Kasus : Diskominfo Lampung Utara)',
                                        'dosenPembimbing1' => 'Andika Setiawan, S.Kom., M.Cs.',
                                        'dosenPembimbing2' => 'Meida Cahyo Untoro, S.Kom., M.Kom.',
                                        'dosenPenguji1' => 'Aidil Afriansyah, S.Kom., M.Kom.',
                                        'dosenPenguji2' => 'Radhinka Bagaskara, S.Si.Kom., M.Si., M.Sc.',
                                        'hari' => 'Senin',
                                        'tanggal' => '17 April 2024',
                                        'jam' => '08:00 - 10:00',
                                        'linkMeet' => 'https://meet.google.com/ive-ceji-yya?authuser=0',
                                    ],
                                    [
                                        'id' => 2,
                                        'nama' => 'Rafi Ramadhan Pratama',
                                        'nim' => '120140079',
                                        'judul' => 'Rancang Bangun Sistem Informasi Manajemen Pengendalian Menara Telekomunikasi (Studi Kasus : Diskominfo Lampung Utara)',
                                        'dosenPembimbing1' => 'Andika Setiawan, S.Kom., M.Cs.',
                                        'dosenPembimbing2' => 'Meida Cahyo Untoro, S.Kom., M.Kom.',
                                        'dosenPenguji1' => 'Aidil Afriansyah, S.Kom., M.Kom.',
                                        'dosenPenguji2' => 'Radhinka Bagaskara, S.Si.Kom., M.Si., M.Sc.',
                                        'hari' => 'Senin',
                                        'tanggal' => '17 April 2024',
                                        'jam' => '08:00 - 10:00',
                                        'linkMeet' => 'https://meet.google.com/ive-ceji-yya?authuser=0',
                                    ],
                                ];
                                ?>
                                <?php if (empty($contohData)): ?>
                                <tr class="bg-[#EBEBEB] border border-1 border-black">
                                    <td colspan="11" class="px-6 py-4 text-center">Data penjadwalan belum ditemukan
                                    </td>
                                </tr>
                                <?php else: ?>
                                <?php foreach ($contohData as $data): ?>
                                <tr class="bg-[#EBEBEB] border border-1 border-black">
                                    <td class="px-6 py-4"><?php echo $data['nama']; ?></td>
                                    <td class="px-6 py-4"><?php echo $data['nim']; ?></td>
                                    <td class="px-6 py-4"><?php echo $data['judul']; ?></td>
                                    <td class="px-6 py-4"><?php echo $data['dosenPembimbing1']; ?></td>
                                    <td class="px-6 py-4"><?php echo $data['dosenPembimbing2']; ?></td>
                                    <td class="px-6 py-4"><?php echo $data['dosenPenguji1']; ?></td>
                                    <td class="px-6 py-4"><?php echo $data['dosenPenguji2']; ?></td>
                                    <td class="px-6 py-4"><?php echo $data['hari']; ?></td>
                                    <td class="px-6 py-4"><?php echo $data['tanggal']; ?></td>
                                    <td class="px-6 py-4"><?php echo $data['jam']; ?></td>
                                    <td class="px-6 py-4">
                                        <a href="<?php echo $data['linkMeet']; ?>">
                                            Link Meet
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
