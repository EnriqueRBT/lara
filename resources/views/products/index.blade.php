@extends('layout')
@section('contenido')
    <table class="table">
        <thead>
            <tr>
                <th>Mombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
      {{-- @php
           $products = DB::table('products')->get();
      @endphp --}}
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
