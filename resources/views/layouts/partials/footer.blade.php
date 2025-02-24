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
            <p class="text-center text-sm text-gray-400">&copy; {{ date('Y') }} Network Integrated Solutions Group. All rights reserved.</p>
        </div>
    </div>
</footer>
