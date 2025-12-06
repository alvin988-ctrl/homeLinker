@extends('components.layout')

@section('main')
<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
    <div class="w-full max-w-md bg-white shadow-lg rounded-xl p-6 space-y-6">

        <h2 class="text-2xl font-bold text-center text-gray-800">
            Reset Your Password
        </h2>

        {{-- STATUS MESSAGE --}}
        @if (session('status'))
            <div class="text-green-600 text-center text-sm font-medium">
                {{ session('status') }}
            </div>
        @endif

        {{-- ERROR MESSAGE --}}
        @if ($errors->any())
            <div class="text-red-600 text-sm">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('password.update')}}" method="POST" class="space-y-4">
            @csrf

            {{-- Email --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Email Address
                </label>
                <input type="email" name="email" required
                       class="w-full border-gray-300 rounded-lg focus:ring-purple-500 focus:border-purple-500"
                       placeholder="Enter your email">
            </div>

            {{-- Token --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Reset Token
                </label>
                <input type="text" name="token" required value="{{ request('token') }}"
                       class="w-full border-gray-300 rounded-lg focus:ring-purple-500 focus:border-purple-500"
                       placeholder="Paste your reset token">
            </div>

            {{-- New Password --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    New Password
                </label>
                <input type="password" name="password" required
                       class="w-full border-gray-300 rounded-lg focus:ring-purple-500 focus:border-purple-500"
                       placeholder="Enter new password">
            </div>

            {{-- Confirm Password --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Confirm New Password
                </label>
                <input type="password" name="password_confirmation" required
                       class="w-full border-gray-300 rounded-lg focus:ring-purple-500 focus:border-purple-500"
                       placeholder="Re-enter your password">
            </div>

            {{-- Submit --}}
            <button type="submit"
                class="w-full bg-purple-600 hover:bg-purple-700 text-white font-medium py-2 rounded-lg transition">
                Reset Password
            </button>
        </form>

    </div>
</div>
@endsection
