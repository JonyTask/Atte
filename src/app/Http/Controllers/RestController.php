<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Attendance;
use App\Models\Rest;

class RestController extends Controller
{
    public function stampingStartRest(){
        $user = Auth::user();
        $start_rest = Carbon::now();
        $work_date = $start_rest->toDateString();

        $attendance = Attendance::where('user_id',$user->id)->where('work_date',$work_date)->first();
        $rest = new Rest();
        $rest->attendance_id = $attendance->id;
        $rest->start_rest = $start_rest;
        $rest->save();

        return redirect('/');
    }

    public function stampingFinishRest(){
        $user = Auth::user();
        $finish_rest = Carbon::now();
        $work_date = $finish_rest->toDateString();

        $attendance = Attendance::where('user_id',$user->id)->where('work_date',$work_date)->first();
        $rest = Rest::where('attendance_id',$attendance->id)->where('start_rest','like','%'.$work_date.'%')->whereNull('finish_rest')->first();
        $rest->finish_rest = $finish_rest;
        $rest->save();

        return redirect('/');
    }
}
