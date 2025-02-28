<head>
    <style>
        /* Tạo hiệu ứng lắc qua lắc lại */
        /* Tạo hiệu ứng xoay */
        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }
            25% {
                transform: rotate(15deg);
            }
            50% {
                transform: rotate(0deg);
            }
            75% {
                transform: rotate(-15deg);
            }
            100% {
                transform: rotate(0deg);
            }
        }

        /* Áp dụng hiệu ứng cho các icon */
        .speedial-icon {
            animation: rotate 1s infinite linear;
        }
    </style>
</head>

<section class="relative">
    <div class="fixed bottom-8 right-8 z-20 flex flex-col items-center space-y-2">
        <!-- Scroll to Top -->
        <div onclick="scrollToTop()"
             class="bg-gradient-to-r from-orange-500 to-orange-600 text-white rounded-full w-12 h-12 flex items-center justify-center shadow-md transform transition duration-300 hover:scale-110 hover:shadow-lg hover:rotate-3 cursor-pointer animate-shake">
            <i class="fas fa-arrow-up text-xl md:text-2xl"></i>
        </div>
    </div>
</section>

<script>
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>
