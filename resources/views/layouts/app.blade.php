<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <style>body{visibility: hidden}</style>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- icona  --}}
    <link rel="icon" href="{{asset('deliveboo.png')}}">
    {{-- font awesome --}}
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css' integrity='sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==' crossorigin='anonymous'/>
    <!-- Usando Vite -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">


        @include('includes.header')
    

        <main>
            <div class="container">

                {{-- alert  --}}
                @include('includes.alert')
            </div>

            @yield('content')
        </main>


    </div>

    @yield('scripts')
    @yield('style')

    {{-- script per l'alert che sparisce da solo --}}
    @session('message')
        @vite('resources/js/close_alert.js')
    @endsession
    
</body>

</html>
