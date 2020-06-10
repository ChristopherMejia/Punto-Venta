@extends('layouts.app')
@extends('partials\sidebar')

<link rel="stylesheet" href="/css/estilos.css">

@section('content')

    <div class = "row">
        <div class = "col">
            <h1 class ="title-display"><strong> Productos </strong> </h1>
        </div>
    </div>

<div class='table-contenedor'>
<table class = "table table-hover">
    <tr>
        <th><span>ID</span></th> 
        <th><span>Producto</span></th>
        <th><span>Precio</span></th>
        <th><span>Descripcion</span></th>
        <th><span>Stock</span></th>
        <th><span>Acciones</span></th>
    </tr>
    <tr>
        @foreach($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->nombre}} </td>
            <td>{{$producto->precio}} </td>
            <td>{{$producto->descripcion}} </td>
            <td>{{$producto->stock}} </td>
            <td><a class="btn btn-outline-danger" href="/producto/{{$producto->id}}/confirmDelete">Delete</a>
                <a class="btn btn-outline-primary" href="/producto/{{$producto->id}}/edit">Edit</a></td>

        </tr>
        @endforeach
    </tr>
</table>
</div>


@endsection