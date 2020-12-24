<?php
use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoController2;

//Route::middleware(['auth'])->group(function () {

    Route::get('/todos', [TodoController2::class,'index'])->name('todo.index');
    Route::get('/todos/create', [TodoController2::class,'create']);
    Route::post('/todos', [TodoController2::class,'store']);
    Route::get('/todos/{todo}/edit', [TodoController2::class,'edit']);
    Route::get('/todos/{todo}/show', [TodoController2::class,'show'])->name('todo.show');
    Route::patch('/todos/{todo}/update', [TodoController2::class,'update'])->name('todo.update');
    Route::delete('/todos/{todo}/delete', [TodoController2::class,'delete'])->name('todo.delete');
    Route::put('/todos/{todo}/complete', [TodoController2::class,'complete'])->name('todo.complete');
    Route::delete('/todos/{todo}/incomplete', [TodoController2::class,'incomplete'])->name('todo.incomplete');
    //}); 
        
    //Route::resource('/todos', 'TodoController2');

//::get('/todos/create', App\Http\Controllers\TodoController2::class,'create);


Route::get('/', function () {
    return view('welcome');
});


Route::get('/user', 'UserController@index');
Route::post('/upload',function(Request $request){
    $request->image->store('images','public');
    //dd($request->hasFile('image'));
    return 'uploaded';
}); 


//Route::get('/user', 'UserController@index'); 

//Route::get('/user',[UserController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
