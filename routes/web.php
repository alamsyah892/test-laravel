<?php

use Illuminate\Support\Facades\Route;

// Route::redirect('/', '/home/index.html');

Route::get('/', function () {
    return view('welcome');
    // return redirect('/home/index.html');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/settings.php';
