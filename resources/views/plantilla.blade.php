<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','CHEM')</title>

    <link href="{{ asset('fonts/icomoon/style.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet" type="text/css" >


    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    {{-- <script src="{{ asset('js/require.js')}}"></script>
    <script src="{{ asset('js/requirejs-config.js')}}"></script> --}}
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset(mix('/js/app.js')) }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script defer src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script defer src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/botonFavorite.js') }}"></script>


    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/25299b207e.js" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


    
</head>
{{-- <body class="d-flex flex-column h-screen justify-content-between"> --}}
<body>
@include('partials.nav')
@section('content')
<footer class="text-black-50 text-center py-3 border-top ">
        CHEM | Copyright @ 2022
</footer>
</body>
</html>
