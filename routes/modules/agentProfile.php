<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

Route::get('profile', fn () => view('agentProfile'))->name('profile');
Route::get('/agentContact', [PropertyController::class, 'agentContact'])->middleware(['auth'])->name('agentContact');