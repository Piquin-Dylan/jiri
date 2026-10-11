<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'livewire.form.login')->name('login');
Route::livewire('/register', 'livewire.form.register')->name('register');
Route::livewire('/dashboard', 'dashboard')->name('dashboard');
