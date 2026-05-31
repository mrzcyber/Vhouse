<nav id="main-navbar"
     x-data="{ mobileOpen: false }"
     class="fixed top-0 left-0 right-0 z-50 transform transition-all duration-300 h-[77px] flex items-center bg-transparent translate-y-0">

    <div class="w-full max-w-[1280px] mx-auto px-8  flex items-center justify-between">

        {{-- Logo --}}
        <a href="/" class="font-bold text-[26px] md:text-[30px] text-white leading-none tracking-tight font-serif">
            VHouse
        </a>

        {{-- Nav Links (Desktop) --}}
        <ul class="hidden md:flex items-center gap-10">
            <li><a href="/" class="font-medium text-[15px] text-white">Home</a></li>
            <li><a href="/#product" class="font-medium text-[15px] text-[#898989] hover:text-white transition-colors duration-200">Product</a></li>
            <li><a href="/#about" class="font-medium text-[15px] text-[#898989] hover:text-white transition-colors duration-200">About</a></li>
            <li><a href="/#contact" class="font-medium text-[15px] text-[#898989] hover:text-white transition-colors duration-200">Contact</a></li>
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
         class="absolute top-[77px] left-0 right-0 md:hidden bg-black/95 backdrop-blur-md border-b border-white/10">
        <ul class="flex flex-col px-6 py-6 gap-5">
            <li><a href="/" class="font-medium text-[15px] text-white">Home</a></li>
            <li><a href="/#product" class="font-medium text-[15px] text-[#898989] hover:text-white transition-colors duration-200">Product</a></li>
            <li><a href="/#about" class="font-medium text-[15px] text-[#898989] hover:text-white transition-colors duration-200">About</a></li>
            <li><a href="/#contact" class="font-medium text-[15px] text-[#898989] hover:text-white transition-colors duration-200">Contact</a></li>
            <li class="pt-2">
                <a href="#"
                   class="inline-flex items-center justify-center h-[36px] px-5 rounded-[20px]
                          bg-[#fffefe] border border-black text-black
                          font-semibold text-[15px]
                          hover:bg-[#b49156] hover:text-white hover:border-[#b49156]
                          transition-all duration-200 w-full">
                    Explore Now
                </a>
            </li>
        </ul>
    </div>

</nav>

{{-- Vanilla Javascript untuk Efek Scroll Navbar yang 100% Stabil & Cepat --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const navbar = document.getElementById('main-navbar');
        let lastScrollY = window.scrollY;

        window.addEventListener('scroll', () => {
            // Cek apakah menu mobile sedang terbuka (menggunakan atribut Alpine internal jika ada)
            // Jika ada menu mobile terbuka, jangan sembunyikan navbar
            const alpineData = navbar.__x ? navbar.__x.$data : null;
            if (alpineData && alpineData.mobileOpen) {
                return;
            }

            let currentScroll = window.scrollY;

            // 1. Efek Transisi Background (Scrolled)
            if (currentScroll > 20) {
                navbar.classList.add('bg-black/90', 'backdrop-blur-md', 'border-b', 'border-white/5');
                navbar.classList.remove('bg-transparent');
            } else {
                navbar.classList.remove('bg-black/90', 'backdrop-blur-md', 'border-b', 'border-white/5');
                navbar.classList.add('bg-transparent');
            }

            // 2. Efek Sembunyikan/Munculkan saat Scroll
            if (currentScroll > lastScrollY && currentScroll > 77) {
                // Scroll ke bawah -> Sembunyikan
                navbar.style.transform = 'translateY(-100%)';
            } else {
                // Scroll ke atas -> Tampilkan
                navbar.style.transform = 'translateY(0)';
            }
            lastScrollY = currentScroll;
        }, { passive: true });
    });
</script>
