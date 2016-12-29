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

Route::get('/', function () {
    return view('inicio');
});

Route::get('solicitud/ingresar', 'FrontController@index')->name('solicitud/ingresar');
Route::get('solicitud/estado', 'FrontController@create')->name('solicitud/estado');	
Route::get('solicitud/respuesta', 'FrontController@edit')->name('solicitud/respuesta');	
Route::get('solicitud/regresar', 'FrontController@show')->name('solicitud/regresar');	
Route::post('solicitud/buscar', 'SolicitudesController@update')->name('solicitud/buscar');	
Route::post('solicitud/nueva', 'SolicitudesController@create')->name('solicitud/nueva');	

Route::resource('login', 'LoginController');
Route::resource('filtros', 'FiltrosController');
Route::resource('solicitudes', 'SolicitudesController');
Route::get('municipios/{id}', 'FiltrosController@getMunicipios');

Route::POST('resultados', 'ResultadosController@index');

