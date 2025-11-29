@extends('components.layout')


<nav 
    x-data="{ isOpen: false }" 
    class="container mx-auto p-6 lg:flex lg:items-center lg:justify-between"
><img 
    src="{{ asset('image/logo_imgg.png') }}" 
    alt="HomeLinkers Logo"
    class="w-28 h-auto md:w-36"
>
    <!-- Logo & Mobile Menu Button -->
    <div class="flex items-center justify-between">


        <!-- Mobile menu button -->
        <button 
            @click="isOpen = !isOpen" 
            class="text-gray-600 dark:text-gray-200 lg:hidden focus:outline-none"
        >
            <!-- Menu Icon -->
            <svg 
                x-show="!isOpen" 
                xmlns="http://www.w3.org/2000/svg" 
                class="w-6 h-6" 
                fill="none" 
                viewBox="0 0 24 24" 
                stroke="currentColor"
            >
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
            </svg>

            <!-- Close Icon -->
            <svg 
                x-show="isOpen" 
                xmlns="http://www.w3.org/2000/svg" 
                class="w-6 h-6" 
                fill="none" 
                viewBox="0 0 24 24" 
                stroke="currentColor"
            >
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Navigation Links -->
    <div 
        class="flex-col mt-4 space-y-4 bg-white shadow-md dark:bg-gray-900 
               lg:flex lg:flex-row lg:space-y-0 lg:space-x-8 lg:mt-0 lg:bg-transparent lg:shadow-none"
        :class="{ 'flex': isOpen, 'hidden': !isOpen }"
    >
        <a href="{{ route('/') }}" class="text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400">Home</a>
        <a href="{{ route('postProperty') }}" class="text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400">Post Property</a>
        <a href="{{ route('contact') }}" class="text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400">Contact Us</a>
        <a href="{{ route('login') }}" class="text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400">Login</a>
     </div>
 
</nav>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

