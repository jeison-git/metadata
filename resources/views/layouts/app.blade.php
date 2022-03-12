<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>MetaData.test</title>

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
		<footer class="w-full px-6 bg-white border-t border-gray-100 shadow">
			<div class="container flex flex-wrap items-center justify-between max-w-4xl py-6 mx-auto text-sm md:flex-no-wrap">
				<div class="flex items-center">
                    &copy;2021.<p class="text-xs">{{ __('All rights reserved') }}.</p>
                </div>

				<div class="pt-4 text-xs text-center md:p-0 md:text-right">
					<a href="{{ route('privacy') }}" class="text-black no-underline hover:underline">{{ __('Privacy Policy') }}</a>
					<a href="{{ route('termms') }}" class="ml-4 text-black no-underline hover:underline">{{ __('Términos y condiciones') }}</a>
					<a href="{{ route('contact.index') }}" class="ml-4 text-black no-underline hover:underline">{{ __('Contact Us') }}</a>
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
