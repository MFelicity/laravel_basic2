<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades;
use App\Http\Requests\TodoCreateRequest;
//use Illuminate\Http\Requests;
use App\Models\Todo;
use App\Models\Step;
class TodoController2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $todos = auth()->user()->todos()->orderBy('completed')->get();
        
        //return $todos;
        return view('todos.index', compact('todos')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        //Todo::create($request->all());
        // return redirect()->back()->with('message', 'Todo Created Successfully');
        return view('todos.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TodoCreateRequest $request)
    {
        //dd($request->all());
        //$userId = auth()->id();
        //$request['user_id'] = $userId;
        //Todo::create($request->all());
        $todo = auth()->user()->todos()->create($request->all());
        if ($request->step){
            
            foreach ($request->step as $step){
                $todo->steps()->create(['name'=>$step]);
    
    
            }

        }


        return redirect(route ('todo.index'))->with('message', 'Todo Created Successfully!');

    }    

    /*$validator =validator::make($request->all(), $rules, $messages);
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
    public function show(Todo $todo)
    {
    
        return view('todos.show', compact('todo'));
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
        if ($request->stepName){
            
            foreach ($request->stepName as $key=>$value ) {
                $id = $request->stepId[$key];
                if(!$id){
                    $todo->steps()->create(['name'=>$value]);
                }
                else{

                    $step = Step::find($id);
                    $step->update(['name'=>$value]);
                }
            }        
        }
        return redirect(route ('todo.index'))->with('message', 'updated!');
    }

    public function complete(Todo $todo)
    {
        $todo->update(['completed'=>true]);
        return redirect()->back()->with('message', 'Task Marked as completed!');
        
    }


    public function incomplete(Todo $todo)
    {
        $todo->update(['completed'=>false]);
        return redirect()->back()->with('message', 'Task Marked as incompleted!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Todo $todo)
    {
        $todo->steps->each->delete();
        $todo->delete();
        return redirect()->back()->with('message', 'Task Deleted!');

    }
}
