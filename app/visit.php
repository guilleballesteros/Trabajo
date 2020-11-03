<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visit extends Model
{
    protected $table='ces';
    protected $fillable=[
        'tracing_id','enterprise_id','date','kms','task_id','accepted','deleted'
    ];

    public function enterprise(){
        return $this->belongsTo(enterprise::class,'entreprise_id');
    }
    public function tracing(){
        return $this->belongsTo(tracing::class,'tracing_id');
    }
}
