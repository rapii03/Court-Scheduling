<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal</title>
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
        <div class="text-[40px] font-bold mb-2">Jadwal Peserta Tugas Akhir</div>
        <div class="flex justify-between">
            <div class="relative flex justify-center items-center">
                <input type="search" id="default-search"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-[#C8AC5E] rounded-lg bg-gray-50 focus:ring-[#C8AC5E] focus:border-[#C8AC5E] h-[32px]"
                    placeholder="Search here Name" required />
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
            </div>
            <div class="relative flex gap-2">
                {{-- <input name="" type="date" id="DateTime" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-[#C8AC5E] rounded-lg bg-gray-50 focus:ring-[#C8AC5E] focus:border-[#C8AC5E] h-[32px]" placeholder="Masukkan Tanggal" required /> --}}
                <div>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            {{-- <label for="bulan">Bulan</label> --}}
                            <select name="bulan" id="bulan"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                required>
                                <option value="januari">Januari</option>
                                <option value="februari">Februari</option>
                                <option value="maret">Maret</option>
                                <option value="april">April</option>
                                <option value="mei">Mei</option>
                                <option value="juni">Juni</option>
                                <option value="juli">Juli</option>
                                <option value="agustus">Agustus</option>
                                <option value="september">September</option>
                                <option value="oktober">Oktober</option>
                                <option value="november">November</option>
                                <option value="desember">Desember</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            {{-- <label for="tahun">Tahun</label> --}}
                            <select name="tahun" id="tahun"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                required>
                            </select>
                        </div>
                    </div>
                    <script>
                        function populateTahunOptions() {
                            var select = document.getElementById("tahun");
                            var date = new Date();
                            var year = date.getFullYear();
                            var month = date.getMonth() + 1;
                            select.innerHTML = '';
                            if (month >= 1 && month <= 7) {
                                select.add(new Option((year - 1) + "/" + year, (year - 1) + "/" + year));
                                select.add(new Option(year + "/" + (year + 1), year + "/" + (year + 1)));
                            } else {
                                select.add(new Option(year + "/" + (year + 1), year + "/" + (year + 1)));
                                select.add(new Option((year + 1) + "/" + (year + 2), (year + 1) + "/" + (year + 2)));
                            }
                        }
                        window.onload = populateTahunOptions;
                    </script>
                </div>
            </div>
        </div>

        <div class="relative overflow-x-auto mt-4">
            <table class="w-full text-sm text-left rtl:text-right text-black">
                <thead class="text-white bg-[#1F5F92]">
                    <tr>
                        <th scope="col" class="px-6 py-3 rounded-tl-lg">
                            Jenis
                        </th>
                        <th scope="col" class="px-6 py-3">
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
                            'jenis' => 'Tugas Akhir',
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
                            'jenis' => 'Tugas Akhir',
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
                    <?php foreach ($contohData as $data): ?>
                    <tr class="bg-white border border-1 border-black">
                        <td class="px-6 py-4"><?php echo $data['jenis']; ?></td>
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
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
