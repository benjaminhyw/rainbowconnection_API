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

Route::get('/users/', function () {
    // Should return a list of all users, might be the same as the one above

});

