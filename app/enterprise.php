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

    public function Tutor_e(){
        return $this->belongsTo(Tutor_e::class,'entreprise_id');
    }

    public function visits(){
        return $this->hasMany(visits::class);
    }
}
