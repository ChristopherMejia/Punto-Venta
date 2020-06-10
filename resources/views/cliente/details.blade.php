@extends('layouts.app')
@extends('partials\sidebar')

<link rel="stylesheet" href="/css/estilos.css">

@section('content')

<div class = "row">
        <div class = "col">
            <h1 class ="title-display"><strong>Editar Cliente</strong> </h1>
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
        </tr>
        <tr>
            <th>{{$cliente->nombre}}</th>
            <th>{{$cliente->email}}</th>
            <th>{{$cliente->telefono}}</th>
            <th>{{$cliente->direccion}}</th>
            <th>{{$cliente->rfc}}</th>
            <th>{{$cliente->sexo}}</th>
        </tr>
    </table>
</div>

<form action="/cliente/{{$cliente->id}}" method="POST">
    @csrf
<div class="contenedor">

    <div class ="info">    
        <div class ="divDatos">
            <!-- <label for="nombre">Nombre:</label> -->
            <input type="text" name="nombre" value="{{old('nombre')}}" class= "form-control" required placeholder='Nombre'>
        </div>
                                                
        <div class ="divDatos">
            <!-- <label for="email">Email:</label> -->
            <input type="email" name="email" value="{{old('email')}}" class= "form-control" required placeholder='Email'>
        </div>
                
        <div class ="divDatos">
            <!-- <label for="telefono">Telefono:</label> -->
            <input class="form-control" type="text" name="telefono" value="{{old('telefono')}}" required placeholder='Telefono'>
        </div>
    </div>

    <div class ="info2">
        <div class ="divDatos">
            <!-- <label for="direccion">Direccion:</label> -->
            <input class="form-control" type="text" name="direccion" value="{{old('direccion')}}" required placeholder='Direccion'>
        </div>

        <div class ="divDatos">
            <!-- <label for="rfc">RFC:</label> -->
            <input class="form-control" type="text" name="rfc" value="{{old('rfc')}}" required placeholder='RFC'>
        </div>
                
        <div class = "divDatos">
            <!-- <label for="select"> Sexo:</label> -->
            <select class="form-control" name="select">
                <option value="Hombre" selected>Hombre</option> 
                <option value="Mujer">Mujer</option>
            </select>
        </div>
                
        <div class = "divDatos" >
            <!-- <button id="boton" class= "btn btn-primary" type = "submit"  >Submit</button> -->
            <button class="btn btn-primary" type="submit" id="boton">Submit</button>
        </div>

    </div>
</div>
</form>   

@endsection