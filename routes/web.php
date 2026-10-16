<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');


Route::middleware('auth')->group(function () {
    Route::livewire('/dashboard', 'dashboard')->name('dashboard');
    Route::livewire('/project', 'livewire.pages.project')->name('project');
    Route::livewire('/contact', 'livewire.pages.contact')->name('contact');
});

