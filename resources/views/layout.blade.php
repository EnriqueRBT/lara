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
            <a class="nav-link" href="{{route('products.index')}}">Listado de productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('products.create')}}">Crear productos</a>
        </li>
    </ul>
    <form style="display: inline" method="POST" action="{{ route('logout') }}">
        @csrf
        <x-jet-dropdown-link href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                        this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-jet-dropdown-link>
    </form>
</nav>


<div class=" pt-3 container">
    @yield('contenido')
</div>


<footer>QR 2021</footer>
</body>
</html>
