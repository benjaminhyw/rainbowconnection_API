<?php

header('Access-Control-Allow-Origin: *');

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


// The following routes were made before I had to come back to fix my API.  They used to be /users and /users/{id}, but I had to change that.  If you go to them however, you'll see that I implemented INFINITE PAGINATION on Laravel.  The second link takes you to the individual user show page, but I didn't implement infinite pagination there because I had to switch back to fixing my API.

// Initially was the main page.  INFINITE PAGINATION functional.
Route::get('/infinite', 'UserController@users');

// Initially each individual's show page.
Route::get('/individual/{id}', 'UserController@user'
);




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

Route::get('{data?}', function()
{
    return View::make('app');
})->where('data', '.*');
