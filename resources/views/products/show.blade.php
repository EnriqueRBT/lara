@extends('layout')
@section('contenido')
    <h2>{{$product->name}}</h2>
    <p>{{$product->description}}</p>
    <h5>Precio por unidad: {{$product->price}}€ </h5>
    <h5>Consumir preferentemente antes del: {{$product->bbdate}}</h5>
@endsection
