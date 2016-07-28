<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/', 'DenunciaController@index');

Route::get('/home', function () {
  return redirect('/denuncias');
});

Route::get('/index.php', function () {
  return redirect('/denuncias');
});

Route::get('/denuncias', function () {
    return view('denuncias.denuncia-material');
});

Route::post('/denuncia', 'DenunciaController@store');

Route::delete('/denuncia/{denuncia}', 'DenunciaController@destroy');

Route::get('/denuncia/{denuncia}', 'DenunciaController@get');

Route::get('/denuncia', 'DenunciaController@get');

Route::post('/persona', 'PersonaController@store');

Route::get('/persona', 'PersonaController@get');

