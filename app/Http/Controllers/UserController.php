<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
  public function user($id){
    $user = User::find($id);
    return view('user', compact('user'));
  }

  public function users(){
    $users = User::all();
    foreach($users as $user){
      $id = $user->id;

      
      echo $id;
      echo $user->fullname  .  '<br>';

    }
  }
}


