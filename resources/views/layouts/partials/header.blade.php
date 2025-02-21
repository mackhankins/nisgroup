{{-- resources/views/partials/header.blade.php --}}
<div x-data="{ scrolled: false, mobileMenu: false }"
     x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 30 })">
    {{-- Navigation Bar --}}
    @include('partials.navigation')

    {{-- Mobile menu panel --}}
    @include('partials.mobile-menu')
</div>
