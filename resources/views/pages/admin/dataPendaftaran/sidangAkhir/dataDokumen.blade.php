<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminar Akhir | Data Dokumen</title>
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
        <div class="text-[40px] font-bold mb-2">Data Dokumen Sidang Akhir</div>
        <div class="mb-2">
            <div class="text-[20px]">Nama : Rafi Ramadhan Pratama</div>
            <div class="text-[20px]">Nama : 120140079</div>
            <div class="text-[20px]">Nama : Sidang Akhir</div>
        </div>
        <div class="relative overflow-x-auto mt-4">
            <table class="w-full text-sm text-left rtl:text-right text-black">
                <thead class="text-white bg-[#1F5F92]">
                    <tr>
                        <th scope="col"
                            class="text-[12px] px-4 py-4 rounded-tl-lg text-center items-center justify-center m-auto font-bold">
                            Nama Dokumen
                        </th>
                        <th scope="col"
                            class="text-[12px] rounded-tr-lg px-4 py-4 text-center items-center justify-center m-auto font-bold">
                            File
                        </th>
                    </tr>
                </thead>
                <tbody class="border border-1 border-black">
                    <?php
                    $contohData = [
                        [
                            'id' => 1,
                            'nama' => 'Bukti Mengikuti Sidang Akhir 1',
                            'file' => 'bukti1.pdf',
                            'url' => 'https://media.neliti.com/media/publications/249244-none-837c3dfb.pdf',
                        ],
                        [
                            'id' => 2,
                            'nama' => 'Bukti Mengikuti Sidang Akhir 2',
                            'file' => 'bukti2.pdf',
                            'url' => 'https://www.karanganyarkab.go.id/wp-content/uploads/2014/09/MODUL-WORD.docx',
                        ],
                        [
                            'id' => 3,
                            'nama' => 'Bukti Mengikuti Sidang Akhir 3',
                            'file' => 'bukti3.pdf',
                            'url' => 'https://media.neliti.com/media/publications/249244-none-837c3dfb.docx',
                        ],
                        [
                            'id' => 4,
                            'nama' => 'Bukti Mengikuti Sidang Akhir 4',
                            'file' => 'bukti4.pdf',
                            'url' => 'https://media.neliti.com/media/publications/249244-none-837c3dfb.pdf',
                        ],
                        [
                            'id' => 5,
                            'nama' => 'Bukti Mengikuti Sidang Akhir 5',
                            'file' => 'bukti5.pdf',
                            'url' => 'https://media.neliti.com/media/publications/249244-none-837c3dfb.pdf',
                        ],
                    ];
                    ?>
                    <?php foreach ($contohData as $data): ?>
                    <tr class="bg-white border border-1 border-black">
                        <td class="py-2 text-center items-center justify-center m-auto font-bold text-[12px]">
                            <?php echo $data['nama']; ?>
                        </td>
                        <td
                            class="px-10 py-2 text-center items-center justify-center m-auto font-bold text-[12px] file-cell">
                            <a href="<?php echo $data['url']; ?>" target="_blank">Klik Disini</a>
                        </td>
                        <script>
                            function getFileNameFromUrl(url) {
                                var parts = url.split('/');
                                var fileName = parts[parts.length - 1];
                                fileName = fileName.split('?')[0];
                                return fileName;
                            }
                            document.addEventListener('DOMContentLoaded', function() {
                                var links = document.querySelectorAll('td.file-cell a');
                                links.forEach(function(link) {
                                    var url = link.getAttribute('href');
                                    var fileName = getFileNameFromUrl(url);
                                    link.textContent = fileName;
                                });
                            });
                        </script>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="mt-[25px] flex justify-between">
                <div class="div">
                    <a href="/DataPendaftaran/SidangAkhir"
                        class="text-white bg-[#C8AC5E] hover:bg-[#C8AC5E]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2 gap-2">
                        <div class="text-[14px]">Back</div>
                    </a>
                </div>
                <div class="div">
                    <a href="/BuatPenjadwalan"
                        class="text-white bg-[#C8AC5E] hover:bg-[#C8AC5E]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2 gap-2">
                        <div class="text-[14px]">Generate</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
