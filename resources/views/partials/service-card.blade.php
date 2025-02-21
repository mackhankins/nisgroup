{{-- resources/views/partials/service-card.blade.php --}}
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
            {!! $icon !!}
        </div>

        <!-- Title with animated underline -->
        <h3 class="text-xl sm:text-2xl font-semibold text-white group-hover:text-[#8cc63f] transition-colors duration-300">
            {{ $title }}
        </h3>
        <div class="h-0.5 w-12 bg-[#8cc63f] mt-4 mb-6 group-hover:w-20 transition-all duration-300"></div>

        <!-- Description -->
        <p class="text-gray-300 group-hover:text-white">
            {{ $description }}
        </p>
    </div>
</div>
