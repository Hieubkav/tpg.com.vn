<!-- Stats Section -->
<section class="relative bg-[#8B4513] overflow-hidden" x-data="statsSection" x-ref="section">
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-transparent opacity-50"></div>

    <!-- Title Container with Animation -->
    <div class="relative bg-black/95">
        <div class="h-32 overflow-hidden flex items-center relative">
            <!-- Title Background Glow -->
            <div class="absolute inset-0 bg-black"></div>

            <!-- Moving Title -->
            <div class="absolute inset-0 flex items-center justify-center perspective"
                 style="perspective: 1000px">
                <h2 class="text-6xl lg:text-8xl font-bold uppercase tracking-widest whitespace-nowrap
                           transition-all duration-1000 transform-gpu"
                    :style="{
                        transform: `translateX(${titlePosition}%) rotateY(${titleRotation}deg)`,
                        opacity: titleOpacity
                    }"
                    x-ref="title">
                    <!-- Text Shadow Layer -->
                    <span class="relative inline-block">
                        <span class="absolute inset-0 blur-sm text-[#FF4500]">Con Số</span>
                        <span class="relative text-transparent bg-clip-text bg-[#FF4500]">
                            Con Số
                        </span>
                    </span>
                </h2>
            </div>
        </div>
    </div>

    <!-- Stats Content -->
    <div class="relative container mx-auto py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 relative">
            <!-- Stats Items -->
            @foreach([
                ['number' => '2019', 'label' => 'Năm thành lập'],
                ['number' => '200+', 'label' => 'Số giờ làm việc'],
                ['number' => '0.58', 'label' => 'Chỉ số EMR'],
                ['number' => '93%', 'label' => 'Tỷ lệ hài lòng']
            ] as $index => $stat)
            <div class="relative px-8 py-12 text-center group">
                <!-- Vertical Divider (except last item) -->
                @if($index < 3)
                <div class="hidden lg:block absolute right-0 top-1/2 -translate-y-1/2 w-px h-1/2 bg-white/20"></div>
                @endif

                <!-- Horizontal Divider (for mobile/tablet) -->
                @if($index < 3)
                <div class="lg:hidden absolute bottom-0 left-1/4 right-1/4 h-px bg-white/20"></div>
                @endif

                <!-- Stat Content -->
                <div class="relative transform transition-transform duration-300 group-hover:-translate-y-2">
                    <!-- Number -->
                    <div class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4">
                        {{ $stat['number'] }}
                    </div>
                    <!-- Label -->
                    <div class="text-white/70 text-sm md:text-base uppercase tracking-wider">
                        {{ $stat['label'] }}
                    </div>
                </div>

                <!-- Hover Indicator -->
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-[#FFA500] transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Bottom Border -->
    <div class="absolute bottom-0 left-0 right-0 h-1 bg-[#FFA500]"></div>
</section>

@push('scripts')
<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('statsSection', () => ({
        titlePosition: 100,
        titleRotation: 45,
        titleOpacity: 0,
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
            if (ratio === 0) {
                this.titlePosition = this.scrollingDown ? 100 : -100;
                this.titleRotation = this.scrollingDown ? 45 : -45;
                this.titleOpacity = 0;
            } else {
                // Center and level out when fully visible
                this.titlePosition = 0;
                this.titleRotation = 0;
                this.titleOpacity = Math.min(ratio * 2, 1);
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

@push('styles')
<style>
.perspective {
    perspective: 1000px;
}

@keyframes glow {
    0%, 100% {
        filter: drop-shadow(0 0 15px rgba(255,69,0,0.5));
    }
    50% {
        filter: drop-shadow(0 0 25px rgba(255,69,0,0.8));
    }
}

/* Stats animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.stat-content {
    opacity: 0;
}

.animate-in {
    animation: fadeInUp 0.6s ease-out forwards;
}

@media (prefers-reduced-motion: reduce) {
    .animate-in {
        animation: none;
        opacity: 1;
    }
}
</style>
@endpush
