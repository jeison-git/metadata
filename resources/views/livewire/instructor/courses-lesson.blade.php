<div>
    {{-- Se mostrara la informacion de la lección --}}

    @foreach ($section->lessons as $item)
        <article class="mt-4 card" x-data="{open: false}">
            <div class="card-body">

                @if ($lesson->id == $item->id)
                    <form wire:submit.prevent="update">

                        <div class="flex items-center">
                            <label class="w-32">Tema: </label>
                            <input wire:model="lesson.name"
                                class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:ring-indigo-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        @error('lesson.name')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror

                        <div wire:ignore wire:model.lazy="contents" class="mt-4 form-group">
                            <label class="w-32 mt-2">Desarrollo: </label>

                            <textarea class="block w-full px-3 py-2 mt-1 border form-input focus:border-blue-500" x-data
                                x-init="
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
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror

                        <div class="flex justify-end mt-4">
                            <button type="button" class="cursor-pointer btn btn-danger"
                                wire:click="cancel">Cancelar</button>
                            <button id="submit" type="submit"
                                class="ml-2 cursor-pointer btn btn-primary">Actualizar</button>
                        </div>

                    </form>
                @else
                    <header>
                        <h1 x-on:click="open = !open" class="cursor-pointer"><i
                                class="mr-1 text-blue-500 far fa-play-circle"></i>Tema: {{ $item->name }}</h1>
                    </header>

                    <div x-show="open">

                        <hr class="my-2">

                        <p class="text-sm">Tema: {{ $item->name }}</p>
                        <p class="text-sm">Desarrollo: {!! Str::limit($item->contents) !!} </p>

                        <div class="my-2">
                            <button class="text-sm btn btn-primary"
                                wire:click="edit({{ $item }})">Editar</button>
                            <button class="text-sm btn btn-danger"
                                wire:click="destroy({{ $item }})">Eliminar</button>
                        </div>

                        <div class="mb-4">
                            @livewire('instructor.lesson-description', ['lesson' => $item], key('lesson-description-' .
                            $item->id)) {{-- se extendera el componente y  la vista lesson-description --}}
                        </div>

                        <div>
                            @livewire('instructor.lesson-resources', ['lesson' => $item], key('lesson-resources' .
                            $item->id)) {{-- se extendera el componente y  la vista lesson-resources --}}
                        </div>

                    </div>
                @endif
            </div>
        </article>
    @endforeach
    {{-- card para agregar y actualizar lecciones y secciones --}}
    <div class="mt-4" x-data="{open: false}">
        <a x-show="!open" x-on:click="open = true" class="flex items-center mb-4 ml-2 cursor-pointer">
            <i class="mr-2 text-2xl text-red-500 fas fa-plus-square"></i>
            Agregar nuevo Tema
        </a>

        <article class="card" x-show="open">
            <div class="card-body">
                <h1 class="mb-4 text-xl font-bold rounded"> Agregar nueva Tema </h1>

                <div class="mb-4">

                    <div class="flex items-center">
                        <label class="w-32">Tema: </label>
                        <input wire:model="name"
                            class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:ring-indigo-500 focus:border-blue-500 sm:text-sm">
                    </div>

                    @error('name')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror

                    <form>

                        <div wire:ignore wire:model.lazy="contents" class="mt-4 form-group">
                            <label class="w-32">Desarrollo: </label>

                            <textarea class="block w-full px-3 py-2 mt-1 border form-input focus:border-blue-500"
                                placeholder="Escriba el contenido" x-data x-init="
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
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror

                </div>

                <div class="flex justify-end">
                    <button class="btn btn-danger" x-on:click="open = false">Cancelar</button>
                    <button class="ml-2 btn btn-primary" wire:click="store">Agregar</button>
                </div>

            </div>

        </article>
    </div>


</div>
