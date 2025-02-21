{{-- resources/views/partials/hero.blade.php --}}
<section id="home" class="relative min-h-[85vh] md:min-h-screen flex items-center bg-[#1a2b3c] overflow-hidden z-0">
    {{-- Hero Background with Overlay --}}
    <div
        class="absolute inset-0 w-full h-full bg-[url('../images/connected-cityscape.webp')] bg-cover bg-center bg-no-repeat opacity-70"></div>
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
