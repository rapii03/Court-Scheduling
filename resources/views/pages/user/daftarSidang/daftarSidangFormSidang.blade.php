<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sidang | Form Sidang</title>
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
    <div class="lg:ml-[228px] mt-24">
        <div class="h-full pt-5 pb-5">
            <div class="bg-white rounded-lg shadow-lg ml-10 mr-10 min-h-[605px]">
                <div class="p-5">
                    <div class="text-[40px] font-bold mb-2">Form Daftar Sidang</div>
                    <div class="text-[18px] text-black mb-2">Form pendaftaran wajib diisi oleh mahasiswa
                        sebelum melaksanakan sidang proposal, hasil, sidang
                        akhir. Bagi mahasiswa yang tidak
                        mengisi form ini maka tidak akan di jadwalkan seminar dan atau link zoom seminar nya tidak akan
                        di
                        keluarkan.
                    </div>
                    <form class="bg-[#1F5F92] rounded-lg shadow-lg h-full p-5">
                        <div class="flex justify-between text-white gap-5">
                            <div class="w-1/2">
                                <div class="relative overflow-x-auto overflow-y-auto">
                                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 bg-transparent">
                                        <tbody>
                                            <tr class="text-white">
                                                <td class="px-1 py-2 text-[16px]">Email</td>
                                                <td class="px-1 py-2 flex gap-2">
                                                    <div class="text-white text-lg font-bold flex items-center">:
                                                    </div>
                                                    <input name="" type="text" id="phone-input"
                                                        aria-describedby="helper-text-explanation"
                                                        class="bg-white border border-white text-black text-sm focus:ring-black focus:border-black block w-full rounded-sm h-full ps-2 py-1"
                                                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Email"
                                                        required />
                                                </td>
                                            </tr>
                                            <tr class="text-white">
                                                <td class="px-1 py-2 text-[16px]">Nama</td>
                                                <td class="px-1 py-2 flex gap-2">
                                                    <div class="text-white text-lg font-bold flex items-center">:
                                                    </div>
                                                    <input name="" type="text" id="phone-input"
                                                        aria-describedby="helper-text-explanation"
                                                        class="bg-white border border-white text-black text-sm focus:ring-black focus:border-black block w-full rounded-sm h-full ps-2 py-1"
                                                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Nama"
                                                        required />
                                                </td>
                                            </tr>
                                            <tr class="text-white">
                                                <td class="px-1 py-2 text-[16px]">NIM</td>
                                                <td class="px-1 py-2 flex gap-2">
                                                    <div class="text-white text-lg font-bold flex items-center">:
                                                    </div>
                                                    <input name="" type="password" id="phone-input"
                                                        aria-describedby="helper-text-explanation"
                                                        class="bg-white border border-white text-black text-sm focus:ring-black focus:border-black block w-full rounded-sm h-full ps-2 py-1"
                                                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="NIM"
                                                        required />
                                                </td>
                                            </tr>
                                            <tr class="text-white">
                                                <td class="px-1 py-2 text-[16px]">Judul Topik TA</td>
                                                <td class="px-1 py-2 flex gap-2">
                                                    <div class="text-white text-lg font-bold flex items-center">:
                                                    </div>
                                                    <input name="" type="text" id="phone-input"
                                                        aria-describedby="helper-text-explanation"
                                                        class="bg-white border border-white text-black text-sm focus:ring-black focus:border-black block w-full rounded-sm h-full ps-2 py-1"
                                                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                        placeholder="Judul Topik TA" required />
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td class="px-1 py-2 text-[16px] text-white">Pembimbing Utama</td>
                                                <td class="px-1 py-2 flex gap-2">
                                                    <div class="text-white text-lg font-bold flex items-center">:</div>
                                                    <select name="" id="lecturer-select"
                                                        class="bg-white border border-white text-black text-sm focus:ring-black focus:border-black block w-full rounded-sm h-full ps-2 py-1"
                                                        required>
                                                        <option value="" disabled selected>Pilih Dosen</option>
                                                        <option value="dosen1">Nama Dosen 1</option>
                                                        <option value="dosen2">Nama Dosen 2</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr class="text-white">
                                                <td class="px-1 py-2 text-[16px]">Pembimbing Kedua</td>
                                                <td class="px-1 py-2 flex gap-2">
                                                    <div class="text-white text-lg font-bold flex items-center">:</div>
                                                    <select name="" id="lecturer-select"
                                                        class="bg-white border border-white text-black text-sm focus:ring-black focus:border-black block w-full rounded-sm h-full ps-2 py-1"
                                                        required>
                                                        <option value="" disabled selected>Pilih Dosen</option>
                                                        <option value="dosen1">Nama Dosen 1</option>
                                                        <option value="dosen2">Nama Dosen 2</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr class="text-white">
                                                <td class="px-1 py-2">
                                                    <p class="flex text-[16px] items-center text-sm">
                                                        Penguji Utama <button data-popover-target="popover-description"
                                                            data-popover-placement="bottom-end" type="button"><svg
                                                                class="w-4 h-4 ms-2 text-white" aria-hidden="true"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><span class="sr-only">Show information</span></button>
                                                    </p>
                                                    <div data-popover id="popover-description" role="tooltip"
                                                        class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                                                        <div class="p-3 space-y-2">
                                                            <h3 class="font-semibold text-black">
                                                                *Sidang Akhir</h3>
                                                        </div>
                                                        <div data-popper-arrow></div>
                                                    </div>
                                                </td>
                                                <td class="px-1 py-2 flex gap-2">
                                                    <div class="text-white text-lg font-bold flex items-center">:</div>
                                                    <select name="" id="lecturer-select"
                                                        class="bg-white border border-white text-black text-sm focus:ring-black focus:border-black block w-full rounded-sm h-full ps-2 py-1"
                                                        required>
                                                        <option value="" disabled selected>Pilih Dosen</option>
                                                        <option value="dosen1">Nama Dosen 1</option>
                                                        <option value="dosen2">Nama Dosen 2</option>
                                                        <span class="sr-only">Notifications</span>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr class="text-white">
                                                <td class="px-1 py-2">
                                                    <p class="flex text-[16px] items-center text-sm">
                                                        Penguji Kedua <button
                                                            data-popover-target="popover-description-2"
                                                            data-popover-placement="bottom-end" type="button"><svg
                                                                class="w-4 h-4 ms-2 text-white" aria-hidden="true"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><span class="sr-only">Show
                                                                information</span></button>
                                                    </p>
                                                    <div data-popover id="popover-description-2" role="tooltip"
                                                        class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                                                        <div class="p-3 space-y-2">
                                                            <h3 class="font-semibold text-black">
                                                                *Sidang Akhir</h3>
                                                        </div>
                                                        <div data-popper-arrow></div>
                                                    </div>
                                                </td>
                                                <td class="px-1 py-2 flex gap-2">
                                                    <div class="text-white text-lg font-bold flex items-center">:</div>
                                                    <select name="" id="lecturer-select"
                                                        class="bg-white border border-white text-black text-sm focus:ring-black focus:border-black block w-full rounded-sm h-full ps-2 py-1"
                                                        required>
                                                        <option value="" disabled selected>Pilih Dosen</option>
                                                        <option value="dosen1">Nama Dosen 1</option>
                                                        <option value="dosen2">Nama Dosen 2</option>
                                                        <span class="sr-only">Notifications</span>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr class="text-white">
                                                <td class="px-1 py-2 text-[16px]">Jumlah SKS Mata Kuliah</td>
                                                <td class="px-1 py-2 flex gap-2">
                                                    <div class="text-white text-lg font-bold flex items-center">:
                                                    </div>
                                                    <input name="" type="password" id="phone-input"
                                                        aria-describedby="helper-text-explanation"
                                                        class="bg-white border border-white text-black text-sm focus:ring-black focus:border-black block w-full rounded-sm h-full ps-2 py-1"
                                                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                        placeholder="Jumlah SKS Mata Kuliah" required />
                                                </td>
                                            </tr>
                                            <tr class="text-white">
                                                <td class="px-1 py-2 text-[16px]">Jenis Seminar</td>
                                                <td class="px-1 py-2 flex gap-2">
                                                    <div class="text-white text-lg font-bold flex items-center">:</div>
                                                    <div class="w-full">
                                                        <input name="" type="radio" id="proposal"
                                                            name="jenis_seminar" value="seminar_proposal" required
                                                            class="checked:bg-[#C8AC5E] hover:bg-[#C8AC5E] focus:bg-[#C8AC5E]">
                                                        <label for="proposal" class="text-[10px]">Seminar
                                                            Proposal</label>
                                                    </div>
                                                    <div class="w-full">
                                                        <input name="" type="radio" id="akhir"
                                                            name="jenis_seminar" value="seminar_akhir"
                                                            class="checked:bg-[#C8AC5E] hover:bg-[#C8AC5E] focus:bg-[#C8AC5E]">
                                                        <label for="akhir" class="text-[10px]">Sidang Akhir</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="text-white">
                                                <td class="px-1 py-2 text-[16px]">Bukti Mengikuti Seminar</td>
                                                <td class="px-1 py-2 flex gap-2">
                                                    <div class="text-white text-lg font-bold flex items-center">:</div>
                                                    <label for="file-input-seminar"
                                                        class="flex gap-1 items-center cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24">
                                                            <g stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2">
                                                                <path fill="none" stroke-dasharray="14"
                                                                    stroke-dashoffset="14" d="M6 19h12">
                                                                    <animate fill="freeze"
                                                                        attributeName="stroke-dashoffset"
                                                                        dur="0.4s" values="14;0" />
                                                                </path>
                                                                <path fill="currentColor"
                                                                    d="M12 4 h2 v6 h2.5 L12 14.5M12 4 h-2 v6 h-2.5 L12 14.5">
                                                                    <animate attributeName="d" calcMode="linear"
                                                                        dur="1.5s" keyTimes="0;0.7;1"
                                                                        repeatCount="indefinite"
                                                                        values="M12 4 h2 v6 h2.5 L12 14.5M12 4 h-2 v6 h-2.5 L12 14.5;M12 4 h2 v3 h2.5 L12 11.5M12 4 h-2 v3 h-2.5 L12 11.5;M12 4 h2 v6 h2.5 L12 14.5M12 4 h-2 v6 h-2.5 L12 14.5" />
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <span id="file-name-seminar" class="text-sm">Pilih
                                                            berkas</span>
                                                    </label>
                                                    <input name="" type="file" id="file-input-seminar"
                                                        accept=".pdf,.doc,.docx,.txt" class="hidden" required
                                                        onchange="buktiSeminar()" />
                                                    <script>
                                                        function buktiSeminar() {
                                                            const input = document.getElementById('file-input-seminar');
                                                            const fileName = document.getElementById('file-name-seminar');
                                                            fileName.textContent = input.files[0].name;
                                                        }
                                                    </script>
                                                </td>
                                            </tr>
                                            <tr class="text-white">
                                                <td class="px-1 py-2 text-[16px]">Draft PPT dan Word</td>
                                                <td class="px-1 py-2 flex gap-2">
                                                    <div class="text-white text-lg font-bold flex items-center">:</div>
                                                    <div class="flex justify-between">
                                                        <div class="div">
                                                            <label for="file-input-ppt"
                                                                class="flex gap-1 items-center cursor-pointer">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24">
                                                                    <g stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2">
                                                                        <path fill="none" stroke-dasharray="14"
                                                                            stroke-dashoffset="14" d="M6 19h12">
                                                                            <animate fill="freeze"
                                                                                attributeName="stroke-dashoffset"
                                                                                dur="0.4s" values="14;0" />
                                                                        </path>
                                                                        <path fill="currentColor"
                                                                            d="M12 4 h2 v6 h2.5 L12 14.5M12 4 h-2 v6 h-2.5 L12 14.5">
                                                                            <animate attributeName="d"
                                                                                calcMode="linear" dur="1.5s"
                                                                                keyTimes="0;0.7;1"
                                                                                repeatCount="indefinite"
                                                                                values="M12 4 h2 v6 h2.5 L12 14.5M12 4 h-2 v6 h-2.5 L12 14.5;M12 4 h2 v3 h2.5 L12 11.5M12 4 h-2 v3 h-2.5 L12 11.5;M12 4 h2 v6 h2.5 L12 14.5M12 4 h-2 v6 h-2.5 L12 14.5" />
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                                <span id="file-name-ppt" class="text-sm">Pilih
                                                                    berkas</span>
                                                            </label>
                                                            <input name="" type="file" id="file-input-ppt"
                                                                accept=".pdf,.doc,.docx,.txt" class="hidden" required
                                                                onchange="draftPPT()" />
                                                            <script>
                                                                function draftPPT() {
                                                                    const input = document.getElementById('file-input-ppt');
                                                                    const fileName = document.getElementById('file-name-ppt');
                                                                    fileName.textContent = input.files[0].name;
                                                                }
                                                            </script>
                                                        </div>
                                                        <div class="div">
                                                            <label for="file-input-Word"
                                                                class="flex gap-1 items-center cursor-pointer">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24">
                                                                    <g stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2">
                                                                        <path fill="none" stroke-dasharray="14"
                                                                            stroke-dashoffset="14" d="M6 19h12">
                                                                            <animate fill="freeze"
                                                                                attributeName="stroke-dashoffset"
                                                                                dur="0.4s" values="14;0" />
                                                                        </path>
                                                                        <path fill="currentColor"
                                                                            d="M12 4 h2 v6 h2.5 L12 14.5M12 4 h-2 v6 h-2.5 L12 14.5">
                                                                            <animate attributeName="d"
                                                                                calcMode="linear" dur="1.5s"
                                                                                keyTimes="0;0.7;1"
                                                                                repeatCount="indefinite"
                                                                                values="M12 4 h2 v6 h2.5 L12 14.5M12 4 h-2 v6 h-2.5 L12 14.5;M12 4 h2 v3 h2.5 L12 11.5M12 4 h-2 v3 h-2.5 L12 11.5;M12 4 h2 v6 h2.5 L12 14.5M12 4 h-2 v6 h-2.5 L12 14.5" />
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                                <span id="file-name-Word" class="text-sm">Pilih
                                                                    berkas</span>
                                                            </label>
                                                            <input name="" type="file" id="file-input-Word"
                                                                accept=".pdf,.doc,.docx,.txt" class="hidden" required
                                                                onchange="draftWORD()" />
                                                            <script>
                                                                function draftWORD() {
                                                                    const input = document.getElementById('file-input-Word');
                                                                    const fileName = document.getElementById('file-name-Word');
                                                                    fileName.textContent = input.files[0].name;
                                                                }
                                                            </script>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="text-white">
                                                <td class="px-1 py-2 text-[16px]">Surat Persetujuan</td>
                                                <td class="px-1 py-2 flex gap-2">
                                                    <div class="text-white text-lg font-bold flex items-center">:</div>
                                                    <label for="file-input-persetujuan"
                                                        class="flex gap-1 items-center cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24">
                                                            <g stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2">
                                                                <path fill="none" stroke-dasharray="14"
                                                                    stroke-dashoffset="14" d="M6 19h12">
                                                                    <animate fill="freeze"
                                                                        attributeName="stroke-dashoffset"
                                                                        dur="0.4s" values="14;0" />
                                                                </path>
                                                                <path fill="currentColor"
                                                                    d="M12 4 h2 v6 h2.5 L12 14.5M12 4 h-2 v6 h-2.5 L12 14.5">
                                                                    <animate attributeName="d" calcMode="linear"
                                                                        dur="1.5s" keyTimes="0;0.7;1"
                                                                        repeatCount="indefinite"
                                                                        values="M12 4 h2 v6 h2.5 L12 14.5M12 4 h-2 v6 h-2.5 L12 14.5;M12 4 h2 v3 h2.5 L12 11.5M12 4 h-2 v3 h-2.5 L12 11.5;M12 4 h2 v6 h2.5 L12 14.5M12 4 h-2 v6 h-2.5 L12 14.5" />
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <span id="file-name-persetujuan" class="text-sm">Pilih
                                                            berkas</span>
                                                    </label>
                                                    <input name="" type="file" id="file-input-persetujuan"
                                                        accept=".pdf,.doc,.docx,.txt" class="hidden" required
                                                        onchange="buktipersetujuan()" />
                                                    <script>
                                                        function buktipersetujuan() {
                                                            const input = document.getElementById('file-input-persetujuan');
                                                            const fileName = document.getElementById('file-name-persetujuan');
                                                            fileName.textContent = input.files[0].name;
                                                        }
                                                    </script>
                                                </td>
                                            </tr>
                                            <tr class="text-white">
                                                <td class="px-1 py-2 text-[16px]">Logsheet Bimbingan</td>
                                                <td class="px-1 py-2 flex gap-2">
                                                    <div class="text-white text-lg font-bold flex items-center">:</div>
                                                    <label for="file-input-bimbingan"
                                                        class="flex gap-1 items-center cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24">
                                                            <g stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2">
                                                                <path fill="none" stroke-dasharray="14"
                                                                    stroke-dashoffset="14" d="M6 19h12">
                                                                    <animate fill="freeze"
                                                                        attributeName="stroke-dashoffset"
                                                                        dur="0.4s" values="14;0" />
                                                                </path>
                                                                <path fill="currentColor"
                                                                    d="M12 4 h2 v6 h2.5 L12 14.5M12 4 h-2 v6 h-2.5 L12 14.5">
                                                                    <animate attributeName="d" calcMode="linear"
                                                                        dur="1.5s" keyTimes="0;0.7;1"
                                                                        repeatCount="indefinite"
                                                                        values="M12 4 h2 v6 h2.5 L12 14.5M12 4 h-2 v6 h-2.5 L12 14.5;M12 4 h2 v3 h2.5 L12 11.5M12 4 h-2 v3 h-2.5 L12 11.5;M12 4 h2 v6 h2.5 L12 14.5M12 4 h-2 v6 h-2.5 L12 14.5" />
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <span id="file-name-bimbingan" class="text-sm">Pilih
                                                            berkas</span>
                                                    </label>
                                                    <input name="" type="file" id="file-input-bimbingan"
                                                        accept=".pdf,.doc,.docx,.txt" class="hidden" required
                                                        onchange="buktibimbingan()" />
                                                    <script>
                                                        function buktibimbingan() {
                                                            const input = document.getElementById('file-input-bimbingan');
                                                            const fileName = document.getElementById('file-name-bimbingan');
                                                            fileName.textContent = input.files[0].name;
                                                        }
                                                    </script>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div class="relative overflow-x-auto overflow-y-auto">
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 bg-transparent">
                                        <tbody>
                                            <tr class="text-white">
                                                <td class="px-1 py-2">
                                                    <p class="flex text-[16px] items-center text-sm">
                                                        Surat Persetujuan Doswal<button
                                                            data-popover-target="popover-description-3"
                                                            data-popover-placement="bottom-end" type="button"><svg
                                                                class="w-4 h-4 ms-2 text-white" aria-hidden="true"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><span class="sr-only">Show
                                                                information</span></button>
                                                    </p>
                                                    <div data-popover id="popover-description-3" role="tooltip"
                                                        class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                                                        <div class="p-3 space-y-2">
                                                            <h3 class="font-semibold text-black">
                                                                *Sidang Akhir</h3>
                                                        </div>
                                                        <div data-popper-arrow></div>
                                                    </div>
                                                </td>
                                                <td class="px-1 py-2 flex gap-2">
                                                    <div class="text-white text-lg font-bold flex items-center">:</div>
                                                    <label for="file-input-doswal"
                                                        class="flex gap-1 items-center cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24">
                                                            <g stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2">
                                                                <path fill="none" stroke-dasharray="14"
                                                                    stroke-dashoffset="14" d="M6 19h12">
                                                                    <animate fill="freeze"
                                                                        attributeName="stroke-dashoffset"
                                                                        dur="0.4s" values="14;0" />
                                                                </path>
                                                                <path fill="currentColor"
                                                                    d="M12 4 h2 v6 h2.5 L12 14.5M12 4 h-2 v6 h-2.5 L12 14.5">
                                                                    <animate attributeName="d" calcMode="linear"
                                                                        dur="1.5s" keyTimes="0;0.7;1"
                                                                        repeatCount="indefinite"
                                                                        values="M12 4 h2 v6 h2.5 L12 14.5M12 4 h-2 v6 h-2.5 L12 14.5;M12 4 h2 v3 h2.5 L12 11.5M12 4 h-2 v3 h-2.5 L12 11.5;M12 4 h2 v6 h2.5 L12 14.5M12 4 h-2 v6 h-2.5 L12 14.5" />
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <span id="file-name-doswal" class="text-sm">Pilih
                                                            berkas</span>
                                                    </label>
                                                    <input name="" type="file" id="file-input-doswal"
                                                        accept=".pdf,.doc,.docx,.txt" class="hidden" required
                                                        onchange="buktidoswal()" />
                                                    <script>
                                                        function buktidoswal() {
                                                            const input = document.getElementById('file-input-doswal');
                                                            const fileName = document.getElementById('file-name-doswal');
                                                            fileName.textContent = input.files[0].name;
                                                        }
                                                    </script>
                                                </td>
                                            </tr>
                                            <tr class="text-white">
                                                <td class="px-1 py-2">
                                                    <p class="flex text-[16px] items-center text-sm">
                                                        Form Revisi Seminar <button
                                                            data-popover-target="popover-description-4"
                                                            data-popover-placement="bottom-end" type="button"><svg
                                                                class="w-4 h-4 ms-2 text-white" aria-hidden="true"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><span class="sr-only">Show
                                                                information</span></button>
                                                    </p>
                                                    <div data-popover id="popover-description-4" role="tooltip"
                                                        class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                                                        <div class="p-3 space-y-2">
                                                            <h3 class="font-semibold text-black">
                                                                *Sidang Akhir</h3>
                                                        </div>
                                                        <div data-popper-arrow></div>
                                                    </div>
                                                </td>
                                                <td class="px-1 py-2 flex gap-2">
                                                    <div class="text-white text-lg font-bold flex items-center">:</div>
                                                    <label for="file-input-revisi"
                                                        class="flex gap-1 items-center cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24">
                                                            <g stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2">
                                                                <path fill="none" stroke-dasharray="14"
                                                                    stroke-dashoffset="14" d="M6 19h12">
                                                                    <animate fill="freeze"
                                                                        attributeName="stroke-dashoffset"
                                                                        dur="0.4s" values="14;0" />
                                                                </path>
                                                                <path fill="currentColor"
                                                                    d="M12 4 h2 v6 h2.5 L12 14.5M12 4 h-2 v6 h-2.5 L12 14.5">
                                                                    <animate attributeName="d" calcMode="linear"
                                                                        dur="1.5s" keyTimes="0;0.7;1"
                                                                        repeatCount="indefinite"
                                                                        values="M12 4 h2 v6 h2.5 L12 14.5M12 4 h-2 v6 h-2.5 L12 14.5;M12 4 h2 v3 h2.5 L12 11.5M12 4 h-2 v3 h-2.5 L12 11.5;M12 4 h2 v6 h2.5 L12 14.5M12 4 h-2 v6 h-2.5 L12 14.5" />
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <span id="file-name-revisi" class="text-sm">Pilih
                                                            berkas</span>
                                                    </label>
                                                    <input name="" type="file" id="file-input-revisi"
                                                        accept=".pdf,.doc,.docx,.txt" class="hidden" required
                                                        onchange="buktirevisi()" />
                                                    <script>
                                                        function buktirevisi() {
                                                            const input = document.getElementById('file-input-revisi');
                                                            const fileName = document.getElementById('file-name-revisi');
                                                            fileName.textContent = input.files[0].name;
                                                        }
                                                    </script>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end">
                            <button data-modal-target="popup-modal1" data-modal-toggle="popup-modal1"
                                class="bg-[#C8AC5E] hover:bg-[#B7A05E] w-[150px] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="button">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-modal1" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <button type="button"
                    class="absolute top-3 end-2.5 text-[#872929] bg-transparent hover:bg-[#C8AC5E] hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="popup-modal1">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-10 text-center">
                    <h3 class="mb-5 mt-10 text-black font-bold text-[18px]">Apakah kamu yakin untuk
                        mengirim data ini?</h3>
                    <div class="p-4 md:p-5 text-center">
                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button"
                            class="text-white bg-[#C8AC5E] hover:bg-[#C8AC5E] focus:ring-4 focus:outline-none focus:ring-[#C8AC5E] font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Yes
                        </button>
                        <button data-modal-hide="popup-modal1" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-black focus:z-10 focus:ring-4 focus:ring-gray-100">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <button type="button"
                    class="absolute top-3 end-2.5 text-[#872929] bg-transparent hover:bg-[#C8AC5E] hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg width="80" height="65" viewBox="0 0 80 65" fill="none" class="m-auto flex"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M70.3177 9.68233C71.7136 11.0783 71.7136 13.2975 70.3177 14.6935L29.7271 55.2841C29.3995 55.6157 29.0093 55.879 28.5792 56.0587C28.1491 56.2384 27.6876 56.3309 27.2215 56.3309C26.7553 56.3309 26.2939 56.2384 25.8637 56.0587C25.4336 55.879 25.0435 55.6157 24.7159 55.2841L9.68233 40.2506C9.35073 39.923 9.08746 39.5328 8.90777 39.1027C8.72809 38.6726 8.63556 38.2111 8.63556 37.745C8.63556 37.2788 8.72809 36.8173 8.90777 36.3872C9.08746 35.9571 9.35073 35.567 9.68233 35.2394C10.0099 34.9078 10.4001 34.6445 10.8302 34.4648C11.2603 34.2851 11.7218 34.1926 12.1879 34.1926C12.654 34.1926 13.1155 34.2851 13.5456 34.4648C13.9758 34.6445 14.3659 34.9078 14.6935 35.2394L27.2215 47.7673L65.3065 9.68233C65.6341 9.35073 66.0242 9.08746 66.4543 8.90777C66.8845 8.72809 67.3459 8.63556 67.8121 8.63556C68.2782 8.63556 68.7397 8.72809 69.1698 8.90777C69.5999 9.08746 69.9901 9.35073 70.3177 9.68233ZM62.7651 2.09396L27.2215 37.6376L17.2349 27.651C14.443 24.8591 9.89709 24.8591 7.10514 27.651L2.09396 32.6622C-0.697987 35.4541 -0.697987 40 2.09396 42.7919L22.1387 62.8367C24.9306 65.6286 29.4765 65.6286 32.2685 62.8367L77.906 17.2349C80.698 14.443 80.698 9.89709 77.906 7.10514L72.8949 2.09396C70.0671 -0.697987 65.557 -0.697987 62.7651 2.09396Z"
                            fill="#26B34D" />
                    </svg>
                    <h3 class="mb-5 mt-10 text-black font-bold text-[18px]">Data berhasil disimpan
                    </h3>
                    <button data-modal-hide="popup-modal" type="button"
                        class="text-white bg-[#C8AC5E] hover:bg-[#C8AC5E] focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Confirm
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
