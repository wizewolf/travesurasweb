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

Route::get('/home', 'HomeController@index')->name('home');

//gestion
Route::get('/gestionIndex', ['middleware' => 'auth','uses'=>'GestionIndex@index','as'=>'gestionIndex']);
Route::get('/buscarcliente',[ 'middleware' => 'auth','uses'=>'GestionIndex@buscarCliente','as'=>'buscarcliente']);
Route::post('/cliente', [ 'middleware' => 'auth','uses'=>'GestionIndex@cliente','as'=>'cliente']);
Route::get('/cliente/fotos/{id}', [ 'middleware' => 'auth','uses'=>'GestionIndex@clientegaleria','as'=>'clientefotos']);
Route::get('/descargarfotos', [ 'middleware' => 'auth','uses'=>'GestionIndex@descargarfoto','as'=>'clientefotos']);
Route::get('/descarZip', [ 'middleware' => 'auth','uses'=>'GestionIndex@descargarZip','as'=>'descargarZip']);

//galeria
Route::get('image-gallery', [ 'middleware' => 'auth','uses'=>'ImageGalleryController@index','as'=>'image-gallery']);
Route::post('image-gallery', [ 'middleware' => 'auth','uses'=>'ImageGalleryController@upload','as'=>'guardarfoto']);
Route::delete('image-gallery/{id}', [ 'middleware' => 'auth','uses'=>'ImageGalleryController@destroy','as'=>'borrarfoto']);