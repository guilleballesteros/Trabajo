<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class study extends Model
{
    protected $table='studies';
    protected $fillable=[
        'student_id','cycle_id','deleted'
    ];
    public function student(){
        return $this->belongsTo(student::class,'student_id');
    }
    public function cycle(){
        return $this->belongsTo(cycle::class,'cycle_id');
    }
}

