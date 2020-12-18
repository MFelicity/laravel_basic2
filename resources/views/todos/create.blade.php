@extends('todos.layout')

@section('content')
 <h1 class="text=2*l border-b pb-4">What next you need To-Do</h1>
 @include('components.message')
<!--<main class="py-4 container">--> 
         <form method ="post" action ="/todos/create" class="py-5">
             @csrf

             <input type="text" name="title" class="py-2 px-2 border rounded"/>
             <input type="submit" value="Create" class="p-2 border rounded-lg"/>
        </form>
        <a href="/todos" class="m-5 py-1 px-1 bg-white-400 border cursor-pointer rounded" >Back</a>
@endsection
 