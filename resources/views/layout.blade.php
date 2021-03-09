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
    <nav class="navbar navbar-default bg-light navbar-expand-md">
        <div class="container-fluid">
            <div class="navbar-header">
        <a class="navbar-brand display-3"  href="{{route('products.index')}}">{{__('custom.Titulo')}}</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a class="nav-link" href="{{route('products.create')}}">{{__('custom.CrearP')}}</a></li>
                <li class="nav-item dropdown pull-right">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Config::get('languages')[App::getLocale()] }}</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                    <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                                @endif
                            @endforeach
                        </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a class="nav-link" href="{{route('profile.show')}}">{{__('custom.Profile')}}</a></li>
                <li ><form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">{{ __('Log Out') }}</a></form>
                </li>
            </ul>
        </div>
    </nav>


    <div class=" pt-3 container">
        @yield('contenido')
    </div>

    <footer class="text-center mt-5">QR 2021</footer>
</body>
</html>
