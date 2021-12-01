@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
       <div class="card">
          <div class="card-header text-center">
             Modificar producto
          </div>
          <div class="card-body" style="padding:30px">

            <form action="{{ url('/productos/create') }}" method="POST">
                {{method_field('PUT')}}
            @csrf

             <div class="form-group">
                <label for="title">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="{{$producto->nombre}}" class="form-control">
             </div>

             <div class="form-group">
                 <label for="title">Precio</label>
                <input type="number" name="precio" id="precio">
             </div>

             <div class="form-group">
                 <label for="title">Categoría</label>
                <input type="text" name="categoria" id="categoria" value="{{$producto->categoria}}" class="form-control">
             </div>

             <div class="form-group">
                <label for="title">Imagen</label>
               <input type="text" name="imagen" id="imagen" value="{{"https://picsum.photos/200/300/?random"}}" class="form-control">
            </div>

             <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
             </div>

             <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                    Modificar producto
                </button>
             </div>

            </form>

          </div>
       </div>
    </div>
 </div>

@stop
