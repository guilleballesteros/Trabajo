<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class belong extends Model
{
    protected $table='belongs';
    protected $fillable=[
        'student_id','enterprice_id','deleted'
    ];
}
