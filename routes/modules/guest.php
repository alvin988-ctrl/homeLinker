<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

Route::controller(PropertyController::class)->group(function () {
    Route::get('/', 'welcome')->name('/');
    Route::get('/carousel', fn () => view('carousel'))->name('carousel');
    Route::get('/cardviewGuest/{id}', 'showGuest')->name('cardviewGuest');
    Route::get('/search', 'search')->name('search');
    Route::get('/searchGuest', 'searchGuest')->name('searchGuest');
});
