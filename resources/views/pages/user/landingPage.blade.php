<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
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


    <nav class="fixed z-50 w-full border-gray-200 bg-white">
        <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
            <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="/logo_if.png" alt="">
            </a>
        </div>
    </nav>
    <aside class="bg-blue-500">
        <section class="bg-[#1F5F92] bg-center bg-no-repeat bg-blend-multiply">
            <div class="mx-auto max-w-screen-xl px-4 py-24 text-center lg:py-32">
                <div class="p-5 lg:flex lg:p-10">
                    <div class="order-last lg:order-last lg:w-[45%]">
                        <img src="/wisuda.png" alt="" class="m-auto w-60 lg:h-full lg:w-96">
                    </div>
                    <div class="lg:w-[55%]">
                        <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-left lg:text-4xl lg:text-6xl">
                            Ketentuan Pelaksanaan Tugas Akhir
                        </h1>
                        <p class="mb-8 w-full text-justify text-sm font-normal text-gray-300 lg:text-left lg:text-lg lg:text-xl">
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
                            <a href="/Register" class="inline-flex w-[50%] items-center justify-center rounded-lg bg-[#C8AC5E] px-5 py-3 text-center text-base font-medium text-white hover:bg-[#C8AC5E] focus:ring-4 lg:w-[20%]">
                                Daftar
                            </a>
                            <a href="/LoginUser" class="inline-flex w-[50%] items-center justify-center rounded-lg bg-[#C8AC5E] px-5 py-3 text-center text-base font-medium text-white hover:bg-[#C8AC5E] focus:ring-4 lg:w-[20%]">
                                Masuk
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white">
            <div class="mx-auto max-w-screen-xl px-4 py-5 text-center lg:py-10">
                <div class="p-5 lg:p-10">
                    <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-black md:text-xl lg:text-center lg:text-2xl lg:text-4xl">
                        Ketentuan Pelaksanaan Tugas Akhir
                    </h1>
                    <div class="m-auto h-full justify-center rounded-lg bg-[#1F5F92] shadow-lg lg:mt-10 lg:w-[80%]">
                        <div class="p-10 lg:p-20">
                            <ol class="list-inside list-decimal space-y-2 text-justify text-sm text-white lg:text-[18px]">
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
            <div class="mx-auto max-w-screen-xl px-4 py-5 lg:py-10">
                <div class="p-5 lg:p-10">
                    <div class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-black md:text-xl lg:text-left lg:text-2xl lg:text-4xl">
                        Jadwal Sidang</div>
                    <div class="mb-10 text-[20px] font-bold">Berikut Jadwal Sidang Yang Telah Ditentukan</div>
                    <div class="relative mt-4 overflow-x-auto">
                        <table class="w-full text-left text-sm text-black rtl:text-right">
                            <thead class="bg-[#1F5F92] text-white">
                                <tr>
                                    <th scope="col" class="rounded-tl-lg px-3 py-3">
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
                                    <th scope="col" class="rounded-tr-lg px-3 py-3">
                                        Link Meet
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="border-1 border border-black">
                                @forelse ($schedules as $item)
                                <tr class="border-1 border border-black bg-white">
                                    <td class="px-3 py-3">{{ $item->seminar->type === 'seminar-akhir' ? 'Seminar Akhir' : 'Seminar Proposal' }}</td>
                                    <td class="px-3 py-3">{{ $item->seminar->user->name }}</td>
                                    <td class="px-3 py-3">{{ $item->seminar->user->studentData->nim }}</td>
                                    <td class="px-3 py-3">{{ $item->seminar->thesis_title }}</td>
                                    @foreach ([$item->seminar->supervisor_1, $item->seminar->supervisor_2, $item->seminar->examiner_1, $item->seminar->examiner_2] as $lectureItem)
                                    @php
                                    $lecture = $lectures->firstWhere('id', $lectureItem);
                                    if ($lecture) {
                                    $lecture = $lecture->name;
                                    }
                                    @endphp
                                    <td class="px-3 py-3">{{ $lecture }}</td>
                                    @endforeach
                                    <td class="px-3 py-3">{{ $item->time->day }}</td>
                                    <td class="px-3 py-3">{{ $item->date }}</td>
                                    @if ($item->seminar->type === 'seminar-akhir')
                                    <td class="px-3 py-3">{{ substr_replace($item->time->time, '3', 9, 1) }}</td>
                                    @else
                                    <td class="px-3 py-3">{{ $item->time->time }}</td>
                                    @endif
                                    <td class="px-3 py-3">
                                        <a href="https://meet.google.com/ive-ceji-yya?authuser=0" class="underline underline-offset-4">
                                            https://meet.google.com/ive-ceji-yya?authuser=0
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr class="border-1 border border-black bg-white">
                                    <td colspan="12" class="pb-20 text-center">Data penjadwalan belum ditemukan</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </aside>

    <footer class="bg-[#EBEBEB]">
        <div class="mx-auto max-w-screen-xl px-4 py-5 text-center lg:py-10">
            <div class="p-5 lg:p-10">
                <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                    <div class="justify-between md:flex">
                        <div class="grid grid-cols-2 gap-8 sm:grid-cols-3 sm:gap-6">
                            <div class="text-left">
                                <h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-black lg:text-left lg:text-[40px]">
                                    Contact Us
                                </h1>
                                <ul class="font-medium text-black">

                                    <li class="">
                                        <a class="hover:font-bold"><span class="font-extrabold tracking-tight">Email : </span>
                                            informatika@itera.ac.id</a>
                                    </li>
                                    <li>
                                        <a href="http://if.itera.ac.id" class="hover:font-bold"><span class="font-extrabold tracking-tight">Website :</span>
                                            if.itera.ac.id</a>
                                    </li>
                                    <li>
                                        <a href="https://api.whatsapp.com/send/?phone=6283838485199&text&type=phone_number&app_absent=0" class="hover:font-bold"><span class="font-extrabold tracking-tight">Call :</span>
                                            6283838485199</a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/informatikaitera/" class="hover:font-bold"><span class="font-extrabold tracking-tight">Instagram :</span>
                                            @informatikaitera</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-10 flex justify-end lg:mt-0">
                            <div class="m-auto flex items-center justify-end text-right">
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