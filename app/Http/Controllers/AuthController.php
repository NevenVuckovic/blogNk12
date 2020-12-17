<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class AuthController extends Controller
{
  public function getRegistrationForm()
  {
    return view('auth.register');
  }

  public function register(RegisterRequest $request)
  {
    $data = $request->validated();
    $user = User::create($data);
    return $user;
  }

}
