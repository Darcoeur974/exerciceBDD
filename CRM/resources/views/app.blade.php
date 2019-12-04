<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale-1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- vuenotify -->

        <link href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <div id="app">
            <layout></layout>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>