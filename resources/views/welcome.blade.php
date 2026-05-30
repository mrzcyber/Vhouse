<x-layout>
    <x-slot:title>VHouse - Premium Real Estate & Luxury Living</x-slot>
    <x-slot:description>Discover premium residences crafted with elegance, comfort, and timeless design at VHouse.</x-slot>
    <x-slot:keywords>luxury residence, modern living, prime location properties, premium quality home, VHouse</x-slot>

    {{-- ============================================================ --}}
    {{-- HERO SECTION                                                  --}}
    {{-- ============================================================ --}}
    <section class="relative w-full h-[650px] sm:h-[832px] overflow-hidden bg-black">

        {{-- Background Image --}}
        <div class="absolute inset-0">
            <img src="{{ asset('images/hero-bg.png') }}"
                 alt="Luxury House"
                 class="w-full h-full object-cover opacity-80 sm:opacity-100">
        </div>

        {{-- Gradient Overlay (kiri → transparan) --}}
        <div class="absolute inset-0"
             style="background: linear-gradient(to right, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.6) 40%, rgba(13,12,12,0) 100%);">
        </div>

        {{-- Konten Kiri --}}
        <div class="absolute left-6 sm:left-12 lg:left-[50px] right-6 sm:right-12 lg:right-auto top-0 flex flex-col justify-center h-full pt-[77px] sm:pt-0">

            {{-- Badge Residence --}}
            <p class="text-[#b49156] text-[32px] sm:text-[40px] md:text-[50px] font-semibold leading-none mt-12 sm:mt-[128px]">
                Residence
            </p>

            {{-- Judul Besar --}}
            <h1 class="text-[75px] sm:text-[110px] md:text-[150px] text-white/90 font-light leading-[0.9] -mt-1 sm:-mt-2 font-serif">
                Luxury
            </h1>
            <h1 class="text-[75px] sm:text-[110px] md:text-[150px] text-white/90 font-light  -mt-4 sm:-mt-6 font-serif">
                Living
            </h1>

            {{-- Divider --}}
            <div class="w-[80px] sm:w-[112px] h-[3px] bg-[#b49156] mt-4 sm:mt-6"></div>

            {{-- Deskripsi --}}
            <div class="mt-4 text-[#d5d5d5] text-[16px] sm:text-[18px] md:text-[20px] font-normal leading-relaxed sm:leading-[30px] max-w-md">
                <p>Discover premium residences crafted with elegance, comfort, and timeless design.</p>
            </div>

            {{-- Stats --}}
            <div class="flex flex-wrap items-center gap-6 sm:gap-0 mt-8 sm:mt-10 max-w-xl">

                {{-- Premium Quality --}}
                <div class="flex flex-col items-start">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('icons/diamond-icon.svg') }}" alt="Diamond" class="w-[24px] h-[22px] md:w-[29px] md:h-[26px]">
                        <span class="text-white text-[15px] md:text-[18px] font-medium">Premium</span>
                    </div>
                    <span class="text-white text-[12px] md:text-[14px] font-light ml-[32px] md:ml-[37px]">Quality</span>
                </div>

                {{-- Divider Vertikal --}}
                <div class="hidden sm:block w-px h-[40px] bg-white/40 mx-6 md:mx-8"></div>

                {{-- Prime Location --}}
                <div class="flex flex-col items-start">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('icons/location-icon.svg') }}" alt="Location" class="w-[24px] h-[22px] md:w-[29px]  md:h-[26px]">
                        <span class="text-white text-[15px] md:text-[18px] font-medium">Prime</span>
                    </div>
                    <span class="text-white text-[12px] md:text-[14px] font-light ml-[32px] md:ml-[37px]">Location</span>
                </div>

                {{-- Divider Vertikal --}}
                <div class="hidden sm:block w-px h-[40px] bg-white/40 mx-6 md:mx-8"></div>

                {{-- Exclusive Living --}}
                <div class="flex flex-col items-start">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('icons/crown-icon.svg') }}" alt="Crown" class="w-[24px] h-[22px] md:w-[29px] md:h-[26px]">
                        <span class="text-white text-[15px] md:text-[18px] font-medium">Exclusive</span>
                    </div>
                    <span class="text-white text-[12px] md:text-[14px] font-light ml-[32px] md:ml-[37px]">Living</span>
                </div>

            </div>

            {{-- CTA Buttons --}}
            <div class="flex items-center gap-4 sm:gap-6 mt-8">

                {{-- View More --}}
                <div class="relative">
                    <div class="absolute inset-0 bg-[#b49156] rounded-[5px]"></div>
                    <a href="#"
                       class="relative flex items-center gap-2 h-[38px] px-5 text-white text-[12px] font-medium">
                        View more
                        <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none">
                            <path d="M3 8h10M9 4l4 4-4 4" stroke="white" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>

                {{-- Watch Video --}}
                <button class="flex items-center gap-2 text-[#c8c7c7] text-[12px] font-medium hover:text-white transition-colors duration-250">
                    <span class="flex items-center justify-center w-[25px] h-[25px] rounded-full border border-[#9b9b9b]">
                        <svg class="w-3 h-3 ml-0.5" viewBox="0 0 12 12" fill="white">
                            <path d="M3 2l7 4-7 4V2z"/>
                        </svg>
                    </span>
                    Watch Video
                </button>

            </div>

        </div>

        {{-- Featured Property Card (kanan bawah) --}}
        <div class="hidden lg:flex absolute bottom-[30px] right-[38px] w-[579px] h-[196px]
                    bg-[rgba(20,20,20,0.65)] backdrop-blur-md rounded-[30px] items-center gap-0 overflow-hidden border border-white/10">

            {{-- Thumbnail --}}
            <div class="flex-shrink-0 w-[207px] h-[172px] rounded-[20px] overflow-hidden ml-[13px]">
                <img src="{{ asset('images/featured-property.jpg') }}"
                     alt="Modern Elegance House"
                     class="w-full h-full object-cover">
            </div>

            {{-- Info --}}
            <div class="flex flex-col justify-between px-5 py-3 flex-1 h-full">

                <div>
                    <p class="text-[#df9b28] text-[14px] font-medium tracking-wide">FEATURED PROPERTY</p>
                    <p class="text-[#d2d2d2] text-[24px] leading-snug mt-1 font-serif">
                        Modern Elegance House
                    </p>

                    {{-- Play Button --}}
                    <div class="mt-1 w-[30px] h-[30px] rounded-[20px] bg-[rgba(254,243,226,0.4)]
                                flex items-center justify-center cursor-pointer">
                        <svg class="w-3 h-3 ml-0.5" viewBox="0 0 12 12" fill="white">
                            <path d="M3 2l7 4-7 4V2z"/>
                        </svg>
                    </div>
                </div>

                <div>
                    <p class="text-[#d2d2d2] text-[14px] font-normal leading-snug">
                        A stunning modern House offering spacious living, premium materials, and exceptional architectural details.
                    </p>
                    <a href="#" class="flex items-center gap-1 mt-2 text-white text-[12px] font-medium">
                        Explore House
                        <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none">
                            <path d="M3 8h10M9 4l4 4-4 4" stroke="white" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>

            </div>
        </div>

    </section>


    {{-- ============================================================ --}}
    {{-- WHY CHOOSE VHOUSE SECTION                                     --}}
    {{-- ============================================================ --}}
    <section class="bg-[#fffefe] w-full py-16 px-6 sm:px-12 lg:px-[38px]">
        <div class="max-w-[1280px] mx-auto flex flex-col lg:flex-row gap-16 lg:gap-24 items-center lg:items-start">

            {{-- Foto Kiri --}}
            <div class="relative w-full max-w-[602px] flex-shrink-0">
                <div class="w-full h-[320px] sm:h-[523px] rounded-[30px] overflow-hidden shadow-[0px_4px_12px_rgba(0,0,0,0.15)]">
                    <img src="{{ asset('images/interior.jpg') }}"
                         alt="Interior"
                         class="w-full h-full object-cover">
                </div>

                {{-- Testimoni Card --}}
                <div class="absolute -right-4 sm:-right-10 lg:-right-20 -bottom-8 sm:-bottom-4 lg:bottom-4 w-[280px] sm:w-[331px] bg-[#f2f2f2] rounded-[20px] sm:rounded-[30px]
                            shadow-[0px_8px_16px_rgba(0,0,0,0.15)] p-5 sm:p-6 border border-white/50 backdrop-blur-sm">
                    {{-- Stars --}}
                    <div class="flex gap-0.5 mb-2">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        @endfor
                    </div>
                    <p class="text-black text-[16px] sm:text-[20px] font-medium leading-snug">
                        the most comfortable and safe housing
                    </p>
                    <p class="text-[#7b7b7b] text-[14px] sm:text-[17px] font-normal mt-2 sm:mt-3">Robert alex</p>
                </div>
            </div>

            {{-- Konten Kanan --}}
            <div class="flex-1 pt-12 lg:pt-2 w-full">
                <h2 class="text-[#4f4f4f] text-[28px] sm:text-[35px] font-bold mb-6 sm:mb-8 text-center lg:text-left">Why Choose In Vhouse?</h2>

                {{-- Feature List --}}
                <div class="flex flex-col gap-1">

                    {{-- Item 1 --}}
                    <div class="flex gap-4 items-start py-5">
                        <div class="flex-shrink-0 w-[42px] h-[42px] sm:w-[50px] sm:h-[50px] rounded-full bg-[#f0ebe0] flex items-center justify-center">
                            <span class="text-[#373737] text-[22px] sm:text-[30px] font-medium leading-none">1</span>
                        </div>
                        <div>
                            <p class="text-[#4f4f4f] text-[22px] sm:text-[30px] font-medium leading-tight">Elegant Luxury Design</p>
                            <p class="text-[#4f4f4f] text-[13px] font-normal mt-1">
                                Modern homes with a premium and sophisticated architectural style.
                            </p>
                        </div>
                    </div>
                    <div class="h-px bg-gray-200 w-full max-w-[429px] ml-[58px] sm:ml-[66px]"></div>

                    {{-- Item 2 --}}
                    <div class="flex gap-4 items-start py-5">
                        <div class="flex-shrink-0 w-[42px] h-[42px] sm:w-[50px] sm:h-[50px] rounded-full bg-[#f0ebe0] flex items-center justify-center">
                            <span class="text-[#373737] text-[22px] sm:text-[30px] font-medium leading-none">2</span>
                        </div>
                        <div>
                            <p class="text-[#4f4f4f] text-[22px] sm:text-[30px] font-medium leading-tight">Comfortable Living</p>
                            <p class="text-[#4f4f4f] text-[13px] font-normal mt-1">
                                Spacious layouts and a peaceful environment for your family's comfort.
                            </p>
                        </div>
                    </div>
                    <div class="h-px bg-gray-200 w-full max-w-[429px] ml-[58px] sm:ml-[66px]"></div>

                    {{-- Item 3 --}}
                    <div class="flex gap-4 items-start py-5">
                        <div class="flex-shrink-0 w-[42px] h-[42px] sm:w-[50px] sm:h-[50px] rounded-full bg-[#f0ebe0] flex items-center justify-center">
                            <span class="text-[#373737] text-[22px] sm:text-[30px] font-medium leading-none">3</span>
                        </div>
                        <div>
                            <p class="text-[#4f4f4f] text-[22px] sm:text-[30px] font-medium leading-tight">Strategic Location</p>
                            <p class="text-[#4f4f4f] text-[13px] font-normal mt-1">
                                Easy access to schools, shopping centers, Hospital and City center.
                            </p>
                        </div>
                    </div>
                    <div class="h-px bg-gray-200 w-full max-w-[429px] ml-[58px] sm:ml-[66px]"></div>

                    {{-- Item 4 --}}
                    <div class="flex gap-4 items-start py-5">
                        <div class="flex-shrink-0 w-[42px] h-[42px] sm:w-[50px] sm:h-[50px] rounded-full bg-[#b49156] flex items-center justify-center">
                            <span class="text-white text-[22px] sm:text-[30px] font-medium leading-none">4</span>
                        </div>
                        <div>
                            <p class="text-[#4f4f4f] text-[22px] sm:text-[30px] font-medium leading-tight">Premium Quality</p>
                            <p class="text-[#4f4f4f] text-[13px] font-normal mt-1">
                                Built with high-quality materials and detailed craftsmanship.
                            </p>
                        </div>
                    </div>
                    <div class="h-px bg-gray-200 w-full max-w-[429px] ml-[58px] sm:ml-[66px]"></div>

                    {{-- Item 5 --}}
                    <div class="flex gap-4 items-start py-5">
                        <div class="flex-shrink-0 w-[42px] h-[42px] sm:w-[50px] sm:h-[50px] rounded-full bg-[#b49156] flex items-center justify-center">
                            <span class="text-white text-[22px] sm:text-[30px] font-medium leading-none">5</span>
                        </div>
                        <div>
                            <p class="text-[#4f4f4f] text-[22px] sm:text-[30px] font-medium leading-tight">Safe & Peaceful</p>
                            <p class="text-[#4f4f4f] text-[13px] font-normal mt-1">
                                A secure and calm neighborhood designed for better quality living.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


    {{-- ============================================================ --}}
    {{-- EXCLUSIVE PROPERTIES SECTION                                  --}}
    {{-- ============================================================ --}}
    <section class="bg-[#dadada] w-full py-16 px-6 sm:px-12 lg:px-[38px]">
        <div class="max-w-[1280px] mx-auto">

            {{-- Section Title --}}
            <h2 class="text-[32px] sm:text-[50px] font-bold text-center leading-tight">
                <span class="text-[#4f4f4f]">Exclusive </span>
                <span class="text-[#df9b28]">Properties </span>
                <span class="text-[#4f4f4f]">You I'll Love</span>
            </h2>
            <p class="text-center text-black text-[16px] sm:text-[20px] font-normal mt-3 mb-8 sm:mb-12">
                Carefully selected homes that match your lifestyle, taste and dreams
            </p>

            {{-- Property Cards Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Card 1 --}}
                <div class="bg-white rounded-[20px] shadow-[0px_4px_4px_0px_rgba(0,0,0,0.25)] overflow-hidden flex flex-col h-full">
                    <div class="h-[220px] overflow-hidden rounded-[20px] m-4">
                        <img src="{{ asset('images/property-1.jpg') }}"
                             alt="Penta House"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="px-4 pb-4 flex flex-col flex-grow justify-between">
                        <div>
                            <p class="text-[#b49156] text-[20px] font-semibold">Penta House</p>
                            <div class="flex items-center gap-1 mt-1">
                                <img src="{{ asset('icons/location-icon-dark.svg') }}" alt="Location" class="w-[15px] h-[15px]">
                                <p class="text-[#4f4f4f] text-[13px] font-normal">Jakarta selatan</p>
                            </div>
                            <div class="border-t border-gray-200 mt-3 pt-3 flex items-center gap-4">
                                <div class="flex items-center gap-1">
                                    <img src="{{ asset('icons/bedroom.svg') }}" alt="Bedroom" class="w-6 h-6">
                                    <span class="text-[#4f4f4f] text-[13px] font-medium">4 Beds</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <img src="{{ asset('icons/bathtub.svg') }}" alt="Bath" class="w-6 h-6">
                                    <span class="text-[#4f4f4f] text-[13px] font-medium">4 Baths</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <img src="{{ asset('icons/carport.svg') }}" alt="Carport" class="w-6 h-6">
                                    <span class="text-[#4f4f4f] text-[13px] font-medium">1 Carport</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <p class="text-black text-[16px] font-semibold">Rp 5.000.000.000</p>
                            <a href="#" class="flex items-center gap-1 text-[#b49156] text-[12px] font-semibold hover:text-[#a07f45] transition-colors">
                                View Detail
                                <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none">
                                    <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="bg-white rounded-[20px] shadow-[0px_4px_4px_0px_rgba(0,0,0,0.25)] overflow-hidden flex flex-col h-full">
                    <div class="h-[220px] overflow-hidden rounded-[20px] m-4">
                        <img src="{{ asset('images/property-2.jpg') }}"
                             alt="Penta House"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="px-4 pb-4 flex flex-col flex-grow justify-between">
                        <div>
                            <p class="text-[#b49156] text-[20px] font-semibold">Penta House</p>
                            <div class="flex items-center gap-1 mt-1">
                                <img src="{{ asset('icons/location-icon-dark.svg') }}" alt="Location" class="w-[15px] h-[15px]">
                                <p class="text-[#4f4f4f] text-[13px] font-normal">Jakarta selatan</p>
                            </div>
                            <div class="border-t border-gray-200 mt-3 pt-3 flex items-center gap-4">
                                <div class="flex items-center gap-1">
                                    <img src="{{ asset('icons/bedroom.svg') }}" alt="Bedroom" class="w-6 h-6">
                                    <span class="text-[#4f4f4f] text-[13px] font-medium">4 Beds</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <img src="{{ asset('icons/bathtub.svg') }}" alt="Bath" class="w-6 h-6">
                                    <span class="text-[#4f4f4f] text-[13px] font-medium">4 Baths</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <img src="{{ asset('icons/carport.svg') }}" alt="Carport" class="w-6 h-6">
                                    <span class="text-[#4f4f4f] text-[13px] font-medium">1 Carport</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <p class="text-black text-[16px] font-semibold">Rp 5.000.000.000</p>
                            <a href="#" class="flex items-center gap-1 text-[#b49156] text-[12px] font-semibold hover:text-[#a07f45] transition-colors">
                                View Detail
                                <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none">
                                    <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="bg-white rounded-[20px] shadow-[0px_4px_4px_0px_rgba(0,0,0,0.25)] overflow-hidden flex flex-col h-full">
                    <div class="h-[220px] overflow-hidden rounded-[20px] m-4">
                        <img src="{{ asset('images/property-3.jpg') }}"
                             alt="Penta House"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="px-4 pb-4 flex flex-col flex-grow justify-between">
                        <div>
                            <p class="text-[#b49156] text-[20px] font-semibold">Penta House</p>
                            <div class="flex items-center gap-1 mt-1">
                                <img src="{{ asset('icons/location-icon-dark.svg') }}" alt="Location" class="w-[15px] h-[15px]">
                                <p class="text-[#4f4f4f] text-[13px] font-normal">Jakarta selatan</p>
                            </div>
                            <div class="border-t border-gray-200 mt-3 pt-3 flex items-center gap-4">
                                <div class="flex items-center gap-1">
                                    <img src="{{ asset('icons/bedroom.svg') }}" alt="Bedroom" class="w-6 h-6">
                                    <span class="text-[#4f4f4f] text-[13px] font-medium">4 Beds</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <img src="{{ asset('icons/bathtub.svg') }}" alt="Bath" class="w-6 h-6">
                                    <span class="text-[#4f4f4f] text-[13px] font-medium">4 Baths</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <img src="{{ asset('icons/carport.svg') }}" alt="Carport" class="w-6 h-6">
                                    <span class="text-[#4f4f4f] text-[13px] font-medium">1 Carport</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <p class="text-black text-[16px] font-semibold">Rp 5.000.000.000</p>
                            <a href="#" class="flex items-center gap-1 text-[#b49156] text-[12px] font-semibold hover:text-[#a07f45] transition-colors">
                                View Detail
                                <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none">
                                    <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            {{-- See More --}}
            <div class="flex items-center justify-center gap-2 mt-10">
                <a href="#" class="text-black text-[18px] sm:text-[20px] font-medium flex items-center gap-2 hover:text-[#b49156] transition-colors">
                    See More
                    <svg class="w-5 h-5" viewBox="0 0 16 16" fill="none">
                        <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>

        </div>
    </section>


    {{-- ============================================================ --}}
    {{-- CTA / FOOTER BANNER SECTION                                   --}}
    {{-- ============================================================ --}}
    <section class="relative w-full h-[400px] sm:h-[757px] overflow-hidden bg-black">
        <img src="{{ asset('images/cta-bg.png') }}"
             alt="Engage"
             class="absolute inset-0 w-full h-full object-cover opacity-90">
    </section>

</x-layout>