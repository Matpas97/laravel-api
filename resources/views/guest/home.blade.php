<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Front Office') }}</title>
    <!-- import google font  qui o in file scss -->
    <!--link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"-->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/front.js') }}" defer></script>
</head>

<body>
    <div id="root"></div>

</body>

</html>
