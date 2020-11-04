<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor_c extends Model
{
    protected $table='tutor_cs';
    protected $fillable=[
        'name', 'firstname','email','phone','cycle_id','deleted'
    ];

    public function tracing(){
        return $this->hasMany(tracings::class);
    }

    public function cycle(){
        return $this->belongsTo(cycle::class,'cycle_id');
    }
}
