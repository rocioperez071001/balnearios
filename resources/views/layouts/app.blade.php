<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Archivos CSS en orden lógico -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylesheader.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylesbalnearios.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylesservicios.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylescontacto.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <title>@yield('title')</title>
</head>
<body>

    <!-- Header -->
    @include('partials.header')

    <!-- Contenido principal -->
    <main class="main-wrapper">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

</body>
</html>

