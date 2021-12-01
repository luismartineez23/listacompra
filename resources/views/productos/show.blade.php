@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-sm-4">

            <a href="{{ url('/catalog/show/' . $producto->id ) }}">
                <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
            </a>

        </div>
        <div class="col-sm-8">

            <h4>{{$producto->nombre}}</h4>
            <h6>Categoría: {{$producto->categoria}}</h6>
            <p><strong>Estado: </strong>
                    Producto actualmente comprado.
            </p>
            <a class="btn btn-danger" href="#">Pendiente de compra</a>
            <a class="btn btn-warning" href="{{ url('/productos/edit/' . $producto->id ) }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                Editar producto</a>
            <a class="btn btn-outline-info" href="{{ action('App\Http\Controllers\ProductoController@getIndex') }}">Volver al listado</a>
        </div>
    </div>

@stop
