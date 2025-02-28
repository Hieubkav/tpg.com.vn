<section class="bg-black relative py-16">
    <!-- Orange accent borders -->
    <div class="h-[2px] bg-[#FF4500] absolute top-0 left-0 right-0"></div>
    <div class="h-[2px] bg-[#FF4500] absolute bottom-0 left-0 right-0"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Main Title -->
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#FF4500] text-center mb-16">
            DANH MỤC DỰ ÁN
        </h2>

        <!-- Categories Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-24">
            <!-- Category 1: Nhà Phố -->
            <div class="group relative overflow-hidden rounded-lg cursor-pointer">
                <div class="aspect-w-4 aspect-h-3">
                    <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?ixlib=rb-4.0.3"
                         alt="Nhà Phố"
                         class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-[#FF4500] transition-colors">Nhà Phố</h3>
                    <p class="text-gray-300">Thiết kế hiện đại, không gian sống tiện nghi</p>
                </div>
                <div class="absolute inset-0 border-2 border-transparent group-hover:border-[#FF4500] transition-colors rounded-lg"></div>
            </div>

            <!-- Category 2: Biệt Thự -->
            <div class="group relative overflow-hidden rounded-lg cursor-pointer">
                <div class="aspect-w-4 aspect-h-3">
                    <img src="https://images.unsplash.com/photo-1613977257363-707ba9348227?ixlib=rb-4.0.3"
                         alt="Biệt Thự"
                         class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-[#FF4500] transition-colors">Biệt Thự</h3>
                    <p class="text-gray-300">Không gian sống đẳng cấp, sang trọng</p>
                </div>
                <div class="absolute inset-0 border-2 border-transparent group-hover:border-[#FF4500] transition-colors rounded-lg"></div>
            </div>

            <!-- Category 3: Công Trình Công Nghiệp -->
            <div class="group relative overflow-hidden rounded-lg cursor-pointer">
                <div class="aspect-w-4 aspect-h-3">
                    <img src="https://images.unsplash.com/photo-1565008447742-97f6f38c985c?ixlib=rb-4.0.3"
                         alt="Công Trình Công Nghiệp"
                         class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-[#FF4500] transition-colors">Công Trình Công Nghiệp</h3>
                    <p class="text-gray-300">Hiện đại, an toàn và hiệu quả</p>
                </div>
                <div class="absolute inset-0 border-2 border-transparent group-hover:border-[#FF4500] transition-colors rounded-lg"></div>
            </div>
        </div>

        <!-- Featured Project -->
        <div class="mb-24">
            <h3 class="text-3xl font-bold text-[#FF4500] text-center mb-8">DỰ ÁN TIÊU BIỂU</h3>

            <div class="grid grid-cols-1 gap-8">
                <!-- Project Card -->
                <div class="bg-black/30 rounded-lg overflow-hidden">
                    <div class="relative">
                        <!-- Project Images Carousel -->
                        <div x-data="{ activeSlide: 0 }" class="relative h-[500px] overflow-hidden">
                            <!-- Image Slides -->
                            <div class="relative h-full">
                                <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811"
                                     alt="Nhà Phố ABC - Hình 1"
                                     x-show="activeSlide === 0"
                                     class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500">
                                <img src="https://images.unsplash.com/photo-1613977257363-707ba9348227"
                                     alt="Nhà Phố ABC - Hình 2"
                                     x-show="activeSlide === 1"
                                     class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500">
                                <img src="https://images.unsplash.com/photo-1565008447742-97f6f38c985c"
                                     alt="Nhà Phố ABC - Hình 3"
                                     x-show="activeSlide === 2"
                                     class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500">
                            </div>

                            <!-- Navigation Arrows -->
                            <button class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/50 text-white p-2 rounded-full hover:bg-[#FF4500] transition-colors"
                                    @click="activeSlide = activeSlide === 0 ? 2 : activeSlide - 1">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                </svg>
                            </button>
                            <button class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/50 text-white p-2 rounded-full hover:bg-[#FF4500] transition-colors"
                                    @click="activeSlide = activeSlide === 2 ? 0 : activeSlide + 1">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>

                            <!-- Slide Indicators -->
                            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
                                <template x-for="(slide, index) in 3" :key="index">
                                    <button class="w-2 h-2 rounded-full transition-colors duration-300"
                                            :class="activeSlide === index ? 'bg-[#FF4500]' : 'bg-white/50'"
                                            @click="activeSlide = index"></button>
                                </template>
                            </div>

                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        </div>

                        <!-- Project Info Overlay -->
                        <div class="absolute bottom-0 left-0 right-0 p-8">
                            <h4 class="text-3xl font-bold text-white mb-4">Nhà Phố ABC</h4>
                            <p class="text-gray-300 text-lg mb-6">
                                Dự án nhà phố cao cấp 3 tầng tại Quận 7, TP.HCM. Thiết kế hiện đại với không gian mở, tối ưu ánh sáng tự nhiên.
                            </p>
                            <button class="px-6 py-3 bg-[#FF4500] text-white font-bold rounded-lg hover:bg-[#FF4500]/80 transition-colors">
                                Xem chi tiết
                            </button>
                        </div>
                    </div>

                    <!-- Project Details -->
                    <div class="p-8 border-t border-gray-800">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <!-- Project Info -->
                            <div>
                                <h5 class="text-[#FF4500] font-bold mb-2">Thông tin dự án</h5>
                                <ul class="space-y-2 text-gray-300">
                                    <li>Diện tích: 200m²</li>
                                    <li>Số tầng: 3</li>
                                    <li>Địa điểm: Quận 7, TP.HCM</li>
                                </ul>
                            </div>

                            <!-- Project Progress -->
                            <div>
                                <h5 class="text-[#FF4500] font-bold mb-2">Tiến độ</h5>
                                <div class="flex items-center gap-2">
                                    <div class="h-2 w-full bg-gray-700 rounded-full overflow-hidden">
                                        <div class="h-full w-[75%] bg-[#FF4500] rounded-full"></div>
                                    </div>
                                    <span class="text-white font-bold">75%</span>
                                </div>
                            </div>

                            <!-- Client Review -->
                            <div>
                                <h5 class="text-[#FF4500] font-bold mb-2">Đánh giá khách hàng</h5>
                                <div class="flex gap-1">
                                    <svg class="w-5 h-5 text-[#FF4500]" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-5 h-5 text-[#FF4500]" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-5 h-5 text-[#FF4500]" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-5 h-5 text-[#FF4500]" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-5 h-5 text-[#FF4500]" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </div>
                                <p class="text-gray-300 mt-2">
                                    "Rất hài lòng với chất lượng và tiến độ thi công"
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
