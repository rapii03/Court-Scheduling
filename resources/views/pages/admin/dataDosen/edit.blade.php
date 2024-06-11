<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen | Edit</title>
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
        <div class="text-[40px] font-bold mb-10">Edit Data Dosen</div>
        <div class="w-full h-[600px] rounded-lg bg-[#1F5F92]">
            <div class="p-20">
                <div class="flex gap-10">
                    <div class="w-[30%] ml-20 relative">
                        <div class="justify-center items-center flex m-auto align-center mt-24 relative">
                            <div id="hapus-icon-container" class="hidden absolute bottom-2 left-2 z-50 cursor-pointer">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.5 7.5H8.75V15H7.5V7.5Z" fill="#872929" />
                                    <path d="M11.25 7.5H12.5V15H11.25V7.5Z" fill="#872929" />
                                    <path
                                        d="M2.5 3.75V5H3.75V17.5C3.75 17.8315 3.8817 18.1495 4.11612 18.3839C4.35054 18.6183 4.66848 18.75 5 18.75H15C15.3315 18.75 15.6495 18.6183 15.8839 18.3839C16.1183 18.1495 16.25 17.8315 16.25 17.5V5H17.5V3.75H2.5ZM5 17.5V5H15V17.5H5Z"
                                        fill="#872929" />
                                    <path d="M7.5 1.25H12.5V2.5H7.5V1.25Z" fill="#872929" />
                                </svg>
                            </div>
                            <label for="file-input" class="cursor-pointer relative">
                                <div id="svg-container">
                                    <svg id="svg-icon" width="169" height="184" viewBox="0 0 169 184"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="169" height="184" rx="10" fill="#808080" />
                                        <path
                                            d="M84.9948 21.0013C82.3315 21.0013 79.7011 21.4097 77.1825 22.0592C75.7095 22.4436 74.289 22.9484 72.8686 23.5401C72.3228 23.7703 71.7645 23.9147 71.2259 24.1748C71.0023 24.282 70.8314 24.4858 70.6097 24.5979C69.2735 25.2788 67.9655 26.0673 66.7056 26.9251C66.528 27.0429 66.2643 27.0157 66.0887 27.1367C65.7185 27.3983 65.4245 27.7066 65.0615 27.9826C64.0298 28.7449 62.9467 29.4449 61.9787 30.3101C61.0962 31.1272 60.3386 32.1542 59.5127 33.0601C56.7172 36.0111 54.2939 39.1334 52.3198 42.7926C48.9305 48.9087 46.4001 55.7944 45.3334 62.8907C44.8185 62.779 44.3464 62.7391 43.8946 62.8907C40.4415 64.0484 39.5906 70.8015 41.8396 77.9114C43.1594 82.0837 45.3551 85.3685 47.5936 87.2201C50.6008 99.2558 56.9691 109.289 65.2667 115.572V122.551L58.6907 129.321L45.5386 136.091C34.9032 141.514 24.3085 146.957 13.6856 152.38C7.79921 156.036 5.52147 163.212 6.0824 169.941C6.35639 174.179 4.86926 179.602 8.95942 182.425C12.8452 184.483 17.4813 183.143 21.7005 183.481C34.0411 183.475 46.3501 183.481 58.6907 183.481C76.2421 183.488 93.7475 183.481 111.299 183.481C126.864 183.481 142.384 183.509 157.949 183.481C163 183.116 164.4 177.625 163.907 173.326C163.999 167.017 164.361 159.949 159.593 155.129C155.7 151.053 150.163 149.442 145.415 146.666C138.438 143.112 131.422 139.646 124.451 136.091L111.299 129.321L104.723 122.551V115.572C113.022 109.289 119.387 99.2558 122.399 87.2201C124.635 85.3678 126.832 82.083 128.147 77.9114C130.396 70.8015 129.547 64.0484 126.095 62.8907C125.641 62.7391 125.174 62.779 124.655 62.8907C123.59 55.7944 121.058 48.9087 117.671 42.7926C115.698 39.1334 113.272 36.0111 110.477 33.0601C109.648 32.1542 108.892 31.1272 108.011 30.3101C107.971 30.2729 107.847 30.3473 107.807 30.3101C105.229 27.9413 102.369 26.1199 99.3832 24.5979C98.6269 24.2173 97.8904 23.8631 97.121 23.5401C96.5686 23.3098 96.036 23.1051 95.477 22.9054C93.8001 22.3064 92.0838 21.7304 90.3346 21.4245C90.203 21.4014 90.0584 21.4458 89.9268 21.4245C88.2894 21.1595 86.6717 20.9827 84.9948 21.0013Z"
                                            fill="#969BA0" />
                                    </svg>
                                </div>
                                <img id="selected-image" src="" alt="Selected Image" class="hidden" />
                                <input id="file-input" type="file" class="hidden" accept="image/*" value="" />
                                <div id="edit-icon-container" class="absolute bottom-2 right-2">
                                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.9018 15L12.3259 13.3523L10.4598 11.1932L9.03571 12.8409V13.6364H10.2143V15H10.9018ZM16.3036 4.77273C16.1726 4.62121 16.0376 4.62595 15.8984 4.78693L11.6016 9.75852C11.4624 9.91951 11.4583 10.0758 11.5893 10.2273C11.7202 10.3788 11.8553 10.3741 11.9944 10.2131L16.2913 5.24148C16.4304 5.08049 16.4345 4.92424 16.3036 4.77273ZM17.2857 13.2102V15.9091C17.2857 17.036 16.9399 17.9995 16.2483 18.7997C15.5567 19.5999 14.724 20 13.75 20H3.53571C2.56176 20 1.72898 19.5999 1.03739 18.7997C0.345796 17.9995 0 17.036 0 15.9091V4.09091C0 2.96402 0.345796 2.00047 1.03739 1.20028C1.72898 0.400095 2.56176 0 3.53571 0H13.75C14.2656 0 14.7444 0.118371 15.1864 0.355114C15.3092 0.421402 15.3828 0.530303 15.4074 0.681818C15.4319 0.842803 15.3951 0.980114 15.2969 1.09375L14.6953 1.78977C14.5807 1.92235 14.4498 1.96023 14.3025 1.90341C14.1142 1.84659 13.9301 1.81818 13.75 1.81818H3.53571C2.99554 1.81818 2.53311 2.04072 2.14844 2.4858C1.76376 2.93087 1.57143 3.46591 1.57143 4.09091V15.9091C1.57143 16.5341 1.76376 17.0691 2.14844 17.5142C2.53311 17.9593 2.99554 18.1818 3.53571 18.1818H13.75C14.2902 18.1818 14.7526 17.9593 15.1373 17.5142C15.5219 17.0691 15.7143 16.5341 15.7143 15.9091V14.1193C15.7143 13.9962 15.7511 13.892 15.8248 13.8068L16.6105 12.8977C16.7333 12.7557 16.8765 12.7225 17.0402 12.7983C17.2039 12.8741 17.2857 13.0114 17.2857 13.2102ZM16.1071 2.72727L19.6429 6.81818L11.3929 16.3636H7.85714V12.2727L16.1071 2.72727ZM21.558 4.60227L20.4286 5.90909L16.8929 1.81818L18.0223 0.511364C18.2515 0.246212 18.5298 0.113636 18.8571 0.113636C19.1845 0.113636 19.4628 0.246212 19.692 0.511364L21.558 2.67045C21.7872 2.93561 21.9018 3.25758 21.9018 3.63636C21.9018 4.01515 21.7872 4.33712 21.558 4.60227Z"
                                            fill="black" />
                                    </svg>
                                </div>
                            </label>
                        </div>
                    </div>
                    <script>
                        document.getElementById('file-input').addEventListener('change', function(event) {
                            const file = event.target.files[0];
                            if (file) {
                                const reader = new FileReader();
                                reader.onload = function(e) {
                                    const img = document.getElementById('selected-image');
                                    img.src = e.target.result;
                                    img.classList.remove('hidden');
                                    document.getElementById('svg-container').classList.add('hidden');
                                    document.getElementById('edit-icon-container').classList.remove('hidden');
                                    document.getElementById('hapus-icon-container').classList.remove('hidden');
                                }
                                reader.readAsDataURL(file);
                            }
                        });
                        document.getElementById('hapus-icon-container').addEventListener('click', function() {
                            const img = document.getElementById('selected-image');
                            img.src = '';
                            img.classList.add('hidden');
                            document.getElementById('svg-container').classList.remove('hidden');
                            document.getElementById('edit-icon-container').classList.add('hidden');
                            document.getElementById('hapus-icon-container').classList.add('hidden');
                            document.getElementById('file-input').value = '';
                        });
                    </script>
                    <div class="w-[70%]">
                        <div class="relative overflow-x-auto overflow-y-auto mt-5">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 bg-transparent">
                                <tbody>
                                    <tr class="text-white">
                                        <td class="px-3 py-2 text-[16px]">
                                            Email
                                        </td>
                                        <td class="px-5 py-2 flex gap-2">
                                            <div class="text-black text-lg font-bold flex items-center">: </div>
                                            <div class="flex items-center">
                                                <form class="w-full">
                                                    <div class="relative">
                                                        <input type="text" id="phone-input" value=""
                                                            aria-describedby="helper-text-explanation"
                                                            class="bg-gray-50 border border-black text-black text-sm focus:ring-black focus:border-black block w-[250px] h-[21px] ps-2 p-2.5"
                                                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                            placeholder="Andre Febrianto@if.itera.ac.id" required />
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-white">
                                        <td class="px-3 py-2 text-[16px]">
                                            Nama
                                        </td>
                                        <td class="px-5 py-2 flex gap-2">
                                            <div class="text-black text-lg font-bold flex items-center">: </div>
                                            <div class="flex items-center">
                                                <form class="w-full">
                                                    <div class="relative">
                                                        <input type="text" id="phone-input" value=""
                                                            aria-describedby="helper-text-explanation"
                                                            class="bg-gray-50 border border-black text-black text-sm focus:ring-black focus:border-black block w-[250px] h-[21px] ps-2 p-2.5"
                                                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                            placeholder="Andre Febrianto@if.itera.ac.id" required />
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-white">
                                        <td class="px-3 py-2 text-[16px]">
                                            NIP
                                        </td>
                                        <td class="px-5 py-2 flex gap-2">
                                            <div class="text-black text-lg font-bold flex items-center">: </div>
                                            <div class="flex items-center">
                                                <form class="w-full">
                                                    <div class="relative">
                                                        <input type="text" id="phone-input" value=""
                                                            aria-describedby="helper-text-explanation"
                                                            class="bg-gray-50 border border-black text-black text-sm focus:ring-black focus:border-black block w-[250px] h-[21px] ps-2 p-2.5"
                                                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                            placeholder="Andre Febrianto@if.itera.ac.id" required />
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-white">
                                        <td class="px-3 py-2 text-[16px]">
                                            NIDN
                                        </td>
                                        <td class="px-5 py-2 flex gap-2">
                                            <div class="text-black text-lg font-bold flex items-center">: </div>
                                            <div class="flex items-center">
                                                <form class="w-full">
                                                    <div class="relative">
                                                        <input type="text" id="phone-input" value=""
                                                            aria-describedby="helper-text-explanation"
                                                            class="bg-gray-50 border border-black text-black text-sm focus:ring-black focus:border-black block w-[250px] h-[21px] ps-2 p-2.5"
                                                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                            placeholder="Andre Febrianto@if.itera.ac.id" required />
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-white">
                                        <td class="px-3 py-2 text-[16px]">
                                            Kelompok Keahlian
                                        </td>
                                        <td class="px-5 py-2 flex gap-2">
                                            <div class="text-black text-lg font-bold flex items-center">: </div>
                                            <div class="flex items-center">
                                                <form class="w-full">
                                                    <div class="relative">
                                                        <input type="text" id="phone-input" value=""
                                                            aria-describedby="helper-text-explanation"
                                                            class="bg-gray-50 border border-black text-black text-sm focus:ring-black focus:border-black block w-[250px] h-[21px] ps-2 p-2.5"
                                                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                            placeholder="Andre Febrianto@if.itera.ac.id" required />
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-white">
                                        <td class="px-3 py-2 text-[16px]">
                                            Nomor Telpon
                                        </td>
                                        <td class="px-5 py-2 flex gap-2">
                                            <div class="text-black text-lg font-bold flex items-center">: </div>
                                            <div class="flex items-center">
                                                <form class="w-full">
                                                    <div class="relative">
                                                        <input type="text" id="phone-input" value=""
                                                            aria-describedby="helper-text-explanation"
                                                            class="bg-gray-50 border border-black text-black text-sm focus:ring-black focus:border-black block w-[250px] h-[21px] ps-2 p-2.5"
                                                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                            placeholder="Andre Febrianto@if.itera.ac.id" required />
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-white">
                                        <td class="px-3 py-2 text-[16px]">
                                            Alamat
                                        </td>
                                        <td class="px-5 py-2 flex gap-2">
                                            <div class="text-black text-lg font-bold flex items-center">: </div>
                                            <div class="flex items-center">
                                                <form class="w-full">
                                                    <div class="relative">
                                                        <input type="text" id="phone-input" value=""
                                                            aria-describedby="helper-text-explanation"
                                                            class="bg-gray-50 border border-black text-black text-sm focus:ring-black focus:border-black block w-[250px] h-[21px] ps-2 p-2.5"
                                                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                            placeholder="Andre Febrianto@if.itera.ac.id" required />
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-[25px] ml-10 mr-10 flex justify-between">
                <div class="div">
                    <a href="/DataDosen/AturJadwal" type="button"
                        class="text-white bg-[#C8AC5E] hover:bg-[#C8AC5E]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2 gap-2">
                        <div class="text-[14px]">
                            Atur Jadwal
                        </div>
                    </a>
                </div>
                <div class="div">
                    <button type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                        class="text-white bg-[#C8AC5E] hover:bg-[#C8AC5E]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2 gap-2">
                        <div class="text-[14px]">
                            Submit
                        </div>
                    </button>
                </div>
            </div>
            <div id="popup-modal" tabindex="-1"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow">
                        <button type="button"
                            class="absolute top-3 end-2.5 text-[#872929] bg-transparent hover:bg-[#C8AC5E] hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="popup-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg width="80" height="65" viewBox="0 0 80 65" fill="none"
                                class="m-auto flex" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M70.3177 9.68233C71.7136 11.0783 71.7136 13.2975 70.3177 14.6935L29.7271 55.2841C29.3995 55.6157 29.0093 55.879 28.5792 56.0587C28.1491 56.2384 27.6876 56.3309 27.2215 56.3309C26.7553 56.3309 26.2939 56.2384 25.8637 56.0587C25.4336 55.879 25.0435 55.6157 24.7159 55.2841L9.68233 40.2506C9.35073 39.923 9.08746 39.5328 8.90777 39.1027C8.72809 38.6726 8.63556 38.2111 8.63556 37.745C8.63556 37.2788 8.72809 36.8173 8.90777 36.3872C9.08746 35.9571 9.35073 35.567 9.68233 35.2394C10.0099 34.9078 10.4001 34.6445 10.8302 34.4648C11.2603 34.2851 11.7218 34.1926 12.1879 34.1926C12.654 34.1926 13.1155 34.2851 13.5456 34.4648C13.9758 34.6445 14.3659 34.9078 14.6935 35.2394L27.2215 47.7673L65.3065 9.68233C65.6341 9.35073 66.0242 9.08746 66.4543 8.90777C66.8845 8.72809 67.3459 8.63556 67.8121 8.63556C68.2782 8.63556 68.7397 8.72809 69.1698 8.90777C69.5999 9.08746 69.9901 9.35073 70.3177 9.68233ZM62.7651 2.09396L27.2215 37.6376L17.2349 27.651C14.443 24.8591 9.89709 24.8591 7.10514 27.651L2.09396 32.6622C-0.697987 35.4541 -0.697987 40 2.09396 42.7919L22.1387 62.8367C24.9306 65.6286 29.4765 65.6286 32.2685 62.8367L77.906 17.2349C80.698 14.443 80.698 9.89709 77.906 7.10514L72.8949 2.09396C70.0671 -0.697987 65.557 -0.697987 62.7651 2.09396Z"
                                    fill="#26B34D" />
                            </svg>
                            <h3 class="mb-5 mt-5 text-lg font-normal text-gray-500">Data berhasil
                                disimpan</h3>
                            <button data-modal-hide="popup-modal" type="button"
                                class="text-white bg-[#C8AC5E] hover:bg-[#C8AC5E] focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Confirm
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>
