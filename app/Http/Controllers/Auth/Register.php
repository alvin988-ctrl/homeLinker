<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
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
            'email' => 'required|email|unique:homelinkers,email',
            'password' => 'required|min:8',
        ]);

        $data['password'] = Hash::make($data['password']);
         if (\App\Models\User::where('email', $data['email'])->exists()) {
        return back()->withErrors(['email' => 'This email is already registered.']);
    }

        \App\Models\User::create($data);
         return redirect()->route('login.post');
    }
}