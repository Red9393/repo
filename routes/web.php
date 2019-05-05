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

Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//-----------------DOCUMENTOS
Route::get('/documentos', 'documentosController@documentos')->name('documentos');
Route::get('/documentosFecha', 'documentosController@documentosFecha')->name('documentos');
Route::get('/mesociclos', 'mesociclosController@index')->name('mesociclos');
Route::get('/entrenamientos', 'entrenamientosController@index')->name('entrenamientos');
Route::get('/alineacion', 'alineacionController@index')->name('alineacion');
Route::get('/datosPersonales', 'datosPersonalesController@index')->name('datosPersonales');
Route::get('/historial', function () {return view('historial');})->name('historial');
