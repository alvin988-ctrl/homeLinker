<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordController;
use Laravel\SerializableClosure\Serializers\Signed;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::get('/email/verify', function (){
    return view('emailVerify');
})->middleware('auth')->name('emailVerify');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request){
    $request->fulfill();

    return redirect()->route('dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/email/verification-notification', function (Request $request){
        $request->user()->SendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');


Route::get('/forget-password', [PasswordController::class, 'forgetpassword'])->name('forget-password');
Route::post('/forget-password', [PasswordController::class, 'sendResetLink'])->name('forget-password.send');


Route::get('/reset-password/{token}', [PasswordController::class, 'resetNewpassword'])->name('password.reset');
Route::post('/reset-password', [PasswordController::class, 'resetPassword'])->name('password.update');


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

