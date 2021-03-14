@extends('layout')


@section('contenido')

@php
$originalDate = $product->bbdate;
$newDate = date("d/m/Y", strtotime($originalDate));
@endphp

<div class="card p-3 m-4 bg-light" style="width: 25rem;">

    <h2 class="card-title">{{$product->name}}</h2>
    <p class="card-body">{{$product->description}}</p>
    <p class="card-text">{{__('Custom.Precio')}} <b>{{$product->price}}€</b> </p>
    <p class="card-text">{{__('Custom.FechaCad')}} <b>{{$newDate}}</b></p>
    <img  class="card-img-top" src="../storage/{{$product->photo}}" alt="No hay imagen">


</div>
@endsection