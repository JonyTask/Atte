<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function showIndex(){
        return view('index');
    }

    public function stampingStartWork(){}
    public function stampingFinishWork(){}
    public function stampingStartRest(){}
    public function stampingFinishRest(){}
}
