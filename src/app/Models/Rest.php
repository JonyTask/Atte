<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rest extends Model
{
    public function attendance(){
        return $this->belongsTo(Attendance::class);
    }
}
