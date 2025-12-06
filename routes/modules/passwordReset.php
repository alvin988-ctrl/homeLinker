<?php

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PasswordResetToken;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\PasswordController;


Route::get('/forgot-password', function (){
        return view('forgetPassword');
})->middleware('guest')->name('forgot-password');

Route::post('/forgot-password', function (Request $request) {
        $request->validate(['email' => 'required|string|max:30']);

        $status =  Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT ? back()->with(['status' => __($status)]) : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset/password/{token}', [PasswordController::class, 'resetNewPassword'])->name('password.reset');

Route::post('/reset-password', function (Request $request){
        $request->validate([
            'email' => 'required|email|string|max:30',
            'token' => 'required',
            'password' => 'required|confirmed|max:50'
        ]);

        $status = Password::Reset(
            $request->only('email', 'password','password_confirmation', 'token'), 
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PasswordReset ? redirect()->route('login')->with('status', __($status)) : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');