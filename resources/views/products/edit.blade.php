@extends('layout')

@auth
    @section('contenido')
    <h3>Editar producto</h3>
        <form method="POST" action="{{route('products.update',$product->id)}}">
            @method('PUT')
            @include('form')
    @endsection
@endauth

@guest
    @section('contenido')
        <h3>Debe de hacer login para ver esta página</h3>
    @endsection
@endguest