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
        <div class="h-full pt-5 pb-5">
            <div class="bg-white rounded-lg shadow-lg mt-42 ml-10 mr-10 min-h-[605px]">
                <div class="p-5">
                    <div class="text-[40px] font-bold mb-10">Daftar Sidang</div>
                    <div class="bg-[#1F5F92] rounded-lg shadow-lg h-full">
                        <div class="p-10">
                            <div class="text-[35px] text-white font-bold mb-5">Pengajuan Daftar Sidang</div>
                            <div class="text-[16px] text-white font-bold mb-2">Berikut ini form untuk mengajukan Seminar
                                Proposal dan Sidang Akhir</div>
                            <div class="text-[16px] text-white font-bold mb-2">*Pastikan anda sudah memiliki File Draft
                                Tugas Akhir, PPT, dan File Persetujuan, lalu mengupload dalam
                                format PDF dan Masimal File 25 Mb.</div>
                            <div class="flex items-center justify-center mt-16">
                                <div class="text-[16px] text-white font-bold mb-2">Klik tombol berikut untuk melakukan
                                    pendaftaran</div>
                            </div>
                            <div class="flex items-center justify-center">
                                <a href="/DaftarSidang/FormSidang"
                                    class="bg-[#C8AC5E] hover:bg-[#B7A05E] w-[150px] m-auto text-center text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    Simpan
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
