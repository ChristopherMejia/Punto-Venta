@extends('layouts.app')
@extends('partials\sidebar')

<link rel="stylesheet" href="/css/estilos.css">


@section('content')

    <div class = "row">
        <div class = "col">
            <h1 class ="title-display"><strong> Clientes </strong> </h1>
        </div>
    </div>

<div class='table-contenedor'>
    <table class = "table table-hover">
        <tr> 
            <th><span>Nombre</span></th>    
            <th><span>Email </span></th>
            <th><span>Telefono </span></th>
            <th><span>Direccion</span></th>
            <th><span>RFC</span></th>
            <th><span>Sexo</span></th>
            <th><span>Acciones</span></th>
        </tr>
        <tr>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->telefono}}</td>
                <td>{{$cliente->direccion}}</td>
                <td>{{$cliente->rfc}}</td>
                <td>{{$cliente->sexo}}</td>
                <td> <a class=" btn btn-outline-primary" href="/cliente/{{$cliente->id}}/edit">Edit</a>
                <a class="btn btn-outline-danger" href="/cliente/{{$cliente->id}}/confirmDelete">Delete</a></td> 
            </tr>
            @endforeach
        </tr>
    </table>
</div>


@endsection

<!--<form action="/empleado/buscar" method="POST">
    <div class="btn">
        <label for="id">Buscar por ID:</label>
        <input type="text" name="id" required>
    </div>
</form> -->