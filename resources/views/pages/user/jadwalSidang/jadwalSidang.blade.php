<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Sidang</title>
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
    <x-layoutUser />
    <div class="ml-[228px] mt-24">
        <div class="h-full pb-5 pt-5">
            <div class="mt-42 ml-10 mr-10 min-h-[605px] rounded-lg bg-white shadow-lg">
                <div class="p-5">
                    <div class="mb-5 text-[40px] font-bold">Jadwal Sidang</div>
                    <div class="mb-5 text-[20px] font-bold">Berikut Jadwal Sidang Yang Telah Ditentukan</div>
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
                                @forelse (auth()->user()->seminar as $seminar)
                                    <tr class="border-1 border border-black bg-white">
                                        <td class="px-3 py-3">{{ $seminar->type === 'seminar-akhir' ? 'Seminar Akhir' : 'Seminar Proposal' }}</td>
                                        <td class="px-3 py-3">{{ auth()->user()->name }}</td>
                                        <td class="px-3 py-3">{{ auth()->user()->studentData->nim }}</td>
                                        <td class="px-3 py-3">{{ $seminar->thesis_title }}</td>
                                        @foreach ([$seminar->supervisor_1, $seminar->supervisor_2, $seminar->examiner_1, $seminar->examiner_2] as $lectureSeminar)
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
                                        @php
                                            $schedule = $seminar->schedule;

                                            $day = '';
                                            $date = '';
                                            $time = '';
                                            if ($schedule) {
                                                $day = $schedule->time->day;
                                                $date = $schedule->date;
                                                $time = $schedule->time->time;
                                            }
                                        @endphp
                                        <td class="px-3 py-3">{{ ucfirst($day ?? '') }}</td>
                                        <td class="px-3 py-3">{{ $date }}</td>
                                        @if ($seminar->type === 'seminar-akhir' && $time !== '')
                                            <td class="px-3 py-3">{{ substr_replace($time, '3', 9, 1) }}</td>
                                        @else
                                            <td class="px-3 py-3">{{ $time }}</td>
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
        </div>
    </div>
</body>

</html>
