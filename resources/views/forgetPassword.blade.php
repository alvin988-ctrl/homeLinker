@extends('components.layout')

@section('main')
<div class="min-h-screen bg-gray-50 flex items-center justify-center p-6">
  <div class="max-w-md w-full bg-white shadow-lg rounded-2xl p-8">
    <header class="mb-6 text-center">
      <h1 class="text-2xl font-bold text-gray-800">Forgot Your Password?</h1>
      <p class="text-sm text-gray-500">Enter your email to receive a password reset link.</p>
    </header>

    @if(session('status'))
        <p class="text-green-600 mb-4">{{ session('status') }}</p>
    @endif

    @if($errors->any())
        <p class="text-red-600 mb-4">{{ $errors->first() }}</p>
    @endif

    <form action="{{route('password.email')}}" method="POST" class="space-y-4">
        @csrf
        <label class="block">
            <span class="text-sm font-medium text-gray-700">Email address</span>
            <input type="email" name="email" placeholder="Enter your email"
                class="mt-2 block w-full px-4 py-2 text-gray-700 placeholder-gray-400 bg-white border rounded-md focus:border-blue-400 focus:ring focus:ring-blue-300 focus:outline-none"
                required>
        </label>
        <button type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
            Send Reset Link
        </button>
    </form>
  </div>
</div>
@endsection
