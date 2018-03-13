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

#Route::get('/', function () {
#    return view('welcome');
#});

Route::get('/' , 'DisciplinaController@index');

// # Rotas para criação de disciplina
// Route::get('/disciplinas/create' , 'DisciplinaController@create');
// Route::post('/disciplinas' , 'DisciplinaController@store');

// # Rotas para edição
// Route::get('/discipinas/{disciplina}/edit' , 'DisciplinaController@edit');
// Route::patch('/disciplinas/' , 'DisciplinaController@edit');

Route::resource('/disciplinas' , 'DisciplinaController');