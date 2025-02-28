<section class="bg-black relative py-16">
    <!-- Orange accent borders -->
    <div class="h-[2px] bg-[#FF4500] absolute top-0 left-0 right-0"></div>
    <div class="h-[2px] bg-[#FF4500] absolute bottom-0 left-0 right-0"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Main Title -->
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#FF4500] text-center mb-16">
            LIÊN HỆ VỚI CHÚNG TÔI
        </h2>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Left Column - Form and Contact Info -->
            <div class="space-y-8">
                <!-- Contact Form -->
                <form class="space-y-6">
                    <div>
                        <label for="name" class="block text-white text-base mb-2">Họ và tên</label>
                        <input type="text" id="name" name="name"
                               class="w-full px-4 py-3 bg-black border border-[#FF4500] text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FF4500] transition-colors"
                               placeholder="Nhập họ và tên của bạn">
                    </div>

                    <div>
                        <label for="email" class="block text-white text-base mb-2">Email</label>
                        <input type="email" id="email" name="email"
                               class="w-full px-4 py-3 bg-black border border-[#FF4500] text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FF4500] transition-colors"
                               placeholder="Nhập địa chỉ email">
                    </div>

                    <div>
                        <label for="phone" class="block text-white text-base mb-2">Số điện thoại</label>
                        <input type="tel" id="phone" name="phone"
                               class="w-full px-4 py-3 bg-black border border-[#FF4500] text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FF4500] transition-colors"
                               placeholder="Nhập số điện thoại">
                    </div>

                    <div>
                        <label for="message" class="block text-white text-base mb-2">Tin nhắn của bạn</label>
                        <textarea id="message" name="message" rows="4"
                                  class="w-full px-4 py-3 bg-black border border-[#FF4500] text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FF4500] transition-colors resize-none"
                                  placeholder="Nhập tin nhắn của bạn"></textarea>
                    </div>

                    <button type="submit"
                            class="w-full px-6 py-3 bg-[#FF4500] text-white font-bold rounded-lg hover:bg-[#FF4500]/80 transition-colors">
                        Gửi yêu cầu
                    </button>
                </form>

                <!-- Contact Info -->
                <div class="pt-8 border-t border-[#FF4500]">
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-[#FF4500] flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="text-white">123 Đường ABC, Quận XYZ, Thành phố HCM, Việt Nam</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-[#FF4500]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span class="text-white">310.819.3250</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-[#FF4500]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-white">contact@tpgconstruction.com</span>
                        </div>

                        <!-- Social Links -->
                        <div class="flex gap-4 pt-4">
                            <a href="#" class="text-[#FF4500] hover:text-[#FF4500]/80 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-[#FF4500] hover:text-[#FF4500]/80 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-[#FF4500] hover:text-[#FF4500]/80 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-[#FF4500] hover:text-[#FF4500]/80 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Map -->
            <div class="space-y-6">
                <h3 class="text-2xl font-bold text-[#FF4500] text-center">VỊ TRÍ CỦA CHÚNG TÔI</h3>
                <div class="w-full h-[400px] border border-[#FF4500] rounded-lg overflow-hidden">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2258312963827!2d106.70144141151384!3d10.790748089314505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528b0b4c3c5ab%3A0x6789deadb764af7f!2zTMOqIFbEg24gVGFtLCBQaMaw4budbmcgQsOqbiBOZ2jDqSw!5e0!3m2!1svi!2s!4v1624961714555!5m2!1svi!2s"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        class="filter grayscale contrast-125">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
