@extends('layouts.app')
@extends('partials\sidebar')

<link rel="stylesheet" href="/css/estilos.css">

@section('content')

    <div class = "row">
        <div class = "col">
            <h1 class ="title-display"><strong> Eliminar Empleado </strong> </h1>
        </div>
    </div>
<form action="/empleado/{{$empleado->id}}/confirm" method="POST">
    @csrf
    <div class='table-contenedor'>
        <table class = "table table-hover">
            <tr> 
                <th><span>Nombre</span></th>   
                <th><span>Apellido</span></th> 
                <th><span>Telefono </span></th>
                <th><span>RFC</span></th>
                <th><span>Direccion</span></th>
                <th><span>Email </span></th>
                <th><span>Sexo</span></th>
                <th><span>Puesto</span></th>
            </tr>
            <tr>
                <td>{{$empleado->nombre}}</td>
                <td>{{$empleado->apellido}}</td>
                <td>{{$empleado->telefono}}</td>
                <td>{{$empleado->rfc}}</td>
                <td>{{$empleado->direccion}}</td>
                <td>{{$empleado->email}}</td>
                <td>{{$empleado->sexo}}</td>
                <td>{{$empleado->puesto}}</td>
            </tr>
        </table>
    </div>
    <div class = "divDatos-delete" >
        <button class="btn btn-danger" type="submit" id="boton-delete" >Confirm</button>
    <div>
</form>
@endsection