<?php

namespace App\Http\Controllers;
use App\Models\Attendance;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    public function showAttendance(){
        $attendances = Attendance::with('user')->get();
        return view('attendance',compact('attendances'));
    }
}
