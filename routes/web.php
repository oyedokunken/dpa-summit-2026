<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ContactController;

// 1. Home Route (Named 'home')
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// 2. Delegates Route (Named 'delegates')
Route::get('/delegates', function () {
    return view('pages.delegates');
})->name('delegates');

// 3. Program/Agenda Route (Named 'agenda')
Route::get('/agenda', function () {
    return view('pages.agenda');
})->name('agenda');

// 4. Speakers Route (Named 'speakers')
Route::get('/speakers', function () {
    return view('pages.speakers');
})->name('speakers');

// 5. Sponsors & Partnerships Route (Named 'sponsors')
Route::get('/sponsors', function () {
    return view('pages.sponsors');
})->name('sponsors');

// 6. Media Route (Named 'media')
Route::get('/media', function () {
    return view('pages.media');
})->name('media');

// 7. FAQ Route (Named 'faq')
Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

// 8. Contact Route (Named 'contact')
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// 9. Register Route (Named 'register')
Route::get('/register', function () {
    return view('pages.register');
})->name('register');

// Form Submission Routes
Route::post('/register', [RegistrationController::class, 'submit'])->name('register.submit');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');