@extends('layout')
@section('contenido')
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
      @php
           $products = DB::table('products')->get();
      @endphp
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>
                    <a href="{{route('products.show', $product->id)}}">
                    {{$product->name}}</a>
                </td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>
                <a href="{{route('products.edit', $product->id)}}">Editar</a>
                <a href="{{route('products.destroy', $product->id)}}">Borrar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
