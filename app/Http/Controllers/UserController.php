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
    $users = User::paginate(10);
    
    if ($request->ajax()){
      $view = view('data', compact('users'))->render();
      return response()->json(['html'=>$view]);
    }
    return view('infinite', compact('users'));
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


