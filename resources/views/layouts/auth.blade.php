<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }} | {{env('APP_NAME')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>
<body class="antialiased">

<main class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 min-h-dvh w-screen text-primary-text lg:gap-32 xl:gap-40">
    <div class="hidden md:block overflow-hidden relative resize-none bg-primary">
        <div
            class="bg-[url('../images/patterns.svg')] bg-no-repeat bg-contain bg-bottom bg-opacity-0 w-full h-full px-6">
            <div class="pt-32 space-y-2">
                <h1 class="leading-10 text-3xl lg:text-4xl font-bold text-white">Lorem ipsum Dolor<br/>Sit
                    amet <br/>Consectetur
                </h1>
                <p class="text-light leading-relaxed">Lorem ipsum dolor sit.</p>
            </div>
            <span class="block mt-4 w-1/2 h-1 bg-secondary"></span>
            <div class="absolute bottom-16">
                <p class="text-white">© Copyright 2024 | All Rights Reserved</p>
            </div>
        </div>
    </div>
    <div class="col-span-1 lg:col-span-2">
        {{ $slot }}
    </div>
    <x-toast/>
</main>
@livewireScripts
</body>
</html>
