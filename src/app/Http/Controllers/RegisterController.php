<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function IntroRegisterPage(){
        return view('auth.register');
    }
    public function EnactRegister(RegisterRequest $request){}
}
