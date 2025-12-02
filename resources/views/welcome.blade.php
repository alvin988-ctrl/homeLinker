@extends('components.layout')
<link rel="stylesheet" href="{{asset('css/script.css')}}">
@section('main')
  @include('components.navbar')
<section class="hero">
    <div class="overlay"></div>

  

    <div class="container px-6 py-16 mx-auto text-center hero-content">
        <div class="max-w-lg mx-auto">
            <h1 class="text-3xl font-semibold text-white lg:text-4xl">
                Building Your Future Starts with the Perfect Home
            </h1>

            <p class="mt-6 text-gray-200">
                From listing to <span class="text-blue-400">closing</span>, manage, buy, or sell properties seamlessly with our powerful tools.
            </p>

            <form class="max-w-sm mx-auto mt-6" action="{{ route('searchGuest') }}" method="GET">
                <input type="text" id="search" name="search" value="{{ request('search') }}"
                    placeholder="Search Properties by type"
                    class="bg-white/90 border border-gray-300 text-gray-900 text-sm rounded-lg 
                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

                <button type="submit" 
                    class="px-5 py-2 mt-4 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none">
                    Search Properties
                </button>
            </form>
        </div>
    </div>
</section>


 <div class="container mx-auto px-4 py-10">
    <h1 class="text-3xl font-semibold mb-6 text-center">Available Properties</h1>

   @if(isset($message))
    <p>{{ $message }}</p>
@endif

   <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

    @foreach ($properties as $property)
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition hover:-translate-y-1">
            <div class="relative">

              <div x-data="{ active: 0 }" class="relative w-full h-48 overflow-hidden rounded-2xl">
    <template x-for="(image, index) in {{ json_encode($property->images) }}" :key="index">
        <img 
            x-show="active === index" 
            :src="`{{ asset('') }}${image}`" 
            alt="{{ $property->title }}" 
            class="w-full h-48 object-cover transition-all duration-500"
        >
    </template>

    <!-- Previous Button -->
    <button 
        @click="active = active === 0 ? {{ count($property->images) - 1 }} : active - 1"
        class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-white/70 p-1 rounded-full hover:bg-white"
    >
        &#10094;
    </button>

    <!-- Next Button -->
    <button 
        @click="active = active === {{ count($property->images) - 1 }} ? 0 : active + 1"
        class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-white/70 p-1 rounded-full hover:bg-white"
    >
        &#10095;
    </button>

    <!-- Indicators -->
    <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex gap-1">
        <template x-for="(image, index) in {{ count($property->images) }}" :key="index">
            <span 
                @click="active = index" 
                :class="active === index ? 'bg-blue-500' : 'bg-white/70'" 
                class="w-2 h-2 rounded-full cursor-pointer"
            ></span>
        </template>
    </div>
</div>

                <div class="absolute top-6 left-3 bg-white/80 px-3 py-1 rounded-full text-sm font-medium backdrop-blur">
                    <strong>{{ ucwords($property->status) }}</strong>
                </div>

            </div>

            <div class="p-4">
                <h2 class="text-lg font-semibold line-clamp-2">{{ ucwords($property->type) }}</h2>

                <div class="font-semibold absolute right-3 py-1 text-dark bg-neutral-primary-soft border border-default rounded-full text-sm">
                    <p>₦{{ number_format($property->price) }}</p>
                </div>  

                <p class="text-sm mt-6 text-gray-600 mt-2 line-clamp-3">
                    {{ $property->description }}
                </p>

                <div class="mt-4 flex items-center justify-between text-sm text-gray-500">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M21 10c0 6-9 12-9 12S3 16 3 10a9 9 0 1 1 18 0z"
                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        {{ $property->location }}, Nigeria
                    </div>

                    <span>{{ $property->title }}</span>

                    <form action="{{ route('cardviewGuest', $property->id) }}" method="GET">
                        <button class="text-white bg-blue-600 rounded-xl px-4 py-2">
                            View
                        </button>
                    </form>

                </div>
            </div>

        </div>
    @endforeach

</div>


<div class="mt-6">
  {{$properties->links()}}
</div>

@include('components.carousel')
</section>

@include('components.footer')

@endsection
