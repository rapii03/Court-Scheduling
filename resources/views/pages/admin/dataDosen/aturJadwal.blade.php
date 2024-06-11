<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atur Jadwal</title>
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
        <div class="text-[40px] font-bold mb-5">Profil Andre Febrianto</div>
        <div class="w-full h-full rounded-lg bg-[#1F5F92]">
            <div class="p-10">
                <div class="w-full">
                    <div class="text-[25px] text-white">
                        Mengatur Jadwal
                    </div>
                    <div class="relative overflow-x-auto mt-2">
                        <table class="w-full text-sm text-left rtl:text-right text-black">
                            <thead class="text-xs text-white bg-[#C8AC5E] text-center">
                                <tr>
                                    <th scope="col" class="text-[12px] px-6 py-3 rounded-tl-lg">Senin</th>
                                    <th scope="col" class="text-[12px] px-6 py-3">Selasa</th>
                                    <th scope="col" class="text-[12px] px-6 py-3">Rabu</th>
                                    <th scope="col" class="text-[12px] px-6 py-3">Kamis</th>
                                    <th scope="col" class="text-[12px] px-6 py-3 rounded-tr-lg">Jum'at</th>
                                </tr>
                            </thead>
                            <tbody class="border border-2 border-black">
                                <tr class="bg-white border border-2 border-black text-center">
                                    <td class="border-none" colspan="5">
                                        <div class="w-full">
                                            <div class="w-full text-black font-bold text-[15px] text-center uppercase">
                                                Januari
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="h-[21px] bg-white border border-2 border-black text-center">
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Senin', '08.00-09.00')">
                                        08.00-09.00
                                        <input type="checkbox" name="schedule[Senin][08.00-09.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Selasa', '08.00-09.00')">
                                        08.00-09.00
                                        <input type="checkbox" name="schedule[Selasa][08.00-09.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Rabu', '08.00-09.00')">
                                        08.00-09.00
                                        <input type="checkbox" name="schedule[Rabu][08.00-09.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Kamis', '08.00-09.00')">
                                        08.00-09.00
                                        <input type="checkbox" name="schedule[Kamis][08.00-09.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Jumat', '08.00-09.00')">
                                        08.00-09.00
                                        <input type="checkbox" name="schedule[Jumat][08.00-09.00]" class="hidden">
                                    </td>
                                </tr>
                                <tr class="h-[21px] bg-white border border-2 border-black text-center">
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Senin', '09.00-10.00')">
                                        09.00-10.00
                                        <input type="checkbox" name="schedule[Senin][09.00-10.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Selasa', '09.00-10.00')">
                                        09.00-10.00
                                        <input type="checkbox" name="schedule[Selasa][09.00-10.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Rabu', '09.00-10.00')">
                                        09.00-10.00
                                        <input type="checkbox" name="schedule[Rabu][09.00-10.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Kamis', '09.00-10.00')">
                                        09.00-10.00
                                        <input type="checkbox" name="schedule[Kamis][09.00-10.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Jumat', '09.00-10.00')">
                                        09.00-10.00
                                        <input type="checkbox" name="schedule[Jumat][09.00-10.00]" class="hidden">
                                    </td>
                                </tr>
                                <tr class="h-[21px] bg-white border border-2 border-black text-center">
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Senin', '10.00-11.00')">
                                        10.00-11.00
                                        <input type="checkbox" name="schedule[Senin][10.00-11.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Selasa', '10.00-11.00')">
                                        10.00-11.00
                                        <input type="checkbox" name="schedule[Selasa][10.00-11.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Rabu', '10.00-11.00')">
                                        10.00-11.00
                                        <input type="checkbox" name="schedule[Rabu][10.00-11.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Kamis', '10.00-11.00')">
                                        10.00-11.00
                                        <input type="checkbox" name="schedule[Kamis][10.00-11.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Jumat', '10.00-11.00')">
                                        10.00-11.00
                                        <input type="checkbox" name="schedule[Jumat][10.00-11.00]" class="hidden">
                                    </td>
                                </tr>
                                <tr class="h-[21px] bg-white border border-2 border-black text-center">
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Senin', '11.00-12.00')">
                                        11.00-12.00
                                        <input type="checkbox" name="schedule[Senin][11.00-12.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Selasa', '11.00-12.00')">
                                        11.00-12.00
                                        <input type="checkbox" name="schedule[Selasa][11.00-12.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Rabu', '11.00-12.00')">
                                        11.00-12.00
                                        <input type="checkbox" name="schedule[Rabu][11.00-12.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Kamis', '11.00-12.00')">
                                        11.00-12.00
                                        <input type="checkbox" name="schedule[Kamis][11.00-12.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Jumat', '11.00-12.00')">
                                        11.00-12.00
                                        <input type="checkbox" name="schedule[Jumat][11.00-12.00]" class="hidden">
                                    </td>
                                </tr>
                                {{-- Istirahat --}}
                                <tr class="bg-white border border-2 border-black">
                                    <td class="border-none" colspan="5">
                                        <div class="w-full text-black font-bold text-[15px] text-center">
                                            ISTIRAHAT
                                        </div>
                                    </td>
                                </tr>
                                <tr class="h-[21px] bg-white border border-2 border-black text-center">
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Senin', '13.00-14.00')">
                                        13.00-14.00
                                        <input type="checkbox" name="schedule[Senin][13.00-14.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Selasa', '13.00-14.00')">
                                        13.00-14.00
                                        <input type="checkbox" name="schedule[Selasa][13.00-14.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Rabu', '13.00-14.00')">
                                        13.00-14.00
                                        <input type="checkbox" name="schedule[Rabu][13.00-14.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Kamis', '13.00-14.00')">
                                        13.00-14.00
                                        <input type="checkbox" name="schedule[Kamis][13.00-14.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Jumat', '13.00-14.00')">
                                        13.00-14.00
                                        <input type="checkbox" name="schedule[Jumat][13.00-14.00]" class="hidden">
                                    </td>
                                </tr>
                                <tr class="h-[21px] bg-white border border-2 border-black text-center">
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Senin', '14.00-15.00')">
                                        14.00-15.00
                                        <input type="checkbox" name="schedule[Senin][14.00-15.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Selasa', '14.00-15.00')">
                                        14.00-15.00
                                        <input type="checkbox" name="schedule[Selasa][14.00-15.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Rabu', '14.00-15.00')">
                                        14.00-15.00
                                        <input type="checkbox" name="schedule[Rabu][14.00-15.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Kamis', '14.00-15.00')">
                                        14.00-15.00
                                        <input type="checkbox" name="schedule[Kamis][14.00-15.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Jumat', '14.00-15.00')">
                                        14.00-15.00
                                        <input type="checkbox" name="schedule[Jumat][14.00-15.00]" class="hidden">
                                    </td>
                                </tr>
                                <tr class="h-[21px] bg-white border border-2 border-black text-center">
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Senin', '15.00-16.00')">
                                        15.00-16.00
                                        <input type="checkbox" name="schedule[Senin][15.00-16.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Selasa', '15.00-16.00')">
                                        15.00-16.00
                                        <input type="checkbox" name="schedule[Selasa][15.00-16.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Rabu', '15.00-16.00')">
                                        15.00-16.00
                                        <input type="checkbox" name="schedule[Rabu][15.00-16.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Kamis', '15.00-16.00')">
                                        15.00-16.00
                                        <input type="checkbox" name="schedule[Kamis][15.00-16.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Jumat', '15.00-16.00')">
                                        15.00-16.00
                                        <input type="checkbox" name="schedule[Jumat][15.00-16.00]" class="hidden">
                                    </td>
                                </tr>
                                <tr class="h-[21px] bg-white border border-2 border-black text-center">
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Senin', '16.00-17.00')">
                                        16.00-17.00
                                        <input type="checkbox" name="schedule[Senin][16.00-17.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Selasa', '16.00-17.00')">
                                        16.00-17.00
                                        <input type="checkbox" name="schedule[Selasa][16.00-17.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Rabu', '16.00-17.00')">
                                        16.00-17.00
                                        <input type="checkbox" name="schedule[Rabu][16.00-17.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Kamis', '16.00-17.00')">
                                        16.00-17.00
                                        <input type="checkbox" name="schedule[Kamis][16.00-17.00]" class="hidden">
                                    </td>
                                    <td class="h-[21px] px-6 py-2 border border-black cursor-pointer"
                                        onclick="changeColor(this, 'Jumat', '16.00-17.00')">
                                        16.00-17.00
                                        <input type="checkbox" name="schedule[Jumat][16.00-17.00]" class="hidden">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-[25px] flex justify-end">
                        <div class="div">
                            <button type="button" id="saveButton"
                                class="text-white bg-[#C8AC5E] hover:bg-[#C8AC5E]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2 gap-2">
                                <div class="text-[14px]">Simpan</div>
                            </button>
                        </div>
                    </div>
                </div>
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
