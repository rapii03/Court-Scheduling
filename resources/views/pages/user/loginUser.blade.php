<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
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
        <form action="" method="POST" class="mb-4 rounded bg-white px-8 pb-8 pt-6 shadow-md">
            @csrf
            <div class="mb-4 text-center">
                <div class="mb-2 text-[46px] font-semibold">SchedulerTI</div>
                <img src="/logo_if.png" alt="Logo" class="mx-auto mb-4">
            </div>
            <div class="mb-4">
                <label class="mb-2 block text-sm font-bold text-gray-700" for="email">
                    Email
                </label>
                <input class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none" id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="mb-2 block text-sm font-bold text-gray-700" for="password">
                    Password
                </label>
                <div class="relative">
                    <input class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 pr-10 leading-tight text-gray-700 shadow focus:outline-none" id="password" type="password" name="password" placeholder="Password" required>
                    @error('password')
                        <p>{{ $message }}</p>
                    @enderror
                    <div class="absolute inset-y-0 right-0 mr-3 flex items-center">
                        <svg id="eye-icon-open" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="hidden h-6 w-6 cursor-pointer text-gray-400">
                            <path d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                        <svg id="eye-icon-closed" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer text-gray-400">
                            <path d="M2.99902 3L20.999 21M9.8433 9.91364C9.32066 10.4536 8.99902 11.1892 8.99902 12C8.99902 13.6569 10.3422 15 11.999 15C12.8215 15 13.5667 14.669 14.1086 14.133M6.49902 6.64715C4.59972 7.90034 3.15305 9.78394 2.45703 12C3.73128 16.0571 7.52159 19 11.9992 19C13.9881 19 15.8414 18.4194 17.3988 17.4184M10.999 5.04939C11.328 5.01673 11.6617 5 11.9992 5C16.4769 5 20.2672 7.94291 21.5414 12C21.2607 12.894 20.8577 13.7338 20.3522 14.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center">
                <button class="focus:shadow-outline w-[150px] rounded bg-[#C8AC5E] px-4 py-2 font-bold text-white hover:bg-[#B7A05E] focus:outline-none" type="submit">
                    Login
                </button>
            </div>
            <div class="mt-5 items-center justify-center text-center text-sm">
                <div class="">Belum Punya Aku? <a href="/Register">Buat Akun!</a></div>
            </div>
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
