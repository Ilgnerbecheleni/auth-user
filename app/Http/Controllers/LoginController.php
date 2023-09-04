<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iluminate\Support\Auth;
class LoginController extends Controller
{
    //
    public function show(){
        return view('login');
    }

    public function auth(Request $request){

        $credentials = $request->validate(
       [     'email' => [ 'required','email'],
       'password'=>['password']]
        );


    }
}
