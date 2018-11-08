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
});

 Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::post('/', 'Auth\LoginController@login');
    Route::view('/', 'signin')->middleware('guest')->name('login');
    
Route::get('home', 'UpdateController@index')->name('home');
    Route::get('/updates', 'UpdateController@list');
    Route::post('/updates', 'UpdateController@create');
    Route::get('/updates/suggestions', 'UpdateController@userSuggestions');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
