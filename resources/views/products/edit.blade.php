@extends('layout')

@section('contenido')
    <h3>{{__('Custom.EditarP')}}</h3>
    <form method="POST" action="{{route('products.update',$product->id)}}"  enctype="multipart/form-data">
        @php
            $product_es=$product->translate('es');
            $product_en=$product->translate('en');
        @endphp
    @method('PUT')
    @include('form')
@endsection