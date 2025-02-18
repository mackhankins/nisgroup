{{-- resources/views/livewire/home.blade.php --}}
<div x-data="{ scrolled: false, mobileMenu: false }"
     x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 30 })"
     class="relative">

    {{-- Navigation Bar --}}
    <nav class="fixed w-full z-50 transition-all duration-300"
         :class="{ 'bg-transparent': !scrolled && window.location.hash === '', 'bg-white shadow-md': scrolled || window.location.hash !== '' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 md:h-20 items-center">
                <div class="flex items-center">
                    <a href="#home" class="text-xl md:text-2xl font-bold transition-colors duration-300"
                       :class="{ 'text-white': !scrolled && window.location.hash === '', 'text-[#2d2d2d]': scrolled || window.location.hash !== '' }">
                        NIS Group
                    </a>
                </div>

                {{-- Mobile menu button --}}
                <div class="flex items-center sm:hidden">
                    <button @click="mobileMenu = !mobileMenu"
                            class="inline-flex items-center justify-center p-2 rounded-md transition-colors duration-300 focus:outline-none"
                            :class="{ 'text-white': !scrolled && window.location.hash === '', 'text-gray-600': scrolled || window.location.hash !== '' }">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" x-show="!mobileMenu" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg class="block h-6 w-6" x-show="mobileMenu" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                {{-- Desktop navigation --}}
                <div class="hidden sm:flex sm:items-center sm:space-x-4 md:space-x-8">
                    <a href="#home" class="nav-link text-sm md:text-base font-medium transition-colors duration-300"
                       :class="{ 'text-white hover:text-[#8cc63f]': !scrolled && window.location.hash === '', 'text-gray-600 hover:text-[#8cc63f]': scrolled || window.location.hash !== '' }">
                        Home
                    </a>
                    <a href="#services" class="nav-link text-sm md:text-base font-medium transition-colors duration-300"
                       :class="{ 'text-white hover:text-[#8cc63f]': !scrolled && window.location.hash === '', 'text-gray-600 hover:text-[#8cc63f]': scrolled || window.location.hash !== '' }">
                        Services
                    </a>
                    <a href="#about" class="nav-link text-sm md:text-base font-medium transition-colors duration-300"
                       :class="{ 'text-white hover:text-[#8cc63f]': !scrolled && window.location.hash === '', 'text-gray-600 hover:text-[#8cc63f]': scrolled || window.location.hash !== '' }">
                        About
                    </a>
                    <a href="#contact" class="inline-flex items-center px-4 py-2 text-sm md:text-base font-medium bg-[#8cc63f] text-white rounded-lg hover:bg-[#7bb32f] transition-colors duration-300">
                        Contact Us
                    </a>
                </div>
            </div>

            {{-- Mobile menu panel --}}
            <div x-show="mobileMenu"
                 x-transition:enter="transition ease-out duration-200 transform"
                 x-transition:enter-start="-translate-y-full opacity-0"
                 x-transition:enter-end="translate-y-0 opacity-100"
                 x-transition:leave="transition ease-in duration-150 transform"
                 x-transition:leave-start="translate-y-0 opacity-100"
                 x-transition:leave-end="-translate-y-full opacity-0"
                 class="sm:hidden absolute left-0 right-0 bg-white shadow-lg rounded-b-lg">
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
        </div>
    </nav>

    {{-- Hero Section --}}
    <section id="home" class="relative min-h-screen flex items-center bg-[#1a2b3c] overflow-hidden">
        {{-- Hero Background with Overlay --}}
        <div class="absolute inset-0 w-full h-full bg-[url('../images/business-5475659.jpg')] bg-cover bg-center bg-no-repeat opacity-70"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#1a2b3c]/90 to-[#1a2b3c]/80"></div>

        <div class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 lg:py-32">
            <div class="text-center">
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight tracking-tight">
                    <span class="block">Fast, Reliable WiFi</span>
                    <span class="block text-[#8cc63f] mt-2">For Your Home or Business</span>
                </h1>
                <p class="mt-6 mx-auto text-base sm:text-lg md:text-xl text-gray-300 max-w-2xl">
                    Experience seamless connectivity with our professional WiFi installation services.
                    We optimize your network for maximum speed and coverage.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row justify-center items-center gap-4">
                    <a href="#contact"
                       class="w-full sm:w-auto px-6 py-3 text-base font-medium text-white bg-[#8cc63f] rounded-lg hover:bg-[#7bb32f] transition-colors duration-300 shadow-lg hover:shadow-xl">
                        Get a Free Quote
                    </a>
                    <a href="#services"
                       class="w-full sm:w-auto px-6 py-3 text-base font-medium text-white border-2 border-white/20 rounded-lg hover:bg-white/10 transition-colors duration-300">
                        See Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services Section --}}
    <section id="services" class="py-12 sm:py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#1a2b3c]">Our Services</h2>
                <p class="mt-4 text-base sm:text-lg text-gray-600 max-w-2xl mx-auto">
                    Comprehensive solutions for your business needs
                </p>
            </div>
            <div class="mt-12 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="bg-white border border-gray-200 rounded-lg p-6 hover:border-[#8cc63f] transition-colors duration-300 shadow-sm hover:shadow-md">
                    <h3 class="text-lg sm:text-xl font-semibold text-[#1a2b3c]">Service 1</h3>
                    <p class="mt-2 text-gray-600">Description of service 1 and its benefits.</p>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg p-6 hover:border-[#8cc63f] transition-colors duration-300 shadow-sm hover:shadow-md">
                    <h3 class="text-lg sm:text-xl font-semibold text-[#1a2b3c]">Service 2</h3>
                    <p class="mt-2 text-gray-600">Description of service 2 and its benefits.</p>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg p-6 hover:border-[#8cc63f] transition-colors duration-300 shadow-sm hover:shadow-md">
                    <h3 class="text-lg sm:text-xl font-semibold text-[#1a2b3c]">Service 3</h3>
                    <p class="mt-2 text-gray-600">Description of service 3 and its benefits.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section id="about" class="py-12 sm:py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-12 lg:items-center">
                <div class="max-w-2xl">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#1a2b3c]">About Us</h2>
                    <p class="mt-4 text-base sm:text-lg text-gray-600">
                        We are a forward-thinking company dedicated to providing innovative solutions.
                        Our team of experts brings years of experience and a passion for excellence.
                    </p>
                    <div class="mt-6">
                        <a href="#contact" class="inline-flex items-center text-[#8cc63f] hover:text-[#7bb32f] font-medium">
                            Learn more about our company
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="mt-8 lg:mt-0">
                    <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
                        <h3 class="text-lg sm:text-xl font-semibold text-[#1a2b3c] mb-4">Our Values</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <span class="text-[#8cc63f] mr-2">•</span>
                                <span class="text-gray-600">Innovation and Excellence</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-[#8cc63f] mr-2">•</span>
                                <span class="text-gray-600">Customer Satisfaction</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-[#8cc63f] mr-2">•</span>
                                <span class="text-gray-600">Professional Integrity</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    <section id="contact" class="py-12 sm:py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-lg mx-auto">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#1a2b3c] text-center">Contact Us</h2>
                <p class="mt-4 text-base sm:text-lg text-gray-600 text-center">Get in touch with us</p>
                <form class="mt-8 space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" id="name"
                               class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-[#8cc63f] focus:border-[#8cc63f] transition-colors duration-300">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email"
                               class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-[#8cc63f] focus:border-[#8cc63f] transition-colors duration-300">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea name="message" id="message" rows="4"
                                  class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-[#8cc63f] focus:border-[#8cc63f] transition-colors duration-300"></textarea>
                    </div>
                    <div>
                        <button type="submit"
                                class="w-full py-3 px-4 text-white bg-[#8cc63f] rounded-lg hover:bg-[#7bb32f] font-medium transition-colors duration-300 shadow-sm hover:shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#8cc63f]">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-[#1a2b3c] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center md:text-left">
                    <h2 class="text-xl sm:text-2xl font-bold">NIS Group</h2>
                    <p class="mt-2 text-sm sm:text-base text-gray-300">Your trusted technology partner</p>
                </div>

                <div class="text-center">
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-300 hover:text-white transition-colors duration-300">Home</a></li>
                        <li><a href="#services" class="text-gray-300 hover:text-white transition-colors duration-300">Services</a></li>
                        <li><a href="#about" class="text-gray-300 hover:text-white transition-colors duration-300">About</a></li>
                        <li><a href="#contact" class="text-gray-300 hover:text-white transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>

                <div class="text-center md:text-right">
                    <h3 class="text-lg font-semibold mb-4">Contact Info</h3>
                    <p class="text-gray-300">Email: info@nisgroup.com</p>
                    <p class="text-gray-300 mt-2">Phone: (555) 123-4567</p>
                </div>
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
            document.addEventListener('DOMContentLoaded', function() {
                const links = document.querySelectorAll('a[href^="#"]');

                links.forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        const sectionId = this.getAttribute('href');
                        scrollToSection(sectionId);
                    });
                });
            });
        </script>
    @endpush
</div>
