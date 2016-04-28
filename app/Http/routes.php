<?php



Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
    Route::get('/','CursosController@principal');
    Route::get('home','CursosController@principal');
    Route::get('principal','CursosController@principal');
    Route::get('cursos','CursosController@cursos');
    Route::get('misCursos','CursosController@misCursos');
    Route::get('subirCurso','CursosController@subirCurso');
    Route::post('guardaCurso', 'CursosController@guardaCurso');
    Route::post('subirTabla', 'CursosController@subirTabla');
    Route::post('subirIcono', 'CursosController@subirIcono');
    Route::resource ('json', 'JsonController');
    Route::get('search/{query}','JsonController@search');
});
