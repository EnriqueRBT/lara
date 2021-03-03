@extends('layout')
@section('contenido')

<form method="POST" action="{{route('products.store')}}" name="create">
    @csrf
    @include('form')

@endsection
