{{-- Contact Section --}}
<section id="contact" class="py-12 sm:py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-xl mx-auto">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#1a2b3c] text-center">Contact Us</h2>
            <p class="mt-4 text-base sm:text-lg text-gray-600 text-center">Get in touch with us</p>

            <form class="mt-12">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="relative">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" name="name" id="name" required
                               class="block w-full rounded-lg border-2 border-gray-200 px-4 py-3 outline-none
                                      focus:border-[#8cc63f] focus:outline-none focus:ring-0
                                      hover:border-[#8cc63f]/50
                                      active:border-[#8cc63f]
                                      transition-all duration-200 ease-in-out
                                      placeholder-gray-400">
                    </div>

                    <div class="relative">
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                        <input type="tel" name="phone" id="phone"
                               class="block w-full rounded-lg border-2 border-gray-200 px-4 py-3 outline-none
                                      focus:border-[#8cc63f] focus:outline-none focus:ring-0
                                      hover:border-[#8cc63f]/50
                                      active:border-[#8cc63f]
                                      transition-all duration-200 ease-in-out
                                      placeholder-gray-400">
                    </div>
                </div>

                <div class="mt-6">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" id="email" required
                           class="block w-full rounded-lg border-2 border-gray-200 px-4 py-3 outline-none
                                  focus:border-[#8cc63f] focus:outline-none focus:ring-0
                                  hover:border-[#8cc63f]/50
                                  active:border-[#8cc63f]
                                  transition-all duration-200 ease-in-out
                                  placeholder-gray-400">
                </div>

                <div class="mt-6">
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                    <textarea name="message" id="message" rows="5" required
                              class="block w-full rounded-lg border-2 border-gray-200 px-4 py-3 outline-none
                                     focus:border-[#8cc63f] focus:outline-none focus:ring-0
                                     hover:border-[#8cc63f]/50
                                     active:border-[#8cc63f]
                                     transition-all duration-200 ease-in-out resize-none
                                     placeholder-gray-400"></textarea>
                </div>

                <div class="mt-8">
                    <x-turnstile
                        data-theme="light"
                        data-size="flexible"
                    />
                </div>

                <div class="mt-8">
                    <button type="submit"
                            class="w-full py-4 px-6 text-white bg-[#8cc63f] rounded-lg
                                   hover:bg-[#7bb32f]
                                   font-medium transition-all duration-200 ease-in-out
                                   shadow-sm hover:shadow-md
                                   transform hover:-translate-y-0.5
                                   focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#8cc63f]">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
