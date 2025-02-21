{{-- resources/views/partials/feature-item.blade.php --}}
<div class="group">
    <div class="flex items-center">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-[#8cc63f]/20 flex items-center justify-center
            group-hover:bg-[#8cc63f]/30 transition-colors duration-300">
            {!! $icon !!}
        </div>
        <div class="ml-4">
            <h4 class="text-lg font-medium text-white group-hover:text-[#8cc63f] transition-colors duration-300">
                {{ $title }}</h4>
            <p class="mt-1 text-gray-300">{{ $description }}</p>
        </div>
    </div>
</div>
