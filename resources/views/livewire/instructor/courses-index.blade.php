<div class="container py-8">
    <!-- Aca se encuentra la tabla de cursos realizados por el instructor -->
    <x-table-responsive>

        <div class="flex px-6 py-4">
            <input wire:keydown="Limpiar_page" wire:model="search" class="flex-1 border-2 border-gray-400 rounded form-input focus:outline-none" placeholder="Ingrese el titulo de un curso ...">
            <a class="ml-2 btn btn-primary" href="{{route('instructor.courses.create')}}">Añadir nuevos datos</a>
        </div>

        @if ($courses->count())

            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3 text-sm font-bold tracking-wider text-left text-black uppercase">
                    Nombre
                    </th>
                    <th scope="col" class="px-6 py-3 text-sm font-bold tracking-wider text-left text-black uppercase">
                    Estado
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Editar</span>
                    </th>
                </tr>
                </thead>
                    <tbody class="bg-white divide-y divide-gray-300">

                        @foreach ($courses as $course)

                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">

                                    @isset($course->image)
                                        <img class="object-cover object-center w-10 h-10 rounded-full" src="{{Storage::url($course->image->url)}}" alt="">
                                    @else
                                     <img class="object-cover object-center w-10 h-10 rounded-full" src="https://cdn.pixabay.com/photo/2015/12/22/04/00/edit-1103599__340.png" alt="">
                                    @endisset

                                    </div>
                                    <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{$course->title}}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        {{$course->category->name}}
                                    </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">{{-- Estado del curso si es aprobado o no --}}

                                @switch($course->status)
                                    @case(1)
                                        <span class="inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                            Borrador
                                        </span>
                                        @break
                                    @case(2)
                                        <span class="inline-flex px-2 text-xs font-semibold leading-5 text-yellow-800 bg-yellow-100 rounded-full">
                                            Revisión
                                        </span>
                                        @break
                                    @case(3)
                                        <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                            Publicado
                                        </span>
                                    @break
                                    @default

                                @endswitch

                            </td>

                            <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                <a href="{{route('instructor.courses.edit', $course)}}" class="btn btn-primary">Editar</a>
                            </td>
                        </tr>

                        @endforeach
                <!-- More items... links de navegación -->
                    </tbody>
                </table>
                <div class="px-6 py-4 whitespace-nowrap">
                {{$courses->links()}}
            </div>

            @else
            <div class="px-6 py-4">
                No hay coincidencia
            </div>

        @endif

    </x-table-responsive>

</div>
