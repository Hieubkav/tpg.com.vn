<!-- Partner Carousel Section -->
<section class="relative bg-[#1a1a1a] overflow-hidden -mt-32 pt-32">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative pb-16">
        <!-- Section Title -->
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">Đối tác của chúng tôi</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Hợp tác với các đối tác uy tín để mang đến những giải pháp xây dựng tốt nhất</p>
        </div>

        <!-- Infinite Logo Carousel -->
        <div class="relative">
            <!-- First Row -->
            <div class="flex space-x-12 animate-carousel">
                <!-- Logo items - First Set -->
                <div class="flex space-x-12 min-w-full">
                    @foreach(['Alpha Corp', 'Beta Build', 'Gamma Tech', 'Delta Dev', 'Epsilon Eng', 'Zeta Zone'] as $partner)
                        <div class="w-40 h-20 bg-white/5 backdrop-blur-sm rounded-lg flex items-center justify-center group transition-all duration-300 hover:bg-white/10">
                            <span class="text-white/70 group-hover:text-white text-sm font-medium transition-colors duration-300">{{ $partner }}</span>
                        </div>
                    @endforeach
                </div>
                <!-- Logo items - Duplicate Set for Seamless Loop -->
                <div class="flex space-x-12 min-w-full">
                    @foreach(['Alpha Corp', 'Beta Build', 'Gamma Tech', 'Delta Dev', 'Epsilon Eng', 'Zeta Zone'] as $partner)
                        <div class="w-40 h-20 bg-white/5 backdrop-blur-sm rounded-lg flex items-center justify-center group transition-all duration-300 hover:bg-white/10">
                            <span class="text-white/70 group-hover:text-white text-sm font-medium transition-colors duration-300">{{ $partner }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Second Row (Reverse Direction) -->
            <div class="flex space-x-12 animate-carousel-reverse mt-8">
                <!-- Logo items - First Set -->
                <div class="flex space-x-12 min-w-full">
                    @foreach(['Omega Inc', 'Sigma Systems', 'Lambda Labs', 'Kappa Construction', 'Iota Innovate', 'Theta Think'] as $partner)
                        <div class="w-40 h-20 bg-white/5 backdrop-blur-sm rounded-lg flex items-center justify-center group transition-all duration-300 hover:bg-white/10">
                            <span class="text-white/70 group-hover:text-white text-sm font-medium transition-colors duration-300">{{ $partner }}</span>
                        </div>
                    @endforeach
                </div>
                <!-- Logo items - Duplicate Set for Seamless Loop -->
                <div class="flex space-x-12 min-w-full">
                    @foreach(['Omega Inc', 'Sigma Systems', 'Lambda Labs', 'Kappa Construction', 'Iota Innovate', 'Theta Think'] as $partner)
                        <div class="w-40 h-20 bg-white/5 backdrop-blur-sm rounded-lg flex items-center justify-center group transition-all duration-300 hover:bg-white/10">
                            <span class="text-white/70 group-hover:text-white text-sm font-medium transition-colors duration-300">{{ $partner }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Gradient Overlays -->
            <div class="absolute left-0 top-0 bottom-0 w-40 bg-gradient-to-r from-[#1a1a1a] to-transparent z-10"></div>
            <div class="absolute right-0 top-0 bottom-0 w-40 bg-gradient-to-l from-[#1a1a1a] to-transparent z-10"></div>
        </div>
    </div>

    <!-- Bottom Gradient for next section transition -->
    <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-black to-transparent"></div>
</section>

@push('styles')
<style>
@keyframes carousel {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-100%);
    }
}

@keyframes carousel-reverse {
    0% {
        transform: translateX(-100%);
    }
    100% {
        transform: translateX(0);
    }
}

.animate-carousel {
    animation: carousel 30s linear infinite;
}

.animate-carousel-reverse {
    animation: carousel-reverse 30s linear infinite;
}

.animate-carousel:hover,
.animate-carousel-reverse:hover {
    animation-play-state: paused;
}
</style>
@endpush
