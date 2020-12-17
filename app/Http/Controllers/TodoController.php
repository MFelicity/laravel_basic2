<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index() 
    {
        $todos=Todo::all();
        return view('todos.index'); 

    }

    public function create() 
    {
        return view('todos.create');
        
    }

    public function store(Request $request) 
    {
        Todo::create($request->all());
        
    }

    public function edit() 
    {
        return view('todos.edit');
        
    }

    public function show($id) 
    {
        $todo= Todo::find($id);
        return view('todos.show')->with('todos', $todo);
        
        
    }
}
