<div>
 
    @if(session ()->has('message'))
    
    {{$slot ?? ''}}
    
    <div class = "py-4 px-2 bg-green-400">{{session()->get('message')}}</div>
   
    @elseif(session()->has('error'))
    
    {{$slot ?? ''}}

    <div class ="py-4 px-2 bg-red-300">{{session()->get('error')}}</div>

    @endif


    @if(count($errors) > 0)
    <div class = "py-4 px-2 bg-red-300">
       <ul>

           @foreach($errors ->all() as $error)
    
             <li>{{$errors}}</li>
    
           @endforeach 
        </ul>
    </div>       

@endif



</div> 