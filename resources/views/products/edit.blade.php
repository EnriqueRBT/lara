@extends('layout')

@section('contenido')
    <h3>Editar producto</h3>
    <form method="POST" action="{{route('products.update',$product->id)}}"  enctype="multipart/form-data">
    @method('PUT')
    @include('form')
@endsection