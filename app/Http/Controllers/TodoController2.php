<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades;
use App\Http\Requests\TodoCreateRequest;
use Illuminate\Http\Requests;
use App\Models\Todo;
class TodoController2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos=Todo::all();
        //return $todos;
        return view('todos.index', compact('todos')); 

    }


    public function create()
    {
       
        //Todo::create($request->all());
        //return redirect()->back()->with('message', 'Todo Created Successfully');
        return view('todos.create');
    
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  /*public function create()
    {
        return view("todos.create");
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //public function store(TodoCreateRequest $request)
    //{

       /* $rules =[
         //    'title'=>'required|max:255',
         //];
         //$message = [
            'title.max' =>'Todo title should not be greater than 255 chars.',
        ];

    $validator =validator::make($request->all(), $rules, $messages);
    if ($validator->fails()){
        return redirect()->back()
                     ->withErrors($validator)
                     ->withInput();
    }*/
        //$request->validate([
         //   'title'=> 'required',
        //]);
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        // dd($todo->title);
        //$todo= Todo::find($id);
        
        return view('todos.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TodoCreateRequest $request,Todo $todo)
    {
        $todo->update(['title'=>$request->title]);
        return redirect()->back()->with('message', 'updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
