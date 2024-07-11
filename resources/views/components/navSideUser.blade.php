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

    <aside id="default-sidebar" class="fixed left-0 top-0 z-30 h-screen w-[228px] -translate-x-full transition-transform sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full bg-[#1F5F92] py-6">
            <div class="mb-5">
                <a href="#">
                    <div class="m-auto flex justify-center text-center text-[30px] font-bold text-black">Scheduler <span class="text-white">IF</span>
                    </div>
                </a>
            </div>
            <div class="m-auto flex items-center justify-center text-white">
                <ul class='w-[85%]'>
                    <div class="hide-scrollbar mt-10 h-[500px] overflow-y-auto">
                        <li class="inset-x-0 flex items-center justify-center rounded-lg bg-[#EBEBEB]">
                            @php
                                $activePagePath2 = ['DashboardUser'];
                                if (isset($id)) {
                                    array_push($activePagePath2, '' . $id);
                                }
                            @endphp
                            <a href="/DashboardUser" type="button" class="@if (in_array(Request::path(), $activePagePath2)) rounded-lg bg-white text-[#C8AC5E]
        @else
        text-black rounded-lg hover:bg-white hover:text-[#C8AC5E] @endif group flex h-[45px] w-full gap-6 p-1 pl-5 text-lg font-medium">
                                <div class="flex items-center justify-center text-start">
                                    <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.3837 7.22897L6.67821 1.63117L0.972756 7.22897L0.452118 6.49364L6.67821 0.385254L12.9043 6.49367L12.3837 7.22897ZM11.0603 13.1931L7.7629 13.1931V8.5081H5.59353V13.1931H2.29609V5.10604H3.10961V12.2358H4.78002V7.55071H8.57642V12.2358H10.2468V5.10604H11.0603L11.0603 13.1931Z" fill="currentColor" />
                                    </svg>
                                </div>
                                <div class="flex items-center justify-center text-start text-[14px] font-bold">Home
                                </div>
                            </a>
                        </li>
                        <li class="inset-x-0 mt-2 flex items-center justify-center rounded-lg bg-[#EBEBEB]">
                            @php
                                $activePagePath3 = ['ProfileUser'];
                                if (isset($id)) {
                                    array_push($activePagePath3, '' . $id);
                                }
                            @endphp
                            <a href="/ProfileUser" type="button" class="@if (in_array(Request::path(), $activePagePath3)) rounded-lg bg-white text-[#C8AC5E]
        @else
            text-black rounded-lg hover:bg-white hover:text-[#C8AC5E] @endif group flex h-[45px] w-full gap-6 p-1 pl-5 text-lg font-medium">
                                <div class="flex items-center justify-center text-start">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7 2.33317C6.18377 2.33302 5.38178 2.54696 4.67408 2.95362C3.96638 3.36029 3.37771 3.94546 2.96684 4.65073C2.55597 5.356 2.33726 6.1567 2.33255 6.97291C2.32784 7.78912 2.53729 8.59229 2.94 9.30225C3.21219 8.94851 3.56208 8.66209 3.96263 8.46516C4.36318 8.26822 4.80365 8.16604 5.25 8.1665H8.75C9.19634 8.16604 9.63682 8.26822 10.0374 8.46516C10.4379 8.66209 10.7878 8.94851 11.06 9.30225C11.4627 8.59229 11.6722 7.78912 11.6674 6.97291C11.6627 6.1567 11.444 5.356 11.0332 4.65073C10.6223 3.94546 10.0336 3.36029 9.32591 2.95362C8.61821 2.54696 7.81622 2.33302 7 2.33317ZM11.6334 10.5442C12.4133 9.5274 12.8352 8.28129 12.8333 6.99984C12.8333 3.77809 10.2217 1.1665 7 1.1665C3.77825 1.1665 1.16666 3.77809 1.16666 6.99984C1.16474 8.28129 1.58661 9.52742 2.36658 10.5442L2.36366 10.5547L2.57075 10.7956C3.11785 11.4352 3.79714 11.9486 4.5618 12.3004C5.32646 12.6521 6.1583 12.8339 7 12.8332C8.18261 12.8353 9.33765 12.4761 10.3104 11.8036C10.7251 11.5171 11.1012 11.1783 11.4292 10.7956L11.6363 10.5547L11.6334 10.5442ZM7 3.49984C6.53587 3.49984 6.09075 3.68421 5.76256 4.0124C5.43437 4.34059 5.25 4.78571 5.25 5.24984C5.25 5.71397 5.43437 6.15909 5.76256 6.48727C6.09075 6.81546 6.53587 6.99984 7 6.99984C7.46413 6.99984 7.90925 6.81546 8.23743 6.48727C8.56562 6.15909 8.75 5.71397 8.75 5.24984C8.75 4.78571 8.56562 4.34059 8.23743 4.0124C7.90925 3.68421 7.46413 3.49984 7 3.49984Z" fill="currentColor" />
                                    </svg>
                                </div>
                                <div class="flex items-center justify-center text-start text-[14px] font-bold">Profile
                                </div>
                            </a>
                        </li>
                        <li class="inset-x-0 mt-2 flex items-center justify-center rounded-lg bg-[#EBEBEB]">
                            @php
                                $activePagePath4 = ['DaftarSidang', 'DaftarSidang/FormSidang'];
                                if (isset($id)) {
                                    array_push($activePagePath4, '' . $id);
                                }
                            @endphp
                            <a href="/DaftarSidang" type="button" class="@if (in_array(Request::path(), $activePagePath4)) rounded-lg bg-white text-[#C8AC5E]
        @else
            text-black rounded-lg hover:bg-white hover:text-[#C8AC5E] @endif group flex h-[45px] w-full gap-6 p-1 pl-5 text-lg font-medium">
                                <div class="flex items-center justify-center text-start">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.83546 1.8354C1.89015 1.78072 1.96433 1.75 2.04167 1.75C2.119 1.75 2.19318 1.78072 2.24787 1.8354L3.5 3.08752V2.33327C3.5 2.25592 3.53073 2.18173 3.58543 2.12703C3.64012 2.07233 3.71431 2.0416 3.79167 2.0416C3.86902 2.0416 3.94321 2.07233 3.9979 2.12703C4.0526 2.18173 4.08333 2.25592 4.08333 2.33327V4.08327H2.33333C2.25598 4.08327 2.18179 4.05254 2.12709 3.99784C2.07239 3.94315 2.04167 3.86896 2.04167 3.7916C2.04167 3.71425 2.07239 3.64006 2.12709 3.58536C2.18179 3.53067 2.25598 3.49994 2.33333 3.49994H3.08758L1.83546 2.24781C1.78078 2.19312 1.75006 2.11894 1.75006 2.0416C1.75006 1.96426 1.78078 1.89009 1.83546 1.8354ZM12.1645 12.1645C12.1098 12.2192 12.0357 12.2499 11.9583 12.2499C11.881 12.2499 11.8068 12.2192 11.7521 12.1645L10.5 10.9124V11.6666C10.5 11.744 10.4693 11.8181 10.4146 11.8728C10.3599 11.9275 10.2857 11.9583 10.2083 11.9583C10.131 11.9583 10.0568 11.9275 10.0021 11.8728C9.94739 11.8181 9.91667 11.744 9.91667 11.6666V9.9166H11.6667C11.744 9.9166 11.8182 9.94733 11.8729 10.002C11.9276 10.0567 11.9583 10.1309 11.9583 10.2083C11.9583 10.2856 11.9276 10.3598 11.8729 10.4145C11.8182 10.4692 11.744 10.4999 11.6667 10.4999H10.9124L12.1645 11.7521C12.2192 11.8068 12.2499 11.8809 12.2499 11.9583C12.2499 12.0356 12.2192 12.1098 12.1645 12.1645ZM1.83546 12.1645C1.78078 12.1098 1.75006 12.0356 1.75006 11.9583C1.75006 11.8809 1.78078 11.8068 1.83546 11.7521L3.08758 10.4999H2.33333C2.25598 10.4999 2.18179 10.4692 2.12709 10.4145C2.07239 10.3598 2.04167 10.2856 2.04167 10.2083C2.04167 10.1309 2.07239 10.0567 2.12709 10.002C2.18179 9.94733 2.25598 9.9166 2.33333 9.9166H4.08333V11.6666C4.08333 11.744 4.0526 11.8181 3.9979 11.8728C3.94321 11.9275 3.86902 11.9583 3.79167 11.9583C3.71431 11.9583 3.64012 11.9275 3.58543 11.8728C3.53073 11.8181 3.5 11.744 3.5 11.6666V10.9124L2.24787 12.1645C2.19318 12.2192 2.119 12.2499 2.04167 12.2499C1.96433 12.2499 1.89015 12.2192 1.83546 12.1645ZM12.1645 1.8354C12.2192 1.89009 12.2499 1.96426 12.2499 2.0416C12.2499 2.11894 12.2192 2.19312 12.1645 2.24781L10.9124 3.49994H11.6667C11.744 3.49994 11.8182 3.53067 11.8729 3.58536C11.9276 3.64006 11.9583 3.71425 11.9583 3.7916C11.9583 3.86896 11.9276 3.94315 11.8729 3.99784C11.8182 4.05254 11.744 4.08327 11.6667 4.08327H9.91667V2.33327C9.91667 2.25592 9.94739 2.18173 10.0021 2.12703C10.0568 2.07233 10.131 2.0416 10.2083 2.0416C10.2857 2.0416 10.3599 2.07233 10.4146 2.12703C10.4693 2.18173 10.5 2.25592 10.5 2.33327V3.08752L11.7521 1.8354C11.8068 1.78072 11.881 1.75 11.9583 1.75C12.0357 1.75 12.1098 1.78072 12.1645 1.8354Z" fill="currentColor" />
                                        <path d="M10.2375 5.68734C10.2375 6.25142 9.78076 6.70817 9.21668 6.70817C9.08261 6.70821 8.94985 6.68183 8.82598 6.63054C8.70211 6.57925 8.58955 6.50406 8.49475 6.40926C8.39995 6.31446 8.32476 6.20191 8.27347 6.07804C8.22218 5.95417 8.19581 5.82141 8.19584 5.68734C8.19584 5.12325 8.65259 4.6665 9.21668 4.6665C9.78076 4.6665 10.2375 5.12325 10.2375 5.68734ZM5.86251 5.68734C5.86251 6.25142 5.40576 6.70817 4.84168 6.70817C4.70761 6.70821 4.57485 6.68183 4.45098 6.63054C4.32711 6.57925 4.21455 6.50406 4.11975 6.40926C4.02495 6.31446 3.94976 6.20191 3.89847 6.07804C3.84718 5.95417 3.82081 5.82141 3.82084 5.68734C3.82084 5.12325 4.27759 4.6665 4.84168 4.6665C5.40576 4.6665 5.86251 5.12325 5.86251 5.68734ZM7.72918 5.39567C7.72918 5.58906 7.65235 5.77452 7.51561 5.91127C7.37886 6.04801 7.1934 6.12484 7.00001 6.12484C6.80662 6.12484 6.62116 6.04801 6.48441 5.91127C6.34767 5.77452 6.27084 5.58906 6.27084 5.39567C6.27084 5.20228 6.34767 5.01682 6.48441 4.88007C6.62116 4.74333 6.80662 4.6665 7.00001 4.6665C7.1934 4.6665 7.37886 4.74333 7.51561 4.88007C7.65235 5.01682 7.72918 5.20228 7.72918 5.39567ZM7.29168 8.41675C7.29168 7.66863 8.45747 7.2915 9.04168 7.2915C9.62559 7.2915 10.7917 7.66863 10.7917 8.41675V9.0415H7.29168V8.41675ZM3.20834 8.41675C3.20834 7.66863 4.37443 7.2915 4.95834 7.2915C5.54255 7.2915 6.70834 7.66863 6.70834 8.41675V9.0415H3.20834V8.41675Z" fill="currentColor" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.17774 6.84156C8.11153 6.86606 8.04649 6.89173 7.98232 6.91914C7.69211 7.0431 7.39899 7.21081 7.17119 7.4351C7.10994 7.49518 7.05219 7.56081 6.99999 7.63256C6.94837 7.5622 6.89111 7.49616 6.82878 7.4351C6.60128 7.21081 6.30786 7.0431 6.01765 6.91885C5.95349 6.89173 5.88844 6.86606 5.82224 6.84156C6.19965 6.64614 6.68499 6.54785 6.99999 6.54785C7.31499 6.54785 7.80032 6.64614 8.17774 6.84156Z" fill="currentColor" />
                                    </svg>
                                </div>
                                <div class="flex items-center justify-center text-start text-[14px] font-bold">Daftar
                                    Sidang
                                </div>
                            </a>
                        </li>
                        <li class="inset-x-0 mt-2 flex items-center justify-center rounded-lg bg-[#EBEBEB]">
                            @php
                                $activePagePath5 = ['JadwalSidang'];
                                if (isset($id)) {
                                    array_push($activePagePath5, 'Jadwal/edit/' . $id);
                                }
                            @endphp
                            <a href="/JadwalSidang" type="button" class="@if (in_array(Request::path(), $activePagePath5)) rounded-lg bg-white text-[#C8AC5E]
        @else
            text-black rounded-lg hover:bg-white hover:text-[#C8AC5E] @endif group flex h-[45px] w-full gap-6 p-1 pl-5 text-lg font-medium">
                                <div class="flex items-center justify-center text-start">
                                    <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.7814 10.1784C6.53635 10.1784 7.14837 10.8987 7.14837 11.7873C7.14837 12.6758 6.53635 13.3961 5.7814 13.3961C5.02645 13.3961 4.41442 12.6758 4.41442 11.7873C4.4153 10.8991 5.02679 10.1795 5.78132 10.1784H5.7814ZM5.7814 12.4889C6.11063 12.4889 6.37753 12.1747 6.37753 11.7873C6.37753 11.3998 6.11064 11.0857 5.78141 11.0857C5.45218 11.0857 5.18528 11.3998 5.18528 11.7873C5.18559 12.1746 5.45231 12.4885 5.78139 12.4889H5.78142L5.7814 12.4889ZM7.63657 14.6783L6.86573 14.6783C6.86573 13.9735 6.38026 13.4021 5.78141 13.4021C5.18256 13.4021 4.69708 13.9735 4.69708 14.6783H3.92621C3.92826 13.4722 4.75701 12.4947 5.78093 12.4889H5.7814C6.80581 12.4947 7.63457 13.4722 7.63658 14.6781L7.63657 14.6783ZM9.70761 10.1784C10.4626 10.1784 11.0746 10.8987 11.0746 11.7873C11.0746 12.6758 10.4626 13.3961 9.70761 13.3961C8.95266 13.3961 8.34063 12.6758 8.34063 11.7873C8.34151 10.8991 8.953 10.1795 9.70753 10.1784H9.70761ZM9.70761 12.4889C10.0368 12.4889 10.3037 12.1747 10.3037 11.7873C10.3037 11.3998 10.0368 11.0857 9.70761 11.0857C9.37838 11.0857 9.11148 11.3998 9.11148 11.7873C9.11178 12.1746 9.37849 12.4885 9.70757 12.4889H9.70761V12.4889ZM11.5628 14.6783H10.792C10.792 13.9718 10.3053 13.3991 9.70505 13.3991C9.10478 13.3991 8.61815 13.9718 8.61815 14.6783H7.84729C7.84729 13.4708 8.67902 12.4919 9.70503 12.4919C10.731 12.4919 11.5628 13.4708 11.5628 14.6783H11.5628ZM1.8552 10.1784C2.61015 10.1784 3.22217 10.8987 3.22217 11.7873C3.22217 12.6758 2.61015 13.3961 1.8552 13.3961C1.10025 13.3961 0.488221 12.6758 0.488221 11.7873C0.489098 10.8991 1.10059 10.1795 1.85512 10.1784H1.8552ZM1.8552 12.4889C2.18443 12.4889 2.45133 12.1747 2.45133 11.7873C2.45133 11.3998 2.18444 11.0857 1.85521 11.0857C1.52598 11.0857 1.25908 11.3998 1.25908 11.7873C1.25939 12.1746 1.52612 12.4885 1.85519 12.4889H1.85522L1.8552 12.4889ZM3.71552 14.6783H2.94468C2.94468 13.9718 2.45805 13.3991 1.85777 13.3991C1.2575 13.3991 0.77087 13.9718 0.77087 14.6783H0C0 13.4708 0.831765 12.4919 1.85776 12.4919C2.88376 12.4919 3.7155 13.4708 3.7155 14.6783H3.71552ZM1.36699 0.942911L10.1958 0.942911C10.9504 0.943944 11.5619 1.66362 11.5628 2.55163V5.4392C11.5628 5.88292 11.4104 6.28478 11.1639 6.57623L11.164 6.57616C10.9189 6.86608 10.5796 7.0455 10.2048 7.0455H9.59969V8.58174L7.62785 7.03339H6.92275L5.78141 8.37671L4.64002 7.03339H3.93495L1.96313 8.58173V7.04549H1.35804C0.983165 7.04549 0.643894 6.86608 0.398833 6.57622L0.398776 6.57615C0.152335 6.28454 0 5.88254 0 5.43869V5.43657V5.43668V2.55171C0.000877582 1.66358 0.61237 0.943904 1.3669 0.942871H1.36698L1.36699 0.942911ZM10.201 6.13828H10.2025C10.3652 6.13828 10.5124 6.06035 10.6187 5.93449L10.6188 5.93445C10.7258 5.80793 10.792 5.63345 10.792 5.44077V5.43647V5.43669V2.55172C10.7917 2.16437 10.5249 1.85047 10.1959 1.85012L1.36698 1.85012C1.03787 1.85047 0.771155 2.16437 0.770859 2.55167V5.44C0.770859 5.63293 0.837008 5.80767 0.944073 5.93449L0.944039 5.93445C1.05037 6.06035 1.19763 6.13828 1.36032 6.13828H2.73395V6.88825L3.70163 6.12618L4.95914 6.12618L5.78139 7.09388L6.60362 6.12618H7.86164L8.82881 6.88825V6.13828H10.201ZM6.22849 3.13235H6.22575C6.04599 3.13235 5.88583 3.23107 5.78229 3.38498L5.7814 3.38636C5.67695 3.23107 5.5168 3.13234 5.33706 3.13234H5.33415H5.3343C5.05047 3.13234 4.8204 3.40313 4.8204 3.73715C4.79984 4.5718 5.78141 4.86211 5.78141 4.86211C5.78141 4.86211 6.76293 4.5718 6.76293 3.70692C6.74911 3.38593 6.52459 3.13183 6.24966 3.13183C6.24221 3.13183 6.2348 3.13202 6.22744 3.13236L6.22849 3.13235ZM9.17314 3.13235C9.17011 3.13228 9.16653 3.13224 9.16291 3.13224C8.9854 3.13224 8.82755 3.23123 8.72701 3.38486L8.72605 3.38637C8.62161 3.23109 8.46145 3.13235 8.28171 3.13235H8.27881H8.27897C7.99515 3.13235 7.76507 3.40317 7.76507 3.73716C7.76507 4.60206 8.74662 4.89237 8.74662 4.89237C8.74662 4.89237 9.72817 4.60206 9.72817 3.73718V3.73525C9.72817 3.40121 9.49808 3.13043 9.21427 3.13043C9.19979 3.13043 9.18547 3.13113 9.1713 3.13251L9.17316 3.13238L9.17314 3.13235ZM3.28384 3.13235H3.28111C3.10135 3.13235 2.94119 3.23107 2.83764 3.38498L2.83676 3.38636C2.73525 3.23121 2.57739 3.13223 2.3999 3.13223C2.39629 3.13223 2.3927 3.13228 2.38912 3.13236H2.38966C2.10584 3.13236 1.87576 3.40314 1.87576 3.73718C1.87576 4.60205 2.85732 4.89234 2.85732 4.89234C2.85732 4.89234 3.83886 4.60205 3.83886 3.73718V3.73522C3.83886 3.40118 3.60878 3.13041 3.32496 3.13041C3.31049 3.13041 3.29616 3.1311 3.282 3.13248L3.28386 3.13232L3.28384 3.13235Z" fill="currentColor" />
                                    </svg>
                                </div>
                                <div class="flex items-center justify-center text-start text-[14px] font-bold">Jadwal
                                    Sidang
                                </div>
                            </a>
                        </li>
                        <hr class="bottom-0 left-0 mt-10 w-full border-white">
                    </div>
                    <li class="absolute -inset-x-0 bottom-0 w-full">
                        <a id="logOut" href="/Logout" class="btn m-auto mb-5 flex w-40 items-center justify-center gap-3 rounded-md border-[#F0394F] bg-white p-2 py-1 pb-2 pt-2 font-bold text-[#F0394F] hover:bg-[#D51717] hover:text-white">
                            Keluar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
