@extends('layout')
@section('contenido')
<h3>Editar producto</h3>
<form action="{{route('products.store')}}" method="post">
    <p><label for="name">Nombre
        <input type="text" name="name" value="{{$product->name}}">
    </label></p>
    <p><label for="description">Descripción
        <input type="text" name="description" value="{{$product->description}}">
    </label></p>
    <p><label for="price">Precio
        <input type="number" name="price" value="{{$product->price}}">
        </label></p>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="submit" value="Enviar">
</form>
@endsection
