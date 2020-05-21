<?php

use Illuminate\Support\Facades\Route;

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


//RUTA PARA MOSTRAR LA VISTA PRINCIPAL
Route::get('/','RegistroController@index');

//RUTA PARA GUARDAR
Route::resource('/guardar', 'RegistroController');

//ruta per ver registros
Route::get('/Ver','RegistroController@ver');

//RUTA PARA EDITAR
Route::get('/Editar/{id}', 'RegistroController@edit');

//RUTA PARA ACTUALIZAR
Route::put('/Actualizar/{id}', 'RegistroController@update');

//ruta para eliminar
Route::delete('/Eliminar/{id}', 'RegistroController@destroy');