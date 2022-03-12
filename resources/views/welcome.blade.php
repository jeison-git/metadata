<x-app-layout>
    <!-- home content -->
    <div class="w-full px-6 py-12 bg-white">
        <div class="container max-w-4xl py-8 pb-10 mx-auto text-center">

            <h3 class="max-w-md mx-auto mb-8 text-xl leading-tight text-center text-gray-900 md:text-3xl">
                Sin ti no podremos impulsar la educación hacia adelante
            </h3>
            <p class="mb-8 text-xl font-semibold text-black">Proporciona soluciones digitales que complementen el
                aprendizaje del alumno.</p>

        </div>

        <div class="container flex flex-wrap items-start max-w-4xl mx-auto text-center md:flex-no-wrap">

            <div class="flex flex-col items-center justify-center w-full px-4 my-4 md:w-1/3">
                <img src="{{ asset('img/home/Contenido01.jpg') }}" class="object-cover w-full h-64 mb-6" />

                <h2 class="mb-2 text-2xl leading-tight">Soluciones digitales</h2>
                <p class="mx-auto mt-3 text-lg leading-normal">Ofrece soluciones Tic, que impulse la enseñanza y el
                    aprendizaje de nuevos contenidos educativos de calidad.</p>
            </div>

            <div class="flex flex-col items-center justify-center w-full px-4 my-4 md:w-1/3">
                <img src="{{ asset('img/home/Contenido02.jpg') }}" class="object-cover w-full h-64 mb-6" />

                <h2 class="mb-2 text-2xl leading-tight">Desde tu espacio de trabajo</h2>
                <p class="mx-auto mt-3 text-lg leading-normal">Es hora de dar un pasó adelante y adaptarse, a la nueva
                    realidad de la educación del siglo XXI.</p>
            </div>

            <div class="flex flex-col items-center justify-center w-full px-4 my-4 md:w-1/3">
                <img src="{{ asset('img/home/Contenido03.jpg') }}" class="object-cover w-full h-64 mb-6" />

                <h2 class="mb-2 text-2xl leading-tight">Mejora tus contenidos educativos</h2>
                <p class="mx-auto mt-3 text-lg leading-normal">Utiliza los beneficios de esta plataforma para crear
                    contenido creativo e innovador en colaboración con expertos.</p>
            </div>

        </div>
    </div>
    <!-- /home content -->

    <!-- about -->
    <div class="w-full px-6 py-12 leading-normal text-left text-gray-800 bg-gray-300">
        <div class="container flex flex-wrap justify-center max-w-4xl mx-auto md:flex-no-wrap">
            <div class="w-full md:w-1-3">
                <h3 class="mb-4 text-3xl leading-tight text-black">
                    Participa activamente.
                </h3>

                <p class="mb-2 text-lg text-justify">Juntos crearemos contenidos educativos orientados a la capacitación
                    y actualización de conocimientos,
                    que proporcionen soluciones digitales que complementen el aprendizaje del alumno.</p>
                <p class="mb-2 text-lg text-center md:text-justify">Necesitamos realizar un esfuerzo conjunto para que la comunidad
                    reconozca que los profesores,
                    en todos los niveles educativos, son los responsables de proporcionar la mayor parte de la docencia
                    en las universidades,
                    y deberían ser reconocidos e incentivados para que sigan dando lo mejor de sí en la noble tarea de
                    la enseñanza.</p>
            </div>
            <div class="w-full pt-10 my-8 md:w-2-3 md:px-6 md:pt-0">
                <img src="{{ asset('img/home/Contenido04.jpg') }}" class="w-full h-auto" />
            </div>

            <a href="{{ route('register') }}" class="px-4 py-2 text-white no-underline bg-black">Registrate y comienza
                a crear contenido</a>

        </div>

    </div>
    <!-- /about -->
</x-app-layout>
