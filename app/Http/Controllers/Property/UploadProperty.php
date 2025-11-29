<?php

namespace App\Http\Controllers\Property;

use App\Models\Property;
use Illuminate\Http\Request;

trait UploadProperty {
    public function store(Request $request)
{
    $request->validate([
        "title" => "required|max:300|string",
        "description" => "required|max:5000|string",
        "price" => "required|numeric|min:0",
        "location" => "required|max:1000|string",
        "type" => "required|string|in:apartment,house,land,commercial",
        "status" => "required|string|in:rent,sale",
        "images.*" => "required|mimes:jpg,jpeg,png,webp,avif|max:2048"
    ]);

    $imagePaths = []; // ✅ FIX: Initialize array

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $filename);

            // Store relative path
            $imagePaths[] = 'images/' . $filename;
        }
    }

    $property = new Property();
    $property->title = $request->title;
    $property->description = $request->description;
    $property->price = $request->price;
    $property->location = $request->location;
    $property->type = $request->type;
    $property->status = $request->status;

    // Save images column as JSON
    $property->images = $imagePaths;

    $property->save();

    return back()->with('success', 'Property created successfully.');
}

}