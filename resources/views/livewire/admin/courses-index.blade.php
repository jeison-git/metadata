 <div>
     @if (session('info'))
         <div class="alert alert-primary">
             {{ session('info') }}
         </div>
     @endif

     <div class="card">

         <div class="card-header">
             <input wire:keydown="limpiar_page" wire:model="search" class="form-control w-100"
                 placeholder="Escriba un titulo para buscar ...">
         </div>

         @if ($courses->count())

             <div class="card-body table-responsive">
                 <table class="table table-striped">
                     <thead>
                         <tr>
                             <th>ID</th>
                             <th>Name</th>
                             <th>Categoria</th>
                             <th>Estado</th>
                             <th></th>
                         </tr>
                     </thead>

                     <tbody>
                         @foreach ($courses as $course)
                             <tr>

                                 <td>{{ $course->id }}</td>
                                 <td>{{ $course->title }}</td>
                                 <td>{{ $course->category->name }}</td>
                                 <td class="px-6 py-4 whitespace-nowrap">

                                     @switch($course->status)
                                         @case(1)
                                             <span
                                                 class="inline-flex px-2 text-xs font-semibold leading-5 text-white rounded-full badge badge-warning">
                                                 Borrador
                                             </span>
                                         @break

                                         @case(2)
                                             <span
                                                 class="inline-flex px-2 text-xs font-semibold leading-5 rounded-full badge badge-danger ">
                                                 Revisión
                                             </span>
                                         @break

                                         @case(3)
                                             <span
                                                 class="inline-flex px-2 text-xs font-semibold leading-5 rounded-full badge badge-success">
                                                 Publicado/revisado
                                             </span>
                                         @break

                                         @default
                                     @endswitch

                                 </td>
                                 <td>
                                     <a class="btn btn-primary"
                                         href="{{ route('admin.courses.show', $course) }}">Revisar</a>
                                 </td>

                             </tr>
                         @endforeach
                     </tbody>

                 </table>
             </div>

             <div class="card-footer">{{-- publicar las rutas de paginacion de bootstr /\ php artisan vendor:publish --tag=laravel-pagination --}}
                 {{-- {{$courses->links('vendor.pagination.bootstrap-4')}} --}}
                 {{ $courses->links() }}
             </div>
         @else
             <div class="card-body">
                 <strong>No se encontro el usuario ...</strong>
             </div>

         @endif

     </div>
 </div>
