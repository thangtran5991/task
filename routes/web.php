<?php

use Illuminate\Support\Facades\Route;

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

Route::group([
    'prefix' => 'task',
], function () {
    Route::get('/list', 'TaskController@index')->name('task.list');
    Route::post('list/delete/{id}', 'TaskController@delete')->name('task.delete');
    Route::get('list/{id}', 'TaskController@edit')->name('task.edit');
    Route::post('list/{id}', 'TaskController@update')->name('task.update');
    Route::get('create', 'TaskController@create')->name('task.create');
    Route::post('create', 'TaskController@store')->name('task.store');
});
