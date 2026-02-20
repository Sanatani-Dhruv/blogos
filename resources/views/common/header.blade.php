<header class="fixed top-0 left-0 right-0 bg-blue-300/100 header z-10 shadow shadow-lg">
    <style>
.show {
    display: block;
}

.noshow {
    display: none;
}
    </style>
    <div class="ml-8 mr-8 pt-4 pb-4 flex md:items-center justify-between box-border">
        <div class="h-full">
            <a href="/">
                <h1 class="text-2xl font-semibold">
                    <span class="text-red-600/100">Blog</span>Os
                </h1>
            </a>
        </div>
        <div x-data="{ open:true }">
            <img width="18" @click="open = !open;" :class="open ? 'show' : 'noshow';" class="cursor-pointer " src="/home-icon.svg" alt="">
            <nav :class="open ? 'noshow' : 'show';" @click.outside="open = false" class="navbar flex">
                <ul class="flex flex-1 gap-4 text-lg flex-col font-medium md:flex-row max-w-screen-lg" >
                    @if ( request()->path() != '/')
                        <a class="navlink-li hover:bg-red-300 align-middle transition-all pt-1 pb-1 pl-3 pr-3 rounded-md text-center" href="/">
                            <li class="navlink flex gap-1 items-center">
                                <img width="18" class="pb-1.5" src="/home-icon.svg" alt=""> Home
                            </li>
                        </a>
                    @endif
                    <a class="navlink-li hover:bg-red-300 transition-all pt-1 pb-1 pl-3 pr-3 rounded-md text-center" href="/contact">
                        <li class="navlink">Contact</li>
                    </a>
                    <a class="navlink-li hover:bg-red-300 transition-all pt-1 pb-1 pl-3 pr-3 rounded-md text-center" href="/about">
                        <li class="navlink">About</li>
                    </a>
                    <a class="navlink-li hover:bg-red-300 transition-all pt-1 pb-1 pl-3 pr-3 rounded-md text-center" href="/signup">
                        <li class="navlink">Sign Up</li>
                    </a>
                    <a class="navlink-li bg-red-300 hover:rounded-none transition-all pt-1 pb-1 pl-3 pr-3 rounded-md text-center shadow hover:shadow-blue-900/100 shadow-md shadow" href="/signin">
                        <li class="navlink">Sign In</li>
                    </a>
                </ul>
            </nav>
        </div>
    </div>
</header>
