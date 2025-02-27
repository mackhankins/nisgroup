{{-- Section with Border and Shadow --}}
<section class="pt-8 pb-4 bg-[#1a2b3c] border-t border-b border-[#243b4d] shadow-[0_0_30px_rgba(0,0,0,0.3)]">
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
                    <div class="flex w-[120px] h-[80px] items-center justify-center mx-8">
                        <img class="svg-white" src="{{ Vite::asset('resources/images/brands/cisco.svg') }}" alt="Cisco" />
                    </div>
                    <div class="flex w-[180px] h-[100px] items-center justify-center mx-8">
                        <img class="svg-white" src="{{ Vite::asset('resources/images/brands/ruckus.svg') }}" alt="CommScope" />
                    </div>
                    <div class="flex w-[180px] h-[100px] items-center justify-center mx-8">
                        <img class="svg-white" src="{{ Vite::asset('resources/images/brands/nomadix.svg') }}" alt="Nomadix" />
                    </div>
                    <div class="flex w-[140px] h-[90px] items-center justify-center my-6 mx-8">
                        <img class="svg-white" src="{{ Vite::asset('resources/images/brands/aruba-networks.svg') }}" alt="Aruba Networks" />
                    </div>
                    <div class="flex w-[180px] h-[100px] items-center justify-center mx-8 my-2.5">
                        <img class="svg-white" src="{{ Vite::asset('resources/images/brands/watchguard.svg') }}" alt="WatchGuard" />
                    </div>
                    <div class="flex w-[180px] h-[100px] items-center justify-center mx-8 my-2.5">
                        <img class="svg-white" src="{{ Vite::asset('resources/images/brands/fortinet.svg') }}" alt="Fortinet" />
                    </div>
                </div>

                {{-- Second logo set (identical spacing) --}}
                <div class="flex">
                    <div class="flex w-[120px] h-[80px] items-center justify-center mx-8">
                        <img class="svg-white" src="{{ Vite::asset('resources/images/brands/cisco.svg') }}" alt="Cisco" />
                    </div>
                    <div class="flex w-[180px] h-[100px] items-center justify-center mx-8">
                        <img class="svg-white" src="{{ Vite::asset('resources/images/brands/ruckus.svg') }}" alt="CommScope" />
                    </div>
                    <div class="flex w-[180px] h-[100px] items-center justify-center mx-8">
                        <img class="svg-white" src="{{ Vite::asset('resources/images/brands/nomadix.svg') }}" alt="Nomadix" />
                    </div>
                    <div class="flex w-[140px] h-[90px] items-center justify-center my-6 mx-8">
                        <img class="svg-white" src="{{ Vite::asset('resources/images/brands/aruba-networks.svg') }}" alt="Aruba Networks" />
                    </div>
                    <div class="flex w-[180px] h-[100px] items-center justify-center mx-8 my-2.5">
                        <img class="svg-white" src="{{ Vite::asset('resources/images/brands/watchguard.svg') }}" alt="WatchGuard" />
                    </div>
                    <div class="flex w-[180px] h-[100px] items-center justify-center mx-8 my-2.5">
                        <img class="svg-white" src="{{ Vite::asset('resources/images/brands/fortinet.svg') }}" alt="Fortinet" />
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
