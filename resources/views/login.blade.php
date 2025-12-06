@extends('components.layout')

<link rel="stylesheet" href="{{asset('css/script.css')}}">
@section('main')

<div class="bg-gray-900 pattern">
    <div class="container px-6 mx-auto">
        <nav class="flex flex-col py-6 sm:flex-row sm:justify-between sm:items-center">
        

            <div class="flex items-center mt-2 -mx-2 ml-auto sm:mt-0">
                <a href="{{route('login')}}" class="px-3 py-1 text-sm font-semibold text-white transition-colors duration-300 transform border-2 rounded-md hover:bg-gray-700">Sign In</a>
                <a href="{{route('register.post')}}" class="px-3 py-2 mx-2 text-sm font-semibold text-white transition-colors duration-300 transform bg-black rounded-md hover:bg-gray-800">Sign Up</a>
            </div>
        </nav>

        <div class="flex flex-col items-center py-6 lg:h-[36rem] lg:flex-row">
            <div class="lg:w-1/2">
                 <h3 class="mt-2 text-2xl font-semibold text-gray-100">
                    Hello <span class="text-blue-400">Guest</span>
                </h3>
                <h2 class="text-3xl mt-2 font-semibold text-gray-100 lg:text-4xl">Welcome to HomeLinker!</h2>
                <p class="mt-4 text-gray-100">Discover a smarter way to buy, sell, or rent properties with ease. Our platform brings together trusted agents, verified listings, and real-time updates helping you make confident decisions from the comfort of your home.</p>
            </div>

            <div class="flex mt-8 lg:w-1/2 lg:justify-end lg:mt-0">
                <div class="w-full max-w-md bg-white rounded-lg dark:bg-gray-800">
                    <div class="px-6 py-8 text-center">
                        <h2 class="text-2xl font-semibold text-gray-700 dark:text-white fo">Sign In</h2>
                            
                                 @session('error')
                                <div class="p-3 mb-3 text-red-700 bg-red-100 border border-red-400 rounded">
                                    {{ session('error') }}
                                </div>
                            @endsession
                        <form action="{{route('login.post')}}" method="POST">
                            @csrf
                            <div class="mt-4">
                                <input class="block w-full px-4 py-2 text-gray-700 placeholder-gray-400 bg-white border rounded-md dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-500 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:ring-blue-300 focus:outline-none focus:ring" type="email" placeholder="Email address" aria-label="Email address" name="email">
                            </div>
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


                            <div class="flex items-center justify-between mt-4">
                                <a href="{{route('forgot-password')}}" class="text-sm text-gray-600 dark:text-gray-200 hover:underline">Forget Password?</a>

                                <button type="submit" class="px-6 py-2 font-medium text-white transition-colors duration-300 transform bg-gray-900 rounded-md hover:bg-gray-800 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-800 dark:focus:bg-gray-700">Sign In</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/properties.js')}}"></script>
@endsection