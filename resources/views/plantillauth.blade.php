<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','CHEM')</title>
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/login-register.css') }}" rel="stylesheet" type="text/css" >
    <script src="{{ asset(mix('/js/app.js')) }}" defer></script>
</head>
<body>
<div id="app" class="d-flex flex-column h-screen justify-content-between shadow-sm">
    <header>
        @include('partials.session-status')
    </header>
    <main>
        @yield('content')
    </main>
</div>
</body>
</html>
