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
        <div class="justify-between flex">
            <div class="mb-2">
                <div class="text-[20px]">Nama : Rafi Ramadhan Pratama</div>
                <div class="text-[20px]">Nama : 120140079</div>
                <div class="text-[20px]">Nama : Sidang Akhir</div>
            </div>
            <div class="mb-2 flex justify-center items-center">
                <button type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                    class="text-white bg-[#872929] hover:bg-[#610909]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2 gap-2">
                    <div class="text-[14px]">
                        Tolak Pendaftaran
                    </div>
                </button>
                <div id="popup-modal" tabindex="-1"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow">
                            <button type="button"
                                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                data-modal-hide="popup-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-4 md:p-5 text-black">
                                <svg class="mx-auto mb-4 text-black w-12 h-12" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <label for="message" class="block mb-2 text-sm font-bold text-black">Catatan</label>
                                <textarea id="message" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Masukkan catatan penolakan..."></textarea>
                                <h3 class="mb-2 mt-2 text-lg font-bold text-black text-center">Tolak Pendaftaran?</h3>
                                <div class="flex m-auto justify-center items-center">
                                    <button data-modal-hide="popup-modal" type="button"
                                        class="text-white bg-[#C8AC5E] hover:bg-[#C8AC5E] focus:ring-4 focus:outline-none focus:ring-[#C8AC5E] 
                                    font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                        Yes
                                    </button>
                                    <button data-modal-hide="popup-modal" type="button"
                                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-gray-600 focus:z-10 focus:ring-4 focus:ring-gray-100">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                    <a href=""
                        class="text-white bg-[#C8AC5E] hover:bg-[#C8AC5E]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2 gap-2">
                        <div class="text-[14px]">Generate</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
