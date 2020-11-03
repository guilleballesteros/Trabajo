<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $table='tasks';
    protected $fillable=[
        'number','description','deleted'
    ];

    public function ces(){
        return $this->hasMany(ce::class);
    }
}
