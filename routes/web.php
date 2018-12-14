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

Route::get('/todos',[
    'uses' => 'TodosController@index',
    'as' => 'todos'
]);

Route::get('/todos/delete/{id}',[
  'uses' => 'TodosController@delete',
  'as' => 'todos.delete'
]);

Route::get('/todos/update/{id}',[
  'uses' => 'TodosController@update',
  'as' => 'todos.update'
]);

Route::get('/todos/completed/{id}',[
  'uses' => 'TodosController@completed',
  'as' => 'todos.completed'
]);

Route::get('/todos/incomplete/{id}',[
  'uses' => 'TodosController@incomplete',
  'as' => 'todos.incomplete'
]);

Route::post('/todos/save/{id}',[
  'uses' => 'TodosController@save',
  'as' => 'todos.save'
]);

Route::Post('/todos/create',[
  'uses' => 'TodosController@store'//controller name @ name of the method
]);
