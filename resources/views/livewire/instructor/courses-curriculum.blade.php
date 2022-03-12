<div>

    <h1 class="text-xl font-bold md:text-2xl">DESARROLLO DEL CURSO</h1>

        <hr class="mt-2 mb-6">{{-- esta es el espacio de separación--}}

        @foreach ($course->sections as $item)

            <article class="mb-6 card" x-data="{open: true}">
                <div class="bg-gray-200 card-body">

                    @if ($section->id == $item->id)

                        <form wire:submit.prevent="update">
                            <input wire:model="section.name"  class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:ring-indigo-500 focus:border-blue-500 sm:text-sm" placeholder="Ingrese el nombre de la unidad">

                            @error('section.name')
                                <span class="text-xs text-red-500">{{$message}}</span>
                             @enderror

                        </form>

                    @else
                        <header class="flex items-center justify-between">
                            <h1 x-on:click="open = !open" class="cursor-pointer"><strong>Unidad: </strong>{{$item->name}}</h1>

                            <div>
                                <i class="text-blue-500 cursor-pointer fas fa-edit" wire:click="edit({{$item}})"></i>
                                <i class="text-red-500 cursor-pointer fas fa-eraser" wire:click="destroy({{$item}})"></i>
                            </div>

                        </header>

                        <div x-show="open">
                            @livewire('instructor.courses-lesson', ['section' => $item], key($item->id))
                        </div>

                    @endif

                </div>

            </article>

        @endforeach

        <div x-data="{open: false}">
            <a x-show="!open" x-on:click="open = true" class="flex items-center mb-4 ml-2 cursor-pointer">
                <i class="mr-2 text-2xl text-red-500 fas fa-plus-square"></i>
                 Agregar nueva unidad
            </a>

            <article class="card" x-show="open">
                <div class="bg-gray-200 card-body">
                    <h1 class="mb-4 text-xl font-bold rounded"> Agregar nueva Unidad </h1>

                    <div class="mb-4">

                        <input wire:model="name" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:ring-indigo-500 focus:border-blue-500 sm:text-sm" placeholder="Escriba el nombre de la sección">

                        @error('name')
                          <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="flex justify-end">
                        <button class= "btn btn-danger" x-on:click="open = false">Cancelar</button>
                        <button class="ml-2 btn btn-primary" wire:click="store">Agregar</button>
                    </div>

                </div>

            </article>
        </div>
</div>
