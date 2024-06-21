<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminar Proposal</title>
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
        <div class="mb-2 text-[40px] font-bold">Data Pendaftaran</div>
        <div class="flex justify-start">
            <div class="text-[25px] font-bold">Tabel Data Pendaftaran Seminar Proposal </div>
        </div>
        <div class="relative mt-2 overflow-x-auto">
            <table class="w-full text-left text-sm text-black rtl:text-right">
                <thead class="bg-[#1F5F92] text-[18px] text-white">
                    <tr>
                        <th scope="col" class="m-auto items-center justify-center rounded-tl-lg px-2 py-1 text-center text-[12px]">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 text-[12px]">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3 text-[12px]">
                            NIM
                        </th>
                        <th scope="col" class="px-6 py-3 text-[12px]">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3 text-[12px]">
                            Dosen Pembimbing 1
                        </th>
                        <th scope="col" class="px-6 py-3 text-[12px]">
                            Dosen Pembimbing 2
                        </th>
                        <th scope="col" class="rounded-tr-lg px-6 py-3 text-[12px]">
                            Dokumen
                        </th>
                    </tr>
                </thead>
                <tbody class="border-1 border border-black">
                    @foreach ($seminars as $seminar)
                        <tr class="border-1 border border-black bg-white">
                            <th scope="row" class="whitespace-nowrap px-2 py-1 text-center font-medium text-gray-900">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4">{{ $seminar->user->name }}</td>
                            <td class="px-6 py-4">{{ $seminar->user->studentData->nim }}</td>
                            <td class="px-6 py-4">{{ $seminar->thesis_title }}</td>
                            @foreach ([$seminar->supervisor_1, $seminar->supervisor_2] as $supervisor)
                                @php
                                    $lecture = $lectures->firstWhere('id', $supervisor);
                                    if ($lecture) {
                                        $lecture = $lecture->name;
                                    }
                                @endphp
                                <td class="px-6 py-4">{{ $lecture }}</td>
                            @endforeach
                            <td class="flex px-6 py-4">
                                <div>
                                    <a href="/DataPendaftaran/SeminarProposal/DataDokumen?id={{ $seminar->id }}">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.43569 1.875L3.4375 1.875H14.0625L14.0643 1.875C14.4779 1.8762 14.8741 2.04102 15.1666 2.33344C15.459 2.62587 15.6238 3.02214 15.625 3.43569L15.625 3.4375V16.8695H14.375V3.4387C14.3746 3.35563 14.3414 3.27607 14.2827 3.21733C14.2239 3.15859 14.1444 3.12542 14.0614 3.125H3.43865C3.3556 3.12542 3.27606 3.15859 3.21733 3.21733C3.15859 3.27606 3.12542 3.3556 3.125 3.43865V17.1865C3.12596 17.4351 3.22514 17.6732 3.40095 17.849C3.57679 18.0249 3.81501 18.1241 4.06366 18.125H16.875V19.375H4.0625L4.06063 19.375C3.4815 19.3733 2.92658 19.1424 2.51707 18.7329C2.10756 18.3234 1.87673 17.7685 1.875 17.1894L1.875 17.1875V3.4375L1.875 3.43569C1.8762 3.02214 2.04102 2.62587 2.33344 2.33344C2.62587 2.04102 3.02214 1.8762 3.43569 1.875Z" fill="black" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.375 5.625C14.375 5.27982 14.6548 5 15 5H17.8125C18.2269 5 18.6243 5.16462 18.9174 5.45765C19.2104 5.75067 19.375 6.1481 19.375 6.5625V16.875C19.375 17.538 19.1116 18.1739 18.6428 18.6428C18.1739 19.1116 17.538 19.375 16.875 19.375C16.212 19.375 15.5761 19.1116 15.1072 18.6428C14.6384 18.1739 14.375 17.538 14.375 16.875V5.625ZM15.625 6.25V16.875C15.625 17.2065 15.7567 17.5245 15.9911 17.7589C16.2255 17.9933 16.5435 18.125 16.875 18.125C17.2065 18.125 17.5245 17.9933 17.7589 17.7589C17.9933 17.5245 18.125 17.2065 18.125 16.875V6.5625C18.125 6.47962 18.0921 6.40013 18.0335 6.34153C17.9749 6.28292 17.8954 6.25 17.8125 6.25H15.625Z" fill="black" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.375 5.625C9.375 5.27982 9.65482 5 10 5H12.5C12.8452 5 13.125 5.27982 13.125 5.625C13.125 5.97018 12.8452 6.25 12.5 6.25H10C9.65482 6.25 9.375 5.97018 9.375 5.625Z" fill="black" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.375 8.125C9.375 7.77982 9.65482 7.5 10 7.5H12.5C12.8452 7.5 13.125 7.77982 13.125 8.125C13.125 8.47018 12.8452 8.75 12.5 8.75H10C9.65482 8.75 9.375 8.47018 9.375 8.125Z" fill="black" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.375 10.625C4.375 10.2798 4.65482 10 5 10H12.5C12.8452 10 13.125 10.2798 13.125 10.625C13.125 10.9702 12.8452 11.25 12.5 11.25H5C4.65482 11.25 4.375 10.9702 4.375 10.625Z" fill="black" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.375 13.125C4.375 12.7798 4.65482 12.5 5 12.5H12.5C12.8452 12.5 13.125 12.7798 13.125 13.125C13.125 13.4702 12.8452 13.75 12.5 13.75H5C4.65482 13.75 4.375 13.4702 4.375 13.125Z" fill="black" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.375 15.625C4.375 15.2798 4.65482 15 5 15H12.5C12.8452 15 13.125 15.2798 13.125 15.625C13.125 15.9702 12.8452 16.25 12.5 16.25H5C4.65482 16.25 4.375 15.9702 4.375 15.625Z" fill="black" />
                                            <path d="M6.875 8.125H4.375C4.20924 8.125 4.05027 8.05915 3.93306 7.94194C3.81585 7.82473 3.75 7.66576 3.75 7.5V5C3.75 4.83424 3.81585 4.67527 3.93306 4.55806C4.05027 4.44085 4.20924 4.375 4.375 4.375H6.875C7.04076 4.375 7.19973 4.44085 7.31694 4.55806C7.43415 4.67527 7.5 4.83424 7.5 5V7.5C7.5 7.66576 7.43415 7.82473 7.31694 7.94194C7.19973 8.05915 7.04076 8.125 6.875 8.125Z" fill="black" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
