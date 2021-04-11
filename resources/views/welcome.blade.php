<x-app-layout>
    {{-- portaday Busqueda --}}
    <section class="bg-cover" style="background-image: url({{asset('img/home/home.jpg')}})">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                <div class="w-full text-center md:w-3/4 lg:w-1/2">
                    <h1 class="text-white font-bold text-3xl">Sin ti no podremos impulsar la educación hacia adelante.</h1>
                    <p class="text-black font-semibold text-lg mb-4">Juntos crearemos contenidos educativos orientados a la capacitación y actualización de conocimientos, que proporcionen soluciones digitales que complementen el aprendizaje del alumno.</p>
                </div>
            </div>
    </section>
        {{-- Tabla de contenidos y breve descripcion editar estilo de bordes please--}}
    <section class="mt-24">
        <h1 class=" text-center text-black text-3xl mb-6">CONTENIDO</h1>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

                    <article class="bg-white shadow-lg rounded overflow-hidden">
                        <figure>
                           <img class="h-36 w-full object-cover" src="{{asset('img/home/Contenido01.jpg')}}" alt=""> 
                        </figure>
                        <header class="mt-2 px-2 py-2">
                            <h1 class=" text-center text-xl text-black mb-2 leading-6">Soluciones digitales.</h1>                            
                        </header>                        
                            <p class="text-justify text-gray-600 text-sm mx-4 mb-2">Ofrece soluciones Tic, que impulse la enseñanza y el aprendizaje de nuevos contenidos educativos de calidad.</p>
                    </article>                        
                    
                    <article class="bg-white shadow-lg rounded overflow-hidden">
                        <figure>
                           <img class="h-36 w-full object-cover" src="{{asset('img/home/Contenido02.jpg')}}" alt=""> 
                        </figure>
                        <header class="mt-2 px-2 py-2">
                            <h1 class=" text-center text-xl text-black mb-2 leading-6">Desde tu espacio de trabajo.</h1>                            
                        </header>                        
                            <p class="text-justify text-gray-600 text-sm mx-4 mb-2">Es hora de dar un pasó adelante y adaptarse, a la nueva realidad de la educación del siglo XXI.</p>
                    </article>

                    <article class="bg-white shadow-lg rounded overflow-hidden">
                        <figure>
                           <img class="h-36 w-full object-cover" src="{{asset('img/home/Contenido03.jpg')}}" alt=""> 
                        </figure>
                        <header class="mt-2 px-2 py-2">
                            <h1 class=" text-center text-xl text-black mb-2 leading-6">Mejora tus contenidos educativos</h1>                            
                        </header>                        
                            <p class="text-justify text-gray-600 text-sm mx-4 mb-2">Utiliza los beneficios de esta plataforma para compartir conocimiento y experiencias que complementen, la formación profesional en sus respectivas especialidades. Creando contenido creativo e innovador en colaboración con expertos.</p>
                    </article>

                    <article class="bg-white shadow-lg rounded overflow-hidden">
                        <figure>
                           <img class="h-36 w-full object-cover" src="{{asset('img/home/Contenido04.jpg')}}" alt=""> 
                        </figure>
                        <header class="mt-2 px-2 py-2">
                            <h1 class=" text-center text-xl text-black mb-2 leading-6">Participa activamente.</h1>                            
                        </header>                        
                            <p class="text-justify text-gray-600 text-sm mx-4 mb-2">Necesitamos realizar un esfuerzo conjunto para que la comunidad reconozca que los profesores, en todos los niveles educativos, son los responsables de proporcionar la mayor parte de la docencia en las universidades, y deberían ser por lo menos reconocidos e incentivados para dar lo mejor de sí en la noble tarea de la enseñanza. </p>
                    </article>
            </div>

    </section> 
        {{-- tabla de  catalogos de cursos--}}  
    <section class="mt-24 bg-gray-400  shadow-lg py-12">
           <h1 class=" text-center text-black text-3xl mb-2">¿Por donde comenzar?</h1>
             <p class="text-center text-black">Después de verificar tu registro solo debes seguir compartiendo tus conocimientos.</p>
            
           {{--  <div class="flex justify-center mt-4">
              <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Catalogo de cursos
              </a>
           </div>--}}
    </section>

        {{-- Seccion de ultimos cursos agregados
    <section class="my-24">
        <h1 class="text-center text-3xl text-black mb-2"> Actividaes Recientes</h1>
        <p class="text-center text-gray-600 text-sm mb-6">Refuerza tus Habilidaes de concentracion para que termines tus cursos</p>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

             @foreach ($courses as $course)             
             <x-course-card :course="$course" />                
            @endforeach          
        </div>
    </section>
     --}}

</x-app-layout>
