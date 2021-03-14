@extends('layout')


@section('contenido')

<div class="card p-3 m-4" style="width: 25rem;">

    <h2 class="card-title">{{$product->name}}</h2>
    <p class="card-body">{{$product->description}}</p>
    <p class="card-text">Precio por unidad: {{$product->price}}€ </p>
    <p class="card-text">Consumir preferentemente antes del: {{$product->bbdate}}</p>
    <img  class="card-img-top" src="../storage/{{$product->photo}}" alt="No hay imagen">


</div>
@endsection