@extends('todos.layout')

@section('content')

 <h2 class="text=2*1 border-b pb-4">What next you need To-Do</h2>
 @include('components.message')
<!--<main class="py-4 container">--> 
         <form method ="POST" action ="/todos" class="py-4">
             @csrf
             <div class="py-1">

                 <input type="text" name="title" class="py-2 px-2 border rounded" placeholder="Title"/>
             </div>
             <div class="py-1">

                 <textarea name="description" class="p-2 rounded border" placeholder="Description"></textarea>
             </div> 

             <div class="py-2">
                 
                    @livewire('step')

                 

             </div> 
              <div class="py-1">
                  <input type="submit" value="Create" class="p-2 border rounded"/>
 
              </div>


        </form>
        <a href="/todos" class="m-5 py-1 px-1 bg-white-400 border cursor-pointer rounded" >Back</a>
@endsection
