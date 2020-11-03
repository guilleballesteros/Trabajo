<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tracing extends Model
{
    protected $table='tracings';
    protected $fillable=[
        'type', 'reason','observation','phone','tutor_c_id','deleted'
    ];

    public function Tutor_c(){
        return $this->belongsTo(Tutor_c::class,'tutor_c_id');
    }
}
