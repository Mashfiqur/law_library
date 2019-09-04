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
    return view('home');
});
Route::get('signup', 'SignupController@show');
Route::post('signup', 'SignupController@signUp');
Route::get('login', 'SignupController@loginForm');
Route::post('login', 'SignupController@login');
Route::group(['middleware' => ['customer_auth']], function () {

});

Route::group(['middleware' => ['admin_auth'], 'prefix' => 'admin'], function () {

        Route::get('/home', 'AdminController@index');
        Route::get('/categories', 'AdminController@categories');
        Route::get('/add-category', 'AdminController@addCategory');
        Route::post('/add-category', 'AdminController@postCategory');
        Route::get('/edit-category/{id}', 'AdminController@editCategory');
        Route::post('/update-category/{id}', 'AdminController@updateCategory');
        Route::get('/delete-category/{id}', 'AdminController@deleteCategory');
        Route::get('/logout', 'AdminController@logout');

});
