<x-layout>

    {{-- ============================================================ --}}
    {{-- HERO SECTION                                                  --}}
    {{-- ============================================================ --}}
    <section  class="relative w-full min-h-[832px] lg:h-[832px] overflow-hidden flex flex-col justify-between py-24 px-8 lg:px-[150px]">

        {{-- Background Image --}}
        <div class="absolute inset-0 z-0">
            <img src="/images/hero-bg.png"
                 alt="Luxury House"
                 class="w-full h-full object-cover">
        </div>

        {{-- Gradient Overlay (kiri → transparan) --}}
        <div class="absolute inset-0 z-0"
             style="background: linear-gradient(88.83deg, rgba(0,0,0,0.73) 1.86%, rgba(13,12,12,0) 87.8%);">
        </div>

        {{-- Konten Kiri --}}
        <div class="relative lg:absolute lg:left-[50px] lg:top-0 lg:h-full flex flex-col justify-center z-10 pt-12 lg:pt-0 max-w-full">

            <p class="text-[#b49156] text-[32px] sm:text-[40px] lg:text-[50px] font-semibold leading-none mt-[50px] lg:mt-[100px]">
                Residence
            </p>

            <p class="text-[70px] sm:text-[110px] lg:text-[150px] text-white/85 font-light leading-none md:-mt-2"
               style="font-family: 'Playfair Display', serif;">
                Luxury
            </p>
            <p class="text-[70px] sm:text-[110px] lg:text-[150px] text-white/85 font-light leading-none md:-mt-6"
               style="font-family: 'Playfair Display', serif;">
                Living
            </p>

            <div class="w-[112px] h-[3px] bg-[#b49156] mt-6"></div>

            <div class="mt-4 text-[#d5d5d5] text-[16px] sm:text-[18px] lg:text-[20px] font-normal leading-relaxed max-w-[450px]">
                <p>Discover premium residences crafted with elegance, comfort, and timeless design.</p>
            </div>

            {{-- Stats --}}
            <div class="flex scale-75 -ml-12 md:ml-0 md:scale-100  sm:flex-row items-start sm:items-center mt-10 gap-6 sm:gap-0 z-10">
                <div class="flex flex-col items-start">
                    <div class="flex items-center gap-2">
                        <img src="/icons/diamond-icon.svg" alt="Diamond" class="w-[29px] h-[26px]">
                        <span class="text-white text-[18px] font-medium">Premium</span>
                    </div>
                    <span class="text-white text-[14px] font-light sm:ml-[37px] ml-[31px]">Quality</span>
                </div>
                <div class="hidden sm:block w-px h-[40px] bg-white/40 mx-8"></div>
                <div class="flex flex-col items-start">
                    <div class="flex items-center gap-2">
                        <img src="/icons/location-icon.svg" alt="Location" class="w-[29px] h-[26px]">
                        <span class="text-white text-[18px] font-medium">Prime</span>
                    </div>
                    <span class="text-white text-[14px] font-light sm:ml-[37px] ml-[31px]">Location</span>
                </div>
                <div class="hidden sm:block w-px h-[40px] bg-white/40 mx-8"></div>
                <div class="flex flex-col items-start">
                    <div class="flex items-center gap-2">
                        <img src="/icons/crown-icon.svg" alt="Crown" class="w-[29px] h-[26px]">
                        <span class="text-white text-[18px] font-medium">Exclusive</span>
                    </div>
                    <span class="text-white text-[14px] font-light sm:ml-[37px] ml-[31px]">Living</span>
                </div>
            </div>

            {{-- CTA Buttons --}}
            <div class="flex items-center gap-6 mt-8 z-10">
                <a href="#"
                   class="flex items-center gap-2 h-[38px] px-5 bg-[#b49156] rounded-[5px]
                          text-white text-[12px] font-medium">
                    View more
                    <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none">
                        <path d="M3 8h10M9 4l4 4-4 4" stroke="white" stroke-width="1.5"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <button class="flex items-center gap-2 text-[#c8c7c7] text-[12px] font-medium">
                    <span class="flex items-center justify-center w-[25px] h-[25px] rounded-full border border-[#9b9b9b]">
                        <svg class="w-3 h-3 ml-0.5" viewBox="0 0 12 12" fill="white">
                            <path d="M3 2l7 4-7 4V2z"/>
                        </svg>
                    </span>
                    Watch Video
                </button>
            </div>

        </div>        {{-- Featured Property Card --}}
        <div class="hidden lg:flex lg:absolute lg:bottom-[30px] lg:right-[38px] w-[579px] h-[196px]
                    bg-[rgba(9,9,9,0.75)] rounded-[30px] items-center overflow-hidden z-10">
            <div class="relative flex-shrink-0 w-[207px] h-[172px] rounded-[20px] overflow-hidden ml-[13px]">
                <img src="/images/featured-property.jpg"
                     alt="Modern Elegance House"
                     class="w-full h-full object-cover">
                {{-- Play Button --}}
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-[30px] h-[30px] rounded-full bg-[rgba(254,243,226,0.4)]
                                flex items-center justify-center cursor-pointer hover:bg-[rgba(254,243,226,0.6)] transition-colors duration-200">
                        <svg class="w-3 h-3 ml-0.5" viewBox="0 0 12 12" fill="white">
                            <path d="M3 2l7 4-7 4V2z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-5 px-5 py-3 flex-1 h-full">
                <div>
                    <p class="text-[#df9b28] text-[14px] font-medium tracking-wide">FEATURED PROPERTY</p>
                    <p class="text-[#d2d2d2] text-[24px] leading-snug mt-1"
                       style="font-family: 'Playfair Display', serif;">
                        Modern Elegance House
                    </p>
                </div>
                <div>
                    <p class="text-[#d2d2d2] text-[14px] font-normal leading-snug">
                        A stunning modern House offering spacious living, premium materials,
                        and exceptional architectural details.
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
    {{-- WHY CHOOSE VHOUSE — warm cream background                    --}}
    {{-- ============================================================ --}}
    {{-- ============================================================ --}}
    {{-- WHY CHOOSE VHOUSE — warm cream background                    --}}
    {{-- ============================================================ --}}
    <section id="about" class="w-full py-20 px-6 sm:px-[38px]" style="background-color: #faf6f0;">
        <div class="max-w-[1280px] mx-auto flex flex-col lg:flex-row gap-16 lg:gap-28 items-center lg:items-start">

            {{-- Foto Kiri --}}
            <div class="hidden lg:block relative flex-shrink-0 w-[602px]">
                <div class="w-full h-[350px] sm:h-[523px] rounded-[30px] overflow-hidden shadow-[0px_4px_20px_0px_rgba(0,0,0,0.15)]">
                    <img src="/images/interior.jpg"
                         alt="Interior"
                         class="w-full h-full object-cover">
                </div>

                {{-- Testimoni Card --}}
                <div class="absolute right-4 lg:-right-20 bottom-4 lg:bottom-0 w-[280px] sm:w-[331px] rounded-[30px] p-6
                            shadow-[0px_8px_32px_0px_rgba(0,0,0,0.12)]"
                     style="background-color: #fff9f0;">
                    <div class="flex gap-0.5 mb-2">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        @endfor
                    </div>
                    <p class="text-black text-[18px] sm:text-[20px] font-medium leading-snug">
                        The most comfortable and safe housing
                    </p>
                    <p class="text-[#7b7b7b] text-[15px] sm:text-[17px] font-normal mt-3">— Robert Alex</p>
                </div>
            </div>

            {{-- Konten Kanan --}}
            <div class="flex-1 pt-2 w-full">
                <h2 class="text-[#4f4f4f] text-[28px] sm:text-[35px] font-bold mb-8">Why Choose Vhouse?</h2>

                {{-- Item 1 --}}
                <div class="flex gap-4 items-start py-5">
                    <div class="flex-shrink-0 w-[50px] h-[50px] rounded-full bg-[#b49156] flex items-center justify-center">
                        <span class="text-white text-[26px] font-medium leading-none">1</span>
                    </div>
                    <div>
                        <p class="text-[#4f4f4f] text-[20px] sm:text-[28px] font-medium leading-tight">Elegant Luxury Design</p>
                        <p class="text-[#4f4f4f] text-[13px] font-normal mt-1">Modern homes with a premium and sophisticated architectural style.</p>
                    </div>
                </div>
                <div class="h-px w-full max-w-[429px] ml-[66px]" style="background-color: #e0d5c5;"></div>

                {{-- Item 2 --}}
                <div class="flex gap-4 items-start py-5">
                    <div class="flex-shrink-0 w-[50px] h-[50px] rounded-full bg-[#b49156] flex items-center justify-center">
                        <span class="text-white text-[26px] font-medium leading-none">2</span>
                    </div>
                    <div>
                        <p class="text-[#4f4f4f] text-[20px] sm:text-[28px] font-medium leading-tight">Comfortable Living</p>
                        <p class="text-[#4f4f4f] text-[13px] font-normal mt-1">Spacious layouts and a peaceful environment for your family's comfort.</p>
                    </div>
                </div>
                <div class="h-px w-full max-w-[429px] ml-[66px]" style="background-color: #e0d5c5;"></div>

                {{-- Item 3 --}}
                <div class="flex gap-4 items-start py-5">
                    <div class="flex-shrink-0 w-[50px] h-[50px] rounded-full bg-[#b49156] flex items-center justify-center">
                        <span class="text-white text-[26px] font-medium leading-none">3</span>
                    </div>
                    <div>
                        <p class="text-[#4f4f4f] text-[20px] sm:text-[28px] font-medium leading-tight">Strategic Location</p>
                        <p class="text-[#4f4f4f] text-[13px] font-normal mt-1">Easy access to schools, shopping centers, Hospital and City center.</p>
                    </div>
                </div>
                <div class="h-px w-full max-w-[429px] ml-[66px]" style="background-color: #e0d5c5;"></div>

                {{-- Item 4 --}}
                <div class="flex gap-4 items-start py-5">
                    <div class="flex-shrink-0 w-[50px] h-[50px] rounded-full bg-[#b49156] flex items-center justify-center">
                        <span class="text-white text-[26px] font-medium leading-none">4</span>
                    </div>
                    <div>
                        <p class="text-[#4f4f4f] text-[20px] sm:text-[28px] font-medium leading-tight">Premium Quality</p>
                        <p class="text-[#4f4f4f] text-[13px] font-normal mt-1">Built with high-quality materials and detailed craftsmanship.</p>
                    </div>
                </div>
                <div class="h-px w-full max-w-[429px] ml-[66px]" style="background-color: #e0d5c5;"></div>

                {{-- Item 5 --}}
                <div class="flex gap-4 items-start py-5">
                    <div class="flex-shrink-0 w-[50px] h-[50px] rounded-full bg-[#b49156] flex items-center justify-center">
                        <span class="text-white text-[26px] font-medium leading-none">5</span>
                    </div>
                    <div>
                        <p class="text-[#4f4f4f] text-[20px] sm:text-[28px] font-medium leading-tight">Safe & Peaceful</p>
                        <p class="text-[#4f4f4f] text-[13px] font-normal mt-1">A secure and calm neighborhood designed for better quality living.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ============================================================ --}}
    {{-- EXCLUSIVE PROPERTIES — dark background                       --}}
    {{-- ============================================================ --}}
    <section id="product" class="w-full py-16 px-6 sm:px-[38px]" style="background-color: #1a1a1a;">
        <div class="max-w-[1280px] mx-auto">

            <h2 class="text-[32px] sm:text-[42px] lg:text-[50px] font-bold text-center leading-tight">
                <span class="text-white">Exclusive </span>
                <span class="text-[#df9b28]">Properties </span>
                <span class="text-white">You I'll Love</span>
            </h2>
            <p class="text-center text-[#898989] text-[16px] sm:text-[20px] font-normal mt-3 mb-12">
                Carefully selected homes that match your lifestyle, taste and dreams
            </p>

            {{-- Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                @forelse ($properties as $property)
                    {{-- Card --}}
                    <div class="bg-white rounded-[20px] shadow-[0px_4px_24px_0px_rgba(0,0,0,0.4)] overflow-hidden
                                hover:shadow-[0px_8px_32px_0px_rgba(180,145,86,0.25)] transition-shadow duration-300">
                        <div class="h-[220px] overflow-hidden rounded-[20px] m-4">
                            <img src="{{ $property->thumbnail ? Storage::url($property->thumbnail) : '/images/property-' . (($loop->index % 3) + 1) . '.jpg' }}" 
                                 alt="{{ $property->name }}" 
                                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="px-4 pb-4">
                            <p class="text-[#b49156] text-[20px] font-semibold truncate">{{ $property->name }}</p>
                            <div class="flex items-center gap-1 mt-1">
                                <img src="/icons/location-icon-dark.svg" alt="Location" class="w-[15px] h-[15px]">
                                <p class="text-[#4f4f4f] text-[13px]">Jakarta Selatan</p>
                            </div>
                            <div class="border-t border-gray-100 mt-3 pt-3 flex items-center gap-4">
                                <div class="flex items-center gap-1">
                                    <img src="/icons/bedroom.svg" alt="Bedroom" class="w-6 h-6">
                                    <span class="text-[#4f4f4f] text-[13px] font-medium">{{ $property->bedrooms }} Beds</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <img src="/icons/bathtub.svg" alt="Bath" class="w-6 h-6">
                                    <span class="text-[#4f4f4f] text-[13px] font-medium">{{ $property->bathrooms }} Baths</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <img src="/icons/carport.svg" alt="Carport" class="w-6 h-6">
                                    <span class="text-[#4f4f4f] text-[13px] font-medium">{{ $property->carports }} Carport</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-3">
                                <p class="text-black text-[16px] font-medium">Rp {{ number_format($property->price, 0, ',', '.') }}</p>
                                <a href="{{ route('properties.show', $property->slug) }}" class="flex items-center gap-1 text-[#b49156] text-[12px] font-semibold hover:gap-2 transition-all duration-200">
                                    View Detail
                                    <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none">
                                        <path d="M3 8h10M9 4l4 4-4 4" stroke="#b49156" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-10">
                        <p class="text-white text-[18px]">No properties available at the moment.</p>
                    </div>
                @endforelse

            </div>

            {{-- See More --}}
            <div class="flex justify-center mt-10">
                <a href="#" class="flex items-center gap-2 text-white text-[20px] font-medium
                                   hover:text-[#b49156] transition-colors duration-200">
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
    {{-- CTA + FOOTER SECTION — dark background                       --}}
    {{-- ============================================================ --}}
    <footer id="contact" style="background-color: #0d0d0d;">

        {{-- CTA Area --}}
        <div class="max-w-[1280px] mx-auto px-6 md:px-16 pt-20 pb-16 flex flex-col lg:flex-row items-center lg:items-start gap-12 lg:gap-16">

            {{-- Kiri: Text + Button --}}
            <div class="flex-1 w-full text-center lg:text-left">
                <h2 class="text-white font-bold leading-[1.15] text-[32px] sm:text-[44px] lg:text-[56px]">
                    Engage with Us in<br class="hidden sm:inline">Conversation.
                </h2>

                <div class="w-[60px] h-[3px] bg-[#b49156] mt-7 mb-6 mx-auto lg:mx-0"></div>

                <p class="text-[#9a9a9a] text-[14px] leading-[24px] max-w-[430px] mx-auto lg:mx-0">
                    In a global world based on communication, a brand must look beyond its borders,
                    open up to new experiences, and dare to be different. Meeting the brightest
                    minds of one's time is the most effective way to nurture creativity.
                </p>

                <a href="#"
                   class="inline-flex items-center gap-2 mt-8 h-[44px] px-8 rounded-[22px]
                          bg-[#b49156] text-white text-[14px] font-medium
                          hover:bg-[#c9a46a] transition-colors duration-200">
                    Contact Us
                    <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none">
                        <path d="M3 8h10M9 4l4 4-4 4" stroke="white" stroke-width="1.5"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>

            {{-- Kanan: Interior Photo --}}
            <div class="w-full lg:w-[520px] max-w-[520px] h-[250px] sm:h-[340px] rounded-[20px] overflow-hidden
                        shadow-[0px_8px_40px_0px_rgba(0,0,0,0.5)]">
                <img src="/images/cta-bg.jpg"
                     alt="Interior"
                     class="w-full h-full object-cover">
            </div>

        </div>

        {{-- Divider --}}
        <div class="max-w-[1280px] mx-auto px-6 md:px-16">
            <div class="h-px bg-white/10"></div>
        </div>

        {{-- Footer Links --}}
        <div class="max-w-[1280px] mx-auto px-6 md:px-16 py-14 grid grid-cols-2 md:grid-cols-4 gap-8">

            {{-- About --}}
            <div>
                <p class="text-white text-[16px] font-bold mb-5">About</p>
                <ul class="flex flex-col gap-3">
                    <li><a href="#" class="text-[#6b6b6b] text-[13px] hover:text-[#b49156] transition-colors duration-200">Our Story</a></li>
                    <li><a href="#" class="text-[#6b6b6b] text-[13px] hover:text-[#b49156] transition-colors duration-200">Store Locator</a></li>
                    <li><a href="#" class="text-[#6b6b6b] text-[13px] hover:text-[#b49156] transition-colors duration-200">Sustainability</a></li>
                    <li><a href="#" class="text-[#6b6b6b] text-[13px] hover:text-[#b49156] transition-colors duration-200">Careers</a></li>
                    <li><a href="#" class="text-[#6b6b6b] text-[13px] hover:text-[#b49156] transition-colors duration-200">Contact</a></li>
                </ul>
            </div>

            {{-- Customer Service --}}
            <div>
                <p class="text-white text-[16px] font-bold mb-5">Customer Service</p>
                <ul class="flex flex-col gap-3">
                    <li><a href="#" class="text-[#6b6b6b] text-[13px] hover:text-[#b49156] transition-colors duration-200">Prices and Payments</a></li>
                    <li><a href="#" class="text-[#6b6b6b] text-[13px] hover:text-[#b49156] transition-colors duration-200">Shipping</a></li>
                    <li><a href="#" class="text-[#6b6b6b] text-[13px] hover:text-[#b49156] transition-colors duration-200">Return Policy</a></li>
                    <li><a href="#" class="text-[#6b6b6b] text-[13px] hover:text-[#b49156] transition-colors duration-200">Terms of Service</a></li>
                    <li><a href="#" class="text-[#6b6b6b] text-[13px] hover:text-[#b49156] transition-colors duration-200">Privacy Policy</a></li>
                </ul>
            </div>

            {{-- Social Media --}}
            <div>
                <p class="text-white text-[16px] font-bold mb-5">Social Media</p>
                <ul class="flex flex-col gap-3">
                    <li><a href="#" class="text-[#6b6b6b] text-[13px] hover:text-[#b49156] transition-colors duration-200">Instagram</a></li>
                    <li><a href="#" class="text-[#6b6b6b] text-[13px] hover:text-[#b49156] transition-colors duration-200">Facebook</a></li>
                    <li><a href="#" class="text-[#6b6b6b] text-[13px] hover:text-[#b49156] transition-colors duration-200">LinkedIn</a></li>
                </ul>
            </div>

            {{-- Brand Logo --}}
            <div class="col-span-2 md:col-span-1 flex md:items-end md:justify-end justify-start pt-6 md:pt-0">
                <p class="text-white font-bold" style="font-size: 48px; line-height: 1;">VHouse</p>
            </div>

        </div>

        {{-- Bottom Bar --}}
        <div class="border-t border-white/[0.06]">
            <div class="max-w-[1280px] mx-auto px-6 md:px-16 py-5 flex flex-col md:flex-row items-center justify-between gap-4 md:gap-0 text-center md:text-left">
                <p class="text-[#454545] text-[12px]">© 2025 VHouse. All rights reserved.</p>
                <div class="flex items-center gap-6">
                    <a href="#" class="text-[#454545] text-[12px] hover:text-[#b49156] transition-colors duration-200">Privacy Policy</a>
                    <span class="text-[#454545]">·</span>
                    <a href="#" class="text-[#454545] text-[12px] hover:text-[#b49156] transition-colors duration-200">Terms of Use</a>
                </div>
            </div>
        </div>

    </footer>

</x-layout>