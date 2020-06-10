@extends('layouts.app')
@extends('partials\sidebar')

<link rel="stylesheet" href="/css/estilos.css">

@section('content')

    <div class = "row">
        <div class = "col">
            <h1 class ="title-display"><strong> Eliminar Cliente </strong> </h1>
        </div>
    </div>
<form action="/cliente/{{$cliente->id}}/confirm" method="POST">
    @csrf
    <div class='table-contenedor'>
        <table class = "table table-hover">
            <tr> 
                <th><span>Nombre</span></th>    
                <th><span>Email </span></th>
                <th><span>Telefono </span></th>
                <th><span>Direccion</span></th>
                <th><span>RFC</span></th>
                <th><span>Sexo</span></th>
            </tr>
            <tr>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->telefono}}</td>
                <td>{{$cliente->direccion}}</td>
                <td>{{$cliente->rfc}}</td>
                <td>{{$cliente->sexo}}</td>
            </tr>
        </table>
    </div>
    <div class = "divDatos-delete" >
        <button class="btn btn-danger" type="submit" id="boton-delete" >Confirm</button>
    <div>
</form>
@endsection