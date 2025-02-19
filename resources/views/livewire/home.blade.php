{{-- resources/views/livewire/home.blade.php - Navigation Bar Section --}}
<div x-data="{ scrolled: false, mobileMenu: false }"
     x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 30 })"
     class="relative">

    {{-- Navigation Bar --}}
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

    {{-- Mobile menu panel (moved outside nav to fix z-index issues) --}}
    <div x-show="mobileMenu"
         x-transition:enter="transition ease-out duration-200 transform"
         x-transition:enter-start="-translate-y-full opacity-0"
         x-transition:enter-end="translate-y-0 opacity-100"
         x-transition:leave="transition ease-in duration-150 transform"
         x-transition:leave-start="translate-y-0 opacity-100"
         x-transition:leave-end="-translate-y-full opacity-0"
         class="sm:hidden fixed left-0 right-0 top-16 md:top-20 bg-white shadow-md rounded-b-lg z-[50]">
        <div class="px-4 pt-2 pb-3 space-y-2">
            <a href="#home" @click="mobileMenu = false; scrollToSection('#home')"
               class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-[#8cc63f] hover:bg-gray-50 rounded-md transition-colors duration-300">
                Home
            </a>
            <a href="#services" @click="mobileMenu = false; scrollToSection('#services')"
               class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-[#8cc63f] hover:bg-gray-50 rounded-md transition-colors duration-300">
                Services
            </a>
            <a href="#about" @click="mobileMenu = false; scrollToSection('#about')"
               class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-[#8cc63f] hover:bg-gray-50 rounded-md transition-colors duration-300">
                About
            </a>
            <a href="#contact" @click="mobileMenu = false; scrollToSection('#contact')"
               class="block px-3 py-2 text-base font-medium text-white bg-[#8cc63f] hover:bg-[#7bb32f] rounded-lg transition-colors duration-300">
                Contact Us
            </a>
        </div>
    </div>

    {{-- Hero Section --}}
    <section id="home" class="relative min-h-[85vh] md:min-h-screen flex items-center bg-[#1a2b3c] overflow-hidden z-0">
        {{-- Hero Background with Overlay --}}
        <div
            class="absolute inset-0 w-full h-full bg-[url('../images/business-5475659.jpg')] bg-cover bg-center bg-no-repeat opacity-70"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#1a2b3c]/90 to-[#1a2b3c]/80"></div>


        <div class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 lg:py-32">
            <div class="text-center">
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight tracking-tight">
                    <span class="block">Enterprise WiFi Solutions</span>
                    <span class="block text-[#8cc63f] mt-2">From Survey to Installation</span>
                </h1>
                <p class="mt-6 mx-auto text-base sm:text-lg md:text-xl text-gray-300 max-w-2xl">
                    Comprehensive wireless network services for commercial spaces. Our expert team delivers
                    site surveys, network design, and professional installations to ensure optimal coverage
                    and performance for your facilities.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row justify-center items-center gap-4">
                    <a href="#contact"
                       class="w-full sm:w-auto px-6 py-3 text-base font-medium text-white bg-[#8cc63f] rounded-lg hover:bg-[#7bb32f] transition-colors duration-300 shadow-lg hover:shadow-xl">
                        Get In Touch
                    </a>
                    <a href="#services"
                       class="w-full sm:w-auto px-6 py-3 text-base font-medium text-white border-2 border-white/20 rounded-lg hover:bg-white/10 transition-colors duration-300">
                        Explore Our Solutions
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Enhanced Services Section --}}
    <section id="services" class="py-12 sm:py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#1a2b3c]">Our Services</h2>
                <p class="mt-4 text-base sm:text-lg text-gray-600 max-w-2xl mx-auto">
                    Comprehensive solutions for your business needs
                </p>
            </div>
            <div class="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Service Card 1 -->
                <div x-data="{ hover: false }"
                     @mouseenter="hover = true"
                     @mouseleave="hover = false"
                     class="relative group overflow-hidden rounded-xl transition-all duration-500 ease-in-out cursor-pointer shadow-lg"
                     :class="{ 'transform -translate-y-2 shadow-xl': hover }">
                    <!-- Card Background with Gradient Only -->
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-[#1a2b3c] to-[#2c3e50] group-hover:from-[#1a2b3c] group-hover:to-[#2c4255] transition-colors duration-500"></div>

                    <!-- Card Content -->
                    <div class="relative p-8 h-full flex flex-col">
                        <!-- Icon -->
                        <div class="w-14 h-14 rounded-full bg-[#8cc63f]/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-[#8cc63f]" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.07c3.904-3.906 10.246-3.906 14.15 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                            </svg>
                        </div>

                        <!-- Title with animated underline -->
                        <h3 class="text-xl sm:text-2xl font-semibold text-white group-hover:text-[#8cc63f] transition-colors duration-300">
                            Wireless Network Design
                        </h3>
                        <div
                            class="h-0.5 w-12 bg-[#8cc63f] mt-4 mb-6 group-hover:w-20 transition-all duration-300"></div>

                        <!-- Description -->
                        <p class="text-gray-300 group-hover:text-white">
                            NIS offers full-service wireless (wifi) network implementation across the country. We can
                            design, plan, and install your network from start to finish.
                        </p>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div x-data="{ hover: false }"
                     @mouseenter="hover = true"
                     @mouseleave="hover = false"
                     class="relative group overflow-hidden rounded-xl transition-all duration-500 ease-in-out cursor-pointer shadow-lg"
                     :class="{ 'transform -translate-y-2 shadow-xl': hover }">
                    <!-- Card Background with Gradient Only -->
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-[#1a2b3c] to-[#2c3e50] group-hover:from-[#1a2b3c] group-hover:to-[#2c4255] transition-colors duration-500"></div>

                    <!-- Card Content -->
                    <div class="relative p-8 h-full flex flex-col">
                        <!-- Icon - Magnifying Glass for Site Survey -->
                        <div class="w-14 h-14 rounded-full bg-[#8cc63f]/20 flex items-center justify-center mb-6
                      group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-[#8cc63f]" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>

                        <!-- Title with animated underline -->
                        <h3 class="text-xl sm:text-2xl font-semibold text-white group-hover:text-[#8cc63f] transition-colors duration-300">
                            WiFi Site Surveys
                        </h3>
                        <div
                            class="h-0.5 w-12 bg-[#8cc63f] mt-4 mb-6 group-hover:w-20 transition-all duration-300"></div>

                        <!-- Description -->
                        <p class="text-gray-300 group-hover:text-white">
                            A professional wireless engineer will perform a comprehensive site survey of your facility
                            to determine the best wireless LAN solution for your location.
                        </p>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div x-data="{ hover: false }"
                     @mouseenter="hover = true"
                     @mouseleave="hover = false"
                     class="relative group overflow-hidden rounded-xl transition-all duration-500 ease-in-out cursor-pointer shadow-lg"
                     :class="{ 'transform -translate-y-2 shadow-xl': hover }">
                    <!-- Card Background with Gradient Only -->
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-[#1a2b3c] to-[#2c3e50] group-hover:from-[#1a2b3c] group-hover:to-[#2c4255] transition-colors duration-500"></div>

                    <!-- Card Content -->
                    <div class="relative p-8 h-full flex flex-col">
                        <!-- Icon -->
                        <div class="w-14 h-14 rounded-full bg-[#8cc63f]/20 flex items-center justify-center mb-6
                      group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-[#8cc63f]" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>

                        <!-- Title with animated underline -->
                        <h3 class="text-xl sm:text-2xl font-semibold text-white group-hover:text-[#8cc63f] transition-colors duration-300">
                            Wireless Performance Audits
                        </h3>
                        <div
                            class="h-0.5 w-12 bg-[#8cc63f] mt-4 mb-6 group-hover:w-20 transition-all duration-300"></div>

                        <!-- Description -->
                        <p class="text-gray-300 group-hover:text-white">
                            NIS provides network testing and certification services for new installations and existing
                            networks. Our technicians can document and test your wiring using state-of-the-art
                            equipment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Brands --}}
    @include('partials.brands')

    {{-- Enhanced About Section --}}
    <section id="about" class="py-12 sm:py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-x-12 lg:items-center">
                <!-- About Content Column -->
                <div class="lg:col-span-6">
                    <div class="max-w-xl">
                        <h2 class="text-3xl sm:text-4xl font-bold text-[#1a2b3c]">
                            About NIS Group
                        </h2>
                        <div class="h-1 w-24 bg-[#8cc63f] mt-6 mb-8"></div>

                        <p class="mt-4 text-lg leading-relaxed text-gray-700">
                            With over two decades of experience in commercial WiFi solutions, NIS Group specializes in
                            delivering enterprise-grade wireless networks. Our certified engineers combine cutting-edge
                            technology with proven methods to design and implement networks that meet the demands
                            of modern businesses.
                        </p>

                        <p class="mt-6 text-lg leading-relaxed text-gray-700">
                            From detailed site surveys to complete network installations, we ensure every project
                            meets the highest standards of performance, reliability, and security. Our expertise spans
                            various industries, including hospitality, education, manufacturing, and commercial real
                            estate.
                        </p>

                        <div class="mt-10">
                            <a href="#contact"
                               class="inline-flex items-center px-6 py-3 text-base font-medium text-white bg-[#8cc63f] rounded-lg
                           hover:bg-[#7bb32f] transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                Schedule a consultation
                                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Features Column -->
                <div class="mt-12 lg:mt-0 lg:col-span-6">
                    <div class="bg-gradient-to-br from-[#1a2b3c] to-[#2c3e50] rounded-xl overflow-hidden shadow-xl">
                        <div class="p-8">
                            <h3 class="text-2xl font-semibold text-white mb-6">Why Choose NIS Group</h3>

                            <!-- Feature Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Feature 1 -->
                                <div class="group">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-[#8cc63f]/20 flex items-center justify-center
                                        group-hover:bg-[#8cc63f]/30 transition-colors duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#8cc63f]"
                                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="text-lg font-medium text-white group-hover:text-[#8cc63f] transition-colors duration-300">
                                                Certified Engineers</h4>
                                            <p class="mt-1 text-gray-300">Professional network technicians</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Feature 2 -->
                                <div class="group">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-[#8cc63f]/20 flex items-center justify-center
                                        group-hover:bg-[#8cc63f]/30 transition-colors duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#8cc63f]"
                                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="text-lg font-medium text-white group-hover:text-[#8cc63f] transition-colors duration-300">
                                                Comprehensive Surveys</h4>
                                            <p class="mt-1 text-gray-300">Detailed site planning</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Feature 3 -->
                                <div class="group">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-[#8cc63f]/20 flex items-center justify-center
                                        group-hover:bg-[#8cc63f]/30 transition-colors duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#8cc63f]"
                                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="text-lg font-medium text-white group-hover:text-[#8cc63f] transition-colors duration-300">
                                                Enterprise Equipment</h4>
                                            <p class="mt-1 text-gray-300">Premium grade installation</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Feature 4 -->
                                <div class="group">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-[#8cc63f]/20 flex items-center justify-center
                                        group-hover:bg-[#8cc63f]/30 transition-colors duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#8cc63f]"
                                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="text-lg font-medium text-white group-hover:text-[#8cc63f] transition-colors duration-300">
                                                Nationwide Coverage</h4>
                                            <p class="mt-1 text-gray-300">Service across the country</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Stats Row -->
                            <div class="mt-10 pt-6 grid grid-cols-2 border-t border-gray-600">
                                <div class="text-center py-4">
                                    <p class="text-3xl font-bold text-[#8cc63f]">20+</p>
                                    <p class="text-sm text-gray-300 mt-1">Years Experience</p>
                                </div>
                                <div class="text-center py-4 border-l border-gray-600">
                                    <p class="text-3xl font-bold text-[#8cc63f]">1000+</p>
                                    <p class="text-sm text-gray-300 mt-1">Projects Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    <section id="contact" class="py-12 sm:py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-xl mx-auto">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#1a2b3c] text-center">Contact Us</h2>
                <p class="mt-4 text-base sm:text-lg text-gray-600 text-center">Get in touch with us</p>

                <form class="mt-12">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="relative">
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                            <input type="text" name="name" id="name" required
                                   class="block w-full rounded-lg border-2 border-gray-200 px-4 py-3 outline-none
                                      focus:border-[#8cc63f] focus:outline-none focus:ring-0
                                      hover:border-[#8cc63f]/50
                                      active:border-[#8cc63f]
                                      transition-all duration-200 ease-in-out
                                      placeholder-gray-400">
                        </div>

                        <div class="relative">
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                            <input type="tel" name="phone" id="phone"
                                   class="block w-full rounded-lg border-2 border-gray-200 px-4 py-3 outline-none
                                      focus:border-[#8cc63f] focus:outline-none focus:ring-0
                                      hover:border-[#8cc63f]/50
                                      active:border-[#8cc63f]
                                      transition-all duration-200 ease-in-out
                                      placeholder-gray-400">
                        </div>
                    </div>

                    <div class="mt-6">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" name="email" id="email" required
                               class="block w-full rounded-lg border-2 border-gray-200 px-4 py-3 outline-none
                                  focus:border-[#8cc63f] focus:outline-none focus:ring-0
                                  hover:border-[#8cc63f]/50
                                  active:border-[#8cc63f]
                                  transition-all duration-200 ease-in-out
                                  placeholder-gray-400">
                    </div>

                    <div class="mt-6">
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea name="message" id="message" rows="5" required
                                  class="block w-full rounded-lg border-2 border-gray-200 px-4 py-3 outline-none
                                     focus:border-[#8cc63f] focus:outline-none focus:ring-0
                                     hover:border-[#8cc63f]/50
                                     active:border-[#8cc63f]
                                     transition-all duration-200 ease-in-out resize-none
                                     placeholder-gray-400"></textarea>
                    </div>

                    <div class="mt-8">
                        <button type="submit"
                                class="w-full py-4 px-6 text-white bg-[#8cc63f] rounded-lg
                                   hover:bg-[#7bb32f]
                                   font-medium transition-all duration-200 ease-in-out
                                   shadow-sm hover:shadow-md
                                   transform hover:-translate-y-0.5
                                   focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#8cc63f]">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-[#1a2b3c] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-6">
                <div class="flex items-center justify-center w-full sm:justify-start -ml-12 sm:ml-0">
                    <div class="h-20 flex items-center">
                        @include('partials.logo', ['scale' => 2.5, 'transform_origin' => 'center center'])
                    </div>
                </div>

                <nav class="flex items-center space-x-8 text-base">
                    <a href="#home" class="text-gray-300 hover:text-white transition-colors duration-300">Home</a>
                    <a href="#services"
                       class="text-gray-300 hover:text-white transition-colors duration-300">Services</a>
                    <a href="#about" class="text-gray-300 hover:text-white transition-colors duration-300">About</a>
                    <a href="#contact" class="text-gray-300 hover:text-white transition-colors duration-300">Contact</a>
                </nav>
            </div>

            <div class="mt-8 pt-8 border-t border-gray-700">
                <p class="text-center text-sm text-gray-400">&copy; {{ date('Y') }} NIS Group. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @push('scripts')
        <script>
            function scrollToSection(sectionId) {
                const target = document.querySelector(sectionId);
                if (target) {
                    const headerOffset = 80; // Adjust based on your header height
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            }

            // Handle all navigation links
            document.addEventListener('DOMContentLoaded', function () {
                const links = document.querySelectorAll('a[href^="#"]');

                links.forEach(link => {
                    link.addEventListener('click', function (e) {
                        e.preventDefault();
                        const sectionId = this.getAttribute('href');
                        scrollToSection(sectionId);
                    });
                });
            });
        </script>
    @endpush
</div>
