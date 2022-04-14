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

Route::get('todos', 'App\Http\Controllers\TodosController@index')->name('todo_index');
Route::get('todos/{todo}', 'App\Http\Controllers\TodosController@show')->name('todo');
Route::get('create-todo', 'App\Http\Controllers\TodosController@create')->name('create_todo');
Route::post('store-todo', 'App\Http\Controllers\TodosController@store')->name('store_todo');
Route::get('todos/{todo}/edit', 'App\Http\Controllers\TodosController@edit')->name('edit_todo');
Route::post('/update-todo/{todo}', 'App\Http\Controllers\TodosController@update')->name('update_todo');
Route::get('/delete-todo/{todo}', 'App\Http\Controllers\TodosController@delete')->name('delete_todo');
