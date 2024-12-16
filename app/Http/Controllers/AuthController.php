<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
     //show the login page
     public function login()
     {
         return view('auth.login');
     }
 
     //show the register page
     public function register()
     {
         return view('auth.register');
     }
}
