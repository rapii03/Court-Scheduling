<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atur Jadwal</title>
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
        <div class="mb-5 text-[40px] font-bold">Profil {{ $user->name }}</div>
        <div class="h-full w-full rounded-lg bg-[#1F5F92]">
            <div class="p-10">
                <form action="" method="POST" class="w-full">
                    @csrf
                    <div class="text-[25px] text-white">
                        Mengatur Jadwal
                    </div>
                    <div class="relative mt-2 overflow-x-auto">
                        <table class="w-full text-left text-sm text-black rtl:text-right">
                            <thead class="bg-[#C8AC5E] text-center text-xs text-white">
                                <tr>
                                    @foreach ($days as $day)
                                        <th scope="col" @class([
                                            'px-6 py-3 text-[12px]',
                                            'rounded-tl-lg' => $loop->iteration === 1,
                                            'rounded-tr-lg' => $loop->iteration === count($days),
                                        ])>{{ $day }}</th>
                                    @endforeach
                                    {{-- <th scope="col" class="rounded-tl-lg px-6 py-3 text-[12px]">Senin</th>
                                    <th scope="col" class="px-6 py-3 text-[12px]">Rabu</th>
                                    <th scope="col" class="px-6 py-3 text-[12px]">Kamis</th>
                                    <th scope="col" class="rounded-tr-lg px-6 py-3 text-[12px]">Jum'at</th> --}}
                                </tr>
                            </thead>
                            <tbody class="border border-2 border-black">
                                <tr class="border border-2 border-black bg-white text-center">
                                    <td class="border-none" colspan="5">
                                        <div class="w-full">
                                            <div class="w-full text-center text-[15px] font-bold uppercase text-black">
                                                {{ \Carbon\Carbon::now()->getTranslatedMonthName() }}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @foreach ($timeLists as $time => $dayLists)
                                    <tr class="border border-2 border-black bg-white text-center">
                                        @foreach ($days as $day)
                                            @php
                                                $dataFind = $dayLists->firstWhere('day', $day);
                                            @endphp
                                            @if ($dataFind)
                                                @php
                                                    $check = $user
                                                        ->time()
                                                        ->where('time_id', $dataFind['id'])
                                                        ->exists();
                                                @endphp
                                                <td class="border border-black">
                                                    <div class="flex items-center justify-center">
                                                        <label class="{{ $check ? 'bg-[#C8AC5E] text-white' : '' }} w-full cursor-pointer px-6 py-2" for="{{ $dataFind['id'] }}" onclick='changeColor(this, "{{ $day }}", "{{ $dataFind['time'] }}")'>
                                                            {{ $dataFind['time'] }}
                                                        </label>
                                                        <input id="{{ $dataFind['id'] }}" type="checkbox" name="schedule[]" value="{{ $dataFind['id'] }}" class="hidden" @checked($check)>
                                                    </div>
                                                </td>
                                            @else
                                                <td></td>
                                            @endif
                                        @endforeach
                                    </tr>
                                @endforeach
                                {{-- <tr class="h-[21px] border border-2 border-black bg-white text-center">
                                    <td class="h-[21px] cursor-pointer border border-black px-6 py-2" onclick="changeColor(this, 'Senin', '08.00-09.00')">
                                        08.00-09.00
                                        <input type="checkbox" name="schedule[Senin][08.00-09.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] cursor-pointer border border-black px-6 py-2" onclick="changeColor(this, 'Selasa', '08.00-09.00')">
                                        08.00-09.00
                                        <input type="checkbox" name="schedule[Selasa][08.00-09.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] cursor-pointer border border-black px-6 py-2" onclick="changeColor(this, 'Rabu', '08.00-09.00')">
                                        08.00-09.00
                                        <input type="checkbox" name="schedule[Rabu][08.00-09.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] cursor-pointer border border-black px-6 py-2" onclick="changeColor(this, 'Kamis', '08.00-09.00')">
                                        08.00-09.00
                                        <input type="checkbox" name="schedule[Kamis][08.00-09.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] cursor-pointer border border-black px-6 py-2" onclick="changeColor(this, 'Jumat', '08.00-09.00')">
                                        08.00-09.00
                                        <input type="checkbox" name="schedule[Jumat][08.00-09.00]" class="hidden">
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-[25px] flex justify-end">
                        <div class="div">
                            <button type="submit" id="" class="mb-2 me-2 inline-flex items-center gap-2 rounded-lg bg-[#C8AC5E] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#C8AC5E]/90 focus:outline-none focus:ring-4 focus:ring-[#3b5998]/50">
                                <div class="text-[14px]">Simpan</div>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const selectedSchedules = [];

        function changeColor(element, day, time) {
            element.classList.toggle('bg-[#C8AC5E]');
            element.classList.toggle('text-white');

            const schedule = {
                day,
                time
            };
            const index = selectedSchedules.findIndex(s => s.day === day && s.time === time);

            if (index === -1) {
                selectedSchedules.push(schedule);
            } else {
                selectedSchedules.splice(index, 1);
            }
        }

        document.getElementById('saveButton').addEventListener('click', () => {
            console.log(selectedSchedules);

            fetch('/save-schedule', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(selectedSchedules)
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Success:', data);
                    alert('Jadwal berhasil disimpan!');
                })
                .catch((error) => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat menyimpan jadwal. Silakan coba lagi.');
                });
        });
    </script>
</body>

</html>
