<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enterprise extends Model
{
    protected $table='enterprises';
    protected $fillable = ['name', 'email','deleted'];

    public function belongs(){
        return $this->hasMany(belong::class);
    }
    public function visits(){
        return $this->hasMany(visits::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
}
