@extends('todos.layout')

@section('content')

     <h1 class="text=2*l border-b pb-4">Update todo list</h1>
     
<!--<main class="py-4 container">--> 
         <form method ="post" action ="{{route('todo.update',$todo->id)}}" class="py-5">
             @csrf
             @method('PATCH')

             <input type="text" name="title"  value="{{$todo->title}}"class="py-2 px-2 border rounded"/>
             <input type="submit" value="Update" class="p-2 border rounded-lg"/>
        </form>
        <a href="/todos" class="m-5 py-1 px-1 bg-white-400 border cursor-pointer rounded" >Back</a>
@endsection


