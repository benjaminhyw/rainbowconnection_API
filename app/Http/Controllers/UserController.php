<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{

  public function users(){
    $users = User::all();
    return view('users', compact('users'));
  }

  //This creates a JSON file of all my users
  public function json(){
    $users = User::all();
    return $users;
  }

  public function user($id){
    $user = User::find($id);
    return view('userprofile', compact('user'));
  }
  
}


