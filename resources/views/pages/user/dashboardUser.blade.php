<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
        <div class="h-full pt-10 pb-10">
            <div class="bg-white rounded-lg shadow-lg mt-42 ml-10 mr-10 min-h-[605px]">
                <div class="p-10">
                    <div class="text-[40px] font-bold mb-10">Dashboard</div>
                    <div class="text-[20px] mb-10">Ketentuan Pelaksanaan Tugas Akhir</div>
                    <ol class="text-[18px] space-y-2 text-black list-decimal list-inside">
                        <li>
                            Pendaftaran Seminar Proposal dapat dilakukan dari tanggal 1 - 30 Bulan Berjalan
                        </li>
                        <li>
                            Penarikan Data dilakukan setiap tanggal 25 Bulan berjalan
                        </li>
                        <li>
                            Pengumuman Jadwal Seminar Proposal dan Akhir tanggal 26 - 30 Bulan Berjalan
                        </li>
                        <li>
                            Bagi mahasiswa yang mendaftar tanggal 25 - 30/31 Bulan berjalan akan dijadwalkan periode
                            berikutnya
                        </li>
                        <li>
                            Pelaksanaan Seminar Proposal dan Akhir dari tanggal 1 - 15 (2 Minggu Bulan Berjalan)
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
