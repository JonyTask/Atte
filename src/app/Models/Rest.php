<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest extends Model
{
    public function belongAttendance(){
        return $this->belongsTo('App\Models\Attendance');
    }
}
