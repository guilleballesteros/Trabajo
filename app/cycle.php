<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cycle extends Model
{
    protected $table = 'cycles';
    protected $fillable = ['name', 'grade','year','autor','deleted'];


    public function studies(){
        return $this->hasMany(study::class);
    }

    public function modules(){
        return $this->hasMany(module::class);
    }
}
