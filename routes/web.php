<?php
use App\Http\Controllers\Admin\FileController;
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

Route::get('/', 'usuario\FileControllerUs@inicio');
Route::get('buscar/{pelicula}', 'usuario\FileControllerUs@BuscarPeliculas')->name('buscar.pelicula');
Route::get('Consultar/{serie}', 'usuario\FileControllerUs@ConsultarSerie')->name('consultar.serie');
Route::get('ver/{Romace}', 'usuario\FileControllerUs@ConsultarRomance')->name('consultar.romance');
Route::get('visualiza/{Accion}', 'usuario\FileControllerUs@ConsultarAccion')->name('consultar.accion');
Route::get('ir/{Drama}', 'usuario\FileControllerUs@ConsultarDrama')->name('consultar.drama');
//Route::get('buscar/{tit}', 'usuario\FileControllerUs@BuscarPeliculas')->name('buscar.titl');
Route::get('Play/{id}/editReproductor', 'usuario\FileControllerUs@editReproductor');
Auth::routes();

/*Route::get('/admin', 'Admin\HomeController@index')->name('admin.home');

Route::get('/admin/nuevo','Admin\FileController@create')->name('admin.crear');*/

//acceder a todas las vistas
Route::resource('admin', Admin\FileController::class);


