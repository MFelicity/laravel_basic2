<div>

    <div class="flex justify-center pb-4 px-4">
        <h3 class="text-lg">Add steps for task</h3>
        <span wire:click="increment" class="fas fa-plus px-2 py-1 cursor-pointer"></span>
       </div>

       @foreach($steps as $step)
       <div class="flex justify-center py-2" wire:key="{{$loop->index}}">
           
                  <input type="text" name="stepName[]" class="py-1 px-2 border rounded" placeholder="{{'Describe step '.($loop->index+1)}}" value="{{$step['id']}}"/>
                  <input type="hidden" name="step-id[]" value="{{$step['name']}}"/>
                  <span class="fas fa-times text-red-400 p-2" wire:click="remove({{$loop->index}})"></span>

       </div>
       @endforeach 
    
</div>
