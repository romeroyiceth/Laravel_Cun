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

//Rutas del taller
Route::get('/editor', 'EditorController@index');
Route::post('/editor', 'EditorController@store');
Route::get('/editorial/create', 'EditorialController@create');
Route::get('/editorial', 'EditorialController@index');



//Rutas del Parcial

Route::get('/curso', 'CursoController@index');
Route::get('/curso/create', 'CursoController@create');
Route::get('/programa', 'ProgramaController@index');
Route::post('/programa', 'ProgramaController@store');
Route::get('/clase', 'ClaseController@index');

//Rutas Tercer Corte
Route::get('/autor', 'AutorController@index');
Route::post('/autor/crear', 'AutorController@store');
Route::put('/autor/actualizar/{id}', 'AutorController@update');

Route::post('/libro/crear', 'LibroController@store');
Route::put('/libro/actualizar/{id}', 'LibroController@update');


