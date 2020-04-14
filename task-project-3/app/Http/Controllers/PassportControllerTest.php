<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassportControllerTest extends Controller
{
  public function register(Request $req) {
  
    $validatedData = $req->validate([
        'name'=>'required|max:55',
        'email'=>'required|required',
        'password'=>'required|confirmed'
    ]);

    $user = User::create($validatedData);
    $accessToken = $user->createToken('authToken');
    return response(['user'=>$user, 'access_token'=>$accessToken]);  }



  public function login(Request $req) {
  
  
  }

}
