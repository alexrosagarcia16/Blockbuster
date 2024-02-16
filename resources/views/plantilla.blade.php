<html>
    <head>
        <title>
            @yield('titulo')
        </title>
    </head>
<body>
    <nav>
        @include('partials.nav')
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </nav>
    @yield('contenido')
</body>
</html>