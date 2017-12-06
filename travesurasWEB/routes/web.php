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
//login
Route::get('login', ['uses' => 'ApiAuthController@index', 'as' => 'login']);
Route::post('login', ['uses' => 'ApiAuthController@store', 'as' => 'login_store']);
Route::get('register', ['uses' => 'ApiAuthController@getRegister', 'as' => 'getRegister']);
Route::post('register', ['uses' => 'ApiAuthController@setRegister', 'as' => 'register_set']);
Route::get('usuarios', ['middleware' => 'auth', 'uses' => 'ApiAuthController@usuarios', 'as' => 'usuarios']);
Route::get('cerrar-sesion', ['middleware' => 'auth','uses' => 'ApiAuthController@logout', 'as' => 'logout']);
Route::get('userEdit/{id}', ['middleware' => 'auth','before' => 'auth', 'as' => 'userEdit', 'uses' => 'ApiAuthController@userEdit']);
Route::put('setEditUser', ['middleware' => 'auth','before' => 'auth', 'as' => 'setEditUser', 'uses' => 'ApiAuthController@setEditUser']);
//
Route::get('/',['as'=>'travesurashome','uses'=>'TravesurasController@main']);


Route::get('/login1',['as'=>'loginTravesuras','uses'=>'TravesurasController@login']);
Route::get('/home', 'HomeController@index')->name('home');

//gestion
Route::get('/gestionIndex', 'GestionIndex@index')->name('gestionIndex');