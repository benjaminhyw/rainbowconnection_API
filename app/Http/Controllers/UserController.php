<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{

  //Pagination for main page
  public function users(Request $request)
  {
    $users = User::paginate(50);
    
    if ($request->ajax()){
      $view = view('data', compact('users'))->render();
      return response()->json(['html'=>$view]);
    }
    return view('users', compact('users'));
  }

  //This creates a JSON file of all my users
  public function all(){
    $users = User::all();
    return $users;
  }

  public function individual($id){
    $user = User::find($id);
    return $user;
  }



  public function user($id){
    $user = User::find($id);
    return view('userprofile', compact('user'));
  }
  
}