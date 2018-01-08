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

Route::get('columns', 'ColumnController@getIndex');

Route::get('column/year/{year}', [
  'uses' => 'ColumnController@columnsByYear',
  'as' => 'column.year'
]);

Route::get('column/id/{id}', [
  'uses' => 'ColumnController@getColumn',
  'as' => 'column.id'
  ]);
