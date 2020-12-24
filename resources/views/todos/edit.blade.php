@extends('todos.layout')

@section('content')

     <h1 class="text=2*1 border-b pb-4">Update todo list</h1>
     @include('components.message')
     
<!--<main class="py-4 container">--> 
         <form method ="POST" action ="{{route('todo.update',$todo->id)}}" class="py-5">
             @csrf
             @method('PATCH')
             <div class="py-1">

               <input type="text" name="title" class="py-2 px-2 border rounded" placeholder="Title"/>
           </div>
           <div class="py-1"> 

               <textarea name="description" class="p-2 rounded border" placeholder="Description">{{$todo->description}}</textarea>
           </div> 

           <div class="py-2">
                 
            @livewire('edit-step',['steps' => $todo->steps])

        </div> 
         <div class="py-1">
             <input type="submit" value="Update" class="p-2 border rounded"/>

         </div>

    </form>      
@endsection


         

