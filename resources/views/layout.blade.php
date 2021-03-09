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
    <nav class="navbar navbar-expand bg-light">
        <div class="navbar-header">
            <a class="navbar-brand display-3"  href="{{route('products.index')}}">Lara Shop</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('products.create')}}">Crear productos</a>
            </li>
        </ul>
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                    </a>
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('profile.show')}}">{{__('Profile')}}</a>
            </li>
        </ul>

        <ul class="nav nav-tabs navbar-right">
            <li class="nav-item">
                <a class="nav-link bg-aqua-active" href="#" id="english-link">EN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="spanish-link">ES</a>
            </li>
         </ul>
    </nav>

    <div class=" pt-3 container">
        @yield('contenido')
    </div>

    <footer class="text-center mt-5">QR 2021</footer>
</body>
</html>
