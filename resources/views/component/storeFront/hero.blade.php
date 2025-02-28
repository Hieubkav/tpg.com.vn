<!-- Hero Section -->
<section class="relative h-screen overflow-hidden">
    <!-- Swiper Container -->
    <div class="swiper hero-swiper w-full h-full">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=1920&q=80"
                     alt="Chung cư cao cấp với kiến trúc hiện đại"
                     class="w-full h-full object-cover">
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
                <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=1920&q=80"
                     alt="Nội thất sang trọng trong chung cư TPG"
                     class="w-full h-full object-cover">
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide">
                <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?w=1920&q=80"
                     alt="Khu chung cư xanh với tiện ích đầy đủ"
                     class="w-full h-full object-cover">
            </div>
        </div>
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Navigation -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <!-- Multi-layer Gradient Overlay for seamless transition -->
    <div class="absolute inset-0 z-10">
        <!-- Top gradient for navbar -->
        <div class="absolute top-0 left-0 right-0 h-40 bg-gradient-to-b from-black/50 to-transparent"></div>

        <!-- Middle overlay for content visibility -->
        <div class="absolute inset-0 bg-black/30"></div>

        <!-- Bottom gradient for smooth transition to partner section -->
        <div class="absolute bottom-0 left-0 right-0 h-64 bg-gradient-to-t from-[#1a1a1a] via-[#1a1a1a]/90 to-transparent"></div>
    </div>

    <!-- Main Content -->
    <div class="absolute inset-0 z-20">
        <div class="container mx-auto px-4 h-full flex flex-col justify-center items-center text-center pt-20">
            <!-- Hero Content -->
            <div class="max-w-4xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                    Xây dựng chung cư hiện đại với
                    <span class="text-[#FF4500]">công nghệ tiên tiến</span>
                </h1>
                <p class="text-lg md:text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                    Tại TPG Construction & Project Management, chúng tôi mang đến không gian sống
                    chất lượng cao với thiết kế sáng tạo và quản lý chuyên nghiệp.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="#projects"
                       class="bg-[#FF4500] hover:bg-[#ff6633] text-white px-8 py-4 rounded-md
                              text-sm font-bold uppercase tracking-wider transition-colors duration-200
                              shadow-lg hover:shadow-xl w-full sm:w-auto text-center group">
                        <span class="group-hover:translate-x-1 inline-block transition-transform duration-200">
                            Khám phá dự án
                        </span>
                    </a>
                    <div class="flex items-center gap-2 text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span class="text-sm md:text-base font-medium">+84 868 90 6879</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social Icons -->
        <div class="absolute bottom-32 left-8 flex items-center gap-6 z-30">
            <a href="https://facebook.com/tpgcons" target="_blank" rel="noopener noreferrer"
               class="text-white hover:text-[#FF4500] transition-colors duration-200 transform hover:scale-110">
                <i class="fab fa-facebook text-2xl"></i>
            </a>
            <a href="https://tiktok.com/@tpgcons" target="_blank" rel="noopener noreferrer"
               class="text-white hover:text-[#FF4500] transition-colors duration-200 transform hover:scale-110">
                <i class="fab fa-tiktok text-2xl"></i>
            </a>
            <a href="https://youtube.com/@tpgcons" target="_blank" rel="noopener noreferrer"
               class="text-white hover:text-[#FF4500] transition-colors duration-200 transform hover:scale-110">
                <i class="fab fa-youtube text-2xl"></i>
            </a>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-20 left-1/2 transform -translate-x-1/2 text-white text-center">
            <div class="animate-bounce">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                </svg>
            </div>
            <span class="text-sm mt-2 opacity-70">Cuộn xuống</span>
        </div>

        <!-- Vertical Text -->
        <div class="hidden lg:block absolute right-8 top-1/2 -translate-y-1/2 transform rotate-90 origin-right">
            <span class="text-white/70 text-sm tracking-widest uppercase">
                Kiến tạo không gian ưu việt
            </span>
        </div>
    </div>
</section>

<!-- Swiper Initialization -->
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.hero-swiper', {
            loop: true,
            effect: 'fade',
            speed: 1000,
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
        });
    });
</script>
@endpush

@push('styles')
<style>
    .swiper-button-next,
    .swiper-button-prev {
        color: white;
        opacity: 0.7;
        transition: opacity 0.2s ease;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        opacity: 1;
    }

    .swiper-pagination-bullet {
        background: white;
        opacity: 0.7;
    }

    .swiper-pagination-bullet-active {
        background: #FF4500;
        opacity: 1;
    }

    .swiper-slide {
        position: relative;
    }

    .swiper-slide img {
        filter: brightness(0.8);
    }
</style>
@endpush
