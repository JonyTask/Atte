<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function showIndex(){
        $user = Auth::user();

        $userName=$user->name;
        return view('index',compact('userName'));
    }

    public function stampingStartWork(){}
    public function stampingFinishWork(){}
    public function stampingStartRest(){}
    public function stampingFinishRest(){}
}
