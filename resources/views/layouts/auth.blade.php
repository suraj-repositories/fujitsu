<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" class="light"
    data-header-styles="light" data-menu-styles="light" data-toggled="close">

    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Author" content="{{ config('app.name') }}">
    <meta name="Description" content="">
    <meta name="keywords" content="{{ config('app.name') }}, {{ config('app.url') }}">

    <!-- Title-->
    <title> @yield('title') | {{ config('app.name') }} </title>


    <!-- Favicon -->
    <link rel="icon" href="{{ asset('build/assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">

    <!-- Main Theme Js -->
    <script src="{{ asset('build/assets/authentication-main.js') }}"></script>

    <!-- ICONS CSS -->
    <link href="{{ asset('build/assets/icon-fonts/icons.css') }}" rel="stylesheet">

    <!-- APP CSS & APP SCSS -->
    <link rel="preload" as="style" href="{{ asset('build/assets/app-0uaTFK0y.css') }}" />
    <link rel="stylesheet" href="{{ asset('build/assets/app-0uaTFK0y.css') }}" />

    <link rel="stylesheet" href="{{ asset('build/customs/css/styles.css') }}" />

    @routes

    @vite('resources/css/app.css')

</head>

<body class="authenticationcover-background bg-primary-transparent relative" id="particles-js">

    @yield('content')

    <!-- Particles JS -->
    <script src="{{ asset('build/assets/libs/particles.js/particles.js') }}"></script>

    <link rel="modulepreload" href="{{ asset('build/assets/cover-password-BWQnCVcf.js') }}" />
    <script type="module" src="{{ asset('build/assets/cover-password-BWQnCVcf.js') }}"></script>
    <!-- Show Password JS -->
    <script src="{{ asset('build/assets/show-password.js') }}"></script>


</body>

</html>
