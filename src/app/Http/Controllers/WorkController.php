<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Attendance;
use App\Models\Rest;

class WorkController extends Controller
{
    public function showIndex(){
        $user = Auth::user();
        $stampStartWork = true;

        $userName=$user->name;
        return view('index',compact('userName','stampStartWork'));
    }

    public function stampingStartWork(){
        $user = Auth::user();
        $userName=$user->name;
        $stampStartWork = false;
        $start_work = Carbon::now();

        $work_date = $start_work->toDateString();

        $attendance = new Attendance();
        $attendance->user_id = $user->id;
        $attendance->work_date = $work_date;
        $attendance->start_work = $start_work;
        $attendance->save();

        return view('index',compact('userName','stampStartWork'));
    }

    public function stampingFinishWork(){
        $user = Auth::user();
        $finish_work = Carbon::now();

        $work_date = $finish_work->toDateString();

        $attendance = Attendance::where('user_id',$user->id)->where('work_date',$work_date)->first();
        $attendance->finish_work = $finish_work;
        $attendance->save();

        return view('index');
    }

    public function stampingStartRest(){
        $user = Auth::user();
        $start_rest = Carbon::now();

        $work_date = $start_rest->toDateString();
        $attendance = Attendance::where('user_id',$user->id)->where('work_date',$work_date)->first();

        $rest = new Rest();
        $rest->attendance_id = $attendance->id;
        $rest->start_rest = $start_rest;
        $rest->save();

        return view('index');
    }

    public function stampingFinishRest(){
        $user = Auth::user();
        $finish_rest = Carbon::now();

        $work_date = $finish_rest->toDateString();
        $attendance = Attendance::where('user_id',$user->id)->where('work_date',$work_date)->first();

        $rest = Rest::where('attendance_id',$attendance->id)->where('start_rest','like','%'.$work_date.'%')->first();
        $rest->finish_rest = $finish_rest;
        $rest->save();

        return view('index');
    }
}
