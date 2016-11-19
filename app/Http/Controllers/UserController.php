<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{

  //This creates a JSON file of all my users
  public function json(){
    $users = User::all();
    return $users;

  }

  public function user($id){
    $user = User::find($id);
    return view('userprofile', compact('user'));
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


