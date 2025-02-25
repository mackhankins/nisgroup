<div>
    {{-- Contact Section --}}
    <section id="contact" class="py-12 sm:py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-xl mx-auto">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#1a2b3c] text-center">Contact Us</h2>
                <p class="mt-4 text-base sm:text-lg text-gray-600 text-center">Get in touch with us</p>

                <form class="mt-12" wire:submit="save">
                    @if($showSuccessMessage)
                        <div class="mb-8 bg-green-50 border border-green-200 rounded-lg p-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-sm font-medium text-green-800">Message sent successfully!</h3>
                                    <div class="mt-2 text-sm text-green-700">
                                        <p>Thank you for contacting us. We'll get back to you as soon as possible.</p>
                                    </div>
                                    <button
                                        type="button"
                                        wire:click="resetForm"
                                        class="mt-3 text-sm text-green-600 hover:text-green-800 font-medium">
                                        Send another message
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div x-data="{}" wire:key="contact-form-fields">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="relative">
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    wire:model="name"
                                    x-bind:disabled="$wire.showSuccessMessage"
                                    class="block w-full rounded-lg border-2 border-gray-200 px-4 py-3 outline-none
                                      focus:border-[#8cc63f] focus:outline-none focus:ring-0
                                      hover:border-[#8cc63f]/50
                                      active:border-[#8cc63f]
                                      transition-all duration-200 ease-in-out
                                      placeholder-gray-400
                                      disabled:opacity-50 disabled:cursor-not-allowed
                                      @error('name') border-red-500 @enderror"
                                    placeholder="Your full name">
                                @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone
                                    (optional)</label>
                                <div class="flex gap-2">
                                    <!-- Country code dropdown -->
                                    <div class="w-20">
                                        <select
                                            id="country_code"
                                            wire:model.defer="country_code"
                                            x-bind:disabled="$wire.showSuccessMessage"
                                            class="block w-full rounded-lg border-2 border-gray-200 px-3 py-3 outline-none
                  focus:border-[#8cc63f] focus:outline-none focus:ring-0
                  hover:border-[#8cc63f]/50
                  active:border-[#8cc63f]
                  transition-all duration-200 ease-in-out appearance-none
                  disabled:opacity-50 disabled:cursor-not-allowed
                  bg-white">
                                            <option value="+1">+1</option>
                                            <option value="+44">+44</option>
                                            <option value="+49">+49</option>
                                            <option value="+33">+33</option>
                                            <option value="+61">+61</option>
                                            <option value="+86">+86</option>
                                            <option value="+91">+91</option>
                                        </select>
                                    </div>

                                    <!-- Phone number input -->
                                    <div class="flex-1">
                                        <input
                                            type="tel"
                                            name="phone_number"
                                            id="phone_number"
                                            wire:model.defer="phone_number"
                                            x-mask="(999) 999-9999"
                                            x-bind:disabled="$wire.showSuccessMessage"
                                            class="block w-full rounded-lg border-2 border-gray-200 px-4 py-3 outline-none
                  focus:border-[#8cc63f] focus:outline-none focus:ring-0
                  hover:border-[#8cc63f]/50
                  active:border-[#8cc63f]
                  transition-all duration-200 ease-in-out
                  placeholder-gray-400
                  disabled:opacity-50 disabled:cursor-not-allowed"
                                            placeholder="">
                                    </div>

                                    <!-- Help icon - hide on mobile -->
                                    <div class="hidden md:flex items-center ml-1">
                                        <div x-data="{showHelp: false}" class="text-gray-500">
                                            <button type="button"
                                                    @mouseenter="showHelp = true"
                                                    @mouseleave="showHelp = false"
                                                    class="cursor-help focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                     viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                </svg>
                                            </button>
                                            <div x-show="showHelp"
                                                 class="absolute mt-1 w-48 bg-gray-800 text-white text-xs rounded py-2 px-3 shadow-lg z-10"
                                                 x-transition:enter="transition ease-out duration-200"
                                                 x-transition:enter-start="opacity-0 transform scale-95"
                                                 x-transition:enter-end="opacity-100 transform scale-100"
                                                 x-transition:leave="transition ease-in duration-100"
                                                 x-transition:leave-start="opacity-100 transform scale-100"
                                                 x-transition:leave-end="opacity-0 transform scale-95">
                                                Enter phone number without formatting. Common country codes include +1
                                                (US/Canada), +44 (UK), +49 (Germany).
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @error('phone_number')
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
                                x-bind:disabled="$wire.showSuccessMessage"
                                class="block w-full rounded-lg border-2 border-gray-200 px-4 py-3 outline-none
                                  focus:border-[#8cc63f] focus:outline-none focus:ring-0
                                  hover:border-[#8cc63f]/50
                                  active:border-[#8cc63f]
                                  transition-all duration-200 ease-in-out
                                  placeholder-gray-400
                                  disabled:opacity-50 disabled:cursor-not-allowed
                                  @error('email') border-red-500 @enderror"
                                placeholder="your.email@example.com">
                            @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Honeypot field - hidden from real users but visible to bots --}}
                        <div class="opacity-0 absolute left-[-9999px] top-[-9999px] h-0 w-0 overflow-hidden">
                            <label for="username">Username (Don't fill this out)</label>
                            <input
                                type="text"
                                name="username"
                                id="username"
                                wire:model="username"
                                tabindex="-1"
                                autocomplete="off">
                        </div>

                        <div class="mt-6">
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea
                                name="message"
                                id="message"
                                rows="5"
                                wire:model="message"
                                x-bind:disabled="$wire.showSuccessMessage"
                                class="block w-full rounded-lg border-2 border-gray-200 px-4 py-3 outline-none
                                 focus:border-[#8cc63f] focus:outline-none focus:ring-0
                                 hover:border-[#8cc63f]/50
                                 active:border-[#8cc63f]
                                 transition-all duration-200 ease-in-out resize-none
                                 placeholder-gray-400
                                 disabled:opacity-50 disabled:cursor-not-allowed
                                 @error('message') border-red-500 @enderror"
                                placeholder="Your message here..."></textarea>
                            @error('message')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-8" x-show="!$wire.showSuccessMessage">
                            <div wire:ignore>
                                <x-turnstile
                                    data-theme="light"
                                    data-size="flexible"
                                    wire:model="turnstileResponse"
                                    data-callback="onTurnstileSuccess"
                                />
                            </div>
                            @error('turnstileResponse')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-8" x-show="!$wire.showSuccessMessage">
                            <button
                                type="submit"
                                wire:loading.class="opacity-75 cursor-wait"
                                wire:loading.attr="disabled"
                                x-bind:disabled="$wire.showSuccessMessage"
                                class="w-full py-4 px-6 text-white bg-[#8cc63f] rounded-lg
                                  hover:bg-[#7bb32f]
                                  font-medium transition-all duration-200 ease-in-out
                                  shadow-sm hover:shadow-md
                                  transform hover:-translate-y-0.5
                                  disabled:opacity-50 disabled:cursor-not-allowed
                                  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#8cc63f]">
                                <span wire:loading.remove>Send Message</span>
                                <span wire:loading>
                                <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white inline-block"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                            stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                          d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Sending...
                            </span>
                            </button>
                        </div>
                    </div>

                    @if (session()->has('error'))
                        <div class="mt-4 bg-red-50 border border-red-200 rounded-lg p-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                              clip-rule="evenodd"/>
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
            </div>
        </div>
    </section>
</div>

@push('scripts')
    <script>
        document.addEventListener('livewire:initialized', function () {
            // Listen for the existing errors event
            Livewire.on('errorsOccurred', () => {
                const contactSection = document.getElementById('contact');
                if (contactSection) {
                    contactSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });

            // Add this new event listener for form reset
            Livewire.on('formReset', () => {
                // Reset the Turnstile widget
                if (typeof turnstile !== 'undefined') {
                    turnstile.reset();
                }
            });
        });

        // Define the callback function for Turnstile
        function onTurnstileSuccess(token) {
            // Find Livewire component and set the token value
            const component = window.Livewire.find(
                document.querySelector('[wire\\:id]').getAttribute('wire:id')
            );

            if (component) {
                component.set('turnstileResponse', token);
            }
        }
    </script>
@endpush
