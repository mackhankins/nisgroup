{{-- resources/views/partials/services-mobile-scroller.blade.php --}}
<div
    x-data="{
        currentSlide: 0,
        totalSlides: 3,
        touchStartX: 0,
        touchEndX: 0,
        isSwiping: false,
        init() {
            this.$watch('currentSlide', value => {
                // Force redraw to ensure smooth transition
                this.$nextTick(() => {
                    const slider = this.$refs.serviceSlider;
                    slider.scrollLeft = value * slider.clientWidth;
                });
            });
        },
        nextSlide() {
            this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
        },
        prevSlide() {
            this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
        },
        goToSlide(index) {
            this.currentSlide = index;
        },
        handleTouchStart(e) {
            this.touchStartX = e.changedTouches[0].screenX;
            this.isSwiping = true;
        },
        handleTouchEnd(e) {
            if (!this.isSwiping) return;

            this.touchEndX = e.changedTouches[0].screenX;
            this.isSwiping = false;

            // Calculate swipe distance
            const swipeDistance = this.touchStartX - this.touchEndX;

            // Minimum distance required to register as a swipe
            if (Math.abs(swipeDistance) > 50) {
                if (swipeDistance > 0) {
                    this.nextSlide();
                } else {
                    this.prevSlide();
                }
            }
        },
        handleScroll() {
            const slider = this.$refs.serviceSlider;
            const newSlide = Math.round(slider.scrollLeft / slider.clientWidth);
            if (newSlide !== this.currentSlide) {
                this.currentSlide = newSlide;
            }
        }
    }"
    class="sm:hidden mt-12"
>
    <!-- Service Slider -->
    <div
        x-ref="serviceSlider"
        @touchstart="handleTouchStart"
        @touchend="handleTouchEnd"
        @scroll.throttle.100ms="handleScroll"
        class="flex overflow-x-auto snap-x snap-mandatory scrollbar-hide"
        style="scroll-behavior: smooth; -webkit-overflow-scrolling: touch; scrollbar-width: none; -ms-overflow-style: none; min-height: 360px;"
    >
        <!-- Service Card 1 -->
        <div class="min-w-full w-full flex-shrink-0 px-4 snap-center flex">
            <div
                x-data="{ hover: false }"
                @mouseenter="hover = true"
                @mouseleave="hover = false"
                class="relative group overflow-hidden rounded-xl transition-all duration-500 ease-in-out cursor-pointer shadow-lg flex-1 flex flex-col"
                :class="{ 'transform -translate-y-2 shadow-xl': hover }"
            >
                <!-- Card Background with Gradient Only -->
                <div class="absolute inset-0 bg-gradient-to-br from-[#1a2b3c] to-[#2c3e50] group-hover:from-[#1a2b3c] group-hover:to-[#2c4255] transition-colors duration-500"></div>

                <!-- Card Content -->
                <div class="relative p-8 flex-1 flex flex-col">
                    <!-- Icon -->
                    <div class="w-14 h-14 rounded-full bg-[#8cc63f]/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-[#8cc63f]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.07c3.904-3.906 10.246-3.906 14.15 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                        </svg>
                    </div>

                    <!-- Title with animated underline -->
                    <h3 class="text-xl sm:text-2xl font-semibold text-white group-hover:text-[#8cc63f] transition-colors duration-300">
                        Wireless Network Design
                    </h3>
                    <div class="h-0.5 w-12 bg-[#8cc63f] mt-4 mb-6 group-hover:w-20 transition-all duration-300"></div>

                    <!-- Description -->
                    <p class="text-gray-300 group-hover:text-white">
                        NIS offers full-service wireless (wifi) network implementation across the country. We can design, plan, and install your network from start to finish.
                    </p>
                </div>
            </div>
        </div>

        <!-- Service Card 2 -->
        <div class="min-w-full w-full flex-shrink-0 px-4 snap-center flex">
            <div
                x-data="{ hover: false }"
                @mouseenter="hover = true"
                @mouseleave="hover = false"
                class="relative group overflow-hidden rounded-xl transition-all duration-500 ease-in-out cursor-pointer shadow-lg flex-1 flex flex-col"
                :class="{ 'transform -translate-y-2 shadow-xl': hover }"
            >
                <!-- Card Background with Gradient Only -->
                <div class="absolute inset-0 bg-gradient-to-br from-[#1a2b3c] to-[#2c3e50] group-hover:from-[#1a2b3c] group-hover:to-[#2c4255] transition-colors duration-500"></div>

                <!-- Card Content -->
                <div class="relative p-8 flex-1 flex flex-col">
                    <!-- Icon - Magnifying Glass for Site Survey -->
                    <div class="w-14 h-14 rounded-full bg-[#8cc63f]/20 flex items-center justify-center mb-6
                  group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-[#8cc63f]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>

                    <!-- Title with animated underline -->
                    <h3 class="text-xl sm:text-2xl font-semibold text-white group-hover:text-[#8cc63f] transition-colors duration-300">
                        WiFi Site Surveys
                    </h3>
                    <div class="h-0.5 w-12 bg-[#8cc63f] mt-4 mb-6 group-hover:w-20 transition-all duration-300"></div>

                    <!-- Description -->
                    <p class="text-gray-300 group-hover:text-white">
                        A professional wireless engineer will perform a comprehensive site survey of your facility to determine the best wireless LAN solution for your location.
                    </p>
                </div>
            </div>
        </div>

        <!-- Service Card 3 -->
        <div class="min-w-full w-full flex-shrink-0 px-4 snap-center flex">
            <div
                x-data="{ hover: false }"
                @mouseenter="hover = true"
                @mouseleave="hover = false"
                class="relative group overflow-hidden rounded-xl transition-all duration-500 ease-in-out cursor-pointer shadow-lg flex-1 flex flex-col"
                :class="{ 'transform -translate-y-2 shadow-xl': hover }"
            >
                <!-- Card Background with Gradient Only -->
                <div class="absolute inset-0 bg-gradient-to-br from-[#1a2b3c] to-[#2c3e50] group-hover:from-[#1a2b3c] group-hover:to-[#2c4255] transition-colors duration-500"></div>

                <!-- Card Content -->
                <div class="relative p-8 flex-1 flex flex-col">
                    <!-- Icon -->
                    <div class="w-14 h-14 rounded-full bg-[#8cc63f]/20 flex items-center justify-center mb-6
                  group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-[#8cc63f]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>

                    <!-- Title with animated underline -->
                    <h3 class="text-xl sm:text-2xl font-semibold text-white group-hover:text-[#8cc63f] transition-colors duration-300">
                        Wireless Performance Audits
                    </h3>
                    <div class="h-0.5 w-12 bg-[#8cc63f] mt-4 mb-6 group-hover:w-20 transition-all duration-300"></div>

                    <!-- Description -->
                    <p class="text-gray-300 group-hover:text-white">
                        NIS provides network testing and certification services for new installations and existing networks. Our technicians can document and test your wiring using state-of-the-art equipment.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination Dots -->
    <div class="flex justify-center items-center space-x-2 mt-6 mb-2">
        <template x-for="(_, index) in Array.from({ length: totalSlides })" :key="index">
            <button
                @click="goToSlide(index)"
                class="w-3 h-3 rounded-full transition-all duration-300 focus:outline-none"
                :class="currentSlide === index ? 'bg-[#8cc63f]' : 'bg-gray-300'"
                aria-label="Go to slide"
            ></button>
        </template>
    </div>
</div>

<style>
    /* Hide scrollbar for Chrome, Safari and Opera */
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
</style>
