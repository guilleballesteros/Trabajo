<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tutor_e extends Model
{
    protected $table='Tutor_es';
    protected $fillable=[
        'name', 'firstname','email','phone','entrerprise_id','deleted'
    ];

    public function enterprise(){
        return $this->hasMany(enterprises::class);
    }
}
