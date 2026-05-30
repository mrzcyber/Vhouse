<nav x-data="{ scrolled: false, mobileOpen: false }"
     x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
     :class="scrolled ? 'bg-black/80 backdrop-blur-md' : 'bg-transparent'"
     class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 h-[77px]">

    <div class="max-w-[1280px] mx-auto px-12 h-full flex items-center justify-between">

        {{-- Logo --}}
        <a href="#" class="font-bold text-[30px] text-white leading-none tracking-tight font-serif">
            VHouse
        </a>

        {{-- Nav Links (Desktop) --}}
        <ul class="hidden md:flex items-center gap-10">
            <li><a href="#" class="font-medium text-[15px] text-white">Home</a></li>
            <li><a href="#" class="font-medium text-[15px] text-[#898989] hover:text-white transition-colors duration-200">Product</a></li>
            <li><a href="#" class="font-medium text-[15px] text-[#898989] hover:text-white transition-colors duration-200">About</a></li>
            <li><a href="#" class="font-medium text-[15px] text-[#898989] hover:text-white transition-colors duration-200">Contact</a></li>
        </ul>

        {{-- CTA Button --}}
        <a href="#"
           class="hidden md:flex items-center justify-center h-[36px] px-5 rounded-[20px]
                  bg-[#fffefe] border border-black text-black
                  font-semibold text-[15px]
                  hover:bg-[#b49156] hover:text-white hover:border-[#b49156]
                  transition-all duration-200 whitespace-nowrap">
            Explore Now
        </a>

        {{-- Hamburger (Mobile) --}}
        <button @click="mobileOpen = !mobileOpen"
                class="md:hidden text-white focus:outline-none"
                aria-label="Toggle menu">
            <svg x-show="!mobileOpen" xmlns="http://www.w3.org/2000/svg"
                 class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg x-show="mobileOpen" xmlns="http://www.w3.org/2000/svg"
                 class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

    </div>

    {{-- Mobile Menu --}}
    <div x-show="mobileOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden bg-black/90 backdrop-blur-md border-t border-white/10">
        <ul class="flex flex-col px-12 py-6 gap-5">
            <li><a href="#" class="font-medium text-[15px] text-white">Home</a></li>
            <li><a href="#" class="font-medium text-[15px] text-[#898989] hover:text-white transition-colors duration-200">Product</a></li>
            <li><a href="#" class="font-medium text-[15px] text-[#898989] hover:text-white transition-colors duration-200">About</a></li>
            <li><a href="#" class="font-medium text-[15px] text-[#898989] hover:text-white transition-colors duration-200">Contact</a></li>
            <li class="pt-2">
                <a href="#"
                   class="inline-flex items-center justify-center h-[36px] px-5 rounded-[20px]
                          bg-[#fffefe] border border-black text-black
                          font-semibold text-[15px]
                          hover:bg-[#b49156] hover:text-white hover:border-[#b49156]
                          transition-all duration-200">
                    Explore Now
                </a>
            </li>
        </ul>
    </div>

</nav>
