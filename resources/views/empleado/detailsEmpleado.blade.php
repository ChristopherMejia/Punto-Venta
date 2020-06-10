@extends('layouts.app')
@extends('partials\sidebar')

<link rel="stylesheet" href="/css/estilos.css">

@section('content')

<div class = "row">
        <div class = "col">
            <h1 class ="title-display"><strong>Editar Empleado</strong> </h1>
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
            <th>{{$empleado->nombre}}</th>
            <th>{{$empleado->apellido}}</th>
            <th>{{$empleado->telefono}}</th>
            <th>{{$empleado->rfc}}</th>
            <th>{{$empleado->direccion}}</th>
            <th>{{$empleado->email}}</th>
            <th>{{$empleado->sexo}}</th>
            <th>{{$empleado->puesto}}</th>
        </tr>
    </table>
</div>

<form action="/empleado/{{$empleado->id}}" method="POST">
    @csrf
<div class="contenedor">

    <div class ="info">    
        <div class ="divDatos">
            <input type="text" name="nombre" value="{{old('nombre')}}" class= "form-control" required placeholder='Nombre'>        
        </div>                                                
        <div class ="divDatos">
            <input type="text" name="apellido" value="{{old('apellido')}}" class= "form-control" required placeholder="Apellido">
        </div>                
        <div class ="divDatos">
            <input class="form-control" type="text" name="telefono" value="{{old('telefono')}}" required placeholder="Telefono">
        </div>
        <div class ="divDatos">
            <input class="form-control" type="text" name="rfc" value="{{old('rfc')}}" required placeholder="RFC">
        </div>
    </div>

    <div class ="info2">
        <div class ="divDatos">
            <input class="form-control" type="text" name="direccion" value="{{old('direccion')}}" required placeholder="Direccion">
        </div>

        <div class ="divDatos">
            <input class="form-control" type="email" name="email" value="{{old('email')}}" required placeholder="Email">
        </div>
                
        <div class = "divDatos">
            <select class="form-control" name="select">
                <option value="Hombre" selected>Hombre</option> 
                <option value="Mujer">Mujer</option>
            </select>
        </div>

        <div class = "divDatos">
            <select class="form-control" name="slc">
                <option value="Cajero" selected>Cajero</option> 
                <option value="Gerente">Gerente</option>
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