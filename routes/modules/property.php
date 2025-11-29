<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;


Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [PropertyController::class, 'index'])->name('dashboard');
    Route::get('/postProperty', fn () => view('postProperty'))->name('postProperty');
    Route::post('/upload-property', [PropertyController::class, 'store'])->name('upload-property');
    Route::get('/properties', [PropertyController::class, 'index'])->name('properties');
    Route::get('/cardview/{id}', [PropertyController::class, 'show'])->name('cardview');
});
