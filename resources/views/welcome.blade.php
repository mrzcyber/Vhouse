<x-layout>
    <x-slot:title>VHouse - Premium Real Estate & Modern Living</x-slot>
    <x-slot:description>Find your luxury dream home with VHouse. We offer premium residential properties with state-of-the-art architecture.</x-slot>
    <x-slot:keywords>luxury home, real estate, modern house, buy property, VHouse</x-slot>

    <!-- Hero Section -->
    <section class="relative min-h-screen bg-black flex items-center justify-center overflow-hidden">
        <!-- Decorative Ambient Light -->
        <div class="absolute top-1/4 left-1/4 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-[#b49156]/10 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-1/4 right-1/4 translate-x-1/2 translate-y-1/2 w-[400px] h-[400px] bg-[#b49156]/5 rounded-full blur-[120px] pointer-events-none"></div>

        <!-- Subtle Grid Pattern Background -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff03_1px,transparent_1px),linear-gradient(to_bottom,#ffffff03_1px,transparent_1px)] bg-[size:40px_40px] pointer-events-none"></div>

        <!-- Hero Content -->
        <div class="relative z-10 max-w-[1280px] mx-auto px-12 pt-[77px] text-center">
            <span class="inline-block text-[#b49156] font-semibold text-xs md:text-sm uppercase tracking-[0.25em] mb-4">
                Introducing VHouse Experience
            </span>
            
            <h1 class="font-serif text-4xl md:text-7xl font-light text-white leading-[1.15] max-w-4xl mx-auto">
                Elevate Your Living <br>
                <span class="font-normal italic text-[#b49156]">to the Absolute Peak</span>
            </h1>
            
            <p class="mt-8 text-[15px] md:text-[16px] text-[#898989] font-light max-w-2xl mx-auto leading-relaxed">
                Discover a curated collection of architectural masterpieces designed for those who appreciate the finer details of modern luxury.
            </p>

            <div class="mt-12 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#" class="w-full sm:w-auto flex items-center justify-center h-[52px] px-8 rounded-[26px] bg-[#b49156] hover:bg-[#a07f45] text-white font-semibold text-[15px] transition-all duration-300 shadow-lg shadow-amber-950/20">
                    Explore Properties
                </a>
                <a href="#" class="w-full sm:w-auto flex items-center justify-center h-[52px] px-8 rounded-[26px] border border-white/20 hover:border-white/50 hover:bg-white/5 text-white font-medium text-[15px] transition-all duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </section>
</x-layout>