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

use weborii\Http\Controllers\ExperienciaController;
use weborii\Http\Controllers\NoticiaController;

//Inicio
Route::get('/', 'InicioController@index')->name('inicio');
//Noticias
Route::get('noticia','NoticiaController@index')->name('noticia');
Route::get('noticia/completa/{idNoticia}','NoticiaController@detalle')->name('noticia_completa');
//Experiencia
Route::get('experiencia','ExperienciaController@index')->name('experiencia');
//Convocatoria
Route::get('convocatoria','ConvocatoriaController@index')->name('convocatoria');
//Presentacion
Route::get('presentacion','PresentacionController@index')->defaults("idPresentacion", "1")->name('presentacion');

//Convenio
Route::get('mapa','convenioController@index')->name('mapa');
//Eventos
Route::get('evento','EventoController@index')->name('evento');
Route::get('evento/completa/{idEvento}','EventoController@detalle')->name('evento_completa');