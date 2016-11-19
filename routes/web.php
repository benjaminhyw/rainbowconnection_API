<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    //Main page should return a list of all users on the site, along with their three columns (Full name, favorite color, list of connections)
});

//This returns a list of all users
Route::get('users', function(){
  $users = App\User::all();
  foreach($users as $user){
    echo $user->fullname . '<br>'; 
  };
});

Route::get('/users/{id}', function($id) {
  //This returns information for the user profile we're on
  $user = App\User::find($id);
  echo $user->fullname;
});

Route::get('user_name', function() {
  //This one will be useful for finding specific queries
  $user = App\User::where('fullname', '=', 'Mochi')->first();
  echo $user->id;
});

//CREATE an item
Route::post('test', function(){
  echo "We just created an item";
});

//READ an item
Route::get('test', function(){
  echo '<form action="test" method="POST">';
  echo '<input type="submit">';
  echo '<input type="hidden" value="' . csrf_token() . '" name="_token">';
  echo '<input type="hidden" name="_method" value="DELETE">';
  echo '</form>';
});

//UPDATE an item
Route::put('test', function(){
  echo "We just updated an item";
});

//DELETE an item
Route::delete('test', function(){
  echo "We just deleted an item";
});

