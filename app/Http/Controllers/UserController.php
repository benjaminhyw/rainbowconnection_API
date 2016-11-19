<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    public function customer($id){
      $user = User::find($id);
      echo $user->fullname . '<br>';

      foreach($user->connections as $connection){
        $friend_id = $connection->friend_id;
        //This next bit of code is another way to grab data using queries
        $friend = DB::table('users')->where('id', $friend_id)->get();
        echo '<br>' . $friend[0]->fullname  ;
      };
}
