<!-- Our Team Section -->
<section class="relative bg-[#1a1a1a] overflow-hidden py-20" x-data="teamSection" x-ref="section">
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-transparent opacity-50"></div>

    <!-- Content Container -->
    <div class="relative container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column - Text Content -->
            <div class="relative">
                <!-- Title Container with Fixed Height -->
                <div class="relative mb-8 h-32">
                    <!-- Static Text -->
                    <div class="mb-2">
                        <span class="text-sm text-white/70 uppercase tracking-wider">Về chúng tôi</span>
                    </div>
                    <div class="relative overflow-hidden">
                        <div class="text-white text-xl md:text-2xl font-light mb-2">
                            XÂY DỰNG ĐỘI NGŨ
                        </div>
                        <!-- Animated Text Container -->
                        <div class="relative overflow-hidden" style="height: 4.5rem">
                            <!-- Animated Text -->
                            <h2 class="absolute transition-transform duration-700 ease-out will-change-transform"
                                :style="{ transform: `translateX(${textPosition}%)` }"
                                :class="{ 'transition-none': isResetting }"
                                x-ref="animatedText">
                                <span class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#FF4500] tracking-wider whitespace-nowrap">
                                    CHUYÊN GIA
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="prose prose-invert max-w-none mb-8">
                    <p class="text-white/80 leading-relaxed mb-6">
                        TPG Construction tự hào quy tụ đội ngũ chuyên gia hàng đầu trong lĩnh vực xây dựng.
                        Với kinh nghiệm dày dặn và tầm nhìn sáng tạo, chúng tôi không ngừng nâng cao chất lượng
                        và đổi mới để mang đến những công trình đẳng cấp.
                    </p>
                </div>

                <!-- Benefits List -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    @foreach([
                        'Cơ hội phát triển' => 'Môi trường làm việc năng động, cơ hội thăng tiến rõ ràng',
                        'Hỗ trợ toàn diện' => 'Chế độ đãi ngộ hấp dẫn, chính sách phúc lợi đầy đủ',
                        'Văn hóa vững mạnh' => 'Văn hóa doanh nghiệp chuyên nghiệp, môi trường thân thiện',
                        'Phúc lợi tốt' => 'Các chế độ bảo hiểm, nghỉ phép và thưởng theo quy định'
                    ] as $title => $description)
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-[#FF4500]/10 flex items-center justify-center">
                            <svg class="w-6 h-6 text-[#FF4500]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold mb-1">{{ $title }}</h3>
                            <p class="text-white/70 text-sm">{{ $description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Right Column - Image -->
            <div class="relative h-full">
                <div class="relative aspect-[4/3] rounded-lg overflow-hidden">
                    <img src="{{ asset('images/team.webp') }}"
                         alt="Đội ngũ chuyên gia TPG Construction"
                         class="w-full h-full object-cover"
                         onerror="this.src='https://images.unsplash.com/photo-1531482615713-2afd69097998?w=1600'">

                    <!-- Image Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

                    <!-- Experience Badge -->
                    <div class="absolute bottom-6 left-6 bg-[#FF4500] p-4 rounded-lg">
                        <span class="block text-3xl font-bold text-white">200+</span>
                        <span class="block text-sm text-white/90">Chuyên gia</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('teamSection', () => ({
        textPosition: 100, // Start from right (100%)
        isResetting: false,
        observer: null,
        lastScrollPosition: window.scrollY,
        scrollingDown: true,

        init() {
            this.$nextTick(() => {
                this.setupObserver();
                this.setupScrollDirection();
            });
        },

        setupScrollDirection() {
            window.addEventListener('scroll', () => {
                const currentScroll = window.scrollY;
                this.scrollingDown = currentScroll > this.lastScrollPosition;
                this.lastScrollPosition = currentScroll;
            });
        },

        updatePosition(ratio) {
            if (window.innerWidth < 768) {
                this.textPosition = 50; // Always centered on mobile
                return;
            }

            // When section is fully visible (ratio = 1), text should be centered (50%)
            const targetPosition = 50;

            if (ratio === 0) {
                // Reset position based on scroll direction
                this.isResetting = true;
                this.textPosition = this.scrollingDown ? 100 : 0;
                requestAnimationFrame(() => {
                    this.isResetting = false;
                });
            } else {
                // Smooth movement from edge to center
                const startPosition = this.scrollingDown ? 100 : 0;
                this.textPosition = startPosition - (ratio * (startPosition - targetPosition));
            }
        },

        setupObserver() {
            const options = {
                threshold: Array.from({ length: 100 }, (_, i) => i / 100)
            };

            this.observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    this.updatePosition(entry.intersectionRatio);
                });
            }, options);

            this.observer.observe(this.$refs.section);
        }
    }));
});
</script>
@endpush
