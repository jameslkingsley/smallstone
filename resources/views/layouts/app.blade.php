<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="6D7p5YzEc2S9HzbwH0gnI7xKTuvhn6WRTRc9YKcFTR0">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" type="image/png" href="{{ url('/favicon.png') }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>

    <body class="bg-white text-grey font-sans font-normal">
        <main id="app">
            @yield('content')
        </main>

        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
