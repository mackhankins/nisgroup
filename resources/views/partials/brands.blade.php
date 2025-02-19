{{-- Section with Border and Shadow --}}
<section class="py-10 bg-[#1a2b3c] border-t border-b border-[#243b4d] shadow-[0_0_30px_rgba(0,0,0,0.3)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Marquee container with overflow hidden and gradient overlays --}}
        <div class="relative overflow-hidden w-full">
            {{-- Left gradient overlay --}}
            <div class="absolute left-0 top-0 z-10 h-full w-[100px] bg-gradient-to-r from-[#1a2b3c] to-transparent"></div>

            {{-- Right gradient overlay --}}
            <div class="absolute right-0 top-0 z-10 h-full w-[100px] bg-gradient-to-l from-[#1a2b3c] to-transparent"></div>

            {{-- The actual scrolling container --}}
            <div class="inline-flex animate-infinite-scroll">
                {{-- First logo set --}}
                <div class="flex">
                    <div class="flex w-[160px] h-[80px] items-center justify-center mx-8">
                        <div class="text-4xl font-bold text-white/90">A</div>
                    </div>
                    <div class="flex w-[160px] h-[80px] items-center justify-center mx-8">
                        <div class="text-4xl font-bold text-white/90">B</div>
                    </div>
                    <div class="flex w-[160px] h-[80px] items-center justify-center mx-8">
                        <div class="text-4xl font-bold text-white/90">C</div>
                    </div>
                    <div class="flex w-[160px] h-[80px] items-center justify-center mx-8">
                        <div class="text-4xl font-bold text-white/90">D</div>
                    </div>
                    <div class="flex w-[160px] h-[80px] items-center justify-center mx-8">
                        <div class="text-4xl font-bold text-white/90">E</div>
                    </div>
                    <div class="flex w-[160px] h-[80px] items-center justify-center mx-8">
                        <div class="text-4xl font-bold text-white/90">F</div>
                    </div>
                </div>

                {{-- Second logo set (identical spacing) --}}
                <div class="flex">
                    <div class="flex w-[160px] h-[80px] items-center justify-center mx-8">
                        <div class="text-4xl font-bold text-white/90">A</div>
                    </div>
                    <div class="flex w-[160px] h-[80px] items-center justify-center mx-8">
                        <div class="text-4xl font-bold text-white/90">B</div>
                    </div>
                    <div class="flex w-[160px] h-[80px] items-center justify-center mx-8">
                        <div class="text-4xl font-bold text-white/90">C</div>
                    </div>
                    <div class="flex w-[160px] h-[80px] items-center justify-center mx-8">
                        <div class="text-4xl font-bold text-white/90">D</div>
                    </div>
                    <div class="flex w-[160px] h-[80px] items-center justify-center mx-8">
                        <div class="text-4xl font-bold text-white/90">E</div>
                    </div>
                    <div class="flex w-[160px] h-[80px] items-center justify-center mx-8">
                        <div class="text-4xl font-bold text-white/90">F</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
