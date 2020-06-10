@extends('layouts.app')
@extends('partials\sidebar')

<link rel="stylesheet" href="css/estilos.css">

@section('content')

    <div class = "row">
        <div class = "col">
            <h1 class ="title"> <strong> Registrar Producto </strong>  </h1>
        </div>
    </div>

<form action="create/producto" method="POST">
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
                    <label for="precio">Precio:</label>
                    <input type="text" name="precio" value="{{old('precio')}}" class= "form-control" required>
                </div>
                
            </div>
            
            <div class ="info2">
                
                <div class ="divDatos">
                    <label for="descripcion">Descripcion:</label>
                    <input class="form-control" type="text" name="descripcion" value="{{old('descripcion')}}" required>
                </div>

                <div class ="divDatos">
                    <label for="stock">Stock:</label>
                    <input class="form-control" type="number" name="stock" value="{{old('stock')}}" required>
                </div>
                
                
                <div class = "divDatos" >
                    <button id="boton" class= "btn btn-primary" type = "submit"  >Submit</button>
                </div>

            </div>
        </div>
    </div>
</form>

      
@endsection