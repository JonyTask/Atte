<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function EnactRegister(RegisterRequest $request){
        return redirect('/');
    }
}
