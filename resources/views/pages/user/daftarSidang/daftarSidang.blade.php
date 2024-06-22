<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sidang</title>
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
    <div class="ml-[228px] mt-24">
        <div class="h-full pb-5 pt-5">
            <div class="mt-42 ml-10 mr-10 min-h-[605px] rounded-lg bg-white shadow-lg">
                <div class="p-5">
                    <div class="mb-10 text-[40px] font-bold">Daftar Sidang</div>
                    <div class="h-full rounded-lg bg-[#1F5F92] shadow-lg">
                        <div class="p-5">
                            <div class="mb-5 text-[35px] font-bold text-white">Pengajuan Daftar Sidang</div>
                            <div class="mb-2 text-[16px] font-bold text-white">Berikut ini form untuk mengajukan Seminar
                                Proposal dan Sidang Akhir</div>
                            <div class="mb-2 text-[16px] font-bold text-white">*Pastikan anda sudah memiliki File Draft
                                Tugas Akhir, PPT, dan File Persetujuan, lalu mengupload dalam
                                format PDF dan Masimal File 25 Mb.</div>
                            <div class="mt-20 flex items-center justify-center">
                                <div class="mb-2 text-[16px] font-bold text-white">Klik tombol berikut untuk melakukan
                                    pendaftaran</div>
                            </div>
                            <div class="flex items-center justify-center">
                                <a href="/DaftarSidang/FormSidang" class="focus:shadow-outline m-auto w-[150px] rounded bg-[#C8AC5E] px-4 py-2 text-center font-bold text-white hover:bg-[#B7A05E] focus:outline-none">
                                    {{ auth()->user()->seminar()->count() === 0 ? 'Seminar Proposal' : 'Seminar Akhir' }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
