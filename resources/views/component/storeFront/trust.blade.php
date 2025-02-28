<!-- Trust Section -->
<section class="relative bg-[#1a1a1a] py-20 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-transparent opacity-50"></div>

    <!-- Content Container -->
    <div class="relative container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Main Section Title -->
        <div class="max-w-3xl mx-auto text-center mb-20">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4">BẰNG CHỨNG</h2>
            <p class="text-2xl md:text-3xl text-[#FF4500]">KHÁCH HÀNG TIN TƯỞNG CHÚNG TÔI</p>
        </div>

        <!-- Client Reviews Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
            @foreach([
                [
                    'quote' => 'Khi 10 triệu đô la công trình ngầm gặp vấn đề, TPG Construction đã nhanh chóng tìm ra giải pháp hiệu quả, giúp dự án tiếp tục đúng tiến độ.',
                    'author' => 'David Koury',
                    'role' => 'Giám đốc Thiết kế & Xây dựng'
                ],
                [
                    'quote' => 'TPG Construction có đội ngũ chuyên nghiệp và tận tâm. Họ không chỉ giải quyết vấn đề mà còn đề xuất những cải tiến sáng tạo.',
                    'author' => 'Bob Hazelton',
                    'role' => 'Chủ tịch Herrick Corporation'
                ],
                [
                    'quote' => 'Với công nghệ tiên tiến và quy trình quản lý chặt chẽ, TPG Construction đã hoàn thành dự án vượt kỳ vọng của chúng tôi.',
                    'author' => 'Bjorn Kous',
                    'role' => 'Giám đốc Điều hành'
                ]
            ] as $review)
            <div class="group">
                <div class="relative bg-[#262626] rounded-lg p-8 h-full transform transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                    <!-- Left Border Accent -->
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#FF4500] rounded-l-lg"></div>

                    <!-- Quote Text -->
                    <blockquote class="text-white text-lg mb-8 leading-relaxed pl-6">
                        "{{ $review['quote'] }}"
                    </blockquote>

                    <!-- Author Info -->
                    <div class="pl-6">
                        <h4 class="text-[#FF4500] font-bold text-lg mb-1">{{ $review['author'] }}</h4>
                        <p class="text-white/70">{{ $review['role'] }}</p>
                    </div>

                    <!-- Hover Border Effect -->
                    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-[#FF4500] to-transparent
                             transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Additional Trust Points -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach([
                [
                    'title' => 'Chuyên môn cao',
                    'description' => 'Đội ngũ chuyên gia với nhiều năm kinh nghiệm trong ngành xây dựng'
                ],
                [
                    'title' => 'Cam kết chất lượng',
                    'description' => 'Áp dụng các tiêu chuẩn nghiêm ngặt trong mọi dự án'
                ],
                [
                    'title' => 'Đúng tiến độ',
                    'description' => 'Quản lý thời gian hiệu quả, đảm bảo hoàn thành đúng hạn'
                ]
            ] as $point)
            <div class="bg-black/30 backdrop-blur-sm rounded-lg p-6 transform transition-all duration-300 hover:-translate-y-2">
                <h3 class="text-xl font-bold text-[#FF4500] mb-3">{{ $point['title'] }}</h3>
                <p class="text-white/70">{{ $point['description'] }}</p>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Bottom Gradient -->
    <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-black to-transparent"></div>
</section>
