<?php

use App\Livewire\About;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Home::class)->name('home');
Route::get('/about', \App\Livewire\About::class)->name('about');
Route::get('/post',\App\Livewire\Post\Index::class)->name('post.index');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/create-post', function () {
    return view('post.create');
})->name('post.create');

Route::get('/user/{user}', \App\Livewire\User\Show::class)->name('show');
require __DIR__ . '/auth.php';
