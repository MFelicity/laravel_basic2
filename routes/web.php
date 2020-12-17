<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoController;

//Route::get('/todos', [TodoController::class,'index']);
Route::get('/todos/create', [TodoController::class,'create']);
//Route::post('/todos/create', [TodoController::class,'store']);
// Route::get('/todos/edit', [TodoController::class,'edit']);

//Route::resource('todo', 'TodoController');
//Route::resource('todos',TodoController::class);    

//::get('/todos/create', App\Http\Controllers\TodoController::class,'create);


//Route::get('/', function () {
    return view('welcome');
//});

//Route::get('/user', 'UserController@index'); 

//Route::get('/user',[UserController::class,'index']);
