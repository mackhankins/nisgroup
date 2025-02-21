{{-- resources/views/partials/navigation.blade.php --}}
<nav class="fixed w-full z-[100] transition-all duration-300 border-0"
     :class="{ 'bg-transparent': !scrolled && !mobileMenu && window.location.hash === '', 'bg-white': scrolled || mobileMenu || window.location.hash !== '' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 md:h-20">
            <div class="flex items-center z-[200] relative h-full">
                <a href="#home"
                   class="text-xl md:text-2xl font-bold transition-colors duration-300 flex items-center h-full -ml-12 sm:ml-0"
                   :class="{ 'text-white': !scrolled && !mobileMenu && window.location.hash === '', 'text-[#2d2d2d]': scrolled || mobileMenu || window.location.hash !== '' }">
                    <div class="flex items-center h-full w-auto">
                        @include('partials.logo', ['scale' => 2.5, 'transform_origin' => 'left center'])
                    </div>
                </a>
            </div>

            {{-- Mobile menu button --}}
            <div class="flex items-center h-full sm:hidden z-[200] relative">
                <button @click="mobileMenu = !mobileMenu"
                        class="inline-flex items-center justify-center p-2 rounded-md transition-colors duration-300 focus:outline-none"
                        :class="{ 'text-white': !scrolled && !mobileMenu && window.location.hash === '', 'text-gray-600': scrolled || mobileMenu || window.location.hash !== '' }">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" x-show="!mobileMenu" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg class="block h-6 w-6" x-show="mobileMenu" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            {{-- Desktop navigation --}}
            <div class="hidden sm:flex sm:items-center sm:space-x-4 md:space-x-8 h-full">
                <a href="#home"
                   class="nav-link text-sm md:text-base font-medium transition-colors duration-300 h-full flex items-center"
                   :class="{ 'text-white hover:text-[#8cc63f]': !scrolled && !mobileMenu && window.location.hash === '', 'text-gray-600 hover:text-[#8cc63f]': scrolled || mobileMenu || window.location.hash !== '' }">
                    Home
                </a>
                <a href="#services"
                   class="nav-link text-sm md:text-base font-medium transition-colors duration-300 h-full flex items-center"
                   :class="{ 'text-white hover:text-[#8cc63f]': !scrolled && !mobileMenu && window.location.hash === '', 'text-gray-600 hover:text-[#8cc63f]': scrolled || mobileMenu || window.location.hash !== '' }">
                    Services
                </a>
                <a href="#about"
                   class="nav-link text-sm md:text-base font-medium transition-colors duration-300 h-full flex items-center"
                   :class="{ 'text-white hover:text-[#8cc63f]': !scrolled && !mobileMenu && window.location.hash === '', 'text-gray-600 hover:text-[#8cc63f]': scrolled || mobileMenu || window.location.hash !== '' }">
                    About
                </a>
                <a href="#contact"
                   class="inline-flex items-center px-4 py-2 text-sm md:text-base font-medium bg-[#8cc63f] text-white rounded-lg hover:bg-[#7bb32f] transition-colors duration-300 my-auto">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</nav>
