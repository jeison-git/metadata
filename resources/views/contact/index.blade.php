<x-app-layout>
    <!-- contact -->
		<div class="w-full bg-white">

			<!-- title -->
			<div class="text-center px-6 py-12 mb-6 bg-white border-b">
				<h1 class=" text-xl md:text-4xl pb-4">CONTÁCTANOS</h1>
				<p class="leading-loose text-gray-dark">
					Queremos saber de ti. ¿Tienes alguna duda o quieres comunicarte con nosotros?
				</p>
			</div>
			<!-- /title -->

			<div class="container max-w-4xl mx-auto pb-10 px-12 md:pl-96">

				<div class="flex flex-wrap justify-start items-start -mx-4 ml-12">

					<div class="w-full md:w-1/2 p-4">
						
						<form action="{{route('contact.store')}}" method="POST" autocomplete="off">
                            @csrf
							<fieldset class="mb-4">
								<label class="block text-sm text-gray-dark pb-2">Nombre</label>
								<input class="block w-full border rounded py-2 px-3 text-sm text-gray-700" type="text" name="name" placeholder="¿Como te llamas?"/>
								<br>
                                @error('name')
                                    <p><strong>{{$message}}</strong></p>
                                @enderror
							</fieldset>

							<fieldset class="mb-4">
								<label class="block text-sm text-gray-dark pb-2">Correo</label>
								<input class="block w-full border rounded py-2 px-3 text-sm text-gray-700" type="text" name="email" placeholder="¿Cual es tu email?"/>
                                <br>
                                @error('email')
                                    <p><strong>{{$message}}</strong></p>
                                @enderror
							</fieldset>

							<fieldset class="mb-4">
								<label class="block text-sm text-gray-dark pb-2">Mensaje</label>
								<textarea name="message" class="block w-full border border-red-300er rounded py-2 px-3 text-sm text-gray-700 h-32" placeholder="¿Cual es tu mensaje?"></textarea>
								@error('message')
                                <p><strong>{{$message}}</strong></p>
                                @enderror
                                <br>
							</fieldset>

							<button type="submit" class="text-sm py-2 px-3 bg-black text-white rounded">Enviar mensaje</button>
						</form>

					</div>

				</div>

			</div>

		</div>

        @if (session('info'))
            <script>
                alert("{{session('info')}}");
            </script>             
        @endif
		<!-- /contact -->
		
</x-app-layout>