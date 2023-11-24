<?php

namespace App\Http\Controllers;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Carbon\Carbon;


class AttendanceController extends Controller
{
    public function showAttendance(Request $request){
        $date = $request->input('date', Carbon::today()->toDateString());
        $carbonDate = Carbon::parse($date);
        $prevDate = $carbonDate->copy()->subDay()->toDateString();
        $nextDate = $carbonDate->copy()->addDay()->toDateString();

        $attendances = Attendance::with(['rest','user'])->whereDate('work_date',$date)->Paginate(5);
        foreach($attendances as $attendance){
                $count = $attendance->rest->count();
                $index_number = $count - 1;
                $total_rest = 0;
                $total_work = 0;

                for($index=0;$index<=$index_number;$index++){
                    $start_rest = new Carbon($attendance->rest[$index_number]['start_rest']);
                    $finish_rest = new Carbon($attendance->rest[$index_number]['finish_rest']);

                    $rest_time = $start_rest->diffInSeconds($finish_rest);
                    $total_rest += $rest_time;
                }
                $start_work = new Carbon($attendance->start_work);
                $finish_work = new Carbon($attendance->finish_work);

                $work_time = $start_work->diffInSeconds($finish_work);
                $total_work = $work_time - $total_rest;

                $rest_hours = floor($total_rest / 3600);
                $rest_minutes = floor($total_rest / 60 - $rest_hours * 60);
                $rest_seconds = floor($total_rest % 60);

                $work_hours = floor($total_work/3600);
                $work_minutes = floor($total_work / 60 - $work_hours * 60);
                $work_seconds = floor($total_work % 60);

                $attendance->total_rest = sprintf('%02d:%02d:%02d', $rest_hours, $rest_minutes, $rest_seconds);
                $attendance->total_work = sprintf('%02d:%02d:%02d', $work_hours, $work_minutes, $work_seconds);
                $attendance->save();
        }

        return view('attendance',compact('attendances','date','prevDate','nextDate'));
    }
}
