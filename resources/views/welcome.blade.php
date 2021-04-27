<x-app-layout>
    {{-- portaday Busqueda
    <section class="bg-cover" style="background-image: url({{asset('img/home/home.jpg')}})">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                <div class="w-full text-center md:w-3/4 lg:w-1/2">
                    <h1 class="text-white font-bold text-3xl">Sin ti no podremos impulsar la educación hacia adelante.</h1>
                    <p class="text-black font-semibold text-lg mb-4">Juntos crearemos contenidos educativos orientados a la capacitación y actualización de conocimientos, que proporcionen soluciones digitales que complementen el aprendizaje del alumno.</p>
                </div>
            </div>
    </section>
        {{-- Tabla de contenidos y breve descripcion editar estilo de bordes please
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
        {{-- tabla de  catalogos de cursos 
    <section class="mt-24 bg-gray-400  shadow-lg py-12">
           <h1 class=" text-center text-black text-3xl mb-2">¿Por donde comenzar?</h1>
             <p class="text-center text-black">Después de verificar tu registro solo debes seguir compartiendo tus conocimientos.</p>
            
           {{--  <div class="flex justify-center mt-4">
              <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Catalogo de cursos
              </a>
           </div>
    </section>--}}
    <!-- home content -->
		<div class="w-full px-6 py-12 bg-white">
			<div class="container max-w-4xl mx-auto text-center pb-10 py-8">
				
				<h3 class="text-xl md:text-3xl leading-tight text-center max-w-md mx-auto text-gray-900 mb-8">
					Sin ti no podremos impulsar la educación hacia adelante
				</h3>
                <p class="text-black font-semibold text-xl mb-8">Proporciona soluciones digitales que complementen el aprendizaje del alumno.</p>

			</div>

			<div class="container max-w-4xl mx-auto text-center flex flex-wrap items-start md:flex-no-wrap">
				
				<div class="my-4 w-full md:w-1/3 flex flex-col items-center justify-center px-4">
					<img src="{{asset('img/home/Contenido01.jpg')}}" class="w-full h-64 object-cover mb-6" />

					<h2 class="text-2xl leading-tight mb-2">Soluciones digitales</h2>
					<p class="mt-3 mx-auto text-lg leading-normal">Ofrece soluciones Tic, que impulse la enseñanza y el aprendizaje de nuevos contenidos educativos de calidad.</p>
				</div>
				
				<div class="my-4 w-full md:w-1/3 flex flex-col items-center justify-center px-4">
					<img src="{{asset('img/home/Contenido02.jpg')}}" class="w-full h-64 object-cover mb-6" />

					<h2 class="text-2xl leading-tight mb-2">Desde tu espacio de trabajo</h2>
					<p class="mt-3 mx-auto text-lg leading-normal">Es hora de dar un pasó adelante y adaptarse, a la nueva realidad de la educación del siglo XXI.</p>
				</div>
				
				<div class="my-4 w-full md:w-1/3 flex flex-col items-center justify-center px-4">
					<img src="{{asset('img/home/Contenido03.jpg')}}" class="w-full h-64 object-cover mb-6" />

					<h2 class="text-2xl leading-tight mb-2">Mejora tus contenidos educativos</h2>
					<p class="mt-3 mx-auto text-lg leading-normal">Utiliza los beneficios de esta plataforma para crear contenido creativo e innovador en colaboración con expertos.</p>
				</div>

			</div>
		</div>
		<!-- /home content -->

		<!-- about -->
		<div class="w-full px-6 py-12 text-left bg-gray-300 text-gray-800 leading-normal">
			<div class="container max-w-4xl mx-auto flex justify-center flex-wrap md:flex-no-wrap">
				<div class="w-full md:w-1-3">
					<h3 class="text-3xl mb-4 text-black leading-tight">
						Participa activamente.
					</h3>
					
					<p class="mb-2 text-justify text-lg">Juntos crearemos contenidos educativos orientados a la capacitación y actualización de conocimientos, 
                        que proporcionen soluciones digitales que complementen el aprendizaje del alumno.</p>
					<p class="mb-2 text-justify text-lg">Necesitamos realizar un esfuerzo conjunto para que la comunidad reconozca que los profesores, 
                        en todos los niveles educativos, son los responsables de proporcionar la mayor parte de la docencia en las universidades, 
                        y deberían ser reconocidos e incentivados para que sigan dando lo mejor de sí en la noble tarea de la enseñanza.</p>
				</div>
				<div class="w-full md:w-2-3 pt-10 md:px-6 md:pt-0 my-8">
					<img src="{{asset('img/home/Contenido04.jpg')}}" class="w-full h-auto" />
				</div>                

                <a href="{{ route('register') }}" class="bg-black text-white px-4 py-2 no-underline">Registrate y comienza a crear contenido</a>

			</div>

		</div>
		<!-- /about -->
</x-app-layout>
