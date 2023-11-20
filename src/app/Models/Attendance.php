<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public function getRests(){
        return $this->hasMany('App\Models\Rest');
    }

    public function getUsers(){
        return $this->belongsTo('App\Models\User');
    }
}
