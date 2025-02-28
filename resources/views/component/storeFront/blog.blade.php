<!-- Blog Section -->
<section class="relative bg-[#1a1a1a] py-20 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-transparent opacity-50"></div>

    <!-- Content Container -->
    <div class="relative container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4">TIN TỨC & BÁO CHÍ</h2>
            <p class="text-xl text-white/70">Cập nhật thông tin mới nhất từ TPG Construction</p>
        </div>

        <!-- Featured News Carousel -->
        <div class="swiper featured-news-swiper mb-20">
            <div class="swiper-wrapper">
                @foreach([
                    [
                        'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab',
                        'category' => 'Dự án mới',
                        'title' => 'TPG Construction khởi công dự án 150 triệu USD',
                        'date' => '28/02/2024',
                        'source' => 'Business Journal'
                    ],
                    [
                        'image' => 'https://images.unsplash.com/photo-1541963463532-d68292c34b19',
                        'category' => 'Giải thưởng',
                        'title' => 'TPG Construction nhận giải Công trình xanh xuất sắc',
                        'date' => '25/02/2024',
                        'source' => 'Construction News'
                    ],
                    [
                        'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd',
                        'category' => 'Công nghệ',
                        'title' => 'Ứng dụng công nghệ BIM trong xây dựng hiện đại',
                        'date' => '20/02/2024',
                        'source' => 'Tech Review'
                    ]
                ] as $news)
                <div class="swiper-slide">
                    <div class="relative group rounded-lg overflow-hidden">
                        <!-- News Image -->
                        <div class="aspect-video w-full">
                            <img src="{{ $news['image'] }}"
                                 alt="{{ $news['title'] }}"
                                 class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                        </div>

                        <!-- Content Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent">
                            <div class="absolute bottom-0 left-0 right-0 p-8">
                                <!-- Category Badge -->
                                <span class="inline-block px-4 py-2 bg-[#FF4500] text-white text-sm font-semibold rounded-full mb-4">
                                    {{ $news['category'] }}
                                </span>

                                <!-- Title -->
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">{{ $news['title'] }}</h3>

                                <!-- Meta Info -->
                                <div class="flex items-center text-white/70 text-sm">
                                    <span>{{ $news['date'] }}</span>
                                    <span class="mx-2">•</span>
                                    <span>{{ $news['source'] }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Hover Border -->
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-[#FF4500] to-transparent
                                 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Navigation -->
            <div class="relative mt-8">
                <div class="flex items-center justify-between">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>

        <!-- Latest News Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach([
                [
                    'image' => 'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122',
                    'title' => 'TPG Construction mở rộng hoạt động tại thị trường phía Nam',
                    'excerpt' => 'Công ty thông báo kế hoạch mở rộng hoạt động và phát triển các dự án mới tại khu vực phía Nam...',
                    'date' => '15/02/2024'
                ],
                [
                    'image' => 'https://hass.vn/wp-content/uploads/2020/02/vat-lieu-xay-dung-xanh.jpg',
                    'title' => 'Ứng dụng vật liệu xanh trong xây dựng hiện đại',
                    'excerpt' => 'TPG Construction tiên phong trong việc sử dụng vật liệu xanh, thân thiện với môi trường...',
                    'date' => '10/02/2024'
                ],
                [
                    'image' => 'https://images.unsplash.com/photo-1497366811353-6870744d04b2',
                    'title' => 'Đào tạo và phát triển nguồn nhân lực chất lượng cao',
                    'excerpt' => 'Chương trình đào tạo mới nhằm nâng cao chất lượng nguồn nhân lực trong ngành xây dựng...',
                    'date' => '05/02/2024'
                ]
            ] as $post)
            <div class="group">
                <div class="bg-[#262626] rounded-lg overflow-hidden h-full">
                    <!-- Post Image -->
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ $post['image'] }}"
                             alt="{{ $post['title'] }}"
                             class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                    </div>

                    <!-- Post Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-4 line-clamp-2">{{ $post['title'] }}</h3>
                        <p class="text-white/70 mb-4 line-clamp-3">{{ $post['excerpt'] }}</p>
                        <div class="flex items-center justify-between">
                            <span class="text-white/50 text-sm">{{ $post['date'] }}</span>
                            <a href="#read-more" class="text-[#FF4500] hover:text-white transition-colors duration-300">
                                Đọc thêm →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.featured-news-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
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

.featured-news-swiper:hover .swiper-button-next,
.featured-news-swiper:hover .swiper-button-prev {
    opacity: 0.7;
}

.swiper-button-next:hover,
.swiper-button-prev:hover {
    opacity: 1;
}
</style>
@endpush
