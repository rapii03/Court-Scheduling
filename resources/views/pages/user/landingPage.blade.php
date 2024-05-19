<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
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


    <nav class="bg-white border-gray-200 fixed w-full z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="/logo_if.png" alt="">
            </a>
        </div>
    </nav>
    <aside class="bg-blue-500">
        <section class="bg-center bg-no-repeat bg-[#1F5F92] bg-blend-multiply">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-32">
                <div class="lg:flex p-5 lg:p-10">
                    <div class="lg:w-[45%] order-last lg:order-last">
                        <img src="/wisuda.png" alt=""
                            class="lg:w-96 lg:h-full w-60 m-auto">
                    </div>
                    <div class="lg:w-[55%]">
                        <h1
                            class="lg:text-left mb-4 text-2xl lg:text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                            Ketentuan Pelaksanaan Tugas Akhir
                        </h1>
                        <p
                            class="mb-8 text-sm lg:text-lg font-normal text-gray-300 lg:text-xl w-full text-justify lg:text-left">
                            <span>Selamat datang, ini adalah website pendaftaran Sidang Seminar Proposal dan Seminar
                                Akhir di
                                Teknik Informatika ITERA. <br>
                            </span>
                            <br>
                            <span class="pt-5">
                                Bagi peserta SIDANG, silahkan melakukan pendaftaran akun pada link dibawah ini. Jika
                                sudah
                                memiliki akun, silahkan klik tombol Masuk.
                            </span>
                        </p>
                        <div class="flex gap-5 lg:justify-start">
                            <a href="/Register"
                                class="w-[50%] lg:w-[20%] inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-[#C8AC5E] hover:bg-[#C8AC5E] focus:ring-4">
                                Daftar
                            </a>
                            <a href="/LoginUser"
                                class="w-[50%] lg:w-[20%] inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-[#C8AC5E] hover:bg-[#C8AC5E] focus:ring-4">
                                Masuk
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-5 lg:py-10">
                <div class="p-5 lg:p-10">
                    <h1
                        class="lg:text-center mb-4 text-2xl lg:text-4xl font-extrabold tracking-tight leading-none text-black md:text-xl lg:text-2xl">
                        Ketentuan Pelaksanaan Tugas Akhir
                    </h1>
                    <div class="lg:w-[80%] bg-[#1F5F92] rounded-lg shadow-lg h-full m-auto justify-center lg:mt-10">
                        <div class="lg:p-20 p-10">
                            <ol
                                class="lg:text-[18px] text-sm space-y-2 text-white text-justify list-decimal list-inside">
                                <li>Pendaftaran Seminar Proposal dapat dilakukan dari tanggal 1 - 30 Bulan Berjalan</li>
                                <li>Penarikan Data dilakukan setiap tanggal 25 Bulan berjalan</li>
                                <li>Pengumuman Jadwal Seminar Proposal dan Akhir tanggal 26 - 30 Bulan Berjalan</li>
                                <li>Bagi mahasiswa yang mendaftar tanggal 25 - 30/31 Bulan berjalan akan dijadwalkan
                                    periode berikutnya</li>
                                <li>Pelaksanaan Seminar Proposal dan Akhir dari tanggal 1 - 15 (2 Minggu Bulan Berjalan)
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white">
            <div class="px-4 mx-auto max-w-screen-xl py-5 lg:py-10">
                <div class="p-5 lg:p-10">
                    <div
                        class="lg:text-left mb-4 text-2xl lg:text-4xl font-extrabold tracking-tight leading-none text-black md:text-xl lg:text-2xl">
                        Jadwal Sidang</div>
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
        </section>
    </aside>

    <footer class="bg-[#EBEBEB]">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-5 lg:py-10">
            <div class="p-5 lg:p-10">
                <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                    <div class="md:flex justify-between">
                        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                            <div class="text-left">
                                <h1
                                    class="lg:text-left mb-4 text-xl lg:text-[40px] font-extrabold tracking-tight leading-none text-black">
                                    Contact Us
                                </h1>
                                <ul class="text-black font-medium">
                                    <li class="">
                                        <a href="https://flowbite.com/" class="hover:underline"><span
                                                class="font-extrabold tracking-tight">Email : </span>
                                            if@itera.ac.id</a>
                                    </li>
                                    <li>
                                        <a href="https://tailwindcss.com/" class="hover:underline"><span
                                                class="font-extrabold tracking-tight">Call :</span>
                                            08888823232</a>
                                    </li>
                                    <li>
                                        <a href="https://tailwindcss.com/" class="hover:underline"><span
                                                class="font-extrabold tracking-tight">Instagram :</span>
                                            informatika.itera</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex justify-end mt-10 lg:mt-0">
                            <div class="text-right flex m-auto justify-end items-center">
                                <img src="/logo_if.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
