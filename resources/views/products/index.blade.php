@extends('layout')
@section('contenido')

    
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
@php
    use App\Models\Product;
    $products = Product::all();
@endphp

@auth
    
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Fecha de Caducidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
      @php
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
                <td><time>{{$product->bbdate}}</time></td>
                <td>
                <a href="{{route('products.edit', $product->id)}}" class="btn btn-outline-primary">Editar</a>
                <form method="POST" class="d-inline" action="{{route('products.destroy', $product->id)}}">
                    {!!method_field('DELETE')!!}
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">Borrar</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endauth

@endsection