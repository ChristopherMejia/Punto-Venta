@extends('layouts.app')
@extends('partials\sidebar')

<link rel="stylesheet" href="/css/estilos.css">

@section('content')

    <div class = "row">
        <div class = "col">
            <h1 class ="title-display"><strong> Eliminar Producto </strong></h1>
        </div>
    </div>
<form action="/producto/{{$producto->id}}/confirm" method="POST">
    @csrf
    <div class='table-contenedor'>
        <table class = "table table-hover">
            <tr> 
                <th><span>Producto</span></th>
                <th><span>Precio</span></th>
                <th><span>Descripcion</span></th>
                <th><span>Stock</span></th>
            </tr>
            <tr>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->stock}}</td>
            </tr>
        </table>
    </div>
    <div class = "divDatos-delete" >
        <button class="btn btn-danger" type="submit" id="boton-delete" >Confirm</button>
    <div>
</form>
@endsection