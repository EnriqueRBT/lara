@extends('layout')

@section('contenido')
    
    @if ($message = Session::get('created'))
    
    <div class="alert alert-success">
        <p>{{__('Custom.Created')}}</p>
    </div>
    @elseif ($message = Session::get('updated'))
    <div class="alert alert-warning">
        <p>{{__('Custom.Updated')}}</p>
    </div>
    @elseif ($message = Session::get('deleted'))
    <div class="alert alert-danger">
        <p>{{__('Custom.Deleted')}}</p>
    </div>
    @endif

    @php
        use App\Models\Product;
        $products = Product::all();
    @endphp
 
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>{{__('Custom.Nombre')}}</th>
                <th>{{__('Custom.Descripcion')}}</th>
                <th>{{__('Custom.Precio')}}</th>
                <th>{{__('Custom.FechaCad')}}</th>
                <th>{{__('Custom.Acciones')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>
                    <a href="{{route('products.show', $product->id)}}">
                    {{$product->name}}</a>
                </td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
        @php
            $originalDate = $product->bbdate;
            $newDate = date("d/m/Y", strtotime($originalDate));
        @endphp
                <td><time>{{$newDate}}</time></td>
                <td>
                <a href="{{route('products.edit', $product->id)}}" class="btn btn-outline-primary">{{__('Custom.Editar')}}</a>
                <form method="POST" class="d-inline" action="{{route('products.destroy', $product->id)}}">
                    {!!method_field('DELETE')!!}
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">{{__('Custom.Borrar')}}</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection