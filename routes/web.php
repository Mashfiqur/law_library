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

Route::get('home', function () {
    return view('home');
});
Route::get('signup', 'SignupController@show');
Route::post('signup', 'SignupController@signUp');
Route::get('login', 'SignupController@loginForm');
Route::post('login', 'SignupController@login');
 
Route::get('/games', 'GamesController@index');
 
Route::get('/games/create', 'GamesController@create');
 
Route::get('/games/{game}', 'GamesController@show');
 
Route::post('/games', 'GamesController@store');
 
Route::post('/games/{game}/reviews', 'ReviewsController@store');
 
Route::get('register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');
