<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enterprise extends Model
{
    protected $table='enterprises';
    protected $fillable = ['name', 'email','deleted'];

    public function enterprises(){
        return $this->hasMany(belong::class);
    }

       
}
