<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP</title>
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
    <div class="w-full max-w-xs">
        <form action="/Login" method="POST" class="mb-4 rounded bg-white px-8 pb-8 pt-6 shadow-md">
            @csrf
            <div class="mb-4 text-center">
                <div class="mb-2 text-[46px] font-semibold">SchedulerIF</div>
                <img src="/logo_if.png" alt="Logo" class="mx-auto mb-4">
            </div>
            <div class="mb-4">
                <label class="mb-2 block text-sm font-bold text-gray-700" for="">
                    Kode OTP Anda
                </label>
                <input class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none" id="otp" type="otp" placeholder="Masukkan Kode OTP Anda" name="otp" value="">
                    <p></p>
            </div>
            <div class="flex items-center justify-center">
                <button class="focus:shadow-outline w-[150px] rounded bg-[#C8AC5E] px-4 py-2 font-bold text-white hover:bg-[#B7A05E] focus:outline-none" type="submit">
                <div class=""><a href="/ubahPassword">Kirim</a></div>
                </button>
        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const passwordField = document.getElementById("password");
            const eyeIconOpen = document.getElementById("eye-icon-open");
            const eyeIconClosed = document.getElementById("eye-icon-closed");
            eyeIconClosed.addEventListener("click", function() {
                passwordField.type = "text";
                eyeIconClosed.classList.add("hidden");
                eyeIconOpen.classList.remove("hidden");
            });
            eyeIconOpen.addEventListener("click", function() {
                passwordField.type = "password";
                eyeIconOpen.classList.add("hidden");
                eyeIconClosed.classList.remove("hidden");
            });
        });
    </script>
</body>

</html>
