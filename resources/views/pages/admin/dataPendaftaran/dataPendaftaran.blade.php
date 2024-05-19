<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran</title>
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
    <div class="ml-[228px] p-16">
        <div class="text-[40px] font-bold mb-16">Data Pendaftaran Tugas Akhir</div>
        <div class="flex gap-10">
            <a href="/DataPendaftaran/SeminarProposal">
                <div class="w-[260px] h-[220px] bg-[#1F5F92] hover:bg-[#C8AC5E] rounded-md text-white p-5">
                    <div class="font-bold text-[30px]">087</div>
                    <div class="text-[30px]">Seminar Proposal</div>
                </div>
            </a>
            <a href="/DataPendaftaran/SidangAkhir">
                <div class="w-[260px] h-[220px] bg-[#1F5F92] hover:bg-[#C8AC5E] rounded-md text-white p-5">
                    <div class="font-bold text-[30px]">017</div>
                    <div class="text-[30px]">Sidang Akhir</div>
                </div>
            </a>
        </div>
    </div>
</body>

</html>
