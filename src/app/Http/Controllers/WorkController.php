<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Attendance;
use App\Models\Rest;

class WorkController extends Controller
{
    public function showIndex(){
        $this->switchNextDate();

        $user = Auth::user();
        $date = Carbon::today()->toDateString();
        $attendance = Attendance::where('user_id',$user->id)->where('work_date',$date)->first();
        $onRest = null;
        $nowOnRest = false;

        if($attendance){
            $onRest = Rest::where('attendance_id',$attendance->id)->whereNull('finish_rest')->first();
            if($onRest){
                $nowOnRest = true;
            }
            $start_work_bool = $attendance->start_work;
            $finish_work_bool = $attendance->finish_work;
        }else{
            $start_work_bool = null;
            $finish_work_bool = null;
        }
        $userName=$user->name;
        return view('index',compact('userName','attendance','nowOnRest','start_work_bool','finish_work_bool'));
    }

    public function stampingStartWork(){
        $this->switchNextDate();

        $user = Auth::user();
        $start_work = Carbon::now();
        $work_date = $start_work->toDateString();

        $attendance = new Attendance();
        $attendance->user_id = $user->id;
        $attendance->work_date = $work_date;
        $attendance->start_work = $start_work;
        $attendance->save();

        return redirect('/');
    }

    public function stampingFinishWork(){
        $user = Auth::user();
        $finish_work = Carbon::now();
        $work_date = $finish_work->toDateString();

        $attendance = Attendance::where('user_id',$user->id)->where('work_date',$work_date)->first();
        $attendance->finish_work = $finish_work;
        $attendance->save();

        return redirect('/');
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

    private function switchNextDate(){
        $user = Auth::user();
        $attendance = Attendance::where('user_id', $user->id)->whereDate('work_date', '<', Carbon::today())->whereNull('finish_work')->first();
        if($attendance){
            $attendance->finish_work = Carbon::today()->subSecond();
            $attendance->save();

            $newAttendance = new Attendance([
                'user_id'=>$user->id,
                'work_date'=>Carbon::today()->toDateString(),
                'start_work'=>Carbon::today(),
            ]);
            $newAttendance->save();
        }
    }
}
