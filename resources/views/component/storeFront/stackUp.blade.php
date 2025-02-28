<!-- Stack Up Section -->
<section class="relative bg-[#1a1a1a] py-20 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-transparent opacity-50"></div>

    <!-- Content Container -->
    <div class="relative container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="flex justify-between items-center mb-12">
            <div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold">
                    <span class="text-white">HOW WE</span>
                    <span class="relative inline-block ml-4">
                        <span class="relative z-10 text-white">STACK UP</span>
                        <!-- 3D Text Shadow Effect -->
                        <span class="absolute top-0.5 left-0.5 text-[#FF4500] blur-[1px] z-0">STACK UP</span>
                        <span class="absolute top-1 left-1 text-black blur-[2px] z-0">STACK UP</span>
                    </span>
                </h2>
            </div>
            <a href="#all-awards" class="hidden md:flex items-center text-white/70 hover:text-[#FF4500] transition-colors duration-300">
                <span class="uppercase text-sm tracking-wider">Xem tất cả giải thưởng</span>
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

        <!-- Awards Carousel -->
        <div class="swiper awards-swiper">
            <div class="swiper-wrapper">
                @foreach([
                    [
                        'year' => '2023',
                        'title' => 'Giải thưởng An toàn Xuất sắc',
                        'org' => 'Hiệp hội Nhà thầu Xây dựng',
                        'description' => 'Ghi nhận thành tích xuất sắc trong việc đảm bảo an toàn lao động'
                    ],
                    [
                        'year' => '2023',
                        'title' => 'Dự án Văn phòng Tốt nhất',
                        'org' => 'Silicon Valley Business Journal',
                        'description' => 'Công trình văn phòng quy mô lớn với thiết kế độc đáo'
                    ],
                    [
                        'year' => '2023',
                        'title' => 'Dự án Giải trí Xuất sắc',
                        'org' => 'ENR California',
                        'description' => 'Công trình giải trí với kiến trúc ấn tượng'
                    ],
                    [
                        'year' => '2023',
                        'title' => 'Thiết kế Nội thất Xuất sắc',
                        'org' => 'Silicon Valley Business Journal',
                        'description' => 'Không gian nội thất sáng tạo và hiện đại'
                    ]
                ] as $award)
                <div class="swiper-slide">
                    <div class="bg-[#262626] rounded-lg p-8 h-full transform transition-all duration-300 hover:-translate-y-2 group">
                        <!-- Year Badge -->
                        <div class="inline-block px-4 py-2 bg-[#FF4500]/10 rounded-lg mb-6">
                            <span class="text-[#FF4500] font-bold">{{ $award['year'] }}</span>
                        </div>

                        <!-- Award Content -->
                        <h3 class="text-2xl font-bold text-white mb-3">{{ $award['title'] }}</h3>
                        <p class="text-[#FF4500] font-medium mb-4">{{ $award['org'] }}</p>
                        <p class="text-white/70">{{ $award['description'] }}</p>

                        <!-- Bottom Border -->
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-[#FF4500] to-transparent
                                 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Navigation -->
            <div class="mt-8">
                <div class="flex items-center justify-between">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Gradient -->
    <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-black to-transparent"></div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.awards-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        }
    });
});
</script>
@endpush

@push('styles')
<style>
.swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background: rgba(255, 255, 255, 0.5);
    opacity: 1;
}

.swiper-pagination-bullet-active {
    background: #FF4500;
}

.swiper-button-next,
.swiper-button-prev {
    color: white;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.awards-swiper:hover .swiper-button-next,
.awards-swiper:hover .swiper-button-prev {
    opacity: 0.7;
}

.swiper-button-next:hover,
.swiper-button-prev:hover {
    opacity: 1;
}

.swiper-button-next::after,
.swiper-button-prev::after {
    font-size: 24px;
}
</style>
@endpush
