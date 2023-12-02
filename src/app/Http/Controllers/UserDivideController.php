<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendance;

class UserDivideController extends Controller
{
    public function EachUserView(Request $request){
        $viewUser = $request->user;
        $user_name = User::where('name',$viewUser)->first()->name;
        $user_id = User::where('name',$viewUser)->first()->id;
        $attendances = Attendance::where('user_id',$user_id)->Paginate(5);
        return view('eachUser',compact('attendances','user_name'));
    }
}
