<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ApplicationForm;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/apply', function () {
    return view('apply');
})->middleware(['auth']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
