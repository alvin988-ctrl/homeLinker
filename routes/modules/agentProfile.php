<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

Route::get('profile', fn () => view('agentProfile'))->name('profile');