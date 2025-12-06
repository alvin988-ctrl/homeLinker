@extends('components.layout')
<div class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg">
        
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-4">
            Verify Your Email
        </h2>

        <p class="text-center text-gray-600 mb-6">
            Didn’t receive the verification email?  
            Click the button below to resend.
        </p>

        <!-- Success Message -->
       @if (session('message'))
    <div class="mb-4 text-green-600 text-sm text-center">
        {{ session('message') }}
    </div>
@endif

        

        <!-- Form -->
        <form method="GET" action="{{route('verification.send')}}">
            @csrf

            <button 
                type="submit"
                class="w-full bg-indigo-600 text-white py-2 rounded-lg shadow hover:bg-indigo-700 transition">
                Resend Verification Email
            </button>
        </form>

        <div class="text-center mt-6">
            <a href="{{ route('logout') }}" 
               class="text-gray-600 text-sm hover:underline"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Log Out
            </a>

            <form id="logout-form" method="POST" action="{{ route('logout') }}" class="hidden">
                @csrf
            </form>
        </div>

    </div>

</div>

