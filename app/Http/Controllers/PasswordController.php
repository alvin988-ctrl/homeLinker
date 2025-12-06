<?php

namespace App\Http\Controllers;

use Symfony\Component\CssSelector\Node\FunctionNode;

class PasswordController extends Controller
{
  public function resetNewPassword(string $token) {
        return view('resetPassword', ['token'=>$token]);
  }
}
