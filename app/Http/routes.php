<?php
Route::get('home','CursosController@home');
Route::get('principal','CursosController@principal');
Route::get('cursos','CursosController@cursos');
Route::get('subirCurso','CursosController@subirCurso');
Route::post('guardaCurso', 'CursosController@guardaCurso');
Route::post('subirTabla', 'CursosController@subirTabla');
Route::post('subirIcono', 'CursosController@subirIcono');