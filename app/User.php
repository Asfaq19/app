<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function role(){
    //     return $this->belongsTo('App\Role');
    // }

    public function my_role()
    {
        return $this->belongsTo('App\my_role');
    }

    // public function isAdmin(){
    //     if($this->role->name == 'administrator'){
    //         return true;
    //     }
    //     return false;
    // }

    public function functionName_My_Admin(){
        if($this->my_role->name == 'administrator'){
            return true;
        }
        return false;
    }

    public function one()
    {
        return $this->belongsTo('App\one');
    }

    public function one_role(){
        
        if($this->one->name == 'administrator'){
            return true;
        }
        return false;
    }

    public function one_other_role(){
        
        if($this->one->name == 'other'){
            return true;
        }
        return false;
    }
}
