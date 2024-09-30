<?php

use Illuminate\Support\Facades\Route;


Route::get('/', \App\Livewire\Home::class)->name('home');
Route::get('/about', \App\Livewire\About::class)->name('about');
Route::get('/articles', \App\Livewire\Articles::class)->name('articles');
Route::get('/user/{user}', \App\Livewire\User\Show::class)->middleware(['auth', 'role:admin'])->name('show');

Route::view('create-post', 'post.create')->middleware(['auth', 'role:admin'])->name('post.create');
Route::view('create-user', 'user.create')->middleware(['auth', 'role:admin'])->name('user.create');
Route::view('data-users', 'user.index')->middleware(['auth', 'role:admin'])->name('users.index');
Route::view('data-posts', 'post.index')->middleware(['auth', 'role:admin'])->name('posts.index');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth', 'role:admin'])
    ->name('profile');
require __DIR__.'/auth.php';
