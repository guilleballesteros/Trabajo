<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tutor_e extends Model
{
    protected $table='Tutor_e';
    protected $fillable=[
        'name', 'firstname','email','phone','entrerprise_id','deleted'
    ];
}
