<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
    <style>
        /* Custom CSS */
        .eye-icon {
            cursor: pointer;
        }
    </style>
    {{-- Akhir DeasyUi --}}
</head>

<body class="flex h-screen items-center justify-center bg-gray-100">
    <div class="w-full max-w-xl">
        <form action="" method="POST" class="m-5 rounded bg-white p-5 px-8 shadow-md">
            @csrf
            <div class="mb-4 text-center">
                <div class="mb-2 text-[46px] font-semibold">SchedulerIF</div>
                <img src="/logo_if.png" alt="Logo" class="mx-auto mb-4">
            </div>
            <div class="flex justify-between gap-5">
                <div class="mb-4 w-[50%]">
                    <label class="mb-2 block text-sm font-bold text-gray-700" for="email">
                        Email
                    </label>
                    <input name="email" class="focus:shadow-outline w-full appearance-none rounded border leading-tight text-gray-700 shadow focus:outline-none" id="email" type="email" placeholder="Email" value="{{ old('email') }}" required>
                    @error('email')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4 w-[50%]">
                    <label class="mb-2 block text-sm font-bold text-gray-700" for="password">
                        NIM
                    </label>
                    <input name="nim" class="focus:shadow-outline w-full appearance-none rounded border leading-tight text-gray-700 shadow focus:outline-none" id="email" type="number" placeholder="NIM" minlength="8" maxlength="20" value="{{ old('nim') }}" required>
                    @error('nim')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex justify-between gap-5">
                <div class="mb-4 w-[50%]">
                    <label class="mb-2 block text-sm font-bold text-gray-700" for="email">
                        Nama
                    </label>
                    <input name="name" class="focus:shadow-outline w-full appearance-none rounded border leading-tight text-gray-700 shadow focus:outline-none" id="email" type="text" placeholder="Nama" maxlength="100" value="{{ old('name') }}" required>
                    @error('name')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4 w-[50%]">
                    <label class="mb-2 block text-sm font-bold text-gray-700" for="password">
                        Password
                    </label>
                    <div class="relative">
                        <input name="password" class="focus:shadow-outline w-full appearance-none rounded border leading-tight text-gray-700 shadow focus:outline-none" id="password" type="password" placeholder="Password" minlength="8" maxlength="24" required>
                        @error('password')
                        <p>{{ $message }}</p>
                        @enderror
                        <i class="fas fa-eye-slash eye-icon absolute right-0 top-0 mr-3 mt-1 cursor-pointer text-gray-500">
                            <svg width="25" height="25" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.88773 4.11249C5.77118 3.99594 5.63282 3.90349 5.48054 3.84041C5.32827 3.77734 5.16506 3.74487 5.00023 3.74487C4.83541 3.74487 4.6722 3.77734 4.51992 3.84041C4.36764 3.90349 4.22928 3.99594 4.11273 4.11249C3.87735 4.34787 3.74512 4.66711 3.74512 4.99999C3.74512 5.33286 3.87735 5.65211 4.11273 5.88749L11.1502 12.925C10.705 13.7533 10.5385 14.703 10.6753 15.6333C10.8122 16.5636 11.2452 17.4251 11.9102 18.0901C12.5751 18.755 13.4366 19.188 14.3669 19.3249C15.2973 19.4618 16.247 19.2952 17.0752 18.85L24.1127 25.8875C24.2289 26.0046 24.3672 26.0976 24.5195 26.1611C24.6718 26.2246 24.8352 26.2572 25.0002 26.2572C25.1652 26.2572 25.3286 26.2246 25.481 26.1611C25.6333 26.0976 25.7715 26.0046 25.8877 25.8875C26.0049 25.7713 26.0979 25.633 26.1613 25.4807C26.2248 25.3284 26.2575 25.165 26.2575 25C26.2575 24.835 26.2248 24.6716 26.1613 24.5193C26.0979 24.3669 26.0049 24.2287 25.8877 24.1125L5.88773 4.11249ZM15.0002 16.875C14.503 16.875 14.026 16.6774 13.6744 16.3258C13.3228 15.9742 13.1252 15.4973 13.1252 15C13.1252 15 13.1252 14.9375 13.1252 14.9125L15.0752 16.8625L15.0002 16.875Z" fill="black" />
                                <path d="M15.2751 21.2499C9.90009 21.3749 6.37508 16.7624 5.27508 14.9999C6.05817 13.7508 6.99929 12.608 8.07508 11.5999L6.25008 9.8374C4.83924 11.1667 3.6306 12.6954 2.66259 14.3749C2.55288 14.5649 2.49512 14.7805 2.49512 14.9999C2.49512 15.2193 2.55288 15.4349 2.66259 15.6249C3.45009 16.9874 7.66259 23.7499 15.0251 23.7499H15.3376C16.722 23.7088 18.0885 23.4254 19.3751 22.9124L17.4001 20.9374C16.7055 21.1201 15.9928 21.2249 15.2751 21.2499Z" fill="black" />
                                <path d="M27.3375 14.375C26.5375 12.9875 22.125 6.02496 14.6625 6.24996C13.2781 6.29103 11.9115 6.57449 10.625 7.08746L12.6 9.06246C13.2945 8.87975 14.0073 8.77494 14.725 8.74996C20.0875 8.61246 23.6125 13.2375 24.725 15C23.9226 16.2528 22.9603 17.3958 21.8625 18.4L23.75 20.1625C25.1786 18.8366 26.4042 17.3077 27.3875 15.625C27.4897 15.4306 27.5389 15.2127 27.5301 14.9933C27.5213 14.7738 27.4549 14.5606 27.3375 14.375Z" fill="black" />
                            </svg>
                        </i>
                    </div>
                </div>
            </div>
            <div class="flex justify-between gap-5">
                <div class="mb-4 w-[50%]">
                    <label class="mb-2 block text-sm font-bold text-gray-700" for="dosenPembimbing1">
                        Dosen Pembimbing 1
                    </label>
                    <input name="supervisor_1" class="focus:shadow-outline w-full appearance-none rounded border leading-tight text-gray-700 shadow focus:outline-none" id="dosenPembimbing1" type="text" placeholder="Dosen Pembimbing 1" maxlength="100" value="{{ old('supervisor_1') }}" required>
                    @error('supervisor_1')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4 w-[50%]">
                    <label class="mb-2 block text-sm font-bold text-gray-700" for="dosenPembimbing2">
                        Dosen Pembimbing 2
                    </label>
                    <input name="supervisor_2" class="focus:shadow-outline w-full appearance-none rounded border leading-tight text-gray-700 shadow focus:outline-none" id="dosenPembimbing2" type="text" placeholder="Dosen Pembimbing 2" maxlength="100" value="{{ old('supervisor_2') }}" required>
                    @error('supervisor_2')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex justify-between gap-5">
                <div class="mb-4 w-[50%]">
                    <label class="mb-2 block text-sm font-bold text-gray-700" for="bidangKeahlian">
                        Bidang Keahlian
                    </label>
                    <select name="kk" class="focus:shadow-outline w-full appearance-none rounded border leading-tight text-gray-700 shadow focus:outline-none" id="bidangKeahlian" required>
                        <option value="" disabled selected>Pilih Bidang Keahlian</option>
                        <option value="rplsi">Rekayasa Perangkat Lunak Sistem Informasi</option>
                        <option value="aide">Artificial Intelligence dan Data Engineering</option>
                        <option value="casper">Keamanan Siber dan Pervasif</option>
                    </select>
                    @error('kk')
                    <p>{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4 w-[50%]">
                    <label class="mb-2 block text-sm font-bold text-gray-700" for="judulTugasAkhir">
                        Judul Tugas Akhir
                    </label>
                    <input name="thesis_title" class="focus:shadow-outline w-full appearance-none rounded border leading-tight text-gray-700 shadow focus:outline-none" id="judulTugasAkhir" type="text" placeholder="Judul Tugas AKhir" maxlength="100" value="{{ old('thesis_title') }}" required>
                    @error('thesis_title')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mt-5 flex items-center justify-center">
                <button class="focus:shadow-outline w-[150px] rounded bg-[#C8AC5E] px-4 py-2 font-bold text-white hover:bg-[#B7A05E] focus:outline-none" type="submit">
                    Create Account
                </button>
            </div>
        </form>
    </div>
    <div id="popup-modal" tabindex="-1" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
        <div class="relative max-h-full w-full max-w-md p-4">
            <div class="relative rounded-lg bg-white shadow">
                <button type="button" class="absolute end-2.5 top-3 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-[#872929] hover:bg-[#C8AC5E] hover:text-white" data-modal-hide="popup-modal">
                    <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 text-center md:p-5">
                    <svg width="80" height="65" viewBox="0 0 80 65" fill="none" class="m-auto flex" xmlns="http://www.w3.org/2000/svg">
                        <path d="M70.3177 9.68233C71.7136 11.0783 71.7136 13.2975 70.3177 14.6935L29.7271 55.2841C29.3995 55.6157 29.0093 55.879 28.5792 56.0587C28.1491 56.2384 27.6876 56.3309 27.2215 56.3309C26.7553 56.3309 26.2939 56.2384 25.8637 56.0587C25.4336 55.879 25.0435 55.6157 24.7159 55.2841L9.68233 40.2506C9.35073 39.923 9.08746 39.5328 8.90777 39.1027C8.72809 38.6726 8.63556 38.2111 8.63556 37.745C8.63556 37.2788 8.72809 36.8173 8.90777 36.3872C9.08746 35.9571 9.35073 35.567 9.68233 35.2394C10.0099 34.9078 10.4001 34.6445 10.8302 34.4648C11.2603 34.2851 11.7218 34.1926 12.1879 34.1926C12.654 34.1926 13.1155 34.2851 13.5456 34.4648C13.9758 34.6445 14.3659 34.9078 14.6935 35.2394L27.2215 47.7673L65.3065 9.68233C65.6341 9.35073 66.0242 9.08746 66.4543 8.90777C66.8845 8.72809 67.3459 8.63556 67.8121 8.63556C68.2782 8.63556 68.7397 8.72809 69.1698 8.90777C69.5999 9.08746 69.9901 9.35073 70.3177 9.68233ZM62.7651 2.09396L27.2215 37.6376L17.2349 27.651C14.443 24.8591 9.89709 24.8591 7.10514 27.651L2.09396 32.6622C-0.697987 35.4541 -0.697987 40 2.09396 42.7919L22.1387 62.8367C24.9306 65.6286 29.4765 65.6286 32.2685 62.8367L77.906 17.2349C80.698 14.443 80.698 9.89709 77.906 7.10514L72.8949 2.09396C70.0671 -0.697987 65.557 -0.697987 62.7651 2.09396Z" fill="#26B34D" />
                    </svg>
                    <h3 class="mb-5 mt-10 text-[18px] font-bold text-black">Your account has been successfully created!
                    </h3>
                    <button data-modal-hide="popup-modal" type="submit" class="inline-flex items-center rounded-lg bg-[#C8AC5E] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#C8AC5E] focus:outline-none focus:ring-4 focus:ring-red-300">
                        Confirm
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.querySelector('.eye-icon');

        eyeIcon.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>

</body>

</html>