<!-- Review Section -->
<section class="relative bg-[#1a1a1a] py-20 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-transparent opacity-50"></div>

    <!-- Content Container -->
    <div class="relative container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Project Showcase Carousel -->
        <div class="mb-20">
            <div class="swiper project-swiper">
                <div class="swiper-wrapper">
                    @foreach(range(1, 5) as $index)
                    <div class="swiper-slide">
                        <div class="relative aspect-video rounded-lg overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1200"
                                 alt="Dự án {{ $index }}"
                                 class="w-full h-full object-cover">
                            <!-- Project Info Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent">
                                <div class="absolute bottom-0 left-0 right-0 p-6">
                                    <h3 class="text-xl md:text-2xl font-bold text-white mb-2">Dự án {{ $index }}</h3>
                                    <p class="text-white/80">Mô tả chi tiết về dự án xây dựng và quản lý.</p>
                                </div>
                            </div>
                            <!-- Orange Bottom Border -->
                            <div class="absolute bottom-0 left-0 right-0 h-1 bg-[#FF4500]"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Project Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- Testimonials Section -->
        <div class="max-w-5xl mx-auto">
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    @foreach([
                        [
                            'name' => 'Nguyễn Văn A',
                            'role' => 'Giám đốc điều hành',
                            'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200',
                            'quote' => 'TPG Construction đã thể hiện sự chuyên nghiệp và cam kết mạnh mẽ trong việc đảm bảo chất lượng công trình. Họ không chỉ đáp ứng mà còn vượt xa mong đợi của chúng tôi.'
                        ],
                        [
                            'name' => 'Trần Thị B',
                            'role' => 'Chủ đầu tư',
                            'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200',
                            'quote' => 'Đội ngũ TPG Construction luôn lắng nghe và đáp ứng nhanh chóng mọi yêu cầu. Họ thực sự hiểu rõ về xây dựng và mang đến những giải pháp sáng tạo.'
                        ],
                        [
                            'name' => 'Lê Văn C',
                            'role' => 'Quản lý dự án',
                            'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200',
                            'quote' => 'Làm việc với TPG Construction là một trải nghiệm tuyệt vời. Họ không chỉ đảm bảo tiến độ mà còn tạo ra những công trình chất lượng vượt trội.'
                        ]
                    ] as $testimonial)
                    <div class="swiper-slide">
                        <div class="bg-[#262626] rounded-lg p-8 md:p-10">
                            <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                                <!-- Author Image -->
                                <div class="flex-shrink-0">
                                    <div class="w-20 h-20 rounded-full overflow-hidden ring-4 ring-[#FF4500]/20">
                                        <img src="{{ $testimonial['image'] }}"
                                             alt="{{ $testimonial['name'] }}"
                                             class="w-full h-full object-cover">
                                    </div>
                                </div>
                                <!-- Quote Content -->
                                <div class="flex-grow text-center md:text-left">
                                    <svg class="w-8 h-8 text-[#FF4500]/20 mb-4 mx-auto md:mx-0" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                    </svg>
                                    <blockquote class="text-white text-lg md:text-xl leading-relaxed mb-6">
                                        {{ $testimonial['quote'] }}
                                    </blockquote>
                                    <div class="mt-4">
                                        <h4 class="text-[#FF4500] font-bold text-lg">{{ $testimonial['name'] }}</h4>
                                        <p class="text-white/70">{{ $testimonial['role'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Testimonial Navigation -->
                <div class="mt-8 flex items-center justify-center gap-2">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Project Showcase Swiper
    new Swiper('.project-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.project-swiper .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.project-swiper .swiper-button-next',
            prevEl: '.project-swiper .swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });

    // Testimonial Swiper
    new Swiper('.testimonial-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        pagination: {
            el: '.testimonial-swiper .swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + ' w-3 h-3"></span>';
            }
        },
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

.project-swiper:hover .swiper-button-next,
.project-swiper:hover .swiper-button-prev {
    opacity: 0.7;
}

.swiper-button-next:hover,
.swiper-button-prev:hover {
    opacity: 1;
}
</style>
@endpush
