{{-- resources/views/partials/mobile-menu.blade.php --}}
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
