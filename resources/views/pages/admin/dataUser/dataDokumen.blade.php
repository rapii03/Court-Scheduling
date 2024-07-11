<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | Data Dokumen</title>
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
        <div class="mb-2 text-[40px] font-bold">Dokumen Data Mahasiswa</div>
        <div class="flex justify-between">
            <div class="mb-2">
                <div class="text-[20px]">Nama : {{ $student->name }}</div>
                <div class="text-[20px]">NIM : {{ $student->studentData->nim }}</div>
                <div class="text-[20px]">Status : {{ $student->seminar->count() <= 1 ? 'Seminar Proposal' : ($student->seminar->count() === 2 ? 'Seminar Akhir' : 'Lulus') }}</div>
            </div>
            {{-- <div class="mb-2 flex items-center justify-center">
                <button type="button" class="mb-2 me-2 inline-flex items-center gap-2 rounded-lg bg-[#872929] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#610909]/90 focus:outline-none focus:ring-4 focus:ring-[#3b5998]/50">
                    <div class="text-[14px]">
                        Tolak Pendaftaran
                    </div>
                </button>
            </div> --}}
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
                    @foreach ($student->seminar as $item)
                        <tr class="border-1 border border-black bg-white">
                            <td class="p-1.5 text-center font-bold uppercase" colspan="2">{{ $item['type'] === 'seminar-akhir' ? 'Seminar Akhir' : 'Seminar Proposal' }}</td>
                        </tr>
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
                                    <a href="{{ url(asset('storage/' . $item[$key])) }}" download="">Download</a>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
            <div class="mt-[25px] flex justify-between">
                <div class="div">
                    <a href="/DataUser" type="button" class="mb-2 me-2 inline-flex items-center gap-2 rounded-lg bg-[#C8AC5E] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#C8AC5E]/90 focus:outline-none focus:ring-4 focus:ring-[#3b5998]/50">
                        <div class="text-[14px]">
                            Back
                        </div>
                    </a>
                </div>
                {{-- <div class="div">
                    <button type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="mb-2 me-2 inline-flex items-center gap-2 rounded-lg bg-[#C8AC5E] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#C8AC5E]/90 focus:outline-none focus:ring-4 focus:ring-[#3b5998]/50">
                        <div class="text-[14px]">
                            Generate
                        </div>
                    </button>
                </div> --}}
            </div>
        </div>
    </div>
</body>

</html>
