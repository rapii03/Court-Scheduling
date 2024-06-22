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
        <div class="mb-2 text-[40px] font-bold">Jadwal Peserta Tugas Akhir</div>
        <form action="" class="flex justify-between">
            <div class="relative flex items-center justify-center">
                <input type="search" id="default-search" name="search" class="block h-[32px] w-full rounded-lg border border-[#C8AC5E] bg-gray-50 p-4 ps-10 text-sm text-gray-900 focus:border-[#C8AC5E] focus:ring-[#C8AC5E]" placeholder="Search here Name" />
                <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                    <svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
            </div>
            <div class="relative flex gap-2">
                {{-- <input name="" type="date" id="DateTime" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-[#C8AC5E] rounded-lg bg-gray-50 focus:ring-[#C8AC5E] focus:border-[#C8AC5E] h-[32px]" placeholder="Masukkan Tanggal" required /> --}}
                <div>
                    <div class="flex gap-x-2">
                        <div class="mb-4 flex flex-1 flex-col">
                            {{-- <label for="bulan">Bulan</label> --}}
                            <select name="month" id="bulan" class="h-9 w-full rounded-md border border-[#297785] px-2 text-sm text-gray-900 focus:border-[#297785] focus:ring-[#297785]" onchange="this.form.submit()">
                                @foreach (['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'] as $num => $item)
                                    <option value="{{ $num + 1 }}" @selected($num + 1 == $month)>{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex gap-x-2">
                        <div class="mb-4 flex flex-1 flex-col">
                            <select name="year" id="tahun" onchange="this.form.submit()" class="h-9 w-full rounded-md border border-[#297785] px-2 text-sm text-gray-900 focus:border-[#297785] focus:ring-[#297785]">
                                @foreach ($years as $item)
                                    <option value="{{ $item }}" @selected($item == $year)>{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="relative mt-4 overflow-x-auto">
            <table class="w-full text-left text-sm text-black rtl:text-right">
                <thead class="bg-[#1F5F92] text-white">
                    <tr>
                        <th scope="col" class="rounded-tl-lg px-6 py-3">
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
                        <th scope="col" class="rounded-tr-lg px-6 py-3">
                            Link Meet
                        </th>
                    </tr>
                </thead>
                <tbody class="border-1 border border-black">
                    @foreach ($data as $item)
                        <tr class="border-1 border border-black bg-white">
                            <td class="px-6 py-4">{{ $item->seminar->type === 'seminar-akhir' ? 'Seminar Akhir' : 'Seminar Proposal' }}</td>
                            <td class="px-6 py-4">{{ $item->seminar->user->name }}</td>
                            <td class="px-6 py-4">{{ $item->seminar->user->studentData->nim }}</td>
                            <td class="px-6 py-4">{{ $item->seminar->thesis_title }}</td>
                            @foreach ([$item->seminar->supervisor_1, $item->seminar->supervisor_2, $item->seminar->examiner_1, $item->seminar->examiner_2] as $lectureSeminar)
                                @php
                                    $lecture = $lectures->firstWhere('id', $lectureSeminar);
                                    if ($lecture) {
                                        $lecture = $lecture->name;
                                    } else {
                                        $lecture = $lectureSeminar;
                                    }
                                @endphp
                                <td class="px-6 py-4">{{ $lecture }}</td>
                            @endforeach
                            <td class="px-6 py-4">{{ $item->time->day }}</td>
                            <td class="px-6 py-4">{{ $item->date }}</td>
                            <td class="px-6 py-4">{{ $item->time->time }}</td>
                            <td class="px-6 py-4">
                                <a href="#">
                                    Link Meet
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
