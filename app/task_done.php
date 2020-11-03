<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task_done extends Model
{
    protected $table='task_dones';
    protected $fillable=[
        'student_id','task_id','mark','deleted'
    ];
    public function task(){
        return $this->belongsTo(task::class,'task_id');
    }
}
