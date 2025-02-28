<!-- Project Details Section -->
<section class="relative bg-[#1a1a1a] py-20 overflow-hidden" x-data="projectGrid">
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-transparent opacity-50"></div>

    <!-- Content Container -->
    <div class="relative container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- View Mode Toggle -->
        <div class="flex justify-end mb-8">
            <button @click="toggleView"
                    class="text-white/70 hover:text-white flex items-center space-x-2 transition-colors duration-200">
                <span x-text="isGridView ? 'Chế độ trình chiếu' : 'Chế độ lưới'"></span>
                <svg x-show="isGridView" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                </svg>
                <svg x-show="!isGridView" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                </svg>
            </button>
        </div>

        <!-- Projects Container -->
        <div class="swiper project-swiper"
             :class="{ 'grid-mode': isGridView }"
             x-ref="projectSwiper">
            <div class="swiper-wrapper">
                @foreach(range(1, 8) as $index)
                <div class="swiper-slide h-auto" :class="{ 'grid-slide': isGridView }">
                    <div class="group relative aspect-[4/3] rounded-lg overflow-hidden bg-black/20">
                        <!-- Project Image -->
                        <img src="https://level10gc.com/wp-content/uploads/2024/11/1200_200_Park_N7_medium-scaled-2-1024x640.jpg"
                             alt="Dự án {{ $index }}"
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                             loading="lazy">

                        <!-- Overlay on Hover/Click -->
                        <div class="absolute inset-0 bg-black/70 flex items-center justify-center opacity-0
                                  group-hover:opacity-100 transition-all duration-300 cursor-pointer"
                             @click="openDetails({{ $index }})">
                            <div class="text-center p-6 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="text-xl md:text-2xl font-bold text-white mb-3">Dự án {{ $index }}</h3>
                                <p class="text-white/80 text-sm md:text-base mb-4 line-clamp-2">
                                    Mô tả ngắn về dự án và các điểm nổi bật của dự án này
                                </p>
                                <span class="inline-flex items-center text-[#FF4500] text-sm font-medium group/btn">
                                    <span class="mr-2">Xem chi tiết</span>
                                    <svg class="w-4 h-4 transform transition-transform duration-200 group-hover/btn:translate-x-1"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Navigation -->
            <div class="navigation-wrapper" x-show="!isGridView">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- Project Details Modal -->
        <div class="fixed inset-0 bg-black/90 z-50 hidden items-center justify-center"
             :class="{ 'flex': modalActive }"
             x-show="modalActive"
             x-cloak
             @keydown.escape.window="modalActive = false"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0">

            <div class="relative w-full max-w-4xl mx-4 bg-[#262626] rounded-lg shadow-2xl overflow-hidden"
                 @click.away="modalActive = false"
                 x-show="modalActive"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="transform scale-95"
                 x-transition:enter-end="transform scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="transform scale-100"
                 x-transition:leave-end="transform scale-95">

                <!-- Close Button -->
                <button class="absolute top-4 right-4 z-10 text-white/50 hover:text-white transition-colors duration-200"
                        @click="modalActive = false">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <!-- Modal Content -->
                <div class="swiper modal-swiper" x-ref="modalSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="relative h-64 lg:h-96">
                                <img :src="'https://images.unsplash.com/photo-160058515434' + selectedProject + '-be6161a56a0c'"
                                     :alt="'Dự án ' + selectedProject"
                                     class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#262626] to-transparent"></div>
                                <h2 class="absolute bottom-6 left-6 text-3xl font-bold text-white"
                                    x-text="'Dự án ' + selectedProject"></h2>
                            </div>

                            <div class="p-6">
                                <div class="prose prose-invert max-w-none">
                                    <p class="text-lg">Chi tiết về dự án sẽ được hiển thị ở đây, bao gồm mô tả, thông số kỹ thuật, và các thông tin khác.</p>
                                    <ul class="mt-4 space-y-2">
                                        <li>Vị trí: [Địa điểm]</li>
                                        <li>Diện tích: [Số m²]</li>
                                        <li>Thời gian hoàn thành: [Năm]</li>
                                        <li>Giá trị: [Số tiền]</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('projectGrid', () => ({
        modalActive: false,
        selectedProject: null,
        isGridView: true,
        mainSwiper: null,
        modalSwiper: null,

        init() {
            this.$nextTick(() => {
                this.initMainSwiper();
            });
        },

        toggleView() {
            this.isGridView = !this.isGridView;
            this.$nextTick(() => {
                if (this.mainSwiper) {
                    this.mainSwiper.destroy();
                }
                this.initMainSwiper();
            });
        },

        openDetails(id) {
            this.selectedProject = id;
            this.modalActive = true;
            this.$nextTick(() => {
                if (!this.modalSwiper) {
                    this.modalSwiper = new Swiper(this.$refs.modalSwiper, {
                        effect: 'fade',
                        fadeEffect: {
                            crossFade: true
                        }
                    });
                }
            });
        },

        initMainSwiper() {
            const options = this.isGridView ? {
                slidesPerView: 1,
                spaceBetween: 24,
                breakpoints: {
                    640: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 },
                    1280: { slidesPerView: 4 }
                },
                grid: {
                    rows: 2,
                    fill: 'row'
                }
            } : {
                slidesPerView: 1,
                spaceBetween: 24,
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                }
            };

            this.mainSwiper = new Swiper(this.$refs.projectSwiper, options);
        }
    }));
});
</script>
@endpush

@push('styles')
<style>
.grid-mode {
    overflow: visible !important;
}

.grid-mode .swiper-wrapper {
    display: grid !important;
    grid-template-columns: repeat(1, 1fr);
    gap: 1.5rem;
    transform: none !important;
}

@media (min-width: 640px) {
    .grid-mode .swiper-wrapper {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1024px) {
    .grid-mode .swiper-wrapper {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (min-width: 1280px) {
    .grid-mode .swiper-wrapper {
        grid-template-columns: repeat(4, 1fr);
    }
}

.grid-mode .swiper-slide {
    width: 100% !important;
    margin-right: 0 !important;
}

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

.swiper-button-next::after,
.swiper-button-prev::after {
    font-size: 24px;
    font-weight: bold;
}

.navigation-wrapper {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    pointer-events: none;
}

.navigation-wrapper .swiper-button-prev,
.navigation-wrapper .swiper-button-next,
.navigation-wrapper .swiper-pagination {
    pointer-events: auto;
}
</style>
@endpush
