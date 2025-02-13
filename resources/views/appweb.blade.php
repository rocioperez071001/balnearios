<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') ISC-UPFIM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"rel="stylesheet">
{{-- <link rel}}
>
</head>
<body>
    <!-- Incluir Header --->
     @include ('partials.header') //enccabezado 
     <main class="pb-6"> // hacer archivos separados
        @yield('content')
    </main>
    <!-- Incluir footer-->
    @incluide('partials.foother')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>