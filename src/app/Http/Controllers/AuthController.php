<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{

    public function AuthRegister(RegisterRequest $request){
        return redirect('/');
    }

    public function AuthLogin(LoginRequest $request){
        return redirect('/');
    }
}
