<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['user_id'];

    public function rest(){
        return $this->hasMany(Rest::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
