<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GalleryImageController;
use App\Http\Controllers\HeroVideoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Film;
use App\Models\Client;
use App\Models\GalleryImage;
use App\Models\HeroVideo;
use App\Models\Team;

Route::get('/', function () {
    $video = HeroVideo::first(); 
    $films = Film::all();
    $clients = Client::all(); 
    $gallery = GalleryImage::take(12)->get();; 

return view('pages.home', compact('video', 'films', 'clients', 'gallery'));
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/team', function () {
    $teams = Team::all(); 
    return view('pages.team',compact('teams'));
})->name('team');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/gallery', function () {
    $gallery = GalleryImage::latest()->paginate(9);
    if (request()->ajax()) {
        return view('pages.gallery-items', compact('gallery'));
    }
    return view('pages.gallery', compact('gallery'));
})->name('gallery');


Auth::routes();

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
    Route::get('/gallery', [GalleryImageController::class, 'index'])->name('gallery.index');
    Route::post('/gallery', [GalleryImageController::class, 'store'])->name('gallery.store');
    Route::delete('/gallery/{id}', [GalleryImageController::class, 'destroy'])->name('gallery.destroy');

    Route::resource('/teams', TeamController::class);

});


