<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

Route::get('/', [PropertyController::class, 'index'])->name('home');
Route::get('/properties/{property:slug}', [PropertyController::class, 'show'])->name('properties.show');
