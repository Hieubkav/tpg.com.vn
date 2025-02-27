@php
$setting = \App\Models\Setting::first();

    @endphp

<div class="bg-gradient-to-r from-gray-50 to-gray-100 shadow-lg">
    <div class="container mx-auto px-4 py-1">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <!-- Logo Section (Left) -->
            <div class="flex items-center shrink-0 order-1 md:order-1">
                <a href="{{ route('storeFront') }}">
                <img src="{{config('app.asset_url')}}/storage/{{$setting->logo}}" alt="Logo" class="w-20 h-20">
                </a>
            </div>

            <!-- Hospital Info Section (Center) -->
            <div class="flex-1 flex flex-col items-center justify-center mx-4 text-center order-3 md:order-2 mt-4 md:mt-0">
                <span class="text-red-600 text-lg font-medium">SỞ Y TẾ TỈNH VĨNH LONG</span>
                <h1 class="text-2xl md:text-4xl font-bold text-medical-green tracking-wide relative">
                    {{ $setting->name }}
                    <div class="absolute -inset-1 bg-medical-green/5 blur-sm rounded-lg -z-10"></div>
                </h1>
                <div class="relative mt-1">
                    <span class="text-gray-600 font-medium px-4 py-1 rounded-full bg-medical-green/5 inline-block text-sm">
                        {{ $setting->slogan }}
                    </span>
                </div>
            </div>

            <!-- Hotline Section (Right) -->
            <div class="shrink-0 order-2 md:order-3">
                <div class="bg-white/80 rounded-full px-4 py-2 flex items-center space-x-2 shadow-sm hover:shadow-md transition-all duration-300">
                    <svg class="w-5 h-5 text-medical-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <div class="flex flex-col">
                        <span class="text-xs text-gray-500">Hotline</span>
                        <span class="font-bold text-medical-green hover:text-medical-green-dark transition-colors duration-200">
                            {{ $setting->hotline }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
