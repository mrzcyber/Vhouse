<x-layout>
    <x-slot:title>
        {{ $property->name }} - VHouse Premium Real Estate
    </x-slot:title>
    <x-slot:description>
        {{ Str::limit(strip_tags($property->description), 150) }}
    </x-slot:description>

    {{-- Detail Header / Hero --}}
    <section class="relative w-full h-[350px] lg:h-[450px] overflow-hidden flex items-center justify-center">
        <div class="absolute inset-0 z-0">
            <img src="{{ $property->thumbnail ? Storage::url($property->thumbnail) : '/images/property-1.jpg' }}" 
                 alt="{{ $property->name }}" 
                 class="w-full h-full object-cover filter blur-[2px] scale-105">
            <div class="absolute inset-0 bg-black/60"></div>
        </div>

        <div class="relative z-10 max-w-[1280px] w-full mx-auto px-6 md:px-[150px] text-center lg:text-left mt-16">
            <p class="text-[#b49156] text-[14px] sm:text-[16px] font-semibold tracking-widest uppercase"
               data-aos="fade-down" data-aos-duration="800">Property Details</p>
            <h1 class="text-[36px] sm:text-[50px] lg:text-[64px] text-white font-bold leading-tight mt-2" 
                style="font-family: 'Playfair Display', serif;"
                data-aos="fade-up" data-aos-duration="1000">
                {{ $property->name }}
            </h1>
            <div class="flex items-center justify-center lg:justify-start gap-2 mt-4 text-white/80"
                 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <img src="/icons/location-icon.svg" alt="Location" class="w-[20px] h-[20px] filter brightness-0 invert">
                <span class="text-[14px] sm:text-[16px]">Jakarta Selatan, Indonesia</span>
            </div>
        </div>
    </section>

    {{-- Main Content Section --}}
    <section class="w-full py-16 px-6 md:px-[150px] bg-[#faf6f0] overflow-hidden">
        <div class="max-w-[1280px] mx-auto flex flex-col lg:flex-row gap-12 lg:gap-16 items-start">
            
            {{-- Left Side: Details & Gallery --}}
            <div class="flex-grow w-full lg:w-0">
                {{-- Main Image --}}
                <div class="w-full h-[300px] sm:h-[450px] lg:h-[500px] rounded-[30px] overflow-hidden shadow-lg bg-white mb-10"
                     data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ $property->thumbnail ? Storage::url($property->thumbnail) : '/images/property-1.jpg' }}" 
                         alt="{{ $property->name }}" 
                         class="w-full h-full object-cover">
                </div>

                {{-- Description --}}
                <div class="bg-white rounded-[30px] p-6 sm:p-10 shadow-[0px_4px_20px_rgba(0,0,0,0.05)] mb-10"
                     data-aos="fade-up" data-aos-duration="1000">
                    <h3 class="text-[#b49156] text-[20px] font-bold mb-4" style="font-family: 'Playfair Display', serif;">
                        Description
                    </h3>
                    <div class="w-[40px] h-[2px] bg-[#b49156] mb-6"></div>
                    <p class="text-[#4f4f4f] text-[16px] leading-[28px] whitespace-pre-line">
                        {{ $property->description }}
                    </p>
                </div>

                {{-- Gallery --}}
                @if($property->images && $property->images->count() > 0)
                    <div x-data="{ isOpen: false, activeImage: '' }" class="bg-white rounded-[30px] p-6 sm:p-10 shadow-[0px_4px_20px_rgba(0,0,0,0.05)]"
                         data-aos="fade-up" data-aos-duration="1000">
                        <h3 class="text-[#b49156] text-[20px] font-bold mb-4" style="font-family: 'Playfair Display', serif;">
                            Property Gallery
                        </h3>
                        <div class="w-[40px] h-[2px] bg-[#b49156] mb-6"></div>
                        
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                            @foreach($property->images as $gallery)
                                @php
                                    $imagePath = Str::contains($gallery->image, 'dummy') ? '/images/property-' . (($loop->index % 3) + 1) . '.jpg' : Storage::url($gallery->image);
                                @endphp
                                <div class="h-[120px] sm:h-[180px] rounded-[20px] overflow-hidden group cursor-pointer shadow-sm"
                                     data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ ($loop->index % 3) * 100 }}"
                                     @click="isOpen = true; activeImage = '{{ $imagePath }}'">
                                    <img src="{{ $imagePath }}" 
                                         alt="Gallery Image" 
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                </div>
                            @endforeach
                        </div>

                        <!-- Lightbox Modal -->
                        <div x-show="isOpen" 
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition ease-in duration-200"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             class="fixed inset-0 z-50 flex items-center justify-center bg-black/95 p-4 md:p-10"
                             style="display: none;"
                             @keydown.escape.window="isOpen = false">
                            
                            <!-- Backdrop Click Area -->
                            <div class="absolute inset-0 cursor-zoom-out" @click="isOpen = false"></div>
                            
                            <!-- Close Button (Floating Top Right) -->
                            <button @click="isOpen = false" 
                                    class="absolute top-6 right-6 z-50 flex items-center justify-center w-12 h-12 rounded-full bg-white/10 hover:bg-white/20 text-white hover:text-[#b49156] transition-all duration-200 focus:outline-none cursor-pointer">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                            
                            <div class="relative max-w-5xl max-h-[85vh] md:max-h-[90vh] z-10 flex items-center justify-center pointer-events-none">
                                <img :src="activeImage" 
                                     alt="Full Size Gallery Image" 
                                     class="max-w-full max-h-[80vh] md:max-h-[90vh] rounded-lg shadow-2xl object-contain transition-transform duration-300 pointer-events-auto"
                                     x-show="isOpen"
                                     x-transition:enter="transition ease-out duration-300 transform scale-95"
                                     x-transition:enter-start="scale-95"
                                     x-transition:enter-end="scale-100">
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            {{-- Right Side: Quick Specs & Inquiry Card --}}
            <div class="w-full lg:w-[400px] flex-shrink-0">
                {{-- Price & Specs Card --}}
                <div class="bg-white rounded-[30px] p-8 shadow-[0px_8px_30px_rgba(0,0,0,0.08)] mb-8 border border-gray-100"
                     data-aos="fade-left" data-aos-duration="1000">
                    <div class="mb-6">
                        <p class="text-[#898989] text-[13px] font-medium tracking-wider uppercase">Asking Price</p>
                        <h2 class="text-black text-[28px] sm:text-[36px] font-bold mt-1">
                            Rp {{ number_format($property->price, 0, ',', '.') }}
                        </h2>
                    </div>

                    <div class="w-full h-px bg-gray-100 my-6"></div>

                    <h4 class="text-[#b49156] text-[16px] font-bold mb-4">Property Specifications</h4>

                    <div class="flex flex-col gap-4">
                        {{-- LT --}}
                        <div class="flex items-center justify-between py-2 border-b border-gray-50 text-[14px]">
                            <span class="text-gray-500 font-medium">Land Area (LT)</span>
                            <span class="text-black font-semibold">{{ $property->lt }} m²</span>
                        </div>
                        {{-- LB --}}
                        <div class="flex items-center justify-between py-2 border-b border-gray-50 text-[14px]">
                            <span class="text-gray-500 font-medium">Building Area (LB)</span>
                            <span class="text-black font-semibold">{{ $property->lb }} m²</span>
                        </div>
                        {{-- Floors --}}
                        <div class="flex items-center justify-between py-2 border-b border-gray-50 text-[14px]">
                            <span class="text-gray-500 font-medium">Total Floors</span>
                            <span class="text-black font-semibold">{{ $property->floors }} Floors</span>
                        </div>
                        {{-- Bedrooms --}}
                        <div class="flex items-center justify-between py-2 border-b border-gray-50 text-[14px]">
                            <span class="text-gray-500 font-medium">Bedrooms</span>
                            <span class="text-black font-semibold">{{ $property->bedrooms }} Beds</span>
                        </div>
                        {{-- Bathrooms --}}
                        <div class="flex items-center justify-between py-2 border-b border-gray-50 text-[14px]">
                            <span class="text-gray-500 font-medium">Bathrooms</span>
                            <span class="text-black font-semibold">{{ $property->bathrooms }} Baths</span>
                        </div>
                        {{-- Carports --}}
                        <div class="flex items-center justify-between py-2 border-b border-gray-50 text-[14px]">
                            <span class="text-gray-500 font-medium">Carports</span>
                            <span class="text-black font-semibold">{{ $property->carports }} Cars</span>
                        </div>
                        {{-- Status --}}
                        <div class="flex items-center justify-between py-2 text-[14px]">
                            <span class="text-gray-500 font-medium">Availability</span>
                            <span class="px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider {{ $property->status ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                {{ $property->status ? 'Ready / Available' : 'Sold Out' }}
                            </span>
                        </div>
                    </div>
                </div>

                {{-- Contact Agent Card --}}
                <div class="bg-[#1a1a1a] rounded-[30px] p-8 shadow-[0px_8px_30px_rgba(0,0,0,0.15)] text-white text-center"
                     data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <p class="text-[#b49156] text-[13px] font-bold tracking-wider uppercase mb-2">Interested in this property?</p>
                    <h3 class="text-white text-[24px] font-medium leading-snug mb-6" style="font-family: 'Playfair Display', serif;">
                        Schedule a Private Viewing
                    </h3>
                    
                    <a href="https://wa.me/628123456789?text=Hello%20VHouse,%20I%20am%20interested%20in%20learning%20more%20about%20{{ urlencode($property->name) }}" 
                       target="_blank"
                       class="flex items-center justify-center gap-2 w-full h-[48px] rounded-[24px] bg-[#b49156] hover:bg-[#c9a46a] text-white font-medium text-[14px] transition-colors duration-200">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12.012 2c-5.506 0-9.989 4.478-9.99 9.984a9.96 9.96 0 0 0 1.37 5.084L2 22l5.094-1.33a9.926 9.926 0 0 0 4.912 1.306h.004c5.505 0 9.99-4.478 9.99-9.988 0-2.667-1.038-5.176-2.925-7.067C17.188 3.037 14.68 2 12.012 2zm5.79 14.1c-.247.694-1.42 1.272-1.956 1.332-.48.053-.984.077-1.488-.073-.314-.093-.7-.207-1.196-.419a10.024 10.024 0 0 1-4.088-3.606c-.463-.64-.813-1.32-.988-2.023-.174-.7-.105-1.347.162-1.8.196-.334.464-.627.697-.894l.448-.519c.148-.173.272-.27.382-.27.11 0 .21.043.297.162l1.037 2.126c.074.153.111.314.037.457a1.05 1.05 0 0 1-.395.49c-.161.127-.321.233-.494.39-.161.147-.321.314-.148.614.346.593.778 1.153 1.284 1.66.654.654 1.346 1.134 2.087 1.48.272.127.432.107.593-.073.16-.18.691-.8.877-1.079.185-.28.37-.233.629-.14l2.222.973c.259.113.432.22.494.32.062.107.062.613-.185 1.307z"/>
                        </svg>
                        Inquire via WhatsApp
                    </a>
                </div>
            </div>

        </div>
    </section>
</x-layout>
