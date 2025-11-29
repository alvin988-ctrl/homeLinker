<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Property\IndexTrait;
use App\Http\Controllers\Property\SearchByLocation;
use App\Http\Controllers\Property\UploadProperty;

class PropertyController extends Controller
{
    use IndexTrait, SearchByLocation, UploadProperty;   
}
