<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    public function connections(){
        return $this->hasMany('App\Connection');
    }
}

// use Illuminate\Notifications\Notifiable;
// use Illuminate\Foundation\Auth\User as Authenticatable;

// class User extends Authenticatable
// {
//     use Notifiable;

//     *
//      * The attributes that are mass assignable.
//      *
//      * @var array
     
//     protected $fillable = [
//         'name', 'favorite_c', 
//     ];

//     /**
//      * The attributes that should be hidden for arrays.
//      *
//      * @var array
//      */
//     protected $hidden = [
//         'password', 'remember_token',
//     ];
// }