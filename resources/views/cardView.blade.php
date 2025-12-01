@extends('components.layout')

@section('main')
@include('components.indexnav')

<div class="container mx-auto px-6 py-10">

    <h1 class="text-2xl font-semibold mb-6 text-center">
        {{ $property->title }}
    </h1>

    <!-- Two-column image grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

        @foreach($property->images as $image)
            <div class="w-full h-64 rounded-xl overflow-hidden shadow-md">
                <img 
                    src="{{ asset($image) }}" 
                    alt="Property Image" 
                    class="w-full h-full object-cover"
                >
            </div>
        @endforeach

    </div>

    <div class="mt-10">
        <h2 class="text-xl font-bold">Details</h2>
        <p class="text-gray-700 mt-2">{{ $property->description }}</p>

        <p class="mt-4 font-semibold text-lg">
            Price: ₦{{ number_format($property->price) }}
        </p>

        <p class="text-gray-600 mt-1">
            Location: {{ $property->location }}, Nigeria
        </p>
    </div>

</div>

 <div class="mt-6 flex items-center justify-center gap-4">
    <a href="{{ route('dashboard') }}" 
       class="px-4 py-2 bg-black text-white rounded-lg hover:bg-blue-500 transition">
       ← Back to Listings
    </a>

    <a href="{{ route('agentContact') }}"  
       class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-500 transition">
        Contact Agent
    </a>
</div>

@include('components.footer')
@endsection
