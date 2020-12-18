<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoController2;

Route::get('/todos', [TodoController2::class,'index']);
Route::get('/todos/create', [TodoController2::class,'create']);
Route::post('/todos', [TodoController2::class,'store']);
Route::get('/todos/{todo}/edit', [TodoController2::class,'edit']);
Route::patch('/todos/{todo}/update', [TodoController2::class,'update'])->name('todo.update');
//Route::resource('todo', 'TodoController2');
//Route::resource('todos',TodoController2::class);    

//::get('/todos/create', App\Http\Controllers\TodoController2::class,'create);


Route::get('/', function () {
    return view('welcome');
});

//Route::get('/user', 'UserController@index'); 

//Route::get('/user',[UserController::class,'index']);
