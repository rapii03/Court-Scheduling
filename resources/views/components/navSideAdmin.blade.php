<style>
        .iconDashboard {
            transition: stroke 0.3s;
        }

        .group:hover .iconDashboard {
            stroke: #297785;
        }

        .iconDataDosen {
            transition: stroke 0.3s;
        }

        .group:hover .iconDataDosen {
            stroke: #297785;
        }

        .iconPendaftaran {
            transition: stroke 0.3s;
        }

        .group:hover .iconPendaftaran {
            stroke: #297785;
        }

        .iconBuatPenjadwalan {
            transition: stroke 0.3s;
        }

        .group:hover .iconBuatPenjadwalan {
            stroke: #297785;
        }

        .iconJadwal {
            transition: stroke 0.3s;
        }

        .group:hover .iconJadwal {
            stroke: #297785;
        }

        .iconDataUser {
            transition: stroke 0.3s;
        }

        .group:hover .iconDataUser {
            stroke: #297785;
        }
    </style>

    <aside id="default-sidebar" class="z-70 fixed left-0 top-0 h-screen w-[228px] -translate-x-full transition-transform sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full bg-[#1F5F92] py-6">
            <div class="mb-5">
                <a href="#">
                <div class="m-auto flex justify-center text-center text-[30px] font-bold text-black">Scheduler <span class="text-white">IF</span>
                </div>
                </a>
            </div>
            <div class="m-auto flex items-center justify-center text-white">
                <ul class='w-[95%]'>
                    <div class="hide-scrollbar h-[500px] overflow-y-auto">
                        @php
                            $dashboard = ['Dashboard'];
                            if (isset($id)) {
                                array_push($dashboard, '/Dashboard' . $id);
                            }
                        @endphp
                        {{-- @dd($id) --}}
                        <li class="inset-x-0 mt-2 flex items-center justify-center rounded-lg bg-[#EBEBEB]">
                            <a href="/Dashboard" type="button" class="@if (in_array(Request::path(), $dashboard)) rounded-lg bg-[#C8AC5E] text-white focus:z-10 focus:ring-1 focus:ring-white focus:text-white
        @else
            text-black rounded-lg hover:bg-[#C8AC5E] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif group flex h-[45px] w-full gap-6 p-1 pl-5 text-lg font-medium">
                                <div class="flex items-center justify-center text-start">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.41715 2.61289V6.79349C9.41716 7.13965 9.3488 7.4824 9.21601 7.80207C9.08321 8.12175 8.88859 8.41205 8.64332 8.65632C8.39805 8.90059 8.10696 9.09402 7.78674 9.2255C7.46653 9.35699 7.1235 9.42395 6.77734 9.42253H2.61829C2.27307 9.42462 1.93098 9.35699 1.61253 9.22368C1.29408 9.09038 1.00582 8.89414 0.765037 8.64674C0.521062 8.40395 0.327789 8.11508 0.196457 7.79693C0.0651255 7.47877 -0.00164409 7.13768 3.07445e-05 6.79349V2.62367C2.49043e-05 1.92826 0.275532 1.26119 0.766244 0.768455C1.25696 0.275724 1.9229 -0.00252109 2.61829 -0.00537109H6.78812C7.13298 -0.00503975 7.47435 0.0636978 7.79246 0.196862C8.11058 0.330026 8.39911 0.524971 8.64137 0.77041C8.88697 1.0103 9.08213 1.29688 9.21535 1.6133C9.34858 1.92971 9.41719 2.26957 9.41715 2.61289ZM21 2.62367V6.79349C20.9944 7.48717 20.7171 8.15101 20.2276 8.64253C19.7381 9.13406 19.0754 9.41409 18.3817 9.42253H14.2011C13.5042 9.41826 12.8361 9.14406 12.3371 8.65752C12.0933 8.41238 11.9002 8.12156 11.7689 7.8017C11.6377 7.48184 11.5708 7.13923 11.5721 6.79349V2.62367C11.5706 2.27853 11.6385 1.93663 11.7718 1.61826C11.9051 1.2999 12.101 1.01157 12.3479 0.77041C12.5901 0.524971 12.8787 0.330026 13.1968 0.196862C13.5149 0.0636978 13.8563 -0.00503975 14.2011 -0.00537109H18.371C19.0665 0.000260939 19.7319 0.279056 20.2237 0.770881C20.7156 1.2627 20.9944 1.92814 21 2.62367ZM21 14.2065V18.3763C20.9944 19.07 20.7171 19.7339 20.2276 20.2254C19.7381 20.7169 19.0754 20.9969 18.3817 21.0054H14.2011C13.4998 21.0125 12.8233 20.7458 12.3156 20.2619C12.0708 20.0175 11.8771 19.7268 11.7457 19.4068C11.6144 19.0868 11.548 18.7438 11.5506 18.3979V14.2281C11.5491 13.8829 11.6171 13.541 11.7503 13.2227C11.8836 12.9043 12.0795 12.616 12.3263 12.3748C12.5686 12.1294 12.8572 11.9345 13.1753 11.8013C13.4934 11.6682 13.8347 11.5994 14.1796 11.599H18.3494C19.0449 11.6047 19.7104 11.8835 20.2022 12.3753C20.694 12.8671 20.9728 13.5325 20.9785 14.2281L21 14.2065ZM9.41715 14.2173V18.3871C9.40868 19.0826 9.12716 19.7469 8.63332 20.2367C8.13947 20.7265 7.47289 21.0026 6.77734 21.0054H2.61829C2.27406 21.0068 1.93295 20.94 1.61464 20.809C1.29634 20.6779 1.00714 20.4851 0.763724 20.2417C0.520311 19.9983 0.327506 19.7091 0.196431 19.3908C0.0653556 19.0725 -0.00139467 18.7313 3.07445e-05 18.3871V14.2173C0.00280654 13.5217 0.278873 12.8552 0.768683 12.3613C1.25849 11.8675 1.92279 11.586 2.61829 11.5775H6.78812C7.48677 11.5835 8.15552 11.8618 8.65215 12.3533C9.14358 12.849 9.41864 13.5192 9.41715 14.2173Z" fill="currentColor" />
                                    </svg>
                                </div>
                                <div class="flex items-center justify-center text-start text-[14px] font-bold">Dashboard
                                </div>
                            </a>
                        </li>
                        <li class="ml-2 mt-10 flex">
                            <div class="flex pb-2 text-start text-[15px] font-bold">Menu User</div>
                        </li>
                        <li class="inset-x-0 flex items-center justify-center rounded-lg bg-[#EBEBEB]">
                            @php
                                $activePagePath2 = ['DataDosen', 'DataDosen/Tambah', 'DataDosen/Edit', 'DataDosen/AturJadwal'];
                                if (isset($id)) {
                                    array_push($activePagePath2, 'admin-guru-slb/edit/' . $id);
                                }
                            @endphp
                            <a href="/DataDosen" type="button" class="@if (in_array(Request::path(), $activePagePath2)) rounded-lg bg-[#C8AC5E] text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            text-black rounded-lg hover:bg-[#C8AC5E] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif group flex h-[45px] w-full gap-6 p-1 pl-5 text-lg font-medium">
                                <div class="flex items-center justify-center text-start">
                                    <svg width="23" height="27" viewBox="0 0 23 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.0979 10.35V1.94995H18.325L22 5.62495V25.05H14.65M16.75 1.94995V7.19995H22M6.25 18.75C5.83634 18.75 5.42672 18.6685 5.04455 18.5102C4.66237 18.3519 4.31512 18.1198 4.02261 17.8273C3.73011 17.5348 3.49808 17.1876 3.33978 16.8054C3.18148 16.4232 3.1 16.0136 3.1 15.6C3.1 15.1863 3.18148 14.7767 3.33978 14.3945C3.49808 14.0123 3.73011 13.6651 4.02261 13.3726C4.31512 13.0801 4.66237 12.848 5.04455 12.6897C5.42672 12.5314 5.83634 12.45 6.25 12.45C7.08543 12.45 7.88665 12.7818 8.47739 13.3726C9.06813 13.9633 9.4 14.7645 9.4 15.6C9.4 16.4354 9.06813 17.2366 8.47739 17.8273C7.88665 18.4181 7.08543 18.75 6.25 18.75ZM6.25 18.75C4.15 18.75 1 19.8 1 24V25.05H11.5V24C11.5 19.8 8.35 18.75 6.25 18.75Z" stroke="currentColor" stroke-width="2" />
                                    </svg>
                                </div>
                                <div class="flex items-center justify-center text-start text-[14px] font-bold">Data
                                    Dosen</div>
                            </a>
                        </li>
                        <li class="inset-x-0 mt-2 flex items-center justify-center rounded-lg bg-[#EBEBEB]">
                            @php
                                $activePagePath3 = ['DataPendaftaran', 'DataPendaftaran/SeminarProposal', 'DataPendaftaran/SeminarProposal/DataDokumen', 'DataPendaftaran/SidangAkhir', 'DataPendaftaran/SidangAkhir/DataDokumen'];
                                if (isset($id)) {
                                    array_push($activePagePath3, 'admin-tendik-slb/edit/' . $id);
                                }
                            @endphp
                            <a href="/DataPendaftaran" type="button" class="@if (in_array(Request::path(), $activePagePath3)) rounded-lg bg-[#C8AC5E] text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            text-black rounded-lg hover:bg-[#C8AC5E] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif group flex h-[45px] w-full gap-6 p-1 pl-5 text-lg font-medium">
                                <div class="flex items-center justify-center text-start">
                                    <svg width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.3636 10.409C10.815 10.409 5.72727 11.6785 5.72727 14.2272V16.1363H21V14.2272C21 11.6785 15.9123 10.409 13.3636 10.409ZM4.77273 6.5908V3.72716H2.86364V6.5908H0V8.49989H2.86364V11.3635H4.77273V8.49989H7.63636V6.5908M13.3636 8.49989C14.3763 8.49989 15.3474 8.09762 16.0635 7.38157C16.7795 6.66552 17.1818 5.69435 17.1818 4.68171C17.1818 3.66906 16.7795 2.69789 16.0635 1.98184C15.3474 1.2658 14.3763 0.863525 13.3636 0.863525C12.351 0.863525 11.3798 1.2658 10.6638 1.98184C9.94773 2.69789 9.54545 3.66906 9.54545 4.68171C9.54545 5.69435 9.94773 6.66552 10.6638 7.38157C11.3798 8.09762 12.351 8.49989 13.3636 8.49989Z" fill="currentColor" />
                                    </svg>
                                </div>
                                <div class="flex items-center justify-center text-start text-[14px] font-bold">Data
                                    Pendaftar
                                </div>
                            </a>
                        </li>
                        {{-- <li class="flex items-center justify-center inset-x-0 mt-2 bg-[#EBEBEB] rounded-lg">
                            @php
                                $activePagePath4 = ['BuatPenjadwalan'];
                                if (isset($id)) {
                                    array_push($activePagePath4, 'BuatPenjadwalan/edit/' . $id);
                                }
                            @endphp
                            <a href="/BuatPenjadwalan" type="button"
                                class="group w-full h-[45px] p-1 pl-5 flex gap-6 text-lg font-medium
        @if (in_array(Request::path(), $activePagePath4)) rounded-lg bg-[#C8AC5E] text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            text-black rounded-lg hover:bg-[#C8AC5E] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">
                                <div class="text-start justify-center items-center flex">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.85 2.1H16.8V1.05C16.8 0.42 16.38 0 15.75 0C15.12 0 14.7 0.42 14.7 1.05V2.1H6.3V1.05C6.3 0.42 5.88 0 5.25 0C4.62 0 4.2 0.42 4.2 1.05V2.1H3.15C1.365 2.1 0 3.465 0 5.25V6.3H21V5.25C21 3.465 19.635 2.1 17.85 2.1ZM0 17.85C0 19.635 1.365 21 3.15 21H17.85C19.635 21 21 19.635 21 17.85V8.4H0V17.85ZM15.75 10.5C16.38 10.5 16.8 10.92 16.8 11.55C16.8 12.18 16.38 12.6 15.75 12.6C15.12 12.6 14.7 12.18 14.7 11.55C14.7 10.92 15.12 10.5 15.75 10.5ZM15.75 14.7C16.38 14.7 16.8 15.12 16.8 15.75C16.8 16.38 16.38 16.8 15.75 16.8C15.12 16.8 14.7 16.38 14.7 15.75C14.7 15.12 15.12 14.7 15.75 14.7ZM10.5 10.5C11.13 10.5 11.55 10.92 11.55 11.55C11.55 12.18 11.13 12.6 10.5 12.6C9.87 12.6 9.45 12.18 9.45 11.55C9.45 10.92 9.87 10.5 10.5 10.5ZM10.5 14.7C11.13 14.7 11.55 15.12 11.55 15.75C11.55 16.38 11.13 16.8 10.5 16.8C9.87 16.8 9.45 16.38 9.45 15.75C9.45 15.12 9.87 14.7 10.5 14.7ZM5.25 10.5C5.88 10.5 6.3 10.92 6.3 11.55C6.3 12.18 5.88 12.6 5.25 12.6C4.62 12.6 4.2 12.18 4.2 11.55C4.2 10.92 4.62 10.5 5.25 10.5ZM5.25 14.7C5.88 14.7 6.3 15.12 6.3 15.75C6.3 16.38 5.88 16.8 5.25 16.8C4.62 16.8 4.2 16.38 4.2 15.75C4.2 15.12 4.62 14.7 5.25 14.7Z"
                                            fill="currentColor" />
                                    </svg>
                                </div>
                                <div class="text-start justify-center items-center flex text-[14px] font-bold">Buat
                                    Penjadwalan
                                </div>
                            </a>
                        </li> --}}
                        <li class="inset-x-0 mt-2 flex items-center justify-center rounded-lg bg-[#EBEBEB]">
                            @php
                                $activePagePath5 = ['Jadwal', 'EditJadwal'];
                                if (isset($id)) {
                                    array_push($activePagePath5, 'Jadwal/edit/' . $id);
                                }
                            @endphp
                            <a href="/Jadwal" type="button" class="@if (in_array(Request::path(), $activePagePath5)) rounded-lg bg-[#C8AC5E] text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            text-black rounded-lg hover:bg-[#C8AC5E] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif group flex h-[45px] w-full gap-6 p-1 pl-5 text-lg font-medium">
                                <div class="flex items-center justify-center text-start">
                                    <svg width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.25 1.75H16.5V0.4375C16.5 0.334375 16.4156 0.25 16.3125 0.25H15C14.8969 0.25 14.8125 0.334375 14.8125 0.4375V1.75H11.3438V0.4375C11.3438 0.334375 11.2594 0.25 11.1562 0.25H9.84375C9.74063 0.25 9.65625 0.334375 9.65625 0.4375V1.75H6.1875V0.4375C6.1875 0.334375 6.10313 0.25 6 0.25H4.6875C4.58437 0.25 4.5 0.334375 4.5 0.4375V1.75H0.75C0.335156 1.75 0 2.08516 0 2.5V16C0 16.4148 0.335156 16.75 0.75 16.75H20.25C20.6648 16.75 21 16.4148 21 16V2.5C21 2.08516 20.6648 1.75 20.25 1.75ZM8.4375 12.625C8.4375 12.7281 8.35312 12.8125 8.25 12.8125H3.9375C3.83438 12.8125 3.75 12.7281 3.75 12.625V11.5C3.75 11.3969 3.83438 11.3125 3.9375 11.3125H8.25C8.35312 11.3125 8.4375 11.3969 8.4375 11.5V12.625ZM8.4375 9.4375C8.4375 9.54063 8.35312 9.625 8.25 9.625H3.9375C3.83438 9.625 3.75 9.54063 3.75 9.4375V8.3125C3.75 8.20937 3.83438 8.125 3.9375 8.125H8.25C8.35312 8.125 8.4375 8.20937 8.4375 8.3125V9.4375ZM17.2148 7.29766L13.3477 12.6578C13.3131 12.7057 13.2677 12.7447 13.2151 12.7717C13.1626 12.7986 13.1044 12.8126 13.0453 12.8126C12.9863 12.8126 12.928 12.7986 12.8755 12.7717C12.8229 12.7447 12.7775 12.7057 12.743 12.6578L10.0664 8.95C9.97734 8.82578 10.0664 8.65234 10.2188 8.65234H11.5055C11.625 8.65234 11.7375 8.71094 11.8078 8.80703L13.0453 10.5203L15.4758 7.15234C15.5461 7.05391 15.6586 6.99766 15.7781 6.99766H17.0625C17.2148 7 17.3039 7.17344 17.2148 7.29766Z" fill="currentColor" />
                                    </svg>
                                </div>
                                <div class="flex items-center justify-center text-start text-[14px] font-bold">Jadwal
                                </div>
                            </a>
                        </li>
                        <li class="inset-x-0 mt-2 flex items-center justify-center rounded-lg bg-[#EBEBEB]">
                            @php
                                $activePagePath6 = ['DataUser', 'DataUser/Dokumen'];
                                if (isset($id)) {
                                    array_push($activePagePath6, '/DataUser/edit/' . $id);
                                }
                            @endphp
                            <a href="/DataUser" type="button" class="@if (in_array(Request::path(), $activePagePath6)) rounded-lg bg-[#C8AC5E] text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            text-black rounded-lg hover:bg-[#C8AC5E] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif group flex h-[45px] w-full gap-6 p-1 pl-5 text-lg font-medium">
                                <div class="flex items-center justify-center text-start">
                                    <svg width="21" height="23" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.25 5.66675C5.25 8.56125 7.6055 10.9167 10.5 10.9167C13.3945 10.9167 15.75 8.56125 15.75 5.66675C15.75 2.77225 13.3945 0.416748 10.5 0.416748C7.6055 0.416748 5.25 2.77225 5.25 5.66675ZM19.8333 22.5834H21V21.4167C21 16.9146 17.3355 13.2501 12.8333 13.2501H8.16667C3.66333 13.2501 0 16.9146 0 21.4167V22.5834H19.8333Z" fill="currentColor" />
                                    </svg>
                                </div>
                                <div class="flex items-center justify-center text-start text-[14px] font-bold">Data User
                                </div>
                            </a>
                        </li>
                    </div>
                    <li class="absolute -inset-x-0 bottom-0 w-full">
                        <a id="logOut" href="/Logout" class="btn m-auto mb-5 flex w-32 items-center justify-center gap-3 rounded-md border-none bg-[#C8AC5E] p-2 py-1 pb-2 pt-2 font-bold text-white hover:bg-[#D51717]">
                            Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
