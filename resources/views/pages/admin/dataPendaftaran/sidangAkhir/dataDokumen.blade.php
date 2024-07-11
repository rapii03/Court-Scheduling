<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminar Akhir | Data Dokumen</title>
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
    <style>
        #preview {
            display: none;
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <x-layoutAdmin />
    <div class="ml-[228px] p-5">
        <div class="mb-2 text-[40px] font-bold">Data Dokumen Sidang Akhir</div>
        <div class="flex justify-between">
            <div class="mb-2">
                <div class="text-[20px]">Nama : {{ $seminar->user->name }}</div>
                <div class="text-[20px]">NIM : {{ $seminar->user->studentData->nim }}</div>
                <div class="text-[20px]">Jenis : Seminar Akhir</div>
            </div>
            <div class="mb-2 flex items-center justify-center">
                <button type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="mb-2 me-2 inline-flex items-center gap-2 rounded-lg bg-[#872929] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#610909]/90 focus:outline-none focus:ring-4 focus:ring-[#3b5998]/50">
                    <div class="text-[14px]">
                        Tolak Pendaftaran
                    </div>
                </button>
                <div id="popup-modal" tabindex="-1" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
                    <div class="relative max-h-full w-full max-w-md p-4">
                        <div class="relative rounded-lg bg-white shadow">
                            <button type="button" class="absolute end-2.5 top-3 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900" data-modal-hide="popup-modal">
                                <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <form action="/TolakSeminar" class="p-4 text-black md:p-5">
                                @csrf
                                <input type="hidden" name="id" value="{{ $seminar->id }}">
                                <svg class="mx-auto mb-4 h-12 w-12 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <label for="message" class="mb-2 block text-sm font-bold text-black">Catatan</label>
                                <textarea id="message" rows="4" name="message" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500" placeholder="Masukkan catatan penolakan..."></textarea>
                                <h3 class="mb-2 mt-2 text-center text-lg font-bold text-black">Tolak Pendaftaran?</h3>
                                <div class="m-auto flex items-center justify-center">
                                    <button type="submit" class="inline-flex items-center rounded-lg bg-[#C8AC5E] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#C8AC5E] focus:outline-none focus:ring-4 focus:ring-[#C8AC5E]">
                                        Yes
                                    </button>
                                    <button data-modal-hide="popup-modal" type="button" class="ms-3 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-600 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100">No</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative mt-4 overflow-x-auto">
            <table class="w-full text-left text-sm text-black rtl:text-right">
                <thead class="bg-[#1F5F92] text-white">
                    <tr>
                        <th scope="col" class="m-auto items-center justify-center rounded-tl-lg px-4 py-4 text-center text-[12px] font-bold">
                            Nama Dokumen
                        </th>
                        <th scope="col" class="m-auto items-center justify-center rounded-tr-lg px-4 py-4 text-center text-[12px] font-bold">
                            File
                        </th>
                    </tr>
                </thead>
                <tbody class="border-1 border border-black">
                    @foreach ([
        'seminar_attending_file' => 'Bukti Mengikuti Seminar',
        'lecture_approval_file' => 'Surat Persetujuan Dosen',
        'approval_file' => 'Surat Persetujuan',
        'guidance_file' => 'Logsheet Bimbingan',
        'revision_file' => 'Form Revisi Seminar',
        'docs_file' => 'File Word',
        'ppt_file' => 'File PPT',
    ] as $key => $fileName)
                        <tr class="border-1 border border-black bg-white">
                            <td class="m-auto items-center justify-center py-2 text-center text-[12px] font-bold">
                                {{ $fileName }}
                            </td>
                            <td class="file-cell m-auto items-center justify-center px-10 py-2 text-center text-[12px] font-bold">
                                @if ($seminar[$key] !== null)
                                    <a href="{{ url(asset('storage/' . $seminar[$key])) }}" download="">Download</a>
                                @else
                                    <p>Tidak Ada File</p>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-[25px] flex justify-between">
                <div class="div">
                    <a href="/DataPendaftaran/SidangAkhir" class="mb-2 me-2 inline-flex items-center gap-2 rounded-lg bg-[#C8AC5E] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#C8AC5E]/90 focus:outline-none focus:ring-4 focus:ring-[#3b5998]/50">
                        <div class="text-[14px]">Back</div>
                    </a>
                </div>
                <form action="/SidangAkhir/BuatJadwal?id={{ $seminar->id }}" method="POST" class="div">
                    @csrf
                    <button type="submit" class="mb-2 me-2 inline-flex items-center gap-2 rounded-lg bg-[#C8AC5E] px-5 py-2.5 text-center text-[14px] text-sm font-medium text-white hover:bg-[#C8AC5E]/90 focus:outline-none focus:ring-4 focus:ring-[#3b5998]/50">
                        Generate
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
