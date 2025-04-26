<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');



// All admin routes protected by auth middleware
Route::middleware(['auth'])->prefix('admin')->group(function () {

    // Dashboard
    Route::get('/home',[HomeController::class, 'index'])->name('admin.home');

    // Hero Video (Only one allowed)
    Route::get('/hero-video', [HeroVideoController::class, 'edit'])->name('hero.edit');
    Route::post('/hero-video', [HeroVideoController::class, 'update'])->name('hero.update');

    // Films
    Route::resource('films', FilmController::class);

    // Clients
    Route::resource('clients', ClientController::class);

    // Gallery Images
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::post('/gallery', [GalleryController::class, 'store'])->name('gallery.store');
    Route::delete('/gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
