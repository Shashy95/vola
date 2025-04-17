<?php

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

Route::get('/services/{service}', function ($service) {
    return view('pages.service-details', ['service' => $service]);
})->name('service-details');



Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');