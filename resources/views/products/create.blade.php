@extends('layout')
@section('contenido')

<form method="POST" action="{{route('products.store')}}" name="create">
    @csrf
    <p><label for="name">Nombre
        <input type="text" name="name"></label>
    </p>
    <p><label for="description">Descripción
        <textarea rows="4" cols="50" name="description"></textarea></label>
    </p>
    <p><label for="price">Precio
        <input type="number" name="price"></label>
    </p>
    <p><label for="photo">Imagen
        <input type="file" name="photo"></label>
    </p>
        <input type="submit" value="Enviar">
</form>

@endsection
