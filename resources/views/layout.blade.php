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
 
@include('mynavigationmenu')



    <div class=" pt-3 container">
        @yield('contenido')
    </div>

    <footer class="text-center mt-5">QR 2021</footer>
</body>
</html>
