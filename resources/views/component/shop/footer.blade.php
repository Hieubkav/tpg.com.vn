<!-- Footer -->
<footer class="relative bg-[#333333] text-white">
    <!-- Background Image Overlay -->
    <div class="absolute inset-0 bg-cover bg-center opacity-20"
         style="background-image: url('{{ asset('images/construction-bg.jpg') }}')"></div>

    <!-- Content Container -->
    <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- Top Section - Logo & Contact -->
        <div class="flex flex-col lg:flex-row items-center justify-between mb-16 space-y-8 lg:space-y-0">
            <!-- Logo & Company Name -->
            <div class="text-center lg:text-left">
                <div class="flex items-center justify-center lg:justify-start space-x-2 mb-4">
                    <img src="{{ asset('images/logo.webp') }}" alt="TPG Construction Logo" class="h-12">
                    <div>
                        <h4 class="text-lg font-bold">TPG</h4>
                        <p class="text-sm text-white/70">Construction</p>
                    </div>
                </div>
                <p class="text-sm text-white/70">CÔNG TY CỔ PHẦN XÂY DỰNG & QUẢN LÝ DỰ ÁN TPG</p>
            </div>

            <!-- Contact Info -->
            <div class="flex flex-col items-center lg:items-end space-y-2 text-sm">
                <p class="flex items-center">
                    <i class="fas fa-map-marker-alt text-[#FF4500] mr-2"></i>
                    Số 15, Đường số 6, KDC NineSouth, X. Phước Kiển, H. Nhà Bè, TP. HCM
                </p>
                <p class="flex items-center">
                    <i class="fas fa-phone text-[#FF4500] mr-2"></i>
                    (+84) 868 906 879
                </p>
                <p class="flex items-center">
                    <i class="fas fa-envelope text-[#FF4500] mr-2"></i>
                    info@tpgcons.com.vn
                </p>
            </div>
        </div>

        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            <!-- Company Info Column -->
            <div>
                <h3 class="text-lg font-bold mb-6 uppercase tracking-wider">Về Chúng Tôi</h3>
                <ul class="space-y-3">
                    @foreach([
                        'Giới thiệu', 'Tầm nhìn & Sứ mệnh', 'Đội ngũ nhân sự',
                        'Cơ cấu tổ chức', 'Chứng chỉ & Giấy phép', 'Đối tác'
                    ] as $item)
                    <li>
                        <a href="#" class="text-white/70 hover:text-[#FF4500] transition-colors duration-300">
                            {{ $item }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Services Column -->
            <div>
                <h3 class="text-lg font-bold mb-6 uppercase tracking-wider">Dịch Vụ</h3>
                <ul class="space-y-3">
                    @foreach([
                        'Thiết kế kiến trúc', 'Thiết kế nội thất',
                        'Thi công xây dựng', 'Thi công nội thất',
                        'Cải tạo công trình', 'Quản lý dự án',
                        'Tư vấn giám sát'
                    ] as $service)
                    <li>
                        <a href="#" class="text-white/70 hover:text-[#FF4500] transition-colors duration-300">
                            {{ $service }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Projects Column -->
            <div>
                <h3 class="text-lg font-bold mb-6 uppercase tracking-wider">Dự Án</h3>
                <ul class="space-y-3">
                    @foreach([
                        'Nhà phố', 'Biệt thự', 'Chung cư',
                        'Văn phòng', 'Khách sạn', 'Nhà hàng',
                        'Showroom', 'Công trình công cộng'
                    ] as $project)
                    <li>
                        <a href="#" class="text-white/70 hover:text-[#FF4500] transition-colors duration-300">
                            {{ $project }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Connect Column -->
            <div>
                <h3 class="text-lg font-bold mb-6 uppercase tracking-wider">Kết Nối</h3>
                <div class="flex space-x-4 mb-8">
                    @foreach([
                        ['facebook', 'https://facebook.com/tpgcons'],
                        ['youtube', 'https://youtube.com/@tpgcons'],
                        ['tiktok', 'https://tiktok.com/@tpgcons']
                    ] as [$platform, $url])
                    <a href="{{ $url }}" target="_blank" rel="noopener noreferrer"
                       class="w-10 h-10 rounded-full bg-[#FF4500] flex items-center justify-center
                              hover:bg-white hover:text-[#FF4500] transition-colors duration-300">
                        <i class="fab fa-{{ $platform }}"></i>
                    </a>
                    @endforeach
                </div>
                <p class="text-sm text-white/70 mb-4">Đăng ký nhận tin mới nhất từ chúng tôi</p>
                <form class="flex">
                    <input type="email" placeholder="Email của bạn"
                           class="flex-1 px-4 py-2 bg-white/10 rounded-l-md focus:outline-none focus:ring-1 focus:ring-[#FF4500]">
                    <button type="submit"
                            class="px-4 py-2 bg-[#FF4500] rounded-r-md hover:bg-[#ff6633] transition-colors duration-300">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="pt-8 border-t border-[#FF4500]/30">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0">
                <!-- Copyright -->
                <div class="text-sm text-white/70">
                    © {{ date('Y') }} TPG Construction. Bản quyền thuộc về Công ty CP Xây dựng & QLDA TPG
                </div>

                <!-- Navigation Links -->
                <div class="flex flex-wrap justify-center gap-x-6 gap-y-2 text-sm text-white/70">
                    <a href="#" class="hover:text-[#FF4500] transition-colors duration-300">Chính sách bảo mật</a>
                    <a href="#" class="hover:text-[#FF4500] transition-colors duration-300">Điều khoản sử dụng</a>
                    <a href="#" class="hover:text-[#FF4500] transition-colors duration-300">Liên hệ</a>
                </div>
            </div>
        </div>
    </div>
</footer>
