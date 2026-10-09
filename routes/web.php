<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'login')->name('login');
Route::livewire('/register', 'register')->name('register');
