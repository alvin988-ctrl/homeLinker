@extends('components.layout')
@include('index.nav')
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @foreach ($properties as $property)
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <img src="{{ asset('po/' . $property->image_path) }}" 
                 alt="{{ $property->title }}" 
                 class="w-full h-48 object-cover">

            <div class="p-4">
                <h2 class="text-lg font-semibold">{{ $property->title }}</h2>
                <p class="text-gray-600 mt-2">₦{{ number_format($property->price) }}</p>
                <p class="text-gray-500 mt-1">{{ $property->location }}</p>
                <p class="text-gray-500 mt-1">{{ ucfirst($property->type) }}</p>

                <a href="{{ route('cardview', $property->id) }}" 
                   class="mt-3 inline-block text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br font-medium px-4 py-2 rounded-xl">
                   View
                </a>
            </div>
        </div>
    @endforeach
</div>

<div class="mt-10 flex justify-center">
    {{ $properties->links() }}
</div>
