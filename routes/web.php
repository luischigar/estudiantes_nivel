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

Route::get('/', function () {
    return view('welcome');
});
Route::post('/nivel','nivelController@guardar')->name('nivel');
Route::get('/nivelventana','nivelController@ventana');
Route::get('nivel/eliminar_modificar','nivelController@listar')->name('nivel_listar');
Route::delete('nivel_eliminar/{id}','nivelController@eliminar')->name('nivel_eliminar');
Route::get('nivel_editar/{id}','nivelController@editar');
Route::put('nivel_actualizar/{id}','nivelController@modificar');

Route::POST('estudiantes','estudiantesController@guardar');
Route::get('/estudiantesventana','estudiantesController@ventana');
Route::get('estudiantes/eliminar_modificar','estudiantesController@listar')->name('estudiantes_listar');

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
