<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>MetadaData</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">

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
            <main>
                {{ $slot }}
            </main>
        </div>

        <!-- footer -->
		<footer class="w-full bg-white px-6 border-t border-gray-100 shadow">
			<div class="container mx-auto max-w-4xl py-6 flex flex-wrap md:flex-no-wrap justify-between items-center text-sm">
				&copy;2021. All rights reserved.
				<div class="pt-4 md:p-0 text-center md:text-right text-xs">
					<a href="{{ route('privacy') }}" class="text-black no-underline hover:underline">Privacy Policy</a>
					<a href="{{ route('termms') }}" class="text-black no-underline hover:underline ml-4">Terms &amp; Conditions</a>
					<a href="{{ route('contact.index') }}" class="text-black no-underline hover:underline ml-4">Contact Us</a>
				</div>
			</div>
		</footer>
		<!-- /footer -->

        @stack('modals')

        @livewireScripts

        @isset($js)            
        
            {{$js}} {{--scripts de la vista instructor.courses.edit para el slug esta en public\js\...--}}

        @endisset
    </body>
</html>
