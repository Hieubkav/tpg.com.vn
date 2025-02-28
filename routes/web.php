<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\MainController;

    Route::get('/', [MainController::class, 'storeFront'])
        ->name('storeFront');
    Route::get('/about', [MainController::class, 'about'])
        ->name('about');
    Route::get('/contact', [MainController::class, 'contact'])
        ->name('contact');
    Route::get('/services', [MainController::class, 'services'])
        ->name('services');

