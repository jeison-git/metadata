<section>
    <h1 class="text-2xl font-bold">OBJETIVOS GENERALES DEL CURSO</h1>
    <hr class="mt-2 mb-6">

    @foreach ($course->objectives as $item)

        <article class="card mb-4">
            <div class="card-body bg-gray-200">

            @if ($objective->id == $item->id)
                <form wire:submit.prevent="update">
                    <input wire:model="objective.general" class="form-input mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-blue-500 sm:text-sm">
                    
                    @error('objective.general')
                        <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror
                
                </form>
                
            @else
                <header class="flex justify-between">
                    <h1>{{$item->general}}</h1>
                    <div>
                        <i wire:click="edit({{$item}})" class="fas fa-edit text-blue-500 cursor-pointer"></i>
                        <i wire:click="destroy({{$item}})" class="fas fa-trash text-red-500 cursor-pointer"></i>
                    </div>
                </header>
                
            @endif                

            </div>
        </article>
        
    @endforeach

    <article class="card">
        <div class="card-body bg-gray-200">
            <form wire:submit.prevent="store">
                <input wire:model="general" class="form-input mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-blue-500 sm:text-sm" placeholder="Agregar el objetivo general...">
                
                @error('general')
                    <span class="text-xs text-red-500">{{$message}}</span>                    
                @enderror

                <div class="flex justify-end mt-2">
                    <button type="submit" class="btn btn-primary">Agregar objetivo</button>
                </div>
            </form>

        </div>

    </article>
        
</section>

