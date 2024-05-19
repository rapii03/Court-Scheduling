<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Sidang</title>
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
                    <div class="text-[40px] font-bold mb-2">Jadwal Sidang</div>
                    <div class="text-[20px] font-bold mb-10">Berikut Jadwal Sidang Yang Telah Ditentukan</div>
                    <div class="relative overflow-x-auto mt-4">
                        <table class="w-full text-sm text-left rtl:text-right text-black">
                            <thead class="text-white bg-[#1F5F92]">
                                <tr>
                                    <th scope="col" class="px-3 py-3 rounded-tl-lg">
                                        Jenis
                                    </th>
                                    <th scope="col" class="px-3 py-3">
                                        Nama
                                    </th>
                                    <th scope="col" class="px-3 py-3">
                                        NIM
                                    </th>
                                    <th scope="col" class="px-3 py-3">
                                        Judul
                                    </th>
                                    <th scope="col" class="px-3 py-3">
                                        Dosen Pembimbing 1
                                    </th>
                                    <th scope="col" class="px-3 py-3">
                                        Dosen Pembimbing 2
                                    </th>
                                    <th scope="col" class="px-3 py-3">
                                        Dosen Penguji 1
                                    </th>
                                    <th scope="col" class="px-3 py-3">
                                        Dosen Penguji 2
                                    </th>
                                    <th scope="col" class="px-3 py-3">
                                        Hari
                                    </th>
                                    <th scope="col" class="px-3 py-3">
                                        Tanggal
                                    </th>
                                    <th scope="col" class="px-3 py-3">
                                        Jam
                                    </th>
                                    <th scope="col" class="px-3 py-3 rounded-tr-lg">
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
                                <?php if (empty($contohData)): ?>
                                <tr class="bg-white border border-1 border-black">
                                    <td colspan="12" class="text-center pb-20">Data penjadwalan belum ditemukan</td>
                                </tr>
                                <?php else: ?>
                                <?php foreach ($contohData as $data): ?>
                                <tr class="bg-white border border-1 border-black">
                                    <td class="px-3 py-3"><?php echo $data['jenis']; ?></td>
                                    <td class="px-3 py-3"><?php echo $data['nama']; ?></td>
                                    <td class="px-3 py-3"><?php echo $data['nim']; ?></td>
                                    <td class="px-3 py-3"><?php echo $data['judul']; ?></td>
                                    <td class="px-3 py-3"><?php echo $data['dosenPembimbing1']; ?></td>
                                    <td class="px-3 py-3"><?php echo $data['dosenPembimbing2']; ?></td>
                                    <td class="px-3 py-3"><?php echo $data['dosenPenguji1']; ?></td>
                                    <td class="px-3 py-3"><?php echo $data['dosenPenguji2']; ?></td>
                                    <td class="px-3 py-3"><?php echo $data['hari']; ?></td>
                                    <td class="px-3 py-3"><?php echo $data['tanggal']; ?></td>
                                    <td class="px-3 py-3"><?php echo $data['jam']; ?></td>
                                    <td class="px-3 py-3">
                                        <a href="<?php echo $data['linkMeet']; ?>" class="underline underline-offset-4">
                                            <?php echo $data['linkMeet']; ?>
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
