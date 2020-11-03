<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ra extends Model
{
    protected $table='ras';
    protected $fillable=[
        'number','description','module_id','deleted'
    ];
    public function ces(){
        return $this->hasMany(ce::class);
    }
    public function module(){
        return $this->belongsTo(module::class,'module_id');
    }
}
