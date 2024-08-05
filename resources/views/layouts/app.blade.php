<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }} | {{env('APP_NAME')}}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles

</head>
<body class="antialiased">
<div class="w-screen h-dvh flex text-primary-text text-sm leading-relaxed" x-data="{sidebarMenu : true}"
     x-init="sidebarMenu = window.innerWidth < 768 ? false : true"
     x-on:resize.window="sidebarMenu = window.innerWidth > 768;">
    <x-sidebar/>
    <div class="overflow-x-hidden overflow-y-scroll bg-light w-[100vw] md:w-full mx-auto direction-ltr">
        <x-navbar :title="$title ?? 'Page Title'"/>
        <livewire:alert-offline/>
        <main class="w-[100vw] md:w-full px-6 py-6">
            {{ $slot }}
        </main>
    </div>
    <x-toast/>
</div>
@livewireScripts
</body>
</html>

