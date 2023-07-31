<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\LoginEvent;
use AutheticatesUsers;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
       return view('auth.login');
    }
    public function authenticated(Request $request, $user) {
        event(new LoginEvent($user));
    }

}