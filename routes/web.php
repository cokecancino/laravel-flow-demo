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
    return view('index');
});
Route::post('orden', 'FlowController@orden')->name('orden');

Route::post('flow/exito', 'FlowController@exito')->name('flow.exito');
Route::post('flow/fracaso', 'FlowController@fracaso')->name('flow.fracaso');
Route::post('flow/confirmacion', 'FlowController@confirmacion')->name('flow.confirmacion');
