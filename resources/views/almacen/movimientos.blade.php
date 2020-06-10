@extends('layouts.app')
@extends('partials\sidebar')

<link rel="stylesheet" href="/css/estilos.css">

@section('content')

<div class ="titulo-serch">

    <div class ="serch">
            <input class="form-control" type="text" placeholder ="Buscar">
        </div>
        
        <div class = "title-details">
            <h1 class ="title-display-dev"><strong>Movimientos Almacen</strong> </h1>
        </div>

       
    </div>

    <div class='table-contenedor'>
        <table class = "table table-hover">
            <tr> 
                <th><span>ID</span></th>
                <th><span>ID Documento</span></th>
                <th><span>ID Empleado</span></th>
                <th><span>Tipo</span></th>
                <th><span>Motivo</span></th>
            </tr>
            <tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>Entrada</td>
                    <td>Devolucion</td>
                </tr>
                
            </tr>
        </table>
    </div>

@endsection