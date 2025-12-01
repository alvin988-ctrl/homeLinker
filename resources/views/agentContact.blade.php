@extends('components.layout')

@section('main')
<div class="min-h-screen bg-gray-100 flex items-center justify-center p-6">
    <div class="w-full max-w-md bg-white shadow-lg rounded-xl p-6">
        <!-- Profile Header -->
        <div class="flex flex-col items-center">
            <div class="w-24 h-24 rounded-full bg-gray-300 flex items-center justify-center text-3xl font-semibold text-white">
                
            </div>
    
            <h2 class="mt-4 text-2xl font-semibold text-gray-800">{{ ucwords(Auth::user()->name) }}</h2>
            <p class="text-gray-500 text-sm">Agent Profile</p>
        </div>

        <!-- User Information -->
        <div class="mt-6 space-y-4">

            <div>
                <label class="text-sm font-medium text-gray-500">Email</label>
                <p class="mt-1 text-gray-800 font-semibold">{{ Auth::user()->email }}</p>
            </div>

            <div>
                <label class="text-sm font-medium text-gray-500">Phone</label>
                <p class="mt-1 text-gray-800 font-semibold">{{Auth::user()->phone}}</p>
            </div>
        </div>
 <div class="mt-6 flex items-center justify-center gap-4">
    <a href="{{ route('dashboard') }}" 
       class="px-4 py-2 bg-black text-white rounded-lg hover:bg-blue-500 transition">
       ← Back to Listings
    </a>

    </div>
</div>



@endsection
