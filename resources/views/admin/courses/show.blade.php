<x-app-layout>
    {{-- imagen de presentacion y detalles del curso --}}
    <section class="bg-gray-400 py-12 shadow-lg mb-12">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
            <figure>
                
                @if ($course->image)
                    <img class="h-60 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                @else
                    <img lass="h-60 w-full object-cover" src="https://cdn.pixabay.com/photo/2015/12/22/04/00/edit-1103599__340.png" alt="">
                @endif
                
            </figure>
            <div class="text-black">
                <h1 class="text-4xl">{{$course->title}}</h1>
                <h2 class="text-xl mb-3">{{$course->subtitle}}</h2>
                <p class="mb-2"><i class="fas fa-calendar-alt"></i> Fecha de creación: {{$course->created_at}}</p>
                <p class="mb-2"><i class="fas fa-tag"></i> Categoria: {{$course->category->name}}</p>
                <p class="mb-2"><i class="fas fa-chart-line"></i> Nivel: {{$course->level->name}}</p>
                <p class="mb-2"><i class="fas fa-dollar-sign"></i> Precio: {{$course->price->name}}</p>
                <p class="mb-2"><i class="fas fa-eye"></i> Estado: {{$course->status}} Revisíon</p>                
                <p class="mb-2"><i class="fas fa-laptop"></i> Dia disponible para conferencia: {{$course->day->name}}</p>
                <p class="mb-2"><i class="fas fa-clock"></i> Hora disponible para conferencia: {{$course->hour}}</p>
            </div>
        </div>
    </section>

    {{--- seccion del punto de partida, metas y requerimientos del curso --}}
    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6">
         
        @if (session('info'))
        <div class="lg:col-span-3" x-data="{open: true}" x-show="open">
            <div class="relative px-4 py-3 leading-normal border border-red-300 text-red-800 bg-red-200 rounded-lg" role="alert">                               
                <span class="absolute inset-y-0 left-0 flex items-center ml-2">                    
                  <svg x-on:click="open=false" class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                </span>
                <p class="ml-6 text-center">{{session('info')}}</p>
              </div>
        </div>            
        @endif

        <div class="order-2 lg:col-span-2 lg:order-1">            
            {{--motivaciones y metas--}}
            <section class="card mb-6">
                <div class="card-body">
                    <h1 class="font-bold flex-1 text-xl text-black mb-4 ml-4"><i class="fas fa-route"></i>  Metas y motivaciones del curso </h1>
                    
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2">
                       
                        @forelse ($course->goals as $goal)
                            <li class="text-gray-600 text-base"><i class="fas fa-check text-gray-700 mr-2"></i>{{$goal->name}}</li>                        
                        @empty
                            <li class="text-gray-600 text-base">No hay metas ni motivaciones disponible</li>
                        @endforelse
                        
                    </ul>
                </div>
            </section>
            {{--requerimientos o conocimientos previos--}}
            <section class="card mb-6">
                <div class="card-body">
                    <h1 class="font-bold flex-1 text-xl text-black mb-4 ml-4"><i class="fas fa-glasses"></i>  Requisitos y conocimientos previos </h1>
                    
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2">
                       
                        @forelse ($course->requirements as $requirement)
                            <li class="text-gray-600 text-base"><i class="fas fa-check text-gray-700 mr-2"></i>{{$requirement->name}}</li>                        
                        @empty
                            <li class="text-gray-600 text-base">No hay requerimientos disponible</li>
                        @endforelse
                        
                    </ul>
                </div>
            </section>
            {{--Audiencia o a quien va dirigido--}}
            <section class="card mb-6">
                <div class="card-body">
                    <h1 class="font-bold flex-1 text-xl text-black mb-4 ml-4"><i class="fas fa-users"></i>  Este curso esta dirigido a:  </h1>
                    
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2">
                       
                        @forelse ($course->audiences as $audience)
                            <li class="text-gray-600 text-base"><i class="fas fa-check text-gray-700 mr-2"></i>{{$audience->name}}</li>                        
                        @empty
                            <li class="text-gray-600 text-base">No hay audiencia disponible</li>
                        @endforelse
                        
                    </ul>
                </div>
            </section>
            {{--OBJETIVOS GENRALES--}}
            <section class="card mb-6">
                <div class="card-body">
                    <h1 class="font-bold text-xl text-black mb-4 ml-4"><i class="fas fa-dot-circle"></i>  Objetivos generales</h1>
                    
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2">
                       
                        @forelse ($course->objectives as $objective)
                            <li class="text-gray-600 text-base"><i class="fas fa-check text-gray-700 mr-2"></i>{{$objective->general}}</li>                            
                        @empty
                            <li class="text-gray-700 text-base"></i>No hay objetivos asignadas</li>
                        @endforelse
                        
                    </ul>
                </div>
            </section>
            {{--OBJETIVOS especificos--}}
            <section class="card mb-6">
                <div class="card-body">
                    <h1 class="font-bold text-xl text-black mb-4 ml-4"><i class="fas fa-bullseye"></i>  Objetivos especifícos</h1>
                    
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2">
                       
                        @forelse ($course->specific_objectives as $objective)
                            <li class="text-gray-600 text-base"><i class="fas fa-check text-gray-700 mr-2"></i>{{$objective->specific}}</li>                            
                        @empty
                            <li class="text-gray-700 text-base"></i>No hay objetivos asignadas</li>
                        @endforelse
                        
                    </ul>
                </div>
            </section>
            {{--seccin de temas--}}
            <section class="mt-8">
                <h1 class="font-bold text-3xl mb-2">Temario</h1>

                @forelse ($course->sections as $section)
                    <article class="mb-4 shadow-lg" 

                    @if ($loop->first)
                        x-data="{ open: true }"                        
                        @else
                        x-data="{ open: false }"                        
                    @endif>

                        <header class="bg-gray-400 shadow-lg rounded px-4 py-2 cursor-pointer" x-on:click="open= !open">
                            <h1 class="font-bold text-lg text-black">{{$section->name}}</h1>
                        </header>
                        {{-- seccin de lecciones y barras  grises--}}
                        <div class="card py-2 px-4" x-show="open">
                            <ul class="grid grid-cols-1 gap-2">  
                                                              
                                <div x-show="open">
                                    @livewire('instructor.courses-lesson', ['section' => $section], key($lesson->id))
                                </div>               
                                    
                            </ul>
                        </div>

                        </article>
                        
                        @empty

                        <article class="card">
                            <div class="card-body">
                                No hay secciones asignadas 
                            </div>
                        </article>
                @endforelse
            </section>

            {{--seccion de descripcion del curso--}}
            <section class="mt-8 mb-16">
                <h1 class="font-bold text-3xl">Descripción</h1>
                <div class="text-gray-900 text-base">
                    {!!$course->description!!}
                </div>
            </section>

        </div>
        <div class="order-1 lg:order-2">
             {{-- targeta para aprobar al curso--}}
            <section class="card mb-4">
                <div class="card-body">
                   
                    <div class="flex items-center">
                        <img class="h-12 w-12 object-cover rounded-full shadow-lg" src="{{$course->teacher->profile_photo_url}}" alt="{{$course->teacher->name}}">
                        <div class="ml-4">
                            <h1 class="font-fold text-gray-600 text-lg">Prof. {{$course->teacher->name}}</h1>
                            <a  class="text-blue-400 text-sm font-bold" href="">{{'@' . Str::slug($course->teacher->name, '')}}</a>
                        </div>
                    </div>

                     <form action="{{route('admin.courses.approved', $course)}}" class="mt-4" method="POST">
                         @csrf
                        <button type="submit" class="btn btn-primary w-full">Aprobar curso</button>
                     </form>
                     <a href="{{route('admin.courses.observation', $course)}}"class="btn btn-danger w-full block text-center mt-4">Observar curso</a>
                </div>
            </section>
           
        </div>

    </div>
    <script src="{{asset('vendor/ckeditor5/ckeditor.js')}}"></script>
</x-app-layout>