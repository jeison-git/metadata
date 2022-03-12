<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MetaData.test_Instructor</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')
        <!-- Page Heading -->
        <!-- Page Content -->

        <div class="container grid gap-2 py-2 md:grid-cols-5">

            <aside>
                <h1 class="mb-4 text-lg font-bold">Edición de la información del curso</h1>

                <ul class="mb-4 text-sm text-gray-900">
                    <li
                        class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.index', $course) border-blue-500
@else
border-transparent @endif pl-2">
                        <a href="{{ Route('instructor.courses.index', $course) }}"> Todos mis datos o cursos </a>
                    </li>
                    <li
                        class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.edit', $course) border-blue-500
@else
border-transparent @endif pl-2">
                        <a href="{{ Route('instructor.courses.edit', $course) }}">Información del curso</a>
                    </li>

                    <li
                        class="leading-7 mb-1 border-l-4  @routeIs('instructor.courses.objectives', $course) border-blue-500
@else
border-transparent @endif pl-2">
                        <a href="{{ Route('instructor.courses.objectives', $course) }}">Objetivos del curso</a>
                    </li>

                    <li
                        class="leading-7 mb-1 border-l-4  @routeIs('instructor.courses.curriculum', $course) border-blue-500
@else
border-transparent @endif pl-2">
                        <a href="{{ Route('instructor.courses.curriculum', $course) }}">Desarrollo del curso</a>
                    </li>

                    <li
                        class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.goals', $course) border-blue-500
@else
border-transparent @endif pl-2">
                        <a href="{{ Route('instructor.courses.goals', $course) }}">Punto de partida del curso</a>
                    </li>

                    @if ($course->observation){{-- ojo este es el componente Observer --}}
                        <li
                            class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.observation', $course) border-blue-500
@else
border-transparent @endif pl-2">
                            <a href="{{ Route('instructor.courses.observation', $course) }}">Observaciones</a>
                        </li>
                    @endif

                </ul>

                @switch($course->status)
                    @case(1)
                        <form action="{{ route('instructor.courses.status', $course) }}" method="POST">
                            @csrf
                            <button class="btn btn-primary">Solicitar revisión</button>
                        </form>
                    @break

                    @case(2)
                        <div class="font-semibold text-center text-gray-800 card">
                            <div class="card-body">
                                Esta información se encuentra en revisión
                            </div>
                        </div>
                    @break

                    @case(3)
                        <div class="font-semibold text-center text-gray-800 card">
                            <div class="card-body">
                                Esta información se encuentra publicado
                            </div>
                        </div>
                    @break

                    @default
                @endswitch

            </aside>

            <div class="col-span-4 card">
                <main class="text-gray-700 card-body">

                    {{ $slot }}

                </main>

            </div>


        </div>

    </div>

    <!-- footer -->
    <footer class="w-full px-6 bg-white border-t border-gray-100 shadow">
        <div
            class="container flex flex-wrap items-center justify-between max-w-4xl py-6 mx-auto text-sm md:flex-no-wrap">
            &copy;2021. All rights reserved.
            <div class="pt-4 text-xs text-center md:p-0 md:text-right">
                <a href="{{ route('privacy') }}" class="text-black no-underline hover:underline">Privacy Policy</a>
                <a href="{{ route('termms') }}" class="ml-4 text-black no-underline hover:underline">Terms &amp;
                    Conditions</a>
                <a href="{{ route('contact.index') }}" class="ml-4 text-black no-underline hover:underline">Contact
                    Us</a>
            </div>
        </div>
    </footer>
    <!-- /footer -->

    @stack('modals')

    @livewireScripts

    @isset($js)
        {{-- scripts de la vista instructor.courses.edit para el slug esta en public\js... --}}

        {{ $js }}
    @endisset
    <script src="{{ asset('vendor/ckeditor5/ckeditor.js') }}"></script>

</body>

</html>
