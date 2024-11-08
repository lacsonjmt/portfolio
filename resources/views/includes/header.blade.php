<header class="w-screen z-10">
    <div id="bg-header" class="absolute w-full">
        <!-- <img class="w-full" src="{{ asset('/img/bg-header.svg') }}" alt=""> -->
        <!-- <svg id="bg-header-svg" class="lg:h-[85vh] w-full">
            <image href="{{ asset('/img/bg-header.svg') }}">
        </svg> -->
    </div>
    @include('includes.bgheader')
    <div id="nav-button" class="absolute drop-shadow-lg top-[2vh] inset-x-0 mx-auto w-[82.5px]">
        <svg id="circle-header" class="" width="90" height="95" viewBox="0 0 90 95" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_df_1_6)">
                <circle cx="41" cy="41" r="40" fill="url(#paint0_linear_1_6)"/>
            </g>
            <defs>
                <filter id="filter0_df_1_6" x="0.5" y="0.5" width="89.5" height="94.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dx="5" dy="10"/>
                    <feGaussianBlur stdDeviation="2"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_6"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_6" result="shape"/>
                    <feGaussianBlur stdDeviation="0.25" result="effect2_foregroundBlur_1_6"/>
                </filter>
                <linearGradient id="paint0_linear_1_6" x1="41" y1="1" x2="41" y2="81" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#91A8CC"/>
                    <stop offset="1" stop-color="#9FADCB"/>
                </linearGradient>
            </defs>
        </svg>
        <image src="{{ asset('/img/nav-button.gif') }}" alt="" class="absolute top-0 inset-x-0 w-[85px]">
    </div>
    <div id="navs-header" class="z-20 flex justify-between items-end top-0">
        <a class="z-10" href="#">
            <h3 class="font-restype font-stroke text-[5vw] lg:text-[3vw] text-white pl-4 lg:pt-5 lg:pl-10">Jan's<span class="relative bottom-[2px] tracking-tighter font-apro lg:pl-3 text-[3vw] lg:text-[2.4vw] font-medium">profile</span></h3>
        </a>
        <!-- about services portfolio contact -->
        <ul class="grid grid-cols-4 justify-between pr-3 lg:pr-16 pb-[1.5vw] lg:pb-2 font-apro text-[2.5vw] lg:text-[1.4vw] text-white font-medium gap-x-10">
            <a class="relative group/about text-center hover:scale-[1.3] duration-500 text-right pr-2">
                <img src="{{ asset('/img/stars.gif') }}" alt="" class="absolute lg:-top-1/3 lg:translate-x-[15%] opacity-0 ease-in-out group-hover/about:opacity-100 group-hover/about:scale-[1.3] duration-500">
                About
            </a>
            <a class="relative group/services text-center hover:scale-[1.3] duration-500">
                <img src="{{ asset('/img/stars.gif') }}" alt="" class="absolute lg:-top-1/3 opacity-0 group-hover/services:opacity-100 group-hover/services:scale-[1.7] duration-500">
                Services
            </a>
            <a class="relative group/portfolio text-center hover:scale-[1.3] duration-500">
                <img src="{{ asset('/img/stars.gif') }}" alt="" class="absolute lg:-top-1/3 opacity-0 ease-in-out group-hover/portfolio:opacity-100 group-hover/portfolio:scale-[1.7] duration-500">
                Portfolio
            </a>
            <a class="relative group/contact text-center hover:scale-[1.25] duration-500">
                <img src="{{ asset('/img/stars.gif') }}" alt="" class="absolute lg:-top-1/3 opacity-0 ease-in-out group-hover/contact:opacity-100 group-hover/contact:scale-[1.7] duration-500">
                Contact
            </a>
        </ul>
    </div>
    <div class="relative top-20 flex justify-center gap-x-14">
        <div class="relative self-center bottom-10   ">
            <img src="{{ asset('/img/twinkle1.gif') }}" alt="" class="absolute lg:-top-[220%] lg:translate-x-[50%] scale-[.35]">
            <img src="{{ asset('/img/twinkle2.gif') }}" alt="" class="absolute lg:-top-[150%] lg:-translate-x-[65%] scale-[.2]">
            <img src="{{ asset('/img/twinkle3.gif') }}" alt="" class="absolute lg:-top-[5%] lg:-translate-x-[5%] scale-[.3]">
            <h1 id="greeting" class="lg:text-7xl text-white font-caveat">
                Greetings!
            </h1>
        </div>        
        <img src="{{ asset('/img/my-photo.png') }}" alt="" class="lg:w-[30vw] left-20">
    </div>
</header>