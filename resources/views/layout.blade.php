<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Lara's Shop</title>
</head>
<body>
<nav class="navbar navbar-expand navbar-light bg-light">
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/products">Lista de productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/products/create">Crear productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/products/update">Editar producto</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/products/destroy">Eliminar producto</a>
        </li>
    </ul>
</nav>


@yield('contenido')
<footer>QR development 2021</footer>
</body>
</html>
