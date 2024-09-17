<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal</title>
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
    <div class="ml-[228px] p-5">
        <div class="mb-2 text-[40px] font-bold">Jadwal Peserta Tugas Akhir</div>
        <form action="" class="flex justify-between">
            <div class="relative flex items-center justify-center">
                <input type="search" id="default-search" name="search"
                    class="block h-[32px] w-full rounded-lg border border-[#00000] bg-gray-50 p-4 ps-10 text-sm text-gray-900 focus:border-[#C8AC5E] focus:ring-[#C8AC5E]"
                    placeholder="Cari Berdasarkan Nama" />
                <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                    <svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
            </div>
            <div class="relative flex gap-2">
                {{-- <input name="" type="date" id="DateTime" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-[#C8AC5E] rounded-lg bg-gray-50 focus:ring-[#C8AC5E] focus:border-[#C8AC5E] h-[32px]" placeholder="Masukkan Tanggal" required /> --}}
                <div class="mb-4 w-[40%]">
                    <input name="tanggal" class="focus:shadow-outline w-full appearance-none rounded border leading-tight text-gray-700 shadow focus:outline-none" id="filterTanggal" type="date" value="{{ old('tanggal') }}" required>
                    @error('tanggal')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <div class="flex gap-x-2">
                        <div class="mb-4 flex flex-1 flex-col">
                            {{-- <label for="bulan">Bulan</label> --}}
                            <select name="month" id="bulan"
                                class="h-9 w-full rounded-md border border-[#297785] px-2 text-sm text-gray-900 focus:border-[#297785] focus:ring-[#297785]"
                                onchange="this.form.submit()">
                                @foreach (['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'] as $num => $item)
                                <option value="{{ $num + 1 }}" @selected($num + 1==$month)>{{ $item }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex gap-x-2">
                        <div class="mb-4 flex flex-1 flex-col">
                            <select name="year" id="tahun" onchange="this.form.submit()"
                                class="h-9 w-full rounded-md border border-[#297785] px-2 text-sm text-gray-900 focus:border-[#297785] focus:ring-[#297785]">
                                @foreach ($years as $item)
                                <option value="{{ $item }}" @selected($item==$year)>{{ $item }}
                                </option>
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
                        <th scope="col" class="px-6 py-3">
                            Link Meet
                        </th>
                        <th scope="col" class="rounded-tr-lg px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="border-1 border border-black">
                    @foreach ($data as $item)
                    <tr class="border-1 border border-black bg-white">
                        <td class="px-6 py-4">
                            {{ $item->seminar->type === 'seminar-akhir' ? 'Seminar Akhir' : 'Seminar Proposal' }}
                        </td>
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
                        <td class="px-6 py-4">{{ ucfirst($item->time->day ?? '') }}</td>
                        <td class="px-6 py-4">{{ $item->date }}</td>
                        @if ($item->seminar->type === 'seminar-akhir')
                        <td class="px-3 py-3">{{ substr_replace($item->time->time, '3', 9, 1) }}</td>
                        @else
                        <td class="px-3 py-3">{{ $item->time->time }}</td>
                        @endif
                        <td class="px-6 py-4">
                            <a href="https://meet.google.com/ive-ceji-yya?authuser=0">
                                Link Meet
                            </a>
                        </td>
                        <td class="flex gap-2 px-6 py-20">
                            <a href="/EditJadwal">
                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9018 15L12.3259 13.3523L10.4598 11.1932L9.03571 12.8409V13.6364H10.2143V15H10.9018ZM16.3036 4.77273C16.1726 4.62121 16.0376 4.62595 15.8984 4.78693L11.6016 9.75852C11.4624 9.91951 11.4583 10.0758 11.5893 10.2273C11.7202 10.3788 11.8553 10.3741 11.9944 10.2131L16.2913 5.24148C16.4304 5.08049 16.4345 4.92424 16.3036 4.77273ZM17.2857 13.2102V15.9091C17.2857 17.036 16.9399 17.9995 16.2483 18.7997C15.5567 19.5999 14.724 20 13.75 20H3.53571C2.56176 20 1.72898 19.5999 1.03739 18.7997C0.345796 17.9995 0 17.036 0 15.9091V4.09091C0 2.96402 0.345796 2.00047 1.03739 1.20028C1.72898 0.400095 2.56176 0 3.53571 0H13.75C14.2656 0 14.7444 0.118371 15.1864 0.355114C15.3092 0.421402 15.3828 0.530303 15.4074 0.681818C15.4319 0.842803 15.3951 0.980114 15.2969 1.09375L14.6953 1.78977C14.5807 1.92235 14.4498 1.96023 14.3025 1.90341C14.1142 1.84659 13.9301 1.81818 13.75 1.81818H3.53571C2.99554 1.81818 2.53311 2.04072 2.14844 2.4858C1.76376 2.93087 1.57143 3.46591 1.57143 4.09091V15.9091C1.57143 16.5341 1.76376 17.0691 2.14844 17.5142C2.53311 17.9593 2.99554 18.1818 3.53571 18.1818H13.75C14.2902 18.1818 14.7526 17.9593 15.1373 17.5142C15.5219 17.0691 15.7143 16.5341 15.7143 15.9091V14.1193C15.7143 13.9962 15.7511 13.892 15.8248 13.8068L16.6105 12.8977C16.7333 12.7557 16.8765 12.7225 17.0402 12.7983C17.2039 12.8741 17.2857 13.0114 17.2857 13.2102ZM16.1071 2.72727L19.6429 6.81818L11.3929 16.3636H7.85714V12.2727L16.1071 2.72727ZM21.558 4.60227L20.4286 5.90909L16.8929 1.81818L18.0223 0.511364C18.2515 0.246212 18.5298 0.113636 18.8571 0.113636C19.1845 0.113636 19.4628 0.246212 19.692 0.511364L21.558 2.67045C21.7872 2.93561 21.9018 3.25758 21.9018 3.63636C21.9018 4.01515 21.7872 4.33712 21.558 4.60227Z"
                                        fill="black" />
                                </svg>
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