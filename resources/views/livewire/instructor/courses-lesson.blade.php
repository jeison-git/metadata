<div>
    {{-- Se mostrara la informacion de la lección --}}

    @foreach ($section->lessons as $item)
        <article class="card mt-4" x-data="{open: false}">
            <div class="card-body">

                @if ($lesson->id == $item->id)
                <form wire:submit.prevent="update">

                        <div class="flex items-center">
                            <label class="w-32">Tema: </label>
                            <input wire:model="lesson.name" class="form-input mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-blue-500 sm:text-sm">
                         </div>
                        
                        @error('lesson.name')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror

                        <div wire:ignore wire:model.lazy="contents" class="form-group mt-4">
                            <label class="w-32 mt-2">Desarrollo: </label>

                            <textarea class="form-input mt-1 block w-full py-2 px-3 border focus:border-blue-500"x-data x-init="
                            ClassicEditor.create($refs.myIdentifierHere, {
                                toolbar: [ 'heading', '|', 'bold', 'italic', 'blockQuote', 'insertTable', 'link', 'numberedList', 'bulletedList', '|', 'undo', 'redo' ],
                            } )
                                .then( function(editor){
                                    editor.model.document.on('change:data', () => {
                                    $dispatch('input', editor.getData())
                                    })
                                })                            
                                .catch( error => {
                                    console.error( error );
                                } );
                            " x-ref="myIdentifierHere" wire:key="myIdentifierHere" wire:model="lesson.contents">
                            {!! $contents !!}
                            </textarea>
                            
                        </div>                                                
                            
                        @error('lesson.contents')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror

                        <div class="mt-4 flex justify-end">
                            <button type="button" class="btn btn-danger cursor-pointer" wire:click="cancel">Cancelar</button>
                            <button id="submit" type="submit" class="btn btn-primary ml-2 cursor-pointer">Actualizar</button>
                        </div>
                     
                    </form>
                @else                  
                    <header>
                        <h1 x-on:click="open = !open" class="cursor-pointer"><i class="far fa-play-circle text-blue-500 mr-1"></i>Tema: {{$item->name}}</h1>
                    </header>

                    <div x-show="open">

                        <hr class="my-2">

                            <p class="text-sm">Tema: {{$item->name}}</p>
                            <p class="text-sm">Desarrollo: {!! $item->contents !!} </p>
                       
                        <div class="my-2">
                            <button class="btn btn-primary text-sm" wire:click="edit({{$item}})">Editar</button>
                            <button class="btn btn-danger text-sm" wire:click="destroy({{$item}})">Eliminar</button>
                        </div> 
                        
                    <div class="mb-4">
                            @livewire('instructor.lesson-description', ['lesson' => $item], key('lesson-description-' . $item->id)) {{-- se extendera el componente y  la vista lesson-description--}}
                    </div>

                    <div>
                            @livewire('instructor.lesson-resources', ['lesson' => $item], key('lesson-resources' . $item->id)) {{-- se extendera el componente y  la vista lesson-resources--}}
                    </div>

                    </div>
                @endif 
            </div>
        </article>
               
    @endforeach
        {{--card para agregar y actualizar lecciones y secciones--}}
    <div class="mt-4" x-data="{open: false}">
        <a x-show="!open" x-on:click="open = true" class="flex items-center cursor-pointer mb-4 ml-2">
            <i class="fas fa-plus-square text-2xl text-red-500 mr-2"></i>
             Agregar nuevo Tema
        </a>

        <article class="card" x-show="open">
            <div class="card-body">
                <h1 class="text-xl font-bold rounded mb-4"> Agregar nueva Tema </h1>

                <div class="mb-4">

                    <div class="flex items-center">
                        <label class="w-32">Tema: </label>
                        <input wire:model="name" class="form-input mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    
                    @error('name')
                        <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror

                    <form>
                        
                        <div wire:ignore wire:model.lazy="contents" class="form-group mt-4">
                            <label class="w-32">Desarrollo: </label>

                            <textarea class="form-input mt-1 block w-full py-2 px-3 border focus:border-blue-500" placeholder="Escriba el contenido" x-data x-init="
                            ClassicEditor.create($refs.Ckeditor, {
                                toolbar: [ 'heading', '|', 'bold', 'italic', 'blockQuote', 'insertTable', 'link', 'numberedList', 'bulletedList', '|', 'undo', 'redo' ],
                            } )
                                .then( function(editor){
                                    editor.model.document.on('change:data', () => {
                                    $dispatch('input', editor.getData())
                                    })
                                })                            
                                .catch( error => {
                                    console.error( error );
                                } );
                            " x-ref="Ckeditor" wire:key="Ckeditor" wire:model="contents">
                            {!! $contents !!}
                            </textarea>
                            
                        </div>
                    </form>

                    @error('contents')
                        <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror                     
                
                </div>

                <div class="flex justify-end">
                    <button class= "btn btn-danger" x-on:click="open = false">Cancelar</button>
                    <button class="btn btn-primary ml-2" wire:click="store">Agregar</button>
                </div>

            </div>

        </article>
    </div>
    
    
</div>
