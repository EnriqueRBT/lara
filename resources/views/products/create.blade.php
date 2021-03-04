@extends('layout')

@auth
    @section('contenido')

        <form method="POST" action="{{route('products.store')}}" name="create">
        @csrf
        @include('form')
    @endsection
@endauth

@guest
    @section('contenido')
        <h3>Debe de hacer login para ver esta página</h3>
    @endsection
@endguest
