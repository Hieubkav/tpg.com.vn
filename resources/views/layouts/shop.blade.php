<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="https://tpgcons.com.vn">
    <meta name="description" content="TPG Construction - Công ty cổ phần xây dựng và quản lý dự án TPG. Chuyên nghiệp trong xây dựng chung cư, với công nghệ tiên tiến và thiết kế sáng tạo. Kiến tạo không gian ưu việt cho cuộc sống hiện đại.">
    <meta name="keywords" content="TPG Construction, xây dựng chung cư, quản lý dự án, công nghệ xây dựng, thiết kế hiện đại, TPG, chung cư cao cấp">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="TPG Construction - Kiến tạo không gian ưu việt">
    <meta property="og:description" content="TPG Construction là đơn vị hàng đầu trong lĩnh vực xây dựng và quản lý dự án, mang đến không gian sống chất lượng cao với thiết kế sáng tạo và công nghệ tiên tiến."/>
    <meta property="og:url" content="https://tpgcons.com.vn">
    <meta property="og:image" content="{{ asset('images/logo.webp') }}">

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "TPG Construction",
          "alternateName": "Công ty cổ phần xây dựng và quản lý dự án TPG",
          "url": "https://tpgcons.com.vn",
          "logo": "{{ asset('images/logo.webp') }}",
          "description": "TPG Construction chuyên nghiệp trong xây dựng chung cư, với công nghệ tiên tiến và thiết kế sáng tạo. Kiến tạo không gian ưu việt cho cuộc sống hiện đại.",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Số 15, Đường số 6, KDC NineSouth, X. Phước Kiển",
            "addressLocality": "Huyện Nhà Bè",
            "addressRegion": "TP. HCM",
            "postalCode": "",
            "addressCountry": "VN"
          },
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+84-868-906-879",
            "contactType": "customer service"
          },
          "sameAs": [
            "https://facebook.com/tpgcons",
            "https://youtube.com/@tpgcons",
            "https://tiktok.com/@tpgcons"
          ]
        }
    </script>

    <meta name="revisit-after" content="1 day">
    <meta name="author" content="TPG Construction">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logo.webp') }}">

    <title>{{ config('app.name', 'TPG Construction') }}</title>

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Swiper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @stack('styles')
    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-black">
    @include('component.shop.navbar')

    <main class="relative">
        @yield('content')
    </main>

    @include('component.shop.footer')
    @include('component.shop.speedial')

    @livewire('notifications')

    @stack('scripts')
    @filamentScripts
    @vite('resources/js/app.js')
</body>
</html>
