<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

        $data['password'] = Hash::make($data['password']);

        User::create($data);
        event(new Registered($data));   
         return redirect()->route('login.post');
    }
}