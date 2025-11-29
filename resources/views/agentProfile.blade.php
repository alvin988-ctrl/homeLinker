@extends('components.layout')
@section('main')

<section class="min-h-screen bg-cover bg-center bg-no-repeat flex items-center justify-center"
      style="background-image: url('/image/bg3_img.png');">

  <!-- Overlay (optional, makes text more visible) -->
  <div class="absolute inset-0 bg-black/40"></div>

  <div class="relative bg-gray-300 w-full max-w-md rounded-xl shadow-lg p-6 backdrop-blur-md">
    
    <!-- Profile Photo -->
    <div class="flex flex-col items-center mb-6">
      <div class="w-32 h-32 rounded-full bg-gray-200 overflow-hidden flex items-center justify-center">
        <img src="https://via.placeholder.com/150" alt="Profile Photo" class="w-full h-full object-cover">
      </div>
    </div>

    <!-- User Info -->
    <div class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-600">Full Name</label>
        <p class="text-lg font-semibold text-gray-800">{{ucwords(Auth::user()->name)}}</p>
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-600">Email</label>
        <p class="text-lg font-semibold text-gray-800">{{ucwords(Auth::user()->email)}}</p>
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-600">Phone</label>
        <p class="text-lg font-semibold text-gray-800">+234 812 345 6789</p>
      </div>
    </div>

    <!-- Buttons -->
  
  </div>

</setion>
@endsection
