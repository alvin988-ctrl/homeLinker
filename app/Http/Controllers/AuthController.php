<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Auth\GoogleAuth;

class AuthController extends Controller
{
    use Login, Register, GoogleAuth;
}
