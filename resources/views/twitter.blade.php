<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased h-full bg-black text-white">

<div class="container mx-auto grid grid-cols-4 h-full">

    {{--        Menu--}}
    <div class="pt-px text-[#d6d9db] space-y-1">
        <a href="#" class="bg-transparent hover:bg-gray-200 hover:bg-opacity-10 rounded-full p-2 flex w-10">
            <x-icons.twitter/>
        </a>

        <x-menu.item route="/timeline" title="Home" icon="home"></x-menu.item>

        <x-menu.item route="/explore" title="Explore" icon="explore"></x-menu.item>

        <x-menu.item route="/notifications" title="Notifications" icon="notifications"></x-menu.item>

        <x-menu.item route="/messages" title="Messages" icon="messages"></x-menu.item>

        <x-menu.item route="/bookmarks" title="Bookmarks" icon="bookmarks"></x-menu.item>

    </div>
    {{--  End menu  --}}

    <div class="col-span-2 border-x-[0.625px] border-[#2f3336]">as</div>
    <div class="">as</div>
</div>

</body>
</html>
