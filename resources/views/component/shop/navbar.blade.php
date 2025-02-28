<!-- Enhanced Main Navbar -->
<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
     x-data="{
        mobileMenuOpen: false,
        isScrolled: false,
        init() {
            window.addEventListener('scroll', () => {
                this.isScrolled = window.scrollY > 50;
            });
        }
     }"
     :class="{
        'bg-transparent': !isScrolled && !mobileMenuOpen,
        'bg-[#333333]/95 backdrop-blur-sm shadow-lg': isScrolled || mobileMenuOpen
     }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Left section - Logo & Company Name -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center group">
                    <img src="{{ asset('images/logo.webp') }}" alt="TPG Logo" class="h-16 w-auto mr-3">
                    <div class="flex flex-col">
                        <span class="text-[#FF4500] text-3xl font-bold leading-none tracking-wide group-hover:text-[#ff6633] transition-colors">TPG</span>
                        <span class="text-white text-xl tracking-wider font-light">CONSTRUCTION</span>
                    </div>
                </a>
            </div>

            <!-- Center section - Navigation Menu (Desktop) -->
            <div class="hidden lg:flex items-center justify-center space-x-8">
                <a href="#about" class="text-white hover:text-[#FF4500] font-medium text-xs uppercase tracking-wider transition-colors duration-200 py-2 border-b-2 border-transparent hover:border-[#FF4500]">
                    Giới thiệu về chúng tôi
                </a>
                <a href="#projects" class="text-white hover:text-[#FF4500] font-medium text-xs uppercase tracking-wider transition-colors duration-200 py-2 border-b-2 border-transparent hover:border-[#FF4500]">
                    Dự án của chúng tôi
                </a>
                <a href="#expertise" class="text-white hover:text-[#FF4500] font-medium text-xs uppercase tracking-wider transition-colors duration-200 py-2 border-b-2 border-transparent hover:border-[#FF4500]">
                    Chuyên môn của chúng tôi
                </a>
                <a href="#contact" class="text-white hover:text-[#FF4500] font-medium text-xs uppercase tracking-wider transition-colors duration-200 py-2 border-b-2 border-transparent hover:border-[#FF4500]">
                    Liên hệ với chúng tôi
                </a>
            </div>

            <!-- Right section - Search & CTA -->
            <div class="hidden lg:flex items-center space-x-6">
                <!-- Search Button -->
                <button type="button" class="text-white hover:text-[#FF4500] transition-colors duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>
                <!-- CTA Button -->
                <a href="#contact" class="bg-[#FF4500] hover:bg-[#ff6633] text-white px-6 py-3 rounded-md text-sm font-bold uppercase tracking-wider transition-colors duration-200 shadow-lg hover:shadow-xl">
                    Liên hệ ngay
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="lg:hidden">
                <button type="button"
                        class="text-white hover:text-[#FF4500] focus:outline-none"
                        @click="mobileMenuOpen = !mobileMenuOpen">
                    <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="mobileMenuOpen" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="mobileMenuOpen"
         class="lg:hidden"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform -translate-y-2"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 transform translate-y-0"
         x-transition:leave-end="opacity-0 transform -translate-y-2"
         style="display: none;">
        <div class="bg-[#262626] shadow-lg">
            <div class="px-4 pt-3 pb-6 space-y-3">
                <a href="#about" class="block px-3 py-2 text-white hover:text-[#FF4500] text-sm uppercase tracking-wider transition-colors duration-200">
                    Giới thiệu về chúng tôi
                </a>
                <a href="#projects" class="block px-3 py-2 text-white hover:text-[#FF4500] text-sm uppercase tracking-wider transition-colors duration-200">
                    Dự án của chúng tôi
                </a>
                <a href="#expertise" class="block px-3 py-2 text-white hover:text-[#FF4500] text-sm uppercase tracking-wider transition-colors duration-200">
                    Chuyên môn của chúng tôi
                </a>
                <a href="#contact" class="block px-3 py-2 text-white hover:text-[#FF4500] text-sm uppercase tracking-wider transition-colors duration-200">
                    Liên hệ với chúng tôi
                </a>
            </div>
            <div class="px-4 py-4 border-t border-gray-700">
                <div class="flex flex-col items-center space-y-4">
                    <button type="button" class="text-white hover:text-[#FF4500] transition-colors duration-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>
                    <a href="#contact" class="w-full bg-[#FF4500] hover:bg-[#ff6633] text-white px-6 py-3 rounded-md text-sm font-bold uppercase tracking-wider transition-colors duration-200 text-center">
                        Liên hệ ngay
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
