{{-- resources/views/partials/about.blade.php --}}
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
                        <h3 class="text-2xl font-semibold text-white mb-6">Why Choose Network Integrated Solutions?</h3>

                        <!-- Feature Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            @include('partials.feature-item', [
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#8cc63f]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                           </svg>',
                                'title' => 'Certified Engineers',
                                'description' => 'Professional network technicians'
                            ])

                            @include('partials.feature-item', [
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#8cc63f]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                                           </svg>',
                                'title' => 'Comprehensive Surveys',
                                'description' => 'Detailed site planning'
                            ])

                            @include('partials.feature-item', [
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#8cc63f]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                           </svg>',
                                'title' => 'Enterprise Equipment',
                                'description' => 'Premium grade installation'
                            ])

                            @include('partials.feature-item', [
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#8cc63f]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                           </svg>',
                                'title' => 'Nationwide Coverage',
                                'description' => 'Service across the country'
                            ])
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
