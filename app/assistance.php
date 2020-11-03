<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assistance extends Model
{
    protected $table='assistances';
    protected $fillable = [
        'student_id', 'date', 'assistance','deleted'
    ];

    public function students(){
        return $this->hasMany(student::class);
    }
}
