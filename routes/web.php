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

Route::get('/', 'InicioController@index');

Route::get('noticia','NoticiaController@index')->name('noticia');
Route::get('noticia/completa/{idNoticia}','NoticiaController@detalle')->name('noticia_completa');

Route::get('experiencia','ExperienciaController@index')->name('experiencia');

Route::get('convocatoria','ConvocatoriaController@index')->name('convocatoria');

Route::get('presentacion','PresentacionController@index')->name('presentacion');