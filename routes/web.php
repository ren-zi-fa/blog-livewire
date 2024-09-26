<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Home::class)->name('home');
Route::get('/about', \App\Livewire\About::class)->name('about');
Route::get('/post', \App\Livewire\Post\Index::class)->name('post.index');
Route::get('/user/{user}', \App\Livewire\User\Show::class)->middleware(['auth', 'role:admin'])->name('show');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth', 'role:admin'])
    ->name('profile');

Route::view('create-post', 'post.create')->middleware(['auth', 'role:admin'])->name('post.create');
Route::view('all-users', 'user.index')->middleware(['auth', 'role:admin'])->name('user.index');
require __DIR__.'/auth.php';
