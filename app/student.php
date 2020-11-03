<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table='students';    
    protected $fillable = [
        'name', 'firstname','deleted'
    ];
    
    public function assistances(){
        return $this->hasMany(assistance::class);
    }
    public function tast_dones(){
        return $this->hasMany(task_done::class);
    }
    public function belongs(){
        return $this->hasMany(belong::class);
    }
    public function enterprices(){
        return $this->hasManyThrough(entreprice::class,belong::class);
    }
}
