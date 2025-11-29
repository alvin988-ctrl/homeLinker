<?php

namespace App\Http\Controllers\Property;

use App\Models\Property;
use Illuminate\Http\Request;

trait SearchByLocation {
    public function search(Request $request) {
        
    $query = Property::query();

    if ($request->filled('search')) {
       $search = strtolower(str_replace(' ', '', $request->search)); 

        $query->where(function ($q) use ($search) {
            $q->whereRaw("REPLACE(LOWER(title), ' ', '') LIKE ?", ["%{$search}%"])
              ->orWhereRaw("REPLACE(LOWER(location), ' ', '') LIKE ?", ["%{$search}%"])
              ->orWhereRaw("REPLACE(LOWER(type), ' ', '') LIKE ?", ["%{$search}%"]);
        });
    }
    $properties = $query->paginate(3);
    if($properties->count() == 0) {
        return  view('dashboard', [
            "properties" => $properties,
            "message" => "No Result Found"
        ]);
    }
    return view('dashboard', compact('properties'));
    }

    
    public function searchGuest(Request $request) {
        
        $query = Property::query();
     if ($request->filled('search')) {
        $search = strtolower(str_replace(' ', '', $request->search)); 

        $query->where(function ($q) use ($search) {
            $q->whereRaw("REPLACE(LOWER(title), ' ', '') LIKE ?", ["%{$search}%"])
              ->orWhereRaw("REPLACE(LOWER(location), ' ', '') LIKE ?", ["%{$search}%"])
              ->orWhereRaw("REPLACE(LOWER(type), ' ', '') LIKE ?", ["%{$search}%"]);
        });

    }
        $properties = $query->paginate(3);
        if ($properties->count() == 0) {
            return view('welcome', [
                "properties" => $properties,
                    "message" => "No Result found"
            ]);  
        }
            return view('welcome', compact('properties'));
        
            }
}