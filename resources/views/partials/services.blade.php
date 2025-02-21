{{-- resources/views/partials/services.blade.php --}}
<section id="services" class="py-12 sm:py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#1a2b3c]">Our Services</h2>
            <p class="mt-4 text-base sm:text-lg text-gray-600 max-w-2xl mx-auto">
                Comprehensive solutions for your business needs
            </p>
        </div>

        {{-- Mobile Services Bubble Scroller (only visible on mobile) --}}
        @include('partials.services-mobile-scroller')

        {{-- Desktop Services Grid (hidden on mobile) --}}
        <div class="hidden sm:grid mt-12 grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @include('partials.service-card', [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-[#8cc63f]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.07c3.904-3.906 10.246-3.906 14.15 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                           </svg>',
                'title' => 'Wireless Network Design',
                'description' => 'NIS offers full-service wireless (wifi) network implementation across the country. We can design, plan, and install your network from start to finish.'
            ])

            @include('partials.service-card', [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-[#8cc63f]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                           </svg>',
                'title' => 'WiFi Site Surveys',
                'description' => 'A professional wireless engineer will perform a comprehensive site survey of your facility to determine the best wireless LAN solution for your location.'
            ])

            @include('partials.service-card', [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-[#8cc63f]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                           </svg>',
                'title' => 'Wireless Performance Audits',
                'description' => 'NIS provides network testing and certification services for new installations and existing networks. Our technicians can document and test your wiring using state-of-the-art equipment.'
            ])
        </div>
    </div>
</section>
