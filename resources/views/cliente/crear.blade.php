@extends('layouts.app')
@extends('partials\sidebar')

<link rel="stylesheet" href="css/estilos.css">

@section('content')

    <div class = "row">
        <div class = "col">
            <h1 class ="title"><strong> Registrar Cliente </strong> </h1>
        </div>
    </div>

<form action="create/client" method="POST">
            @csrf
    <div class ="form-group row">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        <div class="contenedor">

            <div class ="info">    
                <div class ="divDatos">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" value="{{old('nombre')}}" class= "form-control" required>
                </div>
                                                
                <div class ="divDatos">
                    <label for="email">Email:</label>
                    <input type="email" name="email" value="{{old('email')}}" class= "form-control" required>
                </div>
                
                <div class ="divDatos">
                    <label for="telefono">Telefono:</label>
                    <input class="form-control" type="text" name="telefono" value="{{old('telefono')}}" required>
                </div>
            </div>
            
            <div class ="info2">
                <div class ="divDatos">
                    <label for="direccion">Direccion:</label>
                    <input class="form-control" type="text" name="direccion" value="{{old('direccion')}}" required>
                </div>

                <div class ="divDatos">
                    <label for="rfc">RFC:</label>
                    <input class="form-control" type="text" name="rfc" value="{{old('rfc')}}" required>
                </div>
                
                <div class = "divDatos">
                    <label for="select"> Sexo:</label>
                    <select class="form-control" name="select">
                        <option value="Hombre" selected>Hombre</option> 
                        <option value="Mujer">Mujer</option>
                    </select>
                </div>
                
                <div class = "divDatos" >
                    <button id="boton" class= "btn btn-primary" type = "submit"  >Submit</button>
                </div>

            </div>
        </div>
    </div>
</form>

      
@endsection