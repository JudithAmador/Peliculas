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

Route::get('/', 'Admin\FileController@inicio');
/*Route::get('buscar/{$tit}/Buscar', 'Admin\FileController@Buscar');*/
Route::get('Play/{id}/editReproductor', 'Admin\FileController@editReproductor');
Auth::routes();

/*Route::get('/admin', 'Admin\HomeController@index')->name('admin.home');

Route::get('/admin/nuevo','Admin\FileController@create')->name('admin.crear');*/

//acceder a todas las vistas
Route::resource('admin', Admin\FileController::class);


