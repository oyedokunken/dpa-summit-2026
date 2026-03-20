<?php

use Illuminate\Support\Facades\Route;

// 1. Home Route (Named 'home')
Route::get('/', function () {
    return view('home');
})->name('home');

// 2. Delegates Route (Named 'delegates') - Placeholder for now
Route::get('/delegates', function () {
    return view('delegates'); // We will create this file in a minute
})->name('delegates');

// 3. Agenda Route (Named 'agenda') - Placeholder for now
Route::get('/agenda', function () {
    return view('agenda'); // We will create this file in a minute
})->name('agenda');