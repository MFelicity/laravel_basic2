@extends('todos.layout')

@section('content')

<div class="flex justify center border-b pb-4">
    <h1 class="text=2*l">All Your Todos</h1>
    <a href="/todos/create" class="mx-5 py-1 px-1 bg-blue-400 cursor-pointer rounded text-white">Create New</a>

</div>

         
          
        <ul class="my-5">
           @include('components.message')
    
           @foreach($todos as $todo)

           <li class="flex justify-between py=2">
                 
              <p>{{$todo->title}}</p>
              <div>
                  
                  <a href="{{'/todos/'.$todo->id.'/edit'}}"  class="text-orange-400 cursor-pointer text-white">
                <span class="fas fa-edit px-2" /></a>
                @if($todo->completed)
                  
                <span class="fas fa-check px-2" />
                @else 
                <span class="fas fa-check text-gray-300 cursor-pointer px-2" /> 
                @endif

              </div> 

           </li>


           @endforeach

        </ul>
 


