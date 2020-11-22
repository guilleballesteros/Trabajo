<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table="users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','firstname','phone', 'email','email_verified_at', 'password','type','enterprise_id','cycle_id','deleted'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function enterprise(){
        return $this->belongsTo(enterprise::class,'enterprise_id');
    }
    public function belongs(){
        return $this->hasMany(belong::class);
    }
    public function cycle(){
        return $this->belongsTo(cycle::class,'cycle_id');
    }
    public function assistances(){
        return $this->hasMany(assistance::class,'student_id');
    }
    public function task_dones(){
        return $this->hasMany(task_done::class,'student_id');
    }
}
