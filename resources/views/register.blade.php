@extends('components.layout')

@section('main')
    <section class="bg-white dark:bg-gray-900">
    <div class="container flex items-center justify-center min-h-screen px-6 mx-auto">
    
        <form action="{{route('register.post')}}" method="POST" class="w-full max-w-md">
        @csrf
        
         @session('success')
        <p style="color: green;">{{session('success')}}</p>
        @endsession
            
            <div class="flex items-center justify-center mt-6">
                <a href="#" class="w-1/3 pb-4 font-medium text-center text-gray-800 capitalize  dark:border-blue-400 dark:text-white">
                    sign up
                </a>
            </div>

            <div class="relative flex items-center mt-8">
                <span class="absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </span>

                <input name="name" id="name" type="text" class="block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Name">
            </div>

            @error('name')
                <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror


            <div class="relative flex items-center mt-6">
                <span class="absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </span>

                <input name="email" id="email" type="email" class="block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Email address">
            </div>

            @error('email')
                <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror

            <div class="relative flex items-center mt-6">
    <span class="absolute">
        <svg xmlns="http://www.w3.org/2000/svg" 
             class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" 
             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" 
                d="M3 5a2 2 0 012-2h1.28a2 2 0 011.94 1.45l.58 2.32a2 2 0 01-.45 1.79l-1.1 1.1a11 11 0 005.66 5.66l1.1-1.1a2 2 0 011.79-.45l2.32.58A2 2 0 0121 17.72V19a2 2 0 01-2 2h-1C9.82 21 3 14.18 3 6V5z" />
        </svg>
    </span>

    <input 
        name="phone" 
        id="phone" 
        type="text" 
        class="block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 
               dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 
               focus:border-blue-400 dark:focus:border-blue-300 
               focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" 
        placeholder="Phone number">
</div>

@error('phone')
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror


       <div class="relative flex items-center mt-4">
    <span class="absolute left-0 pl-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-300 dark:text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
        </svg>
    </span>

    <input 
        id="passwordField"
        type="password" 
        class="block w-full px-10 py-3 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" 
        placeholder="Password" 
        name="password"
    >

    
    <span class="absolute right-3 cursor-pointer" onclick="togglePassword()">
        <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
        </svg>
    </span>
</div>


               @error('password')
                    <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                @enderror
          
            <div class="mt-6">
                <button class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50" type="submit">
                    Sign Up
                </button>

                <div class="mt-6 text-center ">
                    <a href="{{route('login')}}" class="text-sm text-blue-500 hover:underline dark:text-blue-400">
                        Already have an account?
                    </a>
                </div>

                        <div class="flex items-center justify-center mt-6">
            <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/4"></span>

            <p class="px-3 text-sm text-gray-500 dark:text-gray-400">or</p>

            <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/4"></span>
        </div>

                        <div class="mt-6">
            <a href="{{ route('google.redirect') }}"
                class="flex items-center justify-center w-full px-6 py-3 text-sm font-medium tracking-wide text-gray-700 capitalize 
                transition-colors duration-300 transform bg-white border border-gray-300 rounded-lg hover:bg-gray-100 
                focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                <img src="https://www.svgrepo.com/show/475656/google-color.svg" 
                    alt="Google" class="w-5 h-5 mr-3">
                Sign Up with Google
            </a>
        </div>

            </div>
        </form>
    </div>
</section>
<script src="{{asset('js/properties.js')}}"></script>
@endsection