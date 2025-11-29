<?php

namespace App\Http\Controllers\Property;

use App\Models\Property;

trait IndexTrait {

  public function welcome() {
    $properties = Property::paginate(6);
    return view('welcome', compact('properties'));
  }
  
      public function index()
    {
      $properties = Property::paginate(6);
      return view('dashboard', compact('properties'));
    }

      public function show($id)
    {
        $property = Property::findOrFail($id);
        return view('cardview', compact('property'));
    }
    
    public function showGuest($id)
    {
        $property = Property::findOrFail($id);
        return view('cardviewGuest', compact('property'));
    }
}
