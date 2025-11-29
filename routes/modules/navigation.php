<?php 

 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\navigationController;

Route::get('/guestNav', [NavigationController::class, "guestNav"])->name('guestNav');
Route::get('/mainNav', [NavigationController::class, "mainNav"])->name('mainNav');