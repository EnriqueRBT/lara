@extends('layout')

@section('contenido')
    <form method="POST" action="{{route('products.store')}}" name="create"  enctype="multipart/form-data">
    @include('form')
@endsection
