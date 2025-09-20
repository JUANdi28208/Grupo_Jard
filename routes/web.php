<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('portafolio');
})->name('home');

Route::post('/contacto', [ContactController::class, 'store'])->name('contacto.store');