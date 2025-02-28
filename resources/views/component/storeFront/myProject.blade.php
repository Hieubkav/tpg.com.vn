<!-- Projects Banner Section -->
<section class="relative bg-[#1a1a1a] overflow-hidden" x-data="projectBanner" x-ref="banner">
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-gradient-to-b from-black to-[#1a1a1a]"></div>

    <!-- Border Lines -->
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#FF4500] to-transparent opacity-50"></div>
    <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#FF4500] to-transparent opacity-50"></div>

    <!-- Content Container -->
    <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 h-[200px] lg:h-[300px] flex items-center overflow-hidden">
        <!-- Left Text -->
        <div class="absolute left-4 md:left-8 lg:left-12">
            <span class="text-white/70 text-sm md:text-base lg:text-lg uppercase tracking-wider font-light">
                Dự án tiêu biểu
            </span>
        </div>

        <!-- Projects Text Container -->
        <div class="absolute inset-0 flex justify-end items-center">
            <!-- Animated Projects Text -->
            <div class="transition-transform duration-700 ease-out transform px-4"
                 :style="{ transform: `translateX(${position}%)` }"
                 x-ref="projectsText">
                <span class="text-[6rem] md:text-[8rem] lg:text-[12rem] font-bold text-white/10 uppercase whitespace-nowrap tracking-tight leading-none">
                    Dự án
                </span>
            </div>
        </div>

        <!-- Right Text -->
        <div class="absolute right-4 md:right-8 lg:right-12">
            <a href="#all-projects"
               class="group inline-flex items-center text-white hover:text-[#FF4500] transition-colors duration-300">
                <span class="text-sm md:text-base uppercase tracking-wider mr-2">Xem tất cả dự án</span>
                <svg class="w-4 h-4 transform transition-transform duration-300 group-hover:translate-x-1"
                     fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('projectBanner', () => ({
        position: 0,
        observer: null,

        init() {
            this.$nextTick(() => {
                this.setupObserver();
                // Start at rightmost position (0% translation)
                this.position = 0;
            });
        },

        updatePosition(ratio) {
            if (window.innerWidth < 768) {
                // Center text on mobile (-50% translation)
                this.position = -50;
                return;
            }

            // Move from right (0%) to center (-50%) based on scroll ratio
            this.position = -(ratio * 50);
        },

        setupObserver() {
            const options = {
                threshold: Array.from({ length: 100 }, (_, i) => i / 100)
            };

            this.observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        this.updatePosition(entry.intersectionRatio);
                    }
                });
            }, options);

            this.observer.observe(this.$refs.banner);
        }
    }));
});
</script>
@endpush
