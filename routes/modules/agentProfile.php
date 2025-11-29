<?php 

use Illuminate\Support\Facades\Route;

Route::get('profile', fn() => view('agentprofile'))->name('profile');