@extends('layout')

@section('contenido')
<h3>Editar producto</h3>
    <form method="POST" action="{{route('products.update',$product->id)}}">
        {!!method_field('PUT')!!}
        @csrf
        <p><label for="name">Nombre
            <input type="text" name="name" value="{{$product->name}}">
        </label></p>
        <p><label for="description">Descripción
            <input type="text" name="description" value="{{$product->description}}">
        </label></p>
        <p><label for="price">Precio
            <input type="number" name="price" value="{{$product->price}}">
            </label></p>
            <input type="submit" value="Enviar">
    </form>
@endsection
