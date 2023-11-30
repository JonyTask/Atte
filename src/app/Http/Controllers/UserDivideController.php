<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserDivideController extends Controller
{
    public function EachUserView(Request $request){
        $viewUser = User::where('name',$request)->Paginate(5);
        return view('eachUser',compact('viewUser'));
    }
}
