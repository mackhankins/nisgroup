<div>
    {{-- Contact Section --}}
    <section id="contact" class="py-12 sm:py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-xl mx-auto">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#1a2b3c] text-center">Contact Us</h2>
                <p class="mt-4 text-base sm:text-lg text-gray-600 text-center">Get in touch with us</p>

                @if($showSuccessMessage)
                    <div class="mt-8 bg-green-50 border border-green-200 rounded-lg p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-green-800">Message sent successfully!</h3>
                                <div class="mt-2 text-sm text-green-700">
                                    <p>Thank you for contacting us. We'll get back to you as soon as possible.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <form class="mt-12" wire:submit="save">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="relative">
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    wire:model="name"
                                    class="block w-full rounded-lg border-2 border-gray-200 px-4 py-3 outline-none
                                      focus:border-[#8cc63f] focus:outline-none focus:ring-0
                                      hover:border-[#8cc63f]/50
                                      active:border-[#8cc63f]
                                      transition-all duration-200 ease-in-out
                                      placeholder-gray-400
                                      @error('name') border-red-500 @enderror"
                                    placeholder="Your full name">
                                @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="relative">
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone (optional)</label>
                                <input
                                    type="tel"
                                    name="phone"
                                    id="phone"
                                    wire:model="phone"
                                    class="block w-full rounded-lg border-2 border-gray-200 px-4 py-3 outline-none
                                      focus:border-[#8cc63f] focus:outline-none focus:ring-0
                                      hover:border-[#8cc63f]/50
                                      active:border-[#8cc63f]
                                      transition-all duration-200 ease-in-out
                                      placeholder-gray-400
                                      @error('phone') border-red-500 @enderror"
                                    placeholder="Your phone number">
                                @error('phone')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                wire:model="email"
                                class="block w-full rounded-lg border-2 border-gray-200 px-4 py-3 outline-none
                                  focus:border-[#8cc63f] focus:outline-none focus:ring-0
                                  hover:border-[#8cc63f]/50
                                  active:border-[#8cc63f]
                                  transition-all duration-200 ease-in-out
                                  placeholder-gray-400
                                  @error('email') border-red-500 @enderror"
                                placeholder="your.email@example.com">
                            @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea
                                name="message"
                                id="message"
                                rows="5"
                                wire:model="message"
                                class="block w-full rounded-lg border-2 border-gray-200 px-4 py-3 outline-none
                                 focus:border-[#8cc63f] focus:outline-none focus:ring-0
                                 hover:border-[#8cc63f]/50
                                 active:border-[#8cc63f]
                                 transition-all duration-200 ease-in-out resize-none
                                 placeholder-gray-400
                                 @error('message') border-red-500 @enderror"
                                placeholder="Your message here..."></textarea>
                            @error('message')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-8">
                            <x-turnstile
                                data-theme="light"
                                data-size="flexible"
                                wire:model="turnstile"
                            />
                            @error('turnstile')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-8">
                            <button
                                type="submit"
                                wire:loading.class="opacity-75 cursor-wait"
                                wire:loading.attr="disabled"
                                class="w-full py-4 px-6 text-white bg-[#8cc63f] rounded-lg
                                  hover:bg-[#7bb32f]
                                  font-medium transition-all duration-200 ease-in-out
                                  shadow-sm hover:shadow-md
                                  transform hover:-translate-y-0.5
                                  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#8cc63f]">
                                <span wire:loading.remove>Send Message</span>
                                <span wire:loading>
                                <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Sending...
                            </span>
                            </button>
                        </div>

                        @if (session()->has('error'))
                            <div class="mt-4 bg-red-50 border border-red-200 rounded-lg p-4">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <h3 class="text-sm font-medium text-red-800">Error</h3>
                                        <div class="mt-2 text-sm text-red-700">
                                            <p>{{ session('error') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </form>
                @endif
            </div>
        </div>
    </section>

    {{-- JavaScript for auto-hiding success message and scrolling to contact section --}}
    <script>
        document.addEventListener('contact-form-success', function() {
            setTimeout(function() {
                @this.resetSuccessMessage();
            }, 5000);
        });

        document.addEventListener('scroll-to-contact', function() {
            const contactSection = document.getElementById('contact');
            if (contactSection) {
                contactSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    </script>

    @push('scripts')
        <script>
            document.addEventListener('livewire:initialized', function() {
                Livewire.on('errorsOccurred', () => {
                    const contactSection = document.getElementById('contact');
                    if (contactSection) {
                        contactSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        </script>
    @endpush
</div>
