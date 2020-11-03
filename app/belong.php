<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class belong extends Model
{
    protected $table='belongs';
    protected $fillable=[
        'student_id','enterprice_id','deleted'
    ];
    public function student(){
        return $this->belongsTo(student::class,'student_id');
    }
    public function enterprice(){
        return $this->belongTo(enterprice::class,'enterprice_id');
    }

}
