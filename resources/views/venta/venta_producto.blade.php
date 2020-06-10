@extends('layouts.app')
@section('content')

        <div>
            <h1 class ="title-display"><strong> Producto </strong></h1>
        </div>
        <div class ="btnSubmit1">
            <a class="btn btn-secondary btn-block" id="btnSubmit1" href="/venta/desplegar">Back</a>
        </div>

    <div class = "table-venta border">
        <table class="table table-dark">
                <tr>
                    <th><span>ID</span></th> 
                    <th><span>Nombre</span></th>
                    <th><span>Precio</span></th>
                    <th><span>Descripcion</span></th>
                    <th><span>Stock</span></th>
                </tr>
                <tr> 
                <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->nombre}} </td>
                    <td>{{$producto->precio}} </td>
                    <td>{{$producto->descripcion}} </td>
                    <td>{{$producto->stock}} </td>
                 </tr>
                </tr>
        </table>
    </div> 

@endsection