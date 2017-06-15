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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('alumnos/cargar-nota/{id}', 'AlumnosController@cagarNota');
Route::post('alumnos/store-nota', 'AlumnosController@storeNota');

Route::resource('alumnos', 'AlumnosController');

Route::get('becas/ayudantia', 'BecasController@index');
Route::get('becas/ayudantia/{id}', 'BecasController@showAyudantia');
Route::get('becas/cerate-ayudantia', 'BecasController@cerateAyudantia');
Route::post('becas/store-ayudantia', 'BecasController@storeAyudantia');
Route::get('becas/estudio', 'BecasController@indexEstudio');






