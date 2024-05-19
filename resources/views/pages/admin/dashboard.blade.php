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
    <x-layoutAdmin />
    <div class="ml-[228px] p-16">
        <div class="text-[40px] font-bold mb-16">Dashboard</div>
        <div class="flex gap-10">
            <a href="">
                <div class="w-[260px] h-[220px] bg-[#1F5F92] hover:bg-[#C8AC5E] rounded-md text-white p-5">
                    <div class="font-bold text-[30px]">087</div>
                    <div class="font-bold text-[30px]">Mahasiswa</div>
                    <div class="flex justify-end">
                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M66.667 33.3333C66.667 42.5416 59.2087 49.9999 50.0003 49.9999C40.792 49.9999 33.3337 42.5416 33.3337 33.3333L33.792 29.4166L20.8337 22.9166L50.0003 8.33325L79.167 22.9166V43.7499H75.0003V24.9999L66.2087 29.4166L66.667 33.3333ZM50.0003 58.3333C68.417 58.3333 83.3337 65.7916 83.3337 74.9999V83.3332H16.667V74.9999C16.667 65.7916 31.5837 58.3333 50.0003 58.3333Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="w-[260px] h-[220px] bg-[#1F5F92] hover:bg-[#C8AC5E] rounded-md text-white p-5">
                    <div class="font-bold text-[30px]">017</div>
                    <div class="font-bold text-[30px]">Dosen</div>
                    <div class="flex justify-end">
                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M84.375 15.625H15.625C13.9674 15.625 12.3777 16.2835 11.2056 17.4556C10.0335 18.6277 9.375 20.2174 9.375 21.875V78.125C9.375 79.7826 10.0335 81.3723 11.2056 82.5444C12.3777 83.7165 13.9674 84.375 15.625 84.375H20.8555C21.4469 84.3752 22.0262 84.2076 22.5262 83.8915C23.0261 83.5755 23.4261 83.1242 23.6797 82.5898C25.1993 79.3815 27.5985 76.6706 30.5982 74.7722C33.598 72.8738 37.075 71.866 40.625 71.866C44.175 71.866 47.652 72.8738 50.6518 74.7722C53.6515 76.6706 56.0507 79.3815 57.5703 82.5898C57.8239 83.1242 58.2239 83.5755 58.7238 83.8915C59.2238 84.2076 59.8031 84.3752 60.3945 84.375H84.375C86.0326 84.375 87.6223 83.7165 88.7944 82.5444C89.9665 81.3723 90.625 79.7826 90.625 78.125V21.875C90.625 20.2174 89.9665 18.6277 88.7944 17.4556C87.6223 16.2835 86.0326 15.625 84.375 15.625ZM31.25 56.25C31.25 54.3958 31.7998 52.5832 32.83 51.0415C33.8601 49.4998 35.3243 48.2982 37.0373 47.5886C38.7504 46.8791 40.6354 46.6934 42.454 47.0551C44.2725 47.4169 45.943 48.3098 47.2541 49.6209C48.5652 50.932 49.4581 52.6025 49.8199 54.421C50.1816 56.2396 49.9959 58.1246 49.2864 59.8377C48.5768 61.5507 47.3752 63.0149 45.8335 64.045C44.2918 65.0752 42.4792 65.625 40.625 65.625C38.1386 65.625 35.754 64.6373 33.9959 62.8791C32.2377 61.121 31.25 58.7364 31.25 56.25ZM84.375 78.125H62.2773C59.6677 73.6384 55.734 70.0689 51.0156 67.9062C53.3812 65.7999 55.0508 63.0244 55.803 59.9476C56.5552 56.8707 56.3546 53.638 55.2277 50.6778C54.1008 47.7176 52.1008 45.1698 49.4929 43.3721C46.8851 41.5745 43.7924 40.6118 40.625 40.6118C37.4576 40.6118 34.3649 41.5745 31.7571 43.3721C29.1492 45.1698 27.1492 47.7176 26.0223 50.6778C24.8954 53.638 24.6948 56.8707 25.447 59.9476C26.1992 63.0244 27.8688 65.7999 30.2344 67.9062C25.516 70.0689 21.5823 73.6384 18.9727 78.125H15.625V21.875H84.375V78.125ZM21.875 37.5V31.25C21.875 30.4212 22.2042 29.6263 22.7903 29.0403C23.3763 28.4542 24.1712 28.125 25 28.125H75C75.8288 28.125 76.6237 28.4542 77.2097 29.0403C77.7958 29.6263 78.125 30.4212 78.125 31.25V68.75C78.125 69.5788 77.7958 70.3737 77.2097 70.9597C76.6237 71.5458 75.8288 71.875 75 71.875H68.75C67.9212 71.875 67.1263 71.5458 66.5403 70.9597C65.9542 70.3737 65.625 69.5788 65.625 68.75C65.625 67.9212 65.9542 67.1263 66.5403 66.5403C67.1263 65.9542 67.9212 65.625 68.75 65.625H71.875V34.375H28.125V37.5C28.125 38.3288 27.7958 39.1237 27.2097 39.7097C26.6237 40.2958 25.8288 40.625 25 40.625C24.1712 40.625 23.3763 40.2958 22.7903 39.7097C22.2042 39.1237 21.875 38.3288 21.875 37.5Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>
</body>

</html>
