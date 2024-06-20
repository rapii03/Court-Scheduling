<div class="fixed top-0 z-10 h-[94px] w-full bg-[#EBEBEB] lg:pl-[228px]">
    <div class="flex justify-between">
        <div class="w-[50%] p-6 text-center lg:w-full">
            <div class="flex gap-2">
                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 md:hidden" aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="absolute mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium rtl:space-x-reverse md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0 lg:hidden">
                        <li>
                            <a href="#" class="block rounded bg-blue-700 px-3 py-2 text-white md:bg-transparent md:p-0 md:text-blue-700" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="block rounded px-3 py-2 text-gray-900 hover:bg-gray-100 md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">Profile</a>
                        </li>
                        <li>
                            <a href="#" class="block rounded px-3 py-2 text-gray-900 hover:bg-gray-100 md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">Daftar
                                Sidang</a>
                        </li>
                        <li>
                            <a href="#" class="block rounded px-3 py-2 text-gray-900 hover:bg-gray-100 md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">Jadwal
                                Sidang</a>
                        </li>
                    </ul>
                </div>
                <img src="/logo_if.png" alt="">
            </div>
        </div>
        <div class="w-[50%] p-6 pt-8">
            <div class="flex justify-end">
                <a href="/ProfileUser">
                    <div class="flex items-center gap-2">
                        @if (auth()->user()->studentData->image)
                            <img class="h-10 w-10 rounded-full" data-tooltip-target="tooltip-jese" src="{{ url(asset('storage/' . auth()->user()->studentData->image)) }}" alt="Rounded avatar">
                        @else
                            <svg id="svg-icon" class="h-10 w-10 rounded-full" viewBox="0 0 169 184" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect rx="10" fill="#808080" />
                                <path d="M84.9948 21.0013C82.3315 21.0013 79.7011 21.4097 77.1825 22.0592C75.7095 22.4436 74.289 22.9484 72.8686 23.5401C72.3228 23.7703 71.7645 23.9147 71.2259 24.1748C71.0023 24.282 70.8314 24.4858 70.6097 24.5979C69.2735 25.2788 67.9655 26.0673 66.7056 26.9251C66.528 27.0429 66.2643 27.0157 66.0887 27.1367C65.7185 27.3983 65.4245 27.7066 65.0615 27.9826C64.0298 28.7449 62.9467 29.4449 61.9787 30.3101C61.0962 31.1272 60.3386 32.1542 59.5127 33.0601C56.7172 36.0111 54.2939 39.1334 52.3198 42.7926C48.9305 48.9087 46.4001 55.7944 45.3334 62.8907C44.8185 62.779 44.3464 62.7391 43.8946 62.8907C40.4415 64.0484 39.5906 70.8015 41.8396 77.9114C43.1594 82.0837 45.3551 85.3685 47.5936 87.2201C50.6008 99.2558 56.9691 109.289 65.2667 115.572V122.551L58.6907 129.321L45.5386 136.091C34.9032 141.514 24.3085 146.957 13.6856 152.38C7.79921 156.036 5.52147 163.212 6.0824 169.941C6.35639 174.179 4.86926 179.602 8.95942 182.425C12.8452 184.483 17.4813 183.143 21.7005 183.481C34.0411 183.475 46.3501 183.481 58.6907 183.481C76.2421 183.488 93.7475 183.481 111.299 183.481C126.864 183.481 142.384 183.509 157.949 183.481C163 183.116 164.4 177.625 163.907 173.326C163.999 167.017 164.361 159.949 159.593 155.129C155.7 151.053 150.163 149.442 145.415 146.666C138.438 143.112 131.422 139.646 124.451 136.091L111.299 129.321L104.723 122.551V115.572C113.022 109.289 119.387 99.2558 122.399 87.2201C124.635 85.3678 126.832 82.083 128.147 77.9114C130.396 70.8015 129.547 64.0484 126.095 62.8907C125.641 62.7391 125.174 62.779 124.655 62.8907C123.59 55.7944 121.058 48.9087 117.671 42.7926C115.698 39.1334 113.272 36.0111 110.477 33.0601C109.648 32.1542 108.892 31.1272 108.011 30.3101C107.971 30.2729 107.847 30.3473 107.807 30.3101C105.229 27.9413 102.369 26.1199 99.3832 24.5979C98.6269 24.2173 97.8904 23.8631 97.121 23.5401C96.5686 23.3098 96.036 23.1051 95.477 22.9054C93.8001 22.3064 92.0838 21.7304 90.3346 21.4245C90.203 21.4014 90.0584 21.4458 89.9268 21.4245C88.2894 21.1595 86.6717 20.9827 84.9948 21.0013Z" fill="#969BA0" />
                            </svg>
                        @endif
                        <div id="tooltip-jese" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                            {{ auth()->user()->name }}
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                        <div class="ml-2">{{ auth()->user()->name }}</div>
                        <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="-0.592698" x2="8.91291" y2="-0.592698" transform="matrix(0.742885 0.669419 0.742885 -0.669419 1.10968 0.580566)" stroke="black" stroke-width="1.1854" />
                            <line y1="-0.592698" x2="8.91291" y2="-0.592698" transform="matrix(0.742885 -0.669419 -0.742885 -0.669419 6.02246 6.54688)" stroke="black" stroke-width="1.1854" />
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
