@extends('components.layout')

@section('main')
    <div class="max-w-md mx-auto mt-20 p-6 bg-white shadow rounded">
        <h2 class="text-2xl font-bold mb-4">Verify Your Email</h2>

        <p class="mb-4 text-gray-700">
            Before proceeding, please check your email for a verification link.
            If you didn't receive the email, you can request another.
        </p>

        @if (session('message'))
            <p class="mb-4 text-green-600">{{ session('message') }}</p>
        @endif

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Resend Verification Email
            </button>
        </form>
    </div>

@endsection