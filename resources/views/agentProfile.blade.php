@extends('components.layout')

@section('main')
<section class="min-h-screen bg-cover bg-center bg-no-repeat flex items-center justify-center"
      style="background-image: url('/image/bg3_img.png');">

    <div class="bg-white/90 backdrop-blur-md shadow-2xl rounded-2xl p-10 max-w-md w-full text-center">
        
        <h1 class="text-3xl font-extrabold mb-4 text-gray-900">
            Login Required
        </h1>

        <p class="text-gray-700 mb-8">
            You must login to view the agent’s contact information.
        </p>

        <a href="{{ route('login') }}"
           class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-full hover:bg-blue-700 transition duration-300">
            Go to Login
        </a>

    </div>

</section>
@endsection
