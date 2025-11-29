@extends('components.layout')

<body class="bg-gray-100 text-gray-900">

@include('components.indexnav')

    <header class="bg-blue-50 py-12 text-center shadow-sm">
        <h2 class="text-3xl font-semibold text-blue-700">Upload Your Property</h2>
        <p class="text-gray-600 mt-2">List your property and reach thousands of buyers and renters</p>
    </header>

   @section('main')
         <div class="container mx-auto mt-12 mb-20 px-6">
        <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-lg">
            @session('success')
                <p class="text-green-600">{{session('success')}}</p>
            @endsession
            <form action="{{route('upload-property')}}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Property Title</label>
                    <input type="text" name="title" id="title" class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" placeholder="e.g. 3 Bedroom Apartment in Lekki" required>
                </div>

                @error('title')
                    <p class="text-red-600">{{$message}}</p>
                @enderror

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" rows="4" class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" placeholder="Describe your property" required></textarea>
                </div>

                   @error('description')
                    <p class="text-red-600">{{$message}}</p>
                @enderror

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-700">Price (₦)</label>
                        <input type="number" name="price" id="price" class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" placeholder="Enter price" required>
                    </div>

                       @error('price')
                    <p class="text-red-600">{{$message}}</p>
                @enderror

                    <div>
                        <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                        <input type="text" name="location" id="location" class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" placeholder="e.g. Lagos, Nigeria" required>
                    </div>

                       @error('location')
                    <p class="text-red-600">{{$message}}</p>
                @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="type" class="block text-sm font-medium text-gray-700">Property Type</label>
                        <select name="type" id="type" class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
                            <option value="">Select type</option>
                            <option value="apartment">Apartment</option>
                            <option value="house">House</option>
                            <option value="land">Land</option>
                            <option value="commercial">Commercial</option>
                        </select>
                    </div>

                       @error('type')
                    <p class="text-red-600">{{$message}}</p>
                @enderror

                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700">Listing Type</label>
                        <select name="status" id="status" class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
                            <option value="">Select status</option>
                            <option value="rent">For Rent</option>
                            <option value="sale">For Sale</option>
                        </select>
                    </div>
                </div>

                   @error('status')
                    <p class="text-red-600">{{$message}}</p>
                @enderror

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Property Images</label>
                    <input type="file" name="images[]" id="image" multiple class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
                    <p class="text-sm text-gray-500 mt-1">You can upload multiple images (JPEG, PNG)</p>
                </div>
                
                <div class="pt-6">
                    <button type="submit" class="w-32 mx-auto block bg-blue-600 text-white py-3 rounded-lg font-medium hover:bg-blue-500 transition duration-200">Upload Property</button>
                </div>
            </form>
        </div>
    </div>
     @include('components.footer')
   @endsection

   


