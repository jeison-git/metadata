<x-guest-layout>
    {{-- imagen de presentacion y detalles del curso --}}
    <section class="py-12 mb-12 bg-gray-400 shadow-lg">
        <div class="container flex items-center justify-between mb-4">

            <a href="{{ url()->previous() }}" class="flex items-center mr-2 text-base uppercase">
                <img src="https://img.icons8.com/dusk/25/000000/circled-left-2.png" /> Regresar
            </a>

        </div>
        <div class="container grid grid-cols-1 gap-6 lg:grid-cols-2">
            <figure>

                @if ($course->image)
                    <img class="object-fill w-full h-80" src="{{ Storage::url($course->image->url) }}" alt="image">
                @else
                    <img lass="h-60 w-full object-fill"
                        src="https://cdn.pixabay.com/photo/2015/12/22/04/00/edit-1103599__340.png" alt="image">
                @endif

            </figure>
            <div class="text-black">
                <h1 class="text-4xl">{{ $course->title }}</h1>
                <h2 class="mb-3 text-xl">{{ $course->subtitle }}</h2>
                <p class="mb-2"><i class="fas fa-calendar-alt"></i> Fecha de creación:
                    {{ $course->created_at }}
                </p>
                <p class="mb-2"><i class="fas fa-tag"></i> Categoria: {{ $course->category->name }}</p>
                <p class="mb-2"><i class="fas fa-chart-line"></i> Nivel: {{ $course->level->name }}</p>
                <p class="mb-2"><i class="fas fa-dollar-sign"></i> Precio: {{ $course->price->name }}</p>
                <p class="mb-2"><i class="fas fa-eye"></i> Estado: {{ $course->status }} Revisíon</p>
                <p class="mb-2"><i class="fas fa-laptop"></i> Dia disponible para conferencia:
                    {{ $course->day->name }}</p>
                <p class="mb-2"><i class="fas fa-clock"></i> Hora disponible para conferencia:
                    {{ $course->hour }}</p>
            </div>
        </div>
    </section>

    {{-- - seccion del punto de partida, metas y requerimientos del curso --}}
    <div class="container grid grid-cols-1 gap-6 mb-16 lg:grid-cols-3">

        @if (session('info'))
            <div class="lg:col-span-3" x-data="{open: true}" x-show="open">
                <div class="relative px-4 py-3 leading-normal text-red-800 bg-red-200 border border-red-300 rounded-lg"
                    role="alert">
                    <span class="absolute inset-y-0 left-0 flex items-center ml-2">
                        <svg x-on:click="open=false" class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20">
                            <path
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                    </span>
                    <p class="ml-6 text-center">{{ session('info') }}</p>
                </div>
            </div>
        @endif

        <div class="order-2 lg:col-span-2 lg:order-1">

            {{-- seccion de descripcion del curso --}}
            <section class="mt-4 mb-6 card">
                <div class="card-body">
                    <h1 class="flex-1 mb-4 ml-4 text-xl font-bold text-black md:text-3xl"><i class="fa fa-list"></i>
                        Descripción </h1>

                    <div class="flex items-center font-semibold text-justify text-gray-800 card">
                        <div class=" card-body">
                            {!! $course->description !!}
                        </div>
                    </div>

                </div>
            </section>
            {{-- motivaciones y metas --}}
            <section class="mb-8 card">
                <div class="card-body">
                    <h1 class="mb-4 ml-4 text-lg font-bold text-black uppercase md:text-3xl"><i
                            class="fas fa-route"></i>
                        Metas y motivaciones del curso</h1>

                    <ul class="grid grid-cols-1 gap-x-6 gap-y-2">

                        @forelse ($course->goals as $goal)
                            <li class="text-base text-gray-600">

                                <div class="flex items-center font-semibold text-center text-gray-800 card">
                                    <i class="ml-2 mr-2 text-gray-700 fas fa-check"></i>
                                    <div class="capitalize card-body">
                                        {{ $goal->name }}
                                    </div>
                                </div>

                            </li>
                        @empty
                            <li class="text-base text-gray-700"></i>No hay Metas ni motivaciones establecidas :(</li>
                        @endforelse

                    </ul>
                </div>
            </section>
            {{-- requerimientos o conocimientos previos --}}
            <section class="mb-8 card">
                <div class="card-body">
                    <h1 class="mb-4 ml-4 text-lg font-bold text-black uppercase md:text-3xl"><i
                            class="fas fa-glasses"></i>
                        Requisitos Recomendados y conocimientos previos</h1>

                    <ul class="grid grid-cols-1 gap-x-6 gap-y-2">

                        @forelse ($course->requirements as $requirement)
                            <li class="text-base text-gray-600">

                                <div class="flex items-center font-semibold text-center text-gray-800 card">
                                    <i class="ml-2 mr-2 text-gray-700 fas fa-check"></i>
                                    <div class="capitalize card-body">
                                        {{ $requirement->name }}
                                    </div>
                                </div>

                            </li>
                        @empty
                            <li class="text-base text-gray-700"></i>No hay Requerimientos establecidos :( </li>
                        @endforelse

                    </ul>
                </div>
            </section>
            {{-- Audiencia o a quien va dirigido --}}
            <section class="mb-8 card">
                <div class="card-body">
                    <h1 class="mb-4 ml-4 text-lg font-bold text-black uppercase md:text-3xl"><i
                            class="fas fa-users"></i>
                        Este curso esta dirigido a:</h1>

                    <ul class="grid grid-cols-1 gap-x-6 gap-y-2">

                        @forelse ($course->audiences as $audience)
                            <li class="text-base text-gray-600">

                                <div class="flex items-center font-semibold text-center text-gray-800 card">
                                    <i class="ml-2 mr-2 text-gray-700 fas fa-check"></i>
                                    <div class="capitalize card-body">
                                        {{ $audience->name }}
                                    </div>
                                </div>

                            </li>
                        @empty
                            <li class="text-base text-gray-700"></i>No hay Audiencia establecida :( </li>
                        @endforelse

                    </ul>
                </div>
            </section>
            {{-- OBJETIVOS GENRALES --}}
            <section class="mb-8 card">
                <div class="card-body">
                    <h1 class="mb-4 ml-4 text-lg font-bold text-black uppercase md:text-3xl"><i
                            class="fas fa-dot-circle"></i>
                        Objetivos generales</h1>

                    <ul class="grid grid-cols-1 gap-x-6 gap-y-2">

                        @forelse ($course->objectives as $objective)
                            <li class="text-base text-gray-600">

                                <div class="flex items-center font-semibold text-center text-gray-800 card">
                                    <i class="ml-2 mr-2 text-gray-700 fas fa-check"></i>
                                    <div class="capitalize card-body">
                                        {{ $objective->general }}
                                    </div>
                                </div>

                            </li>
                        @empty
                            <li class="text-base text-gray-700"></i>No hay objetivos establecidos :( </li>
                        @endforelse

                    </ul>
                </div>
            </section>
            {{-- OBJETIVOS especificos --}}
            <section class="mb-8 card">
                <div class="card-body">
                    <h1 class="mb-4 ml-4 text-lg font-bold text-black uppercase md:text-3xl"><i
                            class="fas fa-bullseye"></i>
                        Objetivos especifícos</h1>

                    <ul class="grid grid-cols-1 gap-x-6 gap-y-2">

                        @forelse ($course->specific_objectives as $objective)
                            <li class="text-base text-gray-600">

                                <div class="flex items-center font-semibold text-center text-gray-800 card">
                                    <i class="ml-2 mr-2 text-gray-700 fas fa-check"></i>
                                    <div class="capitalize card-body">
                                        {{ $objective->specific }}
                                    </div>
                                </div>

                            </li>
                        @empty
                            <li class="text-base text-gray-700"></i>No hay objetivos especifícos establecido :( </li>
                        @endforelse

                    </ul>
                </div>
            </section>
            {{-- seccin de temas --}}
            <section class="mt-8">
                <h1 class="mb-2 text-3xl font-bold">Temario</h1>

                @forelse ($course->sections as $section)
                    <article class="mb-4 shadow-lg"
                        @if ($loop->first) x-data="{ open: true }"
                        @else
                        x-data="{ open: false }" @endif>

                        <header class="px-4 py-2 bg-gray-400 rounded shadow-lg cursor-pointer" x-on:click="open= !open">
                            <h1 class="text-lg font-bold text-black">{{ $section->name }}</h1>
                        </header>
                        {{-- seccin de lecciones y barras  grises --}}
                        <div class="px-4 py-2 card" x-show="open">
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

        </div>
        <div class="order-1 lg:order-2">
            {{-- targeta para aprobar al curso --}}
            <section class="mb-4 card">
                <div class="card-body">

                    <div class="flex items-center">
                        <img class="object-cover w-12 h-12 rounded-full shadow-lg"
                            src="{{ $course->teacher->profile_photo_url }}" alt="{{ $course->teacher->name }}">
                        <div class="ml-4">
                            <h1 class="text-lg text-gray-600 font-fold">Prof. {{ $course->teacher->name }}</h1>
                            <a class="text-sm font-bold text-blue-400"
                                href="">{{ '@' . Str::slug($course->teacher->name, '') }}</a>
                        </div>
                    </div>


                    @if ($course->status == 2)

                        <form action="{{ route('admin.courses.approved', $course) }}" class="mt-4"
                            method="POST">
                            @csrf
                            <button type="submit" class="w-full btn btn-primary">Aprobar información</button>
                        </form>

                        <a href="{{ route('admin.courses.observation', $course) }}"
                            class="block w-full mt-4 text-center btn btn-danger">Observar y rechazar
                            información</a>

                    @else
                        <button
                            class="block w-full px-4 py-2 mt-4 text-xs font-semibold text-center text-green-700 uppercase bg-transparent border border-green-500 rounded cursor-default hover:bg-green-500 hover:text-white hover:border-transparent">
                            Información revisada
                            y aprovada
                        </button>
                    @endif

                </div>
            </section>

        </div>

    </div>
    <script src="{{ asset('vendor/ckeditor5/ckeditor.js') }}"></script>
</x-guest-layout>
