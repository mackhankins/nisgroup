{{-- resources/views/livewire/home.blade.php --}}
<div class="relative">
    {{-- Header with Navigation --}}
    @include('layouts.partials.header')

    {{-- Hero Section --}}
    @include('partials.hero')

    {{-- Services Section --}}
    @include('partials.services')

    {{-- About Section --}}
    @include('partials.about')

    {{-- Brands --}}
    @include('partials.brands')

    {{-- Contact Form --}}
    <livewire:contact-form />

    {{-- Footer --}}
    @include('layouts.partials.footer')

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
</div>
