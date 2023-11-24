<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function EnactLogin(LoginRequest $request){
        return redirect('/');
    }
}
