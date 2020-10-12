<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Unicrimp</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div id="app">
    <nav id="uninav" class="bg-header section py-4 shadow-lg bg-red-600">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <a class="navbar-brand" href="https://www.unicrimp.com" target="_blank"><img src="{{ asset('/images/unicrimplogo.png') }}" width="200px"></a>

                <!----------------- Right Side Of Navbar ------------------>
                <!--
Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
Read the documentation to get started: https://tailwindui.com/documentation
-->
                @include('layouts.dropdown')

            </div>
        </div>
    </nav>

</body>
</html>



