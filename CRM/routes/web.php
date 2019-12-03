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

use App\Http\Controllers\AccueilController;

Route::get('/', 'AccueilController@index');


Route::prefix('/api')->group(function () {
    Route::prefix('/clients')->group(function () {
        Route::post('/store', 'ClientsController@add');
        Route::get('/', 'ClientsController@index');
        Route::get('/{id}/projets', 'ProjetsController@getByClients');
    });
    Route::prefix('/projets')->group(function () {
        Route::post('/store', 'ProjetsController@store');
        Route::get('/', 'ProjetsController@index');
    });
});


