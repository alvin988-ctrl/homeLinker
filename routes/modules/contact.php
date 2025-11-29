<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactSupportController;

Route::get('/contact', fn () => view('contact'))->name('contact');
Route::post('/supportContact', [ContactSupportController::class, 'support'])->name('supportContact');

Route::middleware(['auth'])->group(function(){
    Route::get('/contactLogin', fn () => view('contactLogin'))->name('contactLogin');
    Route::post('/textSupport', [ContactSupportController::class, 'textSupport'])->name('textSupport');
});



