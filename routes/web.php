<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

Route::middleware('auth')->group(function () {
    Route::livewire('/dashboard', 'livewire.pages.dashboard')->name('dashboard');
    Route::livewire('/project', 'livewire.pages.project')->name('project');
    Route::livewire('/contact', 'livewire.pages.contact')->name('contact');
    Route::livewire('/jiri', 'livewire.pages.jiri')->name('jiri');
    Route::livewire('/jiri/{jiri}', 'livewire.pages.jiri-edit')->name('jiri-edit');
    Route::livewire('/jiri/{jiri}/students/{student}', 'livewire.pages.jiri-student')->name('jiri-student');
});
