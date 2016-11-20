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
  return redirect('/users');
});

//This returns a JSON file
Route::get('/users', 'UserController@all');

Route::get('/users/{id}', 'UserController@individual'
);

Route::post('/users', 'RegisterController@create');


// The following routes were made before I had to come back to fix my API.  If you comment out the previous ones and uncomment out the two below, you'll see how I implemented INFINITE PAGINATION on Laravel and the show page for each individual user.


// //This returns a list of all users.  Will act as landing page, before would return welcome view page
// Route::get('/users', 'UserController@users');

// // This one should give me all of the connections associated with a user
// Route::get('/users/{id}', 'UserController@user'
// );




// This code was a tutorial route, left for reference
//
// Route::get('mypage', function(){
//   $data = array(
//     'var1' => 'Hamburger',
//     'var2' => 'Hot Dog',
//     'var3' => 'French Fries',
//     'users' => App\User::all()
//     );

//   return view('mypage', $data);
// });








// The code down below is mostly for reference.

// Route::get('user_name', function() {
//   //This one will be useful for finding specific queries
//   $user = App\User::where('fullname', '=', 'Mochi')->first();
//   echo $user->id;
// });

// //CREATE an item
// Route::post('test', function(){
//   echo "We just created an item";
// });

// //READ an item
// Route::get('test', function(){
//   echo '<form action="test" method="POST">';
//   echo '<input type="submit">';
//   echo '<input type="hidden" value="' . csrf_token() . '" name="_token">';
//   echo '<input type="hidden" name="_method" value="DELETE">';
//   echo '</form>';
// });

// //UPDATE an item
// Route::put('test', function(){
//   echo "We just updated an item";
// });

// //DELETE an item
// Route::delete('test', function(){
//   echo "We just deleted an item";
// });


Auth::routes();

Route::get('/home', 'HomeController@index');
