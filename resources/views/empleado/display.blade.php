@extends('layouts.app')
@extends('partials\sidebar')

<link rel="stylesheet" href="/css/estilos.css">

@section('content')

    <div class = "row">
        <div class = "col">
            <h1 class ="title-display"><strong> Empleados </strong> </h1>
        </div>
    </div>

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
            <th><span>Acciones</span></th>
    </tr>
    <tr>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{$empleado->nombre}}</td>
            <td>{{$empleado->apellido}}</td>
            <td>{{$empleado->telefono}}</td>
            <td>{{$empleado->rfc}}</td>
            <td>{{$empleado->direccion}}</td>
            <td>{{$empleado->email}}</td>
            <td>{{$empleado->sexo}}</td>
            <td>{{$empleado->puesto}}</td>
            <td> <a class=" btn btn-outline-primary" href="/empleado/{{$empleado->id}}/edit">Edit</a>
            <a class="btn btn-outline-danger" href="/empleado/{{$empleado->id}}/confirmDelete">Delete</a></td>
        </tr>
        @endforeach
    </tr>
</table>
</div>

@endsection
