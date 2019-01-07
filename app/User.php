<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'role_id', 
        'is_active', 
        'photo_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected function role(){
        return $this->belongsTo('App\Role');
    }

    protected function tasks(){
        return $this->hasMany('App\Tasks');
    }

    public function isAdmin(){

        if($this->role->name == "Administrator"){
            return true;
        }

        return false;
    }

}
