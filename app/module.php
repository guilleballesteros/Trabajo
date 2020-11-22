<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    protected $table='modules';
    protected $fillable=[
        'name','cycle_id','deleted'
    ];

    public function ras(){
        return $this->hasMany(ra::class);
    }
    public function ces(){
        return $this->hasManyThrough(ce::class,ra::class);
    }
    public function cycle(){
        return $this->belongsTo(cycle::class,'cycle_id');
    }
}

