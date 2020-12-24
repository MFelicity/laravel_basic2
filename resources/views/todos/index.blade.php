@extends('todos.layout')

@section('content')


      <div class="flex justify-center border-b pb-4">
          <h1 class="text=2*1">All Your Todos</h1>
          <a href="/todos/create" class="mx-5 py-2 text-blue-400 cursor-pointer text-white">Create New</a>
      <span class="fas fa-plus-circle" ></span>   
            {{-- <i class="fas fa-plus-circle"></i> --}}
        

      </div>
      @include('components.message')
      <ul class="my-5">


 @forelse($todos as $todo)

 <li class="flex justify-between p-2">
      <div>
        @include('todos.completeButton')
      </div>

      @if($todo->completed)
      <p class="line-through">{{$todo->title}}</p>
      @else
      <a class="cursor-pointer" href="{{route('todo.show',$todo->id)}}">{{$todo->title}}</a>
      @endif

      <div>
            <a href="{{'/todos/'.$todo->id.'/edit'}}"  class="text-orange-400 text-white">
        
        <span class="fas fa-edit px-2" ></span></a>

        <span class="fas fa-trash text-red-500 px-2 cursor-pointer" onclick="event.preventDefault();
            if(confirm('Are you sure you want to delete?')){
        
               document.getElementById('form-delete-{{ $todo->id }}')
               .submit()
            }"></span>

        <form style="display:none" id="('form-delete-'{{$todo->id}})" method="DELETE" action="{{route('todo.delete',$todo->id)}}">
          @csrf
          
        </form>
        
    
        
  

        


        

      </div> 

   </li>

   @empty

          <p>No task available, create one</p>
   @endforelse
  
  
</ul>

@endsection        
       



          