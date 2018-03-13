<?php



Route::get('/' , 'DisciplinaController@index');


Route::resource('/disciplinas' , 'DisciplinaController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
