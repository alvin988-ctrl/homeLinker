<?php

namespace App\Http\Controllers\ContactSupport;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;


trait ContactTrait {

    public function textSupport(Request $support){
    
        $support->validate([
            "name" => "required|max:200|string",
            "email" => "required|max:200|string",
            "message" => "required|max:3000|string"
        ]);

        $name =  $support->input('name');
        $email =   $support->input('email');
        $message =  $support->input('message');

        $combineText =
            "Name: " . $name . PHP_EOL .
            "Email: " . $email . PHP_EOL .
            "Message: " . $message . PHP_EOL;

        $filePath = storage_path('app/datafile.txt');
        File::append($filePath, $combineText . PHP_EOL);

        return redirect()->route('contactLogin')->with("success", "Submitted Successfully!");
    }
    public function support(Request $support){
    
        $support->validate([
            "name" => "required|max:200|string",
            "email" => "required|max:200|string",
            "message" => "required|max:3000|string"
        ]);

        $name =  $support->input('name');
        $email =   $support->input('email');
        $message =  $support->input('message');

        $combineText =
            "Name: " . $name . PHP_EOL .
            "Email: " . $email . PHP_EOL .
            "Message: " . $message . PHP_EOL;

        $filePath = storage_path('app/datafile.txt');
        File::append($filePath, $combineText . PHP_EOL);

        return redirect()->route('contact')->with("success", "Submitted Successfully!");
    }

}
