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


Route::get('/', 'UserController@home');
Route::get('signup', 'SignupController@show');
Route::post('signup', 'SignupController@signUp');
Route::get('login', 'SignupController@loginForm');
Route::post('login', 'SignupController@login');
Route::get('about', 'UserController@about');
Route::get('search', 'UserController@search');
Route::get('search-results/{search}', 'UserController@searchResult');


Route::group(['middleware' => ['user_auth']], function () {
    Route::get('/cases', 'UserController@index');
    Route::get('/cases/category/{id}', 'UserController@casesByCategory');
    Route::get('/case/{id}', 'UserController@caseShow');
    Route::get('/logout', 'UserController@logout');

});

Route::group(['middleware' => ['admin_auth'], 'prefix' => 'admin'], function () {

        Route::get('/home', 'AdminController@index');


        Route::get('/categories', 'AdminController@categories');
        Route::get('/add-category', 'AdminController@addCategory');
        Route::post('/add-category', 'AdminController@postCategory');
        Route::get('/edit-category/{id}', 'AdminController@editCategory');
        Route::post('/update-category/{id}', 'AdminController@updateCategory');
        Route::get('/delete-category/{id}', 'AdminController@deleteCategory');

        Route::get('/law-cases', 'AdminController@LawCases');
        Route::get('/add-law_case', 'AdminController@addLawCase');
        Route::post('/add-law_case', 'AdminController@postLawCase');
        Route::get('/edit-law_case/{id}', 'AdminController@editLawCase');
        Route::post('/update-law_case/{id}', 'AdminController@updateLawCase');
        Route::get('/delete-law_case/{id}', 'AdminController@deleteLawCase');

        Route::get('/logout', 'AdminController@logout');

});
