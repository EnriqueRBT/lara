<nav class="navbar navbar-default bg-light navbar-expand-md">
    <div class="container-fluid">
        <div class="navbar-header">
    <a class="navbar-brand display-3"  href="{{route('products.index')}}">{{__('custom.Titulo')}}</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a class="nav-link" href="{{route('products.create')}}">{{__('custom.CrearP')}}</a></li>
        </ul>
        <ul class="nav navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
                    @endif
                @endforeach
                </div>
        </li>
        </ul>
        <ul class="nav navbar-nav">
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