<div class="ml-[228px] bg-[#EBEBEB]">
    <div class="h-[94px] w-full">
        <div class="grid grid-flow-col justify-between pl-5 pr-5 pt-5">
            <div class="text-center">
                <img src="/logo_if.png" alt="">
            </div>
            <div class="m-auto flex justify-center gap-2">
                <div class="m-auto flex items-center justify-center text-center font-bold">admin</div>
                <div class="div">
                    @if (auth()->user()->lectureData->image)
                        <img src="{{ url(asset('storage/' . auth()->user()->lectureData->image)) }}" alt="" class="aspect-square w-[40px] rounded-full">
                    @else
                        <svg width="40" height="39" viewBox="0 0 40 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.0049 2C10.2552 2 2.35156 9.83501 2.35156 19.5C2.35156 29.1649 10.2552 37 20.0049 37C29.7545 37 37.6583 29.1649 37.6583 19.5C37.6583 9.83501 29.7545 2 20.0049 2Z" fill="black" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.36035 30.605C6.36035 30.605 10.2953 25.625 20.0046 25.625C29.714 25.625 33.6491 30.605 33.6491 30.605" fill="black" />
                            <path d="M6.36035 30.605C6.36035 30.605 10.2953 25.625 20.0046 25.625C29.714 25.625 33.6491 30.605 33.6491 30.605" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M20.005 19.5C22.93 19.5 25.301 17.1496 25.301 14.25C25.301 11.3505 22.93 9 20.005 9C17.08 9 14.709 11.3505 14.709 14.25C14.709 17.1496 17.08 19.5 20.005 19.5Z" fill="black" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    @endif
                </div>
            </div>
        </div>
    </div>
