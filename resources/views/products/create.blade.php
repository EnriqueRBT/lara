@extends('layout')
@section('contenido')

<form action="{{route('products.store')}}" method="post">
    <p><label for="name">Nombre
        <input type="text" name="name">
    </label></p>
    <p><label for="description">Descripción
        <input type="text" name="description">
    </label></p>
    <p><label for="price">Precio
        <input type="number" name="price">
        </label></p>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="submit" value="Enviar">
</form>

@endsection
