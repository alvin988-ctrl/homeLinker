<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;

trait Register {
      public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'phone' => 'required|digits_between:10,20',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            "name" => $data['name'],
            "email" => $data['email'],
            "phone" => $data['phone'],
            "password" => Hash::make($data['password'])
        ]);

        event(new Registered($user));
        $user->SendEmailVerificationNotification();
         
        Auth::login($user);
         return redirect()->route('emailVerify');
    }
}