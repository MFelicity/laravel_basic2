@extends('todos.layout')

@section('content')
 <h1 class="text=2*1 border-b pb-4">{{$todo->title}}</h1>
 <div class="flex justify-between border-b pb-4 px-4">
 
 

    <div>
        <h3 class="text-lg">Description</h3>
        <p>{{$todo->description}}</p>
    </div>
  @if($todo->steps->count() > 0)  
    <div class="py-4">
        <h3 class="text-lg">Steps for this task</h3>
    @foreach($todo->steps as $step)
    <p>{{$step->name}}</p>
    @endforeach
    </div>
    @endif
   </div>
    
 <a href="/todos" class="m-6 py-1 px-1 bg-white-400 border cursor-pointer rounded" >Back</a>
 
@endsection
